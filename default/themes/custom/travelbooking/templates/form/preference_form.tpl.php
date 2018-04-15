<div class="tp-form-wrapper">
	<div class="tp-prefer-form-title text-center f24">
		Your preferences
	</div>
  <?php print drupal_render_children($form); ?>	
</div>
<style type="text/css">
	.text-center{
		text-align: center;
	}

	.tp-prefer-form-title{
		padding: 15px 0;
	}

	.tp-form-wrapper input[type=text],
	.tp-form-wrapper input[type=email],
	.tp-form-wrapper input[type=tel],
	.tp-form-wrapper input[type=number]{
		height: 48px;
		width: 100%;
	}

	.tp-form-wrapper input[value=Reset]{
		display: none;
	}

	.tp-form-wrapper input[value=Back]{
		background: #ffffff;
    color: #fe5246;
    border: 1px solid #fe5246;
    width: 20%;
    float: left;
	}

	/*.tp-form-wrapper input[value=Continue]{
		float: right;
		width: 20%;
	}*/

	.tp-form-wrapper .form-radio{
		display:  none;
	}

	.form-type-radios .form-item,
	.form-type-checkboxes .form-item{
		display: inline-block;
		vertical-align: top;
	}

	.tp-form-wrapper input[type=radio]:checked + label {
  	color: #20a397;
	} 

	.form-type-radios,
	#edit-tp-ms-tour-type,
	#edit-tp-ms-date-type{
		clear: both;
	}
	.form-type-radios > label{
		margin: 5px 0;
		float: left;
	}
	.form-item #edit-tp-ms-flight,
	.form-item #edit-tp-ms-cab{
		float: right;
	}
	.form-item-tp-ms-tour-type > input + label,
	.form-item-tp-ms-date-type > input + label{
		color: #ffffff;
		background:grey;
		padding: 0.5em 0;
		display: block;
	}
	.form-item-tp-ms-tour-type > input:checked + label,
	.form-item-tp-ms-date-type > input:checked + label{
		color: #ffffff !important;
		background: #20a397;
	}
	.pac-container:after{
		display:none !important;
	}

</style>
<script type="text/javascript">
	jQuery(document).ready(function(){
    jQuery('#edit-tp-ms-date-type-fixed').datetimepicker({
      minDate : new Date(),
      format: 'DD-MMM-YYYY'
    });
    jQuery('#edit-tp-ms-date-type-flexible').datetimepicker({
      minDate : new Date(),
      viewMode: 'months',
      format: 'MMM-YYYY'
    });
    jQuery('.tp-date-fields').on('dp.change', function (ev) {
    	jQuery('.form-item-tp-ms-number-of-days').show();
    	jQuery('.form-item-tp-ms-number-of-days').addClass('on-show');
    	jQuery(this).off('blur');
    	jQuery(this).addClass('tp-date-fields-onselect');
      console.log('hi');
      jQuery(this).parent('.form-type-textfield').siblings().find('.tp-date-fields').hide();
      console.log(jQuery(this).val());
      //jQuery('#datetimepicker3 input').val(jQuery(this).find('input').val());
    });;
  });
</script>