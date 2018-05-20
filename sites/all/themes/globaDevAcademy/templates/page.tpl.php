<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>

<?php
	if (current_path()=="admin") {
		$form = drupal_get_form('user_login_block');
		echo render($form);
	}
?>

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
		
        <!--Full width header Start-->
		<div class="full-width-header">

			<!-- Toolbar Start -->
			<div class="rs-toolbar">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<div class="rs-toolbar-left">
								<div class="welcome-message">
									<i class="fa fa-bank"></i><span>Welcome to 

									<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
									<span><?php print $site_name; ?></span></a>	

									</span> 
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="rs-toolbar-right">

								<div class="toolbar-share-icon">
								<?php print render($page['social_links']);?>

								</div>
								<a href="#" class="apply-btn">Apply Now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Toolbar End -->
			
			<!--Header Start-->
			<header id="rs-header" class="rs-header">
				
				<!-- Header Top Start -->
				<div class="rs-header-top">
					<div class="container">
						<div class="row">
							<div class="col-md-4 col-sm-12">
						        <div class="header-contact">
						            <div id="info-details" class="widget-text">
                                        <i class="glyph-icon flaticon-email"></i>
						                <div class="info-text">
						                    <a href="mailto:info@domain.com">
						                    	<span>Mail Us</span>
												<?php print render($page['main_email']);?>

											</a>
						                </div>
						            </div>
						        </div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="logo-area text-center">
									<a href="index-2.html"><img src="sites/all/themes/globaDevAcademy/images/logo.png" alt="logo"></a>
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
						        <div class="header-contact pull-right">
						            <div id="phone-details" class="widget-text">
						                <i class="glyph-icon flaticon-phone-call"></i>
						                <div class="info-text">
						                    <a href="tel:4155551234">
						                    	<span>Call Us</span>
												<?php print render($page['main_phone']);?>
											</a>
						                </div>
						            </div>
						        </div>
							</div>
						</div>				
					</div>
				</div>
				<!-- Header Top End -->

				<!-- Menu Start -->
				<div class="menu-area menu-sticky">
					<div class="container">
						<div class="main-menu">
							<div class="row">
								<div class="col-sm-12">
									<!-- <div id="logo-sticky" class="text-center">
										<a href="index.html"><img src="images/logo.png" alt="logo"></a>
									</div> -->
									<a class="rs-menu-toggle"><i class="fa fa-bars"></i>Menu</a>
									<nav class="rs-menu">
									<!--	<ul class="nav-menu">
											<?php
											/*
												$main_menu_tree = menu_tree_all_data('main-menu');
												foreach($main_menu_tree as $m) {
												$children = '';
												if($m['link']['has_children'] == 1) {
													$children = 'yes';
												}
												if($children == 'yes') {
													echo '<li class="menu-item-has-children">
													<a href="#" class="rs-menu-toggle" data-toggle="dropdown">'.$m['link']['link_title'].'
													<ul class="sub-menu">';
													foreach($m['below'] as $b) {
														echo '<li><a href="/'.drupal_lookup_path('alias',$b['link']['link_path']).'">'.$b['link']['link_title'].'</a></li>';
													}
													echo '</ul>
													</li>';
												}
												else {
													echo '<li><a href="/'.drupal_lookup_path('alias',$m['link']['link_path']).'">'.$m['link']['link_title'].'</a></li>';
												}
												}
												*/
											?>
														
											

										</ul>
											-->
										<?php print render($page['header']); ?>	
									</nav>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Menu End -->
			</header>
			<!--Header End-->

		</div>
        <!--Full width header End-->
		<?php if(drupal_is_front_page()) {unset($page['content']['system_main']['default_message']);} ?>
		
		<?php print render($page['content']); ?>		
		
		
		<!--start front page -->
		<?php
		if (drupal_is_front_page()) { 
		?>
		<!-- Slider Area Start -->
		

        <div id="rs-slider" class="slider-overlay-2">     
        	<div id="home-slider1" class='single-item'>

				<?php print render($page['main_slider']); ?>

        	</div>         
        </div>

        <!-- Slider Area End -->
		
		<!-- Services Start -->
        <div id="courses-section" class="rs-services rs-services-style1">

                <div class="row rowService">
					
				 <?php print render($page['courses']); ?>

					
                </div>
        </div>
		<!-- Services End -->

		<!-- About Us Start -->
        <div id="rs-about" class="rs-about sec-spacer">
            <div class="container">
                <div class="sec-title mb-50 text-center">
                    <h2>ABOUT US 
					</h2>      
                	<p>we are the experts what you need </p>
                </div>
				<?php print render($page['about_us']); ?>

            </div>
        </div>
        <!-- About Us End -->

		


        <!-- Events Start -->
        <div id="rs-events" class="rs-events sec-spacer">
			<div class="container">
				<div class="sec-title mb-50 text-center">
                    <h2>OUR UPCOMING EVENTS</h2>      
                	<p>I feel the presence of the Almighty, who formed us in his own image, and the breath.</p>
                </div>
				<div class="row">
			        <div class="col-md-12">
						<div class="rs-carousel" id="events" >
			                <?php print render($page['events']); ?>
			            </div>
			        </div>
			    </div>
			</div>
        </div>
        <!-- Events End -->
        
		<!-- Team Start -->
        <div id="rs-team" class="rs-team sec-color sec-spacer">
            <div class="container">
                <div class="sec-title mb-50 text-center">
                    <h2>OUR EXPERIENCED STAFFS</h2>      
                	<p>Considering desire as primary motivation for the generation of narratives is a useful concept.</p>
                </div>
				<div class="rs-carousel" id="staff" >
						
					<?php print render($page['teachers']); ?>

				</div>
			</div>
		</div>
        <!-- Team End -->

		<!-- Calltoaction Start -->
		
		<!--
        <div id="rs-calltoaction" class="rs-calltoaction sec-spacer bg4">
            <div class="container">
                <div class="rs-cta-inner text-center">
                    <div class="sec-title mb-50 text-center">
                        <h2 class="white-color">WEB DESIGN &amp; DEVLOPMENT COURSE</h2>      
                        <p class="white-color">Fusce sem dolor, interdum in efficitur at, faucibus nec lorem.</p>
                    </div>
				    <a class="cta-button" href="#">Join Now</a>
				</div>
            </div>
		</div>
											-->
        <!-- Calltoaction End -->

		<!-- Latest News Start -->
		<!--
        <div id="rs-latest-news" class="rs-latest-news sec-spacer">
			<div class="container">
				<div class="sec-title mb-50 text-center">
                    <h2> LASTEST On OUR Blog</h2>      
                	<p>Fusce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.</p>
                </div>
				<div class="row">
			        <div class="col-md-6">
						<div class="news-normal-block">
		                    <div class="news-img">
		                    	<a href="#">
		                        	<img src="sites/all/themes/globaDevAcademy/images/blog/1.jpg" alt="" />
		                    	</a>
		                    </div>
	                    	<div class="news-date">
	                    		<i class="fa fa-calendar-check-o"></i>
	                    		<span>June  28,  2017</span>
	                    	</div>
	                    	<h4 class="news-title"><a href="blog-details.html">Those Other College Expenses You Aren't Thinking About</a></h4>
	                    	<div class="news-desc">
	                    		<p>
	                    			Blandit rutrum, erat et egestas ultricies, dolor tortor egestas enim, quiste rhoncus sem the purus eu sapien curabitur.Lorem Ipsum is therefore always free from repetitionetc.
	                    		</p>
	                    	</div>
	                    	<div class="news-btn">
	                    		<a href="#">Read More</a>
	                    	</div>
		                </div>
			        </div>
			        <div class="col-md-6">
			        	<div class="news-list-block">
			        		<div class="news-list-item">
			                    <div class="news-img">
			                    	<a href="#">
			                        	<img src="sites/all/themes/globaDevAcademy/images/blog/2.jpg" alt="" />
			                    	</a>
			                    </div>			        			
								<div class="news-content">
			                    	<h5 class="news-title"><a href="blog-details.html">While the lovely valley team work</a></h5>
			                    	<div class="news-date">
			                    		<i class="fa fa-calendar-check-o"></i>
			                    		<span>June  28,  2017</span>
			                    	</div>
			                    	<div class="news-desc">
			                    		<p>
			                    			Excepteur sint occaecat cupidatat non proident,
			                    			sunt in culpa qui officia deserunt.
			                    		</p>
			                    	</div>
				                </div>			        			
			        		</div>
			        		<div class="news-list-item">
			                    <div class="news-img">
			                    	<a href="#">
			                        	<img src="sites/all/themes/globaDevAcademy/images/blog/3.jpg" alt="" />
			                    	</a>
			                    </div>			        			
								<div class="news-content">
			                    	<h5 class="news-title"><a href="blog-details.html">I must explain to you how all this idea</a></h5>
			                    	<div class="news-date">
			                    		<i class="fa fa-calendar-check-o"></i>
			                    		<span>June  28,  2017</span>
			                    	</div>
			                    	<div class="news-desc">
			                    		<p>
			                    			Excepteur sint occaecat cupidatat non proident,
			                    			sunt in culpa qui officia deserunt.
			                    		</p>
			                    	</div>
				                </div>			        			
			        		</div>
			        		<div class="news-list-item">
			                    <div class="news-img">
			                    	<a href="#">
			                        	<img src="sites/all/themes/globaDevAcademy/images/blog/4.jpg" alt="" />
			                    	</a>
			                    </div>			        			
								<div class="news-content">
			                    	<h5 class="news-title"><a href="blog-details.html">I should be incapable of drawing a stroke</a></h5>
			                    	<div class="news-date">
			                    		<i class="fa fa-calendar-check-o"></i>
			                    		<span>June  28,  2017</span>
			                    	</div>
			                    	<div class="news-desc">
			                    		<p>
			                    			Excepteur sint occaecat cupidatat non proident,
			                    			sunt in culpa qui officia deserunt.
			                    		</p>
			                    	</div>
				                </div>			        			
			        		</div>
			        	</div>
			        </div>
			    </div>
			</div>
		</div>
											-->
        <!-- Latest News End -->

		<!-- Products Start -->


		<!-- Newslatter Start -->
<!--
        <div id="rs-newslatter" class="rs-newslatter sec-black sec-spacer">
            <div class="container">
                <div class="row rs-vertical-middle">
                    <div class="col-md-6">
                        <h3 class="newslatter-title">STAY CONNECTED WITH US</h3>
                    </div>
                    <div class="col-md-6 text-right">
                        <form class="newslatter-form">
                            <input type="text" class="form-input" placeholder="Enter Your Email Address">
                            <button type="submit" class="form-button">SUBSCRIBE</button>
                        </form>						
                    </div>
                </div>
            </div>
        </div>
-->

		<!-- Testimonial Start -->
        <div id="rs-testimonial" class="rs-testimonial bg5 sec-spacer">
			<div class="container">
				<div class="sec-title mb-50 text-center">
					<h2 class="white-color">WHAT PEOPLE SAYS</h2>      
					<p class="white-color">Fusce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.</p>
				</div>
				<div class="row">
			        <div class="col-md-12">
						<div  class="rs-carousel" id="testiMembers">
							<?php print render($page['testimonial']); ?>
			                
					   
			            </div>
			        </div>
			    </div>
			</div>
        </div>
        <!-- Testimonial End -->
		
		<?php } ?> 
		<!-- end front page -->
       
        <!-- Footer Start -->
        <footer id="rs-footer" class="bg3 rs-footer">
		<?php
			if (drupal_is_front_page()) { 
		?>
			<div class="container" id="contact-adress">
				<!-- Footer Address -->
				<div>
					<?php print render($page['footer_address']); ?>
						
				</div>
			</div>
			<?php } ?>	
			<!-- Footer Top -->
            <div class="footer-top">
                <div class="container">
                    
                    <div class="footer-share">
						<?php print render($page['social_links']);?>
                        
                    </div>                                
                </div>
            </div>

            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="container">
                    <div class="copyright">
                        <p>© 2018 <a href="https://www.facebook.com/Globadev.Academy/">GlobaDev Academy </a> | <a href="https://www.facebook.com/cisManar/" target="_blank"> Manar Sarah</a> . All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer End -->


        
