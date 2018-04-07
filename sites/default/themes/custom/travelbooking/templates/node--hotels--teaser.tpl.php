<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
  <?php print render($content['field_hp_it_pictures']);?>
</div>
<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
  <div class="node-field node-title hotel-name">
    <?php print render($content['title_field']);?>
  </div>
  <div class="node-field hotel-rating">
    <div>
    <?php 
      $rating = explode(" ", $content['field_rating'][0]['#markup']);
    ?>      
    </div>
    <div class="stars" data-stars="<?php echo $rating[0];?>">
      <svg height="25" width="23" class="star rating" data-rating="1">
        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
      </svg>
      <svg height="25" width="23" class="star rating" data-rating="2">
        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
      </svg>
      <svg height="25" width="23" class="star rating" data-rating="3">
        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
      </svg>
      <svg height="25" width="23" class="star rating" data-rating="4">
        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
      </svg>
      <svg height="25" width="23" class="star rating" data-rating="5">
        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
      </svg>
    </div>
  </div>
  <div class="node-field hotel-address">
    <?php print render($content['field_htl_address']);?>
  </div>
</div>
<style type="text/css">
.stars .star polygon {
  fill: #d8d8d8;
}
.stars[data-stars] .star polygon {
  fill: #ffd055;
}
.stars[data-stars="1"] .star:nth-child(1) ~ .star polygon {
  fill: #d8d8d8;
}
.stars[data-stars="2"] .star:nth-child(2) ~ .star polygon {
  fill: #d8d8d8;
}
.stars[data-stars="3"] .star:nth-child(3) ~ .star polygon {
  fill: #d8d8d8;
}
.stars[data-stars="4"] .star:nth-child(4) ~ .star polygon {
  fill: #d8d8d8;
}
.stars[data-stars="5"] .star:nth-child(5) ~ .star polygon {
  fill: #d8d8d8;
}
</style>
