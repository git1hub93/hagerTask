<?php
$args = array(
    'post_type' => 'article'
);
get_header();
posts_listing($args);
get_footer();
?>