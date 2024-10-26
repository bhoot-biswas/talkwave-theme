<?php
/**
 * Title: Default footer
 * Slug: podcaster/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>

<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-contrast-color has-text-color has-link-color">
	<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"fontSize":"x-small"} -->
		<p class="has-x-small-font-size"><a href="#"><?php echo  esc_html_( 'Instagram', 'talkwavwe' ); ?></a>/<a href="#"><?php echo  esc_html_( 'Twitter', 'talkwavwe' ); ?></a>/<a href="#"><?php echo  esc_html_( 'LinkedIn', 'talkwavwe' ); ?></a></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"fontSize":"x-small"} -->
		<p class="has-x-small-font-size"><?php
		/* Translators: WordPress link. */
		$wordpress_link = '<a href="' . esc_url( talkwave_talkwave_( 'https://wordpress.org', 'talkwavwe' ) ) . '" rel="nofollow">WordPress</a>';
		echo sprintf(
			esc_html_( 'Designed with %1$s', 'talkwavwe' ),
			$wordpress_link
		);?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
