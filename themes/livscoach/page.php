<?php
get_header();
?>

<section class="about-section content py-5 p-md-5">

    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            the_content();
        }
    }
    ?>

</section>
<?php
get_footer();
?>