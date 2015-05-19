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

				
<link href='/test/onethink/Public/static/plugin/daterangepicker/daterangepicker.css' rel='stylesheet' type='text/css'  />
<script type='text/javascript' src='/test/onethink/Public/static/plugin/daterangepicker/moment.min.js' ></script>
<script type='text/javascript' src='/test/onethink/Public/static/plugin/daterangepicker/daterangepicker.js' ></script>
<script type='text/javascript'>$(document).ready(app_car_obj.reserve_list_init);</script>

				<div id="<?php echo (ACTION_NAME); ?>" class="r_con_wrap">
					
<div class="control_btn"><a href="<?php echo U('Car/reserve', array('d' => 'config'));?>" class="btn_ok btn_ok_w_120">预约设置</a></div>

<form class="r_con_search_form" id="search_form" method="get" action="?">
	<input type="hidden" name="m" value="Member"/>
	<input type="hidden" name="c" value="Car"/>
	<input type="hidden" name="a" value="reserve"/>
	<input type="hidden" name="d" value="search"/>

	关键词：<input type="text" name="Keyword" value="" class="form_input" size="15" />
	时间：<input type="text" class="form_input" name="Time" value="" maxlength="20" />
	<input type="submit" class="search_btn" value="搜索" />
	<input type="button" class="search_btn" value="导出" />
</form>
<table border="0" cellpadding="5" cellspacing="0" class="r_con_table">
	<thead>
		<tr>
			<td width="6%" nowrap="nowrap">序号</td>
			<td width="15%" nowrap="nowrap">联系人</td>
			<td width="15%" nowrap="nowrap">联系手机</td>
			<td width="15%" nowrap="nowrap">预约时间</td>
			<td width="12%">车系</td>
			<td width="12%">车型</td>
			<td width="15%" nowrap="nowrap">提交时间</td>
			<td width="10%" class="last">操作</td>
		</tr>
	</thead>
	<tbody> 
		<?php if(is_array($res)): $i = 0; $__LIST__ = $res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
			<td nowrap="nowrap"><?php echo ($v["id"]); ?></td>
			<td><?php echo ($v["name"]); ?></td>
			<td><?php echo ($v["tel"]); ?></td>
			<td><?php echo (date("Y-m-d H:i:s",$v["reserve_time"])); ?></td>
			<td><?php echo ($v["car_cate"]); ?></td>
			<td><?php echo ($v["car_product"]); ?></td>
			<td nowrap="nowrap"><?php echo (date("Y-m-d H:i:s",$v["input_time"])); ?></td>
			<td nowrap="nowrap" class="last">
				<a href="<?php echo U('Car/reserve', array('d' => 'detail', 'LId' => $v['id']));?>" LId="<?php echo ($v["id"]); ?>"><img src="/test/onethink/Public/Member/images/view.gif" align="absmiddle" alt="预约查看" /></a>
				<a class="reserve-del" data-url="<?php echo U('Car/delReserve');?>" data-id="<?php echo ($v["id"]); ?>"><img src="/test/onethink/Public/Member/images/del.gif" align="absmiddle" alt="删除" /></a>
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