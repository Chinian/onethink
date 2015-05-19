<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>微信公众平台管理系统</title>
		<link href="/test/onethink/Public/static/css/global.css" rel="stylesheet" type="text/css"  />
		<link href="/test/onethink/Public/static/css/frame.css" rel="stylesheet" type="text/css"  />
		<script type="text/javascript" src="/test/onethink/Public/static/js/jquery-1.7.2.min.js" ></script>
		<script type="text/javascript" src="/test/onethink/Public/static/js/frame.js" ></script>
	</head>

	<body>
		<script type="text/javascript">$(document).ready(frame_obj.search_form_init);</script>
		<div id="iframe_page">
			<div class="iframe_content">
				<link href="/test/onethink/Public/Member/css/app_car.css" rel="stylesheet" type="text/css"  />
				<script type="text/javascript" src="/test/onethink/Public/Member/js/app_car.js" ></script>
				<div class="r_nav">
	<ul>
		<li <?php if((ACTION_NAME) == "index"): ?>class="cur"<?php endif; ?> ><a href="<?php echo U('Car/index');?>">基本设置</a></li>
		<li <?php if((ACTION_NAME == products) OR (ACTION_NAME == category)): ?>class="cur"<?php endif; ?> ><a href="<?php echo U('Car/products');?>">车系管理</a></li>
		<li <?php if((ACTION_NAME) == "news"): ?>class="cur"<?php endif; ?> ><a href="<?php echo U('Car/news');?>">活动资讯</a></li>
		<li <?php if((ACTION_NAME) == "reserve"): ?>class="cur"<?php endif; ?> ><a href="<?php echo U('Car/reserve');?>">预约管理</a></li>
		<li <?php if((ACTION_NAME) == "about"): ?>class="cur"<?php endif; ?> ><a href="<?php echo U('Car/about');?>">关于我们</a></li>
		<li <?php if((ACTION_NAME) == "sales"): ?>class="cur"<?php endif; ?> ><a href="<?php echo U('Car/sales');?>">联系销售</a></li>
		<li <?php if((ACTION_NAME) == "plugin"): ?>class="cur"<?php endif; ?> ><a href="<?php echo U('Car/plugin');?>">实用工具</a></li>
		<li <?php if((ACTION_NAME) == "owner"): ?>class="cur"<?php endif; ?> ><a href="<?php echo U('Car/owner');?>">车主关怀</a></li>
	</ul>
</div>

				
<script type='text/javascript' src='/test/onethink/Public/static/plugin/dragsort/jquery.dragsort-0.5.2.min.js'></script>
<link href='/test/onethink/Public/static/plugin/operamasks-ui/operamasks-ui.css' rel='stylesheet' type='text/css'  />
<script type='text/javascript' src='/test/onethink/Public/static/plugin/operamasks-ui/operamasks-ui.min.js' ></script>
<script type='text/javascript'>$(document).ready(app_car_obj.products_category_init);</script>

				<div id="<?php echo (ACTION_NAME); ?>" class="r_con_wrap">
					
<div class="category">
	<div class="m_lefter">
		<dl>
			<?php if(is_array($cates)): $i = 0; $__LIST__ = $cates;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$c): $mod = ($i % 2 );++$i;?><dd CateId="<?php echo ($c["id"]); ?>">
				<div class="category no_ext">
					<a href="<?php echo U('Car/category', array('id' => $c['id']));?>" title="修改"><img src="/test/onethink/Public/Member/images/mod.gif" align="absmiddle" /></a>
					<a class="category-del" data-url="<?php echo U('Car/delCategory');?>" data-id="<?php echo ($c["id"]); ?>" title="删除"><img src="/test/onethink/Public/Member/images/del.gif" align="absmiddle" /></a>
					<!--<img src="<?php echo ($c["imgpath"]); ?>" width="60" />-->
					<?php echo ($c["name"]); ?>
				</div>
			</dd><?php endforeach; endif; else: echo "" ;endif; ?>
		</dl>
	</div>
	<div class="m_righter">
		<?php if(isset($cate)): ?><form id="app_car_category_form" class="mod_form">
	<h1>修改产品分类</h1>
	<div class="opt_item">
		<label>类别名称：</label>
		<span class="input"><input type="text" name="Category" value="<?php echo ($cate["name"]); ?>" class="form_input" size="15" maxlength="30" notnull /> 
			<font class="fc_red">*</font></span>
		<div class="clear"></div>
	</div>
	<div class="opt_item">
		<label>上传图片：</label>
		<span class="input">
			<div class="file_upload"><input name="FileUpload" id="CategoryFileUpload" type="file" /></div>
			<div class="img_detail" id="CategoryImgDetail"></div>
			<div class="clear"></div>
			<div class="tips">图片尺寸建议：640*280px</div>
		</span>
		<div class="clear"></div>
	</div>
	<div class="opt_item">
		<label></label>
		<span class="input">
			<input type="submit" class="btn_ok btn_ok_w_120" name="submit_button" value="修改分类" />
			<a href="<?php echo U('Car/products' , array('d' => 'category'));?>" class="btn_cancel">返回</a>
		</span>
		<div class="clear"></div>
	</div>
	<input type="hidden" name="PicPath" value="<?php echo ($cate["imgpath"]); ?>">
	<input type="hidden" name="do_action" value="app_car.products_category">
	<input type="hidden" name="CateId" value="<?php echo ($cate["id"]); ?>">
	<input type="hidden" name="ajax" value="<?php echo ($cate["order"]); ?>">
</form>

		<?php else: ?>
		<form id="app_car_category_form" class="">
	<h1>添加产品分类</h1>
	<div class="opt_item">
		<label>类别名称：</label>
		<span class="input"><input type="text" name="Category" value="" class="form_input" size="15" maxlength="30" notnull /> 
			<font class="fc_red">*</font></span>
		<div class="clear"></div>
	</div>
	<div class="opt_item">
		<label>上传图片：</label>
		<span class="input">
			<div class="file_upload"><input name="FileUpload" id="CategoryFileUpload" type="file" /></div>
			<div class="img_detail" id="CategoryImgDetail"></div>
			<div class="clear"></div>
			<div class="tips">图片尺寸建议：640*280px</div>
		</span>
		<div class="clear"></div>
	</div>
	<div class="opt_item">
		<label></label>
		<span class="input">
			<input type="submit" class="btn_ok btn_ok_w_120" name="submit_button" value="添加分类" />
			<a href="<?php echo U('Car/category');?>" class="btn_cancel">返回</a>
		</span>
		<div class="clear"></div>
	</div>
	<input type="hidden" name="PicPath" value="">
	<input type="hidden" name="do_action" value="app_car.products_category">
	<input type="hidden" name="CateId" value="0">
	<input type="hidden" name="ajax" value="1">
</form><?php endif; ?>
	</div>
	<div class="clear"></div>
</div>

				</div>

			</div>
		</div>
	</body>
</html>