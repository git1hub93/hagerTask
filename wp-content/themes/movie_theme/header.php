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
			   <div class="navbar-header">
				  <a class="navbar-brand" href="<?php echo home_url(). '?lang=en'; ?>"> <?php bloginfo('name'); ?> </a>
				</div>
			<ul class="nav navbar-nav">
			  <li><a href="<?php echo home_url(). '?lang=en'; ?>">Movies</a></li>
			  <li><a href="<?php echo get_page_link(26). '?lang=en'; ?>">Actors</a></li>
			  <li><a href="<?php echo get_page_link(28). '?lang=en'; ?>">Articles</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
			   <li><a href="<?php echo home_url(). '?lang=en'; ?>">English</a></li>
			  <li><a href="<?php echo get_page_link(75). '?lang=ar'; ?>">Arabic</a></li>
				</ul>
		  </div>
		</nav>
	 </header>