<?php
/*
The template for displaying all NEWS single page.
*/

get_header(); ?>
	
	
	<?php 
	$header_posts = new WP_Query( 'page_id=58' );
	while ( $header_posts->have_posts() ) :
	$header_posts->the_post();
		get_template_part('part', 'header-carousel'); 
	endwhile;
	wp_reset_postdata();
	?>

	<section>
	
		<div class="container">
	
			<div class="row">

				<?php 
				while(have_posts()):
				the_post(); 
				?>
	
					<article class="col-xs-12 col-sm-12 col-md-12">
						<h2><?php the_title();?></h2>
						<p class="date"><?php echo get_the_date('jS F Y'); ?></p>
						<?php the_content(); ?>
					</article>
					
					<?php
					/*
					<div class="col-xs-12 col-sm-12 col-md-12 nav-post">
						<span class="nav-previous"><?php next_post_link( '%link', __( '<span>&laquo;</span> Previous' ) ); ?></span>
						<span class="nav-next"><?php previous_post_link( '%link', __( 'Next <span>&raquo;</span>' ) ); ?></span> 
					</div>
					*/
					?>
					
					<?php get_template_part('part', 'sharing'); ?>
					
				<?php
				endwhile;
				?>
				
				<div class="clearfix"></div>
			
			</div>
			
		</div>
			
		<div class="clearfix"></div>
		
	</section>
    
<?php get_footer(); ?>