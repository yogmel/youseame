<?php
/**
 * The template for displaying dynamic home page.
 *
 * Template Name: Home
 *
 * @package setwood
 */

get_header();

do_action( 'setwood_homepage_content_top' );
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main <?php echo entry_classes();?>">

    <?php
    do_action( 'setwood_homepage_content' ); ?>

    <?php 
    query_posts( array(
            'posts_per_page' => 7,
            'paged' => ( get_query_var('page') ? get_query_var('page') : 1 ),
        ));

        if ( have_posts() ) :

            get_template_part( 'loop' );
        else :

            get_template_part( 'content', 'none' );
        endif;
    ?>
    </main><!-- #main -->
</div><!-- #primary -->

<?php
do_action( 'setwood_sidebar' );
get_footer();
