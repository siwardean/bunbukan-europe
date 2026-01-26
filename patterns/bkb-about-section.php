<?php
/**
 * Title: About Section
 * Slug: bunbukan-europe/bkb-about-section
 * Categories: featured
 */

$about_image = bunbukan_europe_get_image_url( 'DSC01113', '' );
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--3xl)","bottom":"var(--wp--preset--spacing--3xl)"}}},"layout":{"type":"constrained","contentSize":"1080px"}} -->
<div class="wp-block-group bb-section" style="padding-top:var(--wp--preset--spacing--3xl);padding-bottom:var(--wp--preset--spacing--3xl)">
	<!-- wp:group {"className":"bb-section__header"} -->
	<div class="wp-block-group bb-section__header">
		<!-- wp:heading {"className":"bkb-section-title bb-section__title","textAlign":"center"} -->
		<h2 class="bkb-section-title bb-section__title has-text-align-center">About Bunbukan Europe</h2>
		<!-- /wp:heading -->
		<!-- wp:separator {"className":"bb-section__divider"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var(--wp--preset--spacing--xl)"}}}} -->
	<div class="wp-block-columns">
		<!-- wp:column -->
		<div class="wp-block-column">
			<?php if ( $about_image ) : ?>
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $about_image ); ?>" alt="Bunbukan Europe heritage"/></figure>
			<!-- /wp:image -->
			<?php endif; ?>
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--lg)","bottom":"var(--wp--preset--spacing--lg)","left":"var(--wp--preset--spacing--lg)","right":"var(--wp--preset--spacing--lg)"},"blockGap":"var(--wp--preset--spacing--sm)"},"color":{"background":"var(--wp--preset--color--surface-2)"},"border":{"color":"var(--wp--preset--color--border)","width":"1px"}}} -->
			<div class="wp-block-group has-background" style="background-color:var(--wp--preset--color--surface-2);border-color:var(--wp--preset--color--border);border-width:1px;padding-top:var(--wp--preset--spacing--lg);padding-right:var(--wp--preset--spacing--lg);padding-bottom:var(--wp--preset--spacing--lg);padding-left:var(--wp--preset--spacing--lg)">
				<!-- wp:paragraph {"className":"bkb-badge"} -->
				<p class="bkb-badge">Heritage</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3} -->
				<h3>SINCE 1977</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p>As part of Budo Club Berchem, we preserve and transmit Ryūkyū Kobudō as taught at the Bunbukan Honbu Dōjō, under the guidance of Nakamoto Masahiro.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--lg)","bottom":"var(--wp--preset--spacing--lg)","left":"var(--wp--preset--spacing--lg)","right":"var(--wp--preset--spacing--lg)"},"blockGap":"var(--wp--preset--spacing--sm)"},"color":{"background":"var(--wp--preset--color--surface-2)"},"border":{"color":"var(--wp--preset--color--border)","width":"1px"}}} -->
			<div class="wp-block-group has-background" style="background-color:var(--wp--preset--color--surface-2);border-color:var(--wp--preset--color--border);border-width:1px;padding-top:var(--wp--preset--spacing--lg);padding-right:var(--wp--preset--spacing--lg);padding-bottom:var(--wp--preset--spacing--lg);padding-left:var(--wp--preset--spacing--lg)">
				<!-- wp:paragraph {"className":"bkb-badge"} -->
				<p class="bkb-badge">Mission</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3} -->
				<h3>THE WAY</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p>Technical depth and character development. Respect for tradition while fostering personal growth through the path of Ryūkyū Kobudō.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
