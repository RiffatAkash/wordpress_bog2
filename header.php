<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" > 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset') ?>" />
        <meta name="keywords" content="<?php bloginfo('description'); ?>" 
              />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!----webfonts---->
        <link href='http://fonts.googleapis.com/css?family=Oswald:100,400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,300italic,400italic,600italic' rel='stylesheet' type='text/css'>
        <!----//webfonts---->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <!--end slider -->
        <!--script-->
        <!--/script-->
        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                $(".scroll").click(function (event) {
                    event.preventDefault();
                    $('html,body').animate({scrollTop: $(this.hash).offset().top}, 900);
                });
            });
        </script>


<!--<silder start>-->
        <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/nivo-slider.css" type="text/css" media="screen" />
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/jquery.nivo.slider.js" type="text/javascript"></script>

        <script type="text/javascript">
            $(window).load(function () {
                $('#slider').nivoSlider({
                    effect: 'random',
                    slices: 10,
                    animSpeed: 500,
                    pauseTime: 2200,
                    startSlide: 0, //Set starting Slide (0 index)
                    directionNav: false,
                    directionNavHide: false, //Only show on hover
                    controlNav: false, //1,2,3...
                    controlNavThumbs: false, //Use thumbnails for Control Nav
                    pauseOnHover: true, //Stop animation while hovering
                    manualAdvance: false, //Force manual transitions
                    captionOpacity: 0.8, //Universal caption opacity
                    beforeChange: function () {
                    },
                    afterChange: function () {
                    },
                    slideshowEnd: function () {
                    } //Triggers after all slides have been shown
                });
            });
        </script>

        <!--        slider end        -->
        <!---->
        <?php wp_head(); ?>
    </head>


    <body <?php body_class(); ?>>
        <!---strat-banner---->
          <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5964744ba3f28f75"></script>

        <div id="fb-root"></div>
        <script>(function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.9";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
        <div class="banner">				
            <div class="header">  
                <div class="container">
                    <div class="logo">
                        <a href="<?php bloginfo('home') ?>"> <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/logo.png" title="soup" /></a>
                      
                    </div>
                    <!---start-top-nav---->
                    <div class="top-menu">
                        <span class="menu"> </span> 
                        <?php
                        if (function_exists('wp_nav_menu')) {
                            wp_nav_menu(array(
                                'time_location' => 'main-menu'
                            ));
                        }
                        ?>
                    </div>
                    <div class="clearfix">
                       
                    </div>
                    <script>
                        $("span.menu").click(function () {
                            $(".top-menu ul").slideToggle("slow", function () {
                            });
                        });
                    </script>
                    <!---//End-top-nav---->					
                </div>
            </div>
            <div class="container">
                <div class="banner-head">
                    <h1><?php bloginfo('the_title') ?></h1>
                    <h2><?php bloginfo('description') ?></h2>
                </div>