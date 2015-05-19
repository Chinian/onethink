<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
		<meta content="telephone=no" name="format-detection" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="black" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title></title>
		<link href='/test/onethink/Public/static/css/global.css' rel='stylesheet' type='text/css'  />
		<link href='/test/onethink/Public/static/api/css/global.css' rel='stylesheet' type='text/css'  />
		<script type='text/javascript' src='/test/onethink/Public/static/js/jquery-1.7.2.min.js' ></script>
		<script type='text/javascript' src='/test/onethink/Public/static/api/js/jweixin-1.0.0.js' ></script>
		<script type='text/javascript' src='/test/onethink/Public/static/api/js/global.js' ></script>
		<script type="text/javascript">
			window.PG={
page:["33d3974ab3","app_car","index"],
     subscribe:0,
     openid:'',
     fansid:0,
     userid:0,
     cover:'',
     url_pre:'/test/onethink/',
     url_pre_module:'/test/onethink/wechat.php?s=/Car/',
     member_id:'16',
     js_sdk:{"appId":"wx295ea8b654156132","nonceStr":"ac53d04916c734d4","timestamp":1430708704 ,"signature":"005fac4af69157014c49b9a77ccb0277cc84fccf"}}
     $(document).ready(function(){global_obj.page_init()});
</script>
</head>

<body>
	<link href='/test/onethink/Public/Car/css/app_car.css' rel='stylesheet' type='text/css'  />
	<script type='text/javascript' src='/test/onethink/Public/static/plugin/swipe/swipe.js' ></script>
	<script type='text/javascript' src='/test/onethink/Public/Car/js/app_car.js' ></script>


	<div id="warpper" class="bg1 pdbottom8" >
		
		<header>
		<div class="web_name"><?php echo ($config["index"]["name"]); ?></div>
		<div class="logo"><a href="<?php echo U('Car/index');?>"><img src="<?php echo ($config["index"]["logo_path"]); ?>" /></a></div>
		</header>
		
		
		<div class="line"></div>
		<div id="headerbox" class="cate_frmae">
			<div class="nav-div">
				<?php if(is_array($carcate)): $i = 0; $__LIST__ = $carcate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Car/product', array('cid' => $v['id']));?>"><?php echo ($v["name"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
		</div>
		<div class="line2"></div>
		

		
<link href='/test/onethink/Public/static/plugin/datepicker/datepicker.css?' rel='stylesheet' type='text/css'  />
<script type='text/javascript' src='/test/onethink/Public/static/plugin/datepicker/datepicker.js' ></script>
<script type="text/javascript">app_car_obj.reserve_init();</script>
<script type="text/javascript">app_car_obj.app_car_header_swipe_init();</script>


		


<div class="banner"><img src="<?php echo ($config["reserve"]["header_img_path"]); ?>"></div>
<div class="feedback_frame2">
	<div class="ff_title2"><?php echo ($config["reserve"]["rename_title"]); ?></div>
	<div class="ff_title3"><?php echo ($config["reserve"]["remark"]); ?></div>
	<div class="ff_title4">
		<div class="ff4_left">地址：</div>
		<div class="ff4_right"><?php echo ($config["reserve"]["add"]); ?></div>
		<div class="clear"></div>
	</div>
	<div class="ff_title4">
		<div class="ff4_left">电话：</div>
		<div class="ff4_right"><?php echo ($config["reserve"]["tel"]); ?></div>
		<div class="clear"></div>
	</div>
</div>
<form name="reserve_form">
	<div class="feedback_frame3">
		<div class="ff3_item1"><span>请您认真填写预约试驾表单</span></div>
		<div class="ff3_item2">
			<div class="name1">联系人：</div>
			<div class="filed1"><input type="text" name="Name" class="form_input" placeholder="请输入您的真实姓名" notnull  /></div>
		</div>
		<div class="ff3_item2">
			<div class="name1">联系电话：</div>
			<div class="filed1"><input type="text" name="Telephone" class="form_input" placeholder="请输入您的联系电话" pattern="[0-9]*" notnull /></div>
		</div>
		<div class="ff3_item2">
			<div class="name1">车系：</div>
			<div class="filed1">
				<select name="CarCate" >
					<option>-----</option>
					<?php if(is_array($carcate)): $i = 0; $__LIST__ = $carcate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option value="<?php echo ($v['id']); ?>" ><?php echo ($v["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
				</select>
			</div>
		</div>
		<div class="ff3_item2">
			<div class="name1">车型：</div>
			<div class="filed1">
				<select name="CarType" >
					<option>-----</option>
				</select>
			</div>
		</div>
		<div class="ff3_item2">
			<div class="name1">预约日期：</div>
			<div class="filed1"><input type="text" name="ReserveDate" value="" class="form_input" style=" padding-top:0px;" readonly /></div>
		</div>
		<div class="ff3_item2">
			<div class="name1">预约时间：</div>
			<div class="filed1">
				<table cellpadding="0" cellspacing="0" border="0">
					<tr>
						<td width="60">
							<select name="ReserveTimeHour" class="reserve_time">
								<?php $__FOR_START_12538__=10;$__FOR_END_12538__=16;for($i=$__FOR_START_12538__;$i < $__FOR_END_12538__;$i+=1){ ?><option value='<?php echo ($i); ?>' ><?php echo ($i); ?></option><?php } ?>
							</select>
						</td>
						<td>点</td>
						<td width="60">
							<select name="ReserveTimeMinute" class="reserve_time">
								<?php $__FOR_START_13995__=0;$__FOR_END_13995__=60;for($i=$__FOR_START_13995__;$i < $__FOR_END_13995__;$i+=10){ ?><option value='<?php echo ($i); ?>' ><?php echo ($i); ?></option><?php } ?>
							</select>
						</td>
						<td>分</td>
					</tr>
				</table>
			</div>
		</div>
		
		<?php if(is_array($custom)): $i = 0; $__LIST__ = $custom;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="ff3_item2">
			<div class="name1"><?php echo ($v["name"]); ?>：</div>
			<div class="filed1">
				<?php if(($v['type']) == "text"): ?><input type="text" name="InputValue[<?php echo ($v["id"]); ?>]" class="form_input" placeholder="<?php echo ($v["placeholder"]); ?>"/><?php endif; ?>
				<?php if(($v['type']) == "select"): ?><select name="InputValue[<?php echo ($v["id"]); ?>]">
					<?php if(is_array($v["option"])): $i = 0; $__LIST__ = $v["option"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$o): $mod = ($i % 2 );++$i;?><option value="<?php echo ($i); ?>"><?php echo ($o); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
				</select>
				</select><?php endif; ?>
			</div>
		</div><?php endforeach; endif; else: echo "" ;endif; ?>
		
		
		<div class="ff3_item3">
			<div class="name1">备注：</div>
			<div class="filed2"><textarea name="Contents" cols="30" rows="5"></textarea></div>
		</div>
		<div class="ff3_item4">
			<input type="button" class="sub submit" value="提交订单" />
			<input type="hidden" name="RId" value="6">
			<input type="hidden" name="do_action" value="app_car.reserve">
		</div>
	</div>
</form>
<div style="height:35px;"></div>





	</div>

	<div id="footer" class="plug-menu bgcolor"><span class="close"></span></div>
	<ul class="footer_list">
		<li>
		<span class="i_icon"><img src="/test/onethink/Public/Car/images/app_car/icon1.png" /></span>
		<span class="i_name"><a href="<?php echo U('Car/contact');?>/">联系我们</a></span>
		</li>
		<li>
		<span class="i_icon"><img src="/test/onethink/Public/Car/images/app_car/icon2.png" /></span>
		<span class="i_name"><a href="<?php echo U('Car/about');?>/">关于我们</a></span>
		</li>
		<li>
		<span class="i_icon"><img src="/test/onethink/Public/Car/images/app_car/icon3.png" /></span>
		<span class="i_name"><a href="<?php echo U('Car/index');?>">微站首页</a></span>
		</li>    
	</ul>
	<div id="mask"></div>


	<script type="text/javascript">app_car_obj.app_car_footer_init();</script>
	<script type="text/javascript">
		window.PG.share={
			title:'<?php echo ($config["index"]["reply_title"]); ?>',
			desc:'<?php echo ($config["index"]["reply_title"]); ?>',
			img_url:'<?php echo ($config["index"]["logo_path"]); ?>'
		}
	</script>

</body>
</html>
</block>