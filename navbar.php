<a id="top"></a>

<!-- Header Wrapper -->
<div id="header-wrapper">
	<div class="container">
		<div class="row">
			<div class="12u">
			
				<!-- Header -->
				<header id="header">
					<div class="inner">

						<!-- Logo -->
						<h1><a href="/"><span style="display: none;">The Premier Window Tinting service in Charlotte, NC</span><a href="/" id="logo"><img src="<?php bloginfo('stylesheet_directory');?>/images/logo.png" style="position: relative; top: -15px; height: 60px;"/></a></h1>
						
						<!-- Nav -->
						<nav id="nav">
							<?php wp_nav_menu( array(
									'theme_location'  => 'primary',
									'menu'            => '',
									'container'       => 'ul',
									'container_class' => '',
									'container_id'    => '',
									'menu_class'      => '',
									'menu_id'         => '',
									'echo'            => true,
									'fallback_cb'     => 'wp_page_menu',
									'before'          => '',
									'after'           => '',
									'link_before'     => '',
									'link_after'      => '',
									'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
									'depth'           => 0,
									'walker'          => new OCPsoft_Nav_Menu
							) ); ?>
						</nav>
					</div>
				</header>

				<?php if(!$NOHERO) : ?>

				<!-- Banner -->
				<div id="banner" class="inner" style="margin-top: 260px;">
					
					
				</div>
				
				<?php endif; ?>

			</div>
		</div>
	</div>
</div>
