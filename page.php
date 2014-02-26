<!DOCTYPE html>
<html lang="en">

<?php get_header(); ?>

<body class="no-sidebar">

	<?php $NOHERO=true; include 'navbar.php';?>
	
	<?php if (have_posts()) : ?>

	<?php while (have_posts()) : the_post(); ?>

		<div class="post" id="post-<?php the_ID(); ?>">
		
			<!-- Main Wrapper -->
			<div id="main-wrapper">
				<div class="main-wrapper-style2">
					<div class="inner">
						<div class="container">
							<div class="row">
								<div class="12u skel-cell-important">
									<div id="content">
	
										<!-- Content -->
									
											<article>
												<header class="major">
													<h2><?php the_title(); ?></h2>
												</header>
												
												<?php the_content('Read the rest of this entry &raquo;'); ?>
												
											</article>
								
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			
				<?php comments_template(); ?>
	</div>

	<?php endwhile; ?>

	<p align="center">
		<?php next_posts_link('&laquo; Previous Entries') ?>
		<?php previous_posts_link('Next Entries &raquo;') ?>
	</p>

	<?php else : ?>

	<?php the_error_page(); ?>

	<?php endif; ?>
	
	<?php get_footer(); ?>

</body>
</html>
