<?php 

    function livscoach_theme_support() {
        add_theme_support('title-tag');
    }

    add_action('after_setup_theme','livscoach_theme_support');

    function livscoach_register_styles(){
        wp_enqueue_style('livscoach', get_template_directory_uri() . "/style.css", array('livscoach-bootstrap'), '1.0', 'all');
        wp_enqueue_style('livscoach-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '1.0', 'all');
        wp_enqueue_style('livscoach-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css", array(), '5.3.2', 'all');
    }
        add_action('wp_enqueue_scripts', 'livscoach_register_styles');

    function livscoach_register_scripts(){
        wp_enqueue_script('livscoach-jquery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js', array(), '3.2.1', true);
        wp_enqueue_script('livscoach-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js', array(), '1.12.9', true);
        wp_enqueue_script('livscoach-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js', array(), '4.0.0', true);
        wp_enqueue_script('livscoach-main', get_template_directory_uri() . "/assets/javascript/main.js", array(), '1.0', true);
    }
        add_action('wp_enqueue_scripts', 'livscoach_register_scripts');

?>