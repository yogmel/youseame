<?php
/*
 * Setwood Child Theme Function File
 * You can modify any function here. Simply copy any function from parent and paste here. It will override the parent's version.
 */

/**
 * Setwood automatically loads the core CSS even if using a child theme as it is more efficient
 * than @importing it in the child theme style.css file.
 *
 * Uncomment the line below if you'd like to disable the Setwood Core CSS.
 *
 * If you don't plan to dequeue the Setwood Core CSS you can remove the subsequent line and as well
 * as the setwood_child_theme_dequeue_style() function declaration.
 */
//add_action( 'wp_enqueue_scripts', 'setwood_child_theme_dequeue_style', 999 );

/**
 * Dequeue the Storefront Parent theme core CSS
 */
function setwood_child_theme_dequeue_style() {
    wp_dequeue_style( 'setwood-style' );
    wp_dequeue_style( 'setwood-woocommerce-style' );
}

/**
 * Note: DO NOT! alter or remove the code above this text and only add your custom PHP functions below this text.
 */
