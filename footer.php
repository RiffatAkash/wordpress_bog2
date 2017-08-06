<!--fotter-->
<div class="fotter">
    <div class="container">

        <?php dynamic_sidebar('footer_widgets') ?>
        <?php dynamic_sidebar('footer_widgets_recent_post') ?>
        <div class="col-md-4 fotter-media">
            <br>
                <div class="addthis_inline_share_toolbox"></div>
            </div>
        <div class="clearfix"></div>
    </div>
</div>
<!---fotter/-->
<div class="copywrite">
    <div class="container">
        <p>Copyrights &copy; 2015 Blogging All rights reserved | Template by <a href="http://w3layouts.com/">W3layouts</a></p>
    </div>
</div>
<!---->
<script type="text/javascript">
    $(document).ready(function () {
        /*
         var defaults = {
         containerID: 'toTop', // fading element id
         containerHoverID: 'toTopHover', // fading element hover id
         scrollSpeed: 1200,
         easingType: 'linear' 
         };
         */
        $().UItoTop({easingType: 'easeOutQuart'});
    });
</script>
<a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

<?php wp_footer(); ?>
</body>
</html>