<?php
/**
 * Template Name: Accueil
 * Template for the Bunbukan home page
 *
 * @package Bunbukan
 */

get_header();

// Hero background image (prefer uploaded file; fallback to CSS background if missing)
$hero_bg_path = get_template_directory() . '/assets/images/hero_honbu_dojo.gif';
if (!file_exists($hero_bg_path)) {
	$hero_bg_path = get_template_directory() . '/assets/images/hero_honbu_dojo.jpg';
}
if (!file_exists($hero_bg_path)) {
	$hero_bg_path = get_template_directory() . '/assets/images/hero_honbu_dojo.png';
}
$hero_bg_url = '';
if (file_exists($hero_bg_path)) {
	$hero_bg_ext = pathinfo($hero_bg_path, PATHINFO_EXTENSION);
	$hero_bg_url = get_template_directory_uri() . '/assets/images/hero_honbu_dojo.' . $hero_bg_ext;
}

// Helper for SVG dividers
if (!function_exists('bunbukan_render_divider')) {
	function bunbukan_render_divider($position = 'top')
	{
		$class = 'bb-brush-divider bb-brush-divider--' . $position;
		echo '<div class="' . esc_attr($class) . '"></div>';
	}
}
?>

<main id="primary" class="site-main">

	<!-- Hero Section -->
	<section id="home" class="bb-hero" <?php echo $hero_bg_url ? 'style="background-image: url(\'' . esc_url($hero_bg_url) . '\');"' : ''; ?>>
		<div class="bb-hero__content">
			<?php
			// Bunbukan logo (front of coin)
			$bunbukan_logo_url = '';
			if (function_exists('has_custom_logo') && has_custom_logo()) {
				$custom_logo_id = get_theme_mod('custom_logo');
				$bunbukan_logo_url = $custom_logo_id ? wp_get_attachment_image_url($custom_logo_id, 'full') : '';
			}
			if (!$bunbukan_logo_url && function_exists('bunbukan_asset_url')) {
				$bunbukan_logo_url = bunbukan_asset_url('/assets/images/bunbukan.jpg') ?: bunbukan_asset_url('/assets/images/logoBBK32.jpg');
			}

			if ($bunbukan_logo_url):
				?>
				<div class="bb-hero__logo-wrapper">
					<img src="<?php echo esc_url($bunbukan_logo_url); ?>"
						alt="<?php echo esc_attr__('Bunbukan logo', 'bunbukan-europe'); ?>"
						class="bb-hero__logo" />
				</div>
			<?php endif; ?>

			<h1 class="bb-hero__title japanese-font">
				<span class="gradient-text">武館</span><br>
				<span>Bunbukan Europe</span>
			</h1>

			<p class="bb-hero__subtitle">
				<?php echo esc_html__('Official European Representation of Bunbukan Okinawa', 'bunbukan-europe'); ?>
			</p>

			<div class="bb-hero__disciplines">
				<div class="bb-hero__discipline">
					<p class="bb-hero__discipline-title"><?php echo esc_html__('Ryūkyū Kobudō', 'bunbukan-europe'); ?></p>
					<p class="bb-hero__discipline-subtitle">
						<?php echo esc_html__('Under Nakamoto Masahiro', 'bunbukan-europe'); ?>
					</p>
				</div>
			</div>

			<a href="#contact"
				class="bb-btn bb-btn--primary"><?php echo esc_html__('Begin Your Journey', 'bunbukan-europe'); ?></a>
		</div>
	</section>

	<!-- About Section - Option 3: Layered Panels -->
	<section id="about" class="bb-section">
		<?php bunbukan_render_divider('top'); ?>
		<div class="bb-section__container">
			<div class="bb-section__header">
				<h2 class="bb-section__title gradient-text">
					<?php echo esc_html__('About Bunbukan Europe', 'bunbukan-europe'); ?>
				</h2>
				<div class="bb-section__divider"></div>
			</div>

			<div class="bb-about__composition">
				<!-- Full-width image panel -->
				<div class="bb-about__image-panel bb-scroll-reveal bb-scroll-reveal--left">
					<?php
					// Helper function to find image with any extension
					if (!function_exists('bunbukan_find_image')) {
						function bunbukan_find_image($base_name, $search_paths = array())
						{
							$extensions = array('.svg', '.SVG', '.jpg', '.jpeg', '.png', '.gif', '.webp', '.JPG', '.JPEG', '.PNG', '.GIF');

							foreach ($search_paths as $path) {
								foreach ($extensions as $ext) {
									$full_path = $path . $base_name . $ext;
									if (function_exists('bunbukan_asset_url')) {
										$url = bunbukan_asset_url($full_path, '');
										if ($url) {
											return $url;
										}
									}
								}
							}
							return '';
						}
					}

					// Single heritage image
					$about_img = bunbukan_find_image('DSC01113', array('/assets/images/', '/bunbukan-eu/public/images/'));
					?>

					<div class="bb-about__image">
						<?php if ($about_img): ?>
							<img src="<?php echo esc_url($about_img); ?>"
								alt="<?php echo esc_attr__('Bunbukan Europe heritage', 'bunbukan-europe'); ?>" loading="lazy" />
						<?php endif; ?>
					</div>
				</div>

				<!-- Heritage & Mission - Dramatic Statement Section -->
				<div class="bb-about__statements">
					<div class="bb-about__statement bb-scroll-reveal bb-scroll-reveal--left">
						<div class="bb-about__statement-kanji">
							<span class="bb-about__kanji bb-about__kanji--multi">伝統</span>
						</div>
						<div class="bb-about__statement-content">
							<span
								class="bb-about__statement-script"><?php echo esc_html__('Heritage', 'bunbukan-europe'); ?></span>
							<h3 class="bb-about__statement-title"><?php echo esc_html__('OFFICIAL REPRESENTATION', 'bunbukan-europe'); ?>
							</h3>
							<p class="bb-about__statement-text">
								<?php echo esc_html__('As the official European representation of Bunbukan Okinawa, we preserve and transmit authentic Ryūkyū Kobudō as taught at the Bunbukan Honbu Dōjō, under the guidance of Nakamoto Masahiro.', 'bunbukan-europe'); ?>
							</p>
						</div>
					</div>

					<div class="bb-about__statement bb-about__statement--alt bb-scroll-reveal bb-scroll-reveal--right"
						data-delay="300">
						<div class="bb-about__statement-content">
							<span
								class="bb-about__statement-script"><?php echo esc_html__('Mission', 'bunbukan-europe'); ?></span>
							<h3 class="bb-about__statement-title"><?php echo esc_html__('THE WAY', 'bunbukan-europe'); ?></h3>
							<p class="bb-about__statement-text">
								<?php echo esc_html__('Technical depth and character development. Respect for tradition while fostering personal growth through the path of Ryūkyū Kobudō.', 'bunbukan-europe'); ?>
							</p>
						</div>
						<div class="bb-about__statement-kanji">
							<span class="bb-about__kanji">道</span>
						</div>
					</div>
				</div>

				<!-- Stats panel - single glass bar -->
				<div class="bb-about__stats-panel bb-scroll-reveal bb-scroll-reveal--up" data-delay="200">
					<div class="bb-about__stats">
						<div class="bb-about__stat">
							<div class="bb-about__stat-number">
								<span class="bb-about__stat-number-value" data-count-target="20">0</span>
								<span class="bb-about__stat-number-suffix">+</span>
							</div>
							<p class="bb-about__stat-label"><?php echo esc_html__('Members', 'bunbukan-europe'); ?></p>
						</div>
						<div class="bb-about__stat">
							<div class="bb-about__stat-number">
								<span class="bb-about__stat-number-value" data-count-target="3">0</span>
							</div>
							<p class="bb-about__stat-label">
								<?php echo esc_html__('Certified Trainers', 'bunbukan-europe'); ?>
							</p>
						</div>
						<div class="bb-about__stat">
							<div class="bb-about__stat-number bb-about__stat-number--percent">
								<span class="bb-about__stat-number-value" data-count-target="100">0</span>
								<span class="bb-about__stat-number-suffix">%</span>
							</div>
							<p class="bb-about__stat-label"><?php echo esc_html__('Authentic', 'bunbukan-europe'); ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php
	// Media helper: get attachment URL by slug (post_name).
	if (!function_exists('bunbukan_attachment_url_by_slug')) {
		function bunbukan_attachment_url_by_slug($slug)
		{
			$slug = sanitize_title((string) $slug);
			if (!$slug) {
				return '';
			}
			$att = get_page_by_path($slug, OBJECT, 'attachment');
			if (!$att) {
				return '';
			}
			$url = wp_get_attachment_url($att->ID);
			return $url ? (string) $url : '';
		}
	}
	?>

	<!-- Disciplines Section - Two Sides of a Coin -->
	<section id="disciplines" class="bb-section bb-about">
		<?php bunbukan_render_divider('top'); ?>
		<div class="bb-section__container">
			<div class="bb-section__header">
				<h2 class="bb-section__title gradient-text"><?php echo esc_html__('Ryūkyū Kobudō', 'bunbukan-europe'); ?>
				</h2>
				<div class="bb-section__divider"></div>
				<p class="bb-section__subtitle">
					<?php echo esc_html__('The traditional weapon art of Okinawa, preserving the authentic techniques and forms passed down through generations.', 'bunbukan-europe'); ?>
				</p>
			</div>

			<div class="bb-disciplines__stack">
				<?php
				// Logo for background overlay (same fallback chain as Brussels theme)
				$kobudo_logo =
					bunbukan_attachment_url_by_slug('bunbukan-background-logo-copy')
					?: bunbukan_find_image('bunbukan-bg-logo', array('/assets/images/', '/assets/images/logos/', '/bunbukan-eu/public/images/'))
					?: bunbukan_find_image('bunbukan-background-logo-copy', array('/assets/images/', '/assets/images/logos/', '/bunbukan-eu/public/images/'))
					?: bunbukan_find_image('logo-bunbukan-bg', array('/assets/images/logos/', '/assets/images/'))
					?: (function_exists('bunbukan_asset_url') ? bunbukan_asset_url('/assets/images/logos/logo-bunbukan-bg.png') : '');

				$kobudo_image =
					bunbukan_attachment_url_by_slug('makiwara-men-uchi')
					?: bunbukan_find_image('makiwara-men-uchi', array('/assets/images/', '/assets/images/disciplines/', '/bunbukan-eu/public/images/'))
					?: bunbukan_find_image('discipline-kobudo', array('/assets/images/disciplines/', '/assets/images/'))
					?: (function_exists('bunbukan_asset_url') ? bunbukan_asset_url('/assets/images/disciplines/discipline-kobudo.jpg') : '');

				$diploma_image =
					bunbukan_attachment_url_by_slug('diploma')
					?: bunbukan_find_image('diploma', array('/assets/images/', '/assets/images/disciplines/', '/bunbukan-eu/public/images/'));
				?>

				<!-- Kobudo Row (mirror layout: card left, image right – same as Brussels) -->
				<div class="bb-discipline-row bb-discipline-row--kobudo">
					<div class="bb-about__card bb-discipline-card bb-discipline-card--kobudo"
						<?php echo $kobudo_logo ? 'style="--bb-disciplines-logo: url(\'' . esc_url($kobudo_logo) . '\');"' : ''; ?>>
						<div class="bb-discipline-card__bg-logo"></div>
						<div class="bb-discipline-card__content">
							<h3 class="bb-disciplines__title-jp japanese-font">琉球古武道</h3>
							<h4 class="bb-disciplines__title"><?php echo esc_html__('Ryūkyū Kobudō', 'bunbukan-europe'); ?></h4>
							<p class="bb-disciplines__since"><?php echo esc_html__('Since 2001', 'bunbukan-europe'); ?></p>
							<p class="bb-disciplines__description bb-disciplines__description--left">
								<?php echo esc_html__('Ryūkyū Kobudō is the traditional weapon art of Okinawa. At Bunbukan Europe, this discipline develops coordination, control, and body awareness through the study of classical weapon forms and their applications, in an authentic and traditional approach under the guidance of Nakamoto Masahiro.', 'bunbukan-europe'); ?>
							</p>
						</div>
					</div>
					<div class="bb-discipline-row__image bb-discipline-row__image--kobudo bb-scroll-reveal bb-scroll-reveal--right">
						<?php if ($kobudo_image): ?>
							<img src="<?php echo esc_url($kobudo_image); ?>"
								alt="<?php echo esc_attr__('Kobudō training at makiwara', 'bunbukan-europe'); ?>" loading="lazy" />
						<?php endif; ?>
					</div>
				</div>

				<?php if ($diploma_image): ?>
					<!-- Diploma row: same structure as Karate row (image left, card right) -->
					<div class="bb-disciplines__diploma-wrapper">
						<div class="bb-discipline-row bb-discipline-row--karate">
							<div class="bb-discipline-row__image bb-discipline-row__image--karate bb-scroll-reveal bb-scroll-reveal--left">
								<img src="<?php echo esc_url($diploma_image); ?>"
									alt="<?php echo esc_attr__('Kobudō diploma', 'bunbukan-europe'); ?>" loading="lazy" />
							</div>
							<div class="bb-about__card bb-discipline-card"<?php echo $kobudo_logo ? ' style="--bb-disciplines-logo: url(\'' . esc_url($kobudo_logo) . '\');"' : ''; ?>>
								<div class="bb-discipline-card__bg-logo"></div>
								<div class="bb-discipline-card__content">
									<h3 class="bb-disciplines__title-jp japanese-font">免許状</h3>
									<h4 class="bb-disciplines__title"><?php echo esc_html__('Diplomas', 'bunbukan-europe'); ?></h4>
									<p class="bb-disciplines__diploma-tagline"><?php echo esc_html__('A certificate of authenticity', 'bunbukan-europe'); ?></p>
									<p class="bb-disciplines__description">
										<?php echo esc_html__('Our practitioners receive authentic Ryūkyū Kobudō diplomas awarded by the master of the Bunbukan Honbu Dōjō in Naha, Okinawa.', 'bunbukan-europe'); ?>
									</p>
								</div>
							</div>
						</div>
					</div>
				<?php endif; ?>

				<!-- Weapons subsection (coverflow 3D, infinite loop) -->
				<div id="weapons" class="bb-disciplines__weapons bb-weapons">
					<div class="bb-disciplines__weapons-header">
						<h2 class="bb-disciplines__weapons-title gradient-text"><?php echo esc_html__('Weapons', 'bunbukan-europe'); ?></h2>
						<div class="bb-disciplines__weapons-divider"></div>
						<p class="bb-disciplines__weapons-subtitle"><?php echo esc_html__('Classical weapons of Ryūkyū Kobudō', 'bunbukan-europe'); ?></p>
					</div>
					<?php
					$weapons = array(
						array(
							'name' => __('Bō', 'bunbukan-europe'),
							'name_jp' => '棒',
							'description' => __('The long staff, fundamental to Ryūkyū Kobudō. Used for striking, blocking and sweeping techniques.', 'bunbukan-europe'),
							'image' => (function_exists('bunbukan_find_image') ? bunbukan_find_image('bo', array('/assets/images/weapons/')) : '') ?: bunbukan_attachment_url_by_slug('bo-staff'),
						),
						array(
							'name' => __('Sai', 'bunbukan-europe'),
							'name_jp' => '釵',
							'description' => __('A three-pronged metal truncheon. Effective for blocking and trapping weapons.', 'bunbukan-europe'),
							'image' => (function_exists('bunbukan_find_image') ? bunbukan_find_image('sai', array('/assets/images/weapons/')) : '') ?: bunbukan_attachment_url_by_slug('sai'),
						),
						array(
							'name' => __('Tonfa', 'bunbukan-europe'),
							'name_jp' => 'トンファー',
							'description' => __('The side-handle baton. Rotating and striking techniques with versatile applications.', 'bunbukan-europe'),
							'image' => (function_exists('bunbukan_find_image') ? bunbukan_find_image('tonfa', array('/assets/images/weapons/')) : '') ?: bunbukan_attachment_url_by_slug('tonfa'),
						),
						array(
							'name' => __('Nunchaku', 'bunbukan-europe'),
							'name_jp' => 'ヌンチャク',
							'description' => __('Two short sticks connected by a chain or cord. Develops speed, coordination and flow.', 'bunbukan-europe'),
							'image' => (function_exists('bunbukan_find_image') ? bunbukan_find_image('nunchaku', array('/assets/images/weapons/')) : '') ?: bunbukan_attachment_url_by_slug('nunchaku'),
						),
						array(
							'name' => __('Kama', 'bunbukan-europe'),
							'name_jp' => '鎌',
							'description' => __('The Okinawan sickle. Cutting and hooking techniques derived from agricultural tools.', 'bunbukan-europe'),
							'image' => (function_exists('bunbukan_find_image') ? bunbukan_find_image('kama', array('/assets/images/weapons/')) : '') ?: bunbukan_attachment_url_by_slug('kama'),
						),
						array(
							'name' => __('Tinbe & Rochin', 'bunbukan-europe'),
							'name_jp' => 'ティンベー・ローチン',
							'description' => __('Shield and short spear. Traditional Okinawan combination for blocking and thrusting.', 'bunbukan-europe'),
							'image' => (function_exists('bunbukan_find_image') ? bunbukan_find_image('tinbe-rochin', array('/assets/images/weapons/')) : '') ?: bunbukan_attachment_url_by_slug('tinbe-rochin'),
						),
					);
					// Triple the list so we can always show cards on both sides (no visible end/start)
					$weapons = array_merge($weapons, $weapons, $weapons);
					// Placeholder SVG with weapon name when no image in assets/images/weapons/
					$weapons_placeholder_svg = function ($name, $name_jp) {
						$name = str_replace(array('&', '<', '>', '"'), array('&amp;', '&lt;', '&gt;', '&quot;'), $name);
						$name_jp = str_replace(array('&', '<', '>', '"'), array('&amp;', '&lt;', '&gt;', '&quot;'), $name_jp);
						$svg = '<svg xmlns="http://www.w3.org/2000/svg" width="400" height="300" viewBox="0 0 400 300"><rect fill="#1a1a1a" width="400" height="300"/><text x="50%" y="42%" text-anchor="middle" fill="rgba(255,255,255,0.5)" font-size="28" font-family="sans-serif">' . $name_jp . '</text><text x="50%" y="55%" text-anchor="middle" fill="rgba(255,255,255,0.9)" font-size="32" font-weight="bold">' . $name . '</text></svg>';
						return 'data:image/svg+xml,' . rawurlencode($svg);
					};
					?>
					<div class="bb-coverflow" id="bb-coverflow" role="region" aria-label="<?php echo esc_attr__('Weapons slider', 'bunbukan-europe'); ?>">
						<button type="button" class="bb-coverflow__nav bb-coverflow__nav--prev" aria-label="<?php echo esc_attr__('Previous', 'bunbukan-europe'); ?>">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="15 18 9 12 15 6"/></svg>
						</button>
						<button type="button" class="bb-coverflow__nav bb-coverflow__nav--next" aria-label="<?php echo esc_attr__('Next', 'bunbukan-europe'); ?>">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>
						</button>
						<div class="bb-coverflow__viewport">
							<div class="bb-coverflow__track">
								<?php foreach ($weapons as $index => $weapon) :
									$img_src = !empty($weapon['image']) ? $weapon['image'] : $weapons_placeholder_svg($weapon['name'], $weapon['name_jp']);
									?>
									<article class="bb-coverflow__card" data-index="<?php echo (int) $index; ?>">
										<div class="bb-coverflow__card-image">
											<img src="<?php echo esc_url($img_src); ?>" alt="<?php echo esc_attr($weapon['name']); ?>" loading="lazy" />
										</div>
										<div class="bb-coverflow__card-overlay">
											<h3 class="bb-coverflow__card-title"><?php echo esc_html($weapon['name']); ?></h3>
											<p class="bb-coverflow__card-desc"><?php echo esc_html($weapon['description']); ?></p>
										</div>
									</article>
								<?php endforeach; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Locations Section -->
	<section id="locations" class="bb-section">
		<?php bunbukan_render_divider('top'); ?>
		<div class="bb-section__container">
			<div class="bb-section__header">
				<h2 class="bb-section__title gradient-text"><?php echo esc_html__('Our Locations', 'bunbukan-europe'); ?></h2>
				<div class="bb-section__divider"></div>
				<p class="bb-section__subtitle">
					<?php echo esc_html__('Discover our affiliated clubs across Europe, all part of the Bunbukan Europe organization.', 'bunbukan-europe'); ?>
				</p>
			</div>

			<div class="bb-locations__map-container">
				<div id="bb-locations-map" class="bb-locations__map"></div>
			</div>
		</div>
	</section>

	<!-- Events Section -->
	<section id="events" class="bb-section">
		<?php bunbukan_render_divider('top'); ?>
		<div class="bb-section__container">
			<div class="bb-section__header">
				<h2 class="bb-section__title gradient-text"><?php echo esc_html__('Events', 'bunbukan-europe'); ?></h2>
				<div class="bb-section__divider"></div>
				<p class="bb-section__subtitle">
					<?php echo esc_html__('Seminars for the academic year 2025-2026', 'bunbukan-europe'); ?>
				</p>
			</div>

			<div class="bb-events__list">
				<?php
				$seminars = array(
					array(
						'date' => '2025-10-05',
						'day' => '5',
						'month' => esc_html__('October', 'bunbukan-europe'),
						'year' => '2025',
					),
					array(
						'date' => '2025-11-16',
						'day' => '16',
						'month' => esc_html__('November', 'bunbukan-europe'),
						'year' => '2025',
					),
					array(
						'date' => '2026-01-25',
						'day' => '25',
						'month' => esc_html__('January', 'bunbukan-europe'),
						'year' => '2026',
					),
					array(
						'date' => '2026-03-15',
						'day' => '15',
						'month' => esc_html__('March', 'bunbukan-europe'),
						'year' => '2026',
					),
					array(
						'date' => '2026-05-17',
						'day' => '17',
						'month' => esc_html__('May', 'bunbukan-europe'),
						'year' => '2026',
					),
				);

				foreach ($seminars as $index => $seminar):
					$delay = $index * 100; // Stagger animation
					?>
					<div class="bb-about__card bb-event-card bb-scroll-reveal"
						style="transition-delay: <?php echo intval($delay); ?>ms">
						<div class="bb-event-card__date">
							<span class="bb-event-card__day"><?php echo esc_html($seminar['day']); ?></span>
							<span class="bb-event-card__month"><?php echo esc_html($seminar['month']); ?></span>
							<span class="bb-event-card__year"><?php echo esc_html($seminar['year']); ?></span>
						</div>
						<div class="bb-event-card__content">
							<h3 class="bb-event-card__title"><?php echo esc_html__('Seminar', 'bunbukan-europe'); ?></h3>
							<p class="bb-event-card__description"><?php echo esc_html__('Ryūkyū Kobudō training seminar', 'bunbukan-europe'); ?></p>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<!-- Contact Section -->
	<section id="contact" class="bb-section bb-about">
		<?php bunbukan_render_divider('top'); ?>
		<div class="bb-section__container">
			<div class="bb-section__header">
				<h2 class="bb-section__title gradient-text">
					<?php echo esc_html__('Contact', 'bunbukan-europe'); ?>
				</h2>
				<div class="bb-section__divider"></div>
				<p class="bb-section__subtitle">
					<?php echo esc_html__('New members are always welcome. Come observe a class or join us for a free trial session.', 'bunbukan-europe'); ?>
				</p>
			</div>

			<div class="bb-contact__wrapper">
				<!-- Contact CTA -->
				<div class="bb-about__card bb-contact__cta bb-scroll-reveal" style="max-width: 800px; margin: 0 auto;">
					<h3 class="bb-about__card-title"><?php echo esc_html__('Get in Touch', 'bunbukan-europe'); ?></h3>
					<p class="bb-about__card-text">
						<?php echo esc_html__('Questions about training or want to arrange a visit? We would love to hear from you.', 'bunbukan-europe'); ?>
					</p>
					<div class="bb-contact__actions">
						<a href="mailto:info@bunbukan.eu"
							class="bb-btn bb-btn--primary"><?php echo esc_html__('Send Email', 'bunbukan-europe'); ?></a>
						<a href="https://www.google.com/maps/search/?api=1&query=Rue+des+Chalets+30,+1030+Schaerbeek"
							target="_blank" rel="noopener noreferrer"
							class="bb-btn bb-btn--outline"><?php echo esc_html__('View Map', 'bunbukan-europe'); ?></a>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- Affiliations Section -->
	<section id="affiliations" class="bb-section" style="position: relative; z-index: 5;">
		<?php bunbukan_render_divider('top'); ?>
		<div class="bb-section__container">
			<div class="bb-section__header">
				<h2 class="bb-section__title gradient-text"><?php echo esc_html__('Affiliations', 'bunbukan-europe'); ?></h2>
				<div class="bb-section__divider"></div>
			</div>

			<?php
			$affiliations = array(
				array(
					'name' => 'Budo Club Berchem Brussels',
					'logo' => 'budo-club-berchem-ico-3.png',
					'url' => 'https://www.budoclubberchem.be/',
				),
				array(
					'name' => 'Vlaamse Karate Associatie (VKA)',
					'logo' => 'vka-ico.png',
					'url' => 'https://www.vka.be/',
				),
				array(
					'name' => 'Shitokai Belgium',
					'logo' => 'shitokai-ico-2.png',
					'url' => 'https://www.shitokai.be/',
				),
				array(
					'name' => 'Dento Shito-Ryu (Japan)',
					'logo' => 'dento-shito-ryu-ico-8.png',
					'url' => 'https://www.dento-shitoryu.jp/',
				),
				array(
					'name' => 'Ono-ha Itto-Ryu',
					'logo' => 'ono-ha-itto-ryu-ico-7.png',
					'url' => 'https://www.ono-ha-ittoryu.be/',
				),
				array(
					'name' => 'Hontai Yoshin Ryu',
					'logo' => 'Hontai-Yoshin-ryu-Ju-Jutsu-belgium-ico.jpg',
					'url' => 'https://www.hontaiyoshinryu.be/',
				),
				array(
					'name' => 'Sport Brussel',
					'logo' => 'sport-brussel-ico-4.png',
					'url' => 'https://www.sport.brussels/',
				),
			);
			?>

			<div class="bb-affiliations" data-bb-affiliations>

				<div class="bb-affiliations__viewport" data-bb-affiliations-viewport>
					<div class="bb-affiliations__track">
						<?php
						// Double the array for seamless infinite scroll
						$duplicated_affiliations = array_merge($affiliations, $affiliations);
						foreach ($duplicated_affiliations as $aff): ?>
							<?php
							$logo_theme = '/assets/images/affiliations/' . $aff['logo'];
							$logo_react = '/bunbukan-eu/public/affiliations/' . $aff['logo'];
							$logo_url = function_exists('bunbukan_asset_url') ? bunbukan_asset_url($logo_theme, $logo_react) : '';
							$logo_key = strtolower(pathinfo($aff['logo'], PATHINFO_FILENAME));
							?>
							<div class="bb-affiliation-slide">
								<?php if (!empty($aff['url'])): ?>
									<a href="<?php echo esc_url($aff['url']); ?>" target="_blank" rel="noopener noreferrer"
										class="bb-affiliation-card">
										<?php if ($logo_url): ?>
											<img class="bb-affiliation-card__logo" data-logo="<?php echo esc_attr($logo_key); ?>"
												src="<?php echo esc_url($logo_url); ?>" alt="<?php echo esc_attr($aff['name']); ?>"
												loading="lazy" />
										<?php endif; ?>
										<p class="bb-affiliation-card__name"><?php echo esc_html($aff['name']); ?></p>
									</a>
								<?php else: ?>
									<div class="bb-affiliation-card">
										<?php if ($logo_url): ?>
											<img class="bb-affiliation-card__logo" data-logo="<?php echo esc_attr($logo_key); ?>"
												src="<?php echo esc_url($logo_url); ?>" alt="<?php echo esc_attr($aff['name']); ?>"
												loading="lazy" />
										<?php endif; ?>
										<p class="bb-affiliation-card__name"><?php echo esc_html($aff['name']); ?></p>
									</div>
								<?php endif; ?>
							</div>
						<?php endforeach; ?>
					</div>
				</div>

			</div>
		</div>
		<?php bunbukan_render_divider('bottom'); ?>
	</section>

</main><!-- #main -->

<?php
get_footer();




