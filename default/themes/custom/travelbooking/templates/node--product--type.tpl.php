<?php module_load_include('inc', 'tp_mforms', 'tp_mforms.pages');?>
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
  <h2 class="col-xs-12 col-sm-12 col-md-12 col-lg-12 node-title-section">
    <div id="node-field-title"><?php print $node->title; ?></div>
    <div class="node-field-dnn" style="font-size: 16px;">
      <?php print render($content['field_hp_it_day'])?> <div>Days and</div> 
      <?php print render($content['field_hp_nights'])?> <div>Nights</div>
    </div>
  </h2>
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
    <div class="node-field node-field-cities mar-0 col-xs-12 col-sm-12 col-md-6 col-lg-6">
      <label style="font-family: Open Sans, sans-serif;font-weight: 600;padding: 10px 7px 0 8px;margin-bottom: 0">Cities</label>
      <?php print render($content['field_hp_cities']);?>
    </div>
  </div>
  <div class="pad-0 col-xs-12 col-sm-12 col-md-5 col-lg-5 node-inside-layout tp-item-node-link clearfix">
    <a onclick="fillPreferanceForm()">Plan my Holidays</a>
  </div>
  <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 node-hp-full-content clearfix">
    <?php 
      hide($content['comments']);
      hide($content['links']);
    ?>
    <?php
      print render($content['field_hp_overview']);
    ?>
    <h3>Itinerary</h3>
    <?php print render($content['field_hp_itinerary']);?>
    <h3>Hotels</h3>
    <?php print render($content['product:field_var_hotels']);?>
    <div class="tp-tab">
      <h3 id="default-open" class="tablinks" onclick="openTab(event, 'inclusions')" style="display: inline;">Inclusions</h3>
      <h3 class="tablinks" onclick="openTab(event, 'exclusions')" style="display: inline;">Exclusions</h3>
    </div>
    <div id="inclusions" class="tabcontent">
      <?php print render($content['field_hp_inclusions']);?>
    </div>
    <div id="exclusions" class="tabcontent">
      <?php print render($content['field_hp_exclusions']);?>
    </div>
    <h3>FAQs</h3>
    <?php print render($content['field_hp_faq']);?>
  </div>
  <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 node-hp-side-form clearfix">
      <?php
        $contact_form = drupal_get_form('tp_mforms_ajax_form');
        print drupal_render($contact_form);
      ?>    
  </div>
</article>
<style type="text/css">
  .node-hp-full-content > div,
  .node-inside-layout,
  .node-hp-side-form,
  .node-hp-full-content > ul{
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

.node-field-dnn > div,
.node-title-section > div{
  display: inline-block;
}

/* Style the tab */
.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons that are used to open the tab content */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none !important;
    animation: fadeEffect 1s;
    margin: 0 !important;
}

/* Go from zero to full opacity */
@keyframes fadeEffect {
    from {opacity: 0;}
    to {opacity: 1;}
}

div.tp-tab{
  margin-bottom: 0;
  padding-left: 0;
}

.tablinks{
  cursor:pointer;
  display: inline;
  padding: 15px;
}
h3.tablinks.active{
    background :#efefef;
}
</style>
<script type="text/javascript">
  function openTab(evt, tabname) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(tabname).style.display = "block";
    evt.currentTarget.className += " active";
}
document.getElementById("default-open").click();

/*** Get Current Location **/
var address;
function getLocation() {
    if(navigator.geolocation) {
        return new Promise((geoSuccess, geoError) => {
        	navigator.geolocation.getCurrentPosition(geoSuccess, geoError);
    		});
    } 
    else {
        alert("Geolocation is not supported by this browser.");
    }
}

function geoSuccess(position) {
  var lat = position.coords.latitude;
  var lng = position.coords.longitude;
  alert("lat:" + lat + " lng:" + lng);
  localStorage.setItem("lat", lat);
  localStorage.setItem("lng", lng);
}

function geoError() {
  alert("Geocoder failed.");
}

var geocoder;
function initialize() {
  geocoder = new google.maps.Geocoder;
}

function codeLatLng(lat, lng, fn) {
	initialize();
	var latlng = {lat: parseFloat(lat), lng: parseFloat(lng)};
	//console.log(geocoder);
	geocoder.geocode({'latLng': latlng}, function(results, status) {
	if(status == google.maps.GeocoderStatus.OK) {
		//console.log(results)
		if(results[1]) {
		//formatted address
		address = results[5].formatted_address;
		fn(address);
	} else {
			return "No results found";
		}
	} else {
		return ("Geocoder failed due to: " + status);
		}
	});
}
/*****************/
/***** Preferance form ***/

async function fillPreferanceForm(){
	var to, from, hotel, package, budget, lat, long;

	to = document.getElementsByClassName("node-field-cities")[0].getElementsByClassName("field-name-field-hp-cities")[0].getElementsByClassName("field-item even")[0].innerHTML;

	from = confirm("Shall we use your location as Source");

	if (from == true) {
		var position = await getLocation();  // wait for getPosition to complete
		codeLatLng(position.coords.latitude,position.coords.longitude,function(address){
			localStorage.setItem("from", address);
		})
	}

	package = document.getElementById("node-field-title").innerHTML;
	budget = document.getElementsByClassName("field-name-commerce-price field-type-commerce-price")[0].childNodes[0].childNodes[0].innerHTML;
	from = localStorage.getItem("from");

	/*fill values*/
	if(typeof to != 'undefined' && to != null)
	document.getElementById("edit-tp-ms-to-place").value = to;

	if(typeof from != 'undefined' && from != null)
	document.getElementById("edit-tp-ms-from-place").value = from;

	if(typeof package != 'undefined' && package != null)
	document.getElementById("edit-tp-ms-package").value = package;

	if(typeof budget != 'undefined' && budget != null)
	document.getElementById("edit-tp-ms-budget").value = budget.replace(/\D/g,'');

	//window.scroll(0,findPos(document.getElementById("edit-tp-ms-to-place")));

	document.querySelector('#edit-tp-ms-phone').scrollIntoView({ 
  	behavior: 'smooth' 
	});

}

</script>