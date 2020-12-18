<?php get_header(''); ?>
<section class="header m-body bg-secondary p-1 center capitalize shadow-ts">
    <h1>My Blog</h1>
</section>

<section class="container blog m-body">
    <?php get_template_part('includes/section', 'archive'); ?>
    <?php previous_posts_link(); ?>
    <?php next_posts_link(); ?>
</section>

<?php get_footer(); ?>
