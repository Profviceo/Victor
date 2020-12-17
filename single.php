<?php get_header(); ?>
<section class="flex-around container-full single mt-5">

<section class="main bg-white rounded p-1 shadow-sm" style="width: 60%;">
    <?php get_template_part('includes/section', 'single'); ?>
    <?php comments_template(); ?>
</section>

<section class="sidebar bg-white rounded pl-2 pr-1 pb-2 pt-1 shadow-ts">
    <?php if(is_active_sidebar('blog-sidebar')): ?>
        <?php dynamic_sidebar('blog-sidebar'); ?>
    <?php endif;?>
</section>

</section>

<?php get_footer(); ?>