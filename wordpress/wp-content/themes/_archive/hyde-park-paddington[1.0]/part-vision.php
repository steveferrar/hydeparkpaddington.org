<?php
/*
The template part for displaying the VISION functions.
*/
?>

<?php
if(get_field('transport')): 
if(get_field('transport_image')): 
	$transport_image = wp_get_attachment_image_src( get_field('transport_image') , 'content-image' );
endif; 
?>

	<div class="dropdown-item col-xs-12">
		<a href="" title="Transport" class="dropdown-link">Transport</a>
		<div class="dropdown-content">
			<?php echo(get_field('transport')); ?>
			<?php
			if(get_field('transport_image')): 
				echo '<img src="' . $transport_image[0] . '" alt="Transport" class="full-width-image" />';
			endif; 
			?>
		</div>
	</div>

<?php
endif;
?>

<?php
if(get_field('environment')): 
if(get_field('environment_image')): 
	$environment_image = wp_get_attachment_image_src( get_field('environment_image') , 'content-image' );
endif; 
?>

	<div class="dropdown-item col-xs-12">
		<a href="" title="Environment" class="dropdown-link">Environment</a>
		<div class="dropdown-content">
			<?php echo(get_field('environment')); ?>
			<?php
			if(get_field('environment_image')): 
				echo '<img src="' . $environment_image[0] . '" alt="Environment" class="full-width-image" />';
			endif; 
			?>
		</div>
	</div>

<?php
endif;
?>

<?php
if(get_field('culture')): 
if(get_field('culture_image')): 
	$culture_image = wp_get_attachment_image_src( get_field('culture_image') , 'content-image' );
endif; 
?>

	<div class="dropdown-item col-xs-12">
		<a href="" title="Culture" class="dropdown-link">Culture</a>
		<div class="dropdown-content">
			<?php echo(get_field('culture')); ?>
			<?php
			if(get_field('culture_image')): 
				echo '<img src="' . $culture_image[0] . '" alt="Culture" class="full-width-image" />';
			endif; 
			?>
		</div>
	</div>

<?php
endif;
?>

<?php
if(get_field('promotion')): 
if(get_field('promotion_image')): 
	$promotion_image = wp_get_attachment_image_src( get_field('promotion_image') , 'content-image' );
endif; 
?>

	<div class="dropdown-item col-xs-12">
		<a href="" title="Promotion" class="dropdown-link">Promotion</a>
		<div class="dropdown-content">
			<?php echo(get_field('promotion')); ?>
			<?php
			if(get_field('promotion_image')): 
				echo '<img src="' . $promotion_image[0] . '" alt="Promotion" class="full-width-image" />';
			endif; 
			?>
		</div>
	</div>

<?php
endif;
?>

<?php
if(get_field('investment')): 
if(get_field('investment_image')): 
	$investment_image = wp_get_attachment_image_src( get_field('investment_image') , 'content-image' );
endif; 
?>

	<div class="dropdown-item col-xs-12">
		<a href="" title="Investment" class="dropdown-link">Investment</a>
		<div class="dropdown-content">
			<?php echo(get_field('investment')); ?>
			<?php
			if(get_field('investment_image')): 
				echo '<img src="' . $investment_image[0] . '" alt="Investment" class="full-width-image" />';
			endif; 
			?>
		</div>
	</div>

<?php
endif;
?>

<?php
if(get_field('partnership')): 
if(get_field('partnership_image')): 
	$partnership_image = wp_get_attachment_image_src( get_field('partnership_image') , 'content-image' );
endif; 
?>

	<div class="dropdown-item col-xs-12">
		<a href="" title="Partnership" class="dropdown-link">Partnership</a>
		<div class="dropdown-content">
			<?php echo(get_field('partnership')); ?>
			<?php
			if(get_field('partnership_image')): 
				echo '<img src="' . $partnership_image[0] . '" alt="Partnership" class="full-width-image" />';
			endif; 
			?>
		</div>
	</div>

<?php
endif;
?>