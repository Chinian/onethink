CKEDITOR.editorConfig=function(config){
	config.language='zh-cn';
	config.font_names='宋体/SimSun;仿宋/FangSong;楷体/KaiTi;黑体/SimHei;巨硬雅黑/Microsoft YaHei;Arial;Consolas;Times New Roman;Times;serif';
	config.fontSize_sizes='12px;14px;16px;18px;20px;22px;24px;26px;28px;36px;48px;';
	config.undoStackSize=200;
	config.height=350;
	config.width='90%';
	config.toolbar='jucheng';
	config.toolbar_jucheng=
	[
		[ 'Source', '-', 'Cut', 'Copy', 'Paste', 'PasteText',
		'PasteFromWord', '-', 'Print', 'SpellChecker',
		'Scayt' ],
		[ 'Undo', 'Redo', '-', 'Find', 'Replace', '-',
		'SelectAll', 'RemoveFormat' ],
		[ 'Bold', 'Italic', 'Underline', 'Strike', '-',
		'Subscript', 'Superscript' ],
		[ 'NumberedList', 'BulletedList', '-', 'Outdent',
		'Indent', 'Blockquote' ],
		[ 'JustifyLeft', 'JustifyCenter', 'JustifyRight',
		'JustifyBlock' ],
		[ 'Link', 'Unlink' ],
		[ 'Image', 'Flash', 'Table', 'HorizontalRule',
		'Smiley', 'SpecialChar', 'PageBreak' ],
		[ 'Styles', 'Format', 'Font', 'FontSize' ],
		[ 'TextColor', 'BGColor' ],
		[ 'Maximize', 'ShowBlocks', '-', 'About' ]

	];
}
