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
		<div id="businesscard_skin_0">
			<audio id="mc" src="<?php echo ($data["bgm"]); ?>" autoplay></audio>
			<div id="music"><img src="/test/onethink/Public/Businesscard/images/on.png" /></div>
			<div class="logo"><img src="<?php echo ($data["imgpath"]); ?>" /></div>
			<div class="toper">
				<h1><?php echo ($data["name"]); ?></h1>
				<label><?php echo ($data["posts"]); ?></label>
				<div class="clear"></div>
			</div>
			<ul>
				<li class="t"></li>
				<li class="c">
				<dl>
					<dt><?php echo ($data["company"]); ?></dt>
					<dd class="bn"><label><img src="/test/onethink/Public/Businesscard/images/phone.jpg" /></label><a href="tel:<?php echo ($data["mobile"]); ?>"><?php echo ($data["mobile"]); ?></a></dd>
					<?php if($data['tel']): ?><dd><label><img src="/test/onethink/Public/Businesscard/images/tel.jpg" /></label><a href="tel:<?php echo ($data["tel"]); ?>"><?php echo ($data["tel"]); ?></a></dd><?php endif; ?>
					<?php if($data['fax']): ?><dd><label><img src="/test/onethink/Public/Businesscard/images/fax.jpg" /></label><a href="tel:<?php echo ($data["fax"]); ?>"><?php echo ($data["fax"]); ?></a></dd><?php endif; ?>
					<?php if($data['qq']): ?><dd><label><img src="/test/onethink/Public/Businesscard/images/qq.jpg" /></label><?php echo ($data["qq"]); ?></dd><?php endif; ?>
					<?php if($data['email']): ?><dd><label><img src="/test/onethink/Public/Businesscard/images/mail.jpg" /></label><?php echo ($data["email"]); ?></dd><?php endif; ?>
					<?php if($data['website']): ?><dd><label><img src="/test/onethink/Public/Businesscard/images/e.jpg" /></label><?php echo ($data["website"]); ?></dd><?php endif; ?>
					<?php if($data['add']): ?><dd><label><img src="/test/onethink/Public/Businesscard/images/locate.jpg" /></label><?php echo ($data["add"]); ?></dd><?php endif; ?>
					<?php if($data['briefdes']): ?><dd><label><img src="/test/onethink/Public/Businesscard/images/write.png" /></label><?php echo ($data["briefdes"]); ?></dd><?php endif; ?>
				</dl>
				</li>
				<li class="b"></li>
			</ul>
			<div class="bottom">
				<a href="../web/">进入微官网</a>
				<a href="http://api.map.baidu.com/marker?location=<?php echo ($data["loc"]); ?>&title=<?php echo (urlencode($data["company"])); ?>&name=<?php echo (urlencode($data["company"])); ?>&content=<?php echo (urlencode($data["add"])); ?>&output=html">一键导航</a>
				<a href="#share">分享给朋友</a>
				<?php if($data['customize']): ?><a href="<?php echo ($data["customizeurl"]); ?>"><?php echo ($data["customize"]); ?></a><?php endif; ?>
			</div>
		</div>
		<div id="share"><img src="/test/onethink/Public/Businesscard/images/share.png" /></div>
		<script language="javascript">
			window.PG.share={
				title:'<?php echo ($data["name"]); ?>的微名片',
				desc:'<?php echo ($data["name"]); ?>',
				img_url:'<?php echo ($data["imgpath"]); ?>'
			}
	</script></body>
</html>