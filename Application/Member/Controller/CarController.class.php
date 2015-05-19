<?php

namespace Member\Controller;

use Think\Controller;
use Think\Page;



class CarController extends Controller {

	public function __construct() {
		parent::__construct();
		C('DB_PREFIX', C('DB_PREFIX') . 'car_');
	}

	/**
	 * 基本设置
	 * @param void
	 * @return void
	 */
	public function index()
	{
		$configLogic = D('config', 'Logic');
		$res = $configLogic->where(array('action' => 'index'))->field('option, value')->select();
		$config = array();

		//处理配置信息
		foreach($res as $val) {
			if('banner_path' == $val['option']) {
				$config[$val['option']] = str2arr($val['value'], ';');
				continue;
			}
			$config[$val['option']] = $val['value'];
		}
		$this->assign('config', $config);
		$this->display();
	}



	/**
	 * 汽车分类
	 * @param void
	 * @return void
	 */
	public function category() {
		$categoryLogic = D('CarCategory', 'Logic');
		$category = $categoryLogic->order(array('order'=>'asc', 'id'))->select();
		$this->assign('cates', $category);
		$cid = I('get.id');


		if($cid) {
			$cate = $categoryLogic->where(array('id' => $cid))->find();
			if($cate) {
				$this->assign('cate', $cate);
			} else {
				$this->error('分类不存在');
			}
		}

		$this->display('category');

	}



	/**
	 * 编辑汽车分类
	 * @param void
	 * @return void
	 */
	public function editCategory() {
		$categoryLogic = D('CarCategory', 'Logic');

		$data = array(
			'name' => I('post.Category'),
			'imgpath' => I('post.PicPath')
		);
		$id = I('post.CateId');
		$info = array('status' => '0', 'msg' => '');
		if($id) {
			if($categoryLogic->where(array('id' => $id))->save($data))
				$info['status'] = '1';

		} else {
			if($categoryLogic->add($data))
				$info['status'] = '1';
		}
		$this->AjaxReturn($info);
	}



	/**
	 * 删除汽车分类
	 * @param void
	 * @return void
	 */
	public function delCategory() {
		$categoryLogic = D('CarCategory', 'Logic');

		$id = I('post.id');
		if($id) {
			$res = $categoryLogic->where(array('id' => $id))->delete();
			if($res) {
				$this->AjaxReturn(array('status' => '1'));
				exit();
			} else {
				$this->AjaxReturn(array('status' => '0', 'msg' => '删除失败'));
				exit();
			}
		}
	}



	/**
	 * 类型排序
	 * @param void
	 * @return void
	 */
	public function categoryOrder()
	{
		$categoryLogic = D('CarCategory', 'Logic');

		$sortOrder = I('post.sort_order');
		$sortOrder = str2arr($sortOrder, '|');
		foreach($sortOrder as $k => $v)
		{
			$categoryLogic->where(array('id' => $v))->save(array('order' => $k));
		}
	}



	/**
	 * 车系管理
	 * @param void
	 * @return void
	 */
	public function products() {
		$productsLogic = D('Products', 'Logic');
		$categoryLogic = D('CarCategory', 'Logic');
		$where = array();//查询条件
		$pid = I('get.id');
		if('' != $pid) {
			$cates = $categoryLogic->field('id, name')->select();
			$this->assign('cates', $cates);
			if(0 != $pid) {
				$product = $productsLogic->where(array('id' => $pid))->find();
				if($product) {
					$this->assign('product', $product);
				} else {
					$this->error('产品不存在');
				}
			}
			$this->display('product_edit');
			exit();
		}

		//搜索
		$keyWord = I('get.Keyword');
		$searchCateId = I('get.SearchCateId');
		if($keyWord)
			$where['name'] = array('like', '%'.$keyWord.'%');
		if($searchCateId)
			$where['cateid'] = $searchCateId;
		$this->assign('keyWord', $keyWord);
		$this->assign('searchCateId', $searchCateId);

		//分页
		$page = $this->getPage($productsLogic, $where);
		$products = $productsLogic->where($where)->field('id, name, cateid, inputtime')->order(array('order' => 'desc', 'id'))->limit($page->firstRow . ',' . $page->listRows)->select();

		//获取分类名
		$cateArr = array();
		$cates = $categoryLogic->field('id, name')->select();
		foreach($cates as $v) {
			$cateArr[$v['id']] = $v['name'];
		}
		foreach($products as $k => $v) {
			$cateid = $v['cateid'];
			$products[$k]['cate'] = $cateArr[$cateid];
		}

		$this->assign('cates', $cates);
		$this->assign('products', $products);
		$this->assign('page', $page->show()); 
		$this->display();
	}


	/**
	 * 车型编辑
	 * @param void
	 * @return void
	 */
	public function editProduct() {
		$productsLogic = D('Products', 'Logic');
		//产品编辑
		$data = array(
			'cateid' => I('post.CateId'),
			'name' => I('post.Name'),
			'brief_des' => I('post.BriefDescription'),
			'des' => I('post.Description'),
			'order' => I('post.MyOrder'),
			'inputtime' =>time()
		);
		$id = I('post.ProId');
		$info = array('status' => '0', 'msg' =>'');//返回信息
		if($id) {
			if($productsLogic->where(array('id' => $id))->save($data)) {
				$info['status'] = '1';
			}
		} else {
			if($productsLogic->add($data)) {
				$info['status'] = '1';
			}
		}
		$this->ajaxReturn($info);
	}

	/**
	 * 车型删除
	 * @param void
	 * @return void
	 */
	public function delProduct() {
		$productsLogic = D('Products', 'Logic');
		$id = I('post.id');
		if($id) {
			$res = $productsLogic->where(array('id' => $id))->delete();
			if($res) {
				$this->AjaxReturn(array('status' => '1'));
				exit();
			} else {
				$this->AjaxReturn(array('status' => '0', 'msg' => '删除失败'));
				exit();
			}
		} else {
			$this->AjaxReturn(array('status' => '0', 'msg' => '参数错误'));
		}
	}






	/**
	 * 活动资讯
	 * @param void
	 * @return void
	 */
	public function news() {
		$newsLogic = D('News', 'Logic');
		$categoryLogic = D('NewsCategory', 'Logic');

		$id = I('get.id');
		//资讯编辑
		if('' != $id) {
			$cates = $categoryLogic->field('id, name')->select();
			$this->assign('cates', $cates);

			if(0 != $id) {
				$news = $newsLogic->where(array('id' => $id))->find();
				if($news) {
					$this->assign('news', $news);
				}
				else {
					$this->error('文章不存在');
				}
			}

			$this->display('news_edit');
			exit();
		}

		//分页
		$page = $this->getPage($newsLogic);
		$news = $newsLogic->field('id, title, cateid, inputtime')->order(array('order'=>'desc', 'id' => 'desc'))->limit($page->firstRow . ',' . $page->listRows)->select();


		//获取分类名
		$cateArr = array();
		$cates = $categoryLogic->field('id, name')->select();
		foreach($cates as $v) {
			$cateArr[$v['id']] = $v['name'];
		}

		foreach($news as $k => $v) {
			$cateid = $v['cateid'];
			$news[$k]['cate'] = $cateArr[$cateid];
		}

		$this->assign('news', $news);
		$this->assign('page', $page->show()); // 赋值分页输出
		$this->display();
	}


	/**
	 * 资讯编辑
	 * @param void
	 * @return void
	 */
	public function editNews() {
		$newsLogic = D('News', 'Logic');
		$data = array(
			'cateid' => I('post.CateId'),
			'title' => I('post.Title'),
			'brief_des' => I('post.BriefDescription'),
			'des' => I('post.Description'),
			'order' => I('post.MyOrder'),
			'imgpath' => I('post.ImgPath'),
			'inputtime' =>time()
		);
		$id = I('post.NId');
		$info = array('status' => '0', 'msg' =>'');//返回信息
		if($id) {
			if($newsLogic->where(array('id' => $id))->save($data))
				$info['status'] = '1';
		} else {
			if($newsLogic->add($data))
				$info['status'] = '1';
		}
		$this->ajaxReturn($info);
	}


	/**
	 * 资讯删除
	 * @param void
	 * @return void
	 */
	public function delNews() {
		$newsLogic = D('News', 'Logic');
		$delid = I('post.id');
		if($delid) {
			$res = $newsLogic->where(array('id' => $delid))->delete();
			if($res) {
				$this->AjaxReturn(array('status' => '1'));
			} else {
				$this->AjaxReturn(array('status' => '0', 'msg' => '删除失败'));
			}
		}
	}



	/**
	 * 预约管理
	 * @param void
	 * @return void
	 */
	public function reserve() {
		$reserveLogic = D('Reserve', 'Logic');
		$carCateLogic = D('CarCategory', 'Logic');
		$productsLogic = D('Products', 'Logic');
		$where = array();//搜索条件

		//读取车系
		$res = $carCateLogic->field('id, name')->select();
		$carCate = array();
		foreach($res as $val) {
			$carCate[$val['id']] = $val['name'];
		}

		//读取车型
		$res = $productsLogic->field('id, name')->select();
		$carProduct = array();
		foreach($res as $val) {
			$carProduct[$val['id']] = $val['name'];
		}

		
		if(IS_GET) {
			$customConfigLogic = D('ReserveConfig', 'Logic');//自定义表单选项
			$d = I('get.d');
			switch($d) {
				//预约设置
			case 'config' :
				$configLogic = D('Config', 'Logic');
				$res = $configLogic->where(array('action' => 'reserve'))->field('option, value')->select();
				$config = array();
				//处理配置信息
				foreach($res as $val) {
					$config[$val['option']] = $val['value'];
				}
				//处理经纬信息
				$loc = str2arr($config['loc']);
				unset($config['loc']);
				$config['lng'] = $loc[1];
				$config['lat'] = $loc[0];


				//自定义表单项
				$custom = $customConfigLogic->select();
				$this->assign('config', $config);
				$this->assign('custom', $custom);
				$this->display('reserve_config');
				exit();
				break;

			case 'detail' :
				$reserveCustomLogic = D('ReserveCustom', 'Logic');
				$lid = I('get.LId');
				if($lid) {

					$res = $reserveLogic->where(array('id' => $lid))->find();
					$res['car_cate'] = $carCate[$res['car_cate']];
					$res['car_product'] = $carProduct[$res['car_product']];

					$customConfig = $customConfigLogic->select();
					$resCustom = $reserveCustomLogic->where(array('rid' => $lid))->field('cid, value')->select();
					$custom = array();
					foreach($resCustom as $k => $v) {
						$custom[$v['cid']] = $v['value'];
					}

					$customList = array();
					foreach($customConfig as $k => $v) {
						$customList[$k]['name'] = $v['name'];
						$customList[$k]['type'] = $v['type'];
						$customList[$k]['value'] = $custom[$v['id']];
						if('select' == $v['type']) {
							$option = str2arr($v['placeholder'], '|');
							$customList[$k]['value'] = $option[$custom[$v['id']] - 1];
						}

					}

					$this->assign('res', $res);
					$this->assign('list', $customList);
					$this->display('reserve_detail');

				} else {
					$this->error('参数错误');
				}

				exit();
				break;


			case 'search' :
				$key = I('get.Keyword');
				$time = I('get.Time');


				if($key) {
					$where['name'] = array('like', '%' . $key . '%');
				}

				if($time) {
					$arr = explode(' - ', $time);
					$time0 = strtotime($arr[0]);
					$time1 = strtotime($arr[1]);

					$where['reserve_time'] = array('between', array($time0, $time1));
				}
			}
		}

		//分页
		$page = $this->getPage($reserveLogic, $where);
		$this->assign('page', $page->show());
		$res = $reserveLogic->where($where)->field('id, name, tel, car_cate, car_product, reserve_time, input_time')->limit($page->firstRow . ',' . $page->listRows)->select();
		foreach($res as $k => $v)
		{
			$res[$k]['car_cate'] = $carCate[$res[$k]['car_cate']];
			$res[$k]['car_product'] = $carProduct[$res[$k]['car_product']];
		}

		$this->assign('res', $res);
		$this->display();
	}



	/**
	 * 预约编辑
	 * @param void
	 * @return void
	 */
	public function editReserve() {

		$configLogic = D('Config', 'Logic');
		$customConfigLogic = D('ReserveConfig', 'Logic');//自定义表单选项
		
		$data = array(
			'rename_title' => I('post.RenameTitle'),
			'add' => I('post.Address'),
			'header_img_path' => I('post.HeaderImgPath'),
			'tel' => I('post.Telephone'),
			'rename_tel' => I('post.RenameTelephone'),
			'remark' => I('post.Remark'),
			'rename_remark' => I('post.RenameRemark'),
			'loc' => I('post.PrimaryLat').','.I('post.PrimaryLng')
		);
		$inputId = I('post.InputId');
		$fieldType = I('post.FieldType');
		$inputName = I('post.InputName');
		$inputValue = I('post.InputValue');
		$notnull = I('post.InputRequired');

		/*
		$selectName = I('post.SelectName');
		$selectValue = I('post.SelectValue');
		*/
		
		$custom = array();
		foreach($inputId as $k => $v) {
			$custom[] = array('id' => $v, 'name' => $inputName[$k], 'type' => $fieldType[$k], 'placeholder' => $inputValue[$k]);
		}
		/*
		foreach($inputName as $k => $v) {
			$custom[] = array('name' => $inputName[$k], 'type' => 'text', 'placeholder' => $inputValue[$k]);
		}
		foreach($selectName as $k => $v) {
			$custom[] = array('name' => $selectName[$k], 'type' => 'text', 'placeholder' => $selectValue[$k]);
		}
		*/

		foreach($data as $k => $v) {
			$configLogic->where(array('action' => 'reserve', 'option' => $k))->save(array('value' => $v));
		}

		foreach($custom as $k =>$v) {
			if($v['id']) {
				$customConfigLogic->where(array('id' => $v['id']))->save($v);
			} else {
				$customConfigLogic->add($v);
			}
		}

	}



	/**
	 * 删除预约
	 * @param void
	 * @return void
	 */
	public function delReserve() {
		$reserveLogic = D('Reserve', 'Logic');
		$lid = I('post.id');
		if($lid) {
			$res = $reserveLogic->where(array('id' => $lid))->delete();
			if($res) {
				$this->AjaxReturn(array('status' => '1'));
			} else {
				$this->AjaxReturn(array('status' => '0', 'msg' => '删除失败'));
			}
		} else {
			$this->AjaxReturn(array('status' => '0', 'msg' => '参数错误'));
		}
	}




	/**
	 * 关于我们
	 * @param void
	 * @return void
	 */
	public function about() {
		$configLogic = D('configText', 'Logic');


		if(IS_POST) {
			$about = I('post.Contents');
			$res = $configLogic->where(array('option' => 'about'))->save(array('value' => $about));
			$info = array('status' => '0', msg => '');
			if($res) {
				$info['status'] = '1';
				$info['msg'] = '修改成功';
			} else {
				$info['msg'] = '修改失败';
			}
			$this->ajaxReturn($info);
			exit();
		}


		$res = $configLogic->where(array('option' => 'about'))->find();
		$this->assign('about', $res['value']);
		$this->display();
	}




	/**
	 * 销售
	 * @param void
	 * @return void
	 */
	public function sales() {
		$salesLogic = D('sales', 'Logic');
		$configLogic = D('config', 'Logic');

			$id = I('get.id');

			if('' != $id) {
				//获取类型名
				$typeArr = array();
				$types = $configLogic->where(array('option' => array('in', 'sale_cate0,sale_cate1')))->select();
				foreach($types as $k => $v) {
					$typeArr[$k + 1] = $v['value'];
				}
				$this->assign('types', $typeArr);

				if(0 != $id) {

					$sales = $salesLogic->where(array('id' => $id))->find();
					if($sales) {
						$this->assign('sales', $sales);
					}
					else {
						$this->error('销售不存在');
					}

				}
				$this->display('sales_edit');
				exit();
			}

		//分页
		$page = $this->getPage($salesLogic);
		$res = $salesLogic->where()->field('id, name, type, tel')->limit($page->firstRow . ',' . $page->listRows)->select();

		//获取类型名
		$typeArr = array();
		$types = $configLogic->where(array('option' => array('in', 'sale_cate0,sale_cate1')))->select();
		foreach($types as $k => $v) {
			$typeArr[$k + 1] = $v['value'];
		}
		foreach($res as $k => $v) {
			$res[$k]['sale_cate'] = $typeArr[$v['type']];
		}

		$this->assign('sales', $res);
		$this->assign('page', $page->show()); 
		$this->display();
	}


	/**
	 * 销售编辑
	 * @param void
	 * @return void
	 */
	public function editSales() {
		$salesLogic = D('sales', 'Logic');
		$data = array(
			'name' => I('post.Title'),
			'tel' => I('post.Phone'),
			'type' => I('post.CateId'),
			'des' => I('post.BriefDescription'),
			'imgpath' => I('post.ImgPath'),
			'order' => I('post.MyOrder')
		);
		$id = I('post.SId');
		if($id) {
			if($salesLogic->where(array('id' => $id))->save($data)) {
				$info['status'] = '1';
			}
		} else {
			if($salesLogic->add($data))
				$info['status'] = '1';
		}
		$this->ajaxReturn($info);
	}


	/**
	 * 销售删除
	 * @param void
	 * @return void
	 */
	public function delSales() {
		$salesLogic = D('sales', 'Logic');
		$delid = I('post.id');

		if($delid) {
			$res = $salesLogic->where(array('id' => $delid))->delete();
			if($res) {
				$this->AjaxReturn(array('status' => '1'));
				exit();
			} else {
				$this->AjaxReturn(array('status' => '0', 'msg' => '删除失败'));
				exit();
			}
		}
	}


	/**
	 * 实用工具
	 * @param void
	 * @return void
	 */
	public function plugin() {
		$pluginLogic = D('Plugin', 'Logic');

		$plugin = $pluginLogic->select();
		$this->assign('plugin', $plugin);
		$this->display();
	}



	/**
	 * 车主关怀
	 * @param void
	 * @return void
	 */
	public function owner() {
		$configLogic = D('ConfigText', 'Logic');


		if(IS_POST) {
			$action = I('post.do_action');

			$owner = I('post.Contents');
			$res = $configLogic->where(array('option' => 'owner'))->save(array('value' => $owner));
			$info = array('status' => '0', msg => '');
			if($res) {
				$info['status'] = '1';
				$info['msg'] = '修改成功';
			} else {
				$info['msg'] = '修改失败';
			}
			$this->ajaxReturn($info);
			exit();


		}
		$res = $configLogic->where(array('option' => 'owner'))->find();
		$this->assign('owner', $res['value']);
		$this->display();

	}




	/**
	 * 分页
	 * @param Model $logic 待分页的模型
	 * @param array $where 查询条件
	 * @param int $listRows 每页显示条数
	 * @return Page 分页类
	 */
	protected function getPage($logic, $where = array(), $listRows = 30) {
		$count = $logic->where($where)->count(); // 查询满足要求的总记录数
		$page = new \Think\Page($count, $listRows); // 实例化分页类 传入总记录数和每页显示的记录数
		$page->setConfig('theme', '%FIRST%  %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
		$page->setConfig('prev', '上一页');
		$page->setConfig('next', '下一页');
		return $page;
	}

}
