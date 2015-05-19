/*
Powered by ly200.com		http://www.ly200.com
广州联雅网络科技有限公司		020-83226791
*/

var app_medical_obj={
	reserve_edit_init:function(){
		frame_obj.file_upload($('#HeaderImgUpload'), $('form input[name=HeaderImgPath]'), $('#HeaderImgDetail'));
		$('#HeaderImgDetail').html(frame_obj.upload_img_detail($('form input[name=HeaderImgPath]').val()));
		frame_obj.map_init();
		frame_obj.reserve_form_init();
		
		$('#reserve_form').submit(function(){return false;});
		$('#reserve_form input:submit').click(function(){
			if(system_obj.check_form($('*[notnull]'))){return false};
			$(this).attr('disabled', true);
			$.post('?', $('#reserve_form').serialize(), function(data){
				if(data.status==1){
					window.location='?m=app_medical&a=reserve';
				}else{
					alert(data.msg);
					$('#reserve_form input:submit').attr('disabled', false);
				}
			}, 'json');
		})
	},
	reserve_list_init:function(){
		$('#search_form input:button').click(function(){
			window.location='./?'+$('#search_form').serialize()+'&do_action=app_medical.reserve_export';
		});
		$('#search_form input[name=Time]').daterangepicker();	
	}
}