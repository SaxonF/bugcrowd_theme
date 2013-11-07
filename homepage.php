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
				<div class="entry-meta caps">
					<?php bugcrowd_entry_meta(); ?>
				</div>
				<h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				<?php the_post_thumbnail(); ?>
				<div class="entry-summary delta">
					<?php the_excerpt(); ?>
				</div>
			</article>
		<?php endforeach; ?>
		<a href="#" id="more-content"><span>But wait, there's more</span></a>
	</section><!-- #primary -->
	<section class="secondary-content">
		<?php
		 $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	    $args = array(
	        'orderby'        => 'post_date',
	        'order'            => 'DESC',
	        'post_type'        => 'post',
	        'post_status'        => 'publish',
	        'posts_per_page'    => 12,
	        'offset' => 1,
	        'paged'            => $paged,
	    );
		$lastposts = get_posts( $args );
		foreach($lastposts as $post) : setup_postdata($post); ?>
			<?php get_template_part( 'content', get_post_format() ); ?>
		<?php endforeach; ?>
		<?php bugcrowd_content_nav() ?>
	</section>

<?php get_footer(); ?>