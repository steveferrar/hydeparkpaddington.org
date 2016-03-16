
<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Blank_Theme
 */

get_header(); ?>
			
	<section>
	
		<div class="row">
	
			<div class="container">
    
			<?php 
			if(have_posts()): 
			?>
			
				<?php 
				while(have_posts()): 
				the_post(); 
				?>
				
					<div class="col-xs-12 col-sm-12 col-md-12">
						<h1><?php the_title(); ?></h1>
						<?php the_content(); ?>
					</div>
					
				<?php 
				endwhile;
				?>
        
			<?php 
			else: 
			?>
				
				<div class="col-xs-12 col-sm-12 col-md-12">
					<h1>Sorry...</h1>
					<p>There are no articles to display at the moment.</p>
					<p><a href="<?php echo home_url(); ?>" title="Click Here">Click here</a> to go back to the home page.</p>
				</div>
        
			<?php 
			endif; 
			?>
				
			</div>
			
		</div>
            
    	<div class="clearfix"></div>
		
	</section>
    
<?php get_footer(); ?>