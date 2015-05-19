CKEDITOR.editorConfig=function(config){
	config.filebrowserUploadUrl='/'+window.location.pathname.split('/')[1]+'/?file_type=attach&do_action=action.file_upload_ckeditor';
	config.filebrowserImageUploadUrl='/'+window.location.pathname.split('/')[1]+'/?file_type=img&do_action=action.file_upload_ckeditor';
	config.filebrowserFlashUploadUrl='/'+window.location.pathname.split('/')[1]+'/?file_type=flash&do_action=action.file_upload_ckeditor';
	config.protectedSource.push( /<div class="main">[\s\S]*<\/div>/g);
	config.resize_enabled=false;
	config.toolbarCanCollapse=false;
	config.language='zh-cn';
	config.skin='v2';
	config.colorButton_enableMore=false;
	config.enterMode=CKEDITOR.ENTER_BR;
	config.font_names='黑体;宋体;新宋体;Arial;Times New Roman;Times;serif';
	config.fontSize_sizes='10px;12px;14px;16px;18px;20px;22px;24px;28px';
	config.undoStackSize=200;
	config.height=350;
	config.width='90%';
	config.extraPlugins += (config.extraPlugins ?',lineheight' :'lineheight');
	
	config.toolbar='ly200';
	config.toolbar_ly200=[
		/*['Source','-'],
		['Cut','Copy','Paste','PasteText','PasteFromWord','RemoveFormat'],
		['Undo','Redo','-','Find','Replace'],
		['TextColor','BGColor'],
		['Image','Flash','Table','SpecialChar'],
		'/',
		['Bold','Italic','Underline','Strike'],
		['Outdent','Indent'],
		['JustifyLeft','JustifyCenter','JustifyRight'],
		['Link','Unlink'],
		['Font','FontSize']
		['Source','-'],
		['PasteText','PasteFromWord','RemoveFormat'],
		['Image','Table'],
		['Bold','Italic','Underline'],
		'/',
		['JustifyLeft','JustifyCenter','JustifyRight'],
		['Link','Unlink'],
		['TextColor','FontSize']*/
		['Source','Cut','Copy','Paste','PasteText','PasteFromWord','RemoveFormat', 'Image', 'Bold','Underline','Link','Unlink','Table', 'JustifyLeft','JustifyCenter','JustifyRight', 'TextColor', 'BGColor', 'FontSize','lineheight']
    ];
}
