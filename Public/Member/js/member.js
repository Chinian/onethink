$('.check_button').click(function(){
	var data = "id="+this.id;
	$.post('/test/onethink/index.php?s=/Member/Wedding/check.html',
			data,
			function(data){
				location.href = '';
			});
})

function checkinfo(a)
{
	id = $(a).data('id');
	isChecked = a.checked;
	
	if(isChecked)
	{
		var data = "id="+id+"&type=check";
		$.post('/test/onethink/index.php?s=/Member/Wedding/check.html',
				data,
				function(data){

				});
	}
	else
	{
		var data = "id="+id+"&type=uncheck";
		$.post('/test/onethink/index.php?s=/Member/Wedding/check.html',
				data,
				function(data){;
				});
	}
}