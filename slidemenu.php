<?php
define('DRUPAL_ROOT', getcwd());

require_once DRUPAL_ROOT . '/includes/bootstrap.inc';
drupal_bootstrap(DRUPAL_BOOTSTRAP_FULL);
//menu_execute_active_handler();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="<?php echo base_path().path_to_theme()?>/mycss.css">
<link rel="stylesheet" href="<?php echo base_path().path_to_theme()?>/css/jqm.slidemenu.css">
<link rel="stylesheet" href="<?php echo base_path().path_to_theme()?>/css/themes/jqmfb.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<script src="http://code.jquery.com/mobile/latest/jquery.mobile.min.js"></script>
<script src="<?php echo base_path().path_to_theme()?>/js/jqm.slidemenu.js"></script>
<style>
.frameclass {
width: 100% !important;
z-index: 20;
position: absolute;
height: 237px;
}
</style>
<script>

$(document).ready(function() {
$('.ui-btn-inner').click(function () {
$(window.frameElement).toggleClass('frameclass');
});
});
</script>
<base target="_top" /> 
</head>

<body>
<div class="res_menu">
<div id="slidemenu" style="top:90px !important;">
<ul>
<li><a href='<?php print($lan == 'ta'?'/50faces/ta':'/50faces/')?>' class="menu1" target="_parent"><?php print($lan == 'ta'?'முகப்பு':'Home')?></a></li>
<li><a href='<?php print($lan == 'ta'?'/50faces/ta/about-us':'/50faces/en/about-us')?>' class="menu2" target="_parent"><?php print($lan == 'ta'?'எம்மைப் பற்றி':'About us')?></a></li>
<li><a href='<?php print($lan == 'ta'?'/50faces/ta/profiles':'/50faces/en/profiles')?>' class="menu3" target="_parent"><?php print($lan == 'ta'?'பதிவுகள்':'Profiles')?></a></li>
<li><a href='<?php print($lan == 'ta'?'/50faces/ta/contact-us':'/50faces/en/contact-us')?>' class="menu4" target="_parent"><?php print($lan == 'ta'?'தொடர்புக்கு':'Contact Us')?></a></li>
<li><a href='<?php print('/50faces/')?>' class="menu5" target="_parent">English</a></li>
<li><a href='<?php print('/50faces/ta')?>' class="menu6" target="_parent"><img src="<?php print base_path().path_to_theme()?>/images/tamil_text.png" alt="" title=""></a></li>
</ul>
</div>
<div data-role="page" id="another_page3" data-theme="a">
<div data-role="header" data-position="fixed" data-tap-toggle="false" data-update-page-padding="false">
<a href="#" data-slidemenu="#slidemenu" data-slideopen="false" data-icon="smico" data-corners="false" data-iconpos="notext">Menu</a>
<a href="#" class="back_menu" style="display:none">&nbsp;</a>
</div>
</div>
</div>
</body>
</html>