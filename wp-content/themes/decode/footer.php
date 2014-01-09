<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Decode
 */
?>

	 </div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<?php if ( get_theme_mod( 'site_colophon', '' ) !== '' ) : ?>
		<div class="site-colophon">
			<p><?php echo get_theme_mod( 'site_colophon' ); ?></p>
		</div><!-- .site-colophon -->
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'show_theme_info', true ) == true ) : ?>
		<div class="theme-info">
			<p><?php printf(__( '%1$s by %2$s', 'decode' ), '<a href="http://ScottHSmith.com/projects/decode/">Decode</a>', 'Scott Smith') ?></p>
		</div><!-- .theme-info -->
		<?php endif; ?>
	</footer><!-- #colophon -->
	<?php if ( get_theme_mod( 'constant_sidebar', 'closing' ) == 'constant' && get_theme_mod( 'show_sidebar', true ) == true ) { echo '</div><!-- .site-scroll -->'; } ?><!-- .site-scroll -->
</div><!-- #page -->


	<?php if ( get_theme_mod( 'show_sidebar', true ) == true ) : ?>
	<div id="sidebar" class="sidebar <?php echo get_theme_mod( 'sidebar_position', 'left' );?> <?php echo get_theme_mod( 'constant_sidebar', 'closing' );?>">
		<div id="sidebar_top" class="SidebarTop">
			<div id="sidebar_close" class="SidebarClose">
				<svg width="200px" height="200px" viewBox="0 0 200 200" version="1.1" xmlns="http://www.w3.org/2000/svg">
				<title>Cross</title>
				<path class="SocialIconFill" d="M0,172.881356 L72.8813559,100 L1.0658141e-14,27.1186441 L27.1186441,-2.84217094e-14 L100,72.8813559 L172.881356,0 L200,27.1186441 L127.118644,100 L200,172.881356 L172.881356,200 L100,127.118644 L27.1186441,200 Z M0,172.881356" fill="#444444"></path>
				<image src="<?php echo get_stylesheet_directory_uri() ?>/images/cross.png">
				</svg>
			</div>
		</div>
		<div class="SidebarContent">
			<?php get_sidebar(); ?>
		</div>
	</div>
	<?php endif; ?>
	<!-- #sidebar -->


<?php wp_footer(); ?>

</body>
</html>