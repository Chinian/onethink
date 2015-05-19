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
					$('#businesscard_skin_4').width($('#businesscard_skin_4').width()).height($(window).height());
					businesscard_obj.dragBg();
					});
				</script>

				<div id="businesscard_skin_4">
					<!-- 背景 start -->
					<ul id="ul1">
						<li><img src="<?php echo ($data["imgpath"]); ?>"/></li>
					</ul>
					<!-- 背景 end -->
					<audio id="mc" src="<?php echo ($data["bgm"]); ?>" autoplay></audio>
					<div id="music"><img src="/test/onethink/Public/Businesscard/images/on.png" /></div>
					<div class="box1">
						<div class="box1_item1">
							<div class="info_item">
								<span><?php echo ($data["name"]); ?></span>
								<span><?php echo ($data["posts"]); ?></span><br>
								<span><?php echo ($data["company"]); ?></span>
							</div>

							<div class="number_item1">
								<span class="icon1"></span>
								<span class="phone"><a href="tel:<?php echo ($data["mobile"]); ?>"><?php echo ($data["mobile"]); ?></a></span>
								<?php if($data['email']): ?><span class="icon2"></span>
								<span class="phone1"><?php echo ($data["email"]); ?></span><?php endif; ?>
							</div>
							<div class="footer">
								<?php if($data['isweb'] == 1): ?><div class="f_icon"><a href="../web/"><img src="/test/onethink/Public/Businesscard/images/businesscard/skin_4/f1.png" /></a></div><?php endif; ?>
								<div class="f_icon"><a href="http://api.map.baidu.com/marker?location=<?php echo ($data["loc"]); ?>&title=<?php echo (urlencode($data["company"])); ?>&name=<?php echo (urlencode($data["company"])); ?>&content=<?php echo (urlencode($data["add"])); ?>&output=html'"><img src="/test/onethink/Public/Businesscard/images/businesscard/skin_4/f2.png" /></a></div>
								<div class="f_icon"><a href="#share"><img src="/test/onethink/Public/Businesscard/images/businesscard/skin_4/f3.png" /></a></div>
								<div class="f_icon"><a href="tel:<?php echo ($data["mobile"]); ?>"><img src="/test/onethink/Public/Businesscard/images/businesscard/skin_4/f4.png" /></a></div>
								<div class="f_icon"><span class="show_code"><img src="/test/onethink/Public/Businesscard/images/businesscard/skin_4/code.png" /></span></div>
							</div>
						</div>
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