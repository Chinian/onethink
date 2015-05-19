var wedding_obj={
	infolist_init:function(){
			      var loadpage=$('input[name=loadpage]').val();
			      var id = $('input[name=cid]').val();
			      var haspic = '';
			      var pid = $('input[name=pid]').val();
			      if(id==''){
				      id=0;
			      }
			      if(pid==''){
				      pid='no';
			      }
			      $(".sf_right").click(function(){
				      $(".radio").toggleClass("selected");
				      var hasimg = $(".radio").attr('class');
				      if(hasimg!='radio'){
					      haspic = 1;
				      }else{
					      haspic = 0;
				      }
				      $('input[name=loadpage]').val(2);
				      $.post('?s=second/infolist/p/'+1+'/id/'+id,'haspic='+haspic, function(data){
					      if(data.ret==1){
						      var html='';
						      totalpages = data.totalpages;

						      if(totalpages==1||totalpages==''){
							      $('#load_more').hide();
						      }else{
							      $('#load_more').show();
						      }
						      var price_html='';
						      for(var i=0; i<data.msg.length; i++){
							      if(data.msg[i]['price']=='面议'){
								      price_html = '<div class="il_right">'+data.msg[i]['price']+'</div>';
							      }else{
								      price_html = '<div class="il_right">'+data.msg[i]['price']+'元</div>';
							      }

							      html+='<a href="?s=second/detail/id/'+data.msg[i]['id']+'">'
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
						      $('#sh_info_list').html('');
					      }
				      }, 'json');

			      });	
			      if(totalpages==1||totalpages==''){
				      $('#load_more').hide();
			      }else{
				      $('#load_more').show();
			      }
			      $('#load_more').click(function(){});
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
			       // 以下没有改动过和二手物品的相同
		       },


	detail_init:function(){
			    $("#shoucang").click(function(){
				    var infoid = $(this).attr('Infoid');
			    });
		    },
	wedding_init:function(){
			     $(".upload_box").each(function(){
				     $(".upload_box").height($(".upload_box").width());
			     });
			     var width = $('.upload_box').width();
			     $('#ImgUpload1').height(width);
			     $('#ImgUpload1').width(width);

			     $('#ImgUpload2').height(width);
			     $('#ImgUpload2').width(width);

			     $('#ImgUpload3').height(width);
			     $('#ImgUpload3').width(width);

			     $('#ImgUpload4').height(width);
			     $('#ImgUpload4').width(width);

			     $('#ImgUpload5').height(width);
			     $('#ImgUpload5').width(width);

			     $('#ImgUpload6').height(width);
			     $('#ImgUpload6').width(width);

			     $('#ImgUpload7').height(width);
			     $('#ImgUpload7').width(width);

			     $('#ImgUpload8').height(width);
			     $('#ImgUpload8').width(width);

			     var setWidth = $(window).width();
			     $('.upload_box .img img').css({'max-width':width,'max-height':width})

				     $("#upload_box1").click(function(){
					     $('#ImgUpload1').localResizeIMG({
						     width: setWidth*0.8,
						     quality: 0.8,
						     // before: function (that, blob) {},
						     success: function (result) 
					     {
						     $('#ImgDetailDiv1').attr('src', result.base64);

						     $('#ImgPath1').val(result.clearBase64);
						     // 跳出下一个上传
						     $('#upload_box1').next(".upload_box").show();
						     $('#upload_box1').removeClass('no_img')
					     }
					     });

				     });
			     $("#upload_box2").click(function(){	
				     $('#ImgUpload2').localResizeIMG({

					     width: setWidth*0.8,
					     quality: 0.8,
					     // before: function (that, blob) {},
					     success: function (result) 
				     {
					     $('#ImgDetailDiv2').attr('src', result.base64);
					     $('#ImgPath2').val(result.clearBase64);

					     // 跳出下一个上传
					     $('#upload_box2').next(".upload_box").show();
					     $('#upload_box2').removeClass('no_img')
				     }
				     });

			     });

			     $("#upload_box3").click(function(){		
				     $('#ImgUpload3').localResizeIMG({
					     width: setWidth*0.8,
					     quality: 0.8,
					     // before: function (that, blob) {},
					     success: function (result) 
				     {
					     $('#ImgDetailDiv3').attr('src', result.base64);
					     $('#ImgPath3').val(result.clearBase64);

					     // 跳出下一个上传
					     $('#upload_box3').next(".upload_box").show();
					     $('#upload_box3').removeClass('no_img')
				     }
				     });

			     });

			     $("#upload_box4").click(function(){		
				     $('#ImgUpload4').localResizeIMG({
					     width: setWidth*0.8,
					     quality: 0.8,
					     // before: function (that, blob) {},
					     success: function (result) 
				     {
					     $('#ImgDetailDiv4').attr('src', result.base64);
					     $('#ImgPath4').val(result.clearBase64);

					     // 跳出下一个上传
					     $('#upload_box4').next(".upload_box").show();
					     $('#upload_box4').removeClass('no_img')
				     }
				     });

			     });

			     $("#upload_box5").click(function(){		
				     $('#ImgUpload5').localResizeIMG({
					     width: setWidth*0.8,
					     quality: 0.8,
					     // before: function (that, blob) {},
					     success: function (result) 
				     {
					     $('#ImgDetailDiv5').attr('src', result.base64);
					     $('#ImgPath5').val(result.clearBase64);

					     // 跳出下一个上传
					     $('#upload_box5').next(".upload_box").show();
					     $('#upload_box5').removeClass('no_img')
				     }
				     });

			     });

			     $("#upload_box6").click(function(){
				     $('#ImgUpload6').localResizeIMG({
					     width: setWidth*0.8,
					     quality: 0.8,
					     // before: function (that, blob) {},
					     success: function (result) 
				     {
					     $('#ImgDetailDiv6').attr('src', result.base64);
					     $('#ImgPath6').val(result.clearBase64);

					     // 跳出下一个上传
					     $('#upload_box6').next(".upload_box").show();
					     $('#upload_box6').removeClass('no_img')
				     }
				     });

			     });




			     $('#publish_rent').click(function(){

				     $.post('',$('#secondhand_form').serialize(),function(data){

					     if(data.ret==1){
						     global_obj.win_alert(data.msg,function(){
							     window.location.href="?s=secondhand/index.html";
						     });
					     }else{
						     global_obj.win_alert('提交失败');
					     }

				     },'json')

			     });


		     },
	slider_init:function(){
			    $(".touchslider-item").width($(document).width());
			    if($('.touchslider-item').size()){
				    (function(window, $, PhotoSwipe){
					    $('.touchslider-viewport .list a[rel]').photoSwipe({});
				    }(window, window.jQuery, window.Code.PhotoSwipe));

				    $('.touchslider').touchSlider({
					    mouseTouch:true,
					    autoplay:true,
					    delay:2000
				    });
			    }
		    },
}

function imitatetype1(id) {
	// $(".radio").removeClass("selected");
	var aa = document.getElementById(id);
	var svalue=$(aa).val();
	var type = $(aa).siblings("table").find("#select_area").val();
	$(aa).find("option").each(function(){
		if($(this).val()==svalue){
			$(aa).siblings("table").find(".imitate").text($(this).attr('text'));
			wedding_obj.screening_init(type,$(this).val());
		}  
	});
	filter();
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

function imitate(id)
{
	var aa = document.getElementById(id);
	var svalue=$(aa).val();
	$(aa).find("option").each(function(){
		if($(this).val()==svalue){
			$(aa).siblings(".imitate").text($(this).html());
		}
	});
}


function filter()
{
	var data = $("form#filter_form").serialize();
	$.post('/test/onethink/wechat.php?s=/Wechat/Wedding/filter.html',
			data,
			function(data){
				
				/*
				 * var dataObj = eval("("+data+")"); alert(dataObj.val);
				 */

				var $infoList = $('#wedding_info_list');
				$infoList.children().remove();//清除之前的信息

				//alert(data);
				var dataObj = eval("("+data+")");

				for(var i=0;i<dataObj.length;i++)
				{
					var html=
"<a href=\"{:U('wedding/detail', array('id' => $info['id']))}\"><li type=\"手机\" class=\"show_info_r show_info_t\"><div>"+
"<h3>"+dataObj[i]['title']+"</h3>"+
"<div><span>["+dataObj[i].pic+"图]</span><span>"+dataObj[i].region+"</span><span>"+dataObj[i].views+"人查看</span><span>"+dataObj[i].inputtime+"</span> </div>"+
"</div></li></a>";
					$infoList.append(html);
				}
			});
}



// 表单验证
$('#publish_rent').click(function(){
	var flag=true;
	var errorMsg='<span class="onError">不能为空</span>';

	$('form: input').each(function(){
		var span = $(this).parent().children('span.onError').remove();// 清空之前的提示
		if($(this).attr('required')&&''==this.value)
	{
		$(this).parent().append(errorMsg);
		flag=false;
	}
	});
	$('form: select').each(function(){
		var span = $(this).parent().children('span.onError').remove();// 清空之前的提示
		if(!this.selectedIndex)
	{
		$(this).parent().append(errorMsg);
		flag=false;
	}
	})
	if(!flag)
	{
		return
	}
	var data=$('form').serialize();
	alert(data);
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
});

