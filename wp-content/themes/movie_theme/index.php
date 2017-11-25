<?php
$args = array(
    'post_type' => 'movie'
);
get_header();
posts_listing($args);
get_footer();
?>