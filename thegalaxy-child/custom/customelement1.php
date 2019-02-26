<?php

	if( get_field('column_1') || get_field('column_2') ):
	
		echo '<div class="container"><div class="row gutters">';
		
		if( get_field('column_1') ):
		
			echo '<div class="col_6"><div class="content">';
			
			echo the_field('column_1');
			
			echo '</div></div>';
		
		endif;
		
		if( get_field('column_2') ):
		
			echo '<div class="col_6"><div class="content">';
			
			echo the_field('column_2');
			
			echo '</div></div>';
		
		endif;
		
		echo '</div></div>';
		
	endif;
	
?>