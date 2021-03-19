<?php

    //add style & scripts
    function felicity_files(){

         /**
         * Import styles
         *  
         */
        wp_enqueue_style('google_font', '//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i');
       
        wp_enqueue_style('icofont', get_theme_file_uri('/vendor/icofont/icofont.min.css'));
        wp_enqueue_style('boxicons', get_theme_file_uri('/vendor/boxicons/css/boxicons.min.css'));
        wp_enqueue_style('venobox', get_theme_file_uri('/vendor/venobox/venobox.css'));
        wp_enqueue_style('owl_carousel', get_theme_file_uri('/vendor/owl.carousel/assets/owl.carousel.min.css'));
        wp_enqueue_style('aos', get_theme_file_uri('/vendor/aos/aos.css')); 
        wp_enqueue_style('bootstrap_min', get_theme_file_uri('/vendor/bootstrap/css/bootstrap.min.css'));
        wp_enqueue_style('main_style', get_stylesheet_uri());
        /**
        * Import Scripts
        *  
        */
        wp_enqueue_script('aos', get_theme_file_uri('/vendor/aos/aos.js'), NULL, 0.1, true);
        wp_enqueue_script('owl_carousel', get_theme_file_uri('/vendor/owl.carousel/owl.carousel.min.js'), NULL, 0.1, true);
        wp_enqueue_script('isotope-layout', get_theme_file_uri('/vendor/isotope-layout/isotope.pkgd.min.js'), NULL, 0.1, true);
        wp_enqueue_script('counterup', get_theme_file_uri('/vendor/counterup/counterup.min.js'), NULL, 0.1, true);
        wp_enqueue_script('waypoints', get_theme_file_uri('/vendor/waypoints/jquery.waypoints.min.js'), NULL, 0.1, true);
        wp_enqueue_script('venobox', get_theme_file_uri('/vendor/venobox/venobox.min.js'), NULL, 0.1, true);
        wp_enqueue_script('jquery_sticky', get_theme_file_uri('/vendor/jquery-sticky/jquery.sticky.js'), NULL, 0.1, true);
        wp_enqueue_script('php-email-form', get_theme_file_uri('/vendor/php-email-form/validate.js'), NULL, 0.1, true);
        wp_enqueue_script('jquery_easing', get_theme_file_uri('/vendor/jquery.easing/jquery.easing.min.js'), NULL, 0.1, true);
        wp_enqueue_script('bootstrap', get_theme_file_uri('/vendor/bootstrap/js/bootstrap.bundle.min.js'), NULL, 0.1, true);
        wp_enqueue_script('jquery', get_theme_file_uri('/vendor/jquery/jquery.min.js'), NULL, 0.1, true);
        wp_enqueue_script('Main_javaScript', get_theme_file_uri('/js/main.js'), NULL, 0.1, true);
       
    }
    add_action('wp_enqueue_scripts', 'felicity_files');

    //add title content
    function felicity_features(){
        // register_nav_menu('headerMenuLocation', 'Header Menu Location');
        // register_nav_menu('footerLocationOne', 'Footer Location One');
        // register_nav_menu('footerLocationTwo', 'Footer Location Two');
        
        add_theme_support('title-tag');
    }
    add_action('after_setup_theme', 'felicity_features');




    /*
    ///////////////////////////////////////////////
                Custom Shortcodes
    ///////////////////////////////////////////////
    */ 

    //Service shortcode
    function service_body(){
        return
        '

        <div class="row">
            <div class="col-lg-12 text-left">
                <h3>Felicity Productions  <img class="img-fluid" style="width:50px;padding-bottom:0px;" src="'.get_theme_file_uri("/img/logo/Felicity Production.png").'" alt=""></h3>
                <p>
            </div>
            <div class="col-lg-8 text-left">
                Felicity Productions is a sub-subsidiary of Felicity Holdings a company that has being in existence
                 since 2015. Felicity Productions provides photography, video production and web design. 
                 We are currently based in Nelspruit Mpumalanga, South Africa. We provide a wide range of Media 
                 services for individuals, small and medium businesses (SMEs).
                </p>
                <p>
                The company focuses on marketing on site responsiveness, quality assurance, creating and retaining customer
                 base. In a world where media is evolving daily we are geared for growth with the adoption of best 
                 global media practices, we have invested in state of the art media technologies and employed highly
                  skilled individuals and we are committed to providing excellence in client service.
                </p>
               
            </div>
            <div class="col-lg-4 text-left">
                <img class="img-fluid" style="max-width:100%;" src="'.get_theme_file_uri("/img/camera.png").'" alt="">
            </div>
            <div class="col-lg-12 text-left">
            <p>
            <a href="https://felicityproductions.co.za/" target="_blank">Visit Felicity Productions  &raquo;</a>
            </p>
                <hr/>
            </div>
        </div>    
            <div class="row">

            <div class="col-lg-12 text-left">
                <h3> Felicity Business Solutions   <img class="img-fluid" style="width:50px;padding-bottom:0px;" src="'.get_theme_file_uri("/img/logo/Felicity Busines Solution.png").'" alt=""></h3>
                <p></p>
                <p>
                <a href="#" target="_blank">Felicity Business Solutions  &raquo;</a>
                </p>
               <hr/>
            </div>

            <div class="col-lg-12 text-left">
                <h3>Felicity Security Response  <img class="img-fluid" style="width:50px;padding-bottom:0px;" src="'.get_theme_file_uri("/img/logo/Felicity Security Response.png").'" alt=""></h3>
                <p></p>
                <p>
                <a href="#" target="_blank">Felicity Security Response  &raquo;</a>
                </p>
               <hr/>
            </div>
        </div>   

        ';
    }
    add_shortcode('services', 'service_body');
    

    //contact shortcode
    function contact_body(){
        return
        '
            
        <div class="row mt-5 contact">
            
            <div class="col-lg-4 text-left" data-aos="fade-right">
                <div class="info">
                    <div class="phone">
                            <i class="icofont-phone"></i>
                            <h4>Call:</h4>
                            <p>+27 78 383 7337</p>
                    </div>

                    <div class="email">
                            <i class="icofont-envelope"></i>
                            <h4>Email:</h4>
                            <p>:admin@felicityholdings.co.za</p>
                    </div>
            
                    <div class="email">
                        <i class="icofont-google-map"></i>
                        <h4>Location:</h4>
                        <p>1791 Ingawane Street, Kamagugu, Mbombela 1200</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left">

                <form action="#" method="post" role="form" class="php-email-form">
                    <div class="form-row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                data-rule="minlen:4" data-msg="Please enter at least 4 chars"  required/>
                            <div class="validate"></div>
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" required/>
                            <div class="validate"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                            data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required/>
                        <div class="validate"></div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" data-rule="required"
                            data-msg="Please write something for us" placeholder="Message" required></textarea>
                        <div class="validate"></div>
                    </div>
                    <div class="mb-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
            </div>

            <div class="col-lg-12" data-aos="fade-right" style="padding-top:20px">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3259.9442502308416!2d30.995874714832077!3d-25.45979684030486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1ee849f96d132a5f%3A0x35b43b850b83c8e0!2s1791%20Ingwane%20Street%2C%20Kamagugu%2C%20Nelspruit%2C%201200!5e1!3m2!1sen!2sza!4v1613657818858!5m2!1sen!2sza" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>

        </div>

        
        ';
    }
    add_shortcode('contacts', 'contact_body');