<?php
/**
 * Template Name: Sitemap
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

				<section>

					<div>

						<div>

							<div class="pageWidth projectTitleWrapper">


							<h1 class="primaryText">Sitemap</h1>

							</div>

						</div>

						</div>

						</section>

						<div class="pageWidth paddedSection">

						<h3>Pages</h3>

						<ul>
							<?php wp_list_pages( 'sort_column=post_title' ); ?>
						</ul>

						<h3>Blog</h3>

						<ul>
							<?php wp_get_archives('type=alpha'); ?>
						</ul>

					</div>

			</main>

		</div>

	</div>

</div>

<?php

get_footer();
