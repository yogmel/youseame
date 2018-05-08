<?php
/**
 * The template for displaying full width pages.
 *
 * Template Name: Full width
 *
 * @package setwood
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php while ( have_posts() ) : the_post();

				do_action( 'setwood_page_before' );

				get_template_part( 'content', 'page' );

				/**
				 * Functions hooked in to setwood_page_after action
				 *
				 * @hooked setwood_display_comments - 10
				 */
				do_action( 'setwood_page_after' );

			endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
