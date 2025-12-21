<?php

function vdevarejo_enqueue_styles() {
    wp_enqueue_style( 'vdevarejo-style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'vdevarejo_enqueue_styles' );

?>
