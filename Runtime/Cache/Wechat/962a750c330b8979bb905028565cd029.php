<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" /><meta content="telephone=no" name="format-detection" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="black" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title></title>
		<link href='/test/onethink/Public/static/css/global.css' rel='stylesheet' type='text/css'  />
		<link href='/test/onethink/Public/static/api/css/global.css' rel='stylesheet' type='text/css'  />
		<script type='text/javascript' src='/test/onethink/Public/static/js/jquery-1.7.2.min.js' ></script>
		<script type='text/javascript' src='/test/onethink/Public/static/api/js/jweixin-1.0.0.js' ></script>
		<script type='text/javascript' src='/test/onethink/Public/static/api/js/global.js' ></script>
		<script language="javascript">
			window.PG={
				page:["33d3974ab3","businesscard","detail","1318"],
				subscribe:0,
				openid:'',
				fansid:0,
				userid:0,
				cover:'',
				url_pre:'/test/onethink/wechat.php?s=/Wechat/',
				url_pre_module:'/test/onethink/wechat.php?s=/Wechat/Businesscard/',
				member_id:'16',
				js_sdk:{"appId":"wx295ea8b654156132","nonceStr":"7a4195868174461b","timestamp":1430193165,"signature":"cee7913584c137ff8a8ad3e57a06ba3390011b0d"}}
			$(document).ready(function(){global_obj.page_init()});
		</script>
	</head>

	<body>
		<link href='/test/onethink/Public/Businesscard/css/businesscard.css' rel='stylesheet' type='text/css'  />
		<script type='text/javascript' src='/test/onethink/Public/Businesscard/js/businesscard.js' ></script>
		<script language="javascript">$(document).ready(businesscard_obj.businesscard_init);</script>

		<style>body,html{ background:#3e3a3e;}</style>
		<div id="businesscard_skin_1">
			<audio id="mc" src="<?php echo ($data["bgm"]); ?>" autoplay></audio>
			<div id="music"><img src="/test/onethink/Public/Businesscard/images/on.png" /></div>
			<section>
			<div class="box1">
				<div class="icon-item"><img src="/test/onethink/Public/Businesscard/images/businesscard/skin_1/icon1.png" /></div>
				<div class="face-item"><img src="<?php echo ($data["imgpath"]); ?>" /></div>
				<div class="icon-item show_code"><img src="/test/onethink/Public/Businesscard/images/businesscard/skin_1/icon2.png" /></div>
			</div>
			<div class="box2">
				<span><?php echo ($data["name"]); ?></span><br>
				<span><?php echo ($data["posts"]); ?></span>
			</div>
			<div class="box3"><?php echo ($data["company"]); ?></div>
			<div class="box4">
				<div class="box4_list">
					<div class="icon bg1"></div>
					<div class="title">手机</div>
					<div class="content"><a href="tel:<?php echo ($data["mobile"]); ?>"><?php echo ($data["mobile"]); ?></a></div>
					<div class="clear"></div>
				</div>
				<?php if($data['tel']): ?><div class="box4_list">
					<div class="icon bg2"></div>
					<div class="title">电话</div>
					<div class="content"><a href="tel:<?php echo ($data["tel"]); ?>"><?php echo ($data["tel"]); ?></a></div>
					<div class="clear"></div>
				</div><?php endif; ?>
				<?php if($data['fax']): ?><div class="box4_list">
					<div class="icon bg3"></div>
					<div class="title">传真</div>
					<div class="content"><a href="tel:<?php echo ($data["fax"]); ?>"><?php echo ($data["fax"]); ?></a></div>
					<div class="clear"></div>
				</div><?php endif; ?>
				<?php if($data['qq']): ?><div class="box4_list">
					<div class="icon bg6"></div>
					<div class="title">QQ</div>
					<div class="content"><?php echo ($data["qq"]); ?></div>
					<div class="clear"></div>
				</div><?php endif; ?>
				<?php if($data['email']): ?><div class="box4_list">
					<div class="icon bg4"></div>
					<div class="title">邮箱</div>
					<div class="content1"><?php echo ($data["email"]); ?></div>
					<div class="clear"></div>
				</div><?php endif; ?>
				<div class="box4_list">
					<div class="icon bg5"></div>
					<div class="title">地址</div>
					<div class="content1">feeling bar</div>
					<div class="clear"></div>
				</div>
				<?php if($data['briefdes']): ?><div class="box4_list">
					<div class="icon bg9"></div>
					<div class="title">描述</div>
					<div class="content1"><?php echo ($data["briefdes"]); ?></div>
					<div class="clear"></div>
				</div><?php endif; ?>
			</div>
			<div class="box5">
				<?php if($data['isweb'] == 1): ?><div class="f_icon"><a href="../web/"><img src="/test/onethink/Public/Businesscard/images/businesscard/skin_1/f1.png" /></a></div><?php endif; ?>
				<div class="f_icon"><a href="http://api.map.baidu.com/marker?location=39.908253,116.627034&title=%E5%85%AC%E5%8F%B8&name=%E5%85%AC%E5%8F%B8&content=feeling+bar&output=html"><img src="/test/onethink/Public/Businesscard/images/businesscard/skin_1/f2.png" /></a> </div>
				<div class="f_icon"><a href="#share"><img src="/test/onethink/Public/Businesscard/images/businesscard/skin_1/f3.png" /></a></div>
				<div class="f_icon"><a href="tel:<?php echo ($data["mobile"]); ?>"><img src="/test/onethink/Public/Businesscard/images/businesscard/skin_1/f4.png" /></a></div>
			</div>
			</section>
		</div>
		<div id="hidcode"><img src="<?php echo ($data["codeimgpath"]); ?>" /><div class="close_btn">关闭</div></div><script language="javascript">
			window.PG.share={
				title:'<?php echo ($data["name"]); ?>的微名片',
				desc:'<?php echo ($data["name"]); ?>',
				img_url:'<?php echo ($data["imgpath"]); ?>'
			}
	</script></body>
</html>