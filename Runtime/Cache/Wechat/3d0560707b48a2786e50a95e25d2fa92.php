<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" /><meta content="telephone=no" name="format-detection" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<base href="<?php echo U();?>" />
<title></title>
<link href='/test/onethink/Public/static/css/global.css' rel='stylesheet' type='text/css'  />
<link href='/test/onethink/Public/static/api/css/global.css' rel='stylesheet' type='text/css'  />

</head>

<body>
<link href='/test/onethink/Public/Hotel/css/app_hotels.css' rel='stylesheet' type='text/css'  />
<div id="app_hotels">

	<div class="box">
		<h3>详情（<?php echo ($data["detail"]["name"]); ?>）</h3>
		<div class="contents">
			<?php echo ($data["detail"]["des"]); ?>
			<?php echo ($data["detail"]["detail"]); ?>
		</div>
    </div>
</div>
</body>
</html>