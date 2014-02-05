<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
<title><?php hybrid_document_title(); ?></title>
<meta name="viewport" content="width=device-width,initial-scale=1" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="stylesheet" href="http://justineuteneier.com/wp-content/themes/portfolio/responsive-nav.css">
<link rel="stylesheet" href="http://justineuteneier.com/wp-content/themes/portfolio/responsive-nav-advanced.css">
<?php wp_head(); // wp_head ?>
<script type="text/javascript"></script>
</head>

<body class="<?php hybrid_body_class(); ?>">
	
	<header id="header">
		<div class="row">
			<div class-"col-12">
				
				<div id="logo">
  				<a href="<?php echo get_settings('home'); ?>" class="logo">Justin Euteneier</a>
  				</div>

				<ul class="social">
					<li class="linkedin"><a href="http://linkedin.com/in/justineuteneier" title="View My Profile" target="_blank">Justin Euteneier Linked In Profile</a></li>
					<li class="twitter"><a href="http://twitter.com/JustinEuteneier" title="Tweets!" target="_blank">Justin Euteneier Twitter Feed</a></li>
				</ul>
				
				<nav class="nav-collapse">
					<?php get_template_part( 'menu', 'primary' ); // Loads the menu-primary.php template. ?>
				</nav>
				
			</div>
		</div>
	</header><!-- #header -->