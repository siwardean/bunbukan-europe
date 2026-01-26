<?php
/**
 * The footer template
 *
 * @package Bunbukan
 */
?>

<footer id="colophon" class="site-footer">
	<div class="site-footer__separator"></div>
	<div class="site-footer__container">
		<div class="site-footer__content">
			<div class="site-footer__brand">
				<p class="site-title"><?php echo esc_html__('Bunbukan Europe', 'bunbukan-europe'); ?></p>
				<p><?php echo esc_html__('Official European Representation of Bunbukan Okinawa', 'bunbukan-europe'); ?></p>
			</div>

			<nav class="footer-navigation">
				<?php
				if (has_nav_menu('menu-2')) {
					wp_nav_menu(
						array(
							'theme_location' => 'menu-2',
							'menu_id' => 'footer-menu',
							'container' => false,
							'depth' => 1,
						)
					);
				} else {
					echo '<ul id="footer-menu" class="footer-menu-fallback">';
					echo '<li><a href="' . esc_url(home_url('/')) . '#home">' . esc_html__('Home', 'bunbukan-europe') . '</a></li>';
					echo '<li><a href="' . esc_url(home_url('/')) . '#about">' . esc_html__('About', 'bunbukan-europe') . '</a></li>';
					echo '<li><a href="' . esc_url(home_url('/')) . '#disciplines">' . esc_html__('Disciplines', 'bunbukan-europe') . '</a></li>';
					echo '<li><a href="' . esc_url(home_url('/')) . '#locations">' . esc_html__('Locations', 'bunbukan-europe') . '</a></li>';
					echo '<li><a href="' . esc_url(home_url('/')) . '#events">' . esc_html__('Events', 'bunbukan-europe') . '</a></li>';
					echo '<li><a href="' . esc_url(home_url('/')) . '#contact">' . esc_html__('Contact', 'bunbukan-europe') . '</a></li>';
					echo '</ul>';
				}
				?>
			</nav>

			<div class="site-footer__contact">
				<p><strong><?php echo esc_html__('Contact', 'bunbukan-europe'); ?></strong></p>
				<p><?php echo esc_html__('Bunbukan Europe', 'bunbukan-europe'); ?></p>
				<p><a href="mailto:info@bunbukan.eu">info@bunbukan.eu</a></p>
			</div>
		</div>

		<div class="site-footer__bottom">
			<p>&copy; <?php echo date('Y'); ?> <?php echo esc_html__('Bunbukan Europe', 'bunbukan-europe'); ?>.
				<?php echo esc_html__('All rights reserved.', 'bunbukan-europe'); ?></p>
		</div>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>