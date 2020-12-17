<?php if(have_posts()) : while(have_posts()) :  the_post(); ?>
    <div class="card">
        <div class="header bg-white rounded mb-1">
            <?php if(has_post_thumbnail()): ?>
                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="img-fluid img-thumbnail">
            <?php else: ?>
                <img src="<?php echo get_template_directory_uri()."/assets/img/illustrate.jpeg"; ?>" alt="<?php the_title(); ?>" class="img-fluid img-thumbnail">
            <?php endif;?>

            <p class="unique center shadow-sm p-1"><?php the_title(); ?></p>          
        </div>

        <div class="body">
            <div class="bg-white rounded shadow-sm p-1 mb-1">
                <?php the_excerpt(); ?>
            </div>
            <div class="bg-white rounded shadow-sm flex-between p-1">
                <span class="capitalize"><?php the_author(); ?></span>

                <span><?php the_date(); ?></span>
            </div>
        </div>

        <a href="<?php the_permalink(); ?>">
            <div class="btn-forward">
                Read More
            </div>            
        </a>

        
    </div>


<?php endwhile; else: endif; ?>