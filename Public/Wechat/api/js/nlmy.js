function imitatetype1(id)
{
	$(".radio").removeClass("selected");
	var aa = document.getElementById(id);
	var svalue=$(aa).val();
	var type = $(aa).siblings("table").find(".select_area").val();
	$(aa).find("option").each(function(){
		if($(this).val()==svalue){
			$(aa).siblings("table").find(".imitate").text($(this).attr('text'));
			nlmy_obj.screening_init(type,$(this).val());
		}  
	});
}
function imitateareatype(id)
{
	var aa = document.getElementById(id);
	var svalue=$(aa).val();
	$(aa).find("option").each(function(){
		if($(this).val()==svalue){
			$(aa).siblings(".imitate").text($(this).html());
		}  
	});
}
function imitatetype(id)
{
	var aa = document.getElementById(id);
	var svalue=$(aa).val();
	$(aa).find("option").each(function(){
		if($(this).val()==svalue){
			$(aa).siblings("table").find(".imitate").text($(this).attr('text'));
		}  
	});
}

function imitate(id)
{
	var aa = document.getElementById(id);
	var svalue=$(aa).val();
	$(aa).find('option').each(function(){
		if($(this).val()==svalue){
			$(aa).siblings(".imitate").text($(this).html());
		}
	});
}




$('#publish_rent').click(function(){
	var data = $('form').serialize();
	$.post('/test/nlmy/wechat.php/info/editInfo.html',
	data,
	function(data){

		var dataObj = eval("("+data+")");
		alert(dataObj.val);
		if('success' == dataObj.val)
			location.href = '/test/nlmy/wechat.php/info/detail/id/'+dataObj.id+'.html';
		else
			location.href = '/test/nlmy/wechat.php';
			
	});
});

