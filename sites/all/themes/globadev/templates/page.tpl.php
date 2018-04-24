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

      <div class="preloader loader-wrapper">
         <div class="loader"></div>
      </div>
      <!-- =========================================
         Navigation
         ========================================== -->
      <div class="nav-container affix" id="mainMenu">
         <!--start mobile navigation-->
         <div class="nav nav-sm visible-xs">
            <div class="container">
               <div class="row">
                  <div class="col-xs-5 col-sm-2 algn-left">
                     <a href="#page-top" class="page-scroll">
                        <!--place for mobile logo-->
                        <img class="logo" alt="logo" src="img/logo.png">
                     </a>
                  </div>
                  <div class="col-xs-9 col-sm-10 col-xs-7 algn-right">
                     <a href="#" class="hamburger-toggle" data-toggle-class="#deskNav;hidden-xs">
                     <i class="material-icons">dehaze</i>
                     </a>
                  </div>
               </div>
            </div>
         </div>
         <!--end navigation-->
         <!--start desktop navigation-->
         <nav class="nav nav-sm hidden-xs" id="deskNav">
            <div class="container">
               <div class="row">
                  <div class="col-md-1 col-sm-2 hidden-xs">
                     <a href="#page-top" class="page-scroll">
                        <!--place for desktop logo-->
                        <img class="logo" alt="logo" src="img/logo.png">
                     </a>
                  </div>
                  <div class="col-md-11 col-sm-10">
                     <ul class="menu-horizontal text-left">
                        <li class="dropdown">
                           <a class="page-scroll" href="#aboutus">About Us</a>
                        </li>
                        <li class="dropdown">
                           <a class="page-scroll" href="#features">Features</a>
                        </li>
                        <li class="dropdown">
                           <a class="page-scroll" href="#team">Team</a>
                        </li>
                        <li class="dropdown">
                           <a class="page-scroll" href="#pricing">Pricing</a>
                        </li>
                        <li class="dropdown">
                           <a class="page-scroll" href="#screenshots">Screenshots</a>
                        </li>
                        <li class="dropdown">
                           <a class="page-scroll" href="#testimonials">Testimonials</a>
                        </li>
                        <li class="dropdown">
                           <a class="page-scroll" href="#subscribe">Subscribe</a>
                        </li>
                     </ul>
                  </div>
               </div>
               <!--end of row-->
            </div>
            <!--end of container-->
         </nav>
         <!--end navigation-->
      </div>
      <!-- =========================================
         Main Container
         ========================================== -->
      <div class="main-container">
         <!-- =========================================
            Header Block
            ========================================== -->
         <section class="home ht-100 parallax">
            <!-- SECTION 1 - Parallax Bg Image: Use this section to get bg image background and comment [SECTION 2 and SeCTION3] the bottom section to see see this in action-->
            <!--starts parallax bg image section  SECTION 1-->
            <div class="bg-image-placer">
               <img src="img/banner3.jpg" alt="" />
            </div>
            <!--ends parallax bg image section  SECTION 1-->
            <!--starts MOBILE APP Banner section  SECTION 3-->
            <div class="container">
               <div class="row">
                  <!--Highlight Text Block section-->
                  <div class="bg-gradient-overlay"></div>
                  <div class="col-sm-12 banner-image-box">
                     <div class="col-md-6 col-sm-6 pos-vcenter highlight">
                        <h1 class="wow fadeInUp">Best Way  to <br/>promote your app !</h1>
                        <p class="head wow fadeInUp" data-wow-delay="0.2s">
                           Nam at magna pellentesque, tempor eros non, varius nulla , Maecenas dapibus porta lacus a interdum.
                        </p>
                        <a class="btn btn-outline inverse btn-icon wow fadeInUp" data-wow-delay="0.4s" href="#">
                           <i class="icon-playstore"></i>
                           <p><span>Available in</span>Play Store</p>
                        </a>
                        <a class="btn btn-outline inverse btn-icon wow fadeInUp" data-wow-delay="0.4s" href="#">
                           <i class="icon-apple"></i>
                           <p><span>Available in</span>Apple Store</p>
                        </a>
                     </div>
                     <div class="col-md-6 col-sm-6">
                        <img src="img/iphone-inhand-themetwo.png" class="pos-hcenter wow fadeInUp" data-wow-delay="0.1s" alt="">
                     </div>
                  </div>
                  <!--Highlight Text Block section ends-->
               </div>
            </div>
            <!--ends MOBILE APP Banner section  SECTION 3-->
         </section>
         <!-- =========================================
            Features Block
            ========================================== -->
         <section id="aboutus">
            <div class="container">
               <div class="row">
                  <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 algn-center">
                     <h2>About Mobi</h2>
                     <p class="head">
                        The features of the Best Ever Saas
                     </p>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-4 col-sm-6">
                     <!--feature box-->
                     <div class="feature-box algn-center">
                        <i class="icon-report ico-lg wow fadeInUp"></i>
                        <div class="feature-details">
                           <h5>Cart report</h5>
                           <p>
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit.Sed non semper risus
                           </p>
                        </div>
                     </div>
                     <!--feature box ends-->
                  </div>
                  <div class="col-md-4 col-sm-6">
                     <!--feature box-->
                     <div class="feature-box algn-center">
                        <i class="icon-browser ico-lg wow fadeInUp"></i>
                        <div class="feature-details">
                           <h5>Built in browsers</h5>
                           <p>
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit.Sed non semper risus
                           </p>
                        </div>
                     </div>
                     <!--feature box ends-->
                  </div>
                  <div class="col-md-4 col-sm-6 col-sm-offset-3 col-md-offset-0">
                     <!--feature box-->
                     <div class="feature-box algn-center">
                        <i class="icon-sales ico-lg wow fadeInUp"></i>
                        <div class="feature-details">
                           <h5>Track sales</h5>
                           <p>
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit.Sed non semper risus
                           </p>
                        </div>
                     </div>
                     <!--feature box ends-->
                  </div>
               </div>
               <!--end of row-->
            </div>
            <!--end of container-->
         </section>
         <!-- =========================================
            Features Block
            ========================================== -->
         <section id="features" class="pd-bt-0 bg-light">
            <div class="container">
               <div class="row">
                  <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 algn-center">
                     <h2>Features</h2>
                     <p class="head">
                        The features of the Best Ever Saas
                     </p>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-4 col-sm-6">
                     <!--feature box-->
                     <div class="feature-box feature-box-righticon wow fadeInLeft">
                        <i class="icon-report ico-md"></i>
                        <div class="feature-details">
                           <h5>Cart report</h5>
                           <p>
                              Lorem ipsum dolor sit amet, elita dolor sit amet consectetur.
                           </p>
                        </div>
                     </div>
                     <!--feature box ends-->
                     <!--feature box-->
                     <div class="feature-box feature-box-righticon wow fadeInLeft" data-wow-delay="0.2s">
                        <i class="icon-browser ico-md"></i>
                        <div class="feature-details">
                           <h5>Built in browsers</h5>
                           <p>
                              Lorem ipsum dolor sit amet, elita dolor sit amet consectetur.
                           </p>
                        </div>
                     </div>
                     <!--feature box ends-->
                     <!--feature box-->
                     <div class="feature-box feature-box-righticon wow fadeInLeft" data-wow-delay="0.3s">
                        <i class="icon-sales ico-md"></i>
                        <div class="feature-details">
                           <h5>Track sales</h5>
                           <p>
                              Lorem ipsum dolor sit amet, elita dolor sit amet consectetur.
                           </p>
                        </div>
                     </div>
                     <!--feature box ends-->
                  </div>
                  <div class="col-md-4 col-sm-6 hidden-sm hidden-xs">
                     <div class="feature-image">
                        <img src="img/iphone-plain-themetwo.png" class="pos-hcenter img-responsive" alt="">
                     </div>
                  </div>
                  <div class="col-md-4 col-sm-6">
                     <!--feature box-->
                     <div class="feature-box feature-box-lefticon wow fadeInRight">
                        <i class="icon-notification ico-md"></i>
                        <div class="feature-details">
                           <h5>Notifications</h5>
                           <p>
                              Lorem ipsum dolor sit amet, elita dolor sit amet consectetur.
                           </p>
                        </div>
                     </div>
                     <!--feature box ends-->
                     <!--feature box-->
                     <div class="feature-box feature-box-lefticon wow fadeInRight" data-wow-delay="0.2s">
                        <i class="material-icons ico-md">select_all</i>
                        <div class="feature-details">
                           <h5>Send message</h5>
                           <p>
                              Lorem ipsum dolor sit amet, elita dolor sit amet consectetur.
                           </p>
                        </div>
                     </div>
                     <!--feature box ends-->
                     <!--feature box-->
                     <div class="feature-box feature-box-lefticon wow fadeInRight" data-wow-delay="0.3s">
                        <i class="icon-target ico-md"></i>
                        <div class="feature-details">
                           <h5>Target</h5>
                           <p>
                              Lorem ipsum dolor sit amet, elita dolor sit amet consectetur.
                           </p>
                        </div>
                     </div>
                     <!--feature box ends-->
                  </div>
               </div>
               <!--end of row-->
            </div>
            <!--end of container-->
         </section>
         <!-- =========================================
            About Us Block
            ========================================== -->
         <section class="servicebox-lg servicebox-lg-imgleft bg-gradient" id="learnmore">
            <div class="img-block col-md-6 col-sm-4 hidden-sm hidden-xs visible-md visible-lg">
               <div class="bg-image-contain">
                  <img alt="image" src="img/about-themetwo.png">
               </div>
            </div>
            <div class="container">
               <div class="row">
                  <div class="col-md-1">
                  </div>
                  <div class="col-md-5 col-sm-12 col-xs-12">
                     <h2>More Userfriendly <br/>Ticket Printing</h2>
                     <p>
                        Praesent quis odio vitae orci dignissim aliquam eu non metus. Sed non semper risus, ac auctor massa. Praesent finibus lectus sit amet nulla feugiat tempus. Maecenas elementum in turpis et convallis. Fusce a lectus metus. Vestibulum maximus blandit lectus. Morbi dictum lectus sed ipsum auctor egestas.
                     </p>
                     <p>
                        Integer felis augue, facilisis vitae ultrices at, tempus in erat. Quisque sed efficitur mauris, sit amet posuere mi. Etiam ac ex id justo sagittis pretium id eget odio. Morbi a urna mollis, lacinia lacus vel, semper augue. Sed in suscipit orci, vitae dictum nisl.
                     </p>
                     <p>
                        Fusce orci orci, mollis vel sem sit amet, tempus dignissim sapien. Vestibulum tellus elit, finibus ac tellus vitae, tincidunt faucibus enim. Aenean sed volutpat arcu. Aenean tincidunt est dui, in congue nibh finibus eu.
                     </p>
                  </div>
               </div>
               <!--end of row-->
            </div>
            <!--end of container-->
         </section>
         <!-- =========================================
            Team Block
            ========================================== -->
         <section class="algn-center bg-light" id="team">
            <div class="container">
               <div class="row">
                  <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 algn-center">
                     <h2>Our Team</h2>
                     <p class="head">
                        The features of the Best Ever Saas
                     </p>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-4">
                     <!--team block-->
                     <div class="team-box team-circle">
                        <div class="img-box">
                           <img src="img/team1.jpg" alt="">
                        </div>
                        <div class="desc-box">
                           <h4>Rich Harte</h4>
                           <p class="subtitle">
                              Systems Engineer
                           </p>
                           <hr class="hr-color">
                           <p>
                              Vitae adipiscing turpis. Aenean ligula nibh, molestie id viverra a, dapibus at dolor.
                           </p>
                           <ul class="list-inline algn-center">
                              <li>
                                 <a href="#">
                                 <i class="icon-googlePlus ico-xs"></i>
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                 <i class="icon-facebook ico-xs"></i>
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                 <i class="icon-linkdin ico-xs"></i>
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                 <i class="icon-twitter ico-xs"></i>
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                 <i class="icon-behance ico-xs"></i>
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <!--team block ends-->
                  </div>
                  <div class="col-md-4">
                     <!--team block-->
                     <div class="team-box team-circle">
                        <div class="img-box">
                           <img src="img/team2.jpg" alt="">
                        </div>
                        <div class="desc-box">
                           <h4>Brian Brown</h4>
                           <p class="subtitle">
                              Business Analyst
                           </p>
                           <hr class="hr-color">
                           <p>
                              Vitae adipiscing turpis. Aenean ligula nibh, molestie id viverra a, dapibus at dolor.
                           </p>
                           <ul class="list-inline algn-center">
                              <li>
                                 <a href="#">
                                 <i class="icon-googlePlus ico-xs"></i>
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                 <i class="icon-facebook ico-xs"></i>
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                 <i class="icon-linkdin ico-xs"></i>
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                 <i class="icon-twitter ico-xs"></i>
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                 <i class="icon-behance ico-xs"></i>
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <!--team block ends-->
                  </div>
                  <div class="col-md-4">
                     <!--team block-->
                     <div class="team-box team-circle">
                        <div class="img-box">
                           <img src="img/team3.jpg" alt="">
                        </div>
                        <div class="desc-box">
                           <h4>Hayden Levey</h4>
                           <p class="subtitle">
                              Software Developer
                           </p>
                           <hr class="hr-color">
                           <p>
                              Vitae adipiscing turpis. Aenean ligula nibh, molestie id viverra a, dapibus at dolor.
                           </p>
                           <ul class="list-inline algn-center">
                              <li>
                                 <a href="#">
                                 <i class="icon-googlePlus ico-xs"></i>
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                 <i class="icon-facebook ico-xs"></i>
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                 <i class="icon-linkdin ico-xs"></i>
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                 <i class="icon-twitter ico-xs"></i>
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                 <i class="icon-behance ico-xs"></i>
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <!--team block ends-->
                  </div>
               </div>
               <!--end of row-->
            </div>
            <!--end of container-->
         </section>
         <!-- =========================================
            Statistics Block
            ========================================== -->
         <section class="bg-gradient pd-sm">
            <div class="container">
               <div class="row">
                  <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 algn-center">
                     <h2>Statistics</h2>
                     <p class="head">
                        Counting the numbers
                     </p>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12 col-sm-12">
                     <div class="col-md-3 col-sm-3 col-xs-6">
                        <!--stat block-->
                        <div class="stat-box">
                           <i class="icon-downloads ico-lg"></i>
                           <div class="stat-details">
                              <h2><span class="counter">162</span>K</h2>
                              <h4>Download</h4>
                           </div>
                        </div>
                        <!--stat block ends-->
                     </div>
                     <div class="col-md-3 col-sm-3 col-xs-6">
                        <!--stat block-->
                        <div class="stat-box">
                           <i class="icon-users ico-lg"></i>
                           <div class="stat-details">
                              <h2 class="counter">2530</h2>
                              <h4>Users</h4>
                           </div>
                        </div>
                        <!--stat block ends-->
                     </div>
                     <div class="col-md-3 col-sm-3 col-xs-6">
                        <!--stat block-->
                        <div class="stat-box">
                           <i class="icon-ratings ico-lg"></i>
                           <div class="stat-details">
                              <h2><span class="counter">1500</span>+</h2>
                              <h4>Reviews</h4>
                           </div>
                        </div>
                        <!--stat block ends-->
                     </div>
                     <div class="col-md-3 col-sm-3 col-xs-6">
                        <!--stat block-->
                        <div class="stat-box">
                           <i class="icon-shares ico-lg"></i>
                           <div class="stat-details">
                              <h2 class="counter">2500</h2>
                              <h4>Shares</h4>
                           </div>
                        </div>
                        <!--stat block ends-->
                     </div>
                  </div>
               </div>
               <!--end of row-->
            </div>
            <!--end of container-->
         </section>
         <!-- =========================================
            Pricing Block
            ========================================== -->
         <section class="pricing-section" id="pricing">
            <div class="container">
               <div class="row">
                  <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 algn-center">
                     <h2>pricing</h2>
                     <p class="head">
                        here is the app pricing
                     </p>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12 col-sm-12">
                     <div class="col-md-3 col-sm-6">
                        <!--pricing block -->
                        <div class="pricing-box algn-center">
                           <div class="pricing-head">
                              <span class="badge">New</span>
                              <h5>Starter</h5>
                              <span class="h1"><span class="pricing-icon">$</span>15</span>
                              <p>Per Month</p>
                           </div>
                           <ul>
                              <li>
                                 <span>Anywhere Access</span>
                              </li>
                              <li>
                                 <span>512 MB Memory</span>
                              </li>
                              <li>
                                 <span>1 CPU</span>
                              </li>
                              <li>
                                 <span>20GB SSD Disk</span>
                              </li>
                              <li>
                                 <span>1 TB Transfer</span>
                              </li>
                           </ul>
                           <a class="btn btn-lg btn-outline" href="#">Purchase Plan</a>
                        </div>
                        <!--pricing block ends -->
                     </div>
                     <div class="col-md-3 col-sm-6">
                        <!--pricing block -->
                        <div class="pricing-box algn-center">
                           <div class="pricing-head">
                              <span class="badge">New</span>
                              <h5>Basic</h5>
                              <span class="h1"><span class="pricing-icon">$</span>30</span>
                              <p>Per Month</p>
                           </div>
                           <ul>
                              <li>
                                 <span>Anywhere Access</span>
                              </li>
                              <li>
                                 <span>1 GB Memory</span>
                              </li>
                              <li>
                                 <span>1 CPU</span>
                              </li>
                              <li>
                                 <span>30GB SSD Disk</span>
                              </li>
                              <li>
                                 <span>2 TB Transfer</span>
                              </li>
                           </ul>
                           <a class="btn btn-outline btn-lg" href="#">Purchase Plan</a>
                        </div>
                        <!--pricing block ends -->
                     </div>
                     <div class="col-md-3 col-sm-6">
                        <!--pricing block -->
                        <div class="pricing-box algn-center active">
                           <div class="pricing-head">
                              <span class="badge">Trending</span>
                              <h5>Medium</h5>
                              <span class="h1"><span class="pricing-icon">$</span>50</span>
                              <p>Per Month</p>
                           </div>
                           <ul>
                              <li>
                                 <span>Anywhere Access</span>
                              </li>
                              <li>
                                 <span>2 GB Memory</span>
                              </li>
                              <li>
                                 <span>2 CPU</span>
                              </li>
                              <li>
                                 <span>40GB SSD Disk</span>
                              </li>
                              <li>
                                 <span>3 TB Transfer</span>
                              </li>
                           </ul>
                           <a class="btn btn-outline btn-lg" href="#">Purchase Plan</a>
                        </div>
                        <!--pricing block ends -->
                     </div>
                     <div class="col-md-3 col-sm-6">
                        <!--pricing block -->
                        <div class="pricing-box algn-center">
                           <div class="pricing-head">
                              <span class="badge">New</span>
                              <h5>premium</h5>
                              <span class="h1"><span class="pricing-icon">$</span>75</span>
                              <p>Per Month</p>
                           </div>
                           <ul>
                              <li>
                                 <span>Anywhere Access</span>
                              </li>
                              <li>
                                 <span>4 GB Memory</span>
                              </li>
                              <li>
                                 <span>3 CPU</span>
                              </li>
                              <li>
                                 <span>60GB SSD Disk</span>
                              </li>
                              <li>
                                 <span>4 TB Transfer</span>
                              </li>
                           </ul>
                           <a class="btn btn-outline btn-lg" href="#">Purchase Plan</a>
                        </div>
                        <!--pricing block ends -->
                     </div>
                  </div>
               </div>
               <!--end of row-->
            </div>
            <!--end of container-->
         </section>
         <!-- =========================================
            Testimonials Block
            ========================================== -->
         <section class="bg-light algn-center" id="screenshots">
            <div class="container">
               <div class="row">
                  <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 algn-center">
                     <h2>Minimalistic Interface</h2>
                     <p class="head">
                        Screenshots
                     </p>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12 col-sm-12">
                     <div class="slider">
                        <div class="mobi-screenshot-slider owl-carousel owl-theme">
                           <div class="item">
                              <!--screenshot-block-->
                              <img src="img/screen1-themetwo.jpg" alt="">
                              <!--screenshot-block ends-->
                           </div>
                           <div class="item">
                              <!--screenshot-block-->
                              <img src="img/screen2-themetwo.jpg" alt="">
                              <!--screenshot-block ends-->
                           </div>
                           <div class="item">
                              <!--screenshot-block-->
                              <img src="img/screen3-themetwo.jpg" alt="">
                              <!--screenshot-block ends-->
                           </div>
                           <div class="item">
                              <!--screenshot-block-->
                              <img src="img/screen6-themetwo.jpg" alt="">
                              <!--screenshot-block ends-->
                           </div>
                           <div class="item">
                              <!--screenshot-block-->
                              <img src="img/screen4-themetwo.jpg" alt="">
                              <!--screenshot-block ends-->
                           </div>
                           <div class="item">
                              <!--screenshot-block-->
                              <img src="img/screen5-themetwo.jpg" alt="">
                              <!--screenshot-block ends-->
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--end of row-->
            </div>
            <!--end of container-->
         </section>
         <!-- =========================================
            Testimonials Block
            ========================================== -->
         <section class="algn-center" id="testimonials">
            <div class="container">
               <div class="row">
                  <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 algn-center">
                     <h2>Loved By Our Customers</h2>
                     <p class="head">
                        Testimonials
                     </p>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-8 col-sm-10 col-md-offset-2 col-sm-offset-1">
                     <div class="slider">
                        <div class="testimonial-slider owl-carousel owl-theme">
                           <div class="item">
                              <!--testimonial-block-->
                              <div class="testimonial">
                                 <span class="h3">
                                 Proin a libero finibus, finibus ex eu, placerat metus. Pellentesque placerat diam et iaculis luctus. Nulla facilisi. 
                                 </span>
                                 <h5>Brennan Rogers</h5>
                                 <p>Saap Engineer</p>
                              </div>
                              <!--testimonial-block ends-->
                           </div>
                           <div class="item">
                              <!--testimonial-block-->
                              <div class="testimonial">
                                 <span class="h3">
                                 Phasellus vehicula eget sem vel tempor. Maecenas sagittis ipsum et sem fermentum, laoreet rhoncus 
                                 </span>
                                 <h5>Louis Bradley</h5>
                                 <p>Interface Designer</p>
                              </div>
                              <!--testimonial-block ends-->
                           </div>
                           <div class="item">
                              <!--testimonial-block-->
                              <div class="testimonial">
                                 <span class="h3">
                                 Donec euismod tellus id purus laoreet bibendum mollis rhoncus libero. Sed tempus orci eu mauris convallis pretium
                                 </span>
                                 <h5>Tomothy Evans</h5>
                                 <p>Visual Designer</p>
                              </div>
                              <!--testimonial- ends-->
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--end of row-->
            </div>
            <!--end of container-->
         </section>
         <!-- =========================================
            Subscription Block
            ========================================== -->
         <section class="algn-center bg-light" id="subscribe">
            <div class="container">
               <div class="row">
                  <div class="col-md-10 col-md-offset-1">
                     <h2>Join Hive Community - Subscribe to our Newsletter </h2>
                  </div>
                  <form>
                     <div class="col-md-3 col-md-offset-2 col-sm-4">
                        <input type="text" name="NAME" placeholder="Your Name">
                     </div>
                     <div class="col-md-3 col-sm-4">
                        <input type="email" name="EMAIL" placeholder="Email Address">
                     </div>
                     <div class="col-md-2 col-sm-4">
                        <button type="submit" class="btn btn-md btn-gradient">Subscribe</button>
                     </div>
                  </form>
               </div>
               <!--end of row-->
            </div>
            <!--end of container-->
         </section>
         <!-- =========================================
            Footer
            ========================================== -->
         <footer class="pd-sm bg-dark">
            <div class="container">
               <div class="row">
                  <div class="col-sm-6">
                     <ul class="list-inline">
                        <li>
                           <a href="#aboutus" class="page-scroll">
                              <h6>About</h6>
                           </a>
                        </li>
                        <li>
                           <a href="#features" class="page-scroll">
                              <h6>Features</h6>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <h6>Help</h6>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <h6>Privacy</h6>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <h6>Terms</h6>
                           </a>
                        </li>
                     </ul>
                  </div>
                  <div class="col-sm-6">
                     <ul class="list-inline algn-right">
                        <li>
                           <a href="#">
                           <i class="icon-googlePlus ico-xs"></i>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                           <i class="icon-facebook ico-xs"></i>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                           <i class="icon-linkdin ico-xs"></i>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                           <i class="icon-twitter ico-xs"></i>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                           <i class="icon-behance ico-xs"></i>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
               <!--end of row-->
               <div class="row">
                  <div class="col-sm-7 col-xs-12">
                     <span class="copyright">© 2017 Hive multipurpose single page Template.</span>
                  </div>
                  <div class="col-sm-5 col-xs-12 algn-right">
                     <a href="#" class="support">emailus: info@loremipsum.com</a>
                  </div>
               </div>
               <!--end of row-->
            </div>
            <!--end of container-->
         </footer>
      </div>