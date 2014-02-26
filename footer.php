<!-- Footer Wrapper -->
<div id="footer-wrapper">
	<footer id="footer" class="container">
		<div class="row">
			<div class="3u">
			
				<!-- Links -->
					<section>
						<h2>Services</h2>
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
						<h2>Contact</h2>
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
						<h2>Review Us</h2>
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
					<h2><strong>Exclusive Detail</strong> and Tint</h2>
					<p>A Charlotte, North Carolina Business.</p>
					
					<div>
						<div class="row">
							<div class="6u">
								<dl class="contact">
									<dt>Address</dt>
									<dd>
										4913 Chastain Ave #32<br />
										Charlotte, NC 28217<br />
										USA
									</dd>
									
									<dt>Phone</dt>
									<dd>(704) 525-5225</dd>
							</div>
									
							<div class="6u">
								<dl class="contact">
									<dt>Hours</dt>
									<dd>
										<strong>Mon-Fri</strong>  7:30 - 6:00<br/>
										<strong>Sat</strong>  9:00 - 3:00</br>
										Closed Sundays
									</dd>
								</dl>
							</div>
						</div>
					</div>
				</section>
			
				<!-- Contact -->
				<section>
					<h2>Get in touch</h2>
					<div>
						<div class="row">
							<div class="6u">
								<dl class="contact">
									<dt>Twitter</dt>
									<dd><a href="http://twitter.com/exclusivedetail">@exclusivedetail</a></dd>
									<dt>Google+</dt>
									<dd><a href="http://exclusivedetail.com">exclusivedetail.com/n33</a></dd>
								</dl>
							</div>
							<div class="6u">
								<dl class="contact">
									<dt>Facebook</dt>
									<dd><a href="https://www.facebook.com/ExclusiveDetailAndTint">ExclusiveDetailAndTint</a></dd>
									<dt>Email</dt>
									<dd><a href="mailto:info@exclusivedetail.com">info@exclusivedetail.com</a></dd>
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