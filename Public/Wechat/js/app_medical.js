/*
Powered by ly200.com		http://www.ly200.com
广州联雅网络科技有限公司		020-83226791
*/

var app_medical_obj={
	app_medical_init:function(){
		global_obj.upload_images('.upload_box');
		$('#app_medical input[name=ReserveDate]').datepicker({
			minDate:new Date(),
			dateFormat:'yy-mm-dd'
		}).val((
			function(d){
				return [d.getFullYear(), d.getMonth()+1, d.getDate()].join('-');
			}
		)(new Date()));
		
		$('.submit').click(function(){
			if(system_obj.check_form($('*[notnull]'))){return false};
			$(this).attr('disabled', true).val('提交中...');
			$.post('./', $('form').serialize(), function(data){
				if(data.ret==1){
					$('input, select, textarea').attr('disabled', true);
					$('.submit').val('预约成功');
					$('#reserve_success').show().animate({
						bottom:150,
						opacity:'0.7'
					}, 1500).animate({
						opacity:0
					}, 4000);
				}else{
					global_obj.win_alert(data.msg);
					$('.submit').attr('disabled', false).val('立即预约');
				};
			}, 'json');
		});
	}
}