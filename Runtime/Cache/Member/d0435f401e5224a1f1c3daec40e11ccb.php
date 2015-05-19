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
					<li class="cur"><a href="./?m=businesscard&a=index">微名片</a></li>
			</ul>
</div><div id="businesscard" class="r_con_wrap">
			<link href='/test/onethink/Public/static/plugin/operamasks-ui/operamasks-ui.css' rel='stylesheet' type='text/css'  />
<script type='text/javascript' src='/test/onethink/Public/static/plugin/operamasks-ui/operamasks-ui.min.js' ></script>
		<script type="text/javascript" src="http://api.map.baidu.com/api?v=1.5&ak=Xbq3g4meudxD5Q0MB9osTLpg"></script>











					<script language="javascript">$(document).ready(businesscard_obj.businesscard_init);</script>
					<div class="clear"></div>
					<form id="businesscard_form" class="r_con_form">
						<div class="rows">
							<label>姓名</label>
							<span class="input"><input type="text" class="form_input" name="Name" value="<?php echo ($data["name"]); ?>" size="15" notnull /> <font class="fc_red">*</font></span>
							<div class="clear"></div>
						</div>
						<div class="rows">
							<label>图文消息标题</label>
							<span class="input"><input type="text" class="form_input" name="ReplyTitle" value="<?php echo ($data["title"]); ?>" maxlength="100" size="35" notnull /> <font class="fc_red">*</font></span>
							<div class="clear"></div>
						</div>
						<div class="rows">
							<label>图文消息封面</label>
							<span class="input">
								<span class="upload_file">
									<div>
										<div class="up_input"><input name="ReplyImgUpload" id="ReplyImgUpload" type="file" /></div>
										<div class="tips">图片尺寸建议：640*360px</div>
										<div class="clear"></div>
									</div>
									<div class="img" id="ReplyImgDetail"></div>
								</span>
							</span>
							<div class="clear"></div>
						</div>
						<div class="rows">
							<label>简短介绍</label>
							<span class="input"><textarea name="ReplyBriefDescription" class="textarea"><?php echo ($data["replybriefdes"]); ?></textarea> <span class="tips">显示在图文封面下方</span></span>
							<div class="clear"></div>
						</div>
						<div class="rows">
							<label>风格选择</label>
							<span class="input">
								<ul id="businesscard-list-type">
									<li>
									<div class="item" SkinId="0">
										<div class="img"><img src="/test/onethink/Public/Member/images/businesscard/00.jpg" width="110" /></div>
										<div class="filter"></div>
										<div class="bg"></div>
									</div>
									</li>
									<li>
									<div class="item" SkinId="1">
										<div class="img"><img src="/test/onethink/Public/Member/images/businesscard/01.jpg" width="110" /></div>
										<div class="filter"></div>
										<div class="bg"></div>
									</div>
									</li>
									<li>
									<div class="item" SkinId="2">
										<div class="img"><img src="/test/onethink/Public/Member/images/businesscard/02.jpg" width="110" /></div>
										<div class="filter"></div>
										<div class="bg"></div>
									</div>
									</li>
									<li>
									<div class="item" SkinId="3">
										<div class="img"><img src="/test/onethink/Public/Member/images/businesscard/03.jpg" width="110" /></div>
										<div class="filter"></div>
										<div class="bg"></div>
									</div>
									</li>
									<li>
									<div class="item" SkinId="4">
										<div class="img"><img src="/test/onethink/Public/Member/images/businesscard/04.jpg" width="110" /></div>
										<div class="filter"></div>
										<div class="bg"></div>
									</div>
									</li>
									<li>
									<div class="item" SkinId="5">
										<div class="img"><img src="/test/onethink/Public/Member/images/businesscard/05.jpg" width="110" /></div>
										<div class="filter"></div>
										<div class="bg"></div>
									</div>
									</li>
									<li>
									<div class="item" SkinId="6">
										<div class="img"><img src="/test/onethink/Public/Member/images/businesscard/06.jpg" width="110" /></div>
										<div class="filter"></div>
										<div class="bg"></div>
									</div>
									</li>
								</ul>
								<input type="hidden" name="SkinId" value="<?php echo ($data["skinid"]); ?>">
							</span>
							<div class="clear"></div>
						</div>
						<div class="rows">
							<label>二维码</label>
							<span class="input">
								<span class="upload_file">
									<div>
										<div class="up_input"><input name="CodeUpload" id="ColumnCodeUploadUpload" type="file" /></div>
										<div class="tips">图片尺寸建议：300*300px</div>
										<div class="clear"></div>
									</div>
									<div class="img" id="CodeUploadImgPathDetail"></div>
								</span>
							</span>
							<div class="clear"></div>
						</div>
						<div class="rows">
							<label>背景音乐</label>
							<span class="input">
								<input type="text" name="BackgroundMusic" value="<?php echo ($data["bgm"]); ?>" class="form_input" size="40" maxlength="600" />
								<span class="upload_file">
									<div>
										<div class="up_input"><input name="MusicUpload" id="MusicUpload" type="file" /></div>
										<div class="tips">填写音乐地址或上传音乐文件，300KB以内，mp3格式</div>
										<div class="clear"></div>
									</div>
									<div class="img" id="MusicDetail"></div>
								</span>
							</span>
							<div class="clear"></div>
						</div>
						<div id="bg" class="rows" style="display:none;">
							<label>背景图片</label>
							<span class="input">
								<span class="upload_file">
									<div>
										<div class="up_input"><input name="BgUpload" id="BgUpload" type="file" /></div>
										<div class="tips">共可上传<span id="pic_count">5</span>张图片，图片大小建议：640*1010像素</div>
										<div class="clear"></div>
									</div>
								</span>
								<div class="img" id="BgDetail">
								</div>
							</span>
							<div class="clear"></div>
						</div>
						<div id="face" class="rows" >
							<label>头像</label>
							<span class="input">
								<span class="upload_file">
									<div>
										<div class="up_input"><input name="FileUpload" id="ColumnFileUpload" type="file" /></div>
										<div class="tips">图片尺寸建议：190*190px(转发时使用)</div>
										<div class="clear"></div>
									</div>
									<div class="img" id="ImgPathDetail"></div>
								</span>
							</span>
							<div class="clear"></div>
						</div>
						<div class="rows">
							<label>公司</label>
							<span class="input"><input type="text" class="form_input" name="Company" value="<?php echo ($data["company"]); ?>" maxlength="100" size="35" notnull /> <font class="fc_red">*</font></span>
							<div class="clear"></div>
						</div>
						<div class="rows">
							<label>职位</label>
							<span class="input"><input type="text" class="form_input" name="Posts" value="<?php echo ($data["posts"]); ?>" size="15" maxlength="15" notnull /> <font class="fc_red">*</font></span>
							<div class="clear"></div>
						</div>
						<div class="rows">
							<label>手机</label>
							<span class="input"><input type="text" class="form_input" name="MobilePhone" value="<?php echo ($data["mobile"]); ?>" size="15" maxlength="20" pattern="[0-9]*" notnull /> <font class="fc_red">*</font></span>
							<div class="clear"></div>
						</div>
						<div class="rows">
							<label>电话</label>
							<span class="input"><input type="text" class="form_input" name="Tel" value="<?php echo ($data["tel"]); ?>" maxlength="20" size="15" /></span>
							<div class="clear"></div>
						</div>
						<div class="rows">
							<label>传真</label>
							<span class="input"><input type="text" class="form_input" name="Fax" value="<?php echo ($data["fax"]); ?>" maxlength="20" size="15" /></span>
							<div class="clear"></div>
						</div>
						<div class="rows">
							<label>QQ</label>
							<span class="input"><input type="text" class="form_input" name="QQ" value="<?php echo ($data["qq"]); ?>" maxlength="13" size="15" pattern="[0-9]*" /></span>
							<div class="clear"></div>
						</div>
						<div class="rows">
							<label>邮箱</label>
							<span class="input"><input type="text" class="form_input" name="Email" value="<?php echo ($data["email"]); ?>" maxlength="100" size="35" /></span>
							<div class="clear"></div>
						</div>
						<div class="rows">
							<label>网址</label>
							<span class="input"><input type="text" class="form_input" name="WebSite" value="<?php echo ($data["website"]); ?>" maxlength="100" size="40" /></span>
							<div class="clear"></div>
						</div>
						<div class="rows">
							<label>简短描述</label>
							<span class="input"><textarea name="BriefDescription" class="textarea"><?php echo ($data["briefdes"]); ?></textarea></span>
							<div class="clear"></div>
						</div>
						<div class="rows">
							<label>微官网</label>
							<span class="input"><input type="checkbox" name="IsWeb" value="1" <?php if($data['isweb'] == 1): ?>checked ="checked"<?php endif; ?> > 显示</span>
							<div class="clear"></div>
						</div>
						<div class="rows">
							<label>详细地址</label>
							<span class="input">
								<input name="Address" id="Address" value="<?php echo ($data["add"]); ?>" type="text" class="form_input" size="40" maxlength="100" notnull>
								<span class="primary" id="Primary">定位</span>
								<font class="fc_red">*</font><br />
								<div class="tips">如果输入地址后点击定位按钮无法定位，请在地图上直接点击选择地点</div>
								<div id="map"></div>
							</span>
							<div class="clear"></div>
						</div>
						<div class="rows">
							<label>自定义链接</label>
							<span class="input"><input type="text" class="form_input" name="Customize" value="<?php echo ($data["customize"]); ?>" maxlength="20" size="50" /></span>
							<div class="clear"></div>
						</div>
						<div class="rows">
							<label>链接地址</label>
							<span class="input"><input type="text" class="form_input" name="CustomizeUrl" value="<?php echo ($data["customizeurl"]); ?>"  size="50" /></span>
							<div class="clear"></div>
						</div>
						<div class="rows">
							<label>&nbsp;</label>
							<span class="input"><input type="submit" class="btn_ok" name="submit_button" value="提交保存" /><a href="/test/onethink/member.php?s=/Member/Businesscard" class="btn_cancel">返回</a></span>
							<div class="clear"></div>
						</div>
						<input type="hidden" name="ReplyImgPath" value="<?php echo ($data["replyimgpath"]); ?>" />
						<input type="hidden" name="ImgPath" value="<?php echo ($data["imgpath"]); ?>" />
						<input type="hidden" name="CodeImgPath" value="<?php echo ($data["codeimgpath"]); ?>" />
						<input type="hidden" name="do_action" value="businesscard.edit" />
						<input type="hidden" name="BId" value="" />
						<input type="hidden" name="PrimaryLng" value="<?php echo ((isset($data["lng"]) && ($data["lng"] !== ""))?($data["lng"]):"116.403900"); ?>">
						<input type="hidden" name="PrimaryLat" value="<?php echo ((isset($data["lat"]) && ($data["lat"] !== ""))?($data["lat"]):"39.913900"); ?>">
						<input type="hidden" name="id" value="<?php echo ($data["id"]); ?>" />
					</form>
			</div>	</div>
		</div>
	</body>
</html>