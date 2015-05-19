<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"><meta content="telephone=no" name="format-detection">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">


		<title>我的酒店</title>

		<link rel="stylesheet" type="text/css" href="/test/onethink/Public/static/css/global.css" media="all">
		<link rel="stylesheet" type="text/css" href="/test/onethink/Public/static/api/css/global.css" media="all">
		<link rel="stylesheet" type="text/css" href="/test/onethink/Public/Hotel/css/app_hotels.css" media="all">

		<script type="text/javascript" src="/test/onethink/Public/static/js/jquery-1.7.2.min.js"></script>
		<script language="javascript">
		</script>

	</head>
	<body>

		<div id="banner"><img src="<?php echo ($toppic); ?>"></div>
		<div id="app_hotels">
			<div class="box">
				<h3 id="HotelsName">我的酒店</h3>
				<ul id="prolist">
					<?php if(is_array($data["product"])): $i = 0; $__LIST__ = $data["product"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><li>
					<a href="<?php echo U('hotel/product', array('id' => $val['id']));?>" title="test">
						<dl>
							<dt><?php echo ($val["name"]); ?></dt>
							<dd>
							<span><img src=""/></span>
							<div><?php echo ($val["briefdes"]); ?></div>
							<div>原价：<del>￥<?php echo ($val["price0"]); ?>.00</del></div>                                <div>优惠价：<i>￥<?php echo ($val["price1"]); ?>.00</i></div>
							</dd>
						</dl>
					</a>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
			<div class="box">
				<h3>预订说明</h3>
				<div id="HotelsRemark" class="contents"><?php echo ($data["info"]["des"]); ?></div>
			</div>
			<ul class="info">
				<li><a href="http://api.map.baidu.com/geocoder?address=<?php echo ($data["info"]["name"]); ?>&amp;output=html" ><?php echo ($data["info"]["name"]); ?></a></li>
				<li><a href="tel:<?php echo ($data["info"]["phone"]); ?>"><?php echo ($data["info"]["phone"]); ?> 电话预订</a></li>
				<li><a href="<?php echo U('hotel/detail', array('article' => 'article'));?>">查看商家详情</a></li>
			</ul>
		</div>
		<script language="javascript">
			window.PG.share={
				title:'test',
				desc:'简短介绍',
				img_url:'http://img.pbweixin.com/16/1504/ff3dc8ec94.png'
			}
		</script>
	</body>
</html>