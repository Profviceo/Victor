<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php the_title(); ?></title>
    <?php get_template_part('includes/section', 'metas'); ?>

    
    <?php wp_head();?>
</head>
<body>

<!-- mobile menu -->
<section class="header-container">
    <header class="mobile flex-between align-items-center bg-white shadow-sm" id="mobile">
        <div class="logo flex-center align-items-end">
            <img src="<?php echo get_template_directory_uri().'/assets/img/logo.png' ?>" alt="<?php the_title(); ?>">
            <span>Victor</span>
        </div>

        <div class="toggle" id="toggle">
            <svg width="18" height="11" viewBox="0 0 18 11" fill="none" xmlns="http://www.w3.org/2000/svg" style="margin-left:20px"><path d="M0 0H18V1H0V0Z" fill="#000014"></path><path d="M0 10H18V11H0V10Z" fill="#000014"></path></svg>            
        </div>

        <section class="menu opacity d-none" id="nav_modal">
            <div class="menu">
                <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'header-menu'
                        )
                    );
                ?>

                <div class="credentials">
                    <a href="/request-qoute" class="bg-secondary p-1 rounded ">Request Quote</a>
                </div>            
            </div>            
        </section>
    </header>
    
</section>

<!-- desktop -->
<section class=" shadow-sm">
    <header class="desktop desktop-white flex-between align-items-center shadow-sm">
        <div class="logo flex-center align-items-end">
            <img src="<?php echo get_template_directory_uri().'/assets/img/logo.png' ?>" alt="<?php the_title(); ?>">
            <span>Victor</span>
        </div>
        
        <div class="menu">
            <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'header-menu'
                    )
                );
            ?>
        </div>

        <div class="credentials mr-1">
            <a href="/request-qoute">Request Quote</a>
        </div>
    </header>
</section>
