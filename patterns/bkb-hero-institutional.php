<?php
/**
 * Title: Institutional Hero
 * Slug: bunbukan-europe/bkb-hero-institutional
 * Categories: featured
 */

$hero_bg = bunbukan_europe_get_image_url( 'hero_honbu_dojo', '' );
$hero_style = $hero_bg ? 'background-image: url(\'' . esc_url( $hero_bg ) . '\'); background-size: cover; background-position: center;' : '';
?>
<!-- wp:cover {"url":"<?php echo esc_url( $hero_bg ?: '' ); ?>","dimRatio":40,"overlayColor":"surface","minHeight":600,"style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--3xl)","bottom":"var(--wp--preset--spacing--3xl)"}}}} -->
<div class="wp-block-cover" style="min-height:600px;padding-top:var(--wp--preset--spacing--3xl);padding-bottom:var(--wp--preset--spacing--3xl)"><span aria-hidden="true" class="wp-block-cover__background has-surface-background-color has-background-dim has-background-dim-40"></span><div class="wp-block-cover__inner-container">
	<!-- wp:group {"layout":{"type":"constrained","contentSize":"1080px"}} -->
	<div class="wp-block-group" style="text-align:center;">
		<!-- wp:paragraph {"className":"bkb-badge","style":{"color":{"text":"var(--wp--preset--color--text)"}}} -->
		<p class="bkb-badge has-text-color" style="color:var(--wp--preset--color--text)">Official European Representation</p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"level":1,"textAlign":"center","style":{"typography":{"fontSize":"2.75rem"},"color":{"text":"var(--wp--preset--color--text)"}}} -->
		<h1 class="has-text-align-center has-text-color" style="color:var(--wp--preset--color--text);font-size:2.75rem">Bundled Tradition, European Reach</h1>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"align":"center","fontSize":"medium","style":{"typography":{"fontFamily":"var(--wp--preset--font-family--modern-sans)"},"color":{"text":"var(--wp--preset--color--text)"}}} -->
		<p class="has-text-align-center has-medium-font-size has-text-color" style="color:var(--wp--preset--color--text);font-family:var(--wp--preset--font-family--modern-sans)">Bunbukan Europe preserves the authentic Ryūkyū Kobudō tradition with an institutional and educational mission.</p>
		<!-- /wp:paragraph -->
		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/clubs">Find an affiliated club</a></div>
			<!-- /wp:button -->
			<!-- wp:button {"style":{"color":{"background":"transparent","text":"var(--wp--preset--color--text)"},"border":{"color":"var(--wp--preset--color--border)","width":"1px"}}} -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/affiliation">Affiliation & recognition</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div></div>
<!-- /wp:cover -->
