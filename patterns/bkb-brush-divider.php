<?php
/**
 * Title: Brush Divider
 * Slug: bunbukan-europe/bkb-brush-divider
 * Categories: text
 */

$brush_image = bunbukan_europe_get_image_url( 'brush-stroke', '' );
$divider_style = $brush_image ? 'background-image: url(\'' . esc_url( $brush_image ) . '\');' : '';
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"className":"bkb-brush-divider"} -->
<div class="wp-block-group bkb-brush-divider" style="margin-top:0;margin-bottom:0;<?php echo $divider_style; ?>"></div>
<!-- /wp:group -->
