<?php $fullWidthPage = is_page_template('page-full.php'); ?>

			</div> <!-- end #main-content -->
		</div> <!-- end #main-content-wrap -->
	</div> 	<!-- end .container -->
</div> <!-- end #content -->

<div id="content-bottom">
	<div class="container<?php if ($fullWidthPage) echo(' nobg'); ?>"></div>
</div>
	
<div id="footer">
	<div class="container clearfix">
		
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer') ) : ?> 
		<?php endif; ?>
		<div class="clear"></div>

	</div> <!--end .container -->
</div> <!-- end #footer -->

<div id="footer-bottom">
	<div class="container clearfix">
		<?php global $is_footer;
		$is_footer = true; ?>
		
		<?php $menuClass = 'bottom-nav';
		$footerNav = '';
		
		if (function_exists('wp_nav_menu')) $footerNav = wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container' => '', 'fallback_cb' => '', 'menu_class' => $menuClass, 'echo' => false, 'depth' => '1' ) );
		if ($footerNav == '') show_page_menu($menuClass);
		else echo($footerNav); ?>
		
		<p id="copyright"> Copyright &copy; 2012 <a class="link-bluelabel" href="http://www.bluelabellabs.com">Blue Label Labs; Blue Label Solutions LLC.</a>  All rights reserved.</p>
	</div> <!--end .container -->
</div> <!-- end #footer-bottom -->


	<?php include(TEMPLATEPATH . '/includes/scripts.php'); ?>

	<?php wp_footer(); ?>	
</body>
</html>