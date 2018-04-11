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
  <source src="/sites/default/themes/custom/travelbooking/videos/beach.webm" type="video/webm">
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
    <a href="/flights"><img src="/sites/default/themes/custom/travelbooking/images/Flight.png"/></a>
    <a href="/bus"><img src="/sites/default/themes/custom/travelbooking/images/Bus.png"/></a>
    <a href="/hotel"><img src="/sites/default/themes/custom/travelbooking/images/Hotel.png"/></a>
  </div>
  <?php if (isset($page['footer'])) : ?>
    <?php print render($page['footer']); ?>
  <?php endif; ?>
  <div class="tp_service_icons pos-absolute top-0 right-0">
    <a href="/blog"><img src="/sites/default/themes/custom/travelbooking/images/Blog.png"/></a>
    <a href="www.facebook.com"><img src="/sites/default/themes/custom/travelbooking/images/Facebook.png"/></a>
    <a href="www.Instagram.com"><img src="/sites/default/themes/custom/travelbooking/images/Instagram.png"/></a>
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
    width: 50%;
    font-size: 18px;
    padding: 10px;
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
  }
</style>
<script type="text/javascript">
  // Get IE or Edge browser version
objectFitVideos(); // IE video background full cover
</script>