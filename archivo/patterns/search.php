<?php
/**
 * Title: search
 * Slug: archivo/search
 * Inserter: no
 */
?>
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"0px","left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"23.9235%"} -->
<div class="wp-block-column" style="flex-basis:23.9235%"><!-- wp:group {"style":{"position":{"type":"sticky","top":"0px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:template-part {"slug":"header","tagName":"header"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"","style":{"spacing":{"padding":{"top":"var:preset|spacing|50"}}}} -->
<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--50)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0","left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"32.0513%"} -->
<div class="wp-block-column" style="flex-basis:32.0513%"><!-- wp:query-title {"type":"search"} /-->

<!-- wp:search {"showLabel":false,"placeholder":"<?php esc_html_e('Search...', 'archivo');?>","buttonText":"<?php esc_html_e('Search', 'archivo');?>"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":""} -->
<div class="wp-block-column"></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"var:preset|spacing|50"} -->
<div style="height:var(--wp--preset--spacing--50)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query {"queryId":4,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:columns {"style":{"spacing":{"padding":{"bottom":"3rem"}}}} -->
<div class="wp-block-columns" style="padding-bottom:3rem"><!-- wp:column {"width":"32.0513%"} -->
<div class="wp-block-column" style="flex-basis:32.0513%"><!-- wp:post-title {"isLink":true} /-->

<!-- wp:post-excerpt /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex"}} -->
<div class="wp-block-group"><!-- wp:post-date /-->

<!-- wp:post-author {"showAvatar":false,"isLink":true} /-->

<!-- wp:post-terms {"term":"category"} /-->

<!-- wp:post-terms {"term":"post_tag"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":""} -->
<div class="wp-block-column"><!-- wp:post-featured-image {"isLink":true} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'archivo');?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results -->

<!-- wp:query-pagination {"paginationArrow":"chevron","layout":{"type":"flex","justifyContent":"left","arrow":"chevron"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:template-part {"slug":"footer","tagName":"footer","align":"wide"} /--></div>
<!-- /wp:group -->
