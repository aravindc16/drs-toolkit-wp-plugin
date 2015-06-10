<?php
/**
 * This is just a temporary placeholder template to demonstrate that it is working.
 * You will want to setup your own template for your theme to display the information.
 */

get_header(); ?>
<noscript>
<div class="noscript_warning">PLEASE NOTE: Javascript is disabled on your browser. For the best user experience, please enable javascript on your browser now.</div>
</noscript>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
<div id="drs-breadcrumbs"><?php get_item_breadcrumbs(); ?></div>
<div id="drs-content">
  <div id="drs-item-left" class="one_half">
		<img id="drs-item-img" src='<?php get_item_image(); ?>'/>
	</div>
  <div id="drs-item-right" class="one_half last">
		<div id="drs-item-details"><?php get_item_details(); ?></div>
	</div>
</div><!-- #drs-content -->


</main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer(); ?>
