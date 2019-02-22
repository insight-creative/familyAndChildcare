<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package familyAndChildcareResponsive
 */

get_header();
?>

<div id="barba-wrapper">

	<div class="barba-container">

		<div class="pageWidth defaultPadding limitWidth">

			<div id="primary" class="content-area">

				<main id="main" class="site-main">

				<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', 'single' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.

				?>

				<div class="navigation"><p><?php posts_nav_link(' ','Go 
Forward In Time','Go Back in Time'); ?></p></div>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div>

	</div>

</div>

<?php

get_footer();
