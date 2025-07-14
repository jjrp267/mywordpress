<?php 
/**
 * Header Inner Banner
 */
return array(
	'title'      => esc_html__( 'Inner Banner', 'exotic-plant-store' ),
	'categories' => array( 'exotic-plant-store', 'Inner Banner' ),
	'content'    => '<!-- wp:group {"className":"inner-banner-wrap","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"},"color":{"background":"var(--wp--preset--color--extra-primary-second)"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group inner-banner-wrap has-background" style="background-color:var(--wp--preset--color--extra-primary-second);margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"></div>
<!-- /wp:group -->

<!-- wp:cover {"url":"' . esc_url( get_theme_file_uri( '/assets/images/banner.jpg' ) ) . '","id":12,"dimRatio":30,"overlayColor":"primary","isUserOverlayColor":true,"focalPoint":{"x":0.52,"y":0.49},"minHeight":450,"minHeightUnit":"px","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-cover" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:450px"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-30 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-12" alt="" src="' . esc_url( get_theme_file_uri( '/assets/images/banner.jpg' ) ) . '" style="object-position:52% 49%" data-object-fit="cover" data-object-position="52% 49%"/><div class="wp-block-cover__inner-container"><!-- wp:post-title {"textAlign":"center","style":{"typography":{"fontSize":"60px"}}} /--></div></div>
<!-- /wp:cover -->',
);