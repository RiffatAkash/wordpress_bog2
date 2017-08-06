<?php

class about_me extends WP_Widget {

    public function __construct() {
        parent::__construct('about_me', 'ABOUT ME', array('description' => 'ALL ABOUT YOURSELF'));
    }

    public function form($instance) {

        if ($instance['title']) {
            $title = $instance['title'];
        } else {
            $title = "DEMO TITLE";
        }

        $company = $instance['company'];
        ?>
        <p>
            <label for="">YOUR NAME</label>
        </p>  
        <p>
            <input type="text" name="<?php echo $this->get_field_name('title'); ?>" id="<?php echo $this->get_field_id('title'); ?>" value="<?php echo $title; ?>"/>
        </p>
        <p>
            <label for="<?php echo $this->get_field_name('company'); ?>">YOUR COMPANY NAME</label>
        </p>  
        <p>
            <input type="text" name="<?php echo $this->get_field_name('company'); ?>" id="<?php echo $this->get_field_id('company'); ?>" value="<?php echo $company; ?>"/>

        </p>


        
        <?php
    }

    public function widget($args, $instance) {

        if ($instance['title']) {
            $title = $instance['title'];
        } else {
            $title = "DEMO TITLE";
        }
        $company = $instance['company'];
        echo $args['before_widget'] . $args['before_title'] . $title . $args['after_title'];
        echo "<p>Company: " . $company . $args['after_widget'] . "</p>";
    }

}

add_action('widgets_init', function() {
    register_widget('about_me');
});
