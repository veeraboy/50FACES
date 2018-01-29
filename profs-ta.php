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
<title>Untitled Document</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
   
	<script type="text/javascript" src="<?php echo base_path()?>jquery.carousel.js"></script>
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
		


	</style>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,500,200' rel='stylesheet' type='text/css'>
    <base target="_top" />
</head>

<body>
<div id="container" style="position:relative">
<div id="my-carousel-3" class="carousel module">
<ul>
<?php
global $language;
$lan = 'ta';	
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
<li><img width="418" height="268" src="<?=$image?>"><span style="display:none"><a href="<?=base_path().$urlpath?>" target="_parent"><?=$title_text?></a></span></li>
<?php }
if($query_count%2 == 1)
{
$query5 = db_query("SELECT * FROM `node` where type = 'profile' and language = '".$lan."'");
$personname5 = node_load($query5->fetchObject()->nid);
$image5 = file_create_url($personname5->field_profile_image['und'][0]['uri']);
$title_text5 = $personname5->field_title_text['und'][0]['value'];
$urlpath5 = ($lan == 'ta'?'ta/':'').drupal_get_path_alias('node/'.$query5->fetchObject()->nid);	
?>
<li style="margin-right:0px;"><img width="418" height="268" src="<?=$image5?>"><span style="display:none"><a href="<?=base_path().$urlpath5?>" target="_parent"><?=$title_text5?></a></span></li>
<?php }?>
</ul>
</div>
</div>
</body>
</html>