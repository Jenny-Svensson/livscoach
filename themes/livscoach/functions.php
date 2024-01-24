<?php

function livscoach_theme_support()
{
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
}

add_action('after_setup_theme', 'livscoach_theme_support');

/* HEADERMENU settings */
function livscoach_menus()
{
    $menus = array(
        "primary" => "Header menu items",
    );
    register_nav_menus($menus);
}

add_action('init', 'livscoach_menus');


/* SUBTITLE settings */
function livscoach_subtitle($wp_customize)
{
    $wp_customize->add_setting(
        'header_subtitle',
        array(
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );
    $wp_customize->add_control(
        'header_subtitle',
        array(
            'label' => __('Header Subtitle', 'theme'),
            'section' => 'title_tagline',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting(
        'header_subtitle_link',
        array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw',
        )
    );
    $wp_customize->add_control(
        'header_subtitle_link',
        array(
            'label' => __('Header Subtitle Link', 'theme'),
            'section' => 'title_tagline',
            'type' => 'url',
        )
    );
}

add_action('customize_register', 'livscoach_subtitle');

/* FOOTER settings */
function livscoach_footer($wp_customize)
{
    $wp_customize->add_section(
        'footer_settings',
        array(
            'title' => __('Footer Settings', 'text_domain'),
            'priority' => 30,
        )
    );

    /* footer adress settings */
    $wp_customize->add_setting(
        'footer_adress',
        array(
            'default' => '',
            'transport' => 'refresh',
        )
    );

    $wp_customize->add_control(
        'footer_adress',
        array(
            'label' => __('Adress', 'text_domain'),
            'section' => 'footer_settings',
            'type' => 'text',
            'placeholder' => __('Enter adress here...', 'text_domain'),
        )
    );

    /* footer phone settings */
    $wp_customize->add_setting(
        'footer_phone',
        array(
            'default' => '',
            'transport' => 'refresh',
        )
    );

    $wp_customize->add_control(
        'footer_phone',
        array(
            'label' => __('Telefonnummer', 'text_domain'),
            'section' => 'footer_settings',
            'type' => 'text',
            'placeholder' => __('Enter phonenumber here...', 'text_domain'),
        )
    );

    /* footer mail settings */
    $wp_customize->add_setting(
        'footer_mail',
        array(
            'default' => '',
            'transport' => 'refresh',
        )
    );

    $wp_customize->add_control(
        'footer_mail',
        array(
            'label' => __('Email', 'text_domain'),
            'section' => 'footer_settings',
            'type' => 'text',
            'placeholder' => __('Enter email here...', 'text_domain'),
        )
    );

}

add_action('customize_register', 'livscoach_footer');

/* STYLES settings */
function livscoach_register_styles()
{
    wp_enqueue_style('livscoach', get_template_directory_uri() . "/style.css", array('livscoach-bootstrap'), '1.0', 'all');
    wp_enqueue_style('livscoach-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '1.0', 'all');
    wp_enqueue_style('livscoach-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css", array(), '5.3.2', 'all');
    wp_enqueue_style('livscoach-animatecss', "https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css", array(), '4.1.1', 'all');


}
add_action('wp_enqueue_scripts', 'livscoach_register_styles');

/* SCRIPTS settings */
function livscoach_register_scripts()
{
    wp_enqueue_script('livscoach-jquery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js', array(), '3.2.1', true);
    wp_enqueue_script('livscoach-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js', array(), '1.12.9', true);
    wp_enqueue_script('livscoach-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js', array(), '4.0.0', true);
    wp_enqueue_script('livscoach-main', get_template_directory_uri() . "/assets/javascript/main.js", array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'livscoach_register_scripts');

?>