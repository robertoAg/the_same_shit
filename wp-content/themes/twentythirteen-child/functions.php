<?php
/*
add_theme_support( 'infinite-scroll', array(
'container' => 'content',
'footer' => 'page',
) );
*/

if ( ! function_exists( 'twentythirteen_entry_meta' ) ) :
/**
 * Print HTML with meta information for current post: categories, tags, permalink, author
 *
 * ^Remake twentythirteen_entry_meta() from parent theme.
 *
 * @since Twenty Thirteen 1.0
 */
function twentythirteen_entry_meta() {
	
	$categories = get_the_category();
	if ( $categories ) {
		$actual_category = $categories[0]->name;
		if ( $actual_category == '9gag' ){
			echo '<img src="' . get_template_directory_uri() . '-child/images/9gagLogo.jpg" class="iCategory-post" alt="9gag Logo"/>'; 
		}
	}
}
endif;

?>