<?php
function avada_child_styles() {
        wp_enqueue_style( 'avada-child-stylesheet', get_stylesheet_uri());
}
function avada_child_scripts() {
        // TODO: Remove codes below when all plugins & themes support jQuery 1.12.x
        wp_enqueue_script('child_script', get_stylesheet_directory_uri() . '/js/jquery.script.js', array('jquery'), false, true);
}
