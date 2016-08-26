<?php

function open_file_styles() {
    wp_register_style('font-awesome', get_template_directory_uri() .
        '/vendor/font-awesome/css/font-awesome.min.css');
    wp_enqueue_style('font-awesome');

    wp_register_style('style', get_template_directory_uri() .
        '/style.css');
    wp_enqueue_style('style');
}

add_action('wp_enqueue_scripts', 'open_file_styles');

function open_file_scripts() {
    wp_deregister_script('jquery');
    wp_register_script('jquery', get_template_directory_uri() .
        '/vendor/jquery/dist/jquery.min.js');
    wp_enqueue_style('jquery');

    wp_register_script('mainScript', get_template_directory_uri() .
        '/scripts/main.js');
    wp_enqueue_style('mainScript');
}

add_action('wp_enqueue_scripts', 'open_file_scripts');