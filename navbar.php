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
							<h1><a href="#" id="logo"><img src="<?php bloginfo('stylesheet_directory');?>/images/logo.png" height="60" style="position: relative; top: -15px;"/></a></h1>
							
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

				<!-- Banner -->
					<div id="banner">
						<h2><strong>ZeroFour:</strong> A free responsive site template<br />
						built on HTML5 and CSS3 by <a href="http://html5up.net">HTML5 UP</a></h2>
						<p>Does this statement make you want to click the shiny blue button?</p>
						<a href="#" class="button big fa fa-check-circle">Yes it does</a>
					</div>

			</div>
		</div>
	</div>
</div>
<?php 
// if (is_active_sidebar('sidebar-header'))
//	dynamic_sidebar('sidebar-header');
?>
