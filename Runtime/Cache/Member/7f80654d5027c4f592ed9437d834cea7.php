<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>微信公众平台管理系统</title>
		<link href="/test/onethink/Public/static/css/global.css" rel="stylesheet" type="text/css"  />
		<link href="/test/onethink/Public/static/css/frame.css" rel="stylesheet" type="text/css"  />
		<script type="text/javascript" src="/test/onethink/Public/static/js/jquery-2.1.0.min.js" ></script>
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

				
<script type="text/javascript" src="http://api.map.baidu.com/api?v=1.5&ak=Xbq3g4meudxD5Q0MB9osTLpg"></script>
<link href='/test/onethink/Public/static/plugin/operamasks-ui/operamasks-ui.css?' rel='stylesheet' type='text/css'  />
<script type='text/javascript' src='/test/onethink/Public/static/plugin/operamasks-ui/operamasks-ui.min.js' ></script>
<script type='text/javascript'>$(document).ready(app_car_obj.reserve_edit_init);</script>

				<div id="<?php echo (ACTION_NAME); ?>" class="r_con_wrap">
					
<div class="clear"></div>
<form class="r_con_form" id="reserve_form" data-url="<?php echo U('Car/editReserve');?>">
	<div class="rows">
		<label>标题</label>
		<span class="input"><span class="tips">预约试驾</span></span>
		<div class="clear"></div>
	</div>
	<div class="rows">
		<label>重命名标题</label>
		<span class="input"><input type="text" class="form_input" name="RenameTitle" value="<?php echo ($config["rename_title"]); ?>" maxlength="100" size="35" /></span>
		<div class="clear"></div>
	</div>
	<div class="rows">
		<label>预约地址</label>
		<span class="input">
			<input name="Address" id="Address" value="<?php echo ($config["add"]); ?>" type="text" class="form_input" size="40" maxlength="100" notnull/>
			<span class="primary" id="Primary">定位</span> <font class="fc_red">*</font><br />
			<div class="tips">接待预约用户地址，如果输入地址后点击定位按钮无法定位，请在地图上直接点击选择地点</div>
			<div id="map"></div>
		</span>
		<div class="clear"></div>
	</div>
	<div class="rows">
		<label>头部图片</label>
		<span class="input">
			<span class="upload_file">
				<div>
					<div class="up_input"><input name="HeaderImgUpload" id="HeaderImgUpload" type="file" /></div>
					<div class="tips">图片宽度建议：640px</div>
					<div class="clear"></div>
				</div>
				<div class="img" id="HeaderImgDetail"></div>
			</span>
		</span>
		<div class="clear"></div>
	</div>
	<div class="rows">
		<label>预约电话</label>
		<span class="input">
			<textarea name="Telephone" class="textarea" notnull><?php echo ($config["tel"]); ?></textarea> <font class="fc_red">*</font>
			<span class="tips">每行填写一个</span>
		</span>
		<div class="clear"></div>
	</div>
	<div class="rows">
		<label>重命名电话</label>
		<span class="input">
			<input type="text" class="form_input" name="RenameTelephone" value="<?php echo ($config["rename_tel"]); ?>" maxlength="100" size="35" />
			<div class="tips">修改用户手机中“预约电话”栏目的名称，您可以将其修改成诸如“下单电话”、“试驾电话”等</div>
		</span>
		<div class="clear"></div>
	</div>
	<div class="rows">
		<label>预约说明</label>
		<span class="input"><textarea name="Remark" class="textarea"><?php echo ($config["remark"]); ?></textarea></span>
		<div class="clear"></div>
	</div>
	<div class="rows">
		<label>重命名说明</label>
		<span class="input">
			<input type="text" class="form_input" name="RenameRemark" value="<?php echo ($config["rename_remark"]); ?>" maxlength="100" size="35" />
			<div class="tips">修改用户手机中“预约说明”栏目的名称，您可以将其修改成诸如“下单说明”、“试驾说明”等</div>
		</span>
		<div class="clear"></div>
	</div>

	<div class="rows">
		<label>预约内容设置</label>
		<span class="input">
			<div class="tips">填写你要收集的内容，预约默认选项不可以修改删除！</div>
			<table border="0" cellpadding="5" cellspacing="0" class="reverve_field_table">
				<thead>
					<tr>
						<td width="16%">字段类型</td>
						<td width="32%">字段名称</td>
						<td width="32%">初始内容</td>
						<td width="20%">操作</td>
					</tr>
				</thead>
				<tbody> 
					<tr>
						<td>文本框：</td>
						<td><input type="text" class="form_input" value="联系人" name="" disabled="disabled" /></td>
						<td><input type="text" class="form_input" value="请输入您的姓名" name="" disabled="disabled" /></td>
						<td><input type="checkbox" name="DisplayName" value="1" checked />是否显示</td>
					</tr>
					<tr>
						<td>文本框：</td>
						<td><input type="text" class="form_input" value="联系手机" name="" disabled="disabled" /></td>
						<td><input type="text" class="form_input" value="请输入您的手机" name="" disabled="disabled" /></td>
						<td nowrap="nowrap">
							<input type="checkbox" name="DisplayTelephone" value="1" checked />是否显示&nbsp;
							<input type="checkbox" name="CustomerSms" value="1"  />短信通知
						</td>
					</tr>
					<tr>
						<td>日期选择：</td>
						<td><input type="text" class="form_input" value="预约日期" name="" disabled="disabled" /></td>
						<td><input type="text" class="form_input" value="请输入预约日期" name="" disabled="disabled" /></td>
						<td><input type="checkbox" name="DisplayReserveDate" value="1" checked />是否显示</td>
					</tr>
					<tr>
						<td>时间选择：</td>
						<td><input type="text" class="form_input" value="预约时间" name="" disabled="disabled" /></td>
						<td><input type="text" class="form_input" value="请输入预约时间" name="" disabled="disabled" /></td>
						<td><input type="checkbox" name="DisplayReserveTime" value="1" checked />是否显示</td>
					</tr>
					<?php if(is_array($custom)): $i = 0; $__LIST__ = $custom;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$input): $mod = ($i % 2 );++$i;?><tr>
						<?php if(($input['type']) == "text"): ?><td fieldtype="text">新增输入框</td>
						<input type="hidden" name="InputId[]" value="<?php echo ($input["id"]); ?>"/>
						<input type="hidden" name="FieldType[]" value="text"/>
						<td><input type="text" class="form_input" value="<?php echo ($input["name"]); ?>" name="InputName[]" notnull/></td>
						<td><input type="text" class="form_input" value="<?php echo ($input["placeholder"]); ?>" name="InputValue[]" notnull/></td>
						<td>
							<a href="javascript:void(0);" class="input_del"><img src="/test/onethink/Public/Member/images/del.gif" /></a>
						</td><?php endif; ?>
						<?php if(($input['type']) == "select"): ?><td fieldtype="select">新增下拉框</td>
						<input type="hidden" name="InputId[]" value="<?php echo ($input["id"]); ?>"/>						
						<input type="hidden" name="FieldType[]" value="select"/>
						<td><input type="text" class="form_input" value="<?php echo ($input["name"]); ?>" name="InputName[]" notnull/></td>
						<td><input type="text" class="form_input" value="<?php echo ($input["placeholder"]); ?>" name="InputValue[]" notnull/></td>
						<td>
							<a href="javascript:void(0);" class="input_del"><img src="/test/onethink/Public/Member/images/del.gif" /></a>
						</td><?php endif; ?>
					</tr><?php endforeach; endif; else: echo "" ;endif; ?>
				</tbody>
				<tfoot>
					<tr>
						<td colspan="3"></td>
						<td>
							新增文本框<a class="input_add" href="javascript:void(0);"><img src="/test/onethink/Public/Member/images/add.gif" /></a>
							&nbsp;&nbsp;&nbsp;
							新增下拉框<a class="select_add" href="javascript:void(0);"><img src="/test/onethink/Public/Member/images/add.gif" /></a>
						</td>
					</tr>
				</tfoot>
			</table>
		</span>
		<div class="clear"></div>
	</div>


	<div class="rows">
		<label>&nbsp;</label>
		<span class="input">
			<input type="submit" class="btn_ok" name="submit_button" value="提交保存" /><a href="<?php echo U('Car/reserve');?>" class="btn_cancel">返回</a>
		</span>
		<div class="clear"></div>
	</div>
	<input type="hidden" name="RId" value="" />
	<input type="hidden" name="HeaderImgPath" value="<?php echo ($config["header_img_path"]); ?>" />
	<input type="hidden" name="PrimaryLng" value="<?php echo ($config["lng"]); ?>">
	<input type="hidden" name="PrimaryLat" value="<?php echo ($config["lat"]); ?>">
	<input type="hidden" name="do_action" value="app_car.reserve_edit" />
	<input type="hidden" name="ajax" value="1" />
</form>

				</div>

			</div>
		</div>
	</body>
</html>