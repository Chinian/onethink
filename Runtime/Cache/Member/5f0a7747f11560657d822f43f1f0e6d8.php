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
					<li class="cur"><a indepth="true" href="<?php echo U('wedding/index');?>">信息管理</a></li>
					<li class=""><a indepth="true" href="<?php echo U('wedding/index');?>">信息推荐</a></li>
					<li class=""><a indepth="true" href="<?php echo U('wedding/catview');?>">栏目编辑</a></li>
				</ul>
			</div>
			<div id="products" class="r_con_wrap">

				<form id="products_form" class="r_con_form">
					<div class="rows">
						<label>商店名称</label>
						<span class="input"><input name="title" value="<?php echo ($data["info"]["title"]); ?>" class="form_input" size="35" maxlength="100" notnull="" type="text"> <font class="fc_red">*</font></span>
						<div class="clear"></div>
					</div>
					<div class="rows">
						<label>类别</label>
						 <span class="input attr">
						<select name="category">
						<option disabled="disabled" selected="selected"><?php echo ($data["info"]["cat"]); ?></option>
						<?php if(is_array($data["category"])): $i = 0; $__LIST__ = $data["category"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><optgroup  label ="<?php echo ($v["title"]); ?>">
							<?php if(is_array($v["child"])): $i = 0; $__LIST__ = $v["child"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vv): $mod = ($i % 2 );++$i;?><option  value="<?php echo ($vv["id"]); ?>"><?php echo ($vv["title"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
							</optgroup><?php endforeach; endif; else: echo "" ;endif; ?>
						</select>
						</span>
						<div class="clear"></div>
					</div>
					<div class="rows">
						<label>区域</label>
						 <span class="input attr">
						<select name="region">
						<option disabled="disabled" selected="selected"><?php echo ($data["info"]["region"]); ?></option>
						<?php if(is_array($data["region"])): $i = 0; $__LIST__ = $data["region"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><option value="<?php echo ($val["id"]); ?>"><?php echo ($val["region"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
						</select>
						</span>
						<div class="clear"></div>
					</div>
					<div class="rows">
						<label>详细地址</label>
						<span class="input"><input name="address" value="<?php echo ($data["info"]["address"]); ?>" class="form_input" size="35" maxlength="100" notnull="" type="text"> <font class="fc_red">*</font></span>
						<div class="clear"></div>
					</div>
					<div class="rows">
						<label>联系人</label>
						<span class="input"><input name="contact" value="<?php echo ($data["info"]["contact"]); ?>" class="form_input" size="35" maxlength="100" notnull="" type="text"> <font class="fc_red">*</font></span>
						<div class="clear"></div>
					</div>
					<div class="rows">
						<label>联系电话</label>
						<span class="input"><input name="phone" value="<?php echo ($data["info"]["phone"]); ?>" class="form_input" size="35" maxlength="100" notnull="" type="text"> <font class="fc_red">*</font></span>
						<div class="clear"></div>
					</div>
					<div class="rows">
						<label>宣传语</label>
						<span class="input"><input name="advert" value="<?php echo ($data["info"]["advert"]); ?>" class="form_input" size="35" maxlength="100" notnull="" type="text"> <font class="fc_red">*</font></span>
						<div class="clear"></div>
					</div>
					<div class="rows">
						<label>详细介绍</label>
						<span class="input"><textarea class="ckeditor" name="content" ><?php echo ($data["info"]["content"]); ?></textarea></span>
						<div class="clear"></div>
					</div>
					<div class="rows">
						<label>有效期限</label>
						<span class="input attr">
						<select name="valid">
							<option disabled="disabled" selected="selected">默认</option>
							<option value='604800'>一周</option>
							<option value='2678400'>一个月</option>
							<option value='31622400'>一年</option>
						</select>
						</span>
						<div class="clear"></div>
					</div>
					<div class="rows">
						<label></label> <span class="input">
						<input type="button" id="info_submit" class="btn_ok" name="submit_button" value="提交保存" />
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