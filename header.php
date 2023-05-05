<!doctype html>
<html lang="en-GB" data-bs-theme="light">
	<head>
		<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
		<head profile="http://gmpg.org/xfn/11">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
		<meta name="theme-color" media="(prefers-color-scheme: light)" content="<?php the_field('theme_colour_light', 'option'); ?>" />
		<meta name="theme-color" media="(prefers-color-scheme: dark)" content="<?php the_field('theme_colour_dark', 'option'); ?>" />
		<meta name="theme-color" content="<?php the_field('theme_colour_light', 'option'); ?>">
		<meta name="msapplication-navbutton-color" content="<?php the_field('theme_colour_light', 'option'); ?>">
		<meta name="apple-mobile-web-app-status-bar-style" content="<?php the_field('theme_colour_light', 'option'); ?>">
		<meta name="theme-color" media="all" content="<?php the_field('theme_colour_light', 'option'); ?>" />
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
		<?php wp_head(); ?>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	</head>
	<body <?php body_class(); ?>>
		<a class="sr-only sr-only-focusable" href="#main">Skip to main content</a>
		<div class="mobile-overflow">
			<header>
				<div class="container">
					<div class="row">
						<div class="col-lg-2 col-md-8 col-sm-8 col-8">
							<a href="<?php bloginfo('url'); ?>/" title="SITE NAME" class="header-logo"><?php $image = get_field('site_main_logo', 'option');  $size = 'full'; {echo wp_get_attachment_image( $image, $size );} ?></a>
						</div>
						<div class="col-lg-10 col-md-4 co-sm-4 col-4 text-end">
							<nav role="navigation">
								<?php wp_nav_menu( array( 'container_class' => 'menu-main-menu-container', 'menu_class' => 'main-header-menu hide-1000', 'menu_id' => '','theme_location' => 'primary' ) ); ?>
							</nav>
							<div class="menu-nav closed-menu" id="trigger">
								<div class="hamburger-lines">
									<span class="line line1"></span>
									<span class="line line2"></span>
									<span class="line line3"></span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<section class="nav-menu-mobile-new">
					<div class="mobile-main-list">
						<?php wp_nav_menu( array( 'container_class' => '', 'menu_class' => 'mobile-navigation', 'menu_id' => '','theme_location' => 'mobile' ) ); ?>
					</div>
				</section>
			</header>
			<div class="hidden-height"></div>
