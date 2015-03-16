<!-- Footer Wrapper -->
<div id="footer-wrapper">
	<footer id="footer" class="container">
		<div class="row">
			<div class="3u">
			
				<!-- Links -->
					<section>
						<h2>Our Services</h2>
						<?php wp_nav_menu(array(
								'theme_location'  => 'footer',
								'container'       => 'ul',
								'menu_class'      => 'style2',
								'echo'            => true,
								'fallback_cb'     => 'wp_page_menu',
								'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
								'fallback_cb' => 'ocpsoft_menu_fallback'
						)); ?>
						
						<h2>Review Us</h2>
						<div>
							<div class="row">
								<div class="12u">
									<dt>Yelp &rarr; <a href="http://www.yelp.com/biz/exclusive-detail-and-tint-charlotte"><img style="position: relative; top: 9px;" src="<?php bloginfo('stylesheet_directory');?>/images/yelp_stars.png" /></a></dt>
									<dt style="margin-top: 15px;">Google+ &rarr; <span style="position: relative; top: 5px;"><span class="g-plusone" data-annotation="inline" data-width="120"></span></span></dt>
								</div>
							</div>
						</div>
					</section>
			</div>
			<div class="3u">
			
				<!-- Links -->
					<section>
						<h2>About Us</h2>
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
			
			</div>
			<div class="6u">

				<!-- About -->
				<section style="margin-bottom: 40px;">
					<h2><strong>Exclusive Detail</strong> and Tint</h2>
					<p>A Charlotte, North Carolina business.</p>
					<div>
						<div class="row">
							<div class="6u">
								<dl class="contact">
									<dt>Address</dt>
									<dd>
										<a href="https://www.google.com/maps/place/Exclusive+Detail+And+Tint/@35.17588,-80.881683,17z/data=!4m5!1m2!2m1!1sExclusive+Detail+and+Tint!3m1!1s0x88569edf2e7f15fd:0xae86b8b3010e92ba">
											4913 Chastain Ave #32<br />
											Charlotte, NC 28217<br />
											USA
										</a>
									</dd>
							</div>
									
							<div class="6u">
								<dl class="contact">
									<dt>Hours</dt>
									<dd>
										<strong>Mon-Fri</strong> </br>&rarr;  7:30 - 6:00<br/>
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
									<dt>Phone</dt>
									<dd><a href="tel:(704) 525-5225">(704) 525-5225</a></dd>
									<dt>Twitter</dt>
									<dd><a href="http://twitter.com/exclusivedetail">@exclusivedetail</a></dd>
								</dl>
							</div>
							<div class="6u">
								<dl class="contact">
									<dt>Facebook</dt>
									<dd><a href="https://www.facebook.com/ExclusiveDetailAndTint">ExclusiveDetail</a></dd>
									<dt>Google+</dt>
									<dd><a href="https://plus.google.com/112205167362231474009/about">ExclusiveDetail+</a></dd>
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
					<a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a> All Rights Reserved.
				</div>
			</div>
		</div>
		
		<?php wp_footer(); ?>
	</footer>
</div>
