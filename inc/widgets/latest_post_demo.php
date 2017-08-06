<?php

class latest_post_demo extends WP_Widget{
     public function __construct() {
        parent::__construct('latest_post_demo', __('Latest Post Widget'), 'zhoom', array(
            'description' => __('Our Latest Post Widget', 'zhoom')
        ));
    }
    public function widget($args, $instance){
         while(have_posts()) : the_post();
          echo '<p>'.the_title().'</p>' ;
          echo '<p>'.the_time('d F, Y | g:i a').'</p>' ;
          echo  read_more(10);
          echo  the_post_thumbnail('medium') ;
           endwhile;
    }
    
}

function latest_post_demo() {
    register_widget('latest_post_demo');
}

add_action('widgets_init', 'latest_post_demo');


if(file_exists(dirname(__FILE__).'/inc/widgets/latest_post_demo.php')){
    require_once(dirname(__FILE__).'/inc/widgets/latest_post_demo.php');
}
