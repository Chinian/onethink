$(document).ready(function(){global_obj.page_init()});

var global_obj={
	page_init:function(){
		
		$('a').each(function(){
			var url=$(this).attr('href');
			var rel=$(this).attr('rel');
			if(url && url.indexOf('tel:')==-1 && url.indexOf('javascript:')==-1 && url.indexOf('#')==-1 && !rel){
				//修改开始
				$(this).attr('href', apiurl(url));
				//修改完成
//				if(url.charAt(url.length-1)=='/'){
//					$(this).attr('href', url);
//				}else if(url.indexOf('?')==-1){
//					$(this).attr('href', url);
//				}else{
//					$(this).attr('href', url);
//				}
			}
		});
	},
	div_mask:function(remove){
		if(remove==1){
			$('#div_mask').remove();
		}else{
			$('body').prepend('<div id="div_mask"></div>');
			$('#div_mask').css({
				width:'100%',
				height:$(document).height(),
				overflow:'hidden',
				position:'fixed',
				top:0,
				left:0,
				background:'#000',
				opacity:0.6,
				'z-index':10000
			});
		}
	},
	share_init:function(share){
		if(typeof(share.img_url)=='undefined' || !share.img_url){
			if(window.PG.cover){
				share.img_url=window.PG.cover;
			}else{
				share.img_url=system_obj.domain('static')+'/api/images/global/share/'+window.PG.page[1]+'.jpg';
			}
		}
		(typeof(share.link)=='undefined' || !share.link) && (share.link=window.location.href);
		(typeof(share.title)=='undefined' || !share.title) && (share.title=document.title);
		(typeof(share.desc)=='undefined' || !share.desc) && (share.desc=share.title);
		(typeof(share.trans)=='undefined' || !share.trans) && (share.trans=1);
			
		var share_res=function(share_to){
			share.share_to=share_to;
			/*share.do_action='action.share';
			$.post('./', share);*/
		}
		var appmessage_share={
			'img_url':share.img_url,
			'link':share.link,
			'title':share.title,
			'desc':share.desc
		}
		var timeline_share={
			'img_url':share.img_url,
			'img_width':100,
			'img_height':100,
			'link':share.link,
			'title':share.title,
			'desc':share.desc
		}
		
		try{
			if(typeof window.WeixinJSBridge=='undefined'){
				document.addEventListener('WeixinJSBridgeReady', function onBridgeReady(){
					WeixinJSBridge.on('menu:share:appmessage', function(){WeixinJSBridge.invoke('sendAppMessage', appmessage_share, function(){share_res(0)})});
					WeixinJSBridge.on('menu:share:timeline', function(){WeixinJSBridge.invoke('shareTimeline', timeline_share, function(){share_res(1)})});
				});
			}else{
				WeixinJSBridge.on('menu:share:appmessage', function(){WeixinJSBridge.invoke('sendAppMessage', appmessage_share, function(){share_res(0)})});
				WeixinJSBridge.on('menu:share:timeline', function(){WeixinJSBridge.invoke('shareTimeline', timeline_share, function(){share_res(1)})});
			}
		}catch(e){};
	},
	
	share_layer:function(remove){
		if(remove==1){
			$('#global_share_layer').remove();
			return;
		}
		$('body').prepend('<div id="global_share_layer"><div></div></div>');
		$('#global_share_layer').css({
			width:'100%',
			height:'100%',
			overflow:'hidden',
			position:'fixed',
			top:0,
			left:0,
			background:'#000',
			opacity:0.8,
			'z-index':100000
		}).children('div').css({
			width:'100%',
			height:'100%',
			background:'url('+domain.file+'/public/wechat/api/card/images/layer.png) left top no-repeat',
			'background-size':'100% auto',
			position:'relative',
			left:0,
			top:0
		});
		$('#global_share_layer').click(function(){
			$('#global_share_layer').remove();
		});
	},
	attention_layer:function(remove,keyword){//提示用户关注我们
		if(keyword.indexOf('|')>-1){
			var re = new RegExp("|","g");
			var arr = keyword.match(re);
			for(var i=0;i<arr.length;i++){
				keyword=keyword.replace('|','&nbsp;');
			}
		}
		if(remove==1){
			$('#global_share_layer').remove();
			return;
		}
		$('body').prepend('<div id="global_share_layer"><div></div></div>');
		$('#global_share_layer').css({
			width:'100%',
			height:'100%',
			overflow:'hidden',
			position:'fixed',
			top:0,
			left:0,
			background:'#000',
			opacity:0.8,
			'z-index':100000
		}).children('div').css({
			width:'100%',
			height:'100%',
			background:'url('+domain.file+'/public/wechat/api/card/images/attention.png) left top no-repeat',
			'background-size':'100% auto',
			position:'relative',
			left:0,
			color:'#fff',
			top:0
		});
		$('#global_share_layer div').html('<div style="position:absolute; bottom:20%; width:100%; text-align:center; height:20px; font-size:18px!important; line-height:20px;color:#fff!important">发送关键词<span style="color:#f00;font-size:18px!important">'+keyword+'</span>可以参加本活动</div>');
		$('#global_share_layer').click(function(){
			$('#global_share_layer').remove();
		});
	},
	win_alert:function(tips, handle){
		$('body').prepend('<div id="global_win_alert"><div>'+tips+'</div><h1>好</h1></div>');
		$('#global_win_alert').css({
			position:'fixed',
			left:$(window).width()/2-125,
			top:'30%',
			background:'#fff',
			border:'1px solid #ccc',
			opacity:0.95,
			width:250,
			'z-index':1000000,
			'border-radius':'8px'
		}).children('div').css({
			'text-align':'center',
			padding:'30px 10px',
			'font-size':16
		}).siblings('h1').css({
			height:40,
			'line-height':'40px',
			'text-align':'center',
			'border-top':'1px solid #ddd',
			'font-weight':'bold',
			'font-size':20
		});
		$('#global_win_alert h1').click(function(){
			$('#global_win_alert').remove();
		});
		if($.isFunction(handle)){
			$('#global_win_alert h1').click(handle);
		}
	},
	
	check_form:function(obj){
		var flag=false;
		obj.each(function(){
			if($(this).val()==''){
				$(this).css('border', '1px solid red');
				flag==false && ($(this).focus());
				flag=true;
			}else{
				$(this).removeAttr('style');
			}
		});
		return flag;
	}
}
//生成url函数,和php中实现的效果不一样
function apiurl($moudle){
	if($moudle == ''){
		return '';
	}
	if($moudle.indexOf('http://') != -1 || $moudle.indexOf('wechat.php?') != -1){
		return $moudle;
	}else if($moudle.indexOf('recruit') != -1 ||$moudle.indexOf('medical') != -1 ||$moudle.indexOf('vote') != -1 ||$moudle.indexOf('vip') != -1 ||$moudle.indexOf('mall') != -1 || $moudle.indexOf('website') != -1 || $moudle.indexOf('reserve') != -1 || $moudle.indexOf('user') != -1  ){
		return  domain.www+'/wechat.php?s='+$moudle;
	}else if($moudle.indexOf('tuan') != -1){
		return  domain.www+'/wechat.php?s=Web/'+'tuanproducts';
	}else if($moudle.indexOf('coupon') != -1){
		return  domain.www+'/wechat.php?s=User/'+'coupon';
	}else if($moudle != ''){
		return  domain.www+'/wechat.php?s=Web/'+$moudle;
	}
	
}