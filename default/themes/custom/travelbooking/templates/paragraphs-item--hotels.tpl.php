<?php

/**
 * @file
 * Default theme implementation for a single paragraph item.
 *
 * Available variables:
 * - $content: An array of content items. Use render($content) to print them
 *   all, or print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. By default the following classes are available, where
 *   the parts enclosed by {} are replaced by the appropriate values:
 *   - entity
 *   - entity-paragraphs-item
 *   - paragraphs-item-{bundle}
 *
 * Other variables:
 * - $classes_array: Array of html class attribute values. It is flattened into
 *   a string within the variable $classes.
 *
 * @see template_preprocess()
 * @see template_preprocess_entity()
 * @see template_process()
 */
?>
<div class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <div class="content row"<?php print $content_attributes; ?>>
    <div class="tp-para-field tp-htl-day pad-0 col-md-1 col-sm-1">
      <?php print render($content['field_htl_day']);?>  
    </div>
    <div class="tp-para-field tp-htl-details col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <?php print render($content);?>
    </div>
  </div>
</div>
<style type="text/css">
	.tp-htl-details{
		padding: 15px 0;
    border: 1px solid #f0f0f0;
	}
	/*.tp-htl-details .field-item > div{
		padding: 0;
	}*/
	.tp-htl-details img{
		margin: -15px;
	}
	.node-title h2{
		margin:0;
		font-size: 18px;
		font-weight: 600;
	}
	.node-field{
		margin-bottom: 10px;
	}
	.commerce-product-field-field-var-hotels{
		padding: 15px;
		border: 1px solid #f0f0f0;
	}
	.commerce-product-field-field-var-hotels .paragraphs-item-hotels > .row{
		margin: 0;
	}
	
</style>