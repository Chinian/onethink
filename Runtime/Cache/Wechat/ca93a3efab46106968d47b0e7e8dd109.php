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
		<style type="text/css">body,html{background:#1a2b41;}</style>
		<div id="businesscard_skin_5">
			<audio id="mc" src="http://img.pbweixin.com/16/1504/7323f7d282.mp3" autoplay></audio>
			<div id="music"><img src="/test/onethink/Public/Businesscard/images/on.png" /></div>
			<div class="box1">
				<span class="face_item"><img src="<?php echo ($data["imgpath"]); ?>" /></span>
			</div>
			<div class="box2">
				<span><?php echo ($data["name"]); ?></span>
				<span><?php echo ($data["posts"]); ?></span>
			</div>
			<div class="box3">
				<div class="box3_item1">
					<div class="f_icon"><a href="../web/"><span class="bg1" style="width:34%;"></span></a></div>            <div class="f_icon"><a href="http://api.map.baidu.com/marker?location=<?php echo ($data["loc"]); ?>&title=<?php echo (urlencode($data["company"])); ?>&name=<?php echo (urlencode($data["company"])); ?>&content=<?php echo (urlencode($data["add"])); ?>&output=html"><span class="bg2"></span></a></div>
					<div class="f_icon"><a href="#share"><span class="bg3"></span></a></div>
					<div class="f_icon"><a href="tel:手机手机"><span class="bg4"></span></a></div>
					<div class="f_icon"><span class="bg5 show_code"></span></div>
				</div>
			</div>
			<div class="box4">
				<div class="box4_list">
					<div class="icon bg1" style=" width:4.56%;"></div>
					<div class="info" style="margin-left:19px;">Phone: <a href="tel:<?php echo ($data["mobile"]); ?>"><?php echo ($data["mobile"]); ?></a></div>
					<div class="clear"></div>
				</div>
				<div class="clear"></div>
				<?php if($data['tel']): ?><div class="box4_list">
					<div class="icon bg2"></div>
					<div class="info1">Telephone: <a href="tel:<?php echo ($data["mobile"]); ?>"><?php echo ($data["mobile"]); ?></a></div>
					<div class="clear"></div>
				</div><?php endif; ?>
				<?php if($data['fax']): ?><div class="box4_list">
					<div class="icon bg3"></div>
					<div class="info">Fax: <a href="tel:<?php echo ($data["fax"]); ?>"><?php echo ($data["fax"]); ?></a></div>
					<div class="clear"></div>
				</div><?php endif; ?>
				<?php if($data['qq']): ?><div class="box4_list">
					<div class="icon bg6"></div>
					<div class="info">QQ:<?php echo ($data["qq"]); ?></div>
					<div class="clear"></div>
				</div><?php endif; ?>
				<?php if($data['email']): ?><div class="box4_list">
					<div class="icon bg4"></div>
					<div class="info1">Email:<?php echo ($data["email"]); ?></div>
					<div class="clear"></div>
				</div><?php endif; ?>
				<div class="box4_list">
					<div class="icon bg5"></div>
					<div class="info1">Address: <?php echo ($data["add"]); ?></div>
					<div class="clear"></div>
				</div>
				<?php if($data['briefdes']): ?><div class="box4_list">
					<div class="icon bg7"></div>
					<div class="info1">Description : <?php echo ($data["briefdes"]); ?></div>
					<div class="clear"></div>
				</div><?php endif; ?>
			</div>
		</div>
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