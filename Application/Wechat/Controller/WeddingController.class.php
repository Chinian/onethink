<?php

namespace Wechat\Controller;

use Think\Controller;






class WeddingController extends Controller
{
	
	
	
	protected $categoryLogic;
	protected $infoLogic;
	protected $infoDataLogic;
	protected $regionLogic;

	
	public function __construct()
	{
		parent::__construct();
		
		C('DB_PREFIX', C('DB_PREFIX').'wedding_');
		$this->categoryLogic = D('Category', 'Logic');
		$this->infoLogic = D('Info', 'Logic');
		$this->infoDataLogic = D('Info_data', 'Logic');
		$this->regionLogic = D('Region', 'Logic');
	}

	public function index()
	{
		$data = $this->getCategoryList(); 	
	
		$this->assign('data', $data);
		$this->display();
	}


	/**
	 * 信息列表页
	 */
	public function infolist()
	{

		$catid = I('get.category'); // 分类id
	
		
		$data = array(); // 传送给模板的数据
		$data['list'] = array();
		
		
		
		if($catid) {
			// 获取分类标题
			$category = $this->categoryLogic->field('title, pid')->where(array('id' => $catid))->find();
			if(0 == $category['pid']) {
				$childCategory = $this->categoryLogic->field('id')->where(array('pid' => $catid))->select();
				
				$catidList = array();
				foreach($childCategory as $val) {
					$catidList[] = $val['id'];
				}
				// 获取信息列表
				$data['list'] = $this->getInfo($catidList);
			} else {
				$data['list'] = $this->getInfo($catid);
			}

			$data['title'] = $category['title'];
			
			$data['region'] = $this->regionLogic->select();
			$data['catlist'] = $this->getCategoryList();
			
		} else {
			$this->error("参数无效");
		}

		$this->assign('data', $data);
		$this->display();
	}


	/**
	 * 信息详情页
	 */
	public function detail()
	{
		
		$id = I('get.id');
		if(!$id) {
			$this->error("参数无效");
		}
		$data = array(); // 传送给模板的数据
		
		$info = $this->infoLogic->where(array('id' => $id))->find();
		if(!$info)
		{
			$this->error("此信息可能不存在");
		}
		$infoData = $this->infoDataLogic->where(array('id' => $id))->find();
		// 更新访问量
		$this->infoDataLogic->execute("update `".C('DB_PREFIX')."info` set `views` = `views` + 1 where `id`={$id}");
		
		$data = array_merge($info, $infoData);
		$category = $this->categoryLogic->where(array('id' => $data['catid']))->field('title')->find();
		$data['cat'] = $category['title'];

		$this->assign('data', $data);
		
		$this->display();
	}


	/**
	 * 信息发布页
	 */
	public function infoedit()
	{
		$data = array();
		
		
		$category = $this->categoryLogic->where(array('pid' => 0))->select();
		$data['list'] = array();
		
		// 获取分类列表
		foreach($category as $key => $val) {
			$data['list'][$key] = array();
			$data['list'][$key]['id'] = $val['id'];
			$data['list'][$key]['title'] = $val['title'];
			$categoryChild = $this->categoryLogic->field('id, title')->where(array('pid' => $val['id']))->select();
			$data['list'][$key]['child'] = $categoryChild;
		}
		
		// 获取地区列表
		$region = $this->regionLogic->select();
		$data['region'] = $region;
		
		
		$this->assign('data', $data);
		$this->display();
	}


	/**
	 * 处理上传的信息
	 */
	public function editInfo()
	{
		
		$data = array(

			'catid'			=> I('post.category'),
			'title'			=> I('post.title'),
			'expirytime'	=> I('post.valid'),
			'regionid'		=> I('post.region'),
			'content'		=> I('post.content'),
			'contact'		=> I('post.contact'),
			'phone'			=> I('post.phone'),
			'address'		=> I('post.address'),
			'advert'		=> I('post.advert')
		);
		

		
		// 将上传的信息整理并保存
		$infoBasic = array(
				'catid'				=> $data['catid'],
				'typeid'			=> 1,
				'title'				=> $data['title'],
				'inputtime'			=> time(),
				'expirytime'		=> time() + $data['expirytime'],
				'regionid'			=> $data['regionid']
		);
		$infoExtend = array(
				'id'			=> null,
				'content'		=> $data['content'],
				'contact'		=> $data['contact'],
				'phone'			=> $data['phone'],
				'address'		=> $data['address'],
				'advert'		=> $data['advert']
				
		);
		$dataInfo = array(
				'basic'			=> $infoBasic,
				'extend'		=> $infoExtend
		);
		
		$dataInfo['extend']['id'] = $this->infoLogic->add($dataInfo['basic']);
		$result = $this->infoDataLogic->add($dataInfo['extend']);
		
		if($result) {
			$this->ajaxReturn(json_encode(array('val' => 'success', 'id' => $dataInfo['extend']['id'])));
		} else {
			$this->ajaxReturn(json_encode(array('val' => 'error')));
		}
	}
	
	
	
	public function filter()
	{
		$region = I('post.region');
		$cat = I('post.type');
		$infoList = null;
		if($region && $cat)
		{
			$infoList = $this->infoLogic->where(array('catid' => $cat, 'regionid' => $region))->select();
		}
		elseif($region)
		{
			$infoList = $this->infoLogic->where(array('regionid' => $region))->select();
		}
		elseif($cat)
		{
			$infoList = $this->infoLogic->where(array('catid' => $cat))->select();
		}
		else
		{
			
		}

		if(is_array($infoList))
		{
			foreach($infoList as $k => $v)
			{
				foreach($infoList[$k] as $kk => $vv)
				{
					$infoList[$k][$kk] = urlencode($infoList[$k][$kk]);
				}
				$infoList[$k]['inputtime'] = date('Y-m-d H:i', $infoList[$k]['inputtime']);
				$infoList[$k]['expirytime'] = date('Y-m-d H:i', $infoList[$k]['expirytime']);
				$infoList[$k]['region'] = $this->getRegionById($infoList[$k]['regionid']);
			}
		}
		//var_dump($infoList);
		$infoJson = urldecode(json_encode($infoList));
		echo $infoJson;
	}
	
	
	/**
	 * 根据分类id返回对应信息列表
	 * @param mixed $catid 分类id string 或 array 格式
	 * @return array 信息列表
	 */
	protected function getInfo($catid = false)
	{
		$list = array();
		
		if($catid) {
			if(is_array($catid)) {
				$catids = implode(',', $catid);
				$info = $this->infoLogic->where(array('catid' => array('in', $catids)))->select();
			} else {
				$info = $this->infoLogic->where(array('catid' => $catid))->select();
			}
		} else {
			$info = $this->infoLogic->select();
		}
		
		// 略过未审核与过期的信息
		foreach($info as $v) {
			if(!$v['status']) {
				continue;
			}
			if((time() - $v['expirytime']) > 0) {
				continue;
			}
			$region = $this->getRegionById($v['regionid']);
			$v['region'] = $region;
			
			$list[] = $v;
		}
		
		return $list;
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

	
	
	
	/*
	 *
	* 根据分类id返回对应地区
	* @param int $id 地区id 
	* @return string 地区
	*/
	protected  function getRegionById($id)
	{
		$region = $this->regionLogic->field('region')->where(array('id' => $id))->find();
		return $region['region'];
	}
}
