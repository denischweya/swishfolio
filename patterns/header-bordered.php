<?php
/**
 * Title: Neo-Brutalist Header (Bordered)
 * Slug: swishfolio/header-bordered
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Neo-brutalist header with bordered navigation items.
 *
 * @package Swishfolio
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"bottom":{"color":"var:preset|color|contrast","width":"8px"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-background-color has-background" style="border-bottom-color:var(--wp--preset--color--contrast);border-bottom-width:8px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"},"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
		<div class="wp-block-group">
			<!-- wp:group {"style":{"border":{"width":"4px","color":"var:preset|color|contrast"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"shadow":"var:custom|shadow|medium"},"backgroundColor":"accent-1","layout":{"type":"constrained"}} -->
			<div class="wp-block-group has-border-color has-accent-1-background-color has-background" style="border-color:var(--wp--preset--color--contrast);border-width:4px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40);box-shadow:var(--wp--custom--shadow--medium)">
				<!-- wp:site-title {"level":0,"style":{"typography":{"fontStyle":"normal","fontWeight":"900","textTransform":"uppercase","letterSpacing":"-0.02em"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"fontSize":"x-large","fontFamily":"space-grotesk"} /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:navigation {"ref":"","className":"is-style-neo-bordered","overlayBackgroundColor":"base","overlayTextColor":"contrast","style":{"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.05em"},"spacing":{"blockGap":"var:preset|spacing|20"}},"fontSize":"small","fontFamily":"space-grotesk","layout":{"type":"flex","justifyContent":"right"}} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
