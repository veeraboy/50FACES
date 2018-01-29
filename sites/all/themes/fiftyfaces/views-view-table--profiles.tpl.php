<?php foreach ($rows as $row_count => $row): ?>
  <?php foreach ($row as $field => $content): ?>
     	<?php //print $content; ?>
		<?php //print $content; 
		if($fields[$field] == 'title') $title = $content;
		if($fields[$field] == 'field-profile-image') $proimage = $content;
		$count = 1 + $row_count;
		?>
        
   <?php endforeach; 
   
  // echo $row_count%3;
   
  //echo $count;
   ?>
   
   <?php if($row_count == 0 ){?>
   <div class="showcase-slide">
<div class="showcase-content">
<?php }?>
   <div class="premlist">
		<div class="wrap_box">
		<div class="norGrid">
		<div class="norimage">
		<a href="#" class="gridimage"><?php print $proimage?></a>
		</div>
		<!--Content div-->
		<div class="norinfo">
		<?=$title?>
		</div>
		</div>
		
		
		</div>
		</div>
		
		<?php if($row_count == 3 && $row_count%3 == $count%4){?>
		</div></div>
   <div class="showcase-slide">
<div class="showcase-content">
		
		<?php }?>
<?php 

endforeach; ?>

