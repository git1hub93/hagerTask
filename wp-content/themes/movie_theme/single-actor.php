<?php 
$get_lang = $_GET['lang'];
if($get_lang == 'ar')
{
get_header('ar');
the_post();
?>
 <div class = "col-md-5 col-md-push-6 col-single-ar"> 
	   <h2 class = "my-title my-title-ar"> <?php the_title();  ?> </h2>
        <?php         
		               the_post_thumbnail( 'medium',['class' => 'img-responsive my-img']);  
					   $arr = get_post_meta($post->ID);
					   if(!empty($arr['bio'])) 
					   { 
						    echo "<h4 class = 'my-title'> السيرة الذاتية <br>" . esc_attr($arr['bio'][0]) . '</h4>';
					   }
					   ?>
					<div class="content">
					<?php  the_content(); 
					?>
					</div>
					<?php
					 $arr = get_post_meta($post->ID);
					   if(!empty($arr['age'])) 
					   { 
						    echo "<h4 class = 'my-title'> السن " . esc_attr($arr['age'][0]) . '</h4>';
					   }
					   $arr = get_post_meta($post->ID);
					   if(!empty($arr['award'])) 
					   { 
						    echo "<h4 class = 'my-title'> الجوايز " . esc_attr($arr['award'][0]) . '</h4>';
					   }
					?>
			
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
					<?php
					   $arr = get_post_meta($post->ID);
					   if(!empty($arr['bio'])) 
					   { 
						    echo "<h4 class = 'my-title'> Biography: <br>" . esc_attr($arr['bio'][0]) . '</h4>';
					   }
					   ?>
					<div class="content">
					<?php  the_content(); 
					?>
					</div>
					<?php
					 $arr = get_post_meta($post->ID);
					   if(!empty($arr['age'])) 
					   { 
						    echo "<h4 class = 'my-title'> Age: " . esc_attr($arr['age'][0]) . '</h4>';
					   }
					   $arr = get_post_meta($post->ID);
					   if(!empty($arr['award'])) 
					   { 
						    echo "<h4 class = 'my-title'> Awards: " . esc_attr($arr['award'][0]) . '</h4>';
					   }
					?>
				</div>
			</div>
</div>
<?php
get_footer();
}
?>

