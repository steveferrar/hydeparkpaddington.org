<?php
/**
 * The template for displaying the footer: displays the closing of the <div id="footer-wrapper"> and all content after.
 */
?>	
	<div class="clearfix"></div>
	</div><?php // end of .page-wrapper ?>

	<div id="footer-wrapper">	
    
		<footer id="footer" class="">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						&copy; Hyde Park Paddington <?php echo date('Y') ?>. All rights reserved.
					</div>
				</div>
			</div>
		</footer>
	
	</div>
	
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="<?php bloginfo('template_url'); ?>/js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
    
    <!-- Scripts -->
    <script src="<?php bloginfo('template_url'); ?>/js/plugins.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>	

	<?php // Home Page
	if( is_front_page() || is_home() ): ?>
		<script src="<?php bloginfo('template_url'); ?>/js/plugins-home.js"></script>	
		<script src="<?php bloginfo('template_url'); ?>/js/main-home.js"></script>
	<?php endif; ?>
	
    <!-- Google Analytics
    <script>
        (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>
    -->

</body>
</html>