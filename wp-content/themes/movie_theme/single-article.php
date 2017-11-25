<?php $get_lang = $_GET['lang'];
if($get_lang == 'en')
{
get_header();
the_post();
?>
 <div class = "col-md-7"> 
	   <h2 class = "my-title"> <?php the_title(); 
	   ?> </h2>
        <?php  the_post_thumbnail( 'medium',['class' => 'img-responsive my-img']);  
			?>
	        <div class = "row my-single-row">
				<div class = "col-md-8">
					<div class="content">
					<?php
					the_content();
					the_excerpt(); ?>
					</div>
				</div>
				<div class = "col-md-4">
					<?php
					   echo "<h4 class = 'my-title'> Author: ";
					   the_author();
					   echo "</h4>";
					   $terms = get_the_terms( $post->ID , 'category' );
					   echo "<h4 class = 'my-title'> Categories: ";
					   foreach($terms as $term) 
					   {
						  echo $term->name . ', ';
					   }
					   echo "</h4>";
					   $arr = get_post_meta($post->ID);
					   if(!empty($arr['_cptr_reviews'])) 
					   { 
						   echo "<h4 class = 'my-title'> Related Movie: ";
						   for($i = 0 ; $i < count($arr['_cptr_reviews']);$i++)
						   {
							   $my_id = esc_attr($arr['_cptr_reviews'][$i]);
							  ?>
							  <a href = "<?php echo esc_url(add_query_arg('lang', 'en', get_permalink($my_id))); ?>"> <?php echo get_the_title($my_id);?> </a>   
							  <?php
						   }
						     echo "</h4>";
					   }
					?>
				</div>
			</div>
</div>
<?php
get_footer();
}
else if ($get_lang == 'ar')
{
	get_header('ar');
    the_post();
	?>
<div class = "col-md-7 col-md-push-4 col-single-ar"> 
	   <h2 class = "my-title"> <?php the_title(); 
	   ?> </h2>
        <?php  the_post_thumbnail( 'medium',['class' => 'img-responsive my-img']);  
			?>
	        <div class = "row">
				<div class = "col-md-8 col-md-push-4">
					<div class="content">
					<?php
					the_content();
					the_excerpt(); ?>
					</div>
				</div>
				<div class = "col-md-4 col-md-pull-8">
					<?php
					   echo "<h4 class = 'my-title my-title-ar'> المؤلف: ";
					   the_author();
					   echo "</h4>";
					   $terms = get_the_terms( $post->ID , 'category' );
					   echo "<h4 class = 'my-title my-title-ar'> الفئة: ";
					   foreach($terms as $term) 
					   {
						  echo $term->name;
					   }
					   echo "</h4>";
					   $arr = get_post_meta($post->ID);
					   if(!empty($arr['_cptr_reviews'])) 
					   { 
						   echo "<h4 class = 'my-title my-title-ar'> فيلم ذو صلة: ";
						   for($i = 0 ; $i < count($arr['_cptr_reviews']);$i++)
						   {
							   $my_id = esc_attr($arr['_cptr_reviews'][$i]);
							  ?>
							  <a href = "<?php echo esc_url(add_query_arg('lang', 'ar', get_permalink($my_id))); ?>"> <?php echo get_the_title($my_id);?> </a>   
							  <?php
						   }
						     echo "</h4>";
					   }
					?>
				</div>
			</div>
</div>
<?php
get_footer();
}
?>

