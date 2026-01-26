<?php
/**
 * Title: Instructors Section
 * Slug: bunbukan-europe/bkb-instructors-section
 * Categories: featured
 */

$instructors = array(
	array(
		'name' => 'Alain Berckmans',
		'title' => 'Chief Instructor, Ryūkyū Kobudō',
		'description' => 'Over 50 years of martial arts experience. Direct student of Nakamoto Masahiro, preserving the authentic Ryūkyū Kobudō tradition.',
		'image' => bunbukan_europe_find_image( 'SAI-FINAL', array( '/assets/images/' ) ),
	),
	array(
		'name' => 'Quentin Moreau',
		'title' => 'Black Belt in Kobudō, Technical Instructor',
		'description' => 'Assists in Ryūkyū Kobudō instruction. Special focus on Okinawan weapons training and traditional forms.',
		'image' => bunbukan_europe_find_image( 'quentin-enhanced', array( '/assets/images/' ) ),
	),
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--3xl)","bottom":"var(--wp--preset--spacing--3xl)"}}},"layout":{"type":"constrained","contentSize":"1080px"}} -->
<div class="wp-block-group bb-section" style="padding-top:var(--wp--preset--spacing--3xl);padding-bottom:var(--wp--preset--spacing--3xl)">
	<!-- wp:group {"className":"bb-section__header"} -->
	<div class="wp-block-group bb-section__header">
		<!-- wp:heading {"className":"bkb-section-title bb-section__title","textAlign":"center"} -->
		<h2 class="bkb-section-title bb-section__title has-text-align-center">Our Instructors</h2>
		<!-- /wp:heading -->
		<!-- wp:separator {"className":"bb-section__divider"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var(--wp--preset--spacing--lg)"}}}} -->
	<div class="wp-block-columns">
		<?php foreach ( $instructors as $instructor ) : ?>
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"var(--wp--preset--spacing--lg)","left":"0","right":"0"},"blockGap":"var(--wp--preset--spacing--sm)"},"border":{"color":"var(--wp--preset--color--border)","width":"1px"}}} -->
			<div class="wp-block-group" style="border-color:var(--wp--preset--color--stone);border-width:1px;padding-bottom:var(--wp--preset--spacing--lg)">
				<?php if ( $instructor['image'] ) : ?>
				<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $instructor['image'] ); ?>" alt="<?php echo esc_attr( $instructor['name'] ); ?>"/></figure>
				<!-- /wp:image -->
				<?php endif; ?>
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--lg)","left":"var(--wp--preset--spacing--lg)","right":"var(--wp--preset--spacing--lg)"},"blockGap":"var(--wp--preset--spacing--sm)"}}} -->
				<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--lg);padding-right:var(--wp--preset--spacing--lg);padding-left:var(--wp--preset--spacing--lg)">
					<!-- wp:heading {"level":3} -->
					<h3><?php echo esc_html( $instructor['name'] ); ?></h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"textColor":"red","style":{"typography":{"fontSize":"0.95rem","fontWeight":"600"}}} -->
					<p class="has-vermillion-color has-text-color" style="font-size:0.95rem;font-weight:600"><?php echo esc_html( $instructor['title'] ); ?></p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"textColor":"stone"} -->
					<p class="has-stone-color has-text-color"><?php echo esc_html( $instructor['description'] ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
