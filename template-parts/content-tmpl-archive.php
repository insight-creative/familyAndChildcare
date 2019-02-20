<?php
/**
 * Template part for displaying page content in page.php
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
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</header><!-- .entry-header -->

				<?php familyandchildcareresponsive_post_thumbnail(); ?>

				<div class="entry-content">
					<?php
					the_content();
					?>


			      <div class="card cf">
			        <div class="col70">
			          <?php if (has_post_thumbnail(get_the_id())) : ?>
			            <a class="image-link" href="<?php the_permalink() ?>"><?php the_post_thumbnail('full'); ?></a>
			          <?php endif; ?>
			        </div>
			        <div class="col30">
			          <h2 class="card-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
			          <?php the_excerpt(); ?>
			        </div>
			      </div>
			

				</div><!-- .entry-content -->

			</article><!-- #post-<?php the_ID(); ?> -->

		</div>

	</div>

</div>
