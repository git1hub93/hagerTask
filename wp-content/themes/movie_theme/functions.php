<?php
function add_file()
{	
	wp_enqueue_script( 'wp_myjQuery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', array(), '1.9.1', true);
	wp_enqueue_style( 'wp_mybootstrap_css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' );
	wp_enqueue_script( 'wp_mybootstrap_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js',array( 'wp_myjQuery' ), true);
	wp_enqueue_style( 'wp_mystyle', get_stylesheet_directory_uri() . '/style.css');
	wp_enqueue_script( 'wp_myscript', get_template_directory_uri() . '/script.js', array ( 'wp_myjQuery' ), 1.1, true);
}
add_action('wp_enqueue_scripts','add_file');

function theme_support()
{
	add_theme_support('post-thumbnails');	
}
add_action('after_setup_theme','theme_support');

function posts_listing($args)
{
	$my_posts = new WP_Query($args);
	if($my_posts->have_posts()):
		while($my_posts->have_posts()): 
		   $my_posts->the_post(); 
			?>
			 <div class = "row my-row">
			<div class = "col-md-3 col-md-push-1"> 
			<?php  the_post_thumbnail( 'full',['class' => 'img-responsive my-img']);  ?>
			</div>
			<div class = "col-md-5 col-md-push-1"> 
		   <h2> <a class = "my-title" href = "<?php echo esc_url(add_query_arg('lang', 'en', the_permalink())); ?>"> <?php the_title(); ?> </a> </h2>
		   <p> <?php the_content(); ?> </p>
			</div>
			 </div>
		   <?php
		endwhile;
	else: echo "<h3> No Posts </h3>";
	endif;
	wp_reset_postdata();
}
function posts_listing_ar($args)
{
	$my_posts = new WP_Query($args);
	if($my_posts->have_posts()):
		while($my_posts->have_posts()): 
		   $my_posts->the_post(); 
			?>
			 <div class = "row my-row">
			<div class = "col-md-3 col-md-push-7"> 
			<?php  the_post_thumbnail( 'full',['class' => 'img-responsive my-img']);  ?>
			</div>
			<div class = "col-md-5 col-md-pull-1 col-single-ar"> 
		   <h2> <a class = "my-title my-title-ar" href = "<?php echo esc_url(add_query_arg('lang', 'ar', the_permalink())); ?>"> <?php the_title(); ?> </a> </h2>
		   <div class = "content-ar"> <?php the_content(); ?> </div>
			</div>
			 </div>
		   <?php
		endwhile;
	else: echo "<h3> لا يوجد اى منشورات </h3>";
	endif;
	wp_reset_postdata();
}
?>