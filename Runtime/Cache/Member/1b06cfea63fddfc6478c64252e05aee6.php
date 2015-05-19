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

				
<script language="javascript">$(document).ready(app_car_obj.products_list_init);</script>

				<div id="<?php echo (ACTION_NAME); ?>" class="r_con_wrap">
					
<div class="control_btn">
	<a href="<?php echo U('Car/category');?>" class="btn_ok btn_ok_w_120">产品分类管理</a>
	<a href="<?php echo U('Car/products',array('id' => '0'));?>" class="btn_ok btn_ok_w_120">添加产品</a>
	<a href="#search" class="btn_ok btn_ok_w_120">产品搜索</a>
</div>
<form class="r_con_search_form" method="get" action="?">
	<input type="hidden" name="m" value="Member"/>
	<input type="hidden" name="c" value="Car"/>
	<input type="hidden" name="a" value="products"/>
	关键词：<input type="text" name="Keyword" value="<?php echo ($keyWord); ?>" class="form_input" size="15" />
	产品分类：<select name='SearchCateId'>
		<option value=''>--请选择--</option>
		<?php if(is_array($cates)): $i = 0; $__LIST__ = $cates;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$c): $mod = ($i % 2 );++$i;?><option value='<?php echo ($c["id"]); ?>' <?php if($c['id'] == $searchCateId): ?>selected="selected"<?php endif; ?> >├<?php echo ($c["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
	</select>
	<input type="submit" class="search_btn" value="搜索" />




</form>
<table width="100%" align="center" border="0" cellpadding="5" cellspacing="0" class="r_con_table">
	<thead>
		<tr>
			<td width="8%" nowrap="nowrap">序号</td>
			<td width="30%" nowrap="nowrap">名称</td>
			<td width="12%" nowrap="nowrap">分类</td>
			<td width="10%" nowrap="nowrap">时间</td>
			<td width="10%" nowrap="nowrap" class="last">操作</td>
		</tr>
	</thead>
	<tbody>
		<?php if(is_array($products)): $i = 0; $__LIST__ = $products;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$p): $mod = ($i % 2 );++$i;?><tr>
			<td nowrap="nowrap"><?php echo ($p["id"]); ?></td>
			<td><?php echo ($p["name"]); ?></td>
			<td nowrap="nowrap"><?php echo ($p["cate"]); ?></td>
			<td nowrap="nowrap"><?php echo (date("Y-m-d H:i:s",$p["inputtime"])); ?></td>
			<td class="last" nowrap="nowrap">
				<a href="<?php echo U('Car/products', array('id' => $p['id']));?>">
					<img src="/test/onethink/Public/Member/images/mod.gif" align="absmiddle" alt="修改" /></a>
				<a class="products-del" data-url="<?php echo U('Car/delProduct');?>" data-id="<?php echo ($p["id"]); ?>"><img src="/test/onethink/Public/Member/images/del.gif" align="absmiddle" alt="删除" /></a>
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