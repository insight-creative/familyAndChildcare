<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package familyAndChildcareResponsive
 */
?>
<!doctype html>

<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="profile" href="http://gmpg.org/xfn/11">

	<link href="/wp-content/themes/familyAndChildcareResponsiveChild/Assets/webfonts/fontawesome-all.css" rel="stylesheet">

	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="  crossorigin="anonymous"></script>

	<?php wp_head(); ?>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<!--
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-110471650-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-110471650-1');
	</script>
-->

	<!-- Google Tag Manager -->
	<!--
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-TPJZV49');</script>
-->
	<!-- End Google Tag Manager -->
</head>

<body <?php body_class(); ?>>

<nav role="navigation" aria-label="mobile navigation">

	<div class = "menu">

			<div class = "linkWrap">

				<ul class="linkList">

					<li>

						<a class="menuLink" href = "/about/" role="link">ABOUT</a><i class="fas fa-chevron-right"></i>

					</li>

					<li>

						<a class="menuLink" href = "/services/" role="link">OUR PROGRAMS</a><i class="fas fa-chevron-right"></i>

					</li>

					<li>

						<a class="menuLink" href = "/projects/" role="link">RESOURCES</a><i class="fas fa-chevron-right"></i>

					</li>

					<li>

						<a class="menuLink" href = "/blog/" role="link">EVENTS</a><i class="fas fa-chevron-right"></i>

					</li>

					<li>

						<a class="menuLink" href = "/blog/" role="link">SUPPORT CHILDREN</a><i class="fas fa-chevron-right"></i>

					</li>

					<li>

						<a class="menuLink" href = "/blog/" role="link">BLOG</a><i class="fas fa-chevron-right"></i>

					</li>

					<li>

						<a class="menuLink" href = "/contact/" role="link">CONTACT</a><i class="fas fa-chevron-right"></i>

					</li>

				</ul>

			</div>

			<div class="closeMenuButton fullWidth centeredContainer" aria-label="close mobile menu" tabindex="0">

				<div id="closeMenuButtonWrapper">

					<h4 id="closeMenuTitle">CLOSE MENU</h4>

				</div>

			</div>

	</div>

</nav>

<div id="page" class="site">

	<header id="masthead" class="site-header" role="banner">

		<nav role="navigation" aria-label="desktop sub navigation">

			<div class="secondaryNavigation">

				<div class="navWidth secondaryMenuWrap">

					<a class="secondaryLink" href="/blog/" role="link">BLOG</a>

					<a class="secondaryLink" href="/events/" role="link">EVENTS</a>

					<i class="fas fa-phone whiteIcon"></i>

					<a class="secondaryLink" href="tel:(920)432-8899" role="link">(920) 432-8899</a>

				</div>

			</div>

		</nav>

		<div id="site-navigation" class="main-navigation">

			<nav role="navigation" aria-label="primary navigation">

				<div class="navWidth menuLinkWrap">

						<a href="https://wordpress-154794-741207.cloudwaysapps.com/" role="link">

							<img src="/wp-content/uploads/2019/02/N.E.WLogoCroppedColorHorizMedium.png" class="siteLogo" alt="Family and Childcare Resources of N.E.W. Logo"></a>

						<ul class="linkList2">

							<li>

								<a class="menuLink" href="/about/" role="link">OUR PROGRAMS</a>

							</li>

							<li>

								<a class="menuLink" href="/about/" role="link">RESOURCES</a>

							</li>

							<li>

								<a class="menuLink" href="/about/" role="link">SUPPORT CHILDREN</a>

							</li>

							<li>

								<a class="menuLink" href="/about/" role="link">ABOUT</a>

							</li>

							<li>

								<a class="menuLink" href="/contact/" role="link">CONTACT</a>

							</li>

						</ul>

						<div class = "menuButtonWrap" aria-label="mobile menu toggle button" tabindex="0">

							<div class = "menuTextWrap">

								<span class = "menuText">MENU</span>

								<span class = "menuBars">

									<span></span>

									<span></span>

									<span></span>

								</span>

							</div>

						</div>

				</div>

			</nav>

		</div><!-- #site-navigation -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
