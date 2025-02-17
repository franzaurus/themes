<?php
/**
 * Title: home
 * Slug: conference/home
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header","align":"full"} /-->

<!-- wp:group {"tagName":"main","metadata":{"name":"Hero"},"style":{"spacing":{"margin":{"top":"0rem","bottom":"0rem"},"blockGap":"0rem"}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
<main class="wp-block-group has-primary-background-color has-background" style="margin-top:0rem;margin-bottom:0rem"><!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/conference_img-structure-people-auditorium-crowd-audience.jpg","dimRatio":10,"overlayColor":"contrast","isUserOverlayColor":true,"minHeight":55,"minHeightUnit":"vh","contentPosition":"top center","align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0"}},"border":{"left":{"color":"var:preset|color|primary","width":"1rem"},"right":{"color":"var:preset|color|primary","width":"1rem"}},"color":[]},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull has-custom-content-position is-position-top-center" style="border-right-color:var(--wp--preset--color--primary);border-right-width:1rem;border-left-color:var(--wp--preset--color--primary);border-left-width:1rem;margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0;min-height:55vh"><span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim-10 has-background-dim"></span><img class="wp-block-cover__image-background " alt="" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/conference_img-structure-people-auditorium-crowd-audience.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"right":"var:preset|spacing|60","left":"var:preset|spacing|40","top":"var:preset|spacing|40","bottom":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|50"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"primary","textColor":"base","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
<div class="wp-block-group alignwide has-base-color has-primary-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"textAlign":"left","level":1,"align":"wide","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
<h1 class="wp-block-heading alignwide has-text-align-left has-base-color has-text-color has-link-color"><?php esc_html_e('Acme Corp Design Summit at Reykjavík', 'conference');?></h1>
<!-- /wp:heading -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group alignwide"><!-- wp:site-tagline {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
<p class="has-base-color has-text-color has-link-color"><?php esc_html_e('The International Conference Centre', 'conference');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
<p class="has-base-color has-text-color has-link-color"><?php esc_html_e('Reykjavík, Iceland', 'conference');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover --></main>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"About"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|70"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"1.5rem"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.05rem","fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"x-small"} -->
<p class="has-primary-color has-text-color has-link-color has-x-small-font-size" style="font-style:normal;font-weight:700;letter-spacing:0.05rem;text-transform:uppercase"><?php esc_html_e('Acme Corp Design Summit 2024', 'conference');?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e('We are thrilled to invite you to a week-long journey into design innovation and creativity. Reykjavík, the capital of Iceland, with its enchanting blend of natural wonders and artistic vibrancy, is the perfect canvas for this global gathering of designers, thinkers, and visionaries.', 'conference');?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"custom","style":{"border":{"radius":"2px","bottom":{"color":"var:preset|color|secondary","width":"0.5rem"},"top":[],"right":[],"left":[]}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/conference_img-speakers.jpg" alt="" class="" style="border-radius:2px;border-bottom-color:var(--wp--preset--color--secondary);border-bottom-width:0.5rem;aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"1.5rem"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e('Speakers', 'conference');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e('See our range of speakers who spoke at the event in Athens!', 'conference');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Find details"},"style":{"spacing":{"blockGap":"0.5rem","padding":{"top":"0.5em","bottom":"0.5em"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="padding-top:0.5em;padding-bottom:0.5em"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.05rem","fontStyle":"normal","fontWeight":"700","lineHeight":"1","textDecoration":"none"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","fontSize":"x-small"} -->
<p class="has-contrast-color has-text-color has-link-color has-x-small-font-size" style="font-style:normal;font-weight:700;letter-spacing:0.05rem;line-height:1;text-decoration:none;text-transform:uppercase"><?php esc_html_e('Find details', 'conference');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"lineHeight":"1"}},"textColor":"contrast","fontSize":"x-small"} -->
<p class="has-contrast-color has-text-color has-link-color has-x-small-font-size" style="line-height:1"><?php esc_html_e('', 'conference');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"custom","style":{"border":{"radius":"2px","bottom":{"color":"var:preset|color|secondary","width":"0.5rem"},"top":[],"right":[],"left":[]}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/conference_img-organizers-1.jpg" alt="" class="" style="border-radius:2px;border-bottom-color:var(--wp--preset--color--secondary);border-bottom-width:0.5rem;aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"1.5rem"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e('Organizers', 'conference');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e('Find out who organized WordCamp Europe 2023 and our teams involved.', 'conference');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Find details"},"style":{"spacing":{"blockGap":"0.5rem","padding":{"top":"0.5em","bottom":"0.5em"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="padding-top:0.5em;padding-bottom:0.5em"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.05rem","fontStyle":"normal","fontWeight":"700","lineHeight":"1","textDecoration":"none"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","fontSize":"x-small"} -->
<p class="has-contrast-color has-text-color has-link-color has-x-small-font-size" style="font-style:normal;font-weight:700;letter-spacing:0.05rem;line-height:1;text-decoration:none;text-transform:uppercase"><?php esc_html_e('Find details', 'conference');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"lineHeight":"1"}},"textColor":"contrast","fontSize":"x-small"} -->
<p class="has-contrast-color has-text-color has-link-color has-x-small-font-size" style="line-height:1"><?php esc_html_e('', 'conference');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"custom","style":{"border":{"radius":"2px","bottom":{"color":"var:preset|color|secondary","width":"0.5rem"},"top":[],"right":[],"left":[]}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/conference_img-attendees.jpg" alt="" class="" style="border-radius:2px;border-bottom-color:var(--wp--preset--color--secondary);border-bottom-width:0.5rem;aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"1.5rem"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e('Attendees', 'conference');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e('Our list is here – see which members of the WP community joined us!', 'conference');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Find details"},"style":{"spacing":{"blockGap":"0.5rem","padding":{"top":"0.5em","bottom":"0.5em"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="padding-top:0.5em;padding-bottom:0.5em"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.05rem","fontStyle":"normal","fontWeight":"700","lineHeight":"1","textDecoration":"none"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","fontSize":"x-small"} -->
<p class="has-contrast-color has-text-color has-link-color has-x-small-font-size" style="font-style:normal;font-weight:700;letter-spacing:0.05rem;line-height:1;text-decoration:none;text-transform:uppercase"><?php esc_html_e('Find details', 'conference');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"lineHeight":"1"}},"textColor":"contrast","fontSize":"x-small"} -->
<p class="has-contrast-color has-text-color has-link-color has-x-small-font-size" style="line-height:1"><?php esc_html_e('', 'conference');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"var:preset|spacing|50"} -->
<div style="height:var(--wp--preset--spacing--50)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"verticalAlignment":"top","align":"wide"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","width":"33.33%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:33.33%"><!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"2px","bottom":{"color":"var:preset|color|secondary","width":"0.5rem"},"top":[],"right":[],"left":[]},"color":[]}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/location_landscape-sea-tree-water-nature.jpg" alt="" class="" style="border-radius:2px;border-bottom-color:var(--wp--preset--color--secondary);border-bottom-width:0.5rem;aspect-ratio:3/4;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top"} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"lineHeight":"1.2","letterSpacing":"-0.05rem"}},"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-x-large-font-size" style="letter-spacing:-0.05rem;line-height:1.2"><?php esc_html_e('The International ConfCentr in Reykjavík, Iceland', 'conference');?></h2>
<!-- /wp:heading -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph -->
<p><?php esc_html_e('Embark on this adventure as we relocate the Acme Corp Design Summit 2024 to the mesmerizing Iceland. Nestled in the heart of this stunning island nation, Reykjavík offers a truly unique setting for our global gathering.', 'conference');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph -->
<p><?php esc_html_e('Known for its landscapes, geothermal wonders, and artistic spirit, Reykjavík is a place where creativity and innovation flourish amidst breathtaking natural beauty, and it is the perfect location to our conference.', 'conference');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e('Discover the location', 'conference');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Sponsors"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"align":"wide","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.05rem","fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"x-small"} -->
<h2 class="wp-block-heading alignwide has-primary-color has-text-color has-link-color has-x-small-font-size" style="font-style:normal;font-weight:700;letter-spacing:0.05rem;text-transform:uppercase"><?php esc_html_e('Sponsors', 'conference');?></h2>
<!-- /wp:heading -->

<!-- wp:group {"metadata":{"name":"Find details"},"style":{"spacing":{"blockGap":"0.5rem","padding":{"top":"0.5em","bottom":"0.5em"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="padding-top:0.5em;padding-bottom:0.5em"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.05rem","fontStyle":"normal","fontWeight":"700","lineHeight":"1","textDecoration":"none"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","fontSize":"x-small"} -->
<p class="has-contrast-color has-text-color has-link-color has-x-small-font-size" style="font-style:normal;font-weight:700;letter-spacing:0.05rem;line-height:1;text-decoration:none;text-transform:uppercase"><?php esc_html_e('All sponsors', 'conference');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"lineHeight":"1"}},"textColor":"contrast","fontSize":"x-small"} -->
<p class="has-contrast-color has-text-color has-link-color has-x-small-font-size" style="line-height:1"><?php esc_html_e('', 'conference');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:image {"scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":[]}} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/wp-brand_1.png" alt="" style="object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:image {"scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/wp-brand_2.png" alt="" style="object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:image {"scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/wp-brand_3.png" alt="" style="object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:image {"scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/wp-brand_4.png" alt="" style="object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:image {"scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/wp-brand_5.png" alt="" style="object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:image {"scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/wp-brand_6.png" alt="" style="object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:image {"scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/wp-brand_7.png" alt="" style="object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"News"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"align":"wide","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.05rem","fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"x-small"} -->
<h2 class="wp-block-heading alignwide has-primary-color has-text-color has-link-color has-x-small-font-size" style="font-style:normal;font-weight:700;letter-spacing:0.05rem;text-transform:uppercase"><?php esc_html_e('News', 'conference');?></h2>
<!-- /wp:heading -->

<!-- wp:group {"metadata":{"name":"Find details"},"style":{"spacing":{"blockGap":"0.5rem","padding":{"top":"0.5em","bottom":"0.5em"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="padding-top:0.5em;padding-bottom:0.5em"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.05rem","fontStyle":"normal","fontWeight":"700","lineHeight":"1","textDecoration":"none"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","fontSize":"x-small"} -->
<p class="has-contrast-color has-text-color has-link-color has-x-small-font-size" style="font-style:normal;font-weight:700;letter-spacing:0.05rem;line-height:1;text-decoration:none;text-transform:uppercase"><?php esc_html_e('Go to blog', 'conference');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"lineHeight":"1"}},"textColor":"contrast","fontSize":"x-small"} -->
<p class="has-contrast-color has-text-color has-link-color has-x-small-font-size" style="line-height:1"><?php esc_html_e('', 'conference');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":0,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false,"taxQuery":null,"parents":[],"format":[]},"enhancedPagination":true,"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:post-title {"isLink":true} /-->

<!-- wp:post-excerpt {"showMoreOnNewLine":false} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Footer"},"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","gradient":"default-gradient","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-contrast-color has-default-gradient-gradient-background has-text-color has-background has-link-color" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/conference_img-meetup.jpg","dimRatio":0,"customOverlayColor":"#b9b9b9","isUserOverlayColor":false,"minHeight":55,"minHeightUnit":"vh","isDark":false,"align":"wide","style":{"color":[],"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"radius":"2px"}},"textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignwide is-light has-base-color has-text-color has-link-color" style="border-radius:2px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40);min-height:55vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#b9b9b9"></span><img class="wp-block-cover__image-background " alt="" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/conference_img-meetup.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"lineHeight":"1.1","letterSpacing":"-0.05rem"}},"textColor":"base","fontSize":"x-large"} -->
<h2 class="wp-block-heading has-base-color has-text-color has-link-color has-x-large-font-size" style="letter-spacing:-0.05rem;line-height:1.1"><?php esc_html_e('Reserve your tickets today.', 'conference');?></h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":""} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"2rem","right":"2rem"},"blockGap":"3rem"},"border":{"radius":"2px"}},"backgroundColor":"base","textColor":"contrast","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
<div class="wp-block-group has-contrast-color has-base-background-color has-text-color has-background has-link-color" style="border-radius:2px;padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php esc_html_e('Join the Conference for a transformative experience that will elevate and inspire your work. Save your spots, and prepare for an unforgettable experience!', 'conference');?></h3>
<!-- /wp:heading -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","textColor":"base","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-base-color has-primary-background-color has-text-color has-background has-link-color wp-element-button"><?php esc_html_e('Register now', 'conference');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer","align":"full"} /--></div>
<!-- /wp:group -->