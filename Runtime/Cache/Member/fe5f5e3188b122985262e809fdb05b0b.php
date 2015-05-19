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
		<li class=""><a href="<?php echo U('Hotel/products');?>">房间类型</a></li>
		<li class="cur"><a href="<?php echo U('Hotel/reserve');?>">预订订单管理</a></li>
	</ul>
</div><div id="reserve" class="r_con_wrap">
	     <form class="r_con_form" id="reservedetail_form">
      
			<div class="rows">
				<label>预订房型</label>
				<span class="input"><span class="tips"><?php echo ($data["reserve"]["pname"]); ?></span></span>
				<div class="clear"></div>
			</div>
			<div class="rows">
				<label>预订价</label>
				<span class="input"><span class="tips"><span class="fc_red">￥1</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>原价：</strong><del>￥1</del></span></span>
				<div class="clear"></div>
			</div>
							<div class="rows">
					<label>联系人</label>
					<span class="input"><span class="tips"><?php echo ($data["reserve"]["name"]); ?></span></span>
					<div class="clear"></div>
				</div>
							<div class="rows">
					<label>联系手机</label>
					<span class="input"><span class="tips"><?php echo ($data["reserve"]["phone"]); ?></span></span>
					<div class="clear"></div>
				</div>
							<div class="rows">
					<label>入住日期</label>
					<span class="input"><span class="tips"><?php echo (date("Y-m-d",$data["reserve"]["checkin_time"])); ?></span></span>
					<div class="clear"></div>
				</div>
							<div class="rows">
					<label>入住时间</label>
					<span class="input"><span class="tips"><?php echo (date("H:i",$data["reserve"]["checkin_time"])); ?></span></span>
					<div class="clear"></div>
				</div>
			            	<div class="rows">
					<label>离店日期</label>
					<span class="input"><span class="tips"><?php echo (date("Y-m-d",$data["reserve"]["departure_time"])); ?></span></span>
					<div class="clear"></div>
				</div>
                        	<div class="rows">
					<label>离店时间</label>
					<span class="input"><span class="tips"><?php echo (date("H:i",$data["reserve"]["departure_time"])); ?></span></span>
					<div class="clear"></div>
				</div>
                        			<div class="rows">
				<label>订单状态</label>
				<span class="input">
					<select name="OrderState">
						<option value="0" <?php if($data['reserve']['status'] == 0 ): ?>selected="selected"<?php endif; ?> >未处理</option>
						<option value="1" <?php if($data['reserve']['status'] == 1 ): ?>selected="selected"<?php endif; ?>>已处理</option>
						<option value="2" <?php if($data['reserve']['status'] == 2 ): ?>selected="selected"<?php endif; ?>>已完成</option>
						<option value="3" <?php if($data['reserve']['status'] == 3 ): ?>selected="selected"<?php endif; ?>>已取消</option>
					</select>
				</span>
				<div class="clear"></div>
			</div>
			<div class="rows">
				<label>提交时间</label>
				<span class="input"><span class="tips"><?php echo (date("Y-m-d H:i",$data["reserve"]["inputtime"])); ?></span></span>
				<div class="clear"></div>
			</div>
			<div class="rows">
				<label></label>
				<span class="input">
						<input class="btn_ok" id="reservedetail_submit" name="submit_button" value="提交保存" type="button">
						<input name="LId" value="<?php echo ($data["reserve"]["id"]); ?>" type="hidden">

					<a href="<?php echo U('Hotel/reserve');?>" class="btn_cancel">返 回</a>
				</span>
				<div class="clear"></div>
			</div>
     </form>
	</div>	</div>
</div>

</body>

<script type="text/javascript" src="/test/onethink/Public/Member/js/hotel.js"></script>

</html>