<?php
/**
 * The template for displaying search results pages.
 *
 * @package setwood
 */

get_header(); ?>

	<div id="primary" class="content-area">
	
		<main id="main" class="site-main <?php echo entry_classes();?>">

		<?php if ( have_posts() ) : ?>

			<header class="archive-header">
				<h1 class="page-title"><?php printf( esc_attr__( 'Search Results for: %s', 'setwood' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php get_template_part( 'loop' , 'archive' );

		else :

			get_template_part( 'content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
do_action( 'setwood_sidebar' );
get_footer();
