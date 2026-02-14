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
				<?php
				// Language selector (Polylang) – opens upward
				if (function_exists('pll_the_languages')) :
					$languages = pll_the_languages(array('dropdown' => 0, 'raw' => 1, 'hide_if_empty' => 0));
					if (!empty($languages)) :
						$current_lang = pll_current_language('name');
				?>
				<div class="site-footer__language">
					<div class="language-dropdown" data-dropdown>
						<button type="button" class="language-dropdown__toggle" aria-expanded="false" aria-label="<?php echo esc_attr__('Select language', 'bunbukan-europe'); ?>">
							<span><?php echo esc_html($current_lang); ?></span>
							<svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
								<polyline points="18 15 12 9 6 15"/>
							</svg>
						</button>
						<ul class="language-dropdown__menu">
							<?php foreach ($languages as $lang) : ?>
								<li>
									<a href="<?php echo esc_url($lang['url']); ?>" class="<?php echo $lang['current_lang'] ? 'is-active' : ''; ?>">
										<?php echo esc_html($lang['name']); ?>
									</a>
								</li>
							<?php endforeach; ?>
						</ul>
					</div>
				</div>
				<?php endif; else : ?>
				<?php
					$languages = array(
						'fr' => 'Français',
						'en' => 'English',
						'nl' => 'Nederlands',
						'ja' => '日本語',
					);
					$current_lang_code = substr(get_locale(), 0, 2);
					$current_lang_name = isset($languages[$current_lang_code]) ? $languages[$current_lang_code] : 'English';
				?>
				<div class="site-footer__language">
					<div class="language-dropdown" data-dropdown>
						<button type="button" class="language-dropdown__toggle" aria-expanded="false" aria-label="<?php echo esc_attr__('Select language', 'bunbukan-europe'); ?>">
							<span><?php echo esc_html($current_lang_name); ?></span>
							<svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
								<polyline points="18 15 12 9 6 15"/>
							</svg>
						</button>
						<ul class="language-dropdown__menu">
							<?php foreach ($languages as $code => $name) : ?>
								<li>
									<a href="<?php echo esc_url(add_query_arg('lang', $code)); ?>" class="<?php echo ($code === $current_lang_code) ? 'is-active' : ''; ?>">
										<?php echo esc_html($name); ?>
									</a>
								</li>
							<?php endforeach; ?>
						</ul>
					</div>
				</div>
				<?php endif; ?>
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

<?php get_template_part('template-parts/cookie-consent'); ?>

<?php wp_footer(); ?>

</body>

</html>