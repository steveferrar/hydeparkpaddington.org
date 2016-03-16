<?php
/*
The template for displaying the HOME page.
*/
get_header(); ?>
	
	<?php 
	if(have_posts()):
	while(have_posts()): 
	the_post(); 
	?> 
	
		<?php get_template_part('part', 'header-carousel'); ?>

		<section>
		
			<div class="container">
		
				<div class="row">
			
					<div class="col-xs-12 col-sm-12 col-md-12">
						
						<h1><?php the_title(); ?></h1>
						<?php the_content(); ?>
						
					</div>
					
				</div>
				
			</div>
				
			<div class="clearfix"></div>
			
		</section>
		
    <?php
	endwhile;
	endif;
	?>
		
<?php get_footer(); ?>