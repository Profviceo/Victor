<?php 

$posts = get_posts();
$list = [];

foreach($posts as $post){
    $list[] = $post->ID;
    $images[$post->ID] = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID));
}

foreach($)
