<?php 
define('DRUPAL_ROOT', getcwd());

require_once DRUPAL_ROOT . '/includes/bootstrap.inc';
drupal_bootstrap(DRUPAL_BOOTSTRAP_FULL);
global $language;
 $lan = 'ta';	
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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
} </style>   
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