<?php
/*
The template for displaying all GENERIC and most SPECIFIC pages.
*/
get_header(); ?>
    
	<?php 
	if(have_posts()):
    while(have_posts()): 
	the_post(); 
	?> 
	
	<?php get_template_part('part', 'header-carousel'); ?>
		
	<section class="page">
	
		<div class="container">
	
			<div class="row">
	
			<?php 
			// Vision
			if(is_page('5')): 
			?>
			
				<div class="col-xs-12 col-sm-12 col-md-12">
					
					<h1><?php echo get_the_title() ?></h1>
					
					<?php the_content(); ?>
					
				</div>
				
				<?php get_template_part('part', 'vision'); ?>

			<?php 
			// Map
			elseif(is_page('7')): 
			?>
			
				<div class="col-xs-12 col-sm-12 col-md-12">
					
					<a href="<?php bloginfo('template_url'); ?>/img/map-large.jpg" title="Large Map" class="lightbox" />
						<img src="<?php bloginfo('template_url'); ?>/img/map-small.jpg" alt="Map" class="full-width-image" />
					</a>
					
					<h1><?php echo get_the_title() ?></h1>
					
					<?php the_content(); ?>
					
				</div>

			<?php 
			// Join Us
			elseif(is_page('10')): 
			?>
			
				<div class="col-xs-12 col-sm-12 col-md-12">
					
					<h1><?php echo get_the_title() ?></h1>
					
					<?php the_content(); ?>
					
					<a href="<?php echo get_permalink(12); ?>" title="We need your involvement" class="we-need-your-involvement">We need your involvement</a>
					
				</div>

			<?php 
			// Form
			elseif(is_page('12')): 
			?>
			
				<div class="col-xs-12 col-sm-12 col-md-12">
					
					<h1><?php echo get_the_title() ?></h1>
					<?php the_content(); ?>
					
				</div>
			
				<div class="join-us-form">
					
					<?php echo do_shortcode('[contact-form-7 id="39" title="Join Us"]'); ?>
					
				</div>

			<?php 
			// Downloads
			elseif(is_page('16')): 
			?>
			
				<div class="col-xs-12 col-sm-12 col-md-12">
					
					<h1><?php echo get_the_title() ?></h1>
					
					<?php the_content(); ?>
				
					<?php get_template_part('part', 'downloads'); ?>
					
				</div>

			<?php 
			// News Settings
			elseif(is_page('58')): 
			?>
			
				<div class="col-xs-12 col-sm-12 col-md-12">
					
					<h1><?php echo get_the_title() ?></h1>
					
					<?php the_content(); ?>
				
					<?php get_template_part('part', 'downloads'); ?>
					
				</div>
					
			<?php
			else:
			?>
			
				<div class="col-xs-12 col-sm-12 col-md-12">
					
					<h1><?php echo get_the_title() ?></h1>
					
					<?php the_content(); ?>
					
				</div>
	
			<?php
			endif;
			?>
						
			</div>
			
		</div>
			
		<div class="clearfix"></div>
		
	</section>
		
    <?php
	endwhile;
	endif;
	?>
            
    <div class="clearfix"></div>
    
<?php get_footer(); ?>