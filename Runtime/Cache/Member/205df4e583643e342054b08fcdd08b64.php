<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

		<meta charset="utf-8">
		<title>微信公众平台管理系统</title>
		<link rel="stylesheet" type="text/css" href="/test/onethink/Public/static/css/global.css" media="all">
		<link rel="stylesheet" type="text/css" href="/test/onethink/Public/static/css/frame.css" media="all">
		<script type="text/javascript" src="/test/onethink/Public/static/js/jquery-1.7.2.min.js"></script>


	</head>
	<body>
<script language="javascript">$(document).ready(frame_obj.search_form_init);</script>
		<div id="iframe_page">
			<div class="iframe_content">
				<link rel="stylesheet" type="text/css" href="/test/onethink/Public/Member/css/hotel.css" media="all">
				<script type="text/javascript" src="/test/onethink/Public/Member/js/hotel.js"></script>

<div class="r_nav">
	<ul>
		<li class=""><a href="<?php echo U('Hotel/index');?>">基本设置</a></li>
		<li class="cur"><a href="<?php echo U('Hotel/products');?>">房间类型</a></li>
		<li class=""><a href="<?php echo U('Hotel/reserve');?>">预订订单管理</a></li>
	</ul>
</div>
<div id="products" class="r_con_wrap">
	<div class="control_btn">
		<a href="http://weixin.jucheng01.com/member/?m=app_hotels&amp;a=products&amp;d=edit" class="btn_ok btn_ok_w_120">添加房间</a>
		<a href="#search" class="btn_ok btn_ok_w_120">房间搜索</a>
	</div>
	<form class="r_con_search_form" method="get" action="http://weixin.jucheng01.com/member/?">
		关键词：<input name="Keyword" value="" class="form_input" size="15" type="text">
		其他属性：<select name="Attr">
			<option value="0">--请选择--</option>
			<option value="1">下架</option>
		</select>
		<input class="search_btn" value="搜索" type="submit">
		<input name="m" value="app_hotels" type="hidden">
		<input name="a" value="products" type="hidden">
	</form>
	<table class="r_con_table" align="center" border="0" cellpadding="5" cellspacing="0" width="100%">
		<thead>
			<tr>
				<td nowrap="nowrap" width="8%">序号</td>
				<td nowrap="nowrap" width="30%">名称</td>
				<td nowrap="nowrap" width="15%">价格</td>
				<td nowrap="nowrap" width="20%">图片</td>
				<td nowrap="nowrap" width="12%">属性</td>
				<td nowrap="nowrap" width="10%">时间</td>
				<td class="last" nowrap="nowrap" width="10%">操作</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td nowrap="nowrap">1</td>
				<td>1</td>
				<td nowrap="nowrap">
					<del>￥1.00<br></del>
					￥1.00            </td>
				<td nowrap="nowrap"></td>
				<td nowrap="nowrap">
				</td>
				<td nowrap="nowrap">2014-03-19</td>
				<td class="last" nowrap="nowrap">
					<a href="http://weixin.jucheng01.com/member/?m=app_hotels&amp;a=products&amp;d=edit&amp;ProId=2"><img src="/test/onethink/Public/Member/images/mod.gif" alt="修改" align="absmiddle"></a>
					<a href="http://weixin.jucheng01.com/member/?m=app_hotels&amp;a=products&amp;do_action=app_hotels.products_del&amp;ProId=2&amp;page=1" onclick="if(!confirm('删除后不可恢复，继续吗？')){return false};"><img src="/test/onethink/Public/Member/images/del.gif" alt="删除" align="absmiddle"></a>
				</td>
			</tr>
		</tbody>
	</table>
	<div class="blank20"></div>
	<div id="turn_page"><font class="page_noclick">&lt;&lt;上一页</font>&nbsp;<font class="page_item_current">1</font>&nbsp;<font class="page_noclick">下一页&gt;&gt;</font></div></div>	</div>
</div>

</body>
</html>