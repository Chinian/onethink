<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>微信公众平台管理系统</title>
		<link href='/test/onethink/Public/static/css/global.css' rel='stylesheet' type='text/css'  />
		<link href='/test/onethink/Public/static/css/frame.css' rel='stylesheet' type='text/css'  />
		<script type='text/javascript' src='/test/onethink/Public/static/js/jquery-1.7.2.min.js' ></script>
		<script type='text/javascript' src='/test/onethink/Public/static/js/frame.js' ></script>
	</head>

	<body>
		<script language="javascript">$(document).ready(frame_obj.search_form_init);</script>
		<div id="iframe_page">
			<div class="iframe_content">
				<link href='/test/onethink/Public/Member/css/businesscard.css' rel='stylesheet' type='text/css'  />
				<script type='text/javascript' src='/test/onethink/Public/Member/js/businesscard.js' ></script>
				<div class="r_nav">
					<ul>
						<li class="cur"><a href="/test/onethink/member.php?s=/Member/Businesscard">微名片</a></li>
					</ul>
					</div><div id="businesscard" class="r_con_wrap">
					<div class="control_btn">
						<a href="<?php echo U('Businesscard/edit');?>" class="btn_ok btn_ok_w_120">添加名片</a>
						<div class="tips_info"><strong>提示：</strong>向公众帐号发送姓名即可查看名片信息</div>
					</div>
					<table width="100%" align="center" border="0" cellpadding="5" cellspacing="0" class="r_con_table">
						<thead>
							<tr>
								<td width="10%">序号</td>
								<td width="15%">姓名</td>
								<td width="15%">手机</td>
								<td width="15%">电话</td>
								<td width="15%">QQ</td>
								<td width="20%">时间</td>
								<td width="10%" class="last">操作</td>
							</tr>
						</thead>
						<tbody> 
							<?php if(is_array($data["card"])): $i = 0; $__LIST__ = $data["card"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
								<td nowrap="nowrap"><?php echo ($v["id"]); ?></td>
								<td nowrap="nowrap"><?php echo ($v["name"]); ?></td>
								<td nowrap="nowrap"><?php echo ($v["mobile"]); ?></td>
								<td nowrap="nowrap"><?php echo ($v["tel"]); ?></td>
								<td nowrap="nowrap"><?php echo ($v["qq"]); ?></td>
								<td nowrap="nowrap"><?php echo (date("Y-m-d H:i",$v["inputtime"])); ?></td>
								<td class="last" nowrap="nowrap">
									<a href="<?php echo U('Businesscard/edit', array('id' => $v['id']));?>"><img src="/test/onethink/Public/Member/images/mod.gif" align="absmiddle" alt="修改"></a>
									<a href="<?php echo U('Businesscard/del', array('id' => $v['id']));?>" onclick="if(!confirm('删除后不可恢复，继续吗？')){return false};"><img src="/test/onethink/Public/Member/images/del.gif" align="absmiddle" alt="删除"></a>
								</td>
							</tr><?php endforeach; endif; else: echo "" ;endif; ?>
						</tbody>
					</table>
					<div class="blank20"></div>
					<div id="turn_page">
					<?php echo ($page); ?>
					</div>
			</div>	</div>
		</div>
	</body>
</html>