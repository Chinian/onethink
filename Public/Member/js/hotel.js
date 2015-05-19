$(document).ready(function(){
	$('#file_upload').omFileUpload({
		swf : './Public/static/plugin/operamasks-ui/om-fileupload.swf',
		action:'/test/thinkphp/index.php/User/Index/avatar.html',
		autoUpload:true,
		onComplete:function(ID,fileObj,response,data,event){
			alert('文件'+fileObj.name+'上传完毕');
			var dataObj = eval('(' + response + ')');
			$('#avatarimg').attr('src','/test/thinkphp/Public/avatar/tmp/'+dataObj.savename);
			$('#filename').attr('value',dataObj.savename);
			$('#ext').attr('value',dataObj.ext);
		}
	});
});




$('#info_submit').click(function(){

	CKEDITOR.instances.Description.updateElement();
	var data=$('#info_form').serialize();

	$.post('./member.php?s=/Member/Hotel/index.html',
			data,
			function(data){
				location.href = './member.php?s=/Member/Hotel/index.html'; 



			});



});

$('#reservedetail_submit').click(function(){

	var data=$('#reservedetail_form').serialize();

	$.post('./member.php?s=/Member/Hotel/reservedetail.html',
			data,
			function(data){
		location.href = './member.php?s=/Member/Hotel/reserve.html';
/*
				var dataObj = eval("("+data+")");
				alert(dataObj.val);
				if('success' == dataObj.val)
		location.href = '/test/onethink/wechat.php?s=/Wechat/Wedding/detail/id/'+dataObj.id+'.html';
				else
		location.href = '/test/onethink/wechat.php'; */
			});
});
