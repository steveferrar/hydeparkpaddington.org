<?php
/*
The template for displaying the NEWS archive page.
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
				
				<div class="col-xs-12 col-sm-12 col-md-12">
					<h1>Latest</h1>
				</div>
				
				<?php 
				if(have_posts()):
				?>
				
					<?php
					while (have_posts()):
					the_post(); 
					?>
	
						<article class="col-xs-12 col-sm-12 col-md-12 news-article">
							
							<h2><a href="<?php echo get_permalink(); ?>" title="<?php the_title();?>"><?php the_title();?></a></h2>
							<p class="date"><?php echo get_the_date('jS F Y'); ?></p>
							<p>
								<?php
								if(get_field('excerpt')):
									echo get_field('excerpt');
								else:
									echo get_the_excerpt();
								endif;
								?>
								<br />
								<a href="<?php echo get_permalink(); ?>" title="<?php the_title();?>">Read More</a>
							</p>
							
						</article>
						
						<div class="clearfix"></div>
							
					<?php
					endwhile;
					?>
				
					<div class="col-xs-12 col-sm-12 col-md-12">
						<span class="nav-previous"><?php  echo get_previous_posts_link( '<span>&laquo;</span> Previous' ); ?></span>
						<span class="nav-next"><?php  echo get_next_posts_link( 'Next <span>&raquo;</span>' ); ?></span>
					</div> 
					
				<?php 
				else: 
				?>
			
					<div class="col-xs-12 col-sm-12 col-md-12">
						<h2>Sorry...</h2>
						<p>There are no articles to display at the moment.</p>
						<p><a href="<?php echo home_url(); ?>" title="Click Here">Click here</a> to go back to the home page.</p>
					</div>
			
				<?php 
				endif; 
				wp_reset_query(); 
				?>
				
				<div class="clearfix"></div>
			
			</div>
			
		</div>
			
		<div class="clearfix"></div>
		
	</section>
			
<?php get_footer(); ?>