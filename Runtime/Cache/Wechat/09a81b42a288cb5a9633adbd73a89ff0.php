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
		<style>body,html{  background:#2c2c2c;}</style>
		<div id="businesscard_skin_2">
			<audio id="mc" src="http://img.pbweixin.com/16/1504/7323f7d282.mp3" autoplay></audio>
			<div id="music"><img src="/test/onethink/Public/Businesscard/images/on.png" /></div>
			<div class="box1">
				<div class="box1_item">
					<div class="face_item"><img src="http://img.pbweixin.com/16/1504/8d0cfa2be2.png" /></div>
					<div class="info_item">
						<div class="title">
							<span><?php echo ($data["name"]); ?></span>
							<span><?php echo ($data["posts"]); ?></span>
						</div>
						<div class="contact">
							<span><img src="/test/onethink/Public/Businesscard/images/businesscard/skin_2/phone.png" /></span>
							<span><a href="tel:<?php echo ($data["mobile"]); ?>">联系我</a></span>
							<span class="show_code"><img src="/test/onethink/Public/Businesscard/images/businesscard/skin_2/icon2.png" /></span>
						</div>
						<div class="clear"></div>
						<div class="company"><?php echo ($data["company"]); ?></div>
					</div>
					<div class="clear"></div>
				</div>
			</div>
			<div class="box2">
				<div class="box2_list1">
					<div class="box2_item">
						<div class="icon bg1"></div>
						<div class="info"><a href="tel:<?php echo ($data["mobile"]); ?>"><?php echo ($data["mobile"]); ?></a></div>
						<div class="clear"></div>
					</div>
				</div>
				<?php if($data['tel']): ?><div class="box2_list2">
					<div class="box2_item">
						<div class="icon bg2"></div>
						<div class="info"><a href="tel:<?php echo ($data["tel"]); ?>"><?php echo ($data["tel"]); ?></a></div>
						<div class="clear"></div>
					</div>
				</div><?php endif; ?>
				<?php if($data['fax']): ?><div class="box2_list1">
					<div class="box2_item">
						<div class="icon bg3"></div>
						<div class="info"><a href="tel:<?php echo ($data["fax"]); ?>">传真</a></div>
						<div class="clear"></div>
					</div>
				</div><?php endif; ?>
				<?php if($data['qq']): ?><div class="box2_list2">
					<div class="box2_item">
						<div class="icon bg6"></div>
						<div class="info"><?php echo ($data["qq"]); ?></div>
						<div class="clear"></div>
					</div>
				</div><?php endif; ?>
				<?php if($data['email']): ?><div class="box2_list1">
					<div class="box2_item">
						<div class="icon bg4"></div>
						<div class="info1"><?php echo ($data["email"]); ?></div>
						<div class="clear"></div>
					</div>
				</div><?php endif; ?>
				<div class="box2_list2">
					<div class="box2_item">
						<div class="icon bg5"></div>
						<div class="info1"><?php echo ($data["add"]); ?></div>
						<div class="clear"></div>
					</div>
				</div>
				<?php if($data['briefdes']): ?><div class="box2_list2">
					<div class="box2_item">
						<div class="icon bg8"></div>
						<div class="info1"><?php echo ($data["briefdes"]); ?></div>
						<div class="clear"></div>
					</div>
				</div><?php endif; ?>
			</div>
			<div class="box3">
				<div class="box3_btn" onClick="window.location=window.PG.url_pre+'web/'">
					<div class="icon1 f1"></div>
					<div class="title">进入微官网</div>
					<div class="icon2"></div>
					<div class="clear"></div>
				</div>
				<div class="box3_btn" onClick="window.location='http://api.map.baidu.com/marker?location=<?php echo ($data["loc"]); ?>&title=<?php echo (urlencode($data["company"])); ?>&name=<?php echo (urlencode($data["company"])); ?>&content=<?php echo (urlencode($data["add"])); ?>&output=html'">
					<div class="icon1 f2"></div>
					<div class="title">一键导航</div>
					<div class="icon2"></div>
					<div class="clear"></div>
				</div>
				<div class="box3_btn">
					<div class="icon1 f3"></div>
					<div class="title"><a href="#share">分享给朋友</a></div>
					<div class="icon2"></div>
					<div class="clear"></div>
				</div>
				<?php if($data['customize']): ?><div class="box3_btn" onClick="window.location='链接地址'">
					<div class="icon1 f3"></div>
					<div class="title"><a href="<?php echo ($data["customizeurl"]); ?>"><?php echo ($data["customize"]); ?></a></div>
					<div class="icon2"></div>
					<div class="clear"></div>
				</div><?php endif; ?>
			</div>
		</div>
		<div id="hidcode"><img src="<?php echo ($data["codeimgpath"]); ?>" /><div class="close_btn">关闭</div></div><script language="javascript">
			window.PG.share={
				title:'<?php echo ($data["name"]); ?>的微名片',
				desc:'<?php echo ($data["name"]); ?>',
				img_url:'<?php echo ($data["imgpath"]); ?>'
			}
	</script>
</body>
</html>