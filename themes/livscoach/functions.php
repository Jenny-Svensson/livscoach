<?php 
    function livscoach_register_styles(){

        /*  Enqueue the main theme stylesheet
            Ensure that 'livscoach-bootstrap'-stylesheet as a dependency has already been loaded, before loading 'livscoach'-stylesheet  
        */
        wp_enqueue_style('livscoach', get_template_directory_uri() . "/style.css", array('livscoach-bootstrap'), '1.0', 'all');
        
        // Enqueue Font Awesome stylesheet from a CDN
        wp_enqueue_style('livscoach-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '1.0', 'all');
        
        // Enqueue Bootstrap CSS framework stylesheet from a CDN
        wp_enqueue_style('livscoach-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css", array(), '5.3.2', 'all');
    }

    // Hook the livscoach_register_styles function to the wp_enqueue_scripts action
    add_action('wp_enqueue_scripts', 'livscoach_register_styles');
?>