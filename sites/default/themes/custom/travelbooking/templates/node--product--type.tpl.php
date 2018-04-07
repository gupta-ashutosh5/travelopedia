<article<?php print $attributes; ?>>
  <?php print $user_picture; ?>
  <?php print render($title_prefix); ?>
  <?php if (!$page && $title): ?>
  <header>
    <h2<?php print $title_attributes; ?>><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
  </header>
  <?php endif; ?>
  <?php print render($title_suffix); ?>
  <?php if ($display_submitted): ?>
  <footer class="submitted"><?php print $date; ?> -- <?php print $name; ?></footer>
  <?php endif; ?>
  <h2 class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><?php print $node->title; ?></h2>
  <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 clearfix">
    <?php print render($content['field_image']); ?>
  </div>
  <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 node-inside-layout mar-0 clearfix">
    <div class="node-form-product mar-0 col-xs-12 col-sm-12 col-md-6 col-lg-6">  
      <div<?php print $content_attributes; ?>>
        <?php
          hide($content['comments']);
          hide($content['links']);
          print render($content['field_product']);
          echo "<p class=pfc4>Starting from:</label>";
          print render($content['product:commerce_price']);
          echo "<p class='pfc4 fw06'>Per person on twin sharing</p>";
        ?>
      </div>
    </div>
    <div class="node-field node-field-services mar-0 col-xs-12 col-sm-12 col-md-6 col-lg-6">
      <?php print render($content['field_hp_services']);?>
    </div>
  </div>
  <div class="pad-0 col-xs-12 col-sm-12 col-md-5 col-lg-5 node-inside-layout tp-item-node-link clearfix">
    <a href="#">View Quotes</a>
  </div>
  <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 node-hp-full-content clearfix">
    <?php 
      hide($content['comments']);
      hide($content['links']);
    ?>
    <?php
      print render($content);
    ?>
    
  </div>
</article>
<style type="text/css">
  .node-hp-full-content > div,
  .node-inside-layout{
    padding: 15px;
    border: 1px solid #f0f0f0;
    margin: 20px 0;
  }
  span.field-slideshow-caption-text{
    position: absolute;
    bottom: 0px;
    color: #ffffff;
    padding: 15px;
    width: 100%;
    background: #333;
    opacity: 0.8;
    font-weight: 600;
  }
  .mar-0{
    margin:0;
  }
</style>
