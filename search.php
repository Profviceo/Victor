<?php get_header(''); ?>
<section class="header m-body bg-secondary p-1 center capitalize shadow-ts">
    <h1>Search Result for <?php echo get_search_query(); ?></h1>
</section>

<section class="container blog m-body">
    <?php get_template_part('includes/section', 'search'); ?>
    <?php previous_posts_link(); ?>
    <?php next_posts_link(); ?>

</section>

<?php get_footer(); ?>
