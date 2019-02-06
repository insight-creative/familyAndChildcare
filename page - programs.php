<?php
/**
 * Template Name: programs
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

					<div class="mediumHero programHero">

						<div class="navWidth smallHeroHeadingContainer">

							<div class="homeHeading flex-container">

								<div>

									<div class="heroHeading">

										<h1 class="largeHeading">Our Programs</h1>

									</div>

								</div>

							</div>

						</div>

					</div>

				</section>

				<section class="sectionNav stickyNav">

					<div class="fullWidth blueBlock">

						<div class="pageWidth">

							<nav class="flexListWrapper" role="navigation" aria-label="About Sub Navigation">

								<ul class="flexList">

									<li><a href="/programs/triple-p/" class="flexListLink" role="link">Triple P</a></li>

									<li><a href="/programs/local-help/" class="flexListLink" role="link">In need of local help?</a></li>

									<li><a href="/programs/looking-for-child-care/" class="flexListLink" role="link">Looking for child care?</a></li>

									<li><a href="/programs/training/" class="flexListLink" role="link">Training</a></li>

								</ul>

							</nav>

						</div>

					</div>

				</section>

					<section id="pageContent">

						<section id ="programsIntro" class="marginContainer">

							<div class="fullWidth centerAlignedContainer flex-container paddedContainer">

								<div class="col70">

									<p class="limitWidth"><?php the_field('programs_intro_copy'); ?></p>

								</div>

							</div>

						</section>

						<section id="FCRvalue" class="marginContainer">

							<div class="fullWidth smallPaddedSection centeredImageContainer greyBlock">

								<div class="pageWidth flex-container-reverse">

									<div class="col50">

										<img src="/wp-content/uploads/2019/02/parentingToolBoxMedium.jpg" class="image marginTop">

									</div>

									<div class="col50">

										<div class="blockText">

											<h3>Triple P</h3>

											<h5>The Triple P program is built on five principles of positive parenting:</h5>

											<ul>

												<li>Ensuring a safe, interesting environment</li>

												<li>Creating a positive learning environment</li>

												<li>Using assertive discipline</li>

												<li>Having realistic expectations</li>

												<li>Taking care of yourself as a parent</li>

											</ul>

											<a href="/programs/"><button class="primaryButtonReverse" role="button"><span class="marginRight">Learn More About Triple P </span><i class="primaryIcon fas fa-chevron-right"></i></button></a>

										</div>

									</div>

								</div>

							</div>

							<div class="fullWidth smallPaddedSection centeredImageContainer greyBlock">

								<div class="pageWidth flex-container">

									<div class="col50">

										<div class="blockText">

											<h3>In need of local help?</h3>

											<h5>The Triple P program is built on five principles of positive parenting:</h5>

											<ul>

												<li>Ensuring a safe, interesting environment</li>

												<li>Creating a positive learning environment</li>

												<li>Using assertive discipline</li>

												<li>Having realistic expectations</li>

												<li>Taking care of yourself as a parent</li>

											</ul>

											<a href="/programs/"><button class="primaryButtonReverse" role="button"><span class="marginRight">Find Local Help </span><i class="primaryIcon fas fa-chevron-right"></i></button></a>

										</div>

									</div>

									<div class="col50 removeBottomMargin">

										<img src="/wp-content/uploads/2019/02/parentingToolBoxMedium.jpg" class="image marginTop">

									</div>

								</div>

							</div>

							<div class="fullWidth smallPaddedSection centeredImageContainer greyBlock">

								<div class="pageWidth flex-container-reverse">

									<div class="col50 removeBottomMargin">

										<img src="/wp-content/uploads/2019/02/parentingToolBoxMedium.jpg" class="image marginTop">

									</div>

									<div class="col50">

										<div class="blockText">

											<h3>Looking for child care?</h3>

											<h5>The Triple P program is built on five principles of positive parenting:</h5>

											<ul>

												<li>Ensuring a safe, interesting environment</li>

												<li>Creating a positive learning environment</li>

												<li>Using assertive discipline</li>

												<li>Having realistic expectations</li>

												<li>Taking care of yourself as a parent</li>

											</ul>

											<a href="/programs/"><button class="primaryButtonReverse" role="button"><span class="marginRight">Find Child Care </span><i class="primaryIcon fas fa-chevron-right"></i></button></a>

										</div>

									</div>

								</div>

							</div>

							<div class="fullWidth smallPaddedSection centeredImageContainer greyBlock">

								<div class="pageWidth flex-container">

									<div class="col50">

										<div class="blockText">

											<h3>Training</h3>

											<h5>The Triple P program is built on five principles of positive parenting:</h5>

											<ul>

												<li>Ensuring a safe, interesting environment</li>

												<li>Creating a positive learning environment</li>

												<li>Using assertive discipline</li>

												<li>Having realistic expectations</li>

												<li>Taking care of yourself as a parent</li>

											</ul>

											<a href="/programs/"><button class="primaryButtonReverse" role="button"><span class="marginRight">View Training Events </span><i class="primaryIcon fas fa-chevron-right"></i></button></a>

										</div>

									</div>

									<div class="col50 removeBottomMargin">

										<img src="/wp-content/uploads/2019/02/parentingToolBoxMedium.jpg" class="image marginTop">

									</div>

								</div>

							</div>

						</section>

						<section id ="programs" class="marginContainer">

							<div class="fullWidth centerAlignedContainer flex-container paddedContainer">

								<div class="col70">

									<h2 id="missionHeader" class="centerText"><span class="underlinedHeading">Parents As Teachers</span></h2>

									<p class="limitWidth">
										This evidence-based program brings together a highly trained Parent Educator and families
										with children under age four in the privacy of your home.  Our professionals will assist families with
										child development and offer education on parenting, communications, behavior and community support
										systems available.
									</p>

									<h2 id="missionHeader" class="centerText"><span class="underlinedHeading">Parenting Classes</span></h2>

									<p class="limitWidth">
										Children do not come with instructions.  We offer evidence-informed classes at our office and around
										the community to educate new parents on child development.  Do you need more information on the
										latest parenting trends? Parents can enroll in our parenting classes which are conducted in both
										English and Spanish.  These six session courses offer information on nutrition, development,
										communications and parent-child interaction.  Limited, free childcare is offered onsite during the
										classes for children under 10 years of age (maximum of two children per household).  For more information
										and to enroll in classes, contact our parenting team today at <a href="#" class="plainLink">920-432-8899</a>.
									</p>

									<h2 id="missionHeader" class="centerText"><span class="underlinedHeading">Community Resources</span></h2>

									<p class="limitWidth">
										Need information on healthcare, childcare, housing support? Don’t know where to turn?  Contact our
										Parenting Support Team today.  We can connect you with community and government-based services to
										meet your needs and will follow-up with you to ensure you have received the information you need!
									</p>

									<p class="limitWidth">
										For more information – check out the programs in Brown County on our website today!
									</p>

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

									<a href="/programs/" role="link"><button class="primaryButtonReverse" role="button"><span class="marginRight">Sign Up </span><i class="blueIcon fas fa-chevron-right"></i></button></a>

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
