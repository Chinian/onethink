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

		<script type="text/javascript">
			$(function(){
					setSize();
					$(window).resize(setSize);
					});
function setSize(){
	var l1 = ($(window).width()-$('section').width())/2;
	var l2 = ($(window).width()-$('#businesscard_skin_6').width())/2;
	$('section').css({'left':l1});
	$('#businesscard_skin_6').css({'left':l2});
	$('#businesscard_skin_6').height($(window).height());
}
</script>
<div id="businesscard_skin_6"></div>
<audio id="mc" src="<?php echo ($data["bgm"]); ?>" autoplay></audio>
<div id="music"><img src="/test/onethink/Public/Businesscard/images/on.png" /></div>
<section id="section1">
<div class="box1">
	<div class="face_item"><img src="<?php echo ($data["imgpath"]); ?>" /></div>
	<div class="code_item">
		<div class="code show_code"><img src="<?php echo ($data["codeimgpath"]); ?>" /></div>
		<div class="name">二维码</div>
	</div>
	<div class="clear"></div>
</div>
<div class="box2">
	<span><?php echo ($data["name"]); ?></span>
	<span><?php echo ($data["posts"]); ?></span>
</div>
<div class="clear"></div>
<div class="box3">
	<div class="box3_list">
		<div class="icon1 bg1"></div>
		<div class="info1"><?php echo ($data["company"]); ?></div>
		<div class="clear"></div>
	</div>
	<div class="box3_line"></div>
	<div class="box3_list">
		<div class="icon1 bg2" style="width:7%;"></div>
		<div class="info"><a href="tel:<?php echo ($data["mobile"]); ?>"><?php echo ($data["mobile"]); ?></a></div>
		<div class="clear"></div>
	</div>
	<div class="box3_line"></div>
	<?php if($data['tel']): ?><div class="box3_list">
		<div class="icon1 bg3"></div>
		<div class="info"><a href="tel:<?php echo ($data["tel"]); ?>"><?php echo ($data["tel"]); ?></a></div>
		<div class="clear"></div>
	</div>
	<div class="box3_line"></div><?php endif; ?>
	<?php if($data['fax']): ?><div class="box3_list">
		<div class="icon1 bg4"></div>
		<div class="info"><a href="tel:<?php echo ($data["fax"]); ?>"><?php echo ($data["fax"]); ?></a></div>
		<div class="clear"></div>
	</div>
	<div class="box3_line"></div><?php endif; ?>
	<?php if($data['qq']): ?><div class="box3_list">
		<div class="icon1 bg7"></div>
		<div class="info">QQ　<?php echo ($data["qq"]); ?></div>
		<div class="clear"></div>
	</div>
	<div class="box3_line"></div><?php endif; ?>
	<?php if($data['email']): ?><div class="box3_list">
		<div class="icon1 bg5"></div>
		<div class="info1"><?php echo ($data["email"]); ?></div>
		<div class="clear"></div>
	</div>
	<div class="box3_line"></div><?php endif; ?>
	<div class="box3_list">
		<div class="icon1 bg6"></div>
		<div class="info1"><?php echo ($data["add"]); ?></div>
		<div class="clear"></div>
	</div>
	<div class="box3_line"></div>
	<?php if($data['briefdes']): ?><div class="box3_list">
		<div class="icon1 bg8"></div>
		<div class="info1">简短描述简短描述</div>
		<div class="clear"></div>
	</div>
	<div class="box3_line"></div><?php endif; ?>
</div>
<div class="box4">
	<?php if($data['isweb'] == 1): ?><div class="f_icon"><a href="../web/"><img src="/test/onethink/Public/Businesscard/images/businesscard/skin_6/f1.png" /></a></div><?php endif; ?>
	<div class="f_icon"><a href="http://api.map.baidu.com/marker?location=<?php echo ($data["loc"]); ?>&title=<?php echo (urlencode($data["company"])); ?>&name=<?php echo (urlencode($data["company"])); ?>&content=<?php echo (urlencode($data["add"])); ?>&output=html"><img src="/test/onethink/Public/Businesscard/images/businesscard/skin_6/f2.png" /></a></div>
	<div class="f_icon"><a href="#share"><img src="/test/onethink/Public/Businesscard/images/businesscard/skin_6/f3.png" /></a></div>
	<div class="f_icon"><a href="tel:手机手机"><img src="/test/onethink/Public/Businesscard/images/businesscard/skin_6/f4.png" /></a></div>
</div>
</section>
<div id="hidcode"><img src="<?php echo ($data["codeimgpath"]); ?>" /><div class="close_btn">关闭</div></div>

<script language="javascript">
	window.PG.share={
		title:'<?php echo ($data["name"]); ?>的微名片',
		desc:'<?php echo ($data["name"]); ?>',
		img_url:'<?php echo ($data["imgpath"]); ?>'
	}
</script>
</body>
</html>