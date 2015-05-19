<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
		<meta content="telephone=no" name="format-detection" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="black" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title></title>
		<link href='/test/onethink/Public/static/css/global.css' rel='stylesheet' type='text/css'  />
		<link href='/test/onethink/Public/static/api/css/global.css' rel='stylesheet' type='text/css'  />
		<script type='text/javascript' src='/test/onethink/Public/static/js/jquery-1.7.2.min.js' ></script>
		<script type='text/javascript' src='/test/onethink/Public/static/api/js/jweixin-1.0.0.js' ></script>
		<script type='text/javascript' src='/test/onethink/Public/static/api/js/global.js' ></script>
		<script type="text/javascript">
			window.PG={
page:["33d3974ab3","app_car","index"],
     subscribe:0,
     openid:'',
     fansid:0,
     userid:0,
     cover:'',
     url_pre:'/test/onethink/',
     url_pre_module:'/test/onethink/wechat.php?s=/Wechat/Car/',
     member_id:'16',
     js_sdk:{"appId":"wx295ea8b654156132","nonceStr":"ac53d04916c734d4","timestamp":1430708704 ,"signature":"005fac4af69157014c49b9a77ccb0277cc84fccf"}}
     $(document).ready(function(){global_obj.page_init()});
</script>
</head>

<body>
	<link href='/test/onethink/Public/Car/css/app_car.css' rel='stylesheet' type='text/css'  />
	<script type='text/javascript' src='/test/onethink/Public/static/plugin/swipe/swipe.js' ></script>
	<script type='text/javascript' src='/test/onethink/Public/Car/js/app_car.js' ></script>


	<div id="warpper">
		
		

		<style type="text/css">body,html{background:#ECECEC;}</style>

		

<div class="banner"><img src="<?php echo ($config["owner_img_path"]); ?>" /></div>

<div class="article clean">
	<div class="owner_content" style="padding-top:10px;">
<?php echo ($owner); ?>
	</div>
	<div class="frame2">
		<div class="b1"><input type="button" class="btn2" value="联系销售" onClick="window.location=window.PG.url_pre_module+'contact/'" /></div>
		<div class="b2"><input type="button" class="btn2" value="预约试驾" onClick="window.location=window.PG.url_pre_module+'feedback/sj/'" /></div>
		<div class="clear"></div>
	</div>
</div>
</div>





	</div>

	<div id="footer" class="plug-menu bgcolor"><span class="close"></span></div>
	<ul class="footer_list">
		<li>
		<span class="i_icon"><img src="/test/onethink/Public/Car/images/app_car/icon1.png" /></span>
		<span class="i_name"><a href="<?php echo U('Car/contact');?>/">联系我们</a></span>
		</li>
		<li>
		<span class="i_icon"><img src="/test/onethink/Public/Car/images/app_car/icon2.png" /></span>
		<span class="i_name"><a href="<?php echo U('Car/about');?>/">关于我们</a></span>
		</li>
		<li>
		<span class="i_icon"><img src="/test/onethink/Public/Car/images/app_car/icon3.png" /></span>
		<span class="i_name"><a href="<?php echo U('Car/index');?>">微站首页</a></span>
		</li>    
	</ul>
	<div id="mask"></div>
	<script type="text/javascript">app_car_obj.app_car_footer_init();</script><script language="javascript">
		window.PG.share={
			title:'<?php echo ($config["reply_title"]); ?>',
			desc:'<?php echo ($config["reply_title"]); ?>',
			img_url:'<?php echo ($config["logo_path"]); ?>'
		}
	</script>
</body>
</html>