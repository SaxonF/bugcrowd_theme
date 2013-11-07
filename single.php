<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Bugcrowd
 * @since Bugcrowd 1.0
 */

get_header(); ?>
	
	<section class="main-content">
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', get_post_format() ); ?>

		<?php endwhile; // end of the loop. ?>
	</section><!-- #primary -->
	<section id="comments" class="secondary-content">
		<div class="container">
			<?php comments_template( '', true ); ?>
		</div>
	</section>

<?php get_footer(); ?>