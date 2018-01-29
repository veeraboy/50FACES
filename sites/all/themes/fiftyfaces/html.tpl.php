<?php
//$personname=array();
global $language;
$lan = $language->language;	
$query = db_query("SELECT * FROM `node` where type = 'profile' and language = '".$lan."' and status = 1");

//$query = db_query("SELECT * FROM `node` node inner join `field_data_field_title_text` ttext on node.nid = ttext.entity_id where node.type = 'profile' and node.language = '".$lan."'");
//$urlpath = drupal_get_path_alias('node/'.$query->nid);
foreach ($query as $pname){
$personname[]=$pname->title;
//$personname2[]=$pname->field_title_text_value;
}
//print_r($personname);
$implaode_array =  implode(',',$personname);
//$implaode_array2 =  implode(',',$personname2);
$useragent2=$_SERVER['HTTP_USER_AGENT'];
if(preg_match('/android|avantgo|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent2)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|e\-|e\/|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(di|rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|xda(\-|2|g)|yas\-|your|zeto|zte\-/i',substr($useragent2,0,4)))
{
$pdevice =  'phone';
}
else
{
$pdevice = 'desktop';
}
if(strstr($_SERVER['HTTP_USER_AGENT'],'iPhone') || strstr($_SERVER['HTTP_USER_AGENT'],'iPod') || strstr($_SERVER['HTTP_USER_AGENT'],'iPad'))
 {
$pdevice = 'ipad';
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head profile="<?php print $grddl_profile; ?>">
<?php print $head; ?>
<title><?php print $head_title; ?></title>
<meta name = "format-detection" content = "telephone=no" />
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<?php print $styles; ?>
<?php print $scripts; ?>
<script src="/misc/jquery.js" type="text/javascript"></script>

<script>
$(function(){
// jQuery required
 $(window).resize(function(){ // catch resize event
if($(window).width() > $(window).height()){
 $('body').removeClass('portrait').addClass('landscape');
  //$('.landscape .mask ul').css('width','3300px');
}
else {
 $('body').removeClass('landscape').addClass('portrait');
 //$('.portrait .mask ul').css('width','auto');
}

});


$( "#datepicker" ).datepicker({ minDate: 0});
$("a").attr("target","_parent");


$("img").each(function() {
   // var src = $(this).attr('src');
   // src = src.replace("/50faces", 'http://www.50faces.sg');
    //alert(src);
	//$(this).attr('src', src);
});
});




</script>

<?php if($pdevice ==  'desktop'){?>
<script type="text/javascript">
$(function(){
$('.showcase').addClass('nano-scrollbar');
$('.cntus').addClass('nano-scrollbar');

});
</script>

<?php }?>
<?php if($pdevice ==  'phone'){?>
<script type="text/javascript">
$(function(){

if($(window).width() > $(window).height()){

    if($('body').hasClass('portrait')){
        $('body').removeClass('portrait').addClass('landscape');
    } else if(!$('body').hasClass('portrait')) {
        $('body').addClass('landscape');
		 $('.showcase').removeClass('nano-scrollbar');
			$('.cntus').removeClass('nano-scrollbar');
	$('.section_wrap').css('height','100%');
	$('#scroll_wrap').css('height','100%');
	
    }
}
else {
    if($('body').hasClass('landscape')){
        $('body').removeClass('landscape').addClass('portrait');
    } else if(!$('body').hasClass('landscape')) {
        $('body').addClass('portrait');
    }
}
});
</script>
<?php }?>
<link rel="stylesheet" href="<?php echo base_path().path_to_theme()?>/jquery-ui.css">
<link rel="stylesheet" href="<?php echo base_path().path_to_theme()?>/responsive.css">
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<?php if($pdevice ==  'phone'){?>
<script type="text/javascript">
$(document).on("pagecreate",function(event){
  $(window).on("orientationchange",function(event){
   // alert("Orientation changed to: " + event.orientation);
	if(event.orientation == 'landscape')
	{
	 $('body').addClass('landscape');
	$('.showcase').removeClass('nano-scrollbar');
	$('.cntus').removeClass('nano-scrollbar');
	$('.section_wrap').css('height','100%');
	$('#scroll_wrap').css('height','100%');
	$('body').removeClass('portrait');
	$('.landscape #views-slideshow-bxslider-1 li').css('width','391px');
	}
		if(event.orientation == 'portrait')
	{
	$('body').addClass('portrait');
	$('body').removeClass('landscape');
	$('.showcase').addClass('nano-scrollbar');
	$('.cntus').addClass('nano-scrollbar');
	
	$('.portrait #bxslider_views_slideshow_main_slider_1x1_-block li').css('width','354px');
	$('.portrait #views-slideshow-bxslider-1 li').css('width','354px');
		
	
	
	}
  });                     
});
</script>
<?php }?>

<?php if($pdevice ==  'ipad'){?>
<script type="text/javascript">
$(document).on("pagecreate",function(event){
  $(window).on("orientationchange",function(event){
   // alert("Orientation changed to: " + event.orientation);
	if(event.orientation == 'landscape')
	{
	 $('body').addClass('landscape');
	 $('body').removeClass('portrait');
	$('#views-slideshow-bxslider-1 li').css('width','651px');
	$('#views-slideshow-bxslider-1 .bx-viewport').css('height','422px');
	if($(window).width() == '480')
	{
	$('.front .bx-viewport img').css('max-width','292px');
	$('.front .bx-viewport img').css('height','191px');
	$('.front .bx-wrapper .bx-viewport').css('max-height','191px');
	}
	if($(window).width() == '667')
	{
	$('.front .bx-viewport .bx-wrapper img').css('max-width','100%');
    $('.front .bx-wrapper li').css('width','408px');
	
	}
	
	}
	if(event.orientation == 'portrait')
	{
	$('body').addClass('portrait');
	$('body').removeClass('landscape');
	$('#views-slideshow-bxslider-1 li').css('width','753px')
	
	if($(window).width() == '320')
	{
	$('.front .bx-viewport img').css('max-width','305px');
	$('.front .bx-wrapper .bx-viewport').css('max-height','195px');
	}
	if($(window).width() == '375')
	{
	$('.front #showcase').css('width','361px');	
	$('.front .bx-viewport .bx-wrapper img').css('max-width','395px');
    $('.front .bx-wrapper li').css('width','362px');
	
	}
	
	
	}
  });                     
});
</script>
<?php }?>

<script>
//$.noConflict();
	$(function() {
	var availableTags = <? echo json_encode($personname); ?>;
	
	
	$( "#tags" ).autocomplete({
	source: availableTags,
	position: { my: "left top", at: "left bottom", collision: "flip" },
 select: function(event, ui) {
        //assign value back to the form element
        if(ui.item){
			var t = ui.item.value;
            $(event.target).val(t);
			//alert(ui.item.value);
			
		newurl = t.toLowerCase().replace(/ /g, '-');
		//window.location.href = 'http://handbags4women.com/50faces2/<?=($lan == 'ta'?'ta':'en')?>/' + newurl ;	
			
			//alert($(event.target).val(ui.item.value));
        }
        //submit the form
        //$(event.target.form).submit();
		window.location.href = '<?php echo base_path();?><?=($lan == 'ta'?'ta':'en')?>/' + newurl ;
    }
	});
	});
</script>
   
<script>

jQuery(document).ready(function() {
    var height = $(window).height();
    $('#frm').css('height', height * 0.9 | 0);
});

//var jq142 = jQuery.noConflict(true);
//var $j = jQuery.noConflict();
jQuery(document).ready(function($) {
	
	$( "#tags" ).keydown(function() {

	$('#search').hide(800);
	});
	
	$( "#ui-id-1" ).click(function() {
	$('#search1').hide();
	$('.searchbox-icon').hide();	
	$('#search').show();
	});	


	$( ".searchbox-icon" ).click(function() {
	$('#tags').show(500);

	});	
		
	});
</script>

<script>
 $(document).ready(function(){
 $( "#preid" ).click(function(){
    $( "#views_slideshow_cycle_div_person_profile-block_0_0" ).hide();
		$('.nano-slider').css('transform','translate(0px, 0px)');
	$('#views_slideshow_cycle_teaser_section_person_profile-block_1').css('height','auto')

 });
  $( "#nextid" ).click(function(){
    $( "#views_slideshow_cycle_div_person_profile-block_0_0" ).hide();
	$('.nano-slider').css('transform','translate(0px, 0px)');
	$('#views_slideshow_cycle_teaser_section_person_profile-block_1').css('height','auto')
 });
 });
 </script>
   
   <!-- script to show the search on front page to slide in right-->
 <script type="text/javascript">
 
 $(document).ready(function(){
 var bod = $('body');
  var submitIcon = $('.searchbox-icon');
  var inputBox = $('.searchbox-input');
  var searchBox = $('.searchbox');
  var isOpen = false;
  submitIcon.click(function(){
   if(isOpen == false){
    searchBox.addClass('searchbox-open');
    inputBox.focus();
    isOpen = true;
   } else {
    searchBox.removeClass('searchbox-open');
    inputBox.focusout();
    isOpen = false;
   }
  }); 
  
 });

 </script> 


<script type="text/javascript">
$(document).ready(function(){
  $(".menu li a").wrapInner("<span>" + "</span>");
  
  
});

</script>


<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,500,200' rel='stylesheet' type='text/css'>
<?php
if($lan == 'ta')
{?>
<style>body{font-family:latha !important;} .content p,h1,h2,h3,h4,h5,h6 p{font-family:latha !important;}</style>
<?php }?>
<base target="_top" />
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-56753694-1', 'auto');
  ga('send', 'pageview');

</script>


<!--<link rel="stylesheet" href="http://code.jquery.com/mobile/latest/jquery.mobile.structure.min.css" />-->
<link rel="stylesheet" href="<?php echo base_path().path_to_theme()?>/mycss.css">
<link rel="stylesheet" href="<?php echo base_path().path_to_theme()?>/css/jqm.slidemenu.css">
<link rel="stylesheet" href="<?php echo base_path().path_to_theme()?>/css/themes/jqmfb.min.css">
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
-->
<?php if($pdevice == 'phone'){?>
<script src="http://code.jquery.com/mobile/latest/jquery.mobile.min.js"></script>
<script src="<?php echo base_path().path_to_theme()?>/js/jqm.slidemenu.js"></script>
<?php }?>
<?php if($pdevice == 'ipad'){?>
<script src="http://code.jquery.com/mobile/latest/jquery.mobile.min.js"></script>
<script src="<?php echo base_path().path_to_theme()?>/js/jqm.slidemenu.js"></script>
<?php }?>

<script>
$(document).ready(function() {

	$("#user-login").prop("target", '_parent');
});
</script>
<base target="_parent" /> 

<?php if(arg(1))
{
$n = node_load(arg(1));
//echo '<pre>'; print_r($n);

if($n->type == 'profile'){
//echo '<pre>'; print_r($n);
if(is_array($n->field_content_width))
{
$con_width = $n->field_content_width['und'][0]['value'];
}else
{
$con_width = '90';
}
?>
<style>

</style>
<?php }
}

?>

<script>
$(document).ready(function () {
        var slider = $('.views-slideshow-bxslider').bxSlider({
            mode: 'horizontal', //mode: 'fade',            
            speed: 500,
            auto: true,
            infiniteLoop: true,
            hideControlOnEnd: true,
            useCSS: false
        });

        $(".bx-next").click(function () {
            console.log('bla');            
            slider.stopAuto();
            slider.startAuto();
        });

		
});

</script>

</head>

<body class="<?php print $classes; ?>" <?php print $attributes;?> >
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>