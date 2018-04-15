<?php 
/**
 * @file
 * Alpha's theme implementation to display a single Drupal page.
 */
?>
<script src="/sites/default/themes/custom/travelbooking/js/object-fit-videos.js"></script>
<!-- The video -->
<div class="video-container">
<video autoplay muted loop id="myVideo">
  <source src="/sites/default/themes/custom/travelbooking/videos/beach.mp4" type="video/mp4">
  <!--source src="/sites/default/themes/custom/travelbooking/videos/beach.webm" type="video/webm"!-->
</video>
</div>

<div<?php print $attributes; ?>>
  <?php if (isset($page['header'])) : ?>
    <?php print render($page['header']); ?>
  <?php endif; ?>
  
  <?php if (isset($page['content'])) : ?>
    <?php print render($page['content']); ?>
  <?php endif; ?>  
  <div class="tp_social_icons pos-absolute bottom-0 right-0">
    <a href="#"><i class="sprite sprite-Flight"></i></a>
    <a href="#"><i class="sprite sprite-Bus"></i></a>
    <a href="#"><i class="sprite sprite-Hotel"></i></a>
  </div>
  <?php if (isset($page['footer'])) : ?>
    <?php print render($page['footer']); ?>
  <?php endif; ?>
  <div class="tp_service_icons pos-absolute top-0 right-0">
    <a href="#"><i class="sprite sprite-Blog"></i></a>
    <a href="#"><i class="sprite sprite-FB"></i></a>
    <a href="#"><i class="sprite sprite-Insta"></i></a>
  </div>
</div>

<style type="text/css">
	
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
		width: 40%;
    font-size: 18px;
    padding: 10px;
    height: 48px;
	}
  .ajax-progress-throbber{
    display: none !important;
  }
  .tp_service_icons,
  .tp_social_icons{
    padding: 0 3vw;
    margin:40px 0; 
  }
  .top-0{
    top:0;
  }
  .right-0{
    right: 0
  }
  .left-0{
    left:0;
  }
  .bottom-0{
    bottom: 0;
  }
  .pos-absolute{
    position: absolute;
  }
  .pos-relative{
    position: relative;
  }
  .tp_service_icons > a > img,
  .tp_social_icons > a > img  {
    width: 50px;
  }
  .tp_social_icons > a{
    display: block;
  }
  .video-container {
    width: 100%; 
    height: 100%;
  }
  .compat-object-fit {
   background-size: cover !important;
   background-position: center center !important;
  }
  video {
    position: fixed;
    right: 0;
    bottom: 0;
    min-width: 100%; 
    min-height: 100%;
    max-width: none;
    object-fit: cover;
    object-position: center center;
    font-family: 'object-fit: cover; object-position: center center;';
    pointer-events: none;
  }
  ul#destination-list{
    display: none;
  }
  #destination-list{
    width: 40%;
    background: #ffffff;
    position: relative;
    border: none;
    top: -16px;
    margin: 0 auto;
  }
  #destination-list > li{
    list-style: none;
    border-top: 1px solid #dddddd;
    margin: 0;
    padding: 10px 15px;
    font-size: 18px;
    text-align: left;
  }
  #destination-list > li >a{
    width: 100%;
    display: block;
  }
</style>
<script type="text/javascript">
  // Get IE or Edge browser version
objectFitVideos(); // IE video background full cover
function tpDestinationSearch() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("edit-tp-search-destination");
    console.log(input.value);
    ul = document.getElementById("destination-list");
    if (input.value == "") {
      ul.style.display = "none";
      return;
    }
    filter = input.value.toUpperCase();
    
    ul.style.display = "block";
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";

        }
    }
}
</script>