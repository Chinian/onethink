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

				
<link href='/test/onethink/Public/static/plugin/operamasks-ui/operamasks-ui.css' rel='stylesheet' type='text/css'  />
<script type='text/javascript' src='/test/onethink/Public/static/plugin/operamasks-ui/operamasks-ui.min.js' ></script>
<script src="//cdn.ckeditor.com/4.4.7/full/ckeditor.js"></script>
<script src="/test/onethink/Public/static/plugin/ckeditor/config.js"></script>
<script type="text/javascript">
	CKEDITOR.editorConfig(CKEDITOR.config);
</script>
<script type="text/javascript">$(document).ready(app_car_obj.about_init);</script>

				<div id="<?php echo (ACTION_NAME); ?>" class="r_con_wrap">
					
<div id="about" class="r_con_wrap">
	<form id="about_form" class="r_con_form" method="post" url="<?php echo U('Car/about');?>">
		<div class="rows">
			<label>关于我们</label>
			<span class="input">
				<textarea class="ckeditor" name="Contents"><?php echo ($about); ?></textarea>
			</span>
			<div class="clear"></div>
		</div>
		<div class="rows">
			<label>&nbsp;</label>
			<span class="input">
				<input type="button" class="btn_ok" name="submit_button" value="提交保存" />
			</span>
			<div class="clear"></div>
		</div>
		<input type="hidden" name="do_action" value="app_car.about" />
	</form>
</div>

				</div>

			</div>
		</div>
	</body>
</html>