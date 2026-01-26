<?php
/**
 * Title: Affiliations Section
 * Slug: bunbukan-europe/bkb-affiliations-section
 * Categories: featured
 */

$affiliations = array(
	array( 'name' => 'Budo Club Berchem Brussels', 'logo' => 'budo-club-berchem-ico-3.png', 'url' => 'https://www.budoclubberchem.be/' ),
	array( 'name' => 'Vlaamse Karate Associatie (VKA)', 'logo' => 'vka-ico.png', 'url' => 'https://www.vka.be/' ),
	array( 'name' => 'Shitokai Belgium', 'logo' => 'shitokai-ico-2.png', 'url' => 'https://www.shitokai.be/' ),
	array( 'name' => 'Dento Shito-Ryu (Japan)', 'logo' => 'dento-shito-ryu-ico-8.png', 'url' => 'https://www.dento-shitoryu.jp/' ),
	array( 'name' => 'Ono-ha Itto-Ryu', 'logo' => 'ono-ha-itto-ryu-ico-7.png', 'url' => 'https://www.ono-ha-ittoryu.be/' ),
	array( 'name' => 'Hontai Yoshin Ryu', 'logo' => 'Hontai-Yoshin-ryu-Ju-Jutsu-belgium-ico.jpg', 'url' => 'https://www.hontaiyoshinryu.be/' ),
	array( 'name' => 'Sport Brussel', 'logo' => 'sport-brussel-ico-4.png', 'url' => 'https://www.sport.brussels/' ),
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--3xl)","bottom":"var(--wp--preset--spacing--3xl)"}}},"layout":{"type":"constrained","contentSize":"1080px"}} -->
<div class="wp-block-group bb-section" style="padding-top:var(--wp--preset--spacing--3xl);padding-bottom:var(--wp--preset--spacing--3xl)">
	<!-- wp:group {"className":"bb-section__header"} -->
	<div class="wp-block-group bb-section__header">
		<!-- wp:heading {"className":"bkb-section-title bb-section__title","textAlign":"center"} -->
		<h2 class="bkb-section-title bb-section__title has-text-align-center">Affiliations</h2>
		<!-- /wp:heading -->
		<!-- wp:separator {"className":"bb-section__divider"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var(--wp--preset--spacing--lg)"}}}} -->
	<div class="wp-block-columns">
		<?php foreach ( $affiliations as $aff ) : 
			$logo_url = bunbukan_europe_get_image_url( pathinfo( $aff['logo'], PATHINFO_FILENAME ), 'affiliations' );
		?>
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--lg)","bottom":"var(--wp--preset--spacing--lg)","left":"var(--wp--preset--spacing--lg)","right":"var(--wp--preset--spacing--lg)"},"blockGap":"var(--wp--preset--spacing--sm)"},"border":{"color":"var(--wp--preset--color--border)","width":"1px"}}} -->
			<div class="wp-block-group" style="border-color:var(--wp--preset--color--stone);border-width:1px;padding-top:var(--wp--preset--spacing--lg);padding-right:var(--wp--preset--spacing--lg);padding-bottom:var(--wp--preset--spacing--lg);padding-left:var(--wp--preset--spacing--lg)">
				<?php if ( $logo_url ) : ?>
				<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $logo_url ); ?>" alt="<?php echo esc_attr( $aff['name'] ); ?>"/></figure>
				<!-- /wp:image -->
				<?php endif; ?>
				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.95rem","fontWeight":"600"}}} -->
				<p class="has-text-align-center" style="font-size:0.95rem;font-weight:600"><?php echo esc_html( $aff['name'] ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
