<?php
/**
 * Pods Data Migration - Pre-fill Pods fields with default content
 *
 * Populates Pods fields on the front page with Europe-specific default values.
 *
 * @package Bunbukan_Europe
 */

if (!defined('ABSPATH')) {
	exit;
}

/**
 * Pre-fill all Pods fields with the current content
 */
function bunbukan_europe_prefill_pods_fields()
{
	if (!function_exists('pods')) {
		return;
	}

	if (!is_admin()) {
		return;
	}

	$front_page_id = get_option('page_on_front');
	if ($front_page_id) {
		bunbukan_europe_prefill_homepage_fields($front_page_id);
	}
}

/**
 * Pre-fill homepage fields (Europe defaults)
 */
function bunbukan_europe_prefill_homepage_fields($page_id)
{
	$pod = pods('page', $page_id);
	if (!$pod || !$pod->exists()) {
		return;
	}

	// ============================================================================
	// SECTION HERO
	// ============================================================================
	$hero_fields = array();

	if (!$pod->field('hero_title_jp')) {
		$hero_fields['hero_title_jp'] = '武館';
	}
	if (!$pod->field('hero_title_en')) {
		$hero_fields['hero_title_en'] = 'Bunbukan Europe';
	}
	if (!$pod->field('hero_subtitle')) {
		$hero_fields['hero_subtitle'] = 'Official European Representation of Bunbukan Okinawa';
	}
	if (!$pod->field('hero_discipline_1_title')) {
		$hero_fields['hero_discipline_1_title'] = 'Ryūkyū Kobudō';
	}
	if (!$pod->field('hero_discipline_1_subtitle')) {
		$hero_fields['hero_discipline_1_subtitle'] = 'Under Nakamoto Masahiro';
	}
	if (!$pod->field('hero_discipline_2_title')) {
		$hero_fields['hero_discipline_2_title'] = '';
	}
	if (!$pod->field('hero_discipline_2_subtitle')) {
		$hero_fields['hero_discipline_2_subtitle'] = '';
	}
	if (!$pod->field('hero_cta_text')) {
		$hero_fields['hero_cta_text'] = 'Begin Your Journey';
	}

	if (!empty($hero_fields)) {
		$pod->save($hero_fields);
	}

	// ============================================================================
	// SECTION ABOUT
	// ============================================================================
	$about_fields = array();

	if (!$pod->field('about_title')) {
		$about_fields['about_title'] = 'About Bunbukan Europe';
	}
	if (!$pod->field('about_heritage_label')) {
		$about_fields['about_heritage_label'] = 'Heritage';
	}
	if (!$pod->field('about_heritage_title')) {
		$about_fields['about_heritage_title'] = 'OFFICIAL REPRESENTATION';
	}
	if (!$pod->field('about_heritage_text')) {
		$about_fields['about_heritage_text'] = 'As the official European representation of Bunbukan Okinawa, we preserve and transmit authentic Ryūkyū Kobudō as taught at the Bunbukan Honbu Dōjō, under the guidance of Nakamoto Masahiro.';
	}
	if (!$pod->field('about_mission_label')) {
		$about_fields['about_mission_label'] = 'Mission';
	}
	if (!$pod->field('about_mission_title')) {
		$about_fields['about_mission_title'] = 'THE WAY';
	}
	if (!$pod->field('about_mission_text')) {
		$about_fields['about_mission_text'] = 'Technical depth and character development. Respect for tradition while fostering personal growth through the path of Ryūkyū Kobudō.';
	}
	if (!$pod->field('about_stat_1_value')) {
		$about_fields['about_stat_1_value'] = '20';
	}
	if (!$pod->field('about_stat_1_suffix')) {
		$about_fields['about_stat_1_suffix'] = '+';
	}
	if (!$pod->field('about_stat_1_label')) {
		$about_fields['about_stat_1_label'] = 'Members';
	}
	if (!$pod->field('about_stat_2_value')) {
		$about_fields['about_stat_2_value'] = '3';
	}
	if (!$pod->field('about_stat_2_suffix')) {
		$about_fields['about_stat_2_suffix'] = '';
	}
	if (!$pod->field('about_stat_2_label')) {
		$about_fields['about_stat_2_label'] = 'Certified Trainers';
	}
	if (!$pod->field('about_stat_3_value')) {
		$about_fields['about_stat_3_value'] = '100';
	}
	if (!$pod->field('about_stat_3_suffix')) {
		$about_fields['about_stat_3_suffix'] = '%';
	}
	if (!$pod->field('about_stat_3_label')) {
		$about_fields['about_stat_3_label'] = 'Authentic';
	}

	if (!empty($about_fields)) {
		$pod->save($about_fields);
	}

	// ============================================================================
	// SECTION DISCIPLINES (Ryūkyū Kobudō only for Europe)
	// ============================================================================
	$disciplines_fields = array();

	if (!$pod->field('disciplines_title')) {
		$disciplines_fields['disciplines_title'] = 'Ryūkyū Kobudō';
	}
	if (!$pod->field('disciplines_subtitle')) {
		$disciplines_fields['disciplines_subtitle'] = 'The traditional weapon art of Okinawa, preserving the authentic techniques and forms passed down through generations.';
	}
	if (!$pod->field('karate_title_jp')) {
		$disciplines_fields['karate_title_jp'] = '';
	}
	if (!$pod->field('karate_title')) {
		$disciplines_fields['karate_title'] = '';
	}
	if (!$pod->field('karate_since')) {
		$disciplines_fields['karate_since'] = '';
	}
	if (!$pod->field('karate_description')) {
		$disciplines_fields['karate_description'] = '';
	}
	if (!$pod->field('kobudo_title_jp')) {
		$disciplines_fields['kobudo_title_jp'] = '琉球古武道';
	}
	if (!$pod->field('kobudo_title')) {
		$disciplines_fields['kobudo_title'] = 'Ryūkyū Kobudō';
	}
	if (!$pod->field('kobudo_since')) {
		$disciplines_fields['kobudo_since'] = 'Since 2001';
	}
	if (!$pod->field('kobudo_description')) {
		$disciplines_fields['kobudo_description'] = 'Ryūkyū Kobudō is the traditional weapon art of Okinawa. At Bunbukan Europe, this discipline develops coordination, control, and body awareness through the study of classical weapon forms and their applications, under the guidance of Nakamoto Masahiro.';
	}

	if (!empty($disciplines_fields)) {
		$pod->save($disciplines_fields);
	}

	// ============================================================================
	// SECTION INSTRUCTORS (generic placeholders; edit in admin)
	// ============================================================================
	$instructors_fields = array();

	if (!$pod->field('instructors_title')) {
		$instructors_fields['instructors_title'] = 'Our Instructors';
	}
	if (!$pod->field('instructor_1_name')) {
		$instructors_fields['instructor_1_name'] = '';
	}
	if (!$pod->field('instructor_1_title')) {
		$instructors_fields['instructor_1_title'] = '';
	}
	if (!$pod->field('instructor_1_description')) {
		$instructors_fields['instructor_1_description'] = '';
	}
	if (!$pod->field('instructor_2_name')) {
		$instructors_fields['instructor_2_name'] = '';
	}
	if (!$pod->field('instructor_2_title')) {
		$instructors_fields['instructor_2_title'] = '';
	}
	if (!$pod->field('instructor_2_description')) {
		$instructors_fields['instructor_2_description'] = '';
	}
	if (!$pod->field('instructor_3_name')) {
		$instructors_fields['instructor_3_name'] = '';
	}
	if (!$pod->field('instructor_3_title')) {
		$instructors_fields['instructor_3_title'] = '';
	}
	if (!$pod->field('instructor_3_description')) {
		$instructors_fields['instructor_3_description'] = '';
	}

	if (!empty($instructors_fields)) {
		$pod->save($instructors_fields);
	}

	// ============================================================================
	// SECTION CONTACT
	// ============================================================================
	$contact_fields = array();

	if (!$pod->field('contact_title')) {
		$contact_fields['contact_title'] = 'Contact';
	}
	if (!$pod->field('contact_subtitle')) {
		$contact_fields['contact_subtitle'] = 'New members are always welcome. Come observe a class or join us for a free trial session.';
	}
	if (!$pod->field('contact_subtitle_2')) {
		$contact_fields['contact_subtitle_2'] = '';
	}
	if (!$pod->field('schedule_title')) {
		$contact_fields['schedule_title'] = 'Training Schedule';
	}
	if (!$pod->field('schedule_1_day')) {
		$contact_fields['schedule_1_day'] = '';
	}
	if (!$pod->field('schedule_1_time')) {
		$contact_fields['schedule_1_time'] = '';
	}
	if (!$pod->field('schedule_1_discipline')) {
		$contact_fields['schedule_1_discipline'] = '';
	}
	if (!$pod->field('schedule_2_day')) {
		$contact_fields['schedule_2_day'] = '';
	}
	if (!$pod->field('schedule_2_time')) {
		$contact_fields['schedule_2_time'] = '';
	}
	if (!$pod->field('schedule_2_discipline')) {
		$contact_fields['schedule_2_discipline'] = '';
	}
	if (!$pod->field('schedule_3_day')) {
		$contact_fields['schedule_3_day'] = '';
	}
	if (!$pod->field('schedule_3_time')) {
		$contact_fields['schedule_3_time'] = '';
	}
	if (!$pod->field('schedule_3_discipline')) {
		$contact_fields['schedule_3_discipline'] = '';
	}
	if (!$pod->field('schedule_note')) {
		$contact_fields['schedule_note'] = 'Open to students aged 14 and up. All levels welcome.';
	}
	if (!$pod->field('contact_cta_title')) {
		$contact_fields['contact_cta_title'] = 'Get in Touch';
	}
	if (!$pod->field('contact_cta_text')) {
		$contact_fields['contact_cta_text'] = 'Questions about training or want to arrange a visit? We would love to hear from you.';
	}
	if (!$pod->field('contact_email')) {
		$contact_fields['contact_email'] = 'info@bunbukan.eu';
	}
	if (!$pod->field('contact_email_button')) {
		$contact_fields['contact_email_button'] = 'Send Email';
	}
	if (!$pod->field('contact_address')) {
		$contact_fields['contact_address'] = '';
	}
	if (!$pod->field('contact_map_button')) {
		$contact_fields['contact_map_button'] = 'View Map';
	}

	if (!empty($contact_fields)) {
		$pod->save($contact_fields);
	}

	// ============================================================================
	// SECTION AFFILIATIONS (Europe-relevant)
	// ============================================================================
	$affiliations_fields = array();

	if (!$pod->field('affiliations_title')) {
		$affiliations_fields['affiliations_title'] = 'Affiliations';
	}
	if (!$pod->field('affiliation_1_name')) {
		$affiliations_fields['affiliation_1_name'] = 'Bunbukan Okinawa (Honbu Dōjō)';
	}
	if (!$pod->field('affiliation_1_url')) {
		$affiliations_fields['affiliation_1_url'] = 'https://bunbukan.eu';
	}
	if (!$pod->field('affiliation_2_name')) {
		$affiliations_fields['affiliation_2_name'] = 'Bunbukan Brussels';
	}
	if (!$pod->field('affiliation_2_url')) {
		$affiliations_fields['affiliation_2_url'] = 'https://bunbukan.eu';
	}
	if (!$pod->field('affiliation_3_name')) {
		$affiliations_fields['affiliation_3_name'] = '';
	}
	if (!$pod->field('affiliation_3_url')) {
		$affiliations_fields['affiliation_3_url'] = '';
	}
	if (!$pod->field('affiliation_4_name')) {
		$affiliations_fields['affiliation_4_name'] = '';
	}
	if (!$pod->field('affiliation_4_url')) {
		$affiliations_fields['affiliation_4_url'] = '';
	}
	if (!$pod->field('affiliation_5_name')) {
		$affiliations_fields['affiliation_5_name'] = '';
	}
	if (!$pod->field('affiliation_5_url')) {
		$affiliations_fields['affiliation_5_url'] = '';
	}
	if (!$pod->field('affiliation_6_name')) {
		$affiliations_fields['affiliation_6_name'] = '';
	}
	if (!$pod->field('affiliation_6_url')) {
		$affiliations_fields['affiliation_6_url'] = '';
	}
	if (!$pod->field('affiliation_7_name')) {
		$affiliations_fields['affiliation_7_name'] = '';
	}
	if (!$pod->field('affiliation_7_url')) {
		$affiliations_fields['affiliation_7_url'] = '';
	}
	if (!$pod->field('affiliation_8_name')) {
		$affiliations_fields['affiliation_8_name'] = '';
	}
	if (!$pod->field('affiliation_8_url')) {
		$affiliations_fields['affiliation_8_url'] = '';
	}

	if (!empty($affiliations_fields)) {
		$pod->save($affiliations_fields);
	}
}

/**
 * Add migration menu page
 */
add_action('admin_menu', 'bunbukan_europe_add_migration_menu');
function bunbukan_europe_add_migration_menu()
{
	add_submenu_page(
		'tools.php',
		__('Pods Migration – Bunbukan Europe', 'bunbukan-europe'),
		__('Migration Pods (Europe)', 'bunbukan-europe'),
		'manage_options',
		'bunbukan-europe-pods-migration',
		'bunbukan_europe_migration_page'
	);
}

/**
 * Migration page callback
 */
function bunbukan_europe_migration_page()
{
	if (isset($_POST['bunbukan_europe_migrate_data']) && check_admin_referer('bunbukan_europe_migrate')) {
		try {
			bunbukan_europe_prefill_pods_fields();
			echo '<div class="notice notice-success"><p>✅ ' . esc_html__('Migration complete! Fields have been pre-filled with default content.', 'bunbukan-europe') . '</p>';
			echo '<p><strong>' . esc_html__('Pre-filled sections:', 'bunbukan-europe') . '</strong></p>';
			echo '<ul style="margin-left: 20px;">';
			echo '<li>✅ ' . esc_html__('Hero (titles, subtitle, discipline, CTA)', 'bunbukan-europe') . '</li>';
			echo '<li>✅ ' . esc_html__('About (heritage, mission, stats)', 'bunbukan-europe') . '</li>';
			echo '<li>✅ ' . esc_html__('Disciplines (Ryūkyū Kobudō)', 'bunbukan-europe') . '</li>';
			echo '<li>✅ ' . esc_html__('Instructors (placeholders)', 'bunbukan-europe') . '</li>';
			echo '<li>✅ ' . esc_html__('Contact (CTA, email)', 'bunbukan-europe') . '</li>';
			echo '<li>✅ ' . esc_html__('Affiliations', 'bunbukan-europe') . '</li>';
			echo '</ul></div>';
		} catch (Exception $e) {
			echo '<div class="notice notice-error"><p>❌ ' . esc_html__('Migration error:', 'bunbukan-europe') . ' ' . esc_html($e->getMessage()) . '</p></div>';
		}
	}
	?>
	<div class="wrap">
		<h1><?php echo esc_html__('Pods Migration – Pre-fill Fields', 'bunbukan-europe'); ?></h1>

		<?php if (!function_exists('pods')): ?>
			<div class="notice notice-error">
				<p><strong>❌ <?php echo esc_html__('Pods plugin is not installed or active.', 'bunbukan-europe'); ?></strong></p>
				<p><?php echo esc_html__('To use this feature:', 'bunbukan-europe'); ?></p>
				<ol>
					<li><?php echo esc_html__('Go to Plugins > Add New', 'bunbukan-europe'); ?></li>
					<li><?php echo esc_html__('Search for "Pods - Custom Content Types and Fields"', 'bunbukan-europe'); ?></li>
					<li><?php echo esc_html__('Install and activate the plugin', 'bunbukan-europe'); ?></li>
				</ol>
			</div>
		<?php else: ?>
			<div class="notice notice-info">
				<p>✅ <?php echo esc_html__('Pods plugin is active.', 'bunbukan-europe'); ?></p>
			</div>

			<p><?php echo esc_html__('This will fill all Pods fields on the front page with Bunbukan Europe default content.', 'bunbukan-europe'); ?></p>
			<p><strong><?php echo esc_html__('Note:', 'bunbukan-europe'); ?></strong> <?php echo esc_html__('Only empty fields will be filled. Existing content will not be overwritten.', 'bunbukan-europe'); ?></p>

			<h2><?php echo esc_html__('How to edit content with Pods', 'bunbukan-europe'); ?></h2>
			<ol>
				<li><?php echo esc_html__('Set a front page in Settings > Reading', 'bunbukan-europe'); ?></li>
				<li><?php echo esc_html__('Edit that page – Pods fields will appear below the editor', 'bunbukan-europe'); ?></li>
				<li><?php echo esc_html__('Fill or adjust fields to customize each section', 'bunbukan-europe'); ?></li>
				<li><?php echo esc_html__('Translations can be managed with Polylang and the theme .po/.mo files', 'bunbukan-europe'); ?></li>
			</ol>

			<form method="post">
				<?php wp_nonce_field('bunbukan_europe_migrate'); ?>
				<p>
					<button type="submit" name="bunbukan_europe_migrate_data" class="button button-primary button-large">
						🚀 <?php echo esc_html__('Pre-fill all Pods fields', 'bunbukan-europe'); ?>
					</button>
				</p>
			</form>
		<?php endif; ?>
	</div>
	<?php
}
