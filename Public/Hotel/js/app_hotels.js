/*
Powered by ly200.com		http://www.ly200.com
广州联雅网络科技有限公司		020-83226791
*/

var app_hotels_obj={
	app_hotels_init:function(){
		$('title, #HotelsName').html(config_json.HotelsName);
		$('#HotelsRemark').html(config_json.BriefDescription);
		$('#app_hotels .info li:eq(0) a').attr('href', 'http://api.map.baidu.com/geocoder?address='+config_json.Address+'&output=html').html(config_json.Address);
		$('#app_hotels .info li:eq(1) a').attr('href', 'tel:'+config_json.PhoneNumber).html(config_json.PhoneNumber+' 电话预订');
		$('#app_hotels .info li:eq(2) a').attr('href', 'article/').html('查看商家详情');
		if(config_json.ImgPath){
			$('#banner').html('<img src="'+config_json.ImgPath+'" />');
		}
	},
	
	goods_init:function(){
		 var cur_date=new Date();
		 var tomo_date=new Date(cur_date.setDate(cur_date.getDate()+1)); 
		$('#app_hotels input[name=ReserveDate]').datepicker({
			minDate:new Date(),
			dateFormat:'yy-mm-dd'
		}).val((
			function(d){
				return [d.getFullYear(), d.getMonth()+1, d.getDate()+1].join('-');
			}
		)(new Date()));
		
		$('#app_hotels input[name=CheckOutDate]').datepicker({
			minDate:tomo_date,
			dateFormat:'yy-mm-dd'
		}).val((
			function(d){
				return [d.getFullYear(), d.getMonth()+1, d.getDate()+1].join('-');
			}
		)(tomo_date));
		
		$('.submit').click(function(){
			if(system_obj.check_form($('*[notnull]'))){return false};
			$(this).attr('disabled', true).val('提交中...');
			$.post(
				'./wechat.php?s=/Wechat/hotel/reserve',
				$('form').serialize(),
				function(data){
				if(data.ret==1){
					$('input, select, textarea').attr('disabled', true);
					$('.submit').val('提交成功');
					$('#reserve_success').show().animate({
						bottom:150,
						opacity:'0.7'
					}, 1500).animate({
						opacity:0
					}, 4000);
				}else{
					global_obj.win_alert(data.msg);
					$('.submit').attr('disabled', false).val('提交订单');
				};
			}, 'json');
		});
	},
	
	detail_init:function(){
		$('.touchslider').touchSlider({
			mouseTouch:true,
			autoplay:true,
			delay:2000
		});
	}
}
