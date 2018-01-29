<?php
define('DRUPAL_ROOT', getcwd());

require_once DRUPAL_ROOT . '/includes/bootstrap.inc';
drupal_bootstrap(DRUPAL_BOOTSTRAP_FULL);
//menu_execute_active_handler();

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name = "format-detection" content = "telephone=no" />
<meta name="viewport" content="width=device-width,initial-scale=1.0">


<title>Untitled Document</title>

    <style type="text/css">
	body {
font-family: Raleway;
font-weight: normal;
}
	/** base carousel **/
		.carousel ul {
		    position:absolute;
		    overflow:hidden;
		    margin:0;
		    padding:0;
		    list-style:none;
		}

		.no-js .carousel ul {position:static;}

		.carousel .mask {
		    position:relative;
		    overflow:hidden;
		    border:none
		}

		.carousel ul li {
			float:left;
			width:418px;
		    height:268px;
		    color:#fff;
			font-size:8em;
			text-align:center;
			margin-right:4px;
			margin-bottom:4px;
			position:relative;
		}
		
		.carousel ul li span
		{
		display:none;
		}  

.carousel ul li:hover span
{
position: absolute;
font-size: 32px;
z-index: 100;
text-align: center;
width: 418px;
left: 0;
vertical-align: middle;
display: block !important;
-webkit-transition: all .2s ease-in-out;
-moz-transition: all .2s ease-in-out;
-o-transition: all .2s ease-in-out;
transition: all .2s ease-in-out;
top: 0px;
background-color: rgba(207, 24, 24, 0.64);
height: 268px;
color: #fff;
vertical-align: middle;
}
.carousel ul li span a
{
color:#fff; line-height:268px; height:268px; display:block;
text-decoration:none;
}

		 
		.carousel .disabled {
		    color:gray;
		    cursor:default;
			opacity:.5
		}
				
		/** my carousel 3 **/
		#my-carousel-3 .mask {
			width:844px;
			margin-left:0px;
		}
		
/*---------------ipad landscape---------------*/
@media only screen and (min-width: 1024px) and (max-width: 1200px) {


}

@media only screen and (min-width: 768px) and (max-width: 1024px) {
	
/*profiles_page*/
body.page-node-18 #showcase {
    height: 418px !important;
    width: 651px !important;
	background:#000;
}


.profilescontainer iframe {
    float: left !important;
    width: 650px !important;
}

.carousel ul li span {
     background-color: rgba(207, 24, 24, 0.64) !important;
    bottom: 0px !important;
    color: #fff;
    display: block !important;
    font-size: 22px;
    height:46px;
    left: 0;
    position: absolute;
    text-align: center;
    text-transform: uppercase;
    top: inherit;
    transition: all 0.2s ease-in-out 0s;
    vertical-align: middle;
    width: 323px;
    z-index: 100;
}

.carousel ul li:hover span {
       background-color: rgba(207, 24, 24, 0.64) !important;
    bottom: 0px !important;
    color: #fff;
    display: block !important;
    font-size: 22px;
    height:46px;
    left: 0;
    position: absolute;
    text-align: center;
    text-transform: uppercase;
    top: inherit;
    transition: all 0.2s ease-in-out 0s;
    vertical-align: middle;
    width: 323px;
    z-index: 100;
}

.carousel ul li span a {
    color: #fff;
    display: block;
    height:46px;
    line-height:46px;
    text-decoration: none;
}

 #my-carousel-3 .mask {
	width:650px;
}


.carousel ul li {
    height: 207px;
    margin-bottom: 4px;
    margin-right: 4px;
    width: 323px;
}


.mask img {
    height: auto;
    width: 100%;
}










}

</style>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,500,200' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php echo base_path().path_to_theme()?>/responsive.css">
<base target="_top" /> 
</head>

<body style="margin:0px;">
<div id="container" style="position:relative">
<div id="my-carousel-3" class="carousel module">
<ul>
<?php
global $language;
$lan = $language->language;	
$query = db_query("SELECT * FROM `node` where type = 'profile' and language = '".$lan."'");
$query_count = db_query("SELECT * FROM `node` where type = 'profile' and language = '".$lan."'")->rowCount();
?>		
<?php
foreach ($query as $pname){
$personname = node_load($pname->nid);
//echo '<pre>';print_r($personname);
$image = file_create_url($personname->field_profile_image['und'][0]['uri']);
$title_text = $personname->field_title_text['und'][0]['value'];
$urlpath = ($lan == 'ta'?'ta/':'').drupal_get_path_alias('node/'.$pname->nid);
?>
<li><img width="418" height="268" src="<?=$image?>"><span><a href="<?=base_path().$urlpath?>" target="_parent"><?=$title_text?></a></span></li>
<?php }
if($query_count%2 == 1)
{
$query5 = db_query("SELECT * FROM `node` where type = 'profile' and language = '".$lan."'");
$personname5 = node_load($query5->fetchObject()->nid);
$image5 = file_create_url($personname5->field_profile_image['und'][0]['uri']);
$title_text5 = $personname5->field_title_text['und'][0]['value'];
$urlpath5 = ($lan == 'ta'?'ta/':'').drupal_get_path_alias('node/'.$query5->fetchObject()->nid);	
?>
<li style="margin-right:0px;"><img width="418" height="268" src="<?=$image5?>"><span><a href="<?=base_path().$urlpath5?>" target="_parent"><?=$title_text5?></a></span></li>
<?php }?>
</ul>
</div>
</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
   
	<script type="text/javascript" src="<?php echo base_path()?>jquery.carousel.js"></script>
    <script type="text/javascript" src="<?php echo base_path()?>jquery.mobile.custom.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('body').removeClass('no-js');
		
  $(".menu li a").wrapInner("<span>" + "</span>");

			
		   
		    $('#my-carousel-3').carousel({
				itemsPerPage: 2,
				itemsPerTransition: 2,
				easing: 'linear',
				noOfRows: 2
			});
		});
	</script>
    
    <script>
$(document).ready(function() {
$("#my-carousel-3").swiperight(function() {
$(this).carousel('prev');
});
$("#my-carousel-3").swipeleft(function() {
$(this).carousel('next');
});
});
</script> 
</body>
</html>