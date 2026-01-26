<?php
/**
 * Title: Two Column Callout
 * Slug: bunbukan-europe/bkb-two-column-callout
 * Categories: text
 */

$about_image = bunbukan_europe_get_image_url( 'DSC01113', '' );
?>
<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var(--wp--preset--spacing--xl)"}}}} -->
<div class="wp-block-columns">
	<!-- wp:column -->
	<div class="wp-block-column">
		<?php if ( $about_image ) : ?>
		<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
		<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $about_image ); ?>" alt="Tradition"/></figure>
		<!-- /wp:image -->
		<?php endif; ?>
		<!-- wp:heading {"level":3} -->
		<h3>Tradition</h3>
		<!-- /wp:heading -->
		<!-- wp:paragraph -->
		<p>Authentic Okinawan heritage, transmitted with care and responsibility.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:column -->
	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:heading {"level":3} -->
		<h3>Modern stewardship</h3>
		<!-- /wp:heading -->
		<!-- wp:paragraph -->
		<p>Institutional clarity for European clubs, instructors, and official registers.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->
