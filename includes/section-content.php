<?php if(have_posts()) : while(have_posts()): the_post(); ?>

<section class="container-full m-body">
    <?php the_content(); ?>
</section>


<?php endwhile; else: endif; ?>