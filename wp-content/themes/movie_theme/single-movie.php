<?php 
$get_lang = $_GET['lang'];
if($get_lang == 'ar')
{
get_header('ar');
the_post();
?>
 <div class = "col-md-7 col-md-push-4 col-single-ar"> 
	   <h2 class = "my-title my-title-ar"> <?php the_title();  ?> </h2>
        <?php  the_post_thumbnail( 'medium',['class' => 'img-responsive my-img']);  
			?>
	        <div class = "row">
				<div class = "col-md-8 col-md-push-4">
					<div class="content">
					<?php  the_content(); ?>
					</div>
				</div>
				<div class = "col-md-4 col-md-pull-8">
					<?php
					 $arr = get_post_meta($post->ID);
				   if(!empty($arr['lang'])) 
				   { 
					   echo "<h4 class = 'my-title my-title-ar'> اللغة: " . esc_attr($arr['lang'][0]) . '</h4>';
				   }
				   $arr = get_post_meta($post->ID);
				   if(!empty($arr['budget'])) 
				   { 
					    echo "<h4 class = 'my-title my-title-ar'> الميزانية: " . esc_attr($arr['budget'][0]) . '</h4>';
				   }
				   $arr = get_post_meta($post->ID);
				   if(!empty($arr['profit'])) 
				   { 
					    echo "<h4 class = 'my-title my-title-ar'> المكسب: " . esc_attr($arr['profit'][0]) . '</h4>';
				   }
				   $arr = get_post_meta($post->ID);
				   if(!empty($arr['rdate'])) 
				   { 
					    echo "<h4 class = 'my-title my-title-ar'> تاريخ الاصدار: " . esc_attr($arr['rdate'][0]) . '</h4>';
				   }
				   $arr = get_post_meta($post->ID);
				   if(!empty($arr['gross'])) 
				   { 
					    echo "<h4 class = 'my-title my-title-ar'> المجموع: " . esc_attr($arr['gross'][0]) . '</h4>';
				   }
				   $arr = get_post_meta($post->ID);
				   if(!empty($arr['_cptr_actors'])) 
				   { 
					   echo "<h4 class = 'my-title my-title-ar'> الممثلين: ";
					   for($i = 0 ; $i < count($arr['_cptr_actors']);$i++)
					   {
						   $my_id = esc_attr($arr['_cptr_actors'][$i]);
						  ?>
						  <a href = "<?php echo esc_url(add_query_arg('lang', 'ar', get_permalink($my_id))); ?>"> <?php echo get_the_title($my_id);?> </a>   
						  <?php
					   }
					    echo "</h4>";
				   }
				     echo "<h4 class = 'my-title my-title-ar'> مقالات ذات صلة ";
				   $args = array(
					'post_type'		=>	'article',
					'meta_query'	=>	array(
						array(
							'value'	=>	$post->ID,
							'key' => '_cptr_reviews'
						)
					  )
				   );
				  $my_query = new WP_Query( $args );
				  if( $my_query->have_posts() ) {
					  while( $my_query->have_posts() ) {
						$my_query->the_post();
						?>
						 <a href = "<?php echo esc_url(add_query_arg('lang', 'ar', get_permalink(get_the_ID()))); ?>"> <?php echo get_the_title(get_the_ID());?> </a>   
					   <?php
					  } // end while
					} // end if
					 echo "</h4>";
					wp_reset_postdata();
					?>
				</div>
			</div>
</div>
<?php
get_footer();

}
else if($get_lang == 'en')
{
get_header();
the_post();
?>
 <div class = "col-md-7"> 
	   <h2 class = "my-title"> <?php the_title();  ?> </h2>
        <?php  the_post_thumbnail( 'medium',['class' => 'img-responsive my-img']);  
			?>
	        <div class = "row my-single-row">
				<div class = "col-md-8">
					<div class="content">
					<?php  the_content(); ?>
					</div>
				</div>
				<div class = "col-md-4">
					<?php
					 $arr = get_post_meta($post->ID);
				   if(!empty($arr['lang'])) 
				   { 
					   echo "<h4 class = 'my-title'> Language: " . esc_attr($arr['lang'][0]) . '</h4>';
				   }
				   $arr = get_post_meta($post->ID);
				   if(!empty($arr['budget'])) 
				   { 
					    echo "<h4 class = 'my-title'> Budget: " . esc_attr($arr['budget'][0]) . '</h4>';
				   }
				   $arr = get_post_meta($post->ID);
				   if(!empty($arr['profit'])) 
				   { 
					    echo "<h4 class = 'my-title'> Profit: " . esc_attr($arr['profit'][0]) . '</h4>';
				   }
				   $arr = get_post_meta($post->ID);
				   if(!empty($arr['rdate'])) 
				   { 
					    echo "<h4 class = 'my-title'> Release Date: " . esc_attr($arr['rdate'][0]) . '</h4>';
				   }
				   $arr = get_post_meta($post->ID);
				   if(!empty($arr['gross'])) 
				   { 
					    echo "<h4 class = 'my-title'> Gross: " . esc_attr($arr['gross'][0]) . '</h4>';
				   }
				   $arr = get_post_meta($post->ID);
				   if(!empty($arr['_cptr_actors'])) 
				   { 
					   echo "<h4 class = 'my-title'> Actors: ";
					   for($i = 0 ; $i < count($arr['_cptr_actors']);$i++)
					   {
						   $my_id = esc_attr($arr['_cptr_actors'][$i]);
						  ?>
						  <a href = "<?php echo esc_url(add_query_arg('lang', 'en', get_permalink($my_id))); ?>"> <?php echo get_the_title($my_id);?> </a>   
						  <?php
					   }
					    echo "</h4>";
				   }
				     echo "<h4 class = 'my-title'> Related Articles: ";
				   $args = array(
					'post_type'		=>	'article',
					'meta_query'	=>	array(
						array(
							'value'	=>	$post->ID,
							'key' => '_cptr_reviews'
						)
					  )
				   );
				  $my_query = new WP_Query( $args );
				  if( $my_query->have_posts() ) {
					  while( $my_query->have_posts() ) {
						$my_query->the_post();
						?>
						 <a href = "<?php echo esc_url(add_query_arg('lang', 'en', get_permalink(get_the_ID()))); ?>"> <?php echo get_the_title(get_the_ID());?> </a>   
					   <?php
					  } // end while
					} // end if
					 echo "</h4>";
					wp_reset_postdata();
					?>
				</div>
			</div>
</div>
<?php
get_footer();	
}
?>