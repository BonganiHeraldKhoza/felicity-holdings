<?php get_header(); ?>

<main id="main">

    <!-- ======= Hero Section ======= -->
    <section id="hero-section" class="hero-section-resp">
    

        <div class="row">
            <div id="banner-containerM">
        <!--<h1 class="text-light"><a href="index" style="font-family:Nintend">Myeza Technogies</a></h1>-->
            <!-- Uncomment below if you prefer to use an image logo -->
                <a href="#"><img id="logoM" src="<?php echo get_theme_file_uri('/img/logo/banner3.png'); ?>" alt="" class="img-fluid"></a>
            </div>   
            <div class="col-lg-6" id="hero"
                style="background: url(<?php echo get_theme_file_uri("img/sunset.jpg"); ?>) bottom center;">
                <div class="hero-container" data-aos="fade-up">
                    <h1>Creativity</h1>
                    <div class="headerInnerText">
                        <h2>The Creative Minds giving you a Creative Solution</h2>
                    </div>
                    <a href="#about" class="btn-get-started scrollto">Get Started</a>
                </div>
            </div>

            <div class="col-lg-6" id="" style="background:#fff;padding:0px;">
                <div class="row" data-aos="fade-up" style="padding:0px;">

                    <?php

            $queryP = new WP_Query(array( 
              'post_type' => 'page',
              'post_parent' => 5,
              'order' => 'ASC',
              
            ));

            while($queryP->have_posts()){
              $queryP->the_post();
              if ($queryP->current_post +1 == $queryP->post_count) { 
                $boxStretch= '12'; 
              }else { 
                $boxStretch= '6'; 
              }
          ?>
                    <!-- right left-->

                    <div class="col-lg-<?php echo $boxStretch ?> header-right-links">
                        <a href="<?php the_permalink(); ?>">
                            <div class="header-right-font" data-aos="fade-up">
                                <span><?php the_title(); ?> &raquo;</span>
                            </div>
                        </a>
                    </div>

                    <?php }?>






                </div>
            </div>

        </div>
    </section>
    <!--End Hero-->


    <!-- ======= About Section -->
    <section class="about text-center">
        <div class="container">

            <div class="section-title">
                <h3>Services <span id="header-resize">Felicity Holdings (Pty) Ltd.</span></h3>
            </div>

            <p>
                Felicity Holdings delivers a range of Business Solutions through its Subsidiaries; Felicity
                Productions,
                Felicity Business Solutions, Felicity Security Response.
            </p>


            <div class="row">
                <div class="col-lg-4 ">
                    <a href="#">
                        <div class=" service-logos subsidiaries-container">
                            <img class="img-fluid "
                                src="<?php echo get_theme_file_uri('/img/logo/Felicity Production.png'); ?>" alt="">
                        </div>
                    </a>
                </div>

                <div class="col-lg-4">
                    <a href="#">
                        <div class=" service-logos subsidiaries-container">
                            <img class="img-fluid"
                                src="<?php echo get_theme_file_uri('/img/logo/Felicity Busines Solution.png'); ?>"
                                alt="">
                        </div>
                    </a>
                </div>

                <div class="col-lg-4">
                    <a href="#">
                        <div class=" service-logos subsidiaries-container">
                            <img class="img-fluid"
                                src="<?php echo get_theme_file_uri('/img/logo/Felicity Security Response.png'); ?>"
                                alt="">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta"
        style="background: linear-gradient(rgba(2, 2, 2, 0.7), rgba(0, 0, 0, 0.9)), url(<?php echo get_theme_file_uri('/img/about.jpg');//cta-bg ?>) fixed center center;">
        <div class="container" data-aos="zoom-in">

            <div class="text-center">

                <h3>
                    Felicity Holdings (Pty) Ltd
                </h3>
                <p>
                    Integrating business concepts by providing customized
                    innovative and creative business solutions underpinning holistic sustainable development,
                    while creating a sound partnership and skills sharing magnitude with big reputable companies.
                <div id="about"></div>
                <br />
                </p>

            </div>

        </div>
    </section>

    <!-- ======= Contact Section ======= -->
    <section class="contact">
        <div class="container">

            <div class="section-title" data-aos="zoom-in">
                <h3>Contact <span id="header-resize">Felicity Holdings (Pty) Ltd.</span></h3>
            </div>

            <div class="row mt-5">
                <div class="col-lg-4" data-aos="fade-right">
                    <div class="info">
                        <div class="phone">
                                <i class="icofont-phone"></i>
                                <h4>Call:</h4>
                                <p>+27 (13) 004 0505</p>
                        </div>

                        <div class="email">
                                <i class="icofont-envelope"></i>
                                <h4>Email:</h4>
                                <p>:admin@felicityproductions.co.za</p>
                        </div>
                       
                        <div class="address">
                            <i class="icofont-google-map"></i>
                            <h4>Location:</h4>
                            <p>1791 Ingawane Street, Kamagugu, Mbombela 1200</p>
                        </div>
                    </div>

                </div>

                <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3259.9442502308416!2d30.995874714832077!3d-25.45979684030486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1ee849f96d132a5f%3A0x35b43b850b83c8e0!2s1791%20Ingwane%20Street%2C%20Kamagugu%2C%20Nelspruit%2C%201200!5e1!3m2!1sen!2sza!4v1613657818858!5m2!1sen!2sza" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->


<?php get_footer(); ?>