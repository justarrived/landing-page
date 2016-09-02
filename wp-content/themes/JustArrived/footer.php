			<footer class="footer module-padding" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
					<div id="inner-footer" class="">

						<nav role="navigation">
							<?php wp_nav_menu(array(
	    					'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
	    					'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
	    					'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
	    					'menu_class' => 'nav footer-nav cf',            // adding custom nav class
	    					'theme_location' => 'footer-links',             // where it's located in the theme
	    					'before' => '',                                 // before the menu
	    					'after' => '',                                  // after the menu
	    					'link_before' => '',                            // before each link
	    					'link_after' => '',                             // after each link
	    					'depth' => 0,                                   // limit the depth of the nav
	    					'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
							)); ?>
						</nav>

						<p class="source-org copyright">
							<span>&copy; <?php echo date('Y'); ?> Just Arrived</span>
							<a href="https://www.facebook.com/JustArrivedSE/" title="Facebook" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i>&nbsp; Facebook</a>
          					<a href="https://twitter.com/JustArrivedSE" title="Twitter" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i>&nbsp; Twitter</a></p>

					</div>
			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

		<script type="text/javascript">
			_linkedin_data_partner_id = "17815";
			</script><script type="text/javascript">
			(function(){var s = document.getElementsByTagName("script")[0];
			var b = document.createElement("script");
			b.type = "text/javascript";b.async = true;
			b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
			s.parentNode.insertBefore(b, s);})();
		</script>
	</body>

</html> <!-- end of site. what a ride! -->
