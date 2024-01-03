<footer class="footer text-center py-2 theme-bg-dark">
    <h1>footer</h1>
<div id="navigation_footer">
        <?php 
            wp_nav_menu(array(
                'menu' => 'footer', 
                'container' => '', 
                'theme_location' => 'footer',
                'items_wrap' => '<ul class="navbar-nav">%3$s</ul>'
            ));
        ?>
    </div>
       </footer>
   
   </div>
    <?php 
        wp_footer();
    ?>
    

</html> 