<?php

function seramitae_setup(){
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'seramitae_setup');

function seramitae_scripts(){
    wp_enqueue_style('main-style', get_stylesheet_uri());

    wp_enqueue_style('google-fonts',
        'https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&family=Roboto:wght@300;400&display=swap'
    );
}

add_action('wp_enqueue_scripts', 'seramitae_scripts');

?>