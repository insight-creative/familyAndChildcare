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

	<link href="/assets/scss/wp-content/themes/familyAndChildcareResponsiveChild/Assets/webfonts/fontawesome-all.css" rel="stylesheet">

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

<div class = "menu">

		<div class = "linkWrap">

			<ul class="linkList">

				<li>

					<a class="menuLink" href = "/about/">ABOUT</a><i class="fas fa-chevron-right"></i>

				</li>

				<li>

					<a class="menuLink" href = "/services/">OUR PROGRAMS</a><i class="fas fa-chevron-right"></i>

				</li>

				<li>

					<a class="menuLink" href = "/projects/">RESOURCES</a><i class="fas fa-chevron-right"></i>

				</li>

				<li>

					<a class="menuLink" href = "/blog/">EVENTS</a><i class="fas fa-chevron-right"></i>

				</li>

				<li>

					<a class="menuLink" href = "/blog/">SUPPORT CHILDREN</a><i class="fas fa-chevron-right"></i>

				</li>

				<li>

					<a class="menuLink" href = "/blog/">BLOG</a><i class="fas fa-chevron-right"></i>

				</li>

				<li>

					<a class="menuLink" href = "/contact/">CONTACT</a><i class="fas fa-chevron-right"></i>

				</li>

			</ul>

		</div>

		<div class="closeMenuButton fullWidth centeredContainer">

			<div>

				<h4 id="closeMenuTitle">CLOSE MENU</h4>

			</div>

		</div>

</div>

<div id="page" class="site">

	<header id="masthead" class="site-header" role="navigation">

		<div class="secondaryNavigation">

			<div class="navWidth secondaryMenuWrap">

				<a class="secondaryLink" href="/blog/">BLOG</a>

				<a class="secondaryLink" href="/events/">EVENTS</a>

				<i class="fas fa-phone whiteIcon"></i>

				<a class="secondaryLink" href="tel:(920)432-8899">(920) 432-8899</a>

			</div>

		</div>

		<div id="site-navigation" class="main-navigation">

			<nav>

				<div class="navWidth menuLinkWrap">

						<a href="https://wordpress-154794-719987.cloudwaysapps.com"><img src="/assets/scss/wp-content/uploads/2019/01/N.E.WLogoCroppedColorHorizMedium.png" class="siteLogo" ></a>

						<ul class="linkList2">

							<!--<li>

								<a class="menuLink" href = "/about/">CHILD CARE TRAINING</a>

							</li>-->

							<li>

								<div class="dropDown">

									<a id="programsLink" class="menuLink" href = "/about/">OUR PROGRAMS</a>

									<div id="programsDropNav" class="dropDownNav flex-container fullWidth">

										<div class="pageWidth flex-container dropDownNavWrapper">

											<div class="col50">

												<img src="/assets/scss/wp-content/uploads/2019/01/triplePPresentationMedium-1.jpg" class="dropNavImage"/>

											</div>

											<div class="col50">

												<div class="navWidth menuLinkWrap">

														<ul class="linkList3">

															<li>

																<a class="menuLink" href = "/about/">Positive parenting program - Triple P</a>

															</li>

															<li>

																<a class="menuLink" href = "/services/">In need of local help?</a>

															</li>

															<li>

																<a class="menuLink" href = "/projects/">Looking for child care?</a>

															</li>

															<li>

																<a class="menuLink" href = "/about/">Training</a>

															</li>

														</ul>

												</div>

											</div>

										</div>

									</div>

								</div>

							</li>

							<li>

								<div class="dropDown">

									<a id="programsLink" class="menuLink" href = "/about/">RESOURCES</a>

									<div id="programsDropNav" class="dropDownNav flex-container fullWidth">

										<div class="pageWidth flex-container dropDownNavWrapper">

											<div class="col50">

												<img src="/assets/scss/wp-content/uploads/2019/01/parentingToolBoxCropped.jpg" class="dropNavImage"/>

											</div>

											<div class="col50">

												<div class="navWidth menuLinkWrap">

														<ul class="linkList3">

															<li>

																<a class="menuLink" href = "/about/">FAMILY AND PARENTING</a>

															</li>

															<li>

																<a class="menuLink" href = "/services/">EARLY CHILDHOOD</a>

															</li>

															<li>

																<a class="menuLink" href = "/projects/">COMMUNITY RESOURCES</a>

															</li>

														</ul>

												</div>

											</div>

										</div>

									</div>

								</div>

							</li>

							<li>

								<div class="dropDown">

									<a id="programsLink" class="menuLink" href = "/about/">SUPPORT CHILDREN</a>

									<div id="programsDropNav" class="dropDownNav flex-container fullWidth">

										<div class="pageWidth flex-container dropDownNavWrapper">

											<div class="col50">

												<img src="/assets/scss/wp-content/uploads/2019/01/african-american-father-reading-a-fairy-tale-fable-story-for-kids-at-home-happy-gm969740436-264284754Cropped.png" class="dropNavImage"/>

											</div>

											<div class="col50">

												<div class="navWidth menuLinkWrap">

														<ul class="linkList3">

															<li>

																<a class="menuLink" href = "/about/">DONORS</a>

															</li>

															<li>

																<a class="menuLink" href = "/services/">VOLUNTEERS</a>

															</li>

														</ul>

												</div>

											</div>

										</div>

									</div>

								</div>

							</li>

							<li>

								<div class="dropDown">

									<a id="programsLink" class="menuLink" href = "/about/">ABOUT</a>

									<div id="programsDropNav" class="fullWidth dropDownNav">

										<div class="pageWidth flex-container dropDownNavWrapper">

											<div class="col50">

												<img src="/assets/scss/wp-content/uploads/2019/01/271mEDIUM-1.jpg" class="dropNavImage"/>

											</div>

											<div class="col50">

												<div class="navWidth menuLinkWrap">

														<ul class="linkList3">

															<li>

																<a class="menuLink" href = "/about/">STAFF</a>

															</li>

															<li>

																<a class="menuLink" href = "/services/">BOARD OF DIRECTORS</a>

															</li>

															<li>

																<a class="menuLink" href = "/projects/">EMPLOYMENT</a>

															</li>

														</ul>

												</div>

											</div>

										</div>

									</div>

								</div>

							</li>

							<li>

								<a class="menuLink" href = "/contact/">CONTACT</a>

							</li>

						</ul>

						<div class = "menuButtonWrap">

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

	<!--<div id="resourcesDropNav" class="dropDownNav flex-container">

		<div class="col50">

			<img src="/assets/scss/wp-content/uploads/2019/01/african-american-father-reading-a-fairy-tale-fable-story-for-kids-at-home-happy-gm969740436-264284754.png" class="dropNavImage"/>

		</div>

		<div class="col50">

			<div class="navWidth menuLinkWrap">

					<ul class="linkList3">

						<li>

							<a class="menuLink" href = "/about/">FAMILY AND PARENTING</a>

						</li>

						<li>

							<a class="menuLink" href = "/services/">EARLY CHILDHOOD</a>

						</li>

						<li>

							<a class="menuLink" href = "/projects/">COMMUNITY RESOURCES</a>

						</li>

					</ul>

			</div>

		</div>

	</div>-->

	<div id="content" class="site-content">
