<?php
global $language;
$lan = $language->language;
if(isset($_POST['ser']))
{
	
	
 $_POST['profilesearc'];

$query = db_query("SELECT * FROM `node` where title = '".$_POST['profilesearc']."' and type = 'profile' and language = '".$lan."'")->fetchObject();
$urlpath = drupal_get_path_alias('node/'.$query->nid);
//header('location: http://localhost/50faces/'.$urlpath.'');
}
?>

  <?php print render($page['header']); ?>
<?php print render($page['resmenu']); ?>
<div id="main_wrapper">
<div id="mobile_logo">
<!--<div class="res_menu">
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
</div>-->


<!--/menu-end-->
<div class="logo">
<a href="<?php print base_path()?>" target="_parent"><img src="<?php print base_path()?>sites/all/themes/fiftyfaces/images/mobile_logo.png" alt="" title="" />
</a>
</div>
</div><!--main_wrapper-->


<div id="main_innr">

<div class="section_wrap">



<!--<div class="breadcrum">

<?php print $breadcrumb; ?></div>-->

<div class="pageTitle">
<?php $get_title = get_title();?>
<?php $newtitle=explode(" ",$get_title); ?>

<span> <?php print ($newtitle[0] == '0'?'User':$newtitle[0]); ?></span>
<?php
	for($i=1; $i<count($newtitle); $i++){
 print $newtitle[$i] . "&nbsp;";
	}
  ?>

<?php //print $title ?></div>


<div id="scroll_wrap">



<div id="scrollertext">



<div id="mcs_container">

<div class="customScrollBox">

<div class="container">

       <?php if ($tabs): ?><div id="tabs-wrapper" class="clearfix"><?php endif; ?>

           <?php if ($tabs): ?><?php print render($tabs); ?></div><?php endif; ?>

          <?php print render($tabs2); ?>

          <?php //print $messages; ?>

          <?php print render($page['help']); ?>

          <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>

 <section class="cntus nano-scrollbar">

 

  <?php print render($page['content']); ?>

  </section>

</div>

</div>

<div class="dragger_container">

<div class="dragger"></div>

</div>

</div>

</div>







</div>

<!--<script src="<?php //print base_path().path_to_theme()?>/js/jquery.mCustomScrollbar.concat.min.js"></script><script>
(function($){
$(document).ready(function(){
$("#scroll_wrap").mCustomScrollbar({
scrollButtons:{
enable:true
}
});
});
})(jQuery);
</script>-->

</div>









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

<?php print render($page['highlighted']); ?>



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

<div id="mobile_wrapper">
<div class="nav">
<?php print render($page['menu']); ?>
</div>
</div><!--mobile_wrapper-->

<div id="footer">

<div class="ftr_lft"><a href="<?php print($lan == 'ta'?'/ta':'/')?>"><span>50</span> <?php print($lan == 'ta'?'முகங்கள்':'Faces')?></a> | <a href="<?php echo base_path()?><?php print($lan == 'ta'?'ta/ஆதரவாளர்கள்':'en/sponsors')?>/"><?php print($lan == 'ta'?'ஆதரவாளர்கள்':'sponsors')?></a> | <a href="<?php echo base_path().$lan?>/terms-of-service"><?php print($lan == 'ta'?'சேவை அடிப்படையில்':'Terms of Service')?></a></div>

<div class="ftr_rht social_area">
	<a href="https://www.facebook.com/singapore50faces" target="_parent"><img src="<?php echo base_path()?>sites/default/files/fb_icon.png" style="float:left"></a> <a href="http://www.youtube.com/channel/UC9adl9_4SSCJ_xPOEIdSowA" target="_parent"><img src="<?php echo base_path()?>sites/default/files/youtube_icon.png"></a>
</div>

</div>


<!--/footer-->



</div>