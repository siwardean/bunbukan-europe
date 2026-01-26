<?php
/**
 * Title: Club Card
 * Slug: bunbukan-europe/bkb-club-card
 * Categories: text
 */

$club_image = bunbukan_europe_get_image_url( 'DSC01113', '' );
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--lg)","bottom":"var(--wp--preset--spacing--lg)","left":"var(--wp--preset--spacing--lg)","right":"var(--wp--preset--spacing--lg)"},"blockGap":"var(--wp--preset--spacing--sm)"},"border":{"color":"var(--wp--preset--color--stone)","width":"1px"}}} -->
<div class="wp-block-group" style="border-color:var(--wp--preset--color--stone);border-width:1px;padding-top:var(--wp--preset--spacing--lg);padding-right:var(--wp--preset--spacing--lg);padding-bottom:var(--wp--preset--spacing--lg);padding-left:var(--wp--preset--spacing--lg)">
	<?php if ( $club_image ) : ?>
	<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $club_image ); ?>" alt="Club"/></figure>
	<!-- /wp:image -->
	<?php endif; ?>
	<!-- wp:heading {"level":3} -->
	<h3>Club Name</h3>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"textColor":"stone"} -->
	<p class="has-stone-color has-text-color">City, Country</p>
	<!-- /wp:paragraph -->
	<!-- wp:buttons -->
	<div class="wp-block-buttons">
		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#">View club</a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
