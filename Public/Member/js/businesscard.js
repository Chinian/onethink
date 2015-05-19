/*
Powered by ly200.com		http://www.ly200.com
广州联雅网络科技有限公司		020-83226791
*/

var businesscard_obj={
	businesscard_init:function(){
		frame_obj.file_upload($('#ReplyImgUpload'), $('#businesscard_form input[name=ReplyImgPath]'), $('#ReplyImgDetail'));
		$('#ReplyImgDetail').html(frame_obj.upload_img_detail($('#businesscard_form input[name=ReplyImgPath]').val()));
		
		frame_obj.file_upload($('#ColumnFileUpload'), $('#businesscard_form input[name=ImgPath]'), $('#ImgPathDetail'));		
		$('#ImgPathDetail').html(frame_obj.upload_img_detail($('#businesscard_form input[name=ImgPath]').val()));
		frame_obj.file_upload($('#ColumnCodeUploadUpload'), $('#businesscard_form input[name=CodeImgPath]'), $('#CodeUploadImgPathDetail'));
		$('#CodeUploadImgPathDetail').html(frame_obj.upload_img_detail($('#businesscard_form input[name=CodeImgPath]').val()));
		frame_obj.file_upload($('#MusicUpload'), $('#businesscard_form input[name=MusicPath]'), $('#MusicUpload'), 'businesscard', false, 1, function(path){
			$("#businesscard_form input[name=BackgroundMusic]").val(path);
		},'*.mp3');
		
		var callback=function(imgpath){
			if($('#BgDetail div').size()>=5){
				alert('您上传的图片数量已经超过5张，不能再上传！');
				return;
			}
			$('#BgDetail').append('<div>'+frame_obj.upload_img_detail(imgpath)+'<span>删除</span><input type="hidden" name="BgPath[]" value="'+imgpath+'" /></div>');
			$('#BgDetail div span').off('click').on('click', function(){$(this).parent().remove();});
			
		};
		$('#BgDetail div span').live('click', function(){$(this).parent().remove();});
		frame_obj.file_upload($('#BgUpload'), '', '', 'businesscard', true, 5, callback);
		frame_obj.map_init();
		
		$('#businesscard-list-type .item').removeClass('item_on').each(function(){
			$(this).click(function(){
				$('#businesscard-list-type .item').removeClass('item_on');
				$(this).addClass('item_on');
				$('#businesscard_form input[name=SkinId]').val($(this).attr('SkinId'));
				if($(this).attr('SkinId')==4){
					$('#bg').show();
					$('#face').hide();
				}else{
					$('#bg').hide();
					$('#face').show();
				}
			});
		}).filter('[SkinId='+$('#businesscard_form input[name=SkinId]').val()+']').addClass('item_on');
		
		$('#businesscard_form').submit(function(){return false;});
		$('#businesscard_form input:submit').click(function(){
			if(system_obj.check_form($('*[notnull]'))){return false};
			
			$(this).attr('disabled', true);
			$.post('?', $('#businesscard_form').serialize(), function(data){
				if(data.status==1){
					window.location='?s=/Member/Businesscard/';
				}else{
					alert(data.msg);
				}
				//$('#businesscard_form input:submit').attr('disabled', false);
			}, 'json');
		});
	}
}
