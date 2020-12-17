<?php if(have_posts()) : while(have_posts()) : the_post() ?>
        <section>
            <?php if(has_post_thumbnail()): ?>
                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="img-fluid img-thumbnail shadow-sm rounded">
            <?php else: ?>
                <img src="<?php echo get_template_directory_uri()."/assets/img/illustrate.jpeg"; ?>" alt="<?php the_title(); ?>" class="img-fluid img-thumbnail shadow-sm rounded">
            <?php endif;?>
        </section>

        <section class="bg-white rounded shadow-ts p-1 flex-between">
                <span class="capitalize">Author: <?php the_author(); ?></span>
                <span class="capitalize">Date: <?php the_date(); ?></span>
        </section><hr>

        <section class="dont-break">
                <?php the_content(); ?>
        </section><hr class="mt-2 mb-2">

<?php endwhile; else:  endif; ?>