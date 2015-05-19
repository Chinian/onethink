<?php

namespace Wechat\Controller;

use Think\Controller;


class BusinesscardController extends Controller {
	public function __construct() {
		parent::__construct();
		C('DB_PREFIX', C('DB_PREFIX') . 'businesscard_');
	}
	
	public function detail() {
		C('DEFAULT_THEME', 'default');
		if(IS_GET) {
			$id = I('get.id');
			if($id) {
				$cardLogic = D('Card', 'Logic');
				$data = $cardLogic->where(array('id' => $id))->find();
				
				if($data) {
					$this->assign('data', $data);
					$this->theme('Skin'.$data['skinid'])->display();
				} else {
					$this->error('名片不存在');
				}
			}
		}
	}
}
