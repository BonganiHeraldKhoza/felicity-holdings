<?php get_header(); ?>

<main id="main">
           <!-- ======= Hero Section ======= -->
    <section id="hero-section" class="hero-section-resp">
        <div class="row">
            <div id="banner-containerM">
                <a href="#"><img id="logoM" src="<?php echo get_theme_file_uri('/img/logo/banner3.png'); ?>" alt="" class="img-fluid"></a>
            </div>    
        </div>
    </section>
<!--End Hero-->


    <?php
        while(have_posts()){
            the_post();
        }
    ?>
    <!-- ======= About Section ======= -->
    <section  class="about about-page text-center">
        <div class="container">
            <div class="section-title" >
                <h3><?php the_title(); ?> <span id="header-resize">Felicity Holdings (Pty) Ltd.</span></h3>
            </div>               
            <?php the_content(); ?>                                         
        </div>
    </section>
    <!-- End About Section -->
</main><!-- End #main -->


<?php get_footer(); ?>