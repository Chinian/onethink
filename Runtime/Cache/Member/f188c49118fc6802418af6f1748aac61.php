<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>微信公众平台管理系统</title>
<link href='/test/onethink/Public/static/css/global.css' rel='stylesheet' type='text/css'  />
<link href='/test/onethink/Public/static/css/frame.css' rel='stylesheet' type='text/css'  />
<script type='text/javascript' src='/test/onethink/Public/static/js/jquery-1.7.2.min.js' ></script>
<script type='text/javascript' src='/test/onethink/Public/static/js/frame.js' ></script>
</head>

<body>
	<script language="javascript">$(document).ready(frame_obj.search_form_init);</script>
	<div id="iframe_page">
		<div class="iframe_content">
			<link href='/test/onethink/Public/Member/css/app_car.css' rel='stylesheet' type='text/css'  />
			<script type='text/javascript' src='/test/onethink/Public/Member/js/app_car.js' ></script>
<div class="r_nav">
	<ul>
		<li <?php if((ACTION_NAME) == "index"): ?>class="cur"<?php endif; ?> ><a href="<?php echo U('Car/index');?>">基本设置</a></li>
		<li <?php if((ACTION_NAME) == "products"): ?>class="cur"<?php endif; ?> ><a href="<?php echo U('Car/products');?>">车系管理</a></li>
		<li <?php if((ACTION_NAME) == "news"): ?>class="cur"<?php endif; ?> ><a href="<?php echo U('Car/news');?>">活动资讯</a></li>
		<li <?php if((ACTION_NAME) == "reserve"): ?>class="cur"<?php endif; ?> ><a href="<?php echo U('Car/reserve');?>">预约管理</a></li>
		<li <?php if((ACTION_NAME) == "about"): ?>class="cur"<?php endif; ?> ><a href="<?php echo U('Car/about');?>">关于我们</a></li>
		<li <?php if((ACTION_NAME) == "sales"): ?>class="cur"<?php endif; ?> ><a href="<?php echo U('Car/sales');?>">联系销售</a></li>
		<li <?php if((ACTION_NAME) == "tool"): ?>class="cur"<?php endif; ?> ><a href="<?php echo U('Car/tool');?>">实用工具</a></li>
		<li <?php if((ACTION_NAME) == "owner"): ?>class="cur"<?php endif; ?> ><a href="<?php echo U('Car/owner');?>">车主关怀</a></li>
	</ul>
</div>
<div id="reserve" class="r_con_wrap">
	<script type="text/javascript" src="http://api.map.baidu.com/api?v=1.5&ak=Xbq3g4meudxD5Q0MB9osTLpg"></script>
	<link href='/test/onethink/Public/static/plugin/operamasks-ui/operamasks-ui.css?' rel='stylesheet' type='text/css'  />
	<script type='text/javascript' src='/test/onethink/Public/static/plugin/operamasks-ui/operamasks-ui.min.js' ></script>
	<script type='text/javascript'>$(document).ready(app_car_obj.reserve_edit_init);</script>
	<div class="clear"></div>
	<form class="r_con_form" id="reserve_form">
		<div class="rows">
			<label>标题</label>
			<span class="input"><span class="tips">预约试驾</span></span>
			<div class="clear"></div>
		</div>
		<div class="rows">
			<label>重命名标题</label>
			<span class="input"><input type="text" class="form_input" name="RenameTitle" value="<?php echo ($config["rename_title"]); ?>" maxlength="100" size="35" notnull /> <font class="fc_red">*</font></span>
			<div class="clear"></div>
		</div>
		<div class="rows">
			<label>预约地址</label>
			<span class="input">
				<input name="Address" id="Address" value="<?php echo ($config["add"]); ?>" type="text" class="form_input" size="40" maxlength="100" />
				<span class="primary" id="Primary">定位</span><br />
				<div class="tips">接待预约用户地址，如果输入地址后点击定位按钮无法定位，请在地图上直接点击选择地点</div>
				<div id="map"></div>
			</span>
			<div class="clear"></div>
		</div>
		<div class="rows">
			<label>头部图片</label>
			<span class="input">
				<span class="upload_file">
					<div>
						<div class="up_input"><input name="HeaderImgUpload" id="HeaderImgUpload" type="file" /></div>
						<div class="tips">图片宽度建议：640px</div>
						<div class="clear"></div>
					</div>
					<div class="img" id="HeaderImgDetail"></div>
				</span>
			</span>
			<div class="clear"></div>
		</div>
		<div class="rows">
			<label>预约电话</label>
			<span class="input">
				<textarea name="Telephone" class="textarea"><?php echo ($config["tel"]); ?></textarea>
				<span class="tips">每行填写一个</span>
			</span>
			<div class="clear"></div>
		</div>
		<div class="rows">
			<label>重命名电话</label>
			<span class="input">
				<input type="text" class="form_input" name="RenameTelephone" value="<?php echo ($config["rename_tel"]); ?>" maxlength="100" size="35" />
				<div class="tips">修改用户手机中“预约电话”栏目的名称，您可以将其修改成诸如“下单电话”、“试驾电话”等</div>
			</span>
			<div class="clear"></div>
		</div>
		<div class="rows">
			<label>预约说明</label>
			<span class="input"><textarea name="Remark" class="textarea"><?php echo ($config["remark"]); ?></textarea></span>
			<div class="clear"></div>
		</div>
		<div class="rows">
			<label>重命名说明</label>
			<span class="input">
				<input type="text" class="form_input" name="RenameRemark" value="<?php echo ($config["rename_remark"]); ?>" maxlength="100" size="35" />
				<div class="tips">修改用户手机中“预约说明”栏目的名称，您可以将其修改成诸如“下单说明”、“试驾说明”等</div>
			</span>
			<div class="clear"></div>
		</div>


		<div class="rows">
			<label>&nbsp;</label>
			<span class="input">
				<input type="submit" class="btn_ok" name="submit_button" value="提交保存" /><a href="<?php echo U('Car/reserve');?>" class="btn_cancel">返回</a>
			</span>
			<div class="clear"></div>
		</div>
		<input type="hidden" name="RId" value="" />
		<input type="hidden" name="HeaderImgPath" value="<?php echo ($config["header_img_path"]); ?>" />
		<input type="hidden" name="PrimaryLng" value="<?php echo ($config["lng"]); ?>">
		<input type="hidden" name="PrimaryLat" value="<?php echo ($config["lat"]); ?>">
		<input type="hidden" name="do_action" value="app_car.reserve_edit" />
		<input type="hidden" name="ajax" value="1" />
	</form>
	</div>
</div>
</div>
</body>
</html>