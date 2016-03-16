<?php
/*
The template part for displaying the HEADER CAROUSEL.
*/
?>

<?php 
if(get_field('carousel')):
?>

	<section class="header-carousel">
	
		<?php 
		// Holding image
		while(has_sub_field('carousel')):
			$holding_image = wp_get_attachment_image_src(get_sub_field('image'), 'header-carousel' );
			echo '<img src="' . $holding_image[0] . '" alt="News" class="flexHoldingImage" />';
			break;
		endwhile; 
		?>
				
		<div class="flexslider">
		
			<ul class="slides">
				
				<?php 
				$i = 0;
				while(has_sub_field('carousel')):
				?>
				
					<li>
						<?php $image = wp_get_attachment_image_src(get_sub_field('image'), 'header-carousel' ); ?>
						<img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>" class="flexImages" />
					</li>
	
				<?php
				$i++;
				endwhile;
				?>

			</ul>
			
			<?php 
			// Hide direction nav if there's only one slide
			if ($i == '1'):
				echo '<style>.flex-direction-nav{ display:none !important; }</style>';
			endif; 
			?>
			
			<div class="clearfix"></div>
			
		</div>
		
	</section>
	
<?php
endif;
?>