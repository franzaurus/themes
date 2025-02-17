<?php
/**
 * Title: 404
 * Slug: archivo/404
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

<!-- wp:column {"width":"","style":{"spacing":{"padding":{"top":"var:preset|spacing|50"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--50)"><!-- wp:heading {"textAlign":"left","level":1,"fontSize":"medium"} -->
<h1 class="wp-block-heading has-text-align-left has-medium-font-size" id="oops-that-page-can-t-be-found"><?php esc_html_e('Oops! That page can’t be found.', 'archivo');?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e('It looks like nothing was found at this location. Maybe try a search?', 'archivo');?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"showLabel":false,"placeholder":"<?php esc_html_e('Search...', 'archivo');?>","buttonText":"<?php esc_html_e('Search', 'archivo');?>"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:template-part {"slug":"footer","tagName":"footer","align":"wide"} /--></div>
<!-- /wp:group -->
