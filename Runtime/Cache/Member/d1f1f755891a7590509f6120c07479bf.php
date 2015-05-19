<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

		<meta charset="utf-8">
		<title>微信公众平台管理系统</title>
		<link rel="stylesheet" type="text/css" href="/test/onethink/Public/static/css/global.css" media="all">
		<link rel="stylesheet" type="text/css" href="/test/onethink/Public/static/css/frame.css" media="all">
		<script type="text/javascript" src="/test/onethink/Public/static/js/jquery-1.7.2.min.js"></script>
		<script type="text/javascript" src="/test/onethink/Public/static/js/frame.js"></script>


	</head>
	<body>

		<script language="javascript">$(document).ready(frame_obj.search_form_init);</script>
		<div id="iframe_page">
			<div class="iframe_content">
				<link rel="stylesheet" type="text/css" href="/test/onethink/Public/Member/css/hotel.css" media="all">

<div class="r_nav">
	<ul>
		<li class=""><a href="<?php echo U('Hotel/index');?>">基本设置</a></li>
		<li class="cur"><a href="<?php echo U('Hotel/products');?>">房间类型</a></li>
		<li class=""><a href="<?php echo U('Hotel/reserve');?>">预订订单管理</a></li>
	</ul>
</div><div id="products" class="r_con_wrap">



<form id="products_form" class="r_con_form" method="post" action="http://weixin.jucheng01.com/member/?m=app_hotels&amp;a=products">
	<div class="rows">
		<label>房间名称</label>
		<span class="input"><input name="name" value="<?php echo ($data["product"]["name"]); ?>" class="form_input" size="35" maxlength="100" notnull="" type="text"> <font class="fc_red">*</font></span>
		<div class="clear"></div>
	</div>
    <div class="rows">
        <label>房间价格</label>
        <span class="input price">
            原价:￥<input name="price_0" value="<?php echo ($data["product"]["price0"]); ?>" class="form_input" size="5" maxlength="10" type="text">
            现价:￥<input name="price_1" value="<?php echo ($data["product"]["price1"]); ?>" class="form_input" size="5" maxlength="10" type="text">
        </span>
        <div class="clear"></div>
    </div>

    <div class="rows">
        <label>简短介绍</label>
        <span class="input"><textarea name="brief_description" class="briefdesc"><?php echo ($data["product"]["briefdes"]); ?></textarea></span>
        <div class="clear"></div>
    </div>
	<div class="rows">
		<label>其他属性</label>
		<span class="input attr">
		
			下架: <input value="1" name="soldout" type="checkbox"    />
			排序优先级: 	<input value="<?php echo ($data["product"]["order"]); ?>" name="order" type="text" />	</span>
		<div class="clear"></div>
	</div>
    <div class="rows">
        <label>详细介绍</label>
        <span class="input"><textarea name="description" class="briefdesc"><?php echo ($data["product"]["des"]); ?></textarea></span>
        <div class="clear"></div>
    </div>
	<div class="rows">
		<label></label>
		<input type="hidden" name="id" value=<?php echo ($data["product"]["id"]); ?> />
		<span class="input"><input class="btn_ok" id="products_submit" name="submit_button" value="提交保存" type="button">
		<a href="<?php echo U('hotel/products');?>" class="btn_cancel">返回</a></span>
		<div class="clear"></div>
	</div>
</form></div>	</div>
</div>

</body>
<script type="text/javascript" src="/test/onethink/Public/member/js/hotel.js"></script>
</html>