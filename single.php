<?php get_header(); ?>
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
                        <h4><?php the_time('d F, Y | g:i a')?>,<?php comments_popup_link('no comment','one comment','% cmments','comment class','comments off')?>,Posted by: <a href="<?php the_permalink();?>"><?php the_author();?></a></h4>
                        <div class="clearfix"></div>
                    </div>
                    <div class="content-grid-single">
                        <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
<!--                        <span>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat.</span>-->
                        <?php the_post_thumbnail();?>
                        <p><?php echo the_content(); ?></p>

                        <div class="content-form">
                            <h3>Leave a comment</h3>
                           <?php comments_template();?>
                        </div>
                        <div class="comments">
                            <h3>Comment</h3>
                            <div class="comment-grid">
                                <img src="images/pic.png" alt=""/>
                                <div class="comment-info">
                                    <h4>MARK JOHNSON</h4>
                                    <p>Vivamus congue turpis in laoreet sem nec ultrices. Fusce blandit nunc vehicula massa vehicula tincidunt. Nam venenatis cursus urna sed gravida. Ut tincidunt elit ut quam malesuada consequat. Sed semper.</p>
                                    <h5>On April 14, 2014, 18:01</h5>
                                    <a href="#">Reply</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="comment-grid">
                                <img src="images/pic.png" alt=""/>
                                <div class="comment-info">
                                    <h4>MARK JOHNSON</h4>
                                    <p>Vivamus congue turpis in laoreet sem nec ultrices. Fusce blandit nunc vehicula massa vehicula tincidunt. Nam venenatis cursus urna sed gravida. Ut tincidunt elit ut quam malesuada consequat. Sed semper.</p>
                                    <h5>On April 14, 2014, 18:01</h5>
                                    <a href="#">Reply</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>	
                            <div class="pages">
                                <ul>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">6</a></li>
                                    <li><a href="#">Previous</a></li>
                                    <li><a href="#">Next</a></li>
                                </ul>
                            </div>	
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>			 			 
            </div>

            <div class="col-md-4 content-main-right">
                <?php get_sidebar();?>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--fotter-->
   <?php get_footer();?>  