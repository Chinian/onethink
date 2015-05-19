<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta charset="utf-8">
<title>微信公众平台管理系统</title>
		<link rel="stylesheet" type="text/css" href="/test/onethink/Public/static/css/global.css" media="all">
		<link rel="stylesheet" type="text/css" href="/test/onethink/Public/static/css/frame.css" media="all">
<script type="text/javascript" src="/test/onethink/Public/static/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="/test/onethink/Public/static/js/frame.js"></script>

<style media="screen" type="text/css">
#PicUploadUploader {
	visibility: hidden
}
</style>
</head>
<body>
	
	<script language="javascript">
		$(document).ready(frame_obj.search_form_init);
	</script>
	<div id="iframe_page">
		<div class="iframe_content">
			<div class="r_nav">
				<ul>
					<li class=""><a indepth="true" href="<?php echo U('wedding/index');?>">信息管理</a></li>
					<li class=""><a indepth="true" href="<?php echo U('wedding/index');?>">信息推荐</a></li>
					<li class="cur"><a indepth="true" href="<?php echo U('wedding/catview');?>">栏目编辑</a></li>
				</ul>
			</div>
			<div id="products" class="r_con_wrap">

				<form id="products_form" class="r_con_form">
					<div class="rows">
						<label>名称</label>
						<span class="input"><input name="title" value="<?php echo ($data["cate"]["title"]); ?>" class="form_input" size="35" maxlength="100" notnull="" type="text"> <font class="fc_red">*</font></span>
						<div class="clear"></div>
					</div>
					<div class="rows">
						<label>父类别</label>
						 <span class="input attr">
						<select name="pid">
							<option disabled="disabled" selected="selected" value="<?php echo ($data["cate"]["pid"]); ?>"><?php echo ($data["cate"]["ptitle"]); ?></option>
							
						<option  value="0"> 无 </option>
						<?php if(is_array($data["catlist"])): $i = 0; $__LIST__ = $data["catlist"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option  value="<?php echo ($v["id"]); ?>"><?php echo ($v["title"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
						</select>
						</span>
						<div class="clear"></div>
					</div>
					<div class="rows">
						<label></label> <span class="input">
							<input type="hidden" name="catid" value="<?php echo ($data["cate"]["id"]); ?>" />
						<input type="button" id="cate_submit" class="btn_ok" name="submit_button" value="提交保存" />
						<a indepth="true" href="index.html" class="btn_cancel">返回</a></span>
						<div class="clear"></div>
					</div>

				</form>
			</div>
		</div>
	</div>

<script src="/test/onethink/Public/Member/js/wedding.js"></script>
</body>
</html>