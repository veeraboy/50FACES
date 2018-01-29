<?php 
define('DRUPAL_ROOT', getcwd());

require_once DRUPAL_ROOT . '/includes/bootstrap.inc';
drupal_bootstrap(DRUPAL_BOOTSTRAP_FULL);
global $language;
 $lan = 'en';	
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

$name = $_GET['search'];

$query = db_query("SELECT * FROM `node` where type = 'profile' and language = '".$lan."' and  title LIKE '".$_GET['search']."%'");


foreach ($query as $pname){
        ?>
<!--            <div class="show" align="left">
                <img src="https://fbcdn-sphotos-e-a.akamaihd.net/hphotos-ak-prn1/27301_312848892150607_553904419_n.jpg" style="width:50px; height:50px; float:left; margin-right:6px;" /><span class="name"><?php echo $pname->title; ?></span>&nbsp;<br/><br/>
            </div>-->
        <?php
    }
	?>
    
    <?php
$useragent=$_SERVER['HTTP_USER_AGENT'];
if(preg_match('/android|ipad|avantgo|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|e\-|e\/|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(di|rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|xda(\-|2|g)|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
{
$device =  'phone';
}
else
{
$device = 'desktop';
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Untitled Document</title>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,500,200' rel='stylesheet' type='text/css'>
<base target="_top" />    
	<link rel="stylesheet" href="<?php echo base_path().path_to_theme()?>/jquery-ui.css">
    <script>jQuery.noConflict();</script>
 <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<?php if($device ==  'phone'){?>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<?php }?>
<script>
$(document).on("pagecreate",function(event){
  $(window).on("orientationchange",function(event){
    //alert("Orientation changed to: " + event.orientation);

if(event.orientation == 'landscape')
{
//var f = parent.document.body.clientWidth;
//if(f == '1024')
//{
	
$(".ui-widget").addClass('ui-widget2');
$(".search_div").addClass('search_div2');
$(".menu li.leaf").css('width','167px');
$(".menu li.leaf a").css('height','77px');
}
	//}

  });                     
});
</script>

<script>
//$.noConflict();
	$(function() {
	var availableTags = <? echo json_encode($personname); ?>;
	
	
	$( "#tags" ).autocomplete({
	source: availableTags,
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
		window.top.location.href = '<?php echo base_path();?><?=($lan == 'ta'?'ta':'en')?>/' + newurl ;
    }
	});
	});
</script>

<script>

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
 
<script>
$(document).ready(function() {

$("a").attr("target","_parent");


var f = parent.document.body.clientWidth;
if(f == '1024')
{
	
$(".ui-widget").addClass('ui-widget2');
$(".search_div").addClass('search_div2');
$(".menu li.leaf").css('width','167px');
$(".menu li.leaf a").css('height','77px');
}


$("#search").click(function(e) {
  e.preventDefault();
});
});


</script> 


 <style>
 body
 {
 outline:none; 
 }
 .ui-widget2 input {
width: 80% !important;
height: 70px !important;
background: #000 !important;
color: #ccc !important;
font-size: 20px !important;
border: none !important;
font-weight: normal !important;
padding-left: 13px !important;
float: left !important;
font-family: "Open Sans" ;
text-transform: uppercase !important;
border-radius:0px;
}
 .ui-btn.ui-input-btn.ui-corner-all.ui-shadow
 {
 text-indent:-9999px;
 }
 
 .ui-widget input, .ui-widget select, .ui-widget textarea, .ui-widget button {
	font-family:Raleway;
	font-size: 1em;
}
 .ui-widget input {
	background: none repeat scroll 0 0 #000;
	border: medium none;
	color: #ccc;
	float: left;
	font-family:Raleway;
	font-size: 20px;
	font-weight: normal;
	height: 98px;
	padding-left: 10px;
	text-transform: uppercase;
	width: 453px;
}
.search_div {
	float: left;
	height: 98px;
	margin-bottom: 0px;
	margin-top: 0px;
	position: relative;
	width: 455px;
}
.search_div2
{
height:77px;
width: 360px;
}
.search_div input[type="button"], .search_div input[type="submit"] {
	background: url("<?php echo base_path().path_to_theme()?>/images/search_btn.png") no-repeat scroll 0 0 #000;
	border: medium none;
	cursor: pointer;
	height: 98px;
	position: absolute;
	right: 0;
	text-indent: -999px;
	width: 115px;
}

.search_div2 input[type="button"], .search_div2 input[type="submit"] {
background: url("<?php echo base_path()?>/search_btn.png") no-repeat scroll 0 12px #000;
border: medium none !important;
cursor: pointer !important;
height: 80px !important;
width: 55px !important;
text-indent: -9999px !important;
position: absolute !important;
right: 21px !important;
border-radius:0px;
top:0px;
}
.profilescontainer .view-id-profiles .views-field-field-profile-image img {
	width: 418px;
	height: 268px;
}
label.option {
	color: #999 !important;
	display: inline;
	font-weight: normal;
	margin-left: 2px;
}
.nav ul li {
	display: table;
}
.nav ul li a.home {
background: url(<?php echo base_path().path_to_theme()?>/images/home_icon.png) no-repeat center #ee0000;
width: 100%;
height: 92px;
float: left;
margin-right: 5px;
margin-bottom: 6px;
transition: 0;
}
.nav ul li a.home:hover
{
background: #000000;	
}
.nav ul li a.menu-about {
background: url(<?php echo base_path().path_to_theme()?>/images/aboutus_icon.png) no-repeat center #ee0000;
width: 100%;
height: 92px;
float: left;
margin-bottom: 6px;
transition: 0;
}
.nav ul li a.menu-about:hover
{
background: #000000;	
}
.nav ul li a.menu-contact {
background: url(<?php echo base_path().path_to_theme()?>/images/contactus_icon.png) no-repeat center #ee0000;
width: 100%;
height: 92px;
float: left;
transition: 0;
}
.nav ul li a.menu-contact:hover {
background: #000000;
}
.nav ul li a.menu-profile {
width: 100%;
height: 92px;
float: left;
margin-right: 5px;
transition: 0;
}
.nav ul li a.menu-profile:hover
{
background: #000000;	
}
.nav ul li a {
color: transparent !important;
display: table-cell;
/* float: none !important; */
text-align: center;
vertical-align: middle;
line-height: 92px;
color: transparent;
font-size: 0px;
text-transform: uppercase;
font-family: Raleway;
}
.nav ul {
padding: 0px;
margin: 0px;
}
ul li.leaf {
list-style: none outside none;
overflow: hidden;
width: 224px;
}
.nav {
width: 456px;
height: auto;
float: left;
padding-top: 10px;
}
.nav ul li {
padding: 0px;
margin: 0px;
float: left;
}
ul.menu {
border: none;
list-style: none;
text-align: left;
}
.nav ul li a.home:hover span, .nav ul li a.home.active span {
background: url(<?php echo base_path().path_to_theme()?>/images/home_icon.png) no-repeat left 0 #000;
color: #fff;
font-size: 19px;
padding-left: 38px;
padding-top: 2px;
}
li.first.leaf.menu-0,li.leaf.menu-2{
margin-right: 5px;
}
li.leaf.menu-2
{
background:#000;
}
.nav ul li a.menu-profile:hover span, .nav ul li a.menu-profile.active span {
background: url(<?php echo base_path().path_to_theme()?>/images/profile_icon.png) no-repeat left 0 #000;
padding-left: 52px;
color: #fff;
font-size: 19px;
padding-bottom: 10px;
line-height: 5;
padding-top: 10px;
}
.nav ul li a.menu-contact:hover span, .nav ul li a.menu-contact.active span {
background: url(<?php echo base_path().path_to_theme()?>/images/contactus_icon.png) no-repeat left 0 #000;
padding-left: 50px;
color: #fff;
font-size: 19px;
padding-bottom: 10px;
}
.nav ul li a.menu-about:hover span, .nav ul li a.menu-about.active span {
background: url(<?php echo base_path().path_to_theme()?>/images/aboutus_icon.png) no-repeat left 0 #000;
padding-left: 48px;
color: #fff;
font-size: 19px;
padding-bottom: 10px;
padding-top: 6px;
}
.ui-corner-all
{
height: 193px !important;
overflow: auto !important;
}
.ui-corner-all li a {
border-radius: 0px;
width: 97% !important;
display: block;
height: 30px !important;
margin-left: 4px;
padding-left: 6px;
line-height:28px;
}
.ui-state-focus
{
background:red !important;
width:100% !important;
border:1px solid #990000 !important;
}
 </style>   
<base target="_parent" /> 
</head>

<body>

<div class="search_div" id="test">
      <form action="" method="post">
        <div class="ui-widget">
          <input id="tags" value="<?php print($lan == 'ta'?'பதிவுகளை தேடல்':'Search for profiles')?>" onclick="if (this.defaultValue==this.value) this.value=''" onblur="if (this.value=='') this.value=this.defaultValue" name="profilesearc" class="ui-autocomplete-input" autocomplete="off">
        </div>
        <input type="submit" name="ser" value="submit" id="search">
        
      </form>
    </div>
    <div class="nav" >   <div class="region region-menu">
    
<div id="block-system-main-menu" class="block block-system contextual-links-region block-menu clearfix">
  <div class="content">
    <ul class="menu"><li class="first leaf menu-0"><a target="_parent" href="<?php echo base_path()?><?=($lan == 'ta'?'ta/':'')?>" title="Home" class="home"><span><?php print($lan == 'ta'?'முகப்பு':'Home')?></span></a></li>
<li class="leaf menu-1"><a target="_parent" href="<?php echo base_path()?><?=($lan == 'ta'?'ta/':'en/')?>about-us" title="About Us" class="menu-about"><span><?php print($lan == 'ta'?'எம்மைப்  பற்றி':'About us')?></span></span></a></li>
<li class="leaf menu-2 active-trail"><a target="_parent" href="<?php echo base_path()?><?=($lan == 'ta'?'ta/':'en/')?>profiles" title="Profile" class="menu-profile active-trail active"><span><?php print($lan == 'ta'?'பதிவுகள்':'Profile')?></span></a></li>
<li class="last leaf menu-3"><a target="_parent" href="<?php echo base_path()?><?=($lan == 'ta'?'ta/':'en/')?>contact-us" class="menu-contact"><span><?php print($lan == 'ta'?'தொடர்புக்கு':'Contact us')?></span></a></li>
</ul>  </div>
</div>
  </div>
 </div>
</body>
</html>