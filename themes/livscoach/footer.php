<footer class="footer text-center py-4 theme-bg-dark">
    <h1 class="footer__title">Livscoach.nu | Olga Anton</h1>

    <div class="footer__content">
        <a class="footer__logo pt-lg-4 mb-0" href="index.html">
            <?php if (function_exists('the_custom_logo')) {
                $custom_logo_id = get_theme_mod('custom_logo');
                $logo = wp_get_attachment_image_src($custom_logo_id);
            }
            ?>
            <img class="mb-1 mx-auto logo" src="<?php echo $logo[0] ?>" alt="logo">
        </a>

        <table>
            <tr>
                <td>Baragatan 3, 212 28 Malmö</td>
            </tr>
            <tr>
                <td>+46 765 545 34</td>
            </tr>
            <tr>
                <td>olga@livscoach.nu</td>
            </tr>
        </table>
    </div>
</footer>

<?php
wp_footer();
?>