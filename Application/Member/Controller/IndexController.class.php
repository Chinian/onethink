<?php

namespace Member\Controller;

use Think\Controller;



/**
 * 后台主控制器
 */
class IndexController extends Controller {


	/**
	 * 后台主页
	 */
	public function index() {
		if(IS_GET) {
			$action = I('get.do_action');
			switch($action) {
			case 'app_car.plugin' :
				$res = $this->carPlugin();
				if(false !== $res) {
					$this->show('{"msg":"'.$res.'","ret":1}');
				} else{
					$this->show('{"msg":"设置失败，出现未知错误！","ret":0}');
				}
				break;
			}
		} elseif(IS_POST) {

			
			$action = I('post.do_action');
			
			switch($action) {
				case 'businesscard.edit' :
					$this->businesscardEdit();
					break;
				case 'app_car.config' :
					$this->carSet();
					echo '{"status": 1, "msg": ""}';
					break;
				case 'app_car.products_category' :
					$this->carCateEdit();
					echo '{"status": 1, "msg": ""}';
					break;
				case 'app_car.reserve_edit' :
					$this->carReserveEdit();
					echo '{"status": 1, "msg": ""}';
					break;
				case 'app_car.category_category_order' :
					$this->carCategoryOrder();
					break;
			}
			
			if(I('post.Filename')) {
				//文件上传
				$fileConfig = array(
					'maxSize' => 3145728,
					'rootPath' => './Public/static/upload/',
					'exts' => array('jpg', 'gif', 'png', 'bmp', 'mp3'),
					'autoSub' => false,
					'replace' => true
				);
				$upload = new \Think\Upload($fileConfig); //实例化上传类
				

				$res = $upload->upload();
				
				if(!$res) {
					//上传失败
					echo ($upload->getError());
				} else {
					$info = array('status' => '1', 'filepath' => $fileConfig['rootPath'] . $res['Filedata']['savename']);
					//$this->show(json_encode($info, 0));
					$this->ajaxReturn($info, 'json');
				}
				exit();
			}
		} else {
			$this->display();
		}
	}


	/**
	 * 审核信息
	 */
	public function check() {
		$id = I('post.id');
		
		$infoLogic = D('Info', 'Logic');
		
		$result = $infoLogic->where(array('id' => $id))->save(array('status' => '1'));
	}


	/**
	 * 编辑名片
	 */
	protected function businesscardEdit() {
		C('DB_PREFIX', C('DB_PREFIX') . 'businesscard_');
		$businessCardLogic = D('Card', 'Logic');
		
		$data = array(
				'name' => I('post.Name'),
				'title' => I('post.ReplyTitle'),
				'replybriefdes' => I('post.ReplyBriefDescription'),
				'skinid' => I('post.SkinId'),
				'bgm' => I('post.BackgroundMusic'),
				'company' => I('post.Company'),
				'posts' => I('post.Posts'),
				'mobile' => I('post.MobilePhone'),
				'tel' => I('post.Tel'),
				'fax' => I('post.Fax'),
				'qq' => I('post.QQ'),
				'email' => I('post.Email'),
				'website' => I('post.WebSite'),
				'briefdes' => I('post.BriefDescription'),
				'add' => I('post.Address'),
				'customize' => I('post.Customize'),
				'customizeurl' => I('post.CustomizeUrl'),
				'replyimgpath' => I('post.ReplyImgPath'),
				'imgpath' => I('post.ImgPath'),
				'codeimgpath' => I('post.CodeImgPath'),
				'isweb' => I('post.IsWeb'),
				'loc' => I('post.PrimaryLat') . ',' . I('post.PrimaryLng'),
				'inputtime' => time());
		$id = I('post.id');
		
		$res = $businessCardLogic->edit($data, $id);
		if($res) {
			$this->ajaxReturn(array('status' => '1', 'msg' => $res));
		} else
			$this->ajaxReturn(array('status' => '0', 'msg' => '添加失败'));
		exit();
	}

	/**
	 * 汽车设置
	 */
	protected function carSet() {
		C('DB_PREFIX', C('DB_PREFIX') . 'car_');
		$configLogic = D('Config', 'Logic');
		
		$data = array(
			'name'=> I('post.CarName'),
			'sale_cate0'=> I('post.SaleCate_0'),
			'sale_cate1'=> I('post.SaleCate_1'),
			'banner_path'=> arr2str(I('post.PicPath'),';'),
			'logo_path'=> I('post.Logo'),
			'cate_img_path'=> I('post.CategoryPic'),
			'owner_img_path'=> I('post.OwnerPic'),
			'reply_keyword'=> I('post.ReplyKeyword'),
			'pattern_method'=> I('post.PatternMethod'),
			'reply_title'=> I('post.ReplyTitle'),
			'reply_img_path'=> I('post.ReplyImgPath')
		);

		foreach($data as $k => $v) {
			$configLogic->where(array('action' => 'index', 'option' => $k))->save(array('value' => $v));
		}
	}

	/**
	 * 车型编辑
	 */
	protected function carCateEdit() {
		C('DB_PREFIX', C('DB_PREFIX') . 'car_');
		$categoryLogic = D('CarCategory', 'Logic');

		$data = array(
			'name' => I('post.Category'),
			'imgpath' => I('post.PicPath')
		);
		$id = I('post.CateId');
		if($id) {
			$categoryLogic->where(array('id' => $id))->save($data);

		} else {
			$categoryLogic->add($data);
		}
	}


	/**
	 * 汽车插件
	 */
	protected function carPlugin() {
		$id = I('get.plugin');
		$status = I('get.Status');

		C('DB_PREFIX', C('DB_PREFIX') . 'car_');
		$pluginLogic = D('Plugin', 'Logic');

		$data = array('status' => $status);

		$res = $pluginLogic->where(array('id' => $id))->save($data);

		return $res;

	}



	/**
	 * 预约设定
	 */
	protected function carReserveEdit() {
		C('DB_PREFIX', C('DB_PREFIX') . 'car_');
		$configLogic = D('Config', 'Logic');
		
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

		foreach($data as $k => $v) {
			$configLogic->where(array('action' => 'reserve', 'option' => $k))->save(array('value' => $v));
		}


	}

	/**
	 * 类型排序
	 */
	protected function carCategoryOrder()
	{
		C('DB_PREFIX', C('DB_PREFIX') . 'car_');
		$categoryLogic = D('CarCategory', 'Logic');


		$sortOrder = I('post.sort_order');
		$sortOrder = str2arr($sortOrder, '|');
		var_dump($sortOrder);


		foreach($sortOrder as $k => $v)
		{
			$categoryLogic->where(array('id' => $v))->save(array('order' => $k));
		}
	}


}
