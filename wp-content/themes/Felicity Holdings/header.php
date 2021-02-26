<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta property="og:title" content="The Rock" />
  <meta property="og:type" content="video.movie" />
  <meta property="og:url" content="https://www.imdb.com/title/tt0117500/" />
  <meta property="og:image" content="https://ia.media-imdb.com/images/rock.jpg" />
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i><a href="mailto:admin@felicityproductions.co.za" style="color:#b18342;">admin@felicityproductions.co.za</a>
        <i class="icofont-phone"></i> +27 (13) 004 0505
      </div>
      <div class="social-links">
        <a href="https://twitter.com/felicipro" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="https://facebook.com/felicipro" class="facebook" target="_blank"><i class="icofont-facebook"></i></a>
        <a href="https://instagram.com/felicipro" class="instagram" target="_blank"><i class="icofont-instagram" ></i></a>
        <a href="https://www.youtube.com/channel/UCPlxFhXbU6qyDNMBeeiipRw" class="youtube" target="_blank"><i class="icofont-youtube" ></i></a>
        <a href="https://za.pinterest.com/felicipro/" class="pinterest" target="_blank"><i class="icofont-pinterest" ></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" style="border-bottom:1px solid #2e869a;" >
      <div id="banner-container">
       <!--<h1 class="text-light"><a href="index" style="font-family:Nintend">Myeza Technogies</a></h1>-->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="#"><img id="logoF" src="<?php echo get_theme_file_uri('/img/logo/banner3.png'); ?>" alt="" class="img-fluid"></a>
      </div>
    <div class="container d-flex">

      <div class="logo mr-auto">
       <!--<h1 class="text-light"><a href="index" style="font-family:Nintend">Myeza Technogies</a></h1>-->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="index"></a>
      </div>
     

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="<?php  echo site_url(); ?>">Home</a></li>
           <li class="drop-down "><a <?php if(is_page('about-us') or wp_get_post_parent_id(0) == 5) echo 'style="color: #b18342;"'; ?> href="#about">About Us</a>
            <ul>
              <li <?php if(is_page('about-us')) echo 'class="active"'; ?>><a href="<?php  echo site_url('/about'); ?>">About Company</a></li>
              <li <?php if(is_page('annual-reports-packaging')) echo 'class="active"'; ?>><a href="<?php  echo site_url('/annual-reports-packaging'); ?>">Annual Reports & Packaging</a></li>
              <li <?php if(is_page('business-profiling')) echo 'class="active"'; ?>><a href="<?php  echo site_url('/business-profiling'); ?>">Business Profiling</a></li>
              <li <?php if(is_page('comporate-branding')) echo 'class="active"'; ?>><a href="<?php  echo site_url('/comporate-branding'); ?>">Corporate  Branding</a></li>
              <li <?php if(is_page('graphic-designs')) echo 'class="active"'; ?>><a href="<?php  echo site_url('/graphic-designs'); ?>">Graphic Designs</a></li>
              <li <?php if(is_page('domain-registration-hosting')) echo 'class="active"'; ?>><a href="<?php  echo site_url('/domain-registration-hosting'); ?>">Domain Registration & Hosting</a></li> 
              <li <?php if(is_page('sound-stage-lighting')) echo 'class="active"'; ?>><a href="<?php  echo site_url('/sound-stage-lighting'); ?>">Sound Stage & Lighting</a></li> 
              <li <?php if(is_page('social-media-marketing')) echo 'class="active"'; ?>><a href="<?php  echo site_url('/social-media-marketing'); ?>">Social Media Marketing</a></li> 
              <li <?php if(is_page('website-development')) echo 'class="active"'; ?>><a href="<?php  echo site_url('/website-development'); ?>">Website Development</a></li> 
              <li <?php if(is_page('videograph-photograph')) echo 'class="active"'; ?>><a href="<?php  echo site_url('/videograph-photograph'); ?>">Videograph & Photograph</a></li> 
            </ul>
          </li>
          <li><a <?php if(is_page('services')) echo 'style="color: #b18342;"'; ?> href="<?php echo site_url('/services'); ?>">Our Services</a></li>
          <li><a <?php if(is_page('contacts')) echo 'style="color: #b18342;"'; ?> href="<?php  echo site_url('/contacts'); ?>">Contact Us</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
   
  
  </header><!-- End Header -->
 

