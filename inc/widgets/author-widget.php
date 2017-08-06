<?php

class author_bio extends WP_Widget {

    public function __construct() {
        parent::__construct('author_bio', __('Author Widget'), 'zhoom', array(
            'description' => __('Our Author Bio/Info Widget', 'zhoom')
        ));
    }

    public function widget($args, $instance) {

        $title = $instance['title'];
        $company = $instance['company'];
        $designation = $instance['designation'];

//        DEMO 
            $bloackitems = new WP_Query(array(
            'post_type' => 'zhoomservices',
            'posts_per_page' => 3
            ));
           
        $widgetcontent = $args['before_title'] . "Name: " . $title . $args['after_title'];
        $widgetcontent.=$args['before_title'] . "Company: " . $company . $args['after_title'];
        $widgetcontent.=$args['before_title'] . "Designation: " . $designation . $args['after_title'];
      
        $widgetcontent .= '<div class="author-photo"><img src="' . get_template_directory_uri() . "/photo.jpg" . '"></div>';
        
        echo $args['before_widget'] . $widgetcontent . $args['after_widget'];
        
    }

    public function form($instance) {

        $title = $instance['title'];
        $company = $instance['company'];
        $designation = $instance['designation'];
        
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>">Name :</label>
        </p>
        <p><input type="text" name="<?php echo $this->get_field_name('title'); ?>" class="widefat" id="<?php echo $this->get_field_id('title'); ?>" value="<?php echo $title; ?>"></p>

        
        
         <p>
            <label for="<?php echo $this->get_field_id('company'); ?>">Company :</label>
        </p>
        <p><input type="text" name="<?php echo $this->get_field_name('company'); ?>" class="widefat" id="<?php echo $this->get_field_id('company'); ?>" value="<?php echo $company; ?>"></p>

        
        <p>
            <label for="<?php echo $this->get_field_id('designation'); ?>">Designation :</label>
        </p>
        <p><input type="text" name="<?php echo $this->get_field_name('designation'); ?>" class="widefat" id="<?php echo $this->get_field_id('designation'); ?>" value="<?php echo $designation; ?>"></p>

        
        <p>
            <label for="<?php echo $this->get_field_id('photo'); ?>">Photo :</label>
        </p>
        <p><input type="text" name="<?php echo $this->get_field_name('photo'); ?>" class="widefat" id="<?php echo $this->get_field_id('photo'); ?>" value="<?php echo $photo; ?>"></p>

        <button class="imageupload1">select/upload image</button>
        
        <?php
    }

}

function author_bio() {
    register_widget('author_bio');
}

add_action('widgets_init', 'author_bio');


function photo_upload_option()
{
   wp_register_script('uploadphoto',get_template_directory_uri().'/js/upload-photo.js',
           array('media-upload','thickbox')); 
   
   wp_enqueue_script('media-upload');
   wp_enqueue_script('thickbox');
   wp_enqueue_style('thickbox');
   wp_enqueue_script('uploadphoto');
}
add_action('admin_enqueue_scripts','photo_upload_option');


