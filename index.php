<?php get_header(); ?>

<?php
/*
  Template Name: Blog
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
                            <?php while(have_posts()) : the_post();?>
                            <div class="content-grid-head">
                                <h3>POST OF THE DAY</h3>
                                <h4><?php the_time('d F, Y | g:i a')?>,<?php comments_popup_link('no comment','one comment','% cmments','comment class','comments off')?>,Posted by: <a href="<?php the_permalink?>"><?php the_author();?></a></h4>
                                <div class="clearfix"></div>
                            </div>
                            <div class="content-grid-info">
                                <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                                <p><?php echo read_more(30); ?>...<a href="<?php the_permalink();?>">MORE</a></p>
                                <?php the_post_thumbnail();?>
                                
                            </div>
                            <?php endwhile; ?>
                        </div>
                        <div class="pages">
                       <?php 
                       the_posts_pagination( array(
                           'show_all'=>true,
                           'prev_text'=>'PREV',
                           'next_text'=>'NEXT',
                           'screen_reader_text'=>' ',
                           'before_page_number'=>'<b>',
                           'after_page_number'=>'</b>'
                       ));
                       ?>
                        </div>			 
                        				 
                    </div>

                    <div class="col-md-4 content-main-right">
                        

                       <?php get_sidebar();?>

                    </div>
                    <br>
                    <div class="clearfix"></div>
                    
                    <?php $post_contentsss=new WP_Query(
                            array(
                               'post_type'=> 'post',
                                'posts_per_page'=>5
                                
                            ));?>
                    
                    
                    <div class="content-grid-info">
                  
				<h3>Latest Post</h3>
		  </div> 
                    <?php while($post_contentsss->have_posts()):$post_contentsss->the_post();?>
		 <div class="term">
				<h4>&nbsp; <?php the_title()?></h4>
				<p><?php read_more(12)?>[...]</p>
		 </div>	
		      <?php endwhile; ?>
                </div>
            </div>
        </div>
    <?php get_footer();?>  