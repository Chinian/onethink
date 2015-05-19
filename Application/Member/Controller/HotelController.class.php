<?php

namespace Member\Controller;

use Think\Controller;



/**
 * 后台主控制器
 */
class HotelController extends Controller {
	protected $productLogic;
	protected $reserveLogic;
	protected $infoLogic;


	public function __construct() {
		parent::__construct();
		
		C('DB_PREFIX', C('DB_PREFIX') . 'hotel_');
		$this->productLogic = D('Product', 'Logic');
		$this->reserveLogic = D('Reserve', 'Logic');
		$this->infoLogic = D('Info', 'Logic');
	}


	/**
	 * 后台主页
	 */
	public function index() {
		if(I('post.')) {
			
			if(I('post.Filename')) {
				//文件上传配置
				$fileConfig = array('maxSize' => 3145728, 'rootPath' => './Public/Hotel/images/toppic/', 'exts' => array('jpg', 'gif', 'png', 'bmp'), 'autoSub' => false, 'replace' => true);
				$upload = new \Think\Upload($fileConfig); //实例化上传类
				

				$res = $upload->upload();
				
				if(!$res) {
					//上传失败
					echo ($upload->getError());
				} else {
					$info = array('status' => '1', 'filepath' => "./Public/Hotel/images/toppic/{$res['Filedata']['savename']}");
					$this->show(json_encode($info, 0));
				}
				exit();
			}
			
			$info = array('name' => I('post.HotelsName'), 'phone' => I('post.PhoneNumber'), 'add' => I('post.Address'), 'des' => I('post.BriefDescription'), 'detail' => I('post.Description'), 'toppic' => I('post.ImgPath'));
			$toppic0 = $this->infoLogic->where()->find()['toppic'];
			if($info['toppic'] != $this->infoLogic->where()->find()['toppic']) {
				unlink($toppic0);
			}
			$this->infoLogic->where(1)->save($info);
			exit();
		}
		$info = $this->infoLogic->where()->find();
		$info['imgpath'] = $info['toppic'];
		
		$this->assign('info', $info);
		$this->display();
	}


	/**
	 * 房间类型
	 */
	public function products() {
		$data = array();
		$product = $this->productLogic->select();
		
		$data['product'] = $product;
		
		$this->assign('data', $data);
		$this->display();
	}


	/**
	 * 房间详情
	 */
	public function productedit() {
		$data = array();
		$id = I('get.id');
		if($id) {
			$product = $this->productLogic->where(array('id' => $id))->find();
			$data['product'] = $product;
			$this->assign('data', $data);
		} elseif(I('post.')) {
			$productData = array('name' => I('post.name'), 'price0' => I('post.price_0'), 'price1' => I('post.price_1'), 'briefdes' => I('post.brief_description'), 'des' => I('post.description'), 'soldout' => I('post.soldout'), 'order' => I('post.order'), 'inputtime' => time());
			if(I('post.id')) {
				$id = I('post.id');
				
				$this->productLogic->where(array('id' => $id))->save($productData);
			} else {
				$this->productLogic->add($productData);
			}
			
			exit();
		}
		
		$this->display();
	}


	/**
	 * 订单管理
	 */
	public function reserve() {
		$data = array();
		$where = array();
		
		if(I('get.')) {
			$key = I('get.Keyword');
			$time = I('get.Time');
			
			if($key) {
				$where['name'] = array('like', '%' . $key . '%');
			}
			
			if($time) {
				$arr = explode(' - ', $time);
				$time0 = strtotime($arr[0]);
				$time1 = strtotime($arr[1]);
				
				$where['inputtime'] = array('between', array($time0, $time1));
			}
		}
		
		$count = $this->reserveLogic->where($where)->count(); // 查询满足要求的总记录数
		$page = new \Think\Page($count, 30); // 实例化分页类 传入总记录数和每页显示的记录数(30)
		$page->setConfig('theme', '%FIRST%  %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
		$page->setConfig('prev', '上一页');
		$page->setConfig('next', '下一页');
		$show = $page->show(); // 分页显示输出
		$data['reserve'] = $this->reserveLogic->where($where)->limit($page->firstRow . ',' . $page->listRows)->select();
		
		foreach($data['reserve'] as $k => $v) {
			$data['reserve'][$k]['pname'] = $this->productLogic->where(array('id' => $data['reserve'][$k]['pid']))->find()['name'];
			
			switch($data['reserve'][$k]['status']) {
				case '0' :
					$data['reserve'][$k]['status'] = '未处理';
					break;
				
				case '1' :
					$data['reserve'][$k]['status'] = '已处理';
					break;
				case '2' :
					$data['reserve'][$k]['status'] = '已完成';
					break;
				case '3' :
					$data['reserve'][$k]['status'] = '已取消';
					break;
			}
		}
		
		$this->assign('page', $show); // 赋值分页输出
		$this->assign('data', $data);
		$this->display();
	}


	public function reserveedit() {
	}


	public function reservedetail() {
		if(I('post.')) {
			if(I('post.LId')) {
				$id = I('post.LId');
				
				$this->reserveLogic->where(array('id' => $id))->save(array('status' => I('post.OrderState')));
			}
			
			exit();
		}
		
		$id = I('get.id');
		
		if($id) {
			$data = array();
			$data['reserve'] = $this->reserveLogic->where(array('id' => $id))->find();
			
			$data['reserve']['pname'] = $this->productLogic->where(array('id' => $data['reserve']['id']))->find()['name'];
			
			$this->assign('data', $data);
			$this->display();
		}
	}
}
