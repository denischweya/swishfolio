<?php
/**
 * Title: Services Cards
 * Slug: swishfolio/services-cards
 * Categories: featured, services
 * Description: A grid of service cards showcasing features or offerings with Bauhaus styling.
 * Keywords: services, cards, features, grid
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)">
	<!-- wp:heading {"textAlign":"center","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.05em"}},"fontSize":"x-large"} -->
	<h2 class="wp-block-heading has-text-align-center has-x-large-font-size" style="letter-spacing:0.05em;text-transform:uppercase">Our Services</h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}},"fontSize":"medium"} -->
	<p class="has-text-align-center has-medium-font-size" style="margin-bottom:var(--wp--preset--spacing--60)">Premium solutions for your creative needs</p>
	<!-- /wp:paragraph -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:swishfolio-core/card {"icon":{"type":"library","value":"brush"},"iconPosition":"top","iconSize":"large","iconColor":"#D02020","title":"Design","description":"Bold visual identities and user interfaces crafted with precision and purpose.","linkText":"Learn More","linkUrl":"#","linkStyle":"text","decorativeShape":"circle","decorativeColor":"#F0C020"} /-->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:swishfolio-core/card {"icon":{"type":"library","value":"code"},"iconPosition":"top","iconSize":"large","iconColor":"#1040C0","title":"Development","description":"Clean, performant code that brings your vision to life across all platforms.","linkText":"Learn More","linkUrl":"#","linkStyle":"text","decorativeShape":"square","decorativeColor":"#D02020"} /-->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:swishfolio-core/card {"icon":{"type":"library","value":"globe"},"iconPosition":"top","iconSize":"large","iconColor":"#F0C020","title":"Strategy","description":"Data-driven approaches to help your brand connect with the right audience.","linkText":"Learn More","linkUrl":"#","linkStyle":"text","decorativeShape":"triangle","decorativeColor":"#1040C0"} /-->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
