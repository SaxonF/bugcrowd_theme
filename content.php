<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Bugcrowd
 * @since Bugcrowd 1.0
 */
?>

	<?php if ( is_single() ) : ?>
		<article class="post feature container">
			<div class="entry-meta caps">
				<?php bugcrowd_entry_meta(); ?>
			</div>
			<h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
			<?php the_post_thumbnail(); ?>
			<div class="entry-summary delta">
				<?php the_excerpt(); ?>
			</div>
			<div class="entry-content">
				<aside>
					<nav class="nav-single">
						<span class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '', 'Previous post link', 'bugcrowd' ) . '%title </span> ' ); ?></span>
						<span class="nav-list"><a href="<?php echo home_url(); ?>"><span><?php _e( 'List', 'bugcrowd' ); ?></span></a></span>
						<span class="nav-next"><?php next_post_link( '%link', '<span class="meta-nav"> %title' . _x( '', 'Next post link', 'bugcrowd' ) . '</span>' ); ?></span>
					</nav><!-- .nav-single -->
					<div class="social">
						<?php dd_buffer_generate('Normal') ?>
						<?php dd_twitter_generate('Normal','saxonfletcher') ?>
						<?php dd_linkedin_generate('Normal') ?>
						<?php dd_fblike_xfbml_generate('Like Box Count') ?>
						<?php dd_google1_generate('Normal') ?>
					</div>
				</aside>
				<?php the_content(); ?>
			</div>
		</article>
	<?php else : ?>
		<article class="post small">
			<div class="container">
				<div class="row">
					<header class="entry-header col-md-4">
						<h2 class="beta"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<div class="entry-meta">
							<time class="entry-date" datetime="%3$s"><?php echo esc_html( get_the_date() ) ?></time>
						</div>
					</header>
					<div class="entry-summary col-md-7 col-md-offset-1">
						<?php the_excerpt(); ?>
					</div>
				</div>
			</div>
		</article>
	<?php endif; ?>
