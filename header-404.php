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
				
				<nav class="nav-collapse" style="-webkit-transition: max-height 250ms; transition: max-height 250ms; position: relative;" aria-hidden="false">
					<nav id="menu-primary" class="menu"><ul id="menu-primary-items" class="menu-items"><li id="menu-item-7" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-2 current_page_item menu-item-7"><a rel="m_PageScroll2id" href="http://justineuteneier.com/">Home</a></li>
<li id="menu-item-8" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8"><a rel="m_PageScroll2id" href="http://justineuteneier.com/#portfolio-items" class="_mPS2id-h">Portfolio</a></li>
<li id="menu-item-9" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9"><a rel="m_PageScroll2id" href="http://justineuteneier.com/#about" class="_mPS2id-h">About</a></li>
<li id="menu-item-10" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-10"><a rel="m_PageScroll2id" href="http://justineuteneier.com/#contact" class="_mPS2id-h">Contact</a></li>
</ul></nav>				</nav>
				
			</div>
		</div>
	</header><!-- #header -->