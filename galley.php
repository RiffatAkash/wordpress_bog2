<?php get_header(); ?>

<?php
/*
  Template Name: Gallery
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
<div class="content">
    <div class="container">
        <div class="content-grids">
            
            <?php 
               $zboomgalleryitems=new WP_Query(array(
                   'post_type'=>'zhoomgallery',
                   'posts_per_page'=>-1
               ));
            ?>
            
            <?php while($zboomgalleryitems->have_posts()) : $zboomgalleryitems->the_post();?>
            <div class="col-md-4 content-main">
                <div class="content-grid">
                    <div class="content-grid-info">
                        <?php the_post_thumbnail('medium');?>
                        </br>
                        <h3 style="text-align:center"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                    </div>
                </div>
            </div>
           <?php endwhile;?>
            
            <div class="clearfix"></div>
        </div>
    </div>
</div>
  <?php get_footer();?>  
