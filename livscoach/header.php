<!DOCTYPE html>
<html lang="sv">

<head>
    <!-- Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body class="animate__animated animate__fadeIn">
    <header class="header">
        <div class="header__title-container">
            <a class="header__site-title" href="<?php echo home_url(); ?>">
                <?php if (function_exists('the_custom_logo')) {
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo = wp_get_attachment_image_src($custom_logo_id);
                }
                ?>
                <img class="logo" src="<?php echo $logo[0] ?>" alt="logo">
                <h4 class="header__h4-title">Livscoach.nu</h4>

            </a>

            <nav class="navbar navbar-expand-lg navbar-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                    aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="bar bar1"></span>
                    <span class="bar bar2"></span>
                    <span class="bar bar3"></span>
                </button>
            </nav>

        </div>

        <div class="header__flex-container d-flex">
            <?php
            $subtitle = get_theme_mod('header_subtitle', '');
            $subtitle_link = get_theme_mod('header_subtitle_link', '');

            if (!empty($subtitle_link)) {
                echo '<a href="' . esc_url($subtitle_link) . '" class="header__subtitle" target="_blank">' . esc_html($subtitle) . '</a>';
            } else {
                echo '<p class="header__subtitle">' . esc_html($subtitle) . '</p>';
            }
            ?>
            <div class="collapse navbar-collapse animate__animated animate__fadeInLeft" id="navigation">
                <?php
                wp_nav_menu(
                    array(
                        'menu' => 'primary',
                        'container' => '',
                        'theme_location' => 'primary',
                        'items_wrap' => '<ul class="navbar-nav">%3$s</ul>',
                    )
                );
                ?>
            </div>
        </div>

    </header>


</body>

</html>