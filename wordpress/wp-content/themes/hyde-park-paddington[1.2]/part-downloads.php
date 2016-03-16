<?php
/*
The template part for displaying the DOWNLOADS section.
*/
?>


<?php 
if(get_field('downloads')):
?>

	<div class="downloads">
	
		<?php
		while(has_sub_field('downloads')):
		if(get_sub_field('title') && get_sub_field('date') && get_sub_field('file')):
		?>
			
			<div class="download">
		
				<h6 class="month"><?php echo date("F Y", strtotime( get_sub_field('date') ) ) ?></h6>
				
				<p>
					<?php // echo date('F Y', strtotime( get_sub_field('date') ) ) . '<br />'; ?>
					<a href="<?php echo get_sub_field('file'); ?>" title="Download: <?php echo get_sub_field('title'); ?>"><?php echo get_sub_field('title'); ?></a>
				</p>
			
			</div>
		
		<?php
		endif;
		endwhile;
		?>
		
	</div>
	
<?php
endif;
?>

<?php 
/*
if(get_field('downloads')):
?>

	<?php
	$repeater = get_field('downloads');
	
	// Order repeater by date
	foreach( $repeater as $key => $row ):
		$column_id[ $key ] = $row['date'];
	endforeach;
	array_multisort( $column_id, SORT_DESC, $repeater );
	
	// 
	foreach( $repeater as $row ) :
	{
		// Output month
		$date = DateTime::createFromFormat('Ymd', $row['date']);
		if ($currMonth != $date->format('F Y')) :
	   {
		 echo '<h6 class="month">' . $date->format('F Y') . '</h6>';
		 $currMonth = $date->format('F Y');
	   }
		endif;
		
		// Output download
		echo '<p>'; 
			// echo $date->format('j<\s\u\p>S</\s\u\p> F Y') . '<br />';
			echo '<a href="' . $row["file"] . '" title="Download: ' . $row["title"] . '">' . $row["title"] . '</a>';
		echo '</p>';
	}
	endforeach;
	?>

<?php 
endif;
*/
?>