$('#info_submit').click(function(){

	var data=$('#products_form').serialize();
	alert(data);
	/*
	$.post('/test/onethink/wechat.php?s=/Wechat/Wedding/editInfo.html',
			data,
			function(data){

				var dataObj = eval("("+data+")");
				alert(dataObj.val);
				if('success' == dataObj.val)
		location.href = '/test/onethink/wechat.php?s=/Wechat/Wedding/detail/id/'+dataObj.id+'.html';
				else
		location.href = '/test/onethink/wechat.php';
			});
			*/
});


$('#cate_submit').click(function(){


	var data=$('#products_form').serialize();
	//alert(data);
	
	$.post('/test/onethink/member.php?s=/Member/Wedding/catedit.html',
			data,
			function(data){
			location.href = '/test/onethink/member.php?s=/Member/wedding/catview.html';
				/*

				var dataObj = eval("("+data+")");
				alert(dataObj.val);
				if('success' == dataObj.val)
		location.href = '/test/onethink/wechat.php?s=/Wechat/Wedding/detail/id/'+dataObj.id+'.html';
				else
		*/
			});
			
});


