<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>微信公众平台管理系统</title>
		<link href='/test/onethink/Public/static/css/global.css' rel='stylesheet' type='text/css'  />
		<link href='/test/onethink/Public/static/css/frame.css' rel='stylesheet' type='text/css'  />
		<script type='text/javascript' src='/test/onethink/Public/static/js/jquery-1.7.2.min.js' ></script>
		<script type='text/javascript' src='/test/onethink/Public/static/js/frame.js' ></script>
		<script type='text/javascript' src='/test/onethink/Public/static/plugin/operamasks-ui/operamasks-ui.min.js' ></script>
		<script type='text/javascript' src='/test/onethink/Public/Member/js/app_hotels.js' ></script>
		<script src="//cdn.ckeditor.com/4.4.7/full/ckeditor.js"></script>
	</head>

	<body>
		<script language="javascript">
			$(document).ready(function() {
				app_hotels_obj.config_init();
				frame_obj.search_form_init();
			});
		</script>
		<div id="iframe_page">
			<div class="iframe_content">
				<link href='/test/onethink/Public/Member/css/hotel.css' rel='stylesheet' type='text/css'  />
				<div class="r_nav">
					<ul>
						<li class="cur"><a href="<?php echo U('Hotel/index');?>">基本设置</a></li>
						<li class=""><a href="<?php echo U('Hotel/products');?>">房间类型</a></li>
						<li class=""><a href="<?php echo U('Hotel/reserve');?>">预订订单管理</a></li>
					</ul>
				</div>
				<div class="r_con_wrap">
					<form class="r_con_form" id="info_form">
						<div class="rows">
							<label>酒店名称</label>
							<span class="input"><input name="HotelsName" value="<?php echo ($info["name"]); ?>" type="text" class="form_input" size="25" maxlength="30" notnull> <font class="fc_red">*</font></span>
							<div class="clear"></div>
						</div>
						<div class="rows">
							<label>预订电话</label>
							<span class="input"><input name="PhoneNumber" value="<?php echo ($info["phone"]); ?>" type="text" class="form_input" size="25" maxlength="30" notnull> <font class="fc_red">*</font></span>
							<div class="clear"></div>
						</div>


						<div class="rows">
							<label>顶部图片</label>
							<span class="input">
								<div class="upload_file">
									<div>
										<div class="up_input"><input name="FileUpload" id="ImgPathFileUpload" type="file" /></div>
										<div class="tips">图片尺寸建议：640*320px</div>
										<div class="clear"></div>
									</div>
									<div class="img" id="ImgPathDetail"></div>
								</div>
							</span>
							<div class="clear"></div>
						</div>


						<div class="rows">
							<label>酒店地址</label>
							<span class="input"><input name="Address" value="<?php echo ($info["add"]); ?>" type="text" class="form_input" size="40" maxlength="30" notnull> <font class="fc_red">*</font></span>
							<div class="clear"></div>
						</div>
						<div class="rows">
							<label>预订说明</label>
							<span class="input"><textarea class="form_area" name="BriefDescription" notnull><?php echo ($info["des"]); ?></textarea> <font class="fc_red">*</font></span>
							<div class="clear"></div>
						</div>
						<div class="rows">
							<label>商家详情</label>
							<span class="input">
								<textarea class="ckeditor" name="Description"><?php echo ($info["detail"]); ?></textarea>
								<script type="text/javascript">
								CKEDITOR.replace('Description',
									    {
									        toolbar : 'Full',
									        uiColor : ''/*,
									        toolbarGroups : [
																{ name: 'clipboard',   groups: [ 'clipboard', 'undo' ] },
																{ name: 'editing',     groups: [ 'find', 'selection', 'spellchecker' ] },
																{ name: 'links' },
																{ name: 'insert' },
																{ name: 'forms' },
																{ name: 'tools' },
																{ name: 'document',	   groups: [ 'mode', 'document', 'doctools' ] },
																{ name: 'others' },
																'/',
																'/',
																{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
																{ name: 'paragraph',   groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ] },
																{ name: 'styles' },
																{ name: 'colors' }
															]*/

									    });
								</script>
							</span>
							<div class="clear"></div>
						</div>
						<div class="rows">
							<label></label>
							<span class="input"><input type="button" id="info_submit" class="btn_ok" name="submit_button" value="提交保存" /></span>
							<div class="clear"></div>
						</div>
						<input type="hidden" name="ImgPath" value="<?php echo ($info["imgpath"]); ?>" />
					</form>
			</div>	</div>
		</div>
	</body>
	<script type='text/javascript' src='/test/onethink/Public/Member/js/hotel.js' ></script>
</html>