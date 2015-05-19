<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
		<meta content="telephone=no" name="format-detection" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="black" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title></title>
		<link href="/test/onethink/Public/static/css/global.css" rel='stylesheet' type='text/css'  />
		<link href="/test/onethink/Public/static/api/css/global.css" rel='stylesheet' type='text/css'  />
		<script type='text/javascript' src="/test/onethink/Public/static/js/jquery-1.7.2.min.js" ></script>
		<script type='text/javascript' src="/test/onethink/Public/static/api/js/jweixin-1.0.0.js" ></script>
		<script type='text/javascript' src="/test/onethink/Public/static/api/js/global.js" ></script>
		<script type="text/javascript">
			window.PG={
				page:["33d3974ab3","app_medical","index"],
				subscribe:0,
				openid:'',
				fansid:0,
				userid:0,
				cover:'',
				url_pre:'/test/onethink/',
				url_pre_module:'/test/onethink/wechat.php?s=/Medical/',
				member_id:'16',
				js_sdk:''}
			$(document).ready(function(){global_obj.page_init()});
		</script>
	</head>

	<body>
		<link href="/test/onethink/Public/Wechat/css/app_medical.css" rel='stylesheet' type='text/css'  />
		<link href='/test/onethink/Public/static/plugin/datepicker/datepicker.css' rel='stylesheet' type='text/css'  />
		<script type='text/javascript' src='/test/onethink/Public/static/plugin/datepicker/datepicker.js' ></script>
		<script type='text/javascript' src='/test/onethink/Public/Wechat/js/app_medical.js' ></script>
		<script language="javascript">$(document).ready(app_medical_obj.app_medical_init);</script>
		<div id="reserve_success">提交成功！</div>
		<div id="app_medical">
			<div class="box">
				<h3>联系信息</h3>
				<ul>
					<li>
					<label>医院地址：</label>
					<a href="http://api.map.baidu.com/marker?location=21.966997,112.799809&title=2232222222222&name=2232222222222&content=114%E8%B7%AF&output=html">114路</a>
					</li>
					<li>
					<label>12：</label>
					<a href="tel:1">1</a>
					</li>
				</ul>
			</div>
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
								<td class="label">年龄</td>
								<td><input type="tel" name="Age" value="" class="form_input" placeholder="请输入您的年龄" pattern="[0-9]*" maxlength="2" notnull /></td>
							</tr>
							<tr>
								<td class="label">预约日期</td>
								<td><input type="text" name="ReserveDate" value="" class="form_input" readonly /></td>
							</tr>
							<tr>
								<td class="label">预约时间</td>
								<td>
									<select name="ReserveTimeHour" class="reserve_time">
										<option value='0' >0</option><option value='1' >1</option><option value='2' >2</option><option value='3' >3</option><option value='4' >4</option><option value='5' >5</option><option value='6' >6</option><option value='7' >7</option><option value='8' >8</option><option value='9' >9</option><option value='10' >10</option><option value='11' >11</option><option value='12' >12</option><option value='13' >13</option><option value='14' selected>14</option><option value='15' >15</option><option value='16' >16</option><option value='17' >17</option><option value='18' >18</option><option value='19' >19</option><option value='20' >20</option><option value='21' >21</option><option value='22' >22</option><option value='23' >23</option>
									</select>点
									<select name="ReserveTimeMinute" class="reserve_time">
										<option value='0'>0</option><option value='10'>10</option><option value='20'>20</option><option value='30'>30</option><option value='40'>40</option><option value='50'>50</option>
									</select>分
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="blank6"></div>
				<div><input type="button" class="submit" value="立即预约" /></div>
				<input type="hidden" name="do_action" value="app_medical.reserve">
			</form>
		</div>
		<script language="javascript">
			window.PG.share={
				title:'2232222222222',
				desc:'114路',
				img_url:''
			}
	</script></body>
</html>