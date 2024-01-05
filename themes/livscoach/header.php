<!DOCTYPE html>
<html lang="sv">

<head>
    <!-- Meta -->
    <?php wp_head(); ?>
</head>

<body class="animate__animated animate__fadeIn">
    <header class="header text-center">
        <div class="header__title-container">
            <a class="header__site-title pt-lg-4 mb-0" href="index.html">
                <?php if (function_exists('the_custom_logo')) {
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo = wp_get_attachment_image_src($custom_logo_id);
                }
                ?>
                <img class="mb-1 mx-auto logo" src="<?php echo $logo[0] ?>" alt="logo">
            </a>
            <nav class="header__navbar navbar-expand-lg navbar-dark">
                <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navigation"
                    aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </nav>
        </div>

        <div class="header__flex-container d-flex">
            <p class="header__subtitle">I samarbete med RGA Training Center</p>
            <div id="navigation" class="collapse navbar-collapse animate__animated animate__fadeIn">
                <?php
                wp_nav_menu(
                    array(
                        'menu' => 'primary',
                        'container' => '',
                        'theme_location' => 'primary',
                        'items_wrap' => '<ul class="navbar-nav animate__animated animate__fadeInLeft">%3$s</ul>',
                    )
                );
                ?>
            </div>
        </div>

    </header>

    <div class="main-wrapper">
        <header class="page-title theme-bg-light text-center gradient py-5">
            <h1 class="heading">
                <?php the_title(); ?>
            </h1>
        </header>
    </div>

</body>

</html>