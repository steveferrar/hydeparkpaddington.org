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
		// Holding image (show first row)
		$rows = get_field('carousel');
		$first_row = $rows[0];
		$holding_image = wp_get_attachment_image_src( $first_row['image' ], 'header-carousel' );
		?>
		<img src="<?php echo $holding_image[0]; ?>" alt="Hyde Park Paddington" class="flexHoldingImage" />
				
		<div class="flexslider">
		
			<ul class="slides">
				
				<?php 
				$i = 0;
				while(has_sub_field('carousel')):
				if(get_sub_field('image')):
				?>
				
					<li>
						<?php $image = wp_get_attachment_image_src(get_sub_field('image'), 'header-carousel' ); ?>
						<img src="<?php echo $image[0]; ?>" alt="Hyde Park Paddington" class="flexImages" />
					</li>
	
				<?php
				$i++;
				endif;
				endwhile;
				if ($i == '1'): echo '<style>.flex-direction-nav{ display:none !important; }</style>'; endif; 
				?>

			</ul>
			
			<div class="clearfix"></div>
			
		</div>
		
	</section>
	
<?php
endif;
?>