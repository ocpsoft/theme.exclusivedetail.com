<!DOCTYPE html>
<html lang="en">

<?php get_header(); ?>

<body class="no-sidebar">

	<?php $NOHERO=true; include 'navbar.php';?>
	
	<?php if (have_posts() && !is_404()) : ?>
	
		<!-- Main Wrapper -->
		<div id="main-wrapper" class="post-<?php the_ID(); ?>">
		
			<?php $ARTICLE_LIMIT=0;  include 'blogfeed.php';?>
		
			<?php comments_template(); ?>
		
		</div> <!-- End main-wrapper -->
	
	<?php else : ?>
		<?php the_error_page(); ?>
	<?php endif; ?>
	
	<?php get_footer(); ?>

</body>
</html>
