			<!-- footer -->
			<footer class="footer" role="contentinfo">

				<div class="social-media-banner">
					<h4>Follow Us</h4>
					<ul>
						<li>
							<a href="https://www.facebook.com/R.O.Movement/" target="_blank" class=""><i class="fa fa-facebook-f"></i></a>
						</li>
						<li>
							<a href="https://www.instagram.com/whitney_cox100/" target="_blank" class=""><i class="fa fa-instagram"></i></a>
						</li>
						<!-- <li>
							<a href="#" class=""><i class="fa fa-twitter"></i></a>
						</li> -->
					</ul>
				</div>

				<div class="footer-links">
					<div class="footer-links-wrapper">
						<div class="site-map">
							<h4>Site Map</h4>
							<?php wp_nav_menu( array( 'theme_location' => 'extra-menu' ) ); ?>
						</div>

						<div class="contact-us">
							<h4>Contact Us</h4>
							<ul>
								<li>
									<a href="#" class="phone">Phone</i></a>
								</li>
								<li>
									<a href="#" class="email">Email</i></a>
								</li>
								<li>
									<a href="#" class="">Other</i></a>
								</li>
							</ul>
						</div>

						<div class="search-site">
							<h4>Search Site</h4>

							<div class="sidebar" role="complementary">

								<?php get_template_part('searchform'); ?>

								<div class="sidebar-widget">
									<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
								</div>

								<div class="sidebar-widget">
									<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
								</div>

							</div>
						</div>
					</div>
				</div>

				<!-- copyright -->
				<p class="copyright">
					&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. <?php _e('Powered by', 'html5blank'); ?>
					<a href="//wordpress.org" title="WordPress">WordPress</a> &amp; <a href="//html5blank.com" title="HTML5 Blank">HTML5 Blank</a>.
				</p>
				<!-- /copyright -->

			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
