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
		<script language="javascript">$(document).ready(frame_obj.search_form_init);</script>
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

				

<link href='/test/onethink/Public/static/plugin/operamasks-ui/operamasks-ui.css' rel='stylesheet' type='text/css'  />
<script type='text/javascript' src='/test/onethink/Public/static/plugin/operamasks-ui/operamasks-ui.min.js' ></script>
<script src="//cdn.ckeditor.com/4.4.7/full/ckeditor.js"></script>
<script src="/test/onethink/Public/static/plugin/ckeditor/config.js"></script>
<script type="text/javascript">
	CKEDITOR.editorConfig(CKEDITOR.config);
</script>
<script type="text/javascript">$(document).ready(app_car_obj.sales_init);</script>

				<div id="<?php echo (ACTION_NAME); ?>" class="r_con_wrap">
					
<form id="sales_form" class="r_con_form" method="post" url="<?php echo U('Car/editSales');?>">
	<div class="rows">
		<label>销售名称</label>
		<span class="input"><input type="text" class="form_input" name="Title" value="<?php echo ($sales["name"]); ?>" size="40" notnull /> <font class="fc_red">*</font> <span class="tips"> 不超过20个字</span></span>
		<div class="clear"></div>
	</div>
	<div class="rows">
		<label>销售电话</label>
		<span class="input"><input type="text" class="form_input" name="Phone" value="<?php echo ($sales["tel"]); ?>" size="40" notnull /> <font class="fc_red">*</font></span>
		<div class="clear"></div>
	</div>
	<div class="rows">
		<label>销售图片</label>
		<span class="input">
			<span class="upload_file">
				<div>
					<div class="up_input"><input name="ImgUpload" id="ImgUpload" type="file" /></div>
					<div class="tips">图片宽度建议：200x200px</div>
					<div class="clear"></div>
				</div>
				<div class="img" id="ImgDetail"></div>
			</span>
		</span>
		<div class="clear"></div>
	</div>
	<div class="rows">
		<label> 销售简介</label>
		<span class="input"><textarea name="BriefDescription" class="ckeditor"><?php echo ($sales["des"]); ?></textarea></span>
		<div class="clear"></div>
	</div>
	<div class="rows">
		<label>分类</label>
		<span class="input">
			<select name="CateId">
				<optgroup label="--请选择分类--">
					<?php if(is_array($types)): foreach($types as $k=>$v): ?><option value="<?php echo ($k); ?>" <?php if($sales['type'] == $k): ?>selected="selected"<?php endif; ?>><?php echo ($v); ?></option><?php endforeach; endif; ?>
				</optgroup>
			</select>
			<font class="fc_red">*</font>
		</span>
		<div class="clear"></div>
	</div>
	<div class="rows">
		<label>排序</label>
		<span class="input"><input type="text" class="form_input" name="MyOrder" value="<?php echo ((isset($sales["order"]) && ($sales["order"] !== ""))?($sales["order"]):"0"); ?>" size="5" notnull /></span>
		<div class="clear"></div>
	</div>
	<div class="rows">
		<label>&nbsp;</label>
		<span class="input"><input type="button" class="btn_ok" name="submit_button" value="提交保存" /><a href="<?php echo U('Car/sales');?>" class="btn_cancel">返回</a></span>
		<div class="clear"></div>
	</div>
	<input type="hidden" name="ImgPath" value="<?php echo ($sales["imgpath"]); ?>" />
	<input type="hidden" name="SId" value="<?php echo ($sales["id"]); ?>" />
	<input type="hidden" name="do_action" value="app_car.sales_edit" />
</form>

				</div>

			</div>
		</div>
	</body>
</html>