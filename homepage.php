<?php
/*
Template Name: Homepage
*/

get_header(); ?>

	<section class="main-content">
		<?php
		$args = array( 'posts_per_page' => 1);
		$lastposts = get_posts( $args );
		foreach($lastposts as $post) : setup_postdata($post); ?>
			<article class="post feature container">
				<h2 class="entry-title beta"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<div class="entry-meta caps">
					<?php bugcrowd_entry_meta(); ?>
				</div>
				<?php the_post_thumbnail(); ?>
				<div class="entry-summary delta">
					<?php the_excerpt(); ?>
				</div>
			</article>
		<?php endforeach; ?>
		<a href="#" id="more-content">But wait, there's more</a>
	</section><!-- #primary -->
	<section class="secondary-content">
		<?php
		$args = array( 'posts_per_page' => 5, 'offset'=> 1 );
		$lastposts = get_posts( $args );
		foreach($lastposts as $post) : setup_postdata($post); ?>
			<?php get_template_part( 'content', get_post_format() ); ?>
		<?php endforeach; ?>
	</section>

<?php get_footer(); ?>