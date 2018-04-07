<?php 
/**
 * @file
 * Alpha's theme implementation to display a single Drupal page.
 */
?>
<!-- The video -->
<video autoplay muted loop id="myVideo">
  <source src="/travelbooking/sites/default/themes/custom/travelbooking/videos/beach.mp4" type="video/mp4">
</video>

<div<?php print $attributes; ?>>
  <?php if (isset($page['header'])) : ?>
    <?php print render($page['header']); ?>
  <?php endif; ?>
  
  <?php if (isset($page['content'])) : ?>
    <?php print render($page['content']); ?>
  <?php endif; ?>  
  
  <?php if (isset($page['footer'])) : ?>
    <?php print render($page['footer']); ?>
  <?php endif; ?>
</div>

<!--div class="custom-form">
	<?php 
	$tp_search_form = drupal_get_form('tp_custom_form');
	print render($tp_search_form);?>
</div-->

<style type="text/css">
	#myVideo {
    position: fixed;
    right: 0;
    bottom: 0;
    min-width: 100%; 
    min-height: 100%;
	}
	.zone-content-wrapper .zone-content{
		background-color: transparent;
	}
	.block-tp-custom-tp-home-search{
		text-align: center;
    padding: 20px;
	}
	.block-tp-custom-tp-home-search label{
		display: block;
    font-size: -webkit-xxx-large;
    color: #ffffff;
    font-weight: 100;
	}
	.block-tp-custom-tp-home-search #edit-tp-search-destination{
		width: 48%;
    font-size: 18px;
    border-radius: 10px;
    padding: 10px;
	}
</style>