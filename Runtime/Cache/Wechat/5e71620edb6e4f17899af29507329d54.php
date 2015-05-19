<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
		<meta content="telephone=no" name="format-detection">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>城市微联盟--婚庆公司</title>
		<link rel="stylesheet" type="text/css" href="/test/onethink/Public/Wedding/css/info.css"/>
		<link href='/test/onethink/Public/static/plugin/photoswipe/photoswipe.css' rel='stylesheet' type='text/css' />
	</head>
	<body>
		<header class="header">
		<div id="back">
			<img src="/test/onethink/Public/Wedding/images/back.png" onClick="history.back(-1)"/>
		</div>
		<div class="header_title">物品详情</div>
		<div id="my">
			<a href="<?php echo U('vip/index');?>"><img src="/test/onethink/Public/Wedding/images/my_icon.png" /></a>
		</div>
		<div class="clear" ></div>
		</header>
		<div class="container" id="education_detail">
			<div class="banner">
				<div class="pro_img">
					<div class="touchslider">
						<div class="img">
							<div class="touchslider-prev">
								<span></span>
							</div>
							<div class="touchslider-viewport">
								<div class="list">
									<?php if(is_array($wifiinfo["banner"])): foreach($wifiinfo["banner"] as $key=>$v): ?><div class="touchslider-item">
										<a href="<?php echo ($v); ?>"
											rel="<?php echo ($v); ?>">
											<img src="<?php echo ($v); ?>" />
										</a>
									</div><?php endforeach; endif; ?>
								</div>
							</div>
							<div class="touchslider-next">
								<span></span>
							</div>
						</div>
						<div class="touchslider-nav">
							<?php if(is_array($wifiinfo["banner"])): foreach($wifiinfo["banner"] as $key=>$v): ?><a class="touchslider-nav-item touchslider-nav-item-current"></a><?php endforeach; endif; ?>
						</div>
					</div>
					<script type="text/javascript">
						var proimg_count = 1;
						</script>
					</div>
				</div>
				<div class="sh_detail_top">
					<h3 class="sh_detail_title"><?php echo ($data["title"]); ?></h3>
					<div class="sh_detail_brief"><span>发布时间：<?php echo (date("Y-m-d H:i",$data["inputtime"])); ?></span><span><img src="/test/onethink/Public/Wedding/images/eye.png" /><?php echo ($data["views"]); ?>人</span></div>
					<div class="rt2">
						<div id="shoucang" class="shoucang"><img src="/test/onethink/Public/Wechat/api/images/heart.png" /><span>收藏</span></div>
						<!-- <div id="yishoucang" class="shoucang"><img src="/test/onethink/Public/Wechat/api/images/heart.png" />已收藏</div> -->
					</div>
					<div class="clear"></div>
				</div>
				<table class="sh_info" width="100%" border="0" cellpadding="0" cellspacing="0">
					<tr>
						<td class="info">
							<h3 class="rt3"><i id="i1"></i>基本信息</h3>
							<div><span  class="new_level">婚庆</span><span>联系人：<?php echo ($data["contact"]); ?></span></div>
							<div>商家地址：<?php echo ($data["address"]); ?>
							</div>
						</td>
						<td  class="contact" valign="middle">
							<a href="tel:12345678912">
								<div>
									<img src="/test/onethink/Public/Wedding/images/tel_icon.png" />
									<br />
									拨打电话
								</div>
							</a>
						</td>
					</tr>
				</table>
				<div class="recruit_require">
					<h3 class="rt3"><i id="i2"></i>详细信息</h3>
					<div class="description">
						<?php echo ($data["content"]); ?>
					</div>
				</div>
				<div class="recruit_recommend">
					<h3 class="rt3"><i id="i3"></i>为您推荐</h3>
					<ul id="recommend_list">
						<a href="">
							<li>北京完美新娘婚礼北京婚庆公司招聘北京婚<span class="right_span">朝阳</span></li>
						</a>
						<a href="">
							<li>北京完美新娘婚礼北京婚庆公司招聘北京婚<span class="right_span">朝阳</span></li>
						</a>
						<a href="">
							<li>北京完美新娘婚礼北京婚庆公司招聘北京婚<span class="right_span">朝阳</span></li>
						</a>
					</ul>
					<div id="guanzhu" class="guanzhu"><img src="/test/onethink/Public/Wedding/images/guanzhu.png" />关注微生活</div>
					<!-- <div id="yiguanzhu" class="guanzhu"><img src="/test/onethink/Public/Wechat/api/images/yiguanzhu.png" />已关注微生活</div> -->
				</div>
			</div>
			<footer id="footer">
			<a href="<?php echo U('infoedit');?>"><div id="publish">发布婚庆信息</div></a>
			<div class="clear"></div>
			</footer>
			<script type="text/javascript" src="/test/onethink/Public/static/js/jquery-1.7.2.min.js"></script>
			<script type="text/javascript" src="/test/onethink/Public/static/js/global.js"></script>
			<script type='text/javascript' src='/test/onethink/Public/Wechat/js/plugin/touchslider/jquery.touchslider.min.js'></script>
			<script type='text/javascript' src='/test/onethink/Public/Wechat/js/plugin/photoswipe/klass.min.js'></script>
			<script type='text/javascript' src='/test/onethink/Public/Wechat/js/plugin/photoswipe/photoswipe.jquery-3.0.5.min.js'></script>
			<script type='text/javascript' src='/test/onethink/Public/Wedding/js/wedding.js'></script>
			<script>
				$(document).ready(wedding_obj.detail_init);
			</script>
		</body>
	</html>