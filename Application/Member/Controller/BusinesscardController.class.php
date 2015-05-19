<?php

namespace Member\Controller;

use Think\Controller;



class BusinesscardController extends Controller 

{


	public function __construct() {
		parent::__construct();
		C('DB_PREFIX', C('DB_PREFIX') . 'businesscard_');
	}


	/**
	* 
	* 后台首页
	*  
	*/
	public function index() {
		$cardLogic = D('Card', 'Logic');
		$res = $cardLogic->getList();
		$data = array('card' => $res[0]);
		$this->assign('data', $data);
		$this->assign('page', $res[1]);
		
		$this->display();
	}


	/**
	 *
	 * 添加、编辑名片
	 *
	 */
	public function edit() {
		$id = I('get.id');
		
		if($id) {
			$cardLogic = D('Card', 'Logic');
			$res = $cardLogic->getDetail($id);
			$this->assign('data', $res);
		}
		$this->display();
	}


	/**
	 *
	 * 删除名片
	 *
	 */
	public function del() {
		$id = I('get.id');
		if($id) {
			$cardLogic = D('Card', 'Logic');
			if($cardLogic->del($id)) {
				$this->success('删除成功');
			} else {
				$this->error('删除失败');
			}
		} else {
			$this->error('参数错误');
		}
	}
}
