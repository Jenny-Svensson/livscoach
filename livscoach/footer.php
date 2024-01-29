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

    <div class="footer__copyright">
        <h4 class="footer__copyright-h4">© 2024 Livscoach.nu - All rights reserved. Theme by 
            <a href="https://github.com/Jenny-Svensson" class="footer__link" target="_blank">Jenny Svensson</a>
        </h4>
    </div>
<?php
wp_footer();
?>
