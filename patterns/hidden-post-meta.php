<?php
/**
 * Title: Post meta
 * Slug: sembrono/hidden-post-meta
 * Inserter: no
 */
?>

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
	<!-- wp:group {"style":{"spacing":{"blockGap":"0.3em"}},"layout":{"type":"flex","justifyContent":"left"}} -->
	<div class="wp-block-group">
		<!-- wp:post-date {"format":"j M Y","isLink":true} /-->

		<!-- wp:paragraph {"textColor":"contrast-2"} -->
		<p class="has-contrast-2-color has-text-color">— opo iki</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"fontSize":"small","textColor":"contrast-2"} -->
		<p class="has-small-font-size has-contrast-2-color has-text-color"><?php echo esc_html__('by', 'sembrono'); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:post-author-name {"isLink":true} /-->

		<!-- wp:post-terms {"term":"category","prefix":"<?php echo esc_html__('in ', 'sembrono'); ?>"} /-->

	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
