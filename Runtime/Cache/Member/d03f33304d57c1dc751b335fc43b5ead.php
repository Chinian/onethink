<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>信息管理</title>
<script type="text/javascript" src="/test/onethink/Public/Static/js/jquery-1.7.2.min.js"></script>
</head>
<body>
	<table border="1">
		<tr>
			<th>id</th>
			<th>分类</th>
			<th>主题</th>
			<th>发布时间</th>
			<th>过期时间</th>
			<th>地区</th>
			<th>图片数量</th>
			<th>状态</th>
			<th>审核</th>
		</tr>
		<?php if(is_array($data["list"])): $i = 0; $__LIST__ = $data["list"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$info): $mod = ($i % 2 );++$i;?><tr>
			<td><?php echo ($info["id"]); ?></td>
			<td><?php echo ($info["category"]); ?></td>
			<td><?php echo ($info["title"]); ?></td>
			<td><?php echo (date("Y-m-d H:i",$info["inputtime"])); ?></td>
			<td><?php echo (date("Y-m-d H:i",$info["expirytime"])); ?></td>
			<td><?php echo ($info["regionid"]); ?></td>
			<td><?php echo ($info["pic"]); ?></td>
			<?php if($info["status"] == 1): ?><td><span style="color:green;">已审核</span></td>
				<td><input class="check_button" id="<?php echo ($info["id"]); ?>" type="button" value="审核" disabled="disabled" /></td>
			<?php else: ?>
				<td><span style="color:red;">未审核</span></td>
				<td><input class="check_button" id="<?php echo ($info["id"]); ?>" type="button" value="审核" /></td><?php endif; ?>
			
			
		</tr><?php endforeach; endif; else: echo "" ;endif; ?>
	</table>
</body>
<script type="text/javascript" src="/test/onethink/Public/Member/js/member.js"></script>
</html>