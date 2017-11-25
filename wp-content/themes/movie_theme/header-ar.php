<!DOCTYPE html>
<html lang = "en">
	<head> 
		<meta charset = "<?php bloginfo('charset'); ?>">	
		<title> <?php bloginfo('name'); ?> </title>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	 <header class = "site-header"> 
		<nav class="navbar navbar-default">
		  <div class="container-fluid">
			   <div class="navbar-header navbar-right">
				  <a class="navbar-brand" href="<?php echo get_page_link(75). '?lang=ar'; ?>"> بوابة الافلام </a>
				</div>
			<ul class="nav navbar-nav navbar-right menu-ar">
			  <li><a href="<?php echo get_page_link(75). '?lang=ar'; ?>">الافلام</a></li>
			  <li><a href="<?php echo get_page_link(73). '?lang=ar'; ?>">الممثلين</a></li>
			  <li><a href="<?php echo get_page_link(71). '?lang=ar'; ?>">المقالات</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-left">
			   <li><a href="<?php echo home_url(). '?lang=en'; ?>">الانجليزية</a></li>
			  <li><a href="<?php echo get_page_link(75). '?lang=ar'; ?>">العربية</a></li>
			</ul>
		  </div>
		</nav>
	 </header>