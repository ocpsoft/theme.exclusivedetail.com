<!-- Footer Wrapper -->
<div id="footer-wrapper">
	<footer id="footer" class="container">
		<div class="row">
			<div class="3u"><img class="footerimg" src="<?php bloginfo('stylesheet_directory');?>/images/logos/iwfa.png"/> </div>
			<div class="3u"><img class="footerimg" src="<?php bloginfo('stylesheet_directory');?>/images/logos/huperoptik.png"/> </div>
			<div class="3u"><img class="footerimg" src="<?php bloginfo('stylesheet_directory');?>/images/logos/llumar.png"/> </div>
			<div class="3u"><a rel="nofollow" class="footerimg" href="http://www.homeadvisor.com/rated.ExclusiveWindowFilmLLC.48261926.html"><img src="<?php bloginfo('stylesheet_directory');?>/images/logos/homeadvisor.png"/></a></div>
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
