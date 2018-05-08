<?php
/**
 * The loop template file.
 *
 * Included on pages like archive.php and search.php to display a loop of posts
 * Learn more: http://codex.wordpress.org/The_Loop
 *
 * @package setwood
 */

do_action( 'setwood_loop_before' );

while ( have_posts() ) : the_post();

	// Exclude first post.

	if ( 'true' == setwood_get_option( 'archive_first_full' ) ) :

		if( $wp_query->current_post == 0 ) :
		/**
		 * Include the Post-Format-specific template for the content.
		 * If you want to override this in a child theme, then include a file
		 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
		 */
		
			get_template_part( 'content', 'full' );
		
		else :

			get_template_part( 'content', setwood_get_post_entry_layout() );
			
		endif;

	else:

		get_template_part( 'content', setwood_get_post_entry_layout() );

	endif;

endwhile;


/**
 * Functions hooked in to setwood_paging_nav action
 *
 * @hooked setwood_paging_nav - 10
 */
do_action( 'setwood_loop_after' );
