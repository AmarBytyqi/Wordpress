<?php

function mytheme_enqueue(){
    wp_enqueue_style('ds-theme-style', get_stylesheet_uri());

    wp_enqueue_style('ds-theme-custom-style', get_template_directory_uri(). '/assets/css/style.css', array());

    wp_enqueue_script('ds-theme-custom-script', get_template_directory_uri(). '/assets/js/script.js', array('jquery'));

    if(is_singular() && comments_open() && get_option('thread_comments')){
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_wnqueue_scripts', 'dstheme_enqueue_assets');
?>