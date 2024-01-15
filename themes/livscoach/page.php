<?php
get_header();
?>

<section class="about-section content py-5 p-md-5">
    <header class="page-title theme-bg-light text-center gradient py-5">
        <h1 class="heading">
            <?php the_title(); ?>
        </h1>
    </header>

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