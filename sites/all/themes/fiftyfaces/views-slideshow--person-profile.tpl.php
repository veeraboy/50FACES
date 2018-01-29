<?php if (!empty($slideshow)): ?>
  <div class="skin-<?php print $skin; ?>">
    <?php if (!empty($top_widget_rendered)): ?>
      <div class="views-slideshow-controls-top clearfix">
        <?php print $top_widget_rendered; ?>
      </div>
    <?php endif; ?>

	
		
	
	<?php print $slideshow; ?>

    <?php if (!empty($bottom_widget_rendered)): ?>
      <div class="views-slideshow-controls-bottom clearfix">
        <?php //print $bottom_widget_rendered; ?>
      </div>
    <?php endif; ?>
  </div>
<?php endif; ?>