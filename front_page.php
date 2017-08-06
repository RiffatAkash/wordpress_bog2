<?php get_header(); ?>
<?php
/*
  Template Name: Home
 */
?>


<div class="banner-links">
    <ul>
        <li class="active"><a href="#">LOREM IPSUM</a></li>
        <li><a href="#">DOLAR SITE AMET</a></li>
        <li><a href="#">MORBI IN SEM</a></li>
        <div class="clearfix"></div>
    </ul>
</div>
</div>
</div>
<!---//End-banner---->
<div class="content">
    <div class="container">
        <div class="content-grids">
            <div class="col-md-8 content-main">
                <div class="content-grid">
                    <div class="slidersection template">
                        <div id="slider">
                            <?php
                            $slideritems = new WP_Query(array(
                                'post_type' => 'zboomslider',
                                'posts_per_page' => -1
                            ));
                            ?>

                            <?php while ($slideritems->have_posts()) : $slideritems->the_post(); ?>

                                <a href="#"><?php the_post_thumbnail(); ?></a>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>


            </div>


            <div class="col-md-4 content-main-right">
                <?php get_sidebar(); ?>
            </div>
            <?php
            $bloackitems = new WP_Query(array(
                'post_type' => 'zhoomservices',
                'posts_per_page' => 3
            ));
            ?>
            <?php while ($bloackitems->have_posts()) : $bloackitems->the_post(); ?>
                <div class="col-md-4 content-main-right">
                    <hr>
                    <div class="categories">
                        <h3><?php the_title(); ?></h3>
                        <li class="active"><?php read_more(30) ?>...<a href="<?php the_permalink(); ?>">[MORE]</a></li>
                    </div>

                </div>
            <?php endwhile; ?>

            <div class="clearfix"></div>
        </div>
    </div>
</div>
<br>
<?php get_footer(); ?>  