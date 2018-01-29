<?php

?>

  <?php print render($page['header']); ?>





<div id="container_wrap">



<div id="header">

<div class="logodiv"><a href="#"><img src="<?php print base_path().path_to_theme()?>/images/logo-264x78.jpg"></a></div>

<div class="button_div">

<a href="http://handbags4women.com/50faces2/ta/" class="home_menu">&nbsp;</a>

<a href="http://handbags4women.com/50faces2/ta/profiles" class="profile_menu">&nbsp;</a>

<!--content glider-->

<div id="p-select" class="glidecontenttoggler">

<a href="#" class="prev"><img src="<?php print base_path().path_to_theme()?>/images/previous.png" alt="" /></a>
<a href="#" class="next"><img src="<?php print base_path().path_to_theme()?>/images/next.png" alt=""/></a>

</div>

<!--content glider-->

</div>



</div>


<div id="showcase" class="showcase profilenode">

  <?php print render($page['content']); ?>

</div>

<script src="<?php print base_path().path_to_theme()?>/js/jquery.mCustomScrollbar.concat.min.js"></script>




<script>
<!--//--><![CDATA[// ><!--



(function($){

$(document).ready(function(){

$("#showcase").mCustomScrollbar({

scrollButtons:{

enable:true

}

});





});

})(jQuery);



//--><!]]>

</script>

<!--/slider-->



<div id="footerr">

<aside class="ftr_left"><img src="<?php print base_path().path_to_theme()?>/images/footer_image.jpg" alt="" title=""></aside>

<aside class="ftr_right">

<a href="#"><img src="<?php print base_path().path_to_theme()?>/images/youtube.png" alt="" title=""></a>

<a href="#"><img src="<?php print base_path().path_to_theme()?>/images/facebook.png" alt="" title=""></a>

</aside>

<!--<img src="images/footer_image.jpg" alt="" title="">-->

</div>

<!--/footer-->







</div>