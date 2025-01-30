<?php
/**
 * The template for displaying the static front page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Newspack
 */

get_header();
?>
	<section id="primary" class="content-area">

		<?php
		do_action( 'newspack_theme_primary_top' );
		?>

		<main id="main" class="site-main">

			<?php
			do_action( 'newspack_theme_main_top' );

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				?>

				<header class="entry-header">
					<?php get_template_part( 'template-parts/header/entry', 'header' ); ?>
				</header>

				<?php
				get_template_part( 'template-parts/content/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					newspack_comments_template();
				}

			endwhile; // End of the loop.

			do_action( 'newspack_theme_main_bottom' );
			?>

		</main><!-- #main -->
		<?php
		do_action( 'newspack_theme_primary_bottom' );
		?>
	</section><!-- #primary -->

<?php
get_footer();
