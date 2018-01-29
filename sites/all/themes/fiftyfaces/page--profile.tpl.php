<?php

global $language;
$lan = $language->language;
?>
<style>

.profilenode .views_slideshow_controls_text {
    margin-top: 0;
    position: fixed;
    right: 28px;
    text-align: left;
    top: 38px;
    width: 200px;
    z-index: 200;

}

</style>
  <?php print render($page['header']); ?>


<?php print render($page['resmenu']); ?>


<div id="container_wrap">



<div id="header" style="position:relative; ">

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
</div>


<!--main_wrapper-->

<div class="logodiv"><a href="<?=base_path()?><?=($language->language == 'ta'?'ta':'')?>"><img src="<?php print base_path().path_to_theme()?>/images/logo-264x78.jpg"></a></div>

<div class="button_div">

<a href="<?php print base_path()?><?=($language->language == 'ta'?'ta':'')?>" class="home_menu tooltip"><?=($language->language == 'ta'?'முகப்பு':'Home')?></a>

<a href="<?=base_path()?><?=$language->language?>/profiles" class="profile_menu tooltip"><?=($language->language == 'ta'?'பதிவுகள்':'Profile')?></a>



</div>


<!--content glider-->

<div id="p-select" class="glidecontenttoggler">
<?php
//$k = node_load(arg(1));

//$query = db_query("SELECT * FROM `node` where nid = ".arg(1)." and type = 'profile' and language = '".$lan."'")->fetchObject();

//$n =  $query->nid + 1;
//$p =  $query->nid - 1;
//if($p < 1)
//{
//$p = 1;
//}

//$next =  drupal_lookup_path('alias','node/103', $lan);
//$prev = drupal_lookup_path('alias', 'node/'.$p, $lan);
 
$node_data = node_load(arg(1));
  $query = db_select('node', 'n');
  $query->innerJoin('weight_weights','w','n.nid = w.entity_id');
 // ->join('weight_weights','w','n.nid = w.entity_id');
  
  $query->fields('n', array('nid'))
  	
	->fields('w', array('weight'))
    ->condition('n.type', 'profile')
	->condition('n.language', $lan)
	->condition('n.status', 1)
    ->orderBy('w.weight'); 
  $result = $query->execute();
  $nids = array();
  while ($record = $result->fetchAssoc()) {
    $nids[] .= $record['nid'];
} 
$current_node_id = arg(1);
$current_node_key =  array_search($current_node_id, $nids);
$previous = $nids[$current_node_key - 1];
$next = $nids[$current_node_key + 1];
 $urlpath = drupal_get_path_alias('node/'.$n);
?>
<?php if($previous == ''){?>
<a  class="prev"><img src="<?php print base_path().path_to_theme()?>/images/previous.png" alt="" /></a>
<?php }else{?>
<a href="<?='http://www.50faces.sg'.($language->language == 'ta'?'/ta':'').'/'.drupal_get_path_alias('node/'.$previous)?>" class="prev"><img src="<?php print base_path().path_to_theme()?>/images/previous.png" alt="" /></a>
<?php }?>
<?php if($next == ''){?>
<a class="next" style="opacity:.4"><img src="<?php print base_path().path_to_theme()?>/images/next.png" alt=""/></a>
<?php }else{?>

<a href="<?='http://www.50faces.sg'.($language->language == 'ta'?'/ta':'').'/'.drupal_get_path_alias('node/'.$next)?>" class="next"><img src="<?php print base_path().path_to_theme()?>/images/next.png" alt=""/></a>
<?php }?>



</div>

<!--content glider-->
</div>




      <?php if ($tabs): ?><div id="tabs-wrapper" class="clearfix"><?php endif; ?>

           <?php if ($tabs): ?><?php print render($tabs); ?></div><?php endif; ?>


<div>

 <?php  
 
 
 
 print render($page['profile_page']); ?>

<!--<script src="<?php print base_path().path_to_theme()?>/js/jquery.mCustomScrollbar.concat.min.js"></script><script>
(function($){

$(document).ready(function(){

$("#showcase").mCustomScrollbar({

scrollButtons:{

enable:true
}
});
});
})(jQuery);
</script>
-->


</div>


<!--/slider-->

<div id="mobile_wrapper">
<div class="title_hd">
<?php print render($page['sidebar_second']); ?>
</div>
<div class="nav">
<?php print render($page['menu']); ?>
</div>
</div><!--mobile_wrapper-->



<div id="footerr">

<div class="ftr_lft"><a href="<?php print($lan == 'ta'?'/ta':'/50faces/')?>"><span>50</span> <?php print($lan == 'ta'?'முகங்கள்':'Faces')?></a> | <a href="<?php echo base_path()?><?php print($lan == 'ta'?'ta/ஆதரவாளர்கள்':'en/sponsors')?>/"><?php print($lan == 'ta'?'ஆதரவாளர்கள்':'sponsors')?></a> | <a href="<?php echo base_path()?><?php print($lan == 'ta'?'ta':'en')?>/terms-of-service"><?php print($lan == 'ta'?'சேவை அடிப்படையில்':'Terms of Service')?></a></div>
 
<aside class="ftr_right">

<a href="https://www.youtube.com/channel/UC9adl9_4SSCJ_xPOEIdSowA"><img src="<?php print base_path().path_to_theme()?>/images/youtube.png" alt="" title=""></a>

<a href="https://www.facebook.com/singapore50faces"><img src="<?php print base_path().path_to_theme()?>/images/facebook.png" alt="" title=""></a>

</aside>

<!--<img src="images/footer_image.jpg" alt="" title="">-->

</div>

<!--/footer-->







</div>