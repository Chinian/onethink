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
		<script type="text/javascript">$(document).ready(frame_obj.search_form_init);</script>
		<div id="iframe_page">
			<div class="iframe_content">
				<link href="/test/onethink/Public/Member/css/app_car.css" rel="stylesheet" type="text/css"  />
				<script type="text/javascript" src="/test/onethink/Public/Member/js/app_car.js" ></script>
				<div class="r_nav">
	<ul>
		<li <?php if((ACTION_NAME) == "index"): ?>class="cur"<?php endif; ?> ><a href="<?php echo U('Car/index');?>">基本设置</a></li>
		<li <?php if((ACTION_NAME == products) OR (ACTION_NAME == category)): ?>class="cur"<?php endif; ?> ><a href="<?php echo U('Car/products');?>">车系管理</a></li>
		<li <?php if((ACTION_NAME) == "news"): ?>class="cur"<?php endif; ?> ><a href="<?php echo U('Car/news');?>">活动资讯</a></li>
		<li <?php if((ACTION_NAME) == "reserve"): ?>class="cur"<?php endif; ?> ><a href="<?php echo U('Car/reserve');?>">预约管理</a></li>
		<li <?php if((ACTION_NAME) == "about"): ?>class="cur"<?php endif; ?> ><a href="<?php echo U('Car/about');?>">关于我们</a></li>
		<li <?php if((ACTION_NAME) == "sales"): ?>class="cur"<?php endif; ?> ><a href="<?php echo U('Car/sales');?>">联系销售</a></li>
		<li <?php if((ACTION_NAME) == "plugin"): ?>class="cur"<?php endif; ?> ><a href="<?php echo U('Car/plugin');?>">实用工具</a></li>
		<li <?php if((ACTION_NAME) == "owner"): ?>class="cur"<?php endif; ?> ><a href="<?php echo U('Car/owner');?>">车主关怀</a></li>
	</ul>
</div>

				<script type="text/javascript">$(document).ready(app_car_obj.sales_list_init);</script>
				<div id="<?php echo (ACTION_NAME); ?>" class="r_con_wrap">
					
<div class="control_btn"><a href="<?php echo U('Car/sales', array('id' => '0'));?>" class="btn_ok btn_ok_w_120">添加销售</a></div>
<table border="0" cellpadding="5" cellspacing="0" class="r_con_table">
	<thead>
		<tr>
			<td width="10%">序号</td>
			<td width="40%">销售名称</td>
			<td width="20%">分类</td>
			<td width="20%">电话</td>
			<td width="10%" class="last">操作</td>
		</tr>
	</thead>
	<tbody> 
		<?php if(is_array($sales)): $i = 0; $__LIST__ = $sales;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
			<td nowrap="nowrap"><?php echo ($v["id"]); ?></td>
			<td><?php echo ($v["name"]); ?></td>
			<td><?php echo ($v["sale_cate"]); ?></td>
			<td><?php echo ($v["tel"]); ?></td>
			<td nowrap="nowrap" class="last">
				<a href="<?php echo U('Car/sales', array('id' => $v['id']));?>"><img src="/test/onethink/Public/Member/images/mod.gif" align="absmiddle" alt="修改" /> </a>
				<a class="sales-del" data-url="<?php echo U('Car/delSales');?>" data-id="<?php echo ($v["id"]); ?>"><img src="/test/onethink/Public/Member/images/del.gif" align="absmiddle" alt="删除" /></a>
			</td>
		</tr><?php endforeach; endif; else: echo "" ;endif; ?>
	</tbody>
</table>
<div class="blank20"></div>
<div id="turn_page"><?php echo ($page); ?></div>

				</div>

			</div>
		</div>
	</body>
</html>