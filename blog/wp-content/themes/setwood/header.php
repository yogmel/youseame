<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package setwood
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-118265264-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-118265264-1');
</script>

<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    
<div id="page" class="hfeed site">
    <?php
    do_action( 'setwood_before_header' ); ?>

    <header id="masthead" class="site-header" style="<?php setwood_header_styles(); ?>">

    <?php
    $setwood_header_layout = get_theme_mod( 'header_layout', '1' );
    
    do_action( 'setwood_header_'.$setwood_header_layout.'' ); ?>
    </header><!-- #masthead -->

    <?php
    do_action( 'setwood_before_content' ); ?>

    <div id="content" class="site-content" tabindex="-1">
        <div class="col-full">
    <?php
    do_action( 'setwood_content_top' ); ?>