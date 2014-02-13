<!-- Footer Wrapper -->
<div id="footer-wrapper">
	<footer id="footer" class="container">
		<div class="row">
			<div class="3u">
			
				<!-- Links -->
					<section>
						<h2>Filler Links</h2>
						<?php wp_nav_menu(array(
								'theme_location'  => 'footer',
								'container'       => 'ul',
								'menu_class'      => 'style2',
								'echo'            => true,
								'fallback_cb'     => 'wp_page_menu',
								'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
								'fallback_cb' => 'ocpsoft_menu_fallback'
						)); ?>
					</section>
			</div>
			<div class="3u">
			
				<!-- Links -->
					<section>
						<h2>More Filler</h2>
						<?php wp_nav_menu(array(
								'theme_location'  => 'footer2',
								'container'       => 'ul',
								'menu_class'      => 'style2',
								'echo'            => true,
								'fallback_cb'     => 'wp_page_menu',
								'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
								'fallback_cb' => 'ocpsoft_menu_fallback'
						)); ?>
					</section>
			
				<!-- Links -->
					<section>
						<h2>Even More Filler</h2>
						<?php wp_nav_menu(array(
								'theme_location'  => 'footer3',
								'container'       => 'ul',
								'menu_class'      => 'style2',
								'echo'            => true,
								'fallback_cb'     => 'wp_page_menu',
								'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
								'fallback_cb' => 'ocpsoft_menu_fallback'
						)); ?>
					</section>
			
			</div>
			<div class="6u">

				<!-- About -->
				<section>
					<h2><strong>ZeroFour</strong> by HTML5 UP</h2>
					<p>Hello! This is <strong>ZeroFour</strong>, a free, fully responsive HTML5 site
					template by <a href="http://n33.co/">n33</a> for <a href="http://html5up.net/">HTML5 UP</a>.
					It's <a href="http://html5up.net/license/">Creative Commons Attribution</a>
					licensed so use it for any personal or commercial project (just credit us
					for the design!)</p>
					<a href="http://html5up.net/" class="button alt fa fa-arrow-circle-o-right">More @ HTML5Up.net</a>
				</section>
			
				<!-- Contact -->
				<section>
					<h2>Get in touch</h2>
					<div>
						<div class="row">
							<div class="6u">
								<dl class="contact">
									<dt>Twitter</dt>
									<dd><a href="http://twitter.com/n33co">@n33co</a></dd>
									<dt>Dribbble</dt>
									<dd><a href="http://dribbble.com/n33">dribbble.com/n33</a></dd>
									<dt>WWW</dt>
									<dd><a href="http://n33.co">n33.co</a></dd>
									<dt>Email</dt>
									<dd><a href="mailto:aj%20-at-%20n33.co">aj -at- n33.co</a></dd>
								</dl>
							</div>
							<div class="6u">
								<dl class="contact">
									<dt>Address</dt>
									<dd>
										1234 Fictional Rd<br />
										Nashville, TN 00000-0000<br />
										USA
									</dd>
									<dt>Phone</dt>
									<dd>(000) 000-0000</dd>
								</dl>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
		
		<!-- Copyright Wrapper -->
		<div class="row">
			<div class="12u">
				<div id="copyright">
					<span class="pull-left" style="margin-left: 25px;">
					<span class="g-plusone" data-annotation="none"></span>
					</span>
						<script type="text/javascript">
						  (function() {
						    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
						    po.src = 'https://apis.google.com/js/plusone.js';
						    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
						  })();
						</script>
				
					&copy;
					<?=date('Y');?>
					<a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?> </a> All Rights Reserved.
				</div>
			</div>
		</div>
		
		<?php wp_footer(); ?>
	</footer>
</div>