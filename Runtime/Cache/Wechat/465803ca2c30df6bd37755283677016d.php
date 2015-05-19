<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" /><meta content="telephone=no" name="format-detection" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="black" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<base href="<?php echo U();?>" />
		<title></title>
		<link href='/test/onethink/Public/static/css/global.css' rel='stylesheet' type='text/css'  />
		<link href='/test/onethink/Public/static/api/css/global.css' rel='stylesheet' type='text/css'  />
		<script type='text/javascript' >

var system_obj={
	domain:function(domain){
		var http_host_ary=window.location.host.split('.');
		http_host_ary.shift();
		var http_host=http_host_ary.join('.');
		var domain_list={
			www:'http://'+window.location.host,
			static:'http://119.29.100.195',//http://static.'+http_host,//
			img:'http://img.'+http_host,
			kf:'http://kf.'+http_host
		};
		return domain_list[domain]
	},
	
	check_form:function(notnull_obj, format_obj){
		var flag=false;
		if(notnull_obj){
			notnull_obj.each(function(){
				if($(this).val()==''){
					$(this).css('border', '1px solid red');
					flag==false && ($(this).focus());
					flag=true;
				}else{
					$(this).removeAttr('style');
				}
			});
			if(flag){return flag;};
		}
		if(format_obj){
			var reg={
				'MobilePhone':/^1[34578]\d{9}$/,
				'IdNum':/(^\d{15}$)|(^\d{18}$)|(^\d{17}(\d|X|x)$)/,
				'Telephone':/^(0\d{2,3})(-)?(\d{7,8})(-)?(\d{3,})?$/,
				'Fax':/^(0\d{2,3})(-)?(\d{7,8})(-)?(\d{3,})?$/,
				'QQ':/^[1-9]\d{4,10}$/,
				'Email':/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/
			};
			var tips={
				'MobilePhone':'请正确填写手机号码！',
				'IdNum':'请正确填写身份证号码！',
				'Telephone':'请正确填写电话号码！',
				'Fax':'请正确填写传真号码！',
				'QQ':'请正确填写QQ号码！',
				'Email':'请正确填写邮箱地址！'
			};
			format_obj.each(function(){
				var o=$(this);
				if(!o.val()){
					return true;
				}else if(reg[o.attr('format')].test(o.val())===false){
					if(window.location.href.indexOf('/api/')!=-1){
						global_obj.win_alert(tips[o.attr('format')], function(){o.focus();});
					}else{
						alert(tips[o.attr('format')]);
						o.focus();
					}
					flag=true;
					return false;
				}
			});
		}
		return flag;
	},
	
	div_mask:function(remove){
		if(remove==1){
			$('#div_mask').remove();
		}else{
			$('body').prepend('<div id="div_mask"></div>');
			$('#div_mask').css({width:'100%', height:$(document).height(), overflow:'hidden', position:'absolute', top:0, left:0, background:'#000', opacity:0.6, 'z-index':10000});
		}
	}
};


		</script>
		<script type='text/javascript' src='/test/onethink/Public/static/js/jquery-1.7.2.min.js' ></script>
		<script type='text/javascript' src='/test/onethink/Public/Hotel/js/jweixin-1.0.0.js' ></script>
		<script type='text/javascript' src='/test/onethink/Public/Hotel/js/global.js' ></script>
		<script language="javascript">
			window.PG={
				page:["33d3974ab3","app_hotels","index"],
				subscribe:0,
				openid:'',
				fansid:0,
				userid:0,
				cover:'',
				url_pre:'/api/33d3974ab3/',
				url_pre_module:'/api/33d3974ab3/app_hotels/',
				member_id:'16',
				js_sdk:''}
			$(document).ready(function(){global_obj.page_init()});
		</script>


	</head>

	<body>
		<link href='/test/onethink/Public/Hotel/css/app_hotels.css' rel='stylesheet' type='text/css'  />
		<script type='text/javascript' src='/test/onethink/Public/Hotel/js/app_hotels.js' ></script>
		<link href='/test/onethink/Public/static/plugin/datepicker/datepicker.css' rel='stylesheet' type='text/css'  />
		<script type='text/javascript' src='/test/onethink/Public/static/plugin/datepicker/datepicker.js' ></script>
		<script language="javascript">$(document).ready(app_hotels_obj.goods_init);</script>
		<div id="reserve_success">提交成功！</div>
		<div id="banner"><img src="<?php echo ($toppic); ?>" /></div><div id="app_hotels">
			<div class="box">
				<h3>
					类型
					<label class="price_0">原价</label>
					<label class="price_1">优惠价</label>
				</h3>
				<div class="proinfo">
					<?php echo ($data["product"]["name"]); ?>	<label class="price_0">1</label>
					<label class="price_1">100</label>
				</div>
			</div>
			<div class="box">
				<h3>简短介绍</h3>
				<div class="contents"><?php echo ($data["product"]["briefdes"]); ?></div>
				<a href="tel:11111" class="tel">11111 电话预订</a>
			</div>
			<a href="<?php echo U('hotel/detail', array('id' => $data['product']['id']));?>" class="btn">查看房间详情</a>
			<form name="reserve_form">
				<div class="reserve_table">
					<table width="100%" cellpadding="0" cellspacing="0" border="0">
						<thead>
							<tr>
								<td colspan="2">请认真填写表单</td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="label">联系人</td>
								<td><input type="text" name="Name" value="" class="form_input" placeholder="请输入您的姓名" notnull /></td>
							</tr>
							<tr>
								<td class="label">联系手机</td>
								<td><input type="tel" name="Telephone" value="" class="form_input" placeholder="请输入您的联系手机" pattern="[0-9]*" notnull  maxlength="11" /></td>
							</tr>
							<tr>
								<td class="label">入住日期</td>
								<td><input type="text" name="ReserveDate" value="" class="form_input" readonly /></td>
							</tr>
							<tr>
								<td class="label">入住时间</td>
								<td>
									<select name="ReserveTimeHour" class="reserve_time">
										<option value='0' >0</option>
										<option value='1' >1</option>
										<option value='2' >2</option>
										<option value='3' >3</option>
										<option value='4' >4</option>
										<option value='5' >5</option>
										<option value='6' >6</option>
										<option value='7' >7</option>
										<option value='8' >8</option>
										<option value='9' >9</option>
										<option value='10' selected>10</option>
										<option value='11' >11</option>
										<option value='12' >12</option>
										<option value='13' >13</option>
										<option value='14' >14</option>
										<option value='15' >15</option>
										<option value='16' >16</option>
										<option value='17' >17</option>
										<option value='18' >18</option>
										<option value='19' >19</option>
										<option value='20' >20</option>
										<option value='21' >21</option>
										<option value='22' >22</option>
										<option value='23' >23</option>
										</select>点<select name="ReserveTimeMinute" class="reserve_time">
										<option value='0'>0</option>
										<option value='10'>10</option>
										<option value='20'>20</option>
										<option value='30'>30</option>
										<option value='40'>40</option>
										<option value='50'>50</option>
									</select>分
								</td>
							</tr>
							<tr>
								<td class="label">离店日期</td>
								<td><input type="text" name="CheckOutDate" value="" class="form_input" readonly /></td>
							</tr>
							<tr>
								<td class="label">离店时间</td>
								<td>
									<select name="CheckOutHour" class="reserve_time">
										<option value='0' >0</option>
										<option value='1' >1</option>
										<option value='2' >2</option>
										<option value='3' >3</option>
										<option value='4' >4</option>
										<option value='5' >5</option>
										<option value='6' >6</option>
										<option value='7' >7</option>
										<option value='8' >8</option>
										<option value='9' >9</option>
										<option value='10' selected>10</option>
										<option value='11' >11</option>
										<option value='12' >12</option>
										<option value='13' >13</option>
										<option value='14' >14</option>
										<option value='15' >15</option>
										<option value='16' >16</option>
										<option value='17' >17</option>
										<option value='18' >18</option>
										<option value='19' >19</option>
										<option value='20' >20</option>
										<option value='21' >21</option>
										<option value='22' >22</option>
										<option value='23' >23</option>
										</select>点<select name="CheckOutMinute" class="reserve_time">
										<option value='0'>0</option>
										<option value='10'>10</option>
										<option value='20'>20</option>
										<option value='30'>30</option>
										<option value='40'>40</option>
										<option value='50'>50</option>
								</select>分</td>
							</tr>
							<tr>
								<td class="label">原价</td>
								<td>￥<?php echo ($data["product"]["price0"]); ?>.00</td>
							</tr>
							<tr>
								<td class="label">现价</td>
								<td class="price_1">￥<?php echo ($data["product"]["price1"]); ?>.00</td>
							</tr>
							<tr>
								<td class="label">为您节省</td>
								<td class="save">￥<?php echo ($data['product']['price0']-$data['product']['price1']); ?>.00</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="blank6"></div>
				<div><input type="button" class="submit" value="提交订单" /></div>
				<input type="hidden" name="ProId" value="<?php echo ($data["product"]["id"]); ?>">
			</form>
		</div>
<script language="javascript">
window.PG.share={
	title:'test',
	desc:'简短介绍',
	img_url:'<?php echo ($toppic); ?>'
}
</script>

	</body>
</html>