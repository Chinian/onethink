<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
	<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
        <meta content="telephone=no" name="format-detection">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>城市微联盟-婚庆摄影</title>
        <link rel="stylesheet" type="text/css" href="/test/onethink/Public/Wedding/css/secondhand.css"/>
	</head>
	<body>
		<header class="header">
			<div id="back">
				<img src="/test/onethink/Public/Wechat/api/images/back.png" onClick="history.back(-1)"/>
			</div>
			<div class="header_title">婚庆摄影</div>
			<div id="my">
				<a href="<?php echo U('vip/index');?>"><img src="/test/onethink/Public/Wechat/api/images/my_icon.png" /></a>
			</div>
			<div class="clear" ></div>
	</header>
		<div class="container">
			<div class="sh_type_box">
				<h3><a href="<?php echo U('infolist');?>">热门推荐</a></h3>
				<ul>
					<a href=""><li>婚纱照</li></a>
					<a href=""><li>婚礼策划</li></a>
					<a href=""><li>小米</li></a>
					<a href=""><li>苹果手机</li></a>
					<a href=""><li>ipad</li></a>
					<a href=""><li>小米</li></a>
					<li class="clear"></li>
				</ul>
			</div>

			<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?><div class="sh_type_box">
				<h3><a href="<?php echo U('Wedding/infolist', array('category' => $cate['id']));?>"><?php echo ($cate["title"]); ?></a></h3>
				<ul>
					<?php if(is_array($cate["child"])): $i = 0; $__LIST__ = $cate["child"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$childcate): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Wedding/infolist', array('category' => $childcate['id']));?>"><li><?php echo ($childcate["title"]); ?></li></a><?php endforeach; endif; else: echo "" ;endif; ?>
					<li class="clear"></li>
				</ul>
			</div><?php endforeach; endif; else: echo "" ;endif; ?>

		</div>
		<footer id="footer">
			<a href="<?php echo U('infoedit');?>"><div id="publish">发布婚庆信息</div></a>
			<div class="clear"></div>
		</footer>	
	</body>
</html>