<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>微信公众平台管理系统</title>
		<link href="/test/onethink/Public/static/css/global.css" rel="stylesheet" type="text/css"  />
		<link href="/test/onethink/Public/static/css/frame.css" rel="stylesheet" type="text/css"  />
		<script type="text/javascript" src="/test/onethink/Public/static/js/jquery-1.7.2.min.js" ></script>
		<script type="text/javascript" src="/test/onethink/Public/static/js/frame.js" ></script>
	</head>

	<body>
		<script language="javascript">$(document).ready(frame_obj.search_form_init);</script>
		<div id="iframe_page">
			<div class="iframe_content">
				<link href="/test/onethink/Public/Member/css/app_car.css" rel="stylesheet" type="text/css"  />
				<script type="text/javascript" src="/test/onethink/Public/Member/js/app_car.js" ></script>
				<div class="r_nav">
	<ul>
		<li <?php if((ACTION_NAME) == "index"): ?>class="cur"<?php endif; ?> ><a href="<?php echo U('Car/index');?>">基本设置</a></li>
		<li <?php if((ACTION_NAME) == "products"): ?>class="cur"<?php endif; ?> ><a href="<?php echo U('Car/products');?>">车系管理</a></li>
		<li <?php if((ACTION_NAME) == "news"): ?>class="cur"<?php endif; ?> ><a href="<?php echo U('Car/news');?>">活动资讯</a></li>
		<li <?php if((ACTION_NAME) == "reserve"): ?>class="cur"<?php endif; ?> ><a href="<?php echo U('Car/reserve');?>">预约管理</a></li>
		<li <?php if((ACTION_NAME) == "about"): ?>class="cur"<?php endif; ?> ><a href="<?php echo U('Car/about');?>">关于我们</a></li>
		<li <?php if((ACTION_NAME) == "sales"): ?>class="cur"<?php endif; ?> ><a href="<?php echo U('Car/sales');?>">联系销售</a></li>
		<li <?php if((ACTION_NAME) == "tool"): ?>class="cur"<?php endif; ?> ><a href="<?php echo U('Car/tool');?>">实用工具</a></li>
		<li <?php if((ACTION_NAME) == "owner"): ?>class="cur"<?php endif; ?> ><a href="<?php echo U('Car/owner');?>">车主关怀</a></li>
	</ul>
</div>
				<div id="<?php echo (ACTION_NAME); ?>" class="r_con_wrap">
					
<script language="javascript">$(document).ready(app_car_obj.plugin_init);</script>

					
<table width="100%" align="center" border="0" cellpadding="5" cellspacing="0" class="r_con_table">
	<thead>
		<tr>
			<td width="10%">序号</td>
			<td width="20%">工具名称</td>
			<td width="50%">链接地址</td>
			<td width="20%">状态</td>
		</tr>
	</thead>
	<tbody>
		<?php if(is_array($tool)): $i = 0; $__LIST__ = $tool;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
			<td><?php echo ($v["id"]); ?></td>
			<td>车贷计算器</td>
			<td class="left"><a href="<?php echo ($v["url"]); ?>" target="_blank"><?php echo ($v["url"]); ?></a></td>
			<td><img src="/test/onethink/Public/Member/images/<?php if(($v["status"]) == "1"): ?>on<?php else: ?>off<?php endif; ?>.gif" plugin="<?php echo ($v["id"]); ?>" Status="<?php echo ($v["status"]); ?>" /></td>
		</tr><?php endforeach; endif; else: echo "" ;endif; ?>
	</tbody>
</table>

				</div>

			</div>
		</div>
	</body>
</html>