<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package familyAndChildcareResponsive
 */

?>

<div id="barba-wrapper">

	<div class="barba-container">

		<div class="pageWidth defaultPadding limitWidth">

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

					<?php if ( 'post' === get_post_type() ) : ?>
					<div class="entry-meta">
						<?php
						familyandchildcareresponsive_posted_on();
						familyandchildcareresponsive_posted_by();
						?>
					</div><!-- .entry-meta -->
					<?php endif; ?>
				</header><!-- .entry-header -->

				<?php familyandchildcareresponsive_post_thumbnail(); ?>

				<div class="entry-summary">
					<?php the_excerpt(); ?>
				</div><!-- .entry-summary -->

				<footer class="entry-footer">
					<?php familyandchildcareresponsive_entry_footer(); ?>
				</footer><!-- .entry-footer -->
			</article><!-- #post-<?php the_ID(); ?> -->

		</div>

	</div>

</div>			
