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

<script src="/test/onethink/Public/Member/js/member.js"></script>
<div class="r_nav">
	<ul>
		<li class=""><a href="<?php echo U('wedding/index');?>">信息管理</a></li>
		<li class=""><a href="<?php echo U('wedding/index');?>">信息推荐</a></li>
		<li class="cur"><a href="<?php echo U('wedding/catview');?>">栏目编辑</a></li>
	</ul>
</div>
<div id="reserve" class="r_con_wrap">

<link rel="stylesheet" type="text/css" href="/test/onethink/Public/static/plugin/daterangepicker/daterangepicker.css" />
<script type="text/javascript" src="/test/onethink/Public/static/plugin/daterangepicker/moment.min.js"></script>
<script type="text/javascript" src="/test/onethink/Public/static/plugin/daterangepicker/daterangepicker.js"></script>
<script language="javascript">$(document).ready(app_hotels_obj.reserve_list_init);</script>

<div class="control_btn"><a href="<?php echo U('wedding/catedit');?>" class="btn_ok btn_ok_w_120">添加栏目</a></div>
	<form class="r_con_search_form" id="search_form" method="get" action="http://weixin.jucheng01.com/member/?">
		关键词：<input name="Keyword" value="" class="form_input" size="15" type="text">
		时间：<input class="form_input" name="Time" value="" maxlength="20" type="text">
		<input class="search_btn" value="搜索" type="submit">
		<input class="search_btn" value="导出" type="button">
		<input name="m" value="app_hotels" type="hidden">
		<input name="a" value="reserve" type="hidden">
		<input name="d" value="list" type="hidden">
	</form>
	<table class="r_con_table" border="0" cellpadding="5" cellspacing="0">
		<thead>
			<tr>
				<th nowrap="nowrap" width="5%">ID</th>
				<th nowrap="nowrap" width="70%"></th>
				<th class="last" width="15%">操作</th>
			</tr>
		</thead>
		<tbody>
			<?php if(is_array($data["list"])): $i = 0; $__LIST__ = $data["list"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><tr>
				<td nowrap="nowrap"><?php echo ($val["id"]); ?></td>
				<td nowrap="nowrap" style="text-align: left">├<?php echo ($val["title"]); ?></td>
				<td nowrap="nowrap">
					<a href="<?php echo U('wedding/catedit', array('id' => $val['id']));?>" title="查看"><img src="/test/onethink/Public/Member/images/view.gif"/></a>
					<a href="<?php echo U('wedding/del', array('catid' => $val['id']));?>" title="删除" onclick="if(!confirm('删除后不可恢复，继续吗？')){return false};"><img src="/test/onethink/Public/Member/images/del.gif"/></a>


					</td>
			</tr>
				<?php if(is_array($val["child"])): $i = 0; $__LIST__ = $val["child"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
				<td nowrap="nowrap"><?php echo ($v["id"]); ?></td>
				<td nowrap="nowrap" style="text-align: left">｜└<?php echo ($v["title"]); ?></td>
				<td nowrap="nowrap">
					<a href="<?php echo U('wedding/catedit', array('id' => $v['id']));?>" title="查看"><img src="/test/onethink/Public/Member/images/view.gif"/></a>
					<a href="<?php echo U('wedding/del', array('catid' => $v['id']));?>" title="删除" onclick="if(!confirm('删除后不可恢复，继续吗？')){return false};"><img src="/test/onethink/Public/Member/images/del.gif"/></a>
					</td>
			</tr><?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
		</tbody>
	</table>
	<div class="blank20"></div>
	<div id="turn_page"><font class="page_noclick">&lt;&lt;上一页</font>&nbsp;<font class="page_item_current">1</font>&nbsp;<font class="page_noclick">下一页&gt;&gt;</font></div>
	</div>	</div>
</div>
<div class="daterangepicker dropdown-menu show-calendar opensright"><div class="calendar right"><div class="calendar-date"><table class="table-condensed"><thead><tr><th></th><th colspan="5" class="month">四月 2015</th><th class="next available"><i class="icon-right"></i></th></tr><tr><th>日</th><th>一</th><th>二</th><th>三</th><th>四</th><th>五</th><th>六</th></tr></thead><tbody><tr><td class="off disabled" data-title="r0c0">29</td><td class="off disabled" data-title="r0c1">30</td><td class="off disabled" data-title="r0c2">31</td><td class="off disabled" data-title="r0c3">1</td><td class="off disabled" data-title="r0c4">2</td><td class="off disabled" data-title="r0c5">3</td><td class="off disabled" data-title="r0c6">4</td></tr><tr><td class="off disabled" data-title="r1c0">5</td><td class="off disabled" data-title="r1c1">6</td><td class="off disabled" data-title="r1c2">7</td><td class="off disabled" data-title="r1c3">8</td><td class="off disabled" data-title="r1c4">9</td><td class="available active start-date end-date" data-title="r1c5">10</td><td class="available" data-title="r1c6">11</td></tr><tr><td class="available" data-title="r2c0">12</td><td class="available" data-title="r2c1">13</td><td class="available" data-title="r2c2">14</td><td class="available" data-title="r2c3">15</td><td class="available" data-title="r2c4">16</td><td class="available" data-title="r2c5">17</td><td class="available" data-title="r2c6">18</td></tr><tr><td class="available" data-title="r3c0">19</td><td class="available" data-title="r3c1">20</td><td class="available" data-title="r3c2">21</td><td class="available" data-title="r3c3">22</td><td class="available" data-title="r3c4">23</td><td class="available" data-title="r3c5">24</td><td class="available" data-title="r3c6">25</td></tr><tr><td class="available" data-title="r4c0">26</td><td class="available" data-title="r4c1">27</td><td class="available" data-title="r4c2">28</td><td class="available" data-title="r4c3">29</td><td class="available" data-title="r4c4">30</td><td class="available off" data-title="r4c5">1</td><td class="available off" data-title="r4c6">2</td></tr><tr><td class="available off" data-title="r5c0">3</td><td class="available off" data-title="r5c1">4</td><td class="available off" data-title="r5c2">5</td><td class="available off" data-title="r5c3">6</td><td class="available off" data-title="r5c4">7</td><td class="available off" data-title="r5c5">8</td><td class="available off" data-title="r5c6">9</td></tr></tbody></table></div><div class="calendar-time"><select class="hourselect"><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23" selected="selected">23</option></select> : <select class="minuteselect"><option value="0">00</option><option value="1">01</option><option value="2">02</option><option value="3">03</option><option value="4">04</option><option value="5">05</option><option value="6">06</option><option value="7">07</option><option value="8">08</option><option value="9">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option><option value="53">53</option><option value="54">54</option><option value="55">55</option><option value="56">56</option><option value="57">57</option><option value="58">58</option><option value="59" selected="selected">59</option></select> </div></div><div class="calendar left"><div class="calendar-date"><table class="table-condensed"><thead><tr><th class="prev available"><i class="icon-left"></i></th><th colspan="5" class="month">四月 2015</th><th class="next available"><i class="icon-right"></i></th></tr><tr><th>日</th><th>一</th><th>二</th><th>三</th><th>四</th><th>五</th><th>六</th></tr></thead><tbody><tr><td class="available off" data-title="r0c0">29</td><td class="available off" data-title="r0c1">30</td><td class="available off" data-title="r0c2">31</td><td class="available" data-title="r0c3">1</td><td class="available" data-title="r0c4">2</td><td class="available" data-title="r0c5">3</td><td class="available" data-title="r0c6">4</td></tr><tr><td class="available" data-title="r1c0">5</td><td class="available" data-title="r1c1">6</td><td class="available" data-title="r1c2">7</td><td class="available" data-title="r1c3">8</td><td class="available" data-title="r1c4">9</td><td class="available active start-date end-date" data-title="r1c5">10</td><td class="available" data-title="r1c6">11</td></tr><tr><td class="available" data-title="r2c0">12</td><td class="available" data-title="r2c1">13</td><td class="available" data-title="r2c2">14</td><td class="available" data-title="r2c3">15</td><td class="available" data-title="r2c4">16</td><td class="available" data-title="r2c5">17</td><td class="available" data-title="r2c6">18</td></tr><tr><td class="available" data-title="r3c0">19</td><td class="available" data-title="r3c1">20</td><td class="available" data-title="r3c2">21</td><td class="available" data-title="r3c3">22</td><td class="available" data-title="r3c4">23</td><td class="available" data-title="r3c5">24</td><td class="available" data-title="r3c6">25</td></tr><tr><td class="available" data-title="r4c0">26</td><td class="available" data-title="r4c1">27</td><td class="available" data-title="r4c2">28</td><td class="available" data-title="r4c3">29</td><td class="available" data-title="r4c4">30</td><td class="available off" data-title="r4c5">1</td><td class="available off" data-title="r4c6">2</td></tr><tr><td class="available off" data-title="r5c0">3</td><td class="available off" data-title="r5c1">4</td><td class="available off" data-title="r5c2">5</td><td class="available off" data-title="r5c3">6</td><td class="available off" data-title="r5c4">7</td><td class="available off" data-title="r5c5">8</td><td class="available off" data-title="r5c6">9</td></tr></tbody></table></div><div class="calendar-time"><select class="hourselect"><option value="0" selected="selected">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option></select> : <select class="minuteselect"><option value="0" selected="selected">00</option><option value="1">01</option><option value="2">02</option><option value="3">03</option><option value="4">04</option><option value="5">05</option><option value="6">06</option><option value="7">07</option><option value="8">08</option><option value="9">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option><option value="53">53</option><option value="54">54</option><option value="55">55</option><option value="56">56</option><option value="57">57</option><option value="58">58</option><option value="59">59</option></select> </div></div><div class="ranges"><div class="range_inputs"><div class="daterangepicker_start_input"><label for="daterangepicker_start">开始时间</label><input class="input-mini" name="daterangepicker_start" value="2015/04/10 00:00:00" disabled="disabled" type="text"></div><div class="daterangepicker_end_input"><label for="daterangepicker_end">结束时间</label><input class="input-mini" name="daterangepicker_end" value="2015/04/10 23:59:00" disabled="disabled" type="text"></div><button class="applyBtn btn btn-small btn-success">确定</button>&nbsp;<button class="cancelBtn btn btn-small btn-default">取消</button></div></div></div>

</body>
</html>