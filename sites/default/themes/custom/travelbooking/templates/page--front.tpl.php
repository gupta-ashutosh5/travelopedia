<?php 
/**
 * @file
 * Alpha's theme implementation to display a single Drupal page.
 */
?>
<!-- The video -->
<video autoplay muted loop id="myVideo">
  <source src="/sites/default/themes/custom/travelbooking/videos/beach.mp4" type="video/mp4">
</video>

<div<?php print $attributes; ?>>
  <?php if (isset($page['header'])) : ?>
    <?php print render($page['header']); ?>
  <?php endif; ?>
  
  <?php if (isset($page['content'])) : ?>
    <?php print render($page['content']); ?>
  <?php endif; ?>  
  <div class="tp_social_icons pos-absolute bottom-0 right-0">
    <a href="#"><img src="/sites/default/themes/custom/travelbooking/images/Flight.png"/></a>
    <a href="#"><img src="/sites/default/themes/custom/travelbooking/images/Bus.png"/></a>
    <a href="#"><img src="/sites/default/themes/custom/travelbooking/images/Hotel.png"/></a>
  </div>
  <?php if (isset($page['footer'])) : ?>
    <?php print render($page['footer']); ?>
  <?php endif; ?>
  <div class="tp_service_icons pos-absolute top-0 right-0">
    <a href="#"><img src="/sites/default/themes/custom/travelbooking/images/Blog.png"/></a>
    <a href="#"><img src="/sites/default/themes/custom/travelbooking/images/Facebook.png"/></a>
    <a href="#"><img src="/sites/default/themes/custom/travelbooking/images/Instagram.png"/></a>
  </div>
</div>

<style type="text/css">
  #myVideo {
    position: fixed;
    right: 0;
    bottom: 0;
    min-width: 100%; 
    min-height: 100%;
    object-fit: cover;
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
</style>