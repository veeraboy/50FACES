<?php
global $language;
$lan = $language->language;	
if(isset($_POST['ser']))
{
	

 $_POST['profilesearc'];

$query = db_query("SELECT * FROM `node` where title = '".$_POST['profilesearc']."' and type = 'profile' and language = '".$lan."' and status = 1")->fetchObject();
$urlpath = drupal_get_path_alias('node/'.$query->nid);
//echo $urlpath;

header('location: '.base_path().$urlpath.'');
}
?>
<?php
$useragent=$_SERVER['HTTP_USER_AGENT'];
if(preg_match('/android|avantgo|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|e\-|e\/|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(di|rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|xda(\-|2|g)|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
{
$device =  'phone';
}
else
{
$device = 'desktop';
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
<!--    <div id="iframediv" class="iframediv" style="position:absolute;  width:100%; z-index:9000">
      <iframe src="<?php echo base_path();?>/slidemenu.php" frameborder="0"  seamless="seamless" scrolling="no"  allowtransparency="true"></iframe>
    </div>-->
    
    <!--/menu-end-->
    <div class="logo"> <a href="#"><img src="<?php print base_path()?>sites/all/themes/fiftyfaces/images/mobile_logo.png" alt="" title="" /> </a> </div>
  </div>
  <div id="main_innr">
    <div id="showcase" class="showcase" style="width:844px;">
      <div class="profilescontainer">
        <?php //print render($page['content']); ?>
        <div id="container" style="position:relative" >
          <div class="desktop-web">
            <div id="my-carousel-3" class="carousel module">
              <ul>
                <?php
global $language;
$lan = $language->language;	
$query = db_query("SELECT * FROM `node` node LEFT JOIN weight_weights w ON node.nid = w.entity_id  where node.type = 'profile' and node.status = 1 and node.language = '".$lan."' order by w.weight  asc");
$query_count = db_query("SELECT * FROM `node` where type = 'profile' and language = '".$lan."' and  node.status = 1")->rowCount();
?>
                <?php
$urlpath = '';
$urlpath5 = '';
$o = 1;
foreach ($query as $pname){
$personname = node_load($pname->nid);
//echo '<pre>';print_r($personname);
$image = file_create_url($personname->field_profile_image['und'][0]['uri']);
$title_text = $personname->field_title_text['und'][0]['value'];
$urlpath = ($lan == 'ta'?'ta/':'').drupal_get_path_alias('node/'.$pname->nid);
 if ($o%4 == 1)
    {  
         echo "<li>";
		 
		 
    }
?>
<div><a href="<?=base_path().$urlpath?>" target="_parent"><img width="418" height="268" src="<?=$image?>"></a><span><a href="<?=base_path().$urlpath?>" target="_parent">
                 <?=$title_text?>
                  </a></span></div>
                  
                  
                  
                  
                <?php 
				if ($o%4 == 0)
    {
        echo "</li>";
    }
				$o++;
				}
				//if ($o%4 != 1) echo "</li>"; 
 //echo fmod($query_count,4); 

 $remaining = 4 - fmod($query_count,4);
//echo fmod($query_count,4);				
//if($query_count%2 == 1)
if(fmod($query_count,4) !=0)
{
$query5 = db_query("SELECT * FROM `node` node LEFT JOIN weight_weights w ON node.nid = w.entity_id  where node.type = 'profile' and node.status = 1 and node.language = '".$lan."' order by w.weight   asc LIMIT ".$remaining."");

foreach($query5 as $object)
{
$personname5 = node_load($object->nid);
$image5 = file_create_url($personname5->field_profile_image['und'][0]['uri']);
$title_text5 = $personname5->field_title_text['und'][0]['value'];
$urlpath5 = ($lan == 'ta'?'ta/':'').drupal_get_path_alias('node/'.$object->nid);	
	
?>
              <div><a href="<?=base_path().$urlpath?>" target="_parent"><img width="418" height="268" src="<?=$image5?>"></a><span><a href="<?=base_path().$urlpath5?>" target="_parent">
                  <?=$title_text5?>
                  </a></span></div>
                  
                  
                  
                <?php }
				
				
				}
				
				if ($o%4 != 1) echo "</li>"; 
				?>
                
                
              </ul>
            </div>
          </div>
          <div class="single-cycle">
            <?php 
 $block = block_load('views', 'owlothercarsoul-block');      
$output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block))));        
print $output; 
 ?>
          </div>
          <div class="double-cycle">
            <?php 
 $block = block_load('views', 'owlothercarsoul-block');      
$output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block))));        
print $output; 
 ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!--/slider-->
  
  <div class="right_section rprfls" style="position:relative; overflow:visible" >
    <div class="logo">
    
<?php /*?>     <a href="<?php print $front_page ?>">
      <?php if ($logo): ?>
      <img src="<?php print $logo ?>" alt="<?php print $site_name_and_slogan ?>" title="<?php print $site_name_and_slogan ?>" id="logo" />
      <?php endif; ?>
      </a> <?php */?>
      
 <a href="<?php print base_path()?>" target="_parent"><img src="<?php print base_path()?>sites/all/themes/fiftyfaces/images/mobile_logo.png" alt="" title="" />
</a>     
      </div>
    
    <!-- <div class="title_hd">

<?php print render($page['sidebar_second']); ?>

<img src="<?php print base_path().path_to_theme()?>/images/cont_hd.jpg" alt="" title="">

</div> -->
    <?php if($device != 'phone'){?>
    <!--<div class="search_div">
      <form action="" method="post">
        <div class="ui-widget">
          <input id="tags" value="<?php print($lan == 'ta'?'பதிவுகளை தேடல்':'Search for profiles')?>" onclick="if (this.defaultValue==this.value) this.value=''" onblur="if (this.value=='') this.value=this.defaultValue" name="profilesearc" class="ui-autocomplete-input" autocomplete="off">
        </div>
        <input type="submit" name="ser" value="submit" id="search">
      </form>
    </div>-->
   <div class="ifm"> 
    <iframe class="frm" id="frm" src="<?php echo base_path();?>livesearch.php" width="445"  frameborder="0" allowtransparency="0" scrolling="no">
    
    
    </iframe>
    
 <!--   <object data="http://handbags4women.com/50faces/livesearch.php" height="100%"></object>-->
    
 </div>

    <?php }?>
    
<!--    <div class="nav" <?php if($device != 'phone'){?> style="position:absolute;top:344px"<?php }?>> <?php print render($page['menu']); ?> </div>-->
  </div>
</div>
<!--main_innr-->

<div id="mobile_wrapper">
  <div class="search_div">
    <form action="" method="post">
      <div class="ui-widget">
        <input id="tags" value="<?php print($lan == 'ta'?'பதிவுகளை தேடல்':'Search for profiles')?>" onclick="if (this.defaultValue==this.value) this.value=''" onblur="if (this.value=='') this.value=this.defaultValue" name="profilesearc" class="ui-autocomplete-input" autocomplete="off">
      </div>
      <input type="submit" name="ser" value="submit" id="search">
    </form>
  </div>
  <div class="title_hd"> <?php print render($page['sidebar_second']); ?> </div>
  <div class="nav"> <?php print render($page['menu']); ?> </div>
</div>
<!--mobile_wrapper-->

<div id="footer">
  <div class="ftr_lft"><a href="<?php print($lan == 'ta'?'/ta':'/')?>"><span>50</span> <?php print($lan == 'ta'?'முகங்கள்':'Faces')?></a> | <a href="<?php echo base_path()?><?php print($lan == 'ta'?'ta/ஆதரவாளர்கள்':'en/sponsors')?>/"><?php print($lan == 'ta'?'ஆதரவாளர்கள்':'sponsors')?></a> | <a href="<?php echo base_path()?><?php print($lan == 'ta'?'ta':'en')?>/terms-of-service"><?php print($lan == 'ta'?'சேவை அடிப்படையில்':'Terms of Service')?></a></div>
  <div class="ftr_rht social_area">
  	<a href="https://www.facebook.com/singapore50faces" target="_parent"><img src="<?php echo base_path()?>sites/default/files/fb_icon.png" style="float:left"></a> <a href="http://www.youtube.com/channel/UC9adl9_4SSCJ_xPOEIdSowA" target="_parent"><img src="<?php echo base_path()?>sites/default/files/youtube_icon.png"></a>
  </div>
</div>

<!--/footer-->
<?php
$useragent=$_SERVER['HTTP_USER_AGENT'];
if(preg_match('/android|avantgo|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|e\-|e\/|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(di|rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|xda(\-|2|g)|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
{
$device =  'phone';
}
else
{
$device = 'desktop';
}
if($device == 'desktop'){
?>

<script type="text/javascript" src="<?php echo base_path().path_to_theme()?>/profile.jquery.min.js"></script> 
<script type="text/javascript" src="<?php echo base_path()?>jquery.carousel.js"></script> 

<script type="text/javascript">
		$(document).ready(function() {
			$('body').removeClass('no-js');
		
  $(".menu li a").wrapInner("<span>" + "</span>");

			
		   
		    $('#my-carousel-3').carousel({
				itemsPerPage: 1,
				itemsPerTransition: 1,
				easing: 'linear',
				noOfRows: 1,

			});
			
		    $('#my-carousel-32').carousel({
				itemsPerPage: 1,
				itemsPerTransition: 1,
				easing: 'linear',
				noOfRows: 1
			});
			
			
				$('#my-carousel-33').carousel({
				itemsPerPage: 2,
				itemsPerTransition: 2,
				easing: 'linear',
				noOfRows: 1
			});			
			
			
			
			
		});
	</script>
<?php } ?>
</div>
