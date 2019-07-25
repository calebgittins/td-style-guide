<!DOCTYPE html>

<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />

<title>Style Guide | <?php bloginfo('name'); ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11" />

<?php wp_head(); ?>

<meta name="robots" content="noindex,nofollow"/>

</head>

<body class="tdsg-body">

	<div class="tdsg-header">
		<div class="tdsg__hamburger js-tdsg-toggle">
			<div class="tdsg__hamburger__line"></div>
			<div class="tdsg__hamburger__line"></div>
			<div class="tdsg__hamburger__line"></div>
		</div>
		<div class="tdsg__logo">
			<h1 class="tdsg__logo__heading"><img src="<?php echo get_stylesheet_directory_uri();?>/images/apple/favicon@2x.png"><?php echo get_bloginfo( 'name' ); ?> <span>Website Style Guide</span></h1>
		</div>
		<ul>
			<li>
				<div class="tdsg__toggle" data-toggle="dark">
					<div class="tdsg__toggle__control"></div>
					<div class="tdsg__toggle__label">Dark Mode</div>
				</div>
			</li>
			<li>
				<a href="<?php echo esc_url(home_url('/')); ?>" target="_blank" class="tdsg__button">View website</a>
			</li>
		</ul>	
	</div>

	<div class="tdsg-nav">
		<div class="tdsg-nav__body">
			<ol class="nav nav--tdsg">				
			</ol>
		</div>
	</div>

	<!-- <div class="tdsg-overlay"></div> -->