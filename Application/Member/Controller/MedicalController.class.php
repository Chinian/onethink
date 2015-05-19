<?php

namespace Member\Controller;

use Think\Controller;



class MedicalController extends Controller
{
	public function __construct() {
		parent::__construct();
		C('DB_PREFIX', C('DB_PREFIX') . 'medical_');
	}


	/**
	* 
	* 后台首页
	*  
	*/
	public function index() {
		$reserveLogic = D('Reserve', 'Logic');
		$reserve = $reserveLogic->select();
		$this->assign('reserve', $reserve);
		$this->display();
	
	}


}
