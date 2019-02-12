<?php
/**
 * Template Name: History
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

				<section class="marginedHero">

					<div class="mediumHero aboutHero">

						<div class="navWidth smallHeroHeadingContainer">

							<div class="homeHeading flex-container">

								<div>

									<div class="heroHeading">

										<h2 class="smallHeading aboutFCR">About Family and Childcare<br>Resources of N.E.W.</h2>

										<h1 class="mediumHeading">Our History</h1>

									</div>

								</div>

							</div>

						</div>

					</div>

				</section>

				<?php get_template_part('Includes/about-sub-nav'); ?>

					<section id="pageContent">

						<section id ="FCRHistory" class="marginContainer">

							<div class="fullWidth centerAlignedContainer flex-container paddedContainer">

								<div class="col70">

									<h2 class="centerText"><span class="uppercaseHeading"><?php the_field('history_header'); ?></span></h2>

									<p class="limitWidth"><?php the_field('history_copy'); ?></p>

								</div>

							</div>

						</section>

						<section id ="FCRAgency" class="marginContainer">

							<div class="pageWidth flex-container paddedContainer">

								<div class="col50">

									<div class="smallTextBlock">

										<h2>2009</h2>

										<p>
											In 2009, Family & Childcare Resources of N.E.W. formalized its work with local partnerships,
											Supporting Families Together Association, and collaborating groups to offer quality improvement
											services, trainings and enhanced home-based visitation programs.
										</p>

									</div>

								</div>

								<div class="col50">

									<div class="smallTextBlock">

										<h2>2010</h2>

										<p>
											In 2010, the agency began a paradigm shift toward delivering quality improvement through the YoungStar
											program.  In combination with over 20 agencies throughout Wisconsin, Family & Childcare Resources of
											N.E.W. has led the way in improving quality and safety for children in over 200 childcare centers and
											family practices in Brown, Door, Kewaunee, Marinette, Menominee, Oconto and Shawano Counties.
										</p>

									</div>

								</div>

							</div>

							<div class="pageWidth flex-container paddedContainer">

								<div class="col50">

									<div class="smallTextBlock">

										<h2>2011</h2>

										<p>
											In 2011, our agency was chosen to collaborate with Supporting Families Together Association and the
											Department of Children and Families in Wisconsin to offer advanced educational opportunities, diversity
											trainings, professional development, and Active Early – Childhood Obesity Prevention techniques for
											childcare providers.
										</p>

									</div>

								</div>

								<div class="col50">

									<div class="smallTextBlock">

										<h2>2012</h2>

										<p>
											In 2012, agency leadership coordinated drives and events to increase unrestricted funding, offering
											more needs-based support for families and increased funding through grant writing.  Our efforts provided
											support for Playgroups, Support Groups, and our Supernanny home visitation programming.
										</p>

										<p>
											Agency leadership reinforced long-term strategic growth through an intensive review of policies and
											 procedures aimed at ensuring a minimum of $.86 per donated dollar is used for programming.
										</p>

										<p>
											Our agency received high support in April 2012 when we launched our Fly-a-Kite to End Child
											Abuse Pin-up campaign.  Over 20 local organizations promoted pin-up opportunities throughout
											the month and assisted in raising over $6,000 – 100% of which was used for local programs that
											reduce child abuse and neglect.
										</p>

									</div>

								</div>

							</div>

							<div class="pageWidth flex-container paddedContainer">

								<div class="col50">

									<div class="smallTextBlock">

										<h2>2013</h2>

										<p>
											In 2013, our agency, board of directors, and local partnerships worked together to bring a kite
											festival to the Green Bay Area. It was a great family event for all ages that also increased our
											visibility in the community. Over 2,300 people came out for the amazing day that also raised money
											for programs at Family & Childcare Resources of N.E.W.
										</p>

									</div>

								</div>

								<div class="col50">

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
