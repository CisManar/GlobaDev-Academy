<?php

/**
 * @file
 * Default theme implementation to display a node.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: An array of node items. Use render($content) to print them all,
 *   or print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $user_picture: The node author's picture from user-picture.tpl.php.
 * - $date: Formatted creation date. Preprocess functions can reformat it by
 *   calling format_date() with the desired parameters on the $created variable.
 * - $name: Themed username of node author output from theme_username().
 * - $node_url: Direct URL of the current node.
 * - $display_submitted: Whether submission information should be displayed.
 * - $submitted: Submission information created from $name and $date during
 *   template_preprocess_node().
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - node: The current template type; for example, "theming hook".
 *   - node-[type]: The current node type. For example, if the node is a
 *     "Blog entry" it would result in "node-blog". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node-teaser: Nodes in teaser form.
 *   - node-preview: Nodes in preview mode.
 *   The following are controlled through the node publishing options.
 *   - node-promoted: Nodes promoted to the front page.
 *   - node-sticky: Nodes ordered above other non-sticky nodes in teaser
 *     listings.
 *   - node-unpublished: Unpublished nodes visible only to administrators.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type; for example, story, page, blog, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $view_mode: View mode; for example, "full", "teaser".
 * - $teaser: Flag for the teaser state (shortcut for $view_mode == 'teaser').
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * Field variables: for each field instance attached to the node a corresponding
 * variable is defined; for example, $node->body becomes $body. When needing to
 * access a field's raw values, developers/themers are strongly encouraged to
 * use these variables. Otherwise they will have to explicitly specify the
 * desired field language; for example, $node->body['en'], thus overriding any
 * language negotiation rule that was previously applied.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see template_process()
 *
 * @ingroup themeable
 */
?>
    <div class="inner-page">
        <!--Preloader area start here-->
        <!--
        <div class="book_preload">
            <div class="book">
                <div class="book__page"></div>
                <div class="book__page"></div>
                <div class="book__page"></div>
            </div>
        </div>
      -->
        <!--Preloader area end here-->

        <!-- Breadcrumbs Start -->
        <?php
            $urlbg7 = file_create_url($node->field_event_image[$node->language][0]['uri']);
            $urlimg1 = file_create_url($node->field_event_image1[$node->language][0]['uri']);
            $urlimg2 = file_create_url($node->field_event_image2[$node->language][0]['uri']);
            $urlimg3 = file_create_url($node->field_event_image3[$node->language][0]['uri']);
            $urlimg4 = file_create_url($node->field_event_image4[$node->language][0]['uri']);
            $urlimg5 = file_create_url($node->field_event_image5[$node->language][0]['uri']);
            
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
								<a href="#" class="apply-btn">Apply For Event Now</a>
							</div>
						</div>
					</div>
				</div>
		</div>


        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs breadcrumbs-overlay" 
        style="background : url(<?php echo $urlbg7; ?>) no-repeat center fixed;background-size: cover" id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
		    <div class="breadcrumbs-inner">
		        <div class="container">
		            <div class="row">
		                <div class="col-md-12 text-center">
                            <h1 class="page-title"><?php print $title; ?></h1>
                            <span> By <?php print $node->field_lecturer_name['und'][0]['value']; ?>  </span>
		                    <ul>
		                        <li> 
                                    <a class="active" href="<?php print $GLOBALS['base_path']; ?>">
                                        Home
                                    </a>
                                </li>
                                <li>
                                <a class="active" href="?q=events-list">

                                    Events
                                </a>
                                </li>
                                <li> <?php print $title; ?> </li>
		                    </ul>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!-- Breadcrumbs End -->

        <!-- Event Details Start -->
        <div class="rs-event-details pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div class="event-details-content">
                            <h3 class="event-title">
                            
                            <?php print $title; ?>
                                

                            </h3>
                            <div class="event-meta">
                                <div class="event-date">
                                    <i class="fa fa-calendar"></i>
                                    <span>
                                    <?php 
                                        print $node->field_event_date['und'][0]['value']; 
                                    ?>
                                    </span>
                                </div>
                                <div class="event-time">
                                    <i class="fa fa-user"></i>
                                    <span>
                                    <?php print $node->field_lecturer_name['und'][0]['value']; ?>
                                    </span>
                                </div>
                                <div class="event-location">
                                    <i class="fa fa-map-marker"></i>
                                    <span>
                                    <?php print $node->field_event_location['und'][0]['value']; ?>

                                    </span>
                                </div>
                            </div>
                            <!--
                            <div class="event-img">
                            <?php // print render($content['field_event_image']); ?>

                
                                
                            </div>
                            -->
                            <div class="event-desc">
                            <p>
                            
                                <?php
                                    if(!empty($node->field_event_details)){
                                    print $node->field_event_details['und'][0]['value']; 
                                    }
                                ?>
       
                            </p>
                            </div>                            
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
              
                        <div class="sidebar-area">
                            <div class="cate-box">
                                <h3 class="title">Our Events</h3>

                                <?php print views_embed_view('events_list','events_block', $node->nid); ?>

                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Event Details End -->

        <!-- gellary -->
        <div id="gallery3" class="photo-gallery">
		<div class="current-photo">
			<img>
		</div>
		<div class="photo-list">
			<ul>
                <?php if(!empty($node->field_event_image1)){  ?>
                    <li data-src="<?php print $urlimg1;?>">
                        <div class="thumbnail">
                            <img src="<?php print $urlimg1;?>" title="" alt="" />
                        </div>
                    </li>
                <?php };
                    if(!empty($node->field_event_image2)){
                ?>
                    <li data-src="<?php print $urlimg2;?>">
                        <div class="thumbnail">
                            <img src="<?php print $urlimg2;?>" title="" alt="" />
                        </div>
                    </li>
                <?php };
                    if(!empty($node->field_event_image3)){
                ?>
                    <li data-src="<?php print $urlimg3;?>">
                        <div class="thumbnail">
                            <img src="<?php print $urlimg3;?>" title="" alt="" />
                        </div>
                    </li>
                <?php };
                    if(!empty($node->field_event_image4)){
                ?>
                    <li data-src="<?php print $urlimg4;?>">
                        <div class="thumbnail">
                            <img src="<?php print $urlimg4;?>" title="" alt="" />
                        </div>
                    </li>
                <?php };
                    if(!empty($node->field_event_image5)){
                ?>
                    <li data-src="<?php print $urlimg5;?>">
                        <div class="thumbnail">
                            <img src="<?php print $urlimg5;?>" title="" alt="" />
                        </div>
                    </li>
                <?php } ?>
			</ul>
		</div>
	</div>

        <!-- end gallery -->   
        عمل شير للنود لاحقا, التسجيل في الايفنت لاحقا
<div class="rs-event-details pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="event-details-content">        
                    <div class="share-area">
                        <div class="row rs-vertical-middle">
                            <div class="col-md-4">
                                <div class="book-btn">
                                    <a href="#">Book Now</a>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="share-inner">
                                    <span>SHARE:</span>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google"></i></a>
                                        <a href="#"><i class="fa fa-pinterest-p"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

        <!-- start scrollUp  -->
        <div id="scrollUp">
            <i class="fa fa-angle-up"></i>
        </div>


    </div>