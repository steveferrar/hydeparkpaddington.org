<?php
/*
The template part for displaying the DOWNLOADS section.
*/
?>


<?php 
/*
if(get_field('downloads')):
while(has_sub_field('downloads')):
if(get_sub_field('title') && get_sub_field('date') && get_sub_field('file')):
?>

	<?php echo date("F Y", strtotime( get_sub_field('date') ) ) ?>

	<div class="col-xs-12 col-sm-12 col-md-12">
		<p>
			<?php // echo date("j<\s\u\p>S</\s\u\p> F Y", strtotime( get_sub_field('date') ) ) ?>
			<a href="<?php echo get_sub_field('file'); ?>" title="Download: <?php echo get_sub_field('title'); ?>"><?php echo get_sub_field('title'); ?></a>
		</p>
	</div>

<?php
endif;
endwhile;
endif;
*/
?>


<?php 
if(get_field('downloads')):
?>

	<?php
	$repeater = get_field('downloads');
	
	// Order repeater by date
	foreach( $repeater as $key => $row ):
		$column_id[ $key ] = $row['date'];
	endforeach;
	array_multisort( $column_id, SORT_DESC, $repeater );
	
   	foreach( $repeater as $row ) :
		echo '<p><a href="' . $row['file'] . '" title="Download: ' . $row['title'] . '">' . $row['title'] . '</a></p>';
	endforeach; 
	?> 

<?php 
endif;
?>