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
<script language="javascript">
	$(document).ready(function(){
		frame_obj.config_form_init();
		app_car_obj.config_init();
	});
</script>

				<div id="<?php echo (ACTION_NAME); ?>" class="r_con_wrap">
					
<div class="r_con_config r_con_wrap">
	<form id="config_form">
		<table border="0" cellpadding="0" cellspacing="0">
			<tr>
				<td valign="top" width="50%">
					<h1><span class="fc_red">*</span> <strong>名称</strong></h1>
					<input type="text" class="input" name="CarName" value="<?php echo ($config["name"]); ?>" maxlength="30" notnull />
				</td>
				<td valign="top" width="50%">
					<h1><span class="fc_red">*</span> <strong>销售分类</strong></h1>
					<div class="rows">
						<span class="rbar mar_r5"><input type="text" class="input w140" name="SaleCate_0" value="<?php echo ($config["sale_cate0"]); ?>"  notnull /></span>
						<span class="rbar"><input type="text" class="input w140" name="SaleCate_1" value="<?php echo ($config["sale_cate1"]); ?>"  notnull /></span>
						<div class="clear"></div>
					</div>
				</td>
			</tr>
			<tr>
				<td valign="top">
					<h1><strong>首页切换Banner</strong><span class="tips">（共可上传3张图片，图片大小建议：640px*400px）</span></h1>
					<div class="u_file_multi">
						<div><input name="BannerUpload" id="BannerUpload" type="file" /></div>
						<div class="img">
							<?php if(is_array($config["banner_path"])): $i = 0; $__LIST__ = $config["banner_path"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div>
								<a href="<?php echo ($v); ?>" target="_blank"><img src="<?php echo ($v); ?>" /></a>
								<span>删除</span>
								<input type="hidden" name="PicPath[]" value="<?php echo ($v); ?>" />
							</div><?php endforeach; endif; else: echo "" ;endif; ?>
						</div>
						<div class="clear"></div>
					</div>
				</td>
				<td valign="top">
					<h1><strong>Logo</strong></h1>
					<div class="u_file">
						<span class="fc_red">*</span>Logo<span class="tips">&nbsp;&nbsp;Logo尺寸建议：160*80px，png透明格式</span><br /><br />
						<input name="LogoUpload" id="LogoUpload" type="file" /><br /><br />
						<div class="img" id="LogoDetail"></div>
					</div>
				</td>
			</tr>
			<tr>
				<td valign="top">
					<h1><strong>车型</strong></h1>
					<div class="u_file">
						<span class="fc_red">*</span>车型图片<span class="tips">&nbsp;&nbsp;图片尺寸建议：640*282px</span><br /><br />
						<input name="CategoryUpload" id="CategoryUpload" type="file" /><br /><br />
						<div class="img" id="categoryDetail"></div>
					</div>
				</td>
				<td valign="top">
					<h1><strong>车主关怀</strong></h1>
					<div class="u_file">
						<span class="fc_red">*</span>Banner图片<span class="tips">&nbsp;&nbsp;图片尺寸建议：640*282px，png透明格式</span><br /><br />
						<input name="OwnerUpload" id="OwnerUpload" type="file" /><br /><br />
						<div class="img" id="ownerDetail"></div>
					</div>
				</td>
			</tr>
		</table>
		<table align="center" border="0" cellpadding="0" cellspacing="0">
			<tr>
				<td>
					<h1><strong>触发信息设置</strong></h1>
					<div class="reply_msg">
						<div class="m_left">
							<span class="fc_red">*</span> 触发关键词<span class="tips_key">（有多个关键词请用空格隔开）</span><br />
							<input type="text" class="input" name="ReplyKeyword" value="<?php echo ($config["reply_keyword"]); ?>" maxlength="100" notnull /><br /><br /><br />
							<span class="fc_red">*</span> 匹配模式<br />
							<div class="input"><input type="radio" name="PatternMethod" value="0" <?php if($config['pattern_method'] == 0): ?>checked="checked"<?php endif; ?> />精确匹配<span class="tips">（输入的文字和此关键词一样才触发）</span></div>
							<div class="input"><input type="radio" name="PatternMethod" value="1"  <?php if($config['pattern_method'] == 1): ?>checked="checked"<?php endif; ?> />模糊匹配<span class="tips">（输入的文字包含此关键词就触发）</span></div><br /><br />
							<span class="fc_red">*</span> 图文消息标题<br />
							<input type="text" class="input" name="ReplyTitle" value="汽车" maxlength="100" notnull />
						</div>
						<div class="m_right">
							<span class="fc_red">*</span> 图文消息封面<span class="tips">（图片尺寸建议：640*360px）</span><br />
							<div class="file"><input name="ReplyImgUpload" id="ReplyImgUpload" type="file" /></div><br />
							<div class="img" id="ReplyImgDetail"></div>
						</div>
						<div class="clear"></div>
					</div>
					<input type="hidden" name="ReplyImgPath" value="<?php echo ($config["reply_img_path"]); ?>" />
				</td>
			</tr>
		</table>
		<div class="submit"><input type="submit" name="submit_button" value="提交保存" /></div>
		<input type="hidden" name="Logo" value="<?php echo ($config["logo_path"]); ?>" />
		<input type="hidden" name="CategoryPic" value="<?php echo ($config["cate_img_path"]); ?>" />

		<input type="hidden" name="OwnerPic" value="<?php echo ($config["owner_img_path"]); ?>" />
		<input type="hidden" name="do_action" value="app_car.config" />
	</form>
</div>

				</div>

			</div>
		</div>
	</body>
</html>