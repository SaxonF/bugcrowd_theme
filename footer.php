<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Bugcrowd
 * @since Bugcrowd 1.0
 */
?>		

	</div><!-- #main .wrapper -->
	<!--<section id="crowd-grid" class="section center">
		<div class="container">
	      <h2 class="gamma">Want to participate in bug bounty programs?</h2>
	      <h3><a href="http://www.bugcrowd.com">Join our team of over 4000 testers</a></h3>
		</div>
	</section>-->
	<footer role="contentinfo" class="site-footer">
		<div class="container">
			<a href="http://www.bugcrowd.com" class="logo-footer">Bugcrowd</a>
			<h5 class="latest-blog"><a href="#"><strong>Latest Blog Post.</strong> [BOUNTY] #Beta013 Bugcrowd Beta Portal bug bounty is now open</a></h5>
			<nav class="footer-nav">
				<?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_class' => 'nav-menu' ) ); ?>
			</nav>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>