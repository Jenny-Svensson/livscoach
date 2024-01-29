<footer class="footer text-center px-5 py-4 theme-bg-dark">
    <h1 class="footer__title">Livscoach.nu</h1>

    <div class="footer__content">
        <div class="footer-text">
            <?php echo get_theme_mod('footer_adress', ''); ?> </br>
            <?php echo get_theme_mod('footer_phone', ''); ?> </br>
            <?php echo get_theme_mod('footer_mail', ''); ?> </br>
        </div>
    </div>
</footer>

<?php
wp_footer();
?>