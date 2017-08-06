<?php get_header();?>
<?php
/*
  Template Name: contact
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
<div class="contact">
    <div class="container">
       <div class="content-grids">
            <div class="col-md-8 content-main">
                
                
    <?php while(have_posts()) : the_post();?>
                    
                    <div class="content-grid-single">
                        <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
<!--                        <span>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat.</span>-->
                        <?php the_post_thumbnail();?>
                        <p><?php echo the_content(); ?></p>

                       
                       
                    </div>
                    <?php endwhile; ?>
                			 			 
            </div>

            <div class="col-md-4 content-main-right">
                <?php dynamic_sidebar('contact_right-sidebar');?>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<?php get_footer();?>  