/*
Powered by ly200.com		http://www.ly200.com
广州联雅网络科技有限公司		020-83226791
*/

var app_car_obj={
	config_init:function(){
		$('.u_file_multi .img div span').on('click', function(){$(this).parent().remove();});
		var pic_count=3;
		var callback=function(imgpath){
			if($('#banner div').size()>=3){
				alert('您上传的图片数量已经超过3张，不能再上传！');
				return;
			}
			$('.u_file_multi .img').append('<div>'+frame_obj.upload_img_detail(imgpath)+'<span>删除</span><input type="hidden" name="PicPath[]" value="'+imgpath+'" /></div>');
			$('.u_file_multi .img div span').off('click').on('click', function(){$(this).parent().remove();});
		};
		
		frame_obj.file_upload($('#BannerUpload'), '', '', 'app_car_config', true, 3, callback);
		frame_obj.file_upload($('#LogoUpload'),$("#config_form input[name=Logo]"),$("#LogoDetail"));
		frame_obj.file_upload($('#CategoryUpload'),$("#config_form input[name=CategoryPic]"),$("#categoryDetail"));
		frame_obj.file_upload($('#OwnerUpload'),$("#config_form input[name=OwnerPic]"),$("#ownerDetail"));
		
		$("#LogoDetail").html(frame_obj.upload_img_detail($("#config_form input[name=Logo]").val()));
		$("#categoryDetail").html(frame_obj.upload_img_detail($("#config_form input[name=CategoryPic]").val()));
		$("#ownerDetail").html(frame_obj.upload_img_detail($("#config_form input[name=OwnerPic]").val()));
		
		$('#config_form').submit(function(){
			if(system_obj.check_form($('*[notnull]'))){return false};
		});
	},
	
	products_list_init:function(){
		$('a[href=#search]').click(function(){
			$('form.r_con_search_form').slideDown();
			return false;
		});
		$('.products-del').click(function(){
			$delbtn=$(this);
			if(!confirm('删除后不可恢复，继续吗？')){
				return false;
			}

			$.post($delbtn.data('url'),
				{
					'id': $delbtn.data('id')
				},
				function(data){
					if(1==data.status){
						$delbtn.parent().parent().remove();
					}else{
						alert(data.msg);
					}
				},
				'json'
			);
		});
	},
	
	products_init:function(){
		$('#PicDetail div span').on('click', function(){$(this).parent().remove();});
		var pic_count=parseInt($('#pic_count').html());
		
		var callback=function(imgpath){
			if($('#PicDetail div').size()>=pic_count){
				alert('您上传的图片数量已经超过5张，不能再上传！');
				return;
			}
			$('#PicDetail').append('<div>'+frame_obj.upload_img_detail(imgpath)+'<span>删除</span><input type="hidden" name="PicPath[]" value="'+imgpath+'" /></div>');
			$('#PicDetail div span').off('click').on('click', function(){$(this).parent().remove();});
		};
		
		frame_obj.file_upload($('#PicUpload'), '', '', 'web_products', true, pic_count, callback);
		$('#products_form input.btn_ok').click(function(){
			var $form = $('#products_form');

			CKEDITOR.instances.Description.updateElement();
			if(system_obj.check_form($('*[notnull]'))){return false};
			
			if(! $(this).attr('disabled')) {
				$(this).attr('disabled', 'disabled');
				var data = $form.serialize();
				$.post($form.attr('url'),
					data,
					function(data){
						if(1 == data.status){
						location.href = $('a.btn_cancel').attr('href');
						}
					});
			}
			

			return true;
		});

	},
	
	products_category_init:function(){
		if($('#CategoryFileUpload').size()){
			frame_obj.file_upload($('#CategoryFileUpload'), $('#app_car_category_form input[name=PicPath]'), $('#CategoryImgDetail'), 'web_category');
			$('#CategoryImgDetail').html(frame_obj.upload_img_detail($('#app_car_category_form input[name=PicPath]').val()));
			$('#CategoryImgDetail img').attr("width",200);
		}

		$('.category .m_lefter dl').dragsort({
			dragSelector:'dd',
			dragEnd:function(){
				var data=$('.category .m_lefter dl dd').map(function(){
					return $(this).attr('CateId');
				}).get();
				$.post('./member.php?s=/Car/categoryOrder.html', {'sort_order':data.join('|')});
			},
			dragSelectorExclude:'ul, a',
			placeHolderTemplate:'<dd class="placeHolder"></dd>',
			scrollSpeed:5
		});
		
		$('#category .category .m_lefter ul').dragsort({
			dragSelector:'li',
			dragEnd:function(){
				var data=$(this).parent().children('li').map(function(){
					return $(this).attr('CateId');
				}).get();
				$.post('?', {do_action:'app_car.category_category_order', sort_order:data.join('|')});
			},
			dragSelectorExclude:'a',
			placeHolderTemplate:'<li class="placeHolder"></li>',
			scrollSpeed:5
		});
		
		$('#category .category .m_lefter ul li').hover(function(){
			$(this).children('.opt').show();
		}, function(){
			$(this).children('.opt').hide();
		});
		
		$('#app_car_category_form').submit(function(){return false;});
		$('#app_car_category_form input:submit').click(function(){
			if(system_obj.check_form($('*[notnull]'))){return false};
			$(this).attr('disabled', true);
			$.post('?', $('#app_car_category_form').serialize(),
				function(data){
					if(data.status==1){
						window.location='./member.php?s=/Car/category.html';
					}else{
						alert(data.msg);
						$('#app_car_category_form input:submit').attr('disabled', false);
					}
				},
				'json'
			);
		});
		$('.category-del').click(function(){
			$delbtn=$(this);
			if(!confirm('删除后不可恢复，继续吗？')){
				return false;
			}

			$.post($delbtn.data('url'),
				{
					'id': $delbtn.data('id')
				},
				function(data){
					if(1==data.status){
						$delbtn.parent().parent().remove();
					}else{
						alert(data.msg);
					}
				},
				'json'
			);

		});
	},
	
	reserve_edit_init:function(){
		frame_obj.file_upload($('#ReplyImgUpload'), $('form input[name=ReplyImgPath]'), $('#ReplyImgDetail'));
		$('#ReplyImgDetail').html(frame_obj.upload_img_detail($('form input[name=ReplyImgPath]').val()));
		frame_obj.file_upload($('#HeaderImgUpload'), $('form input[name=HeaderImgPath]'), $('#HeaderImgDetail'));
		$('#HeaderImgDetail').html(frame_obj.upload_img_detail($('form input[name=HeaderImgPath]').val()));
		frame_obj.map_init();
		frame_obj.reserve_form_init();
		
		$('#reserve_form').submit(function(){return false;});
		$('#reserve_form input:submit').click(function(){
			if(system_obj.check_form($('*[notnull]'))){return false};
			$(this).attr('disabled', true);
			$.post($('#reserve_form').data('url'), $('#reserve_form').serialize(), function(data){
				if(data.status==1){
					window.location='./member.php?s=/Car/reserve.html';
				}else{
					alert(data.msg);
					$('#reserve_form input:submit').attr('disabled', false);
				}
			}, 'json');
		})
	},
	
	news_init:function(){
		frame_obj.file_upload($('#ImgUpload'), $('#news_form input[name=ImgPath]'), $('#ImgDetail'), 'app_car_news');
		$('#ImgDetail').html(frame_obj.upload_img_detail($('#news_form input[name=ImgPath]').val()));
		
		$('#news_form input.btn_ok').click(function(){
			var form =$('#news_form');
			CKEDITOR.instances.Description.updateElement();
			if(system_obj.check_form($('*[notnull]'))){return false};

			if(! $(this).attr('disabled')) {
				$(this).attr('disabled', 'disabled');
				var data = form.serialize();
				$.post(form.attr('url'),
					data,
					function(data){
						if(1 == data.status){
						location.href = './member.php?s=/Car/news.html';
						}
					});
			}
			return true;
		});
	},

	news_list_init:function(){
		$('.news-del').click(function(){
			$delbtn=$(this);
			if(!confirm('删除后不可恢复，继续吗？')){
				return false;
			}

			$.post($delbtn.data('url'),
				{
					'id': $delbtn.data('id')
				},
				function(data){
					if(1==data.status){
						$delbtn.parent().parent().remove();
					}else{
						alert(data.msg);
					}
				},
				'json'
			);
		});
	},
	plugin_init:function(){
		$('#plugin img[plugin]').click(function(){
			var img_obj=$(this);
			img_obj.attr('Status', img_obj.attr('Status')==0?1:0);
			$.get('?', 'do_action=app_car.plugin&plugin='+img_obj.attr('plugin')+'&Status='+img_obj.attr('Status'), function(data){
				if(data.ret==1){
					var img=img_obj.attr('Status')==1?'on':'off';
					img_obj.attr('src', './Public/Member/images/'+img+'.gif');
				}else{
					alert(data.msg);
				}
			}, 'json');
		});
	},
	
	reserve_list_init:function(){
		$('#search_form input:button').click(function(){
			window.location='./?'+$('#search_form').serialize()+'&do_action=app_car.reserve_export';
		});
		$('#search_form input[name=Time]').daterangepicker();

		$('.reserve-del').click(function(){
			$delbtn=$(this);
			if(!confirm('删除后不可恢复，继续吗？')){
				return false;
			}

			$.post($delbtn.data('url'),
				{
					'id': $delbtn.data('id')
				},
				function(data){
					if(1==data.status){
						$delbtn.parent().parent().remove();
					}else{
						alert(data.msg);
					}
				},
				'json'
			);
		});


	},
	about_init:function(){
		$('#about_form input.btn_ok').click(function(){
			var form =$('#about_form');
			var btn=$(this);
			CKEDITOR.instances.Contents.updateElement();
			if(system_obj.check_form($('*[notnull]'))){return false};

			if(! btn.attr('disabled')) {
				btn.attr('disabled', 'disabled');
				var data = form.serialize();
				$.post(form.attr('url'),
					data,
					function(data){
						alert(data.msg);
						btn.removeAttr('disabled');
					});
			}
			return true;
		});
	},
	sales_init:function(){
		frame_obj.file_upload($('#ImgUpload'), $('#sales_form input[name=ImgPath]'), $('#ImgDetail'), 'app_car_sales');
		$('#ImgDetail').html(frame_obj.upload_img_detail($('#sales_form input[name=ImgPath]').val()));
		
		$('#sales_form input.btn_ok').click(function(){
			var form =$('#sales_form');
			var btn=$(this);
			CKEDITOR.instances.BriefDescription.updateElement();
			if(system_obj.check_form($('*[notnull]'))){return false};

			if(! btn.attr('disabled')) {
				btn.attr('disabled', 'disabled');
				var data = form.serialize();
				$.post(form.attr('url'),
					data,
					function(data){
						if(1==data.status){
							location.href = btn.next().attr('href');
						}else {
							alert('添加/修改失败');
							btn.removeAttr('disabled');
						}
					});
			}
			return true;
		});
	},
	sales_list_init:function(){
		$('.sales-del').click(function(){
			$delbtn=$(this);
			if(!confirm('删除后不可恢复，继续吗？')){
				return false;
			}

			$.post($delbtn.data('url'),
				{
					'id': $delbtn.data('id')
				},
				function(data){
					if(1==data.status){
						$delbtn.parent().parent().remove();
					}else{
						alert(data.msg);
					}
				},
				'json'
			);
		});
	}
}
