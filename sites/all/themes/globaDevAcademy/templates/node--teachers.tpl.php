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

<!-- Breadcrumbs Start -->
<div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
		    <div class="breadcrumbs-inner">
		        <div class="container">
		            <div class="row">
		                <div class="col-md-12 text-center">
		                    <h1 class="page-title">TEACHERS SINGLE</h1>
		                    <ul>
		                        <li>
		                            <a class="active" href="<?php print $GLOBALS['base_path'];?>">Home</a>
		                        </li>
		                        <li>
									<a href="?q=teachers-list"> Teachers </a>
								</li>
		                    </ul>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!-- Breadcrumbs End -->

	<div class="rs-team-single pt-100">
			<div class="container">
				<div class="row team">
				    <div class="col-lg-4 col-md-12">
				        <div class="team-photo mobile-mb-40">
                       
				            <img src="<?php print  file_create_url($node->field__teacher_image[$node->language][0]['uri']); ?>" alt="Team1">
				            <div class="team-icons"> 
                <a href="<?php print $node->field_teacher_facebook['und'][0]['value']; ?>" target="_blank" class="social-icon"><i class="fa fa-facebook"></i></a>
				
                <a href="<?php print $node->field_teacher_google_plus['und'][0]['value']; ?>" target="_blank" class="social-icon"><i class="fa fa-google-plus"></i></a>
                
                <a href="<?php print $node->field_teacher_twitter['und'][0]['value']; ?>" target="_blank"class="social-icon"><i class="fa fa-twitter"></i></a>
                
                <a href="<?php print $node->field_teacher_linkedin['und'][0]['value']; ?>" target="_blank"class="social-icon"><i class="fa fa-linkedin"></i></a>

				            </div>
				        </div>
				    </div>
				    <div class="col-lg-8 col-md-12">
				        <h3 class="team-name"><?php print $title; ?></h3>
				        <p class="team-title">
                        <?php print $node->field_position['und'][0]['value']; ?>
							
                        </p>
					
				        <p class="team-contact">
				        	<i class="fa fa-mobile"></i> <?php  print $node->field_phone_number['und'][0]['value']; ?> <i class="ml-15 fa fa-envelope-o"></i> <?php  print $node->field_email['und'][0]['value']; ?>
				        </p>
				        <p>
                            <?php  print $node->field_about_teacher['und'][0]['value']; ?>
                        </p>

                        <div class="team-skill">
					        <h3 class="skill-title">Our Teacher Skill:</h3>
					        <div class="row">
					        	<div class="col-md-6">
                                    <?php if(!empty($node->field_skill1_name['und'][0]['value'])): ?>
					        		<div class="progress rs-progress">
										<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?php print $node->field_skill1_level['und'][0]['value']; ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php print $node->field_skill1_level['und'][0]['value']."%"; ?>">
											<span class="pb-label"><?php print $node->field_skill1_name['und'][0]['value']; ?></span>
											<span class="pb-percent"><?php print $node->field_skill1_level['und'][0]['value']."%"; ?></span>
										</div>
                                    </div>
                                <?php endif;
                                if(!empty($node->field_skill2_name['und'][0]['value'])):
                                ?>
			                		<div class="progress rs-progress">
										<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?php print $node->field_skill2_level['und'][0]['value']; ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php print $node->field_skill2_level['und'][0]['value']."%"; ?>">
											<span class="pb-label"><?php print $node->field_skill2_name['und'][0]['value']; ?></span>
											<span class="pb-percent"><?php print $node->field_skill2_level['und'][0]['value']."%"; ?></span>
										</div>
                                    </div>
                                    <?php endif; ?>
					        	</div>
					        	<div class="col-md-6">
                                <?php if(!empty($node->field_skill3_name['und'][0]['value'])): ?>
                                    <div class="progress rs-progress">
										<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?php print $node->field_skill3_level['und'][0]['value']; ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php print $node->field_skill3_level['und'][0]['value']."%"; ?>">
											<span class="pb-label"><?php print $node->field_skill3_name['und'][0]['value']; ?></span>
											<span class="pb-percent"><?php print $node->field_skill3_level['und'][0]['value']."%"; ?></span>
										</div>
                                    </div>
                                <?php endif;
                                if(!empty($node->field_skill4_name['und'][0]['value'])): ?>
			                		<div class="progress rs-progress">
										<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?php print $node->field_skill4_level['und'][0]['value']; ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php print $node->field_skill4_level['und'][0]['value']."%"; ?>">
											<span class="pb-label"><?php print $node->field_skill4_name['und'][0]['value']; ?></span>
											<span class="pb-percent"><?php print $node->field_skill4_level['und'][0]['value']."%"; ?></span>
										</div>
                                    </div>
                                    <?php endif ?>
                                </div>
                                
					        </div>
				        </div>
				    </div>
				</div>
			</div>
		</div>