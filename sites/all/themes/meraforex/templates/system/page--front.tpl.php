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
 * @see bootstrap_preprocess_page()
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see bootstrap_process_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
global $base_url;
?>
<style type="text/css">

</style>
<div class="loader-cont">
    <?php if ($logo): ?>
        <a class="logo navbar-btn pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
            <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="img-responsive" />
        </a>
    <?php endif; ?>
    <div class="loader-wrapper">
        <div class="loader">
            <div class="roller"></div>
            <div class="roller"></div>
        </div>

        <div id="loader2" class="loader">
            <div class="roller"></div>
            <div class="roller"></div>
        </div>

        <div id="loader3" class="loader">
            <div class="roller"></div>
            <div class="roller"></div>
        </div>
    </div>
</div>
<header id="navbar" role="banner" class="<?php print $navbar_classes; ?>">
    <div class="container">
        <div class="navbar-header">
            <?php if ($logo): ?>
                <a class="logo navbar-btn pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
                    <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="img-responsive" />
                </a>
            <?php endif; ?>

            <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
            <div class="navbar-collapse collapse">
                <nav role="navigation">
                    <?php if (!empty($primary_nav)): ?> <?php print render($primary_nav); ?><?php endif; ?>
                    <?php if (!empty($page['navigation'])): ?><?php print render($page['navigation']); ?> <?php endif; ?>
                </nav>
                <?php if (!empty($secondary_nav)): ?><?php print render($secondary_nav); ?><?php endif; ?>
                <?php if($logged_in == FALSE): ?>
            </div>
            <div class="my-account">
                <a href="<?php echo $base_url; ?>/user">Sign In</a>
                <a href="<?php echo $base_url; ?>/user/register">Sign Up</a>
            </div>

        <?php endif; endif; ?>
    </div>
</header>
<section class="col-md-12 banner" style="padding: 0px">
    <img src="<?php $theme_path = path_to_theme(); echo $base_url.'/'.$theme_path.'/images/slide.png';?>" class="img-responsive" style="max-height: 550px; min-width: 100%;"/>
    <div class="slide-caption col-md-5 col-sm-12">
        <div class="container">
            <h1>WE MAKE IT SIMPLER</h1>
            <p>Buy or Sell Foreign Currency or send a Money Transfer From IndiaBook at Live Rates. Free Door Delivery and Bank Branch Pick Up Options.</p>
            <!--<span>Service Across India.</span>
            <a href="#"><i class="glyphicon glyphicon-map-marker"></i>VIEW ALL LOCATIONS</a>-->
        </div>
    </div>

</section>
<section class="forex_container form_margin">
    <div class="header">
        <?php print render($page['header']); ?>
    </div>
</section>
<section class="promotion-vedio">
   <!-- <a href="#"><img src="<?php //echo $base_url; ?>/sites/all/themes/meraforex/images/video-bck.png" /></a> -->
   <div class="promotion-vedio_content forex_container">
       <h2>IT ONLY TAKES A MINUTE</h2>
    <h5>HERES HOW</h5>
    <a href=""><img src="<?php echo $base_url; ?>/sites/all/themes/meraforex/images/video_icon.png" alt=""></a>
    <h6>CLICK TO WATCH THE TUTORIAL VIDEO</h6>
   </div>
	
</section>
<section class="rate-alert forex_container">
    <p class="std-blue">
        Pellentesque a accumsan nibh. Suspendisse potenti. Suspendisse lacus enim, vulputate ac fermentum
        vitae, pharetra a orcl nullam hendrerit.</p>
    <div class="rate-actions">
        <div class="icon"><i class="glyphicon glyphicon-map-marker"></i><a class="std-blue" href="javascript:void(0)">Set A RATE ALERT</a></div>
        <div class="icon"><i class="glyphicon glyphicon-earphone"></i><a class="std-blue" href="javascript:void(0)">Request a call back</a></div>
    </div>
</section>
<section class="forex_container_fluid testimonials">
    <h3>WHAT OUR CUSTOMERS SAY</h3>
    <div class="forex_container">
        <div id="myCarousel" class="carousel slide">
       <!-- Carousel indicators -->
       <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
       </ol>   
       <!-- Carousel items -->
       <div class="carousel-inner">
          <div class="item active">
             <img src="<?php echo $base_url; ?>/sites/all/themes/meraforex/images/test_img1.png" alt="First slide">
             <div class="carousel-caption">
                     <p>
                        I contacted Meraforex and to my surprise within one hour they sent their representative to my office with the INR.
            I           was very pleased with their services!
                    </p>
                    <span class="std-blue">Narayan Subramanyam</span>
                    <span class="std-blue">Hollywood, CA</span>
            </div>
          </div>
          <div class="item">
             <img src="<?php echo $base_url; ?>/sites/all/themes/meraforex/images/test_img1.png" alt="Second slide">
             <div class="carousel-caption">
                <p>
                        I contacted Meraforex and to my surprise within one hour they sent their representative to my office with the INR.
            I           was very pleased with their services!
                    </p>
                    <span class="std-blue">Narayan Subramanyam</span>
                    <span class="std-blue">Hollywood, CA</span>
            </div>
          </div>
          <div class="item">
             <img src="<?php echo $base_url; ?>/sites/all/themes/meraforex/images/test_img1.png" alt="Third slide">
             <div class="carousel-caption">
                <p>
                        I contacted Meraforex and to my surprise within one hour they sent their representative to 
                        my office with the INR.I was very pleased with their services!
                    </p>
                    <span class="std-blue">Narayan Subramanyam</span>
                    <span class="std-blue">Hollywood, CA</span>
                </div>
            </div>
        </div>
           <!-- Carousel nav -->
           <a class="carousel-control left" href="#myCarousel" 
              data-slide="prev">&lsaquo;</a>
           <a class="carousel-control right" href="#myCarousel" 
              data-slide="next">&rsaquo;</a>
        </div> 
    </div>
</section>
<div class="clr"></div>
<section class="forex_container features">
    <div class="row">
        <!-- thumb 1 -->
        <div class="col-xs-6 col-md-3 features_thumb">
            <a href="#">
               <i class="fa fa-plus-circle"></i> DOORSTEP DELIVERY
              <img src="<?php echo $base_url; ?>/sites/all/themes/meraforex/images/features_img1.jpg" alt="" />
            </a>
        </div>
        <!-- thumb 2 -->
        <div class="col-xs-6 col-md-3 features_thumb">
            <a href="#">
               <i class="fa fa-plus-circle"></i> LOYALTY PROGRAMS
              <img src="<?php echo $base_url; ?>/sites/all/themes/meraforex/images/features_img2.jpg" alt="" />
            </a>
        </div>
        <!-- thumb 3 -->
        <div class="col-xs-6 col-md-3 features_thumb">
            <a href="#">
               <i class="fa fa-plus-circle"></i> HOW IT WORKS
              <img src="<?php echo $base_url; ?>/sites/all/themes/meraforex/images/features_img3.jpg" alt="" />
            </a>
        </div>
        <!-- thumb 4 -->
        <div class="col-xs-6 col-md-3 features_thumb">
            <a href="#">
               <i class="fa fa-plus-circle"></i> FOREX LOAN
              <img src="<?php echo $base_url; ?>/sites/all/themes/meraforex/images/features_img4.jpg" alt="" />
            </a>
        </div>
        <!-- thumb 5 -->
        <div class="col-xs-6 col-md-3 features_thumb">
            <a href="#">
               <i class="fa fa-plus-circle"></i>BRANCH LOCATIONS
              <img src="<?php echo $base_url; ?>/sites/all/themes/meraforex/images/features_img5.jpg" alt="" />
            </a>
        </div>
        <!-- thumb 6 -->
        <div class="col-xs-6 col-md-3 features_thumb">
            <a href="#">
               <i class="fa fa-plus-circle"></i> DOORSTEP DELIVERY
              <img src="<?php echo $base_url; ?>/sites/all/themes/meraforex/images/features_img6.jpg" alt="" />
            </a>
        </div>
    </div>
</section>
<section class="partnership forex_container">
		 <h3 class="top-heading">IN PARTNERSHIP WITH</h3>
         <div class="partnership_thumb"><a href="#"><img src="<?php echo $base_url; ?>/sites/all/themes/meraforex/images/partner-1.png" alt="" /></a></div>
         <div class="partnership_thumb"><a href="#"><img src="<?php echo $base_url; ?>/sites/all/themes/meraforex/images/rbs.png" alt="" /></a></div>
         <div class="partnership_thumb"><a href="#"><img src="<?php echo $base_url; ?>/sites/all/themes/meraforex/images/citi.png" alt="" /></a></div>
         <div class="partnership_thumb"><a href="#"><img src="<?php echo $base_url; ?>/sites/all/themes/meraforex/images/deu-bank.png" alt="" /></a></div>
</section>

<div class="forex_container">

    <header role="banner" id="page-header">
        <?php if (!empty($site_slogan)): ?>
            <p class="lead"><?php print $site_slogan; ?></p>
        <?php endif; ?>

    </header>
    <div class="row">

        <?php if (!empty($page['sidebar_first'])): ?>
            <aside class="col-sm-3" role="complementary">
                <?php print render($page['sidebar_first']); ?>
            </aside>  <!-- /#sidebar-first -->
        <?php endif; ?>

        <section<?php print $content_column_class; ?>>
            <?php if (!empty($page['highlighted'])): ?>
                <div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
            <?php endif; ?>
        </section>

        <?php if (!empty($page['sidebar_second'])): ?>
            <aside class="col-sm-3" role="complementary">
                <?php print render($page['sidebar_second']); ?>
            </aside>  <!-- /#sidebar-second -->
        <?php endif; ?>

    </div>
</div>
<div class="container-fluid footer"><!--Footer start here-->
    <div class="forex_container footer_content">
		<?php if (!empty($page['footer_firstcolumn'])): ?>
        <div class="footer-menu col-md-3"><!--footer-menu col-md-3 start here-->
            <?php print render($page['footer_firstcolumn']); ?>
        </div>
        <?php endif; ?>
		
		<?php if (!empty($page['footer_secondcolumn'])): ?>
        <div class="footer-menu col-md-3">
            <?php print render($page['footer_secondcolumn']); ?>
        </div>
		<?php endif; ?>
		
		<?php if (!empty($page['footer_thirdcolumn'])): ?>
        <div class="footer-menu col-md-3">
            <?php print render($page['footer_thirdcolumn']); ?>
        </div>
		<?php endif; ?>
		
		<?php if (!empty($page['footer_fourthcolumn'])): ?>
        <div class="footer-menu col-md-3">
            <?php print render($page['footer_fourthcolumn']); ?>
        </div>
		<?php endif; ?>
		<!--footer-menu col-md-3 end here-->
    </div>
	
<!--Footer Starts here-->
	<?php //if (!empty($page['footer'])): ?>
	<div class="footer-copyright conatainer-fluid">
		<div class="forex_container">
           <div class="social-icons">
               <i class="fa fa-facebook"></i>
               <i class="fa fa-twitter"></i>
               <i class="fa fa-linkedin"></i>
               <span>© 2015, MERAFOREX. All rights reserved.</span>
           </div>
			<?php print render($page['footer']); ?>
		</div>
	</div>
	<?php //endif; ?>
<!--Footer End here-->