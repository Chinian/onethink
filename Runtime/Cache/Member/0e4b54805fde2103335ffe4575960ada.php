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
				<script type='text/javascript' src='/test/onethink/Public/Member/js/app_medical.js'></script>
				<div class="r_nav">
					<ul>
						<li class="cur"><a href="<?php echo U('Medical/index');?>">挂号预约</a></li>
					</ul>
					</div><div id="reserve" class="r_con_wrap">
					<link href='/test/onethink/Public/static/plugin/daterangepicker/daterangepicker.css' rel='stylesheet' type='text/css'  />
					<script type='text/javascript' src='/test/onethink/Public/static/plugin/daterangepicker/moment.min.js' ></script>
					<script type='text/javascript' src='/test/onethink/Public/static/plugin/daterangepicker/daterangepicker.js' ></script>
					<script language="javascript">$(document).ready(app_medical_obj.reserve_list_init);</script>
					<div class="control_btn"><a href="<?php echo U('Medical/edit');?>" class="btn_ok btn_ok_w_120">预约设置</a></div>
					<form class="r_con_search_form" id="search_form" method="get" action="?">
						关键词：<input type="text" name="Keyword" value="" class="form_input" size="15" />
						时间：<input type="text" class="form_input" name="Time" value="" maxlength="20" />
						<input type="submit" class="search_btn" value="搜索" />
						<input type="button" class="search_btn" value="导出" />
						<input type="hidden" name="m" value="app_medical" />
						<input type="hidden" name="a" value="index" />
						<input type="hidden" name="d" value="list" />
					</form>
					<table border="0" cellpadding="5" cellspacing="0" class="r_con_table">
						<thead>
							<tr>
								<td width="5%" nowrap="nowrap">序号</td>
                                <td width="10%" nowrap="nowrap">姓名</td>
                                <td width="5%" nowrap="nowrap">性别</td>
								<td width="10%" nowrap="nowrap">年龄</td>
                                <td width="30%" nowrap="nowrap">预约时间</td>
                                <td width="30%" nowrap="nowrap">提交时间</td>
								<td width="10%" class="last">操作</td>
							</tr>
						</thead>
						<tbody>
                            <?php if(is_array($reserve)): $i = 0; $__LIST__ = $reserve;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
								<td nowrap="nowrap"><?php echo ($v["id"]); ?></td>
								<td><?php echo ($v["name"]); ?></td>
                                <td><?php echo ($v["sex"]); ?></td>
                                <td><?php echo ($v["age"]); ?></td>
                                <td><?php echo (date("Y-m-d H:i:s",$v["reserve_time"])); ?></td>
                                <td><?php echo (date("Y-m-d H:i:s",$v["input_time"])); ?></td>
								<td nowrap="nowrap" class="last">
									<a href="<?php echo U('Medical/detail', array('id'=> $v['id']));?>"  LId="<?php echo ($v["id"]); ?>"><img src="/test/onethink/Public/Member/images/view.gif" align="absmiddle" alt="预约查看" /></a>
									<a href="<?php echo U('Medical/del', array('id'=> $v['id']));?>" onClick="if(!confirm('删除后不可恢复，继续吗？')){return false};"><img src="/test/onethink/Public/Member/images/del.gif" align="absmiddle" alt="删除" /></a>
								</td>
							</tr><?php endforeach; endif; else: echo "" ;endif; ?>
						</tbody>
					</table>
					<div class="blank20"></div>
					<div id="turn_page"></div>
			</div>	</div>
		</div>
	</body>
</html>