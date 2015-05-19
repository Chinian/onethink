var yellow_obj={
	yellow_init:function(){
		
	},
	screening_init:function(type,value){
		switch(type)
		{
			case '区域':
				type = 'area';
				break;
			case '类型':
				type = 'cid';
				break;
		}
		//以下没有改动过和二手物品的相同
		$.post('?s=secondhand/screening',type+'='+value,function(data){
			if(data.ret==1){
				var html='';
				var price_html='';
				for(var i=0; i<data.msg.length; i++){
					$('#load_more').hide();
					if(data.msg[i]['price']=='面议'){
						price_html = '<div class="il_right">'+data.msg[i]['price']+'</div>';
					}else{
						price_html = '<div class="il_right">'+data.msg[i]['price']+'元</div>';
					}
					html+='<a href="?s=secondhand/detail/id/'+data.msg[i]['id']+'">'
					html+='<li region="'+data.msg[i]['area']+'" type="'+data.msg[i]['classify']+'" class="show_info_r show_info_t">'
					html+='<div class="il_left">'
					html+='<h3>'+data.msg[i]['title']+'</h3>'
					html+='<div><span>['+data.msg[i]['count']+'图]</span><span>'+data.msg[i]['area']+'</span><span>'+data.msg[i]['identify']+'</span><span>'+data.msg[i]['createtime']+'</span> </div>'
					html+='</div>'
					html+=price_html
					html+='<div class="clear"></div>'
					html+='</li>'
					html+='</a>'
				}
				$('#sh_info_list').html(html);
			}else{
				$('#load_more').hide();
				$('#sh_info_list').html('');
			}
			
		},'json');
		
	},

}

function imitatetype1(id) {
	  $(".radio").removeClass("selected");
	  var aa = document.getElementById(id);
	  var svalue=$(aa).val();
	  var type = $(aa).siblings("table").find(".select_area").val();
	  $(aa).find("option").each(function(){
		  if($(this).val()==svalue){
			  $(aa).siblings("table").find(".imitate").text($(this).attr('text'));
			  yellow_obj.screening_init(type,$(this).val());
		  }  
	  });
	}
function imitateareatype(id) {
	  var aa = document.getElementById(id);
	  var svalue=$(aa).val();
	  $(aa).find("option").each(function(){
		  if($(this).val()==svalue){
			  $(aa).siblings(".imitate").text($(this).html());
		  }  
	  });
	}
function imitatetype(id) {
	  var aa = document.getElementById(id);
	  var svalue=$(aa).val();
	  $(aa).find("option").each(function(){
		  if($(this).val()==svalue){
			  $(aa).siblings("table").find(".imitate").text($(this).attr('text'));
		  }  
	  });
	}