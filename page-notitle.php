<?php
/*
 Template Name: Page (No Title)
*/
?>

<!DOCTYPE html>
<html lang="en">

<?php get_header(); ?>

<body class="no-sidebar">

	<?php $NOHERO=true; include 'navbar.php';?>
	
	<?php if (have_posts()) : ?>
	
		<!-- Main Wrapper -->
		<div id="main-wrapper" class="post-<?php the_ID(); ?>">
			<div class="main-wrapper-style2">
				<div class="inner">
					<div class="container">
						<div class="row">
							<div class="12u skel-cell-important">
								<div id="content">
		
									<?php while (have_posts()) : the_post(); ?>
		
									<!-- Content -->
									<article>
												
										<?php the_content('Read the rest of this entry &raquo;'); ?>
												
									</article>
									
									<?php endwhile; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		
			<div class="row">
				<p align="center">
					<?php next_posts_link('&laquo; Previous Entries') ?>
					<?php previous_posts_link('Next Entries &raquo;') ?>
				</p>
			</div>
		
			<?php comments_template(); ?>
		
		</div> <!-- End main-wrapper -->
	
	<?php else : ?>
		<?php the_error_page(); ?>
	<?php endif; ?>
	
	<?php get_footer(); ?>

</body>
</html>
