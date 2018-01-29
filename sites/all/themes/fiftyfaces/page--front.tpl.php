<?php
global $language;
$lan = $language->language;	

if(isset($_POST['ser']))
{
$_POST['profilesearc'];
exit;
$query = db_query("SELECT * FROM `node` node inner join `field_data_field_title_text` ttext on node.nid = ttext.entity_id where ttext.field_title_text_value = '".$_POST['profilesearc']."' and node.type = 'profile' and node.language = '".$lan."'")->fetchObject();

echo $query->nid;
exit;
$urlpath = drupal_lookup_path('alias','node/'.$query->nid,$lan);
if($lan == 'ta')
{
$path_lan = 'ta/';
}else
{
$path_lan = '';
}

//header('location: http://handbags4women.com/50faces2/'.$path_lan.$urlpath.'');
}

if($lan == 'ta')
{
$searchtext = 'பதிவுகளை தேடல்';
}else
{
$searchtext = 'Search for profiles';
}
?>
<?php print render($page['header']); ?>
<div id="main_wrapper">

<!--<div id="mobile_logo">
<div class="res_menu">
<div id="slidemenu">
<ul>
<li><a href='<?php print($lan == 'ta'?'/ta':'/')?>' class="menu1" target="_parent"><?php print($lan == 'ta'?'முகப்பு':'Home')?></a></li>
<li><a href='<?php print($lan == 'ta'?'/ta/about-us':'/en/about-us')?>' class="menu2" target="_parent"><?php print($lan == 'ta'?'எம்மைப் பற்றி':'About us')?></a></li>
<li><a href='<?php print($lan == 'ta'?'/ta/profiles':'/en/profiles')?>' class="menu3" target="_parent"><?php print($lan == 'ta'?'பதிவுகள்':'Profiles')?></a></li>
<li><a href='<?php print($lan == 'ta'?'/ta/contact-us':'/en/contact-us')?>' class="menu4" target="_parent"><?php print($lan == 'ta'?'தொடர்புக்கு':'Contact Us')?></a></li>
<li><a href='<?php print('/')?>' class="menu5" target="_parent">English</a></li>
<li><a href='<?php print('/ta')?>' class="menu6" target="_parent"><img src="<?php print base_path().path_to_theme()?>/images/tamil_text.png" alt="" title=""></a></li>
</ul>
</div>
<div data-role="page" id="another_page3" data-theme="a">
<div data-role="header" data-position="fixed" data-tap-toggle="false" data-update-page-padding="false">
<a href="#" data-slidemenu="#slidemenu" data-slideopen="false" data-icon="smico" data-corners="false" data-iconpos="notext">Menu</a>
<a href="#" class="back_menu" style="display:none">&nbsp;</a>
</div>
</div>
</div>



<div class="logo">
<a href="#"><img src="<?php print base_path()?>sites/all/themes/fiftyfaces/images/mobile_logo.png" alt="" title="" />
</a>
</div>
</div>-->

<div id="mobile_logo">

<div class="logo">
<a href="<?php print base_path()?>"><img src="<?php print base_path().path_to_theme()?>/images/mobile_logo.png" alt="" title="" />
</a>
</div>
</div>
<!--main_wrapper-->

<div id="main_innr front">
<!--slider-->
<div id="showcase" class="showcase">
<!--<div class="language"></div>-->
<?php print render($page['banner']); ?>
<!-- <div class="frontsearch"><img src="<?php print base_path().path_to_theme()?>/images/search.png" /></div>  --->
<div class="frontsrch"> 
<form action="" method="post" class="searchbox">
<div class="ui-widget">
<input id="tags" value="" placeholder="<?=$searchtext?>" onclick="if (this.value == '<?=$searchtext?>') this.value=''" onblur="if (this.value=='') this.value='<?=$searchtext?>'" name="profilesearc" class="ui-autocomplete-input searchbox-input" autocomplete="off" style="display:none">
</div>
<input type="submit"  value="" id="search1" class="searchbox-submit">
<input type="submit" name="ser" value="" id="search"  style="display:none">
<span class="searchbox-icon"></span>
</form>
<script> 
$('.frontsearch').click(function() {
$('.search_div').show(1200);
$('.frontsearch').hide();
});
</script>
</div>



</div>
<!--/slider-->
<div class="right_section">
<div class="logo">
<a href="<?php print $front_page ?>">
<?php if ($logo): ?>
<img src="<?php print $logo ?>" alt="<?php print $site_name_and_slogan ?>" title="<?php print $site_name_and_slogan ?>" id="logo" />
<?php endif; ?>
<?php //print $site_html ?>
</a>
</div>
<div class="title_hd">
<!--<h1>A dedicated to the pioneers
in the Indian community.</h1>
<p>50Faces brings you stories of ordinary Singaporeans who have contributed to our community and nation building.</p>-->
<!--<img src="<?php print base_path().path_to_theme()?>/images/cont_hd.jpg" alt="" title="">
-->
<?php print render($page['sidebar_second']); ?>
</div>
<div class="nav">
 <?php print render($page['menu']); ?>
<!--<ul>
<li><a class="home active" href="#"></a></li>
<li><a class="about" href="aboutus.html"></a></li>
<li><a class="profile" href="http://www.innomaxmedia.org/clients/50faces/layout3_new2/index.html"></a></li>
<li><a class="contact" href="contactus.html"></a></li>
</ul>-->
</div>
</div>
</div><!--main_innr-->
<?php print render($page['resmenu']); ?>

<div id="mobile_wrapper">
<div class="title_hd">
<?php print render($page['sidebar_second']); ?>
</div>
<div class="nav">
<?php print render($page['menu']); ?>
</div>
</div><!--mobile_wrapper-->


<div id="footer">
<div class="ftr_lft"><a href="<?php print($lan == 'ta'?'/ta':'/')?>"><span>50</span> <?php print($lan == 'ta'?'முகங்கள்':'Faces')?></a> | <a href="<?php echo base_path()?><?php print($lan == 'ta'?'ta/ஆதரவாளர்கள்':'en/sponsors')?>/"><?php print($lan == 'ta'?'ஆதரவாளர்கள்':'sponsors')?></a> | <a href="<?php echo base_path()?><?php print($lan == 'ta'?'ta':'en')?>/terms-of-service"><?php print($lan == 'ta'?'சேவை நிபந்தணை':'Terms of Service')?></a></div>
<div class="ftr_rht social_area">
	<a href="https://www.facebook.com/singapore50faces" target="_parent"><img src="<?php echo base_path()?>sites/default/files/fb_icon.png" style="float:left"></a> <a href="http://www.youtube.com/channel/UC9adl9_4SSCJ_xPOEIdSowA" target="_parent"><img src="<?php echo base_path()?>sites/default/files/youtube_icon.png"></a>
</div>
</div>
<!--<div id="footer">
<img src="<?php print base_path().path_to_theme()?>/images/footer_image.jpg" alt="" title="">
<div class="social_area"></div>
</div>-->
<!--/footer-->
</div>