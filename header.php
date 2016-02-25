<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/logo.png" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/logo.png" rel="apple-touch-icon-precomposed">

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<!-- Chrome, Firefox OS and Opera -->
		<meta name="theme-color" content="<?php echo get_theme_mod('primary_color', '#ee6e73'); ?>">
		<!-- Windows Phone -->
		<meta name="msapplication-navbutton-color" content="<?php echo get_theme_mod('primary_color', '#ee6e73'); ?>">
		<!-- iOS Safari -->
		<meta name="apple-mobile-web-app-status-bar-style" content="<?php echo get_theme_mod('primary_color', '#ee6e73'); ?>">

		<style>
			.custom-color
			{
				background-color: <?php echo get_theme_mod('primary_color', '#ee6e73'); ?> !important;
			}
		</style>

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>
        <div class="section header-section custom-color" id="index-banner">
	        <div class="container" onclick="location.href='<?php bloginfo('url'); ?>';" style="cursor: pointer;">
				<div class="row">
	<!-- 					<div class="col s12 m3" style="height: 100%">
						<img src="ms-icon-310x310.png" style="float:left">
					</div> -->
					<div class="col s12 hide-on-med-and-up center-align">
						<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" class="logo-img" style="height: 165px;">
					</div>
					<div class="col s12 m12 hide-on-small-only">
						<h1 class="header center-on-med-and-down"><?php bloginfo('name'); ?></h1>
						<h4 class ="light grey-text text-lighten-4 center-on-med-and-down"><?php bloginfo('description'); ?></h4>
					</div>
				</div>
			</div>
		</div>

		<div class="small-header z-depth-2 nav-up custom-color">
	        <div class="">
	        	<div class="valign-wrapper" style="height: 100%; float: left;padding-left: 16px">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" class="logo-img valign" style="height: 32px;">
				</div>
				<div class="valign-wrapper" style="height: 100%; float: right;padding-right: 16px; width:48px">
					<i class="material-icons search-button" onclick="document.getElementById('blogSearch').focus();" style="cursor: pointer;">search</i>
				</div>
				<h4 class="light grey-text text-lighten-4 center" onclick="location.href='<?php bloginfo('url'); ?>';" style="cursor: pointer;"><?php echo $_SESSION["pg_nm"];?></h4>
			</div>
		</div>


	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header 
			<header class="header clear" role="banner">
					<nav class="nav" role="navigation">
						<div class="nav-wrapper">
      						<a href="#" class="brand-logo">Logo</a>
      						<ul id="nav-mobile" class="right hide-on-med-and-down">
								<?php html5blank_nav(); ?>
						</div>
					</nav>

			</header>
			<!-- /header -->
