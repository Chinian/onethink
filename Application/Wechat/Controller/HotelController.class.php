<?php

namespace Wechat\Controller;

use Think\Controller;



/**
 * 主控制器
 */
class HotelController extends Controller
{
	
	protected $productLogic; // 房型
	protected $reserveLogic; // 订单
	protected $info;
	
	
	public function __construct()
	{
		parent::__construct();
		
		C('DB_PREFIX', C('DB_PREFIX') . 'hotel_');
		$this->productLogic = D('Product', 'Logic');
		$this->reserveLogic = D('Reserve', 'Logic');
		$this->info = D('Info', 'Logic')->where()->find();
		$this->assign('toppic', $this->info['toppic']);
	}


	/**
	 * 主页
	 */
	
	public function index()
	{

		$data = array();
		$product = $this->productLogic->select();
		
		
		$data['info'] = $this->info;
		$data['product'] = $product;
		
		
		$this->assign('data', $data);
		
		$this->display();
	}
	
	

	/**
	 * 房间类型
	 */
	public function product()
	{
		$id = I('get.id');
		if($id)
		{
			$data = array();
			$data['product'] = $this->productLogic->where(array('id' => $id))->find();
			
					
			$this->assign('data', $data);
			$this->display();
		}
		else
		{
			$this->error('参数错误');
		}
	}
	
	/**
	 * 房间详情
	 */
	public function productedit()
	{
		$data = array();
		$id = I('get.id');
		if($id)
		{
			$product = $this->productLogic->where(array('id' => $id))->find();
			$data['product'] = $product;
			$this->assign('data', $data);
		}
		elseif(I('post.'))
		{
		$productData = array(
				'name'		=> I('post.name'),
				'price0'	=> I('post.price_0'),
				'price1'	=> I('post.price_1'),
				'briefdes'	=> I('post.brief_description'),
				'des'		=> I('post.description'),
				'soldout'	=> I('post.soldout'),
				'order'		=> I('post.order'),
				'inputtime'	=> time()
		);
		if(I('post.id'))
		{
			$id = I('post.id');
			
			$this->productLogic->where(array('id' => $id))->save($productData);
		}
		else
		{
			$this->productLogic->add($productData);
		}
		
		 
		
		exit();
		}
		
		$this->display();
	}
	
	/**
	 * 订单
	 */
	
	public function reserve()
	{
		if(I('post.'))
		{

			$reserve = array(
				'pid' => I('post.ProId'),
				'name' => I('post.Name'),
				'phone' => I('post.Telephone'),
				'checkin_time' => strtotime(I('post.ReserveDate').' '.I('post.ReserveTimeHour').':'.I('post.ReserveTimeMinute')),
				'departure_time' => strtotime(I('post.CheckOutDate').' '.I('post.CheckOutHour').':'.I('post.CheckOutMinute')),
				'inputtime' => time(),
				'status' => 0
			);
			
			
			$res = $this->reserveLogic->add($reserve);


			if($res)
			{
				echo '{"msg":"","ret":1}';
			}
		}
	}

	/**
	 * 详情
	 *
	 */
	public function detail()
	{

		$data = array();
		
		if(isset($_GET['article']))
		{
			$data['detail'] = $this->info;

			$this->assign('data', $data);
			$this->display();
			exit();
		}
		$id = I('get.id');
		if($id)
		{

			$data['detail'] = $this->productLogic->where(array('id' => $id))->field('name ,des')->find();

			if($data['detail'])
			{
				$this->assign('data', $data);
				$this->display();
			}
			else
			{
				$this->error('该房型不存在');
			}

		}
		else
		{
			$this->error('参数错误');
		}
	}
}
