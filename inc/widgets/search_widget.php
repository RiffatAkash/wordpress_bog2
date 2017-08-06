<?php

class search_widget extends WP_Widget {

    public function __construct() {
        parent::__construct('search_widget', __('search_widgett'), 'zhoom', array(
            'description' => __('Our search_widget Widget', 'zhoom')
        ));
    }

    public function widget($args, $instance) {
        ?>     
        <div class="search">
            <form method="GET" action="<?php esc_url(bloginfo('home')); ?>">
                <input name="s" type="text" placeholder="Search...">
            </form>
        </div>
        <?php
    }

}

function search_widget() {
    register_widget('search_widget');
}

add_action('widgets_init', 'search_widget');


if (file_exists(dirname(__FILE__) . '/inc/widgets/search_widget.php')) {
    require_once(dirname(__FILE__) . '/inc/widgets/search_widget.php');
}
