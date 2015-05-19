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
		<script type="text/javascript" src="/test/onethink/Public/static/js/jquery-1.7.2.min.js"></script>
        <link rel="stylesheet" type="text/css" href="/test/onethink/Public/Wedding/css/secondhand.css"/>
	</head>
	<body>
		<header class="header">
			<div id="back">
				<img src="/test/onethink/Public/Wedding/images/back.png" onClick="history.back(-1)"/>
			</div>
			<div class="header_title"><?php echo ($data["title"]); ?></div>
			<div id="my">
				<a href="<?php echo U('vip/index');?>"><img src="/test/onethink/Public/Wedding/images/my_icon.png" /></a>
			</div>
			<div class="clear" ></div>
	</header>
		<div class="container">
			<form id="search_form">
				<div class="sf_left">
					<table width="100%" border="0" cellpadding="0" cellspacing="0" id="search_box">
						<tr>
							<td valign="middle"><input type="text" id="search_blank" autocomplete="on" placeholder="请输入关键字"  /></td>
							<td valign="middle"><input type="button" id="search_button" value="" /></td>
						</tr>
					</table>
				</div>

				<div class="sf_right">
				<span class="has_img">
					<span class="radio"></span>有图
				</span>
				</div>
				<div class="clear"></div>
			</form>
			<form id="filter_form">
			<ul class="wedding_select_box">
			<li class="sbox">
					<select name="region" class="sblank" notnull="" id="region" onchange="imitatetype1(this.id)">
						<option value="">--请选择--</option>
						<?php if(is_array($data["region"])): $i = 0; $__LIST__ = $data["region"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$region): $mod = ($i % 2 );++$i;?><option value="<?php echo ($region["id"]); ?>" text="<?php echo ($region["region"]); ?>">├<?php echo ($region["region"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
						<option value="清空" text="区域">清空</option>
					</select>
					<table border="0" cellpadding="0" cellpadding="0" class="imitate_box">
						<tr>
							<td class="imitate" id="imitate_area">区域</td>
							<td class="si"></td>
							<input class="select_area" value="区域" type="hidden"/>
						</tr>
					</table>
			</li>
			<li class="sbox">
					<select name="type" class="sblank" notnull="" id="area" onchange="imitatetype1(this.id)">
						<option value="">--请选择--</option>
						<?php if(is_array($data["catlist"])): $i = 0; $__LIST__ = $data["catlist"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><optgroup label="├<?php echo ($v["title"]); ?>">
							<?php if(is_array($v["child"])): $i = 0; $__LIST__ = $v["child"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vv): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vv["id"]); ?>" text="<?php echo ($vv["title"]); ?>">｜└<?php echo ($vv["title"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
						</optgroup><?php endforeach; endif; else: echo "" ;endif; ?>
						<option text="类型">清空</option>
					</select>
					<table border="0" cellpadding="0" cellpadding="0" class="imitate_box">
						<tr>
							<td class="imitate" id="imitate_type">类型</td>
							<td class="si"></td>
							<input class="select_area" value="类型" type="hidden"/>
						</tr>
					</table>
				</li>
				<li class="sbox">
					<select name="order" class="sblank" notnull="" id="area" onchange="imitatetype1(this.id)">
						<option value="">--请选择--</option>
						<?php if(is_array($type)): foreach($type as $key=>$v): ?><option value="<?php echo ($v["id"]); ?>" text="<?php echo ($v["classify"]); ?>">├<?php echo ($v["classify"]); ?></option>
							<?php if(is_array($v["_child"])): foreach($v["_child"] as $key=>$vv): ?><option value="<?php echo ($vv["id"]); ?>" text="<?php echo ($vv["classify"]); ?>">｜└<?php echo ($vv["classify"]); ?></option><?php endforeach; endif; endforeach; endif; ?>
						<option value="清空" text="类型">清空</option>
					</select>
					<table border="0" cellpadding="0" cellpadding="0" class="imitate_box">
						<tr>
							<td class="imitate" id="imitate_type">排序</td>
							<td class="si"></td>
							<input class="select_area" value="排序" type="hidden"/>
						</tr>
					</table>
				</li>
				
				<li class="clear"></li>
			</ul>
			</form>
			<ul id="wedding_info_list">			
				<?php if(is_array($data["list"])): $i = 0; $__LIST__ = $data["list"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$info): $mod = ($i % 2 );++$i;?><a href="<?php echo U('wedding/detail', array('id' => $info['id']));?>">
					<li type="手机" class="show_info_r show_info_t">
						<div>
							<h3><?php echo ($info["title"]); ?></h3>
							<div><span>[<?php echo ($info["pic"]); ?>图]</span><span><?php echo ($info["region"]); ?></span><span><?php echo ($info["views"]); ?>人查看</span><span><?php echo (date("Y-m-d H:i",$info["inputtime"])); ?></span> </div>
						</div>
					</li>
				</a><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</div>
		<footer id="footer">
			<a href="<?php echo U('infoedit');?>"><div id="publish">发布婚庆信息</div></a>
			<div class="clear"></div>
		</footer>	
		<script type="text/javascript" src="/test/onethink/Public/static/js/jquery-1.7.2.min.js"></script>
		<script type="text/javascript" src="/test/onethink/Public/static/js/global.js"></script>
		<script type='text/javascript' src='/test/onethink/Public/Wedding/js/wedding.js'></script>
	</body>
</html>