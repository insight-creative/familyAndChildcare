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

								<img src="<?php the_field('what_we_do_image'); ?>" class="image" role="image" alt="">

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

									<img src="<?php the_field('programs_image'); ?>" class="serviceImage" role="image" alt="">

								</div>

								<div class="col70">

									<h3 class="whiteText">PROGRAMS</h3>

									<p class="whiteText"><?php the_field('programs_copy'); ?></p>

										<a href="/programs/" class="primaryButton" role="link"><span class="marginRight">View Our Programs </span>

											<svg class="footerSocialIcon" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

												<defs>

													<symbol id="icon-chevron-right" viewBox="0 0 19 28">

														<title>chevron-right</title>

														<path d="M17.297 13.703l-11.594 11.594c-0.391 0.391-1.016 0.391-1.406 0l-2.594-2.594c-0.391-0.391-0.391-1.016 0-1.406l8.297-8.297-8.297-8.297c-0.391-0.391-0.391-1.016 0-1.406l2.594-2.594c0.391-0.391 1.016-0.391 1.406 0l11.594 11.594c0.391 0.391 0.391 1.016 0 1.406z"></path>

													</symbol>

												</defs>

											</svg>

											<svg class="icon icon-chevron-right"><use xlink:href="#icon-chevron-right"></use></svg>

										</a>

								</div>

							</div>

						</div>

						<div class="fullWidth smallPaddedSection">

							<div class="pageWidth flex-container-reverse centerAlignedContainer">

								<div class="col70">

									<h3 class="primaryText">RESOURCES</h3>

									<p class="primaryText"><?php the_field('resources_copy'); ?></p>

										<a href="/programs/" class="primaryButtonReverse" role="button"><span class="marginRight">View Our Resources </span>

											<svg class="footerSocialIcon" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

												<defs>

													<symbol id="icon-chevron-right" viewBox="0 0 19 28">

														<title>chevron-right</title>

														<path d="M17.297 13.703l-11.594 11.594c-0.391 0.391-1.016 0.391-1.406 0l-2.594-2.594c-0.391-0.391-0.391-1.016 0-1.406l8.297-8.297-8.297-8.297c-0.391-0.391-0.391-1.016 0-1.406l2.594-2.594c0.391-0.391 1.016-0.391 1.406 0l11.594 11.594c0.391 0.391 0.391 1.016 0 1.406z"></path>

													</symbol>

												</defs>

											</svg>

											<svg class="blueIcon icon-chevron-right"><use xlink:href="#icon-chevron-right"></use></svg>

										</a>

								</div>

								<div class="col30 centerText">

									<img src="<?php the_field('resources_image'); ?>" class="serviceImage" role="image" alt="">

								</div>

							</div>

						</div>

						<div class="fullWidth blueBlock smallPaddedSection">

							<div class="pageWidth flex-container centerAlignedContainer">

								<div class="col30 centerText">

									<img src="<?php the_field('events_image'); ?>" class="serviceImage" role="image" alt="">

								</div>

								<div class="col70">

									<h3 class="whiteText">EVENTS</h3>

									<p class="whiteText"><?php the_field('events_copy'); ?></p>

										<a href="/programs/" class="primaryButton" role="button"><span class="marginRight">View Our Events </span>

											<svg class="footerSocialIcon" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

												<defs>

													<symbol id="icon-chevron-right" viewBox="0 0 19 28">

														<title>chevron-right</title>

														<path d="M17.297 13.703l-11.594 11.594c-0.391 0.391-1.016 0.391-1.406 0l-2.594-2.594c-0.391-0.391-0.391-1.016 0-1.406l8.297-8.297-8.297-8.297c-0.391-0.391-0.391-1.016 0-1.406l2.594-2.594c0.391-0.391 1.016-0.391 1.406 0l11.594 11.594c0.391 0.391 0.391 1.016 0 1.406z"></path>

													</symbol>

												</defs>

											</svg>

											<svg class="icon icon-chevron-right"><use xlink:href="#icon-chevron-right"></use></svg>

										</a>

								</div>

							</div>

						</div>

					</section>

					<section id="stories" class="marginContainer">

						<div class="fullWidth centerText">

							<h2><span class="underlinedHeading"><?php the_field('success_stories_heading'); ?></span></h2>

						</div>

						<div class="fullWidth flex-container-reverse centerAlignedContainer greyBlock">

							<div class="col50 removeBottomMargin">

								<img src="<?php the_field('success_story_1_image'); ?>" class="image" role="image" alt="">

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

									<a href="/programs/" class="primaryButtonReverse" role="link"><span class="marginRight">Read The Full Story </span>

										<svg class="footerSocialIcon" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

											<defs>

												<symbol id="icon-chevron-right" viewBox="0 0 19 28">

													<title>chevron-right</title>

													<path d="M17.297 13.703l-11.594 11.594c-0.391 0.391-1.016 0.391-1.406 0l-2.594-2.594c-0.391-0.391-0.391-1.016 0-1.406l8.297-8.297-8.297-8.297c-0.391-0.391-0.391-1.016 0-1.406l2.594-2.594c0.391-0.391 1.016-0.391 1.406 0l11.594 11.594c0.391 0.391 0.391 1.016 0 1.406z"></path>

												</symbol>

											</defs>

										</svg>

										<svg class="blueIcon icon-chevron-right"><use xlink:href="#icon-chevron-right"></use></svg>

									</a>

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

									<a href="/programs/" class="primaryButtonReverse" role="button"><span class="marginRight">Read The Full Story </span>

										<svg class="footerSocialIcon" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

											<defs>

												<symbol id="icon-chevron-right" viewBox="0 0 19 28">

													<title>chevron-right</title>

													<path d="M17.297 13.703l-11.594 11.594c-0.391 0.391-1.016 0.391-1.406 0l-2.594-2.594c-0.391-0.391-0.391-1.016 0-1.406l8.297-8.297-8.297-8.297c-0.391-0.391-0.391-1.016 0-1.406l2.594-2.594c0.391-0.391 1.016-0.391 1.406 0l11.594 11.594c0.391 0.391 0.391 1.016 0 1.406z"></path>

												</symbol>

											</defs>

										</svg>

										<svg class="blueIcon icon-chevron-right"><use xlink:href="#icon-chevron-right"></use></svg>

									</a>

								</div>

							</div>

							<div class="col50 removeBottomMargin">

								<img src="<?php the_field('success_story_2_image'); ?>" class="image" role="image" alt="">

							</div>

						</div>

					</section>

					<?php get_template_part('Includes/newsletter-signup'); ?>

				</section>

			</main>

		</div>

	</div>

</div>

<?php

get_footer();
