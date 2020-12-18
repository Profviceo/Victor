<?php

//load resource starts
function loadResource(){

    wp_register_style('mainCss', get_template_directory_uri()."/assets/css/main.css", array(), false, 'all');

    wp_register_style('styleCss', get_template_directory_uri()."/assets/css/style.css", array(), false, 'all');

    wp_register_script('mainJs', get_template_directory_uri()."/assets/js/main.js", array(), false, true);

    wp_enqueue_style('mainCss');
    wp_enqueue_style('styleCss');
    wp_enqueue_script('mainJs');
}

add_action('wp_enqueue_scripts', 'loadResource');

//load resource ends

//navigation functionality starts
add_theme_support('menus');
register_nav_menus(
    array(
        'header-menu' => 'Header Menu Location',
        'footer-menu' => 'Footer Menu Location',
    )
);
//navigations functionality ends

// Sidebar Functionality starts here
    add_theme_support('widgets');
    function theme_sidebars(){
        register_sidebar(
            array(
                'name' => 'Blog Sidebar',
                'id' => 'blog-sidebar',
                'before-title' => '<h4 class="widget-title">',
                'after-title' => '</h4>',
            ),
        );

        register_sidebar(
            array(
                'name' => 'Projects Sidebar',
                'id' => 'project-sidebar',
                'before-title' => '<h4 class="widget-title">',
                'after_title' => '</h4>',
            ),
        );
    }

    add_action('widgets_init', 'theme_sidebars');
// sidebar functionality ends here

//post thumbnails support starts

add_theme_support('post-thumbnails');


//post thumbanils support ends


//custom image sizes starts
add_image_size('image-large', 800, 500, true);
add_image_size('image-small', 300,200, true);

//custom image sizes ends

// Custom Project Post type functionality 
function project_post_type(){
    $projects = array(
        'labels' => array(
            'name' => 'Projects',
            'singular_name' => 'Project',
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
    );

    register_post_type('projects', $projects);
}
add_action('init', 'project_post_type');
// end

// start
function add_category_to_project_post_type(){
    $technologies = array(
        'labels' => array(
            'name' => 'Technologies',
            'singular_name' => 'Technology',
        ),
        'public' => true,
        'hierarchical' => true,
    );

    register_taxonomy('technologies', array('projects') ,$technologies );
} 
add_action('init', 'add_category_to_project_post_type');
// end

