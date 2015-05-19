<?php

namespace Member\Logic;

use Think\Model;



class CardLogic extends Model {


	public function __construct() {
		parent::__construct();
	}


	public function edit($data, $id = '') {
		if($id) {
			return $this->where(array('id' => $id))->save($data);
		} else {
			return $this->add($data);
		}
	}


	public function getList($page = 1) {
		$count = $this->count();
		$page = new \Think\Page($count, 5); // 实例化分页类 传入总记录数和每页显示的记录数(30)
		$page->setConfig('theme', '%FIRST%  %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
		$page->setConfig('prev', '上一页');
		$page->setConfig('next', '下一页');
		$show = $page->show(); // 分页显示输出
		

		return array($this->field('id, name, mobile, tel, qq, inputtime')->limit($page->firstRow . ',' . $page->listRows)->select(), $show);
	}


	/**
	 * 
	 * 获取名片信息
	 *  
	 * @param int 名片id
	 *    
	 * @return mixed 名片信息数组或 false
	 */
	public function getDetail($id) {
		$res = $this->where(array('id' => $id))->find();
		$loc = str2arr($res['loc']);
		unset($res['loc']);
		$res['lng'] = $loc[1];
		$res['lat'] = $loc[0];
		
		return $res;
	}


	/**
	 * 
	* 删除名片
	*  
	* @param int 名片id  
	*    
	 */
	public function del($id) {
		return $this->where(array('id' => $id))->delete();
	}
}
