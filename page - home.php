<?php
/**
 * Template Name: Home
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package familyAndChildcareResponsive
 */
get_header();

?>

<div id="barba-wrapper">

	<div class="barba-container">

		<div id="primary" class="content-area">

			<main id="main" class="site-main">

				<section id="hero" class="marginedHero">

					<div class="hero homeHero">

						<div class="navWidth heroHeadingContainer">

							<div class="homeHeading flex-container">

								<div>

									<div class="heroHeading">

										<h1 id="mainHeader"><?php the_field('homepage_hero_heading'); ?></h1>

									</div>

								</div>

							</div>

						</div>

					</div>

				</section>

				<section id="pageContent">

					<section id ="familyAndChildcareIntro" class="marginContainer">

						<div class="fullWidth flex-container-reverse centerAlignedContainer">

							<div id="introImage" class="col50 removeBottomMargin">

								<img src="<?php the_field('what_we_do_image'); ?>" class="image">

							</div>

							<div id="introCopy" class="col50">

								<div class="blockText">

									<h2 id="whatWeHeader"><span class="underlinedHeading"><?php the_field('what_we_do_heading'); ?></span></h2>

									<p><?php the_field('what_we_do_copy'); ?></p>

								</div>

							</div>

						</div>

					</section>

					<section id="services" class="smallPaddedSection">

						<div class="fullWidth centerText">

							<h2 id="whatWeHeader"><span class="underlinedHeading"><?php the_field('service_heading'); ?></span></h2>

						</div>

						<div class="fullWidth blueBlock smallPaddedSection">

							<div class="pageWidth flex-container centerAlignedContainer">

								<div class="col30 centerText">

									<img src="<?php the_field('programs_image'); ?>" class="serviceImage">

								</div>

								<div class="col70">

									<h3 class="whiteText">PROGRAMS</h3>

									<p class="whiteText"><?php the_field('programs_copy'); ?></p>

										<a href="/programs/"><button class="primaryButton"><span class="marginRight">View Our Programs </span><i class="whiteIcon fas fa-chevron-right"></i></button></a>

								</div>

							</div>

						</div>

						<div class="fullWidth smallPaddedSection">

							<div class="pageWidth flex-container-reverse centerAlignedContainer">

								<div class="col70">

									<h3 class="primaryText">RESOURCES</h3>

									<p class="primaryText"><?php the_field('resources_copy'); ?></p>

										<a href="/programs/"><button class="primaryButtonReverse"><span class="marginRight">View Our Resources </span><i class="primaryIcon fas fa-chevron-right"></i></button></a>

								</div>

								<div class="col30 centerText">

									<img src="<?php the_field('resources_image'); ?>" class="serviceImage">

								</div>

							</div>

						</div>

						<div class="fullWidth blueBlock smallPaddedSection">

							<div class="pageWidth flex-container centerAlignedContainer">

								<div class="col30 centerText">

									<img src="<?php the_field('events_image'); ?>" class="serviceImage">

								</div>

								<div class="col70">

									<h3 class="whiteText">EVENTS</h3>

									<p class="whiteText"><?php the_field('events_copy'); ?></p>

										<a href="/programs/"><button class="primaryButton"><span class="marginRight">View Our Events </span><i class="whiteIcon fas fa-chevron-right"></i></button></a>

								</div>

							</div>

						</div>

					</section>

					<section id="stories" class="smallPaddedSection marginContainer">

						<div class="fullWidth centerText">

							<h2><span class="underlinedHeading"><?php the_field('success_stories_heading'); ?></span></h2>

						</div>

						<div class="fullWidth flex-container-reverse centerAlignedContainer greyBlock">

							<div class="col50 removeBottomMargin">

								<img src="<?php the_field('success_story_1_image'); ?>" class="image">

							</div>

							<div class="col50">

								<div class="blockText">

									<h3 class="primaryText">STORY TITLE</h3>

									<p>
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
										enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor
										in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui
										blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
									</p>

									<a href="/programs/"><button class="primaryButtonReverse"><span class="marginRight">Read The Full Story </span><i class="blueIcon fas fa-chevron-right"></i></button></a>

								</div>

							</div>

						</div>

						<div class="fullWidth flex-container centerAlignedContainer greyBlock">

							<div class="col50">

								<div class="blockText">

									<h3 class="primaryText">STORY TITLE</h3>

									<p>
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
										enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor
										in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui
										blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
									</p>

									<a href="/programs/"><button class="primaryButtonReverse"><span class="marginRight">Read The Full Story </span><i class="blueIcon fas fa-chevron-right"></i></button></a>

								</div>

							</div>

							<div class="col50 removeBottomMargin">

								<img src="<?php the_field('success_story_2_image'); ?>" class="image">

							</div>

						</div>

					</section>

					<section id="newsletterSignup" class="marginContainer yellowBlock smallPaddedSection">

						<div class="pageWidth flex-container centerAlignedContainer">

							<div class="col30">

								<div class="opaqueLogoWrap">

									<img src="/wp-content/uploads/2019/02/N.E.W-Logo-cropped-white-medium.png" class="image opaqueLogo">

								</div>

							</div>

							<div class="col50 newsletterContent">

								<h4>FAMILY & CHILDCARE RESOURCES OF N.E.W. NEWSLETTER</h4>

								<p>
								Interested in learning more about our programs and services? Join our email list to stay up to date on the latest child care provider trainings,
								family services and programs as well as volunteer opportunities.
								</p>

							</div>

							<div class="col20">

								<a href="/programs/"><button class="primaryButtonReverse"><span class="marginRight">Sign Up </span><i class="blueIcon fas fa-chevron-right"></i></button></a>

							</div>

						</div>

					</section>

				</section>

			</main>

		</div>

	</div>

</div>

<?php

get_footer();
