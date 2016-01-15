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
              <div class="my-account">
                  <a href="<?php echo $base_url; ?>/user">Sign In</a>
                  <a href="<?php echo $base_url; ?>/user/register">Sign Up</a>
              </div>
          <?php endif;?>
      </div>
    <?php endif; ?>
  </div>
</header>

<!--container start here-->
<div class="inner-container all-pages">
		<h2 class="heading product-heading">PRODUCT</h2>
		<div class="left"><!--left start here-->
			<div class="tabs">
				<ul class="nav nav-pills nav-stacked">
				<li class="payment active"><a href="#">Payment & Security</a></li>
				<li class="loyalty_prog"><a href="#">Loyalty Programme</a></li>
				<li class="feqs"><a href="#">FAQ’s</a></li>
				</ul>
			</div>
	</div><!--left end here-->
	
	
		<div class="right"><!--right start here-->
			<div class="tab-content">
			<!----- payment and security container starts -->
			<div id="home" class="tab-pane active">
				<h3 class="que cursor-pointer">Q. How do I pay for purchase on Mera Forex?
					 <li class="glyphicon glyphicon-plus"></i>
				</h3>
				<h3 class="que cursor-pointer">Q. Are there any hidden charges when I make a purchase on Mera Forex?
					 <li class="glyphicon glyphicon-plus"></i>
				</h3>
				<h3 class="que cursor-pointer">Q. What is Cash on Delivery?
					 <li class="glyphicon glyphicon-plus"></i>
				</h3>
				<h3 class="que cursor-pointer">Q. Is it safe to use my credit/debit card on Mera Forex?
					 <li class="glyphicon glyphicon-plus"></i>
				</h3>
				<h3 class="que cursor-pointer">Q. How can I get the 3D Secure password for my credit/debit card?
					 <li class="glyphicon glyphicon-plus"></i>
				</h3>
				<h3 class="que cursor-pointer">Q. Can I use my bank's Internet Banking feature to make a payment?
					 <li class="glyphicon glyphicon-plus"></i>
				</h3>
				<h3 class="que cursor-pointer">Q. How do I place a Cash on Delivery (COD) order?
					 <li class="glyphicon glyphicon-plus"></i>
				</h3>
				<p class="ans">Add the item(s) to your cart and proceed to checkout. When prompted to choose a
	payment option, select "Pay By Cash on Delivery".</p>
				<p class="ans">Once verified and confirmed, your order will be processed for shipment in the time
				specified. You will be required to make a cash-only payment to our Delivery Executive
				at the time of delivery of your order to complete the payment.</p>
				<p class="ans">Terms & Conditions:</p>
				<ul class="list">
					<li>The maximum order value for COD is 50,000 per passport</li>
					<li>Cash-only payment at the time of delivery.</li>
				</ul>
			</div>
			<!----- payment and security container ends -->
			
			<!----- Loyalty Programme container starts -->
			<div id="Loyalty_Programme" class="tab-pane fade in class="collapse"">
				<h3 class="que cursor-pointer">Mera Forex Loyalty programme offers</h3>
				<p class="ans">
					1) Cash back for every rupee spent on purchase of forex cards and currency which can be redeemed on 
					your next purchase. MF oers cash back on currency in the fol-lowing manner:
				</p>
						<table class="table table-striped ans">
								<thead>
										<tr>
											<th>VALUE OF CURRENCY PURCHASED</th>
											<th>CASH BACK ON NEXT PURCHASE</th>
										</tr>
								</thead>
								<tbody>
										<tr>
											<td>Upto 50,000</td>
											<td>50 INR</td>
										</tr>
										<tr>
											<td>50,000 - 2,00,000</td>
											<td>100 INR</td>
										</tr>
										<tr>
											<td>2,00,000 - 5,00,000</td>
											<td>200 INR</td>
										</tr>
										<tr>
											<td>5,00,000 - above</td>
											<td>400 INR</td>
										</tr>
								</tbody>
						</table>


						<p class="ans">Forex Card</p>
						<table class="table table-striped ans">
								<thead>
										<tr>
											<th>VALUE OF CURRENCY PURCHASED</th>
											<th>CASH BACK ON NEXT PURCHASE</th>
										</tr>
								</thead>
								<tbody>
										<tr>
											<td>Upto 50,000</td>
											<td>50 INR</td>
										</tr>
										<tr>
											<td>50,000 - 2,00,000</td>
											<td>100 INR</td>
										</tr>
										<tr>
											<td>2,00,000 - 5,00,000</td>
											<td>200 INR</td>
										</tr>
										<tr>
											<td>5,00,000 - above</td>
											<td>400 INR</td>
										</tr>
								</tbody>
						</table>


						<p class="ans">
						2) We at Mera Forex realize the importance of loyal customers. Mera Forex Privileged members enjoy
						 fast track service with extended service hours and express delivery (conditions apply)
					</p>

				<p class="ans">
					3) Referral programme – MF Referral programme entitles a cash back on next purchase:
				</p>

					<table class="table table-striped ans">
								<thead>
										<tr>
												<th>VALUE OF CURRENCY PURCHASED</th>
												<th>CASH BACK ON NEXT PURCHASE</th>
										</tr>
								</thead>
								<tbody>
										<tr>
												<td>Upto 50,000</td>
												<td>50 INR</td>
										</tr>
										<tr>
												<td>50,000 - 2,00,000</td>
												<td>100 INR</td>
										</tr>
										<tr>
												<td>2,00,000 - 5,00,000</td>
												<td>200 INR</td>
										</tr>
										<tr>
												<td>5,00,000 - above</td>
												<td>400 INR</td>
										</tr>
								</tbody>
						</table>


				<p class="ans">
					4) Special oers for MF members
				</p>
			</div>
			<!----- Loyalty Programme container end -->
			
			<!----- payment and security container starts -->
			<div id="home" class="tab-pane fade in ">
				<h3 class="que cursor-pointer">Q. How do I pay for purchase on Mera Forex?
					 <li class="glyphicon glyphicon-plus"></i>
				</h3>
				<h3 class="que cursor-pointer">Q. Are there any hidden charges when I make a purchase on Mera Forex?
					 <li class="glyphicon glyphicon-plus"></i>
				</h3>
				<h3 class="que cursor-pointer">Q. What is Cash on Delivery?
					 <li class="glyphicon glyphicon-plus"></i>
				</h3>
				<h3 class="que cursor-pointer">Q. Is it safe to use my credit/debit card on Mera Forex?
					 <li class="glyphicon glyphicon-plus"></i>
				</h3>
				<h3 class="que cursor-pointer">Q. How can I get the 3D Secure password for my credit/debit card?
					 <li class="glyphicon glyphicon-plus"></i>
				</h3>
				<h3 class="que cursor-pointer">Q. Can I use my bank's Internet Banking feature to make a payment?
					 <li class="glyphicon glyphicon-plus"></i>
				</h3>
				<h3 class="que cursor-pointer">Q. How do I place a Cash on Delivery (COD) order?
					 <li class="glyphicon glyphicon-plus"></i>
				</h3>
				<p class="ans">Add the item(s) to your cart and proceed to checkout. When prompted to choose a
	payment option, select "Pay By Cash on Delivery".</p>
				<p class="ans">Once verified and confirmed, your order will be processed for shipment in the time
				specified. You will be required to make a cash-only payment to our Delivery Executive
				at the time of delivery of your order to complete the payment.</p>
				<ul class="list">
					<p>Terms & Conditions:</p>
					<li>The maximum order value for COD is 50,000 per passport</li>
					<li>Cash-only payment at the time of delivery.</li>
				</ul>
			</div>
			<!----- payment and security container ends -->
			
	</div>
</div><!--right end here-->
<div class="clear"></div><!--clear here-->
</div><!--container end here-->

<div class="container-fluid footer"><!--Footer start here-->
    <div class="forex_container">
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
	<?php if (!empty($page['footer'])): ?>
	<div class="footer-copyright conatainer-fluid">
		<div class="forex_container">
			<?php print render($page['footer']); ?>
		</div>
	</div>
	<?php endif; ?>
<!--Footer End here-->