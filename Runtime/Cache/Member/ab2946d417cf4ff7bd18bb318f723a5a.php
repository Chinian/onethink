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

				
				<div id="<?php echo (ACTION_NAME); ?>" class="r_con_wrap">
					
<div class="r_con_form">
	<div class="rows">
		<label>联系人</label>
		<span class="input"><span class="tips"><?php echo ($res["name"]); ?></span></span>
		<div class="clear"></div>
	</div>
	<div class="rows">
		<label>联系手机</label>
		<span class="input"><span class="tips"><?php echo ($res["tel"]); ?></span></span>
		<div class="clear"></div>
	</div>

	<div class="rows">
		<label>预约时间</label>
		<span class="input"><span class="tips"><?php echo (date("Y-m-d H:i:s",$res["reserve_time"])); ?></span></span>
		<div class="clear"></div>
	</div>
	<div class="rows">
		<label>车系</label>
		<span class="input"><span class="tips"><?php echo ($res["car_cate"]); ?></span></span>
		<div class="clear"></div>
	</div>
	<div class="rows">
		<label>车型</label>
		<span class="input"><span class="tips"><?php echo ($res["car_product"]); ?></span></span>
		<div class="clear"></div>
	</div>
	<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="rows">
		<label><?php echo ($v["name"]); ?></label>
		<span class="input"><span class="tips"><?php echo ($v["value"]); ?></span></span>
		<div class="clear"></div>
	</div><?php endforeach; endif; else: echo "" ;endif; ?>
	<div class="rows">
		<label>备注</label>
		<span class="input"><span class="tips"><?php echo ($res["remark"]); ?></span></span>
		<div class="clear"></div>
	</div>
	<div class="rows">
		<label>提交时间</label>
		<span class="input"><span class="tips"><?php echo (date("Y-m-d H:i:s",$res["input_time"])); ?></span></span>
		<div class="clear"></div>
	</div>
	<div class="rows">
		<label></label>
		<span class="input"><a href="<?php echo U('Car/reserve');?>" class="btn_cancel">返 回</a></span>
		<div class="clear"></div>
	</div>
</div>

				</div>

			</div>
		</div>
	</body>
</html>