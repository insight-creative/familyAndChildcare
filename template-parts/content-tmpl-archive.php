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

					<?php
					$how_many_last_posts = intval(get_post_meta($post->ID, 'archived-posts-no', true));

					/* Here, we're making sure that the number fetched is reasonable. In case it's higher than 200 or lower than 2, we're just resetting it to the default value of 15. */
					if($how_many_last_posts > 200 || $how_many_last_posts < 2) $how_many_last_posts = 15;

					$my_query = new WP_Query('post_type=post&nopaging=1');
					if($my_query->have_posts()) {
					  echo '<h1 class="widget-title">Lastest '.$how_many_last_posts.' Postses</h1>&nbsp;';
					  echo '<div class="archives-latest-section"><ol>';
					  $counter = 1;
					  while($my_query->have_posts() && $counter <= $how_many_last_posts) {
					    $my_query->the_post();
					    ?>
					    <li><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
					    <?php
					    $counter++;
					  }
					  echo '</ol></div>';
					  wp_reset_postdata();
					}
					?>


				</div><!-- .entry-content -->

			</article><!-- #post-<?php the_ID(); ?> -->

		</div>

	</div>

</div>
