<?php
/*
 * Plugin Name: movie_plugin
 * Plugin URI: 
 * Description: technical task
 * Author: hager
 * Author URI:
 * Version: 0.1
 */
if(!defined('ABSPATH'))
	exit;

function movie_post_type()
{
	$singular = 'Movie';
	$plural = 'Movies';
	$labels = array(
		'name'               => $plural,
		'singular_name'      => $singular,
		'new_item'           => 'New ' . $singular,
		'add_new_item'       => 'Add New ' . $singular,
		'edit_item'          => 'Edit ' . $singular,
		'view_item'          => 'View ' . $singular,
		'view_items'         => 'View ' . $plural,
		'not_found'          => 'No ' . $plural . ' Found',
		'not_found_in_trash' => 'No ' . $plural . ' In Trash'
	);
	$args = array(
		'label'              => 'Movie',
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'show_in_admin_bar'  => true,
		'menu_position'      => 6,
		'menu_icon'          => 'dashicons-video-alt3',
		'can_export'         => true,
		'delete_with_user'   => false,
		'hierarchical'       => false,
		'has_archive'        => true,
		'query_var'          => true,
		'capability_type'    => 'post',
		'map_meta_cap'       => true,
		'rewrite'            => array( 'slug' => 'movies', 'with_front' => true , 'pages' => true , 'feeds' => true),
		'supports'           => array( 'title', 'editor','thumbnail')
	);
	register_post_type('movie', $args);
}
add_action( 'init', 'movie_post_type' );



function lang_meta_box()
{
	add_meta_box('lang_box_id', 'Language', 'lang_callback','movie');
}

add_action( 'add_meta_boxes', 'lang_meta_box' );

function lang_callback($post)
{ 
	$lang_meta = get_post_meta( $post->ID );
	?>
<div>
	<label for = "lang"> Language: </label>

	<input type="text" name="lang" id = "lang" value="<?php if(!empty($lang_meta['lang'])) echo esc_attr($lang_meta['lang'][0]); ?>" />
</div>
	<?php
}

function lang_meta_save($post_id)
{
	if(isset($_POST['lang']))
	{
		update_post_meta($post_id, 'lang', sanitize_text_field($_POST['lang']));
	}
}

add_action('save_post', 'lang_meta_save'); 




function budget_meta_box()
{
	add_meta_box('budget_box_id', 'Budget', 'budget_callback','movie');
}

add_action( 'add_meta_boxes', 'budget_meta_box' );

function budget_callback($post)
{ 
	$budget_meta = get_post_meta( $post->ID );
	?>
<div>
	<label for = "budget"> Budget: </label>

	<input type="number" name="budget" id = "budget" value="<?php if(!empty($budget_meta['budget'])) echo esc_attr($budget_meta['budget'][0]); ?>" />
</div>
	<?php
}

function budget_meta_save($post_id)
{
	if(isset($_POST['budget']))
	{
		update_post_meta($post_id, 'budget', sanitize_text_field($_POST['budget']));
	}
}

add_action('save_post', 'budget_meta_save'); 





function profit_meta_box()
{
	add_meta_box('profit_box_id', 'Profit', 'profit_callback','movie');
}

add_action( 'add_meta_boxes', 'profit_meta_box' );

function profit_callback($post)
{ 
	$profit_meta = get_post_meta( $post->ID );
	?>
<div>
	<label for = "profit"> Profit: </label>

	<input type="number" name="profit" id = "profit" value="<?php if(!empty($profit_meta['profit'])) echo esc_attr($profit_meta['profit'][0]); ?>" />
</div>
	<?php
}

function profit_meta_save($post_id)
{
	if(isset($_POST['profit']))
	{
		update_post_meta($post_id, 'profit', sanitize_text_field($_POST['profit']));
	}
}

add_action('save_post', 'profit_meta_save'); 






function rdate_meta_box()
{
	add_meta_box('rdate_box_id', 'Release Date', 'rdate_callback','movie');
}

add_action( 'add_meta_boxes', 'rdate_meta_box' );

function rdate_callback($post)
{ 
	$rdate_meta = get_post_meta( $post->ID );
	?>
<div>
	<label for = "rdate"> Release Date: </label>

	<input type="date" name="rdate" id = "rdate" value="<?php if(!empty($rdate_meta['rdate'])) echo esc_attr($rdate_meta['rdate'][0]); ?>" />
</div>
	<?php
}

function rdate_meta_save($post_id)
{
	if(isset($_POST['rdate']))
	{
		update_post_meta($post_id, 'rdate', sanitize_text_field($_POST['rdate']));
	}
}

add_action('save_post', 'rdate_meta_save'); 



function gross_meta_box()
{
	add_meta_box('gross_box_id', 'Gross', 'gross_callback','movie');
}

add_action( 'add_meta_boxes', 'gross_meta_box' );

function gross_callback($post)
{ 
	$gross_meta = get_post_meta( $post->ID );
	?>
<div>
	<label for = "gross"> Gross: </label>

	<input type="number" name="gross" id = "gross" value="<?php if(!empty($gross_meta['gross'])) echo esc_attr($gross_meta['gross'][0]); ?>" />
</div>
	<?php
}

function gross_meta_save($post_id)
{
	if(isset($_POST['gross']))
	{
		update_post_meta($post_id, 'gross', sanitize_text_field($_POST['gross']));
	}
}

add_action('save_post', 'gross_meta_save'); 



function actor_post_type()
{
	$singular = 'Actor';
	$plural = 'Actors';
	$labels = array(
		'name'               => $plural,
		'singular_name'      => $singular,
		'new_item'           => 'New ' . $singular,
		'add_new_item'       => 'Add New ' . $singular,
		'edit_item'          => 'Edit ' . $singular,
		'view_item'          => 'View ' . $singular,
		'view_items'         => 'View ' . $plural,
		'not_found'          => 'No ' . $plural . ' Found',
		'not_found_in_trash' => 'No ' . $plural . ' In Trash'
	);
	$args = array(
		'label'              => 'Actor',
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'show_in_admin_bar'  => true,
		'menu_position'      => 7,
		'menu_icon'          => 'dashicons-admin-users',
		'can_export'         => true,
		'delete_with_user'   => false,
		'hierarchical'       => false,
		'has_archive'        => true,
		'query_var'          => true,
		'capability_type'    => 'post',
		'map_meta_cap'       => true,
		'rewrite'            => array( 'slug' => 'actors', 'with_front' => true , 'pages' => true , 'feeds' => true),
		'supports'           => array( 'title', 'editor','thumbnail')
	);
	register_post_type('actor', $args);
}
add_action( 'init', 'actor_post_type' );



function bio_meta_box()
{
	add_meta_box('bio_box_id', 'Bio', 'bio_callback','actor');
}

add_action( 'add_meta_boxes', 'bio_meta_box' );

function bio_callback($post)
{ 
	$bio_meta = get_post_meta( $post->ID );
	?>
<div>
    <textarea name="bio" id = "bio" rows="4" cols="50">
        <?php if(!empty($bio_meta['bio'])) echo esc_attr($bio_meta['bio'][0]); ?>
    </textarea>
</div>
	<?php
}

function bio_meta_save($post_id)
{
	if(isset($_POST['bio']))
	{
		update_post_meta($post_id, 'bio', sanitize_text_field($_POST['bio']));
	}
}

add_action('save_post', 'bio_meta_save'); 






function age_meta_box()
{
	add_meta_box('age_box_id', 'Age', 'age_callback','actor');
}

add_action( 'add_meta_boxes', 'age_meta_box' );

function age_callback($post)
{ 
	$age_meta = get_post_meta( $post->ID );
	?>
<div>
	<label for = "age"> Age: </label>

	<input type="number" name="age" id = "age" value="<?php if(!empty($age_meta['age'])) echo esc_attr($age_meta['age'][0]); ?>" />
</div>
	<?php
}

function age_meta_save($post_id)
{
	if(isset($_POST['age']))
	{
		update_post_meta($post_id, 'age', sanitize_text_field($_POST['age']));
	}
}

add_action('save_post', 'age_meta_save'); 



function award_meta_box()
{
	add_meta_box('award_box_id', 'Awards', 'award_callback','actor');
}

add_action( 'add_meta_boxes', 'award_meta_box' );

function award_callback($post)
{ 
	$award_meta = get_post_meta( $post->ID );
	?>
<div>
	<label for = "award"> Awards: </label>

	<input type="text" name="award" id = "award" value="<?php if(!empty($award_meta['award'])) echo esc_attr($award_meta['award'][0]); ?>" />
</div>
	<?php
}

function award_meta_save($post_id)
{
	if(isset($_POST['award']))
	{
		update_post_meta($post_id, 'award', sanitize_text_field($_POST['award']));
	}
}

add_action('save_post', 'award_meta_save'); 

function article_post_type()
{
	$singular = 'Article';
	$plural = 'Articles';
	$labels = array(
		'name'               => $plural,
		'singular_name'      => $singular,
		'new_item'           => 'New ' . $singular,
		'add_new_item'       => 'Add New ' . $singular,
		'edit_item'          => 'Edit ' . $singular,
		'view_item'          => 'View ' . $singular,
		'view_items'         => 'View ' . $plural,
		'not_found'          => 'No ' . $plural . ' Found',
		'not_found_in_trash' => 'No ' . $plural . ' In Trash'
	);
	$args = array(
		'label'              => 'Article',
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'show_in_admin_bar'  => true,
		'menu_position'      => 8,
		'menu_icon'          => 'dashicons-media-text',
		'can_export'         => true,
		'delete_with_user'   => false,
		'hierarchical'       => false,
		'has_archive'        => true,
		'query_var'          => true,
		'capability_type'    => 'post',
		'map_meta_cap'       => true,
		'rewrite'            => array( 'slug' => 'articles', 'with_front' => true , 'pages' => true , 'feeds' => true),
		'supports'           => array( 'title', 'editor','thumbnail','excerpt','author')
	);
	register_post_type('article', $args);
}
add_action( 'init', 'article_post_type' );

function category_taxonomy()
{
	$singular = 'Category';
	$plural = 'Categories';
	$labels = array(
		'name'                       => $plural,
		'singular_name'              => $singular,
		'search_items'               => 'Search ' . $plural,
		'popular_items'              => 'Popular ' . $plural,
		'all_items'                  => 'All ' . $plural,
		'parent_item'                => 'Parent',
		'parent_item_colon'          => 'Parent',
		'edit_item'                  => 'Edit ' . $singular,
		'update_item'                => 'Update ' . $singular,
		'add_new_item'               => 'Add New ' . $singular,
		'new_item_name'              => 'New ' . $singular . ' Name',
		'separate_items_with_commas' => 'Seperate ' . $plural . ' with commas',
		'add_or_remove_items'        => 'Add or Remove ' . $plural,
		'choose_from_most_used'      => 'Choose from the most used ' . $plural,
		'not_found'                  => 'No ' . $plural . ' Found',
		'menu_name'                  => $plural
	);
	$args = array(
		'hierarchical'       => false,
		'labels'             => $labels,
		'show_ui'            => true,
		'show_admin_column'  => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'category')
	);
	register_taxonomy('category', 'article',$args);
}
add_action( 'init', 'category_taxonomy' );
?>