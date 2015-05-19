<?php

namespace Member\Controller;

use Think\Controller;



/**
 * 后台主控制器
 */
class WeddingController extends Controller
{
	protected $infoLogic;
	protected $infoDataLogic;
	protected $categoryLogic;
	protected $adviceInfoLogic;
	protected $regionLogic;


	public function __construct()
	{
		parent::__construct();
		C('DB_PREFIX', C('DB_PREFIX') . 'wedding_');
		$this->infoLogic = D('Info', 'Logic');
		$this->infoDataLogic = D('Info_data', 'Logic');
		$this->categoryLogic = D('Category', 'Logic');
		$this->adviceInfoLogic = D('Advice_info', 'Logic');
		$this->regionLogic = D('Region', 'Logic');
	}


	/**
	 * 后台主页
	 */
	public function index()
	{
		$data['list'] = array(); // 发送给模板的数据
		

		$info = $this->infoLogic->select();
		
		foreach($info as $val) {
			$temp = $this->categoryLogic->field('title')->where(array('id' => $val['catid']))->find();
			$val['category'] = $temp['title'];
			
			$res = $this->adviceInfoLogic->where(array('id' => $val['id']))->find();
			
			if($res) {
				$val['advice'] = true;
			}
			$region = $this->regionLogic->field('region')->where(array('id' => $val['regionid']))->find();
			$val['region'] = $region['region'];
			
			$data['list'][] = $val;
		}
		
		$this->assign('data', $data);
		$this->display();
	}


	/**
	 * 审核信息
	 */
	public function check()
	{
		$id = I('post.id');
		$type = I('post.type');
		if('check' == $type) {
			$result = $this->infoLogic->where(array('id' => $id))->save(array('status' => '1'));
		} elseif('uncheck' == $type) {
			$result = $this->infoLogic->where(array('id' => $id))->save(array('status' => '0'));
		}
	}


	/**
	 * 推荐信息
	 */
	public function advice()
	{
		/*
		$id = I('post.id');
		
		$result = $this->adviceInfoLogic->add(array('id' => $id));
		*/	
	}


	/**
	 * 删除信息
	 */
	public function del()
	{
		$infid = I('get.infid');
		$catid = I('get.catid');
		
		if($catid) {
			if($this->categoryLogic->where(array('id' => $catid))->delete())
				$this->success('删除成功');
		}
		
		if($infid)
		{
			$res = $this->infoLogic->where(array('id' => $infid))->delete();
			if($res)
				if($this->infoDataLogic->where(array('id' => $infid))->delete())
					$this->success('删除成功');
			
		}
	}


	/**
	 * 查看信息
	 * */
	public function infoview()
	{
		$id = I('get.id');
		if($id) {
			$data = array();
			$data['category'] = $this->getCategoryList();
			$data['region'] = $this->regionLogic->select();
			
			$info = $this->infoLogic->where(array('id' => $id))->find();
			if(!$info) {
				$this->error("此信息可能不存在");
			}
			$infoData = $this->infoDataLogic->where(array('id' => $id))->find();
			$data['info'] = array_merge($info, $infoData);
			$category = $this->categoryLogic->where(array('id' => $data['info']['catid']))->find();
			$region = $this->regionLogic->where(array('id' => $data['info']['regionid']))->find();
			$data['info']['region'] = $region['region'];
			$data['info']['cat'] = $category['title'];
			$this->assign('data', $data);
			$this->display();
		}
	}


	/**
	 * 
	 * 栏目
	 * 
	 */
	public function catview()
	{
		$data = array();
		$categoryList = $this->getCategoryList();
		$data['list'] = $categoryList;
		
		$this->assign('data', $data);
		$this->display();
	}


	/**
	 * 
	 * 栏目编辑
	 * 
	 */
	public function catedit()
	{
		$id = I('get.id');
		
		$title = I('post.title');
		$pid = I('post.pid');
		$catid = I('post.catid');
		
		$data = array();
		
		$cateList = $this->categoryLogic->where(array('pid' => 0))->select();
		
		$data['catlist'] = $cateList;
		if(I('get.')) {
			if($id) {
				$cate = $this->categoryLogic->where(array('id' => $id))->find();
				$pcate = $this->categoryLogic->where(array('id' => $cate['pid']))->find();
				$data['cate'] = $cate;
				$data['cate']['ptitle'] = $pcate['title'];
			}
		}
		
		if(I('post.')) {
			if($pid && $title) {
				if($catid) {
					$this->categoryLogic->where(array('id' => $catid))->save(array('title' => $title, 'pid' => $pid));
				} else {
					$this->categoryLogic->add(array('title' => $title, 'pid' => $pid));
				}
			}
			exit();
		}
		
		$this->assign('data', $data);
		$this->display();
	}


	/**
	* 返回分类列表
	* @param void
	* @return array 信息列表
	*/
	protected function getCategoryList()
	{
		$list = array();
		$category = $this->categoryLogic->where(array('pid' => 0))->select();
		foreach($category as $key => $val) {
			$list[$key] = array();
			$list[$key]['id'] = $val['id'];
			$list[$key]['title'] = $val['title'];
			$category = $this->categoryLogic->field('id, title')->where(array('pid' => $val['id']))->select();
			$list[$key]['child'] = $category;
		}
		return $list;
	}
	
}
