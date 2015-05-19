<?php

namespace Wechat\Controller;

use Think\Controller;



class CarController extends Controller {

	public function __construct()
	{
		parent::__construct();
		C('DB_PREFIX', C('DB_PREFIX') . 'car_');
		

		$configLogic = D('Config', 'Logic');
		$carCateLogic = D('CarCategory', 'Logic');
		
		
		$res = $configLogic->select();

		$config = array();
		//处理配置信息
		foreach($res as $val)
		{
			if('banner_path' == $val['option'])
			{
				$config[$val['action']][$val['option']] = str2arr($val['value'], ';');
				continue;
			}
			$config[$val['action']][$val['option']] = $val['value'];
		}
		$carcate = $carCateLogic->field('id, name')->order(array('order'=>'asc', 'id'))->limit(7)->select();

		$this->assign('config', $config);
		$this->assign('carcate', $carcate);
	}
	

	/**
	 * 微汽车首页
	 * @param void
	 * @return void
	 */
	public function index()
	{
		$newsCateLogic = D('NewsCategory', 'Logic');

		$newscate = $newsCateLogic->field('id, name')->select();


		$this->assign('list', $newscate);
		$this->display();
	}


	/**
	 * 车型
	 * @param void
	 * @return void
	 */
	public function product() {
		$productLogic = D('Products', 'Logic');
		
		$where = array();
		

		$pid = I('get.detail');
		$cid = I('get.cid');
		if($pid) {
			$product = $productLogic->where(array('id' => $pid))->find();
			$this->assign('product', $product);
			$this->display('car_detail');
			exit();
		}
		if($cid) {
			$where['cateid'] = $cid;
		}
		$products = $productLogic->where($where)->field('name, id')->select();

		$this->assign('product', $products);
		$this->display();
	}


	/**
	 * 活动资讯
	 * @param void
	 * @return void
	 */
	public function news() {
		if(IS_GET) {
			$newsLogic = D('News', 'Logic');
			$cid = I('get.cid');
			$nid = I('get.nid');
			if($cid) {
				$news = $newsLogic->where(array('cateid' => $cid))->field('id, title, imgpath, brief_des')->order(array('order'=>'desc', 'id' => 'desc'))->select();

				$this->assign('news', $news);
				$this->display();
			} elseif($nid) {
				$news = $newsLogic->where(array('id' => $nid))->find();

				$this->assign('news', $news);
				$this->display('news_detail');
			}
		}
	}



	/**
	 * 预约试驾
	 * @param void
	 * @return void
	 */
	public function reserve() {

		if(IS_POST) {
			$cate = I('post.cate');
			$action = I('post.do_action');
			if($cate) {
				$productLogic = D('Products', 'Logic');
				$products = $productLogic->where(array('cateid' => $cate))->field('id, name')->select();
				$this->AjaxReturn($products);
			} elseif($action) {
				$reserveLogic = D('Reserve', 'Logic');
				$data = array(
					'name' => I('post.Name'),
					'tel' => I('post.Telephone'),
					'car_cate' => I('post.CarCate'),
					'car_product' => I('post.CarType'),
					'reserve_time' => strtotime(I('post.ReserveDate').' '.I('post.ReserveTimeHour').':'.I('post.ReserveTimeMinute')),
					'remark' => I('post.Contents'),
					'input_time' => time()
				);
				$res = $reserveLogic->add($data);
				if($res) {
					$inputValue = I('post.InputValue');
					$reserveCustomLogic = D('ReserveCustom', 'Logic');
					$custom = array();
					foreach($inputValue as $k => $v) {
						$custom[] = array('rid' => $res, 'cid' =>(string)$k, 'value' =>$v);
					}
					if($reserveCustomLogic->addAll($custom)) {
						$this->AjaxReturn(array('ret' => 1));
					}
				}
			}
			exit();
		}
		$customConfigLogic = D('ReserveConfig', 'Logic');//自定义表单选项

		$custom = $customConfigLogic->select();
		foreach($custom as $key => $val) {
			if('select' == $val['type']) {
				$val['option'] = str2arr($val['placeholder'], '|');
				$custom[$key] = $val;
			}
		}


		$this->assign('custom', $custom);

		$this->display();
	}


	/**
	 * 车主关怀
	 * @param void
	 * @return void
	 */
	public function owner() {
		$configTextLogic = D('ConfigText', 'Logic');
		$config = $configTextLogic->where(array('option' => 'owner'))->find();

		$this->assign('owner', $config['value']);
		$this->display();
	}


	/**
	 * 关于我们
	 * @param void
	 * @return void
	 */
	public function about() {
		$configTextLogic = D('ConfigText', 'Logic');
		$config = $configTextLogic->where(array('option' => 'about'))->find();

		$this->assign('about', $config['value']);
		$this->display();
	}


	/**
	 * 实用工具
	 * @param void
	 * @return void
	 */
	public function tools() {
		$pluginLogic = D('Plugin', 'Logic');
		$plugin = $pluginLogic->where(array('status' => 1))->select();

		$this->assign('tools', $plugin);
		$this->display();
	}


	/**
	 * 联系客服
	 * @param void
	 * @return void
	 */
	public function contact() {
		$salesLogic = D('Sales', 'Logic');
		$sales = $salesLogic->order(array('order'=>'desc', 'id'))->select();
		$this->assign('sales', $sales);
		$this->display();
	}

}
