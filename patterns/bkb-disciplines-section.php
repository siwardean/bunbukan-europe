<?php
/**
 * Title: Disciplines Section
 * Slug: bunbukan-europe/bkb-disciplines-section
 * Categories: featured
 */

$kobudo_logo = bunbukan_europe_get_image_url( 'bunbukan-bg-logo', '' );
$kobudo_image = bunbukan_europe_get_image_url( 'makiwara-men-uchi', '' );
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--3xl)","bottom":"var(--wp--preset--spacing--3xl)"}}},"layout":{"type":"constrained","contentSize":"1080px"}} -->
<div class="wp-block-group bb-section" style="padding-top:var(--wp--preset--spacing--3xl);padding-bottom:var(--wp--preset--spacing--3xl)">
	<!-- wp:group {"className":"bb-section__header"} -->
	<div class="wp-block-group bb-section__header">
		<!-- wp:heading {"className":"bkb-section-title bb-section__title","textAlign":"center"} -->
		<h2 class="bkb-section-title bb-section__title has-text-align-center">Ryūkyū Kobudō</h2>
		<!-- /wp:heading -->
		<!-- wp:separator {"className":"bb-section__divider"} /-->
		<!-- wp:paragraph {"align":"center","textColor":"stone","className":"bb-section__subtitle"} -->
		<p class="has-text-align-center has-stone-color has-text-color bb-section__subtitle">The traditional weapon art of Okinawa, preserving the authentic techniques and forms passed down through generations.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var(--wp--preset--spacing--xl)"}}}} -->
	<div class="wp-block-columns">
		<!-- wp:column -->
		<div class="wp-block-column">
			<?php if ( $kobudo_image ) : ?>
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $kobudo_image ); ?>" alt="Ryūkyū Kobudō training"/></figure>
			<!-- /wp:image -->
			<?php endif; ?>
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--lg)","bottom":"var(--wp--preset--spacing--lg)","left":"var(--wp--preset--spacing--lg)","right":"var(--wp--preset--spacing--lg)"},"blockGap":"var(--wp--preset--spacing--sm)"},"border":{"color":"var(--wp--preset--color--border)","width":"1px"}}} -->
			<div class="wp-block-group" style="border-color:var(--wp--preset--color--stone);border-width:1px;padding-top:var(--wp--preset--spacing--lg);padding-right:var(--wp--preset--spacing--lg);padding-bottom:var(--wp--preset--spacing--lg);padding-left:var(--wp--preset--spacing--lg)">
				<!-- wp:heading {"level":3,"className":"japanese-font"} -->
				<h3 class="japanese-font">琉球古武道</h3>
				<!-- /wp:heading -->
				<!-- wp:heading {"level":4} -->
				<h4>Ryūkyū Kobudō</h4>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"textColor":"stone"} -->
				<p class="has-stone-color has-text-color">Since 2001</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph -->
				<p>Ryūkyū Kobudō is the traditional weapon art of Okinawa. At Bunbukan Europe, this discipline develops coordination, control, and body awareness through the study of classical weapon forms and their applications, in an authentic and traditional approach under the guidance of Nakamoto Masahiro.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
