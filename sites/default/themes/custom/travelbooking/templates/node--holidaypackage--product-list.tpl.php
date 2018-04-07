<article<?php print $attributes; ?>>
  <div<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links.
      hide($content['comments']);
      hide($content['links']);
    ?>
    <div class="row tp-product-item">
      <div class="tp-product-item-upper col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
        <?php print render($content['field_image']);?>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
        <?php print render($content['title_field']);?>
        <div class="tp-product-item-price">
          <p class="pfc4">Starting from:</p>
          <div>
            <?php print render($content['product:commerce_price']);?>
          </div>
        </div>
        <?php print render($content['field_product']);?>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        <?php print render($content['field_hp_overview']);?>
        <div class="tp-item-services">
          <?php print render($content['field_hp_services']);?>  
        </div>
        <div class="tp-item-node-link">
          <?php
          $tp_package_alias = drupal_get_path_alias('node/' . $node->nid);
          ?>
          <a href="<?php echo $tp_package_alias?>" target="_blank">View Details</a> 
        </div>
        
      </div>
      </div>
    </div>
  </div>
</article>
<style type="text/css">
  .tp-product-item > div{
    border: 1px solid #ddd;
    padding: 15px 0;  
  }
  .tp-product-item-upper{
    margin-top:10px;
  }
  .tp-product-item-lower{
    margin-bottom: 10px;
  }

  .tp-item-services{
    padding: 15px;
  }
  .tp-product-item div.form-item.form-item-attributes-field-rating{
    padding-bottom: 5px !important;
  }
</style>