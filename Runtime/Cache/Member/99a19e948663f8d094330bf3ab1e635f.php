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
			<link href='/test/onethink/Public/Member/css/app_car.css' rel='stylesheet' type='text/css'  />
			<script type='text/javascript' src='/test/onethink/Public/Member/js/app_car.js' ></script>
<div class="r_nav">
	<ul>
		<li <?php if((ACTION_NAME) == "index"): ?>class="cur"<?php endif; ?> ><a href="<?php echo U('Car/index');?>">基本设置</a></li>
		<li <?php if((ACTION_NAME) == "products"): ?>class="cur"<?php endif; ?> ><a href="<?php echo U('Car/products');?>">车系管理</a></li>
		<li <?php if((ACTION_NAME) == "news"): ?>class="cur"<?php endif; ?> ><a href="<?php echo U('Car/news');?>">活动资讯</a></li>
		<li <?php if((ACTION_NAME) == "reserve"): ?>class="cur"<?php endif; ?> ><a href="<?php echo U('Car/reserve');?>">预约管理</a></li>
		<li <?php if((ACTION_NAME) == "about"): ?>class="cur"<?php endif; ?> ><a href="<?php echo U('Car/about');?>">关于我们</a></li>
		<li <?php if((ACTION_NAME) == "sales"): ?>class="cur"<?php endif; ?> ><a href="<?php echo U('Car/sales');?>">联系销售</a></li>
		<li <?php if((ACTION_NAME) == "tool"): ?>class="cur"<?php endif; ?> ><a href="<?php echo U('Car/tool');?>">实用工具</a></li>
		<li <?php if((ACTION_NAME) == "owner"): ?>class="cur"<?php endif; ?> ><a href="<?php echo U('Car/owner');?>">车主关怀</a></li>
	</ul>
</div>
<div id="products" class="r_con_wrap">
	<link href='/test/onethink/Public/static/plugin/operamasks-ui/operamasks-ui.css' rel='stylesheet' type='text/css'  />
	<script type='text/javascript' src='/test/onethink/Public/static/plugin/operamasks-ui/operamasks-ui.min.js' ></script>
	<script src="//cdn.ckeditor.com/4.4.7/full/ckeditor.js"></script>

<script language="javascript">$(document).ready(app_car_obj.products_init);</script>
<form id="products_form" class="r_con_form" method="post" action="<?php echo U('Car/products');?>">
	<div class="rows">
		<label>产品名称</label>
		<span class="input">
			<input type="text" name="Name" value="<?php echo ($product["name"]); ?>" class="form_input" size="35" maxlength="100" notnull /> 
			<font class="fc_red">*</font>
		</span>
		<div class="clear"></div>
	</div>
	<div class="rows">
		<label>隶属分类</label>
		<span class="input">
			<select name='CateId' notnull>
				<option value='' >--请选择--</option>
				<?php if(is_array($cates)): $i = 0; $__LIST__ = $cates;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$c): $mod = ($i % 2 );++$i;?><option value='<?php echo ($c["id"]); ?>' <?php if($c['id'] == $product['cateid']): ?>selected="selected"<?php endif; ?> >├<?php echo ($c["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
			</select>
		</span>
		<div class="clear"></div>
	</div>
	<div class="rows">
		<label>简短介绍</label>
		<span class="input"><textarea name="BriefDescription" class="briefdesc"><?php echo ($product["brief_des"]); ?></textarea></span>
		<div class="clear"></div>
	</div>
	<div class="rows">
		<label>排序优先级</label>
		<span class="input">
			<input type="text" name="MyOrder" value="0"  class="form_input" size="35" maxlength="8" notnull />
			<font class="fc_red">*</font>
		</span>
		<div class="clear"></div>
	</div>
	<div class="rows">
		<label>详细介绍</label>
		<span class="input">
			<textarea class="ckeditor" name="Description"><?php if(isset($product["des"])): echo ($product["des"]); ?> <?php else: ?> &lt;table cellpadding=&quot;0&quot; cellspacing=&quot;0&quot; border=&quot;0&quot; width=&quot;90%&quot; align=&quot;center&quot; id=&quot;tb&quot;&gt;&lt;tbody&gt;&lt;tr&gt;&lt;td height=&quot;40&quot; width=&quot;32%&quot;&gt;指导价：&lt;/td&gt;&lt;td width=&quot;68%&quot;&gt;信息&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td height=&quot;40&quot; width=&quot;32%&quot;&gt;排量：&lt;/td&gt;&lt;td width=&quot;68%&quot;&gt;信息&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td height=&quot;40&quot; width=&quot;32%&quot;&gt;最大功率：&lt;/td&gt;&lt;td width=&quot;68%&quot;&gt;信息&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td height=&quot;40&quot; width=&quot;32%&quot;&gt;综合油耗：&lt;/td&gt;&lt;td width=&quot;68%&quot;&gt;信息&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td height=&quot;40&quot; width=&quot;32%&quot;&gt;承载人数：&lt;/td&gt;&lt;td width=&quot;68%&quot;&gt;5&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td height=&quot;40&quot; width=&quot;32%&quot;&gt;最高时速：&lt;/td&gt;&lt;td width=&quot;68%&quot;&gt;信息&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt;<?php endif; ?> </textarea>
<script type="text/javascript">

	CKEDITOR.replace( 'Description',
			{
language: 'zh-cn',
toolbar : 'Full',

toolbar_Full :
[
['Source','-','Cut','Copy','Paste','PasteText','PasteFromWord','-','Print', 'SpellChecker', 'Scayt'],
['Undo','Redo','-','Find','Replace','-','SelectAll','RemoveFormat'],
['Bold','Italic','Underline','Strike','-','Subscript','Superscript'],
['NumberedList','BulletedList','-','Outdent','Indent','Blockquote'],
['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
['Link','Unlink'],
['Image','Flash','Table','HorizontalRule','Smiley','SpecialChar','PageBreak'],
['Styles','Format','Font','FontSize'],
['TextColor','BGColor'],
['Maximize', 'ShowBlocks','-','About']
]
});
</script>
		</span>
			<div class="clear"></div>
		</div>
		<div class="rows">
			<label></label>
			<span class="input">
				<input type="submit" class="btn_ok" name="submit_button" value="提交保存" />
				<a href="<?php echo U('Car/products');?>" class="btn_cancel">返回</a>
			</span>
			<div class="clear"></div>
		</div>
		<input type="hidden" name="do_action" value="app_car.products">
		<input type="hidden" name="ProId" value="<?php echo ($product["id"]); ?>">
</form></div>	</div>
</div>
</body>
</html>