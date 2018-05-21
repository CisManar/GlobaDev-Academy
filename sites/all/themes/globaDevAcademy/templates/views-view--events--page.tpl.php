<?php

/**
 * @file
 * Main view template.
 *
 * Variables available:
 * - $classes_array: An array of classes determined in
 *   template_preprocess_views_view(). Default classes are:
 *     .view
 *     .view-[css_name]
 *     .view-id-[view_name]
 *     .view-display-id-[display_name]
 *     .view-dom-id-[dom_id]
 * - $classes: A string version of $classes_array for use in the class attribute
 * - $css_name: A css-safe version of the view name.
 * - $css_class: The user-specified classes names, if any
 * - $header: The view header
 * - $footer: The view footer
 * - $rows: The results of the view query, if any
 * - $empty: The empty text to display if the view is empty
 * - $pager: The pager next/prev links to display, if any
 * - $exposed: Exposed widget form/info to display
 * - $feed_icon: Feed icon to display, if any
 * - $more: A link to view more, if any.
 *
 * @ingroup views_templates
 */
?>
    <div class="rs-toolbar">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<div class="rs-toolbar-left">
								<div class="welcome-message">
									<i class="fa fa-bank"></i><span>Welcome to 

									<a href="<?php print $GLOBALS['base_path']; ?>" title="<?php print t('Home'); ?>" rel="home">
									<span><?php print variable_get('site_name', 'Drupal'); ?></span></a>	

									</span> 
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="rs-toolbar-right">

								<div class="toolbar-share-icon">
                                <?php print views_embed_view('social_icons_links','social_icons_links_block', $node->nid); ?>


								</div>
							</div>
						</div>
					</div>
				</div>
		</div>
<div class="inner-page">

   <div class="rs-breadcrumbs bg7 breadcrumbs-overlay" style="background:url(./sites/default/files/defualtcover.png) no-repeat center;background-size:cover;">
		    <div class="breadcrumbs-inner">
		        <div class="container">
		            <div class="row">
		                <div class="col-md-12 text-center">
		                    <h1 class="page-title">OUR EVENTS</h1>
		                    <ul>
		                        <li>
		                            <a class="active" href="<?php print $GLOBALS['base_path']; ?>">Home</a>
		                        </li>
		                        <li>Events</li>
		                    </ul>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>

  <div class="rs-events-2 sec-spacer">
    <div class="container">
      <div class="row">
        

  <?php if ($rows): ?>
  
      <?php print $rows; ?>
  <?php endif; ?>

  <?php if ($pager): ?>
    <?php print $pager; ?>
  <?php endif; ?>


       
      </div> 
    </div> 
  </div>
</div>


