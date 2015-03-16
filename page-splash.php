<?php
/*
 Template Name: Page (Splash)
*/
?>

<!DOCTYPE html>
<html lang="en" class="wide normal narrow">

<?php get_header(); ?>

<body class="homepage" id="splash">
	<?php include 'navbar.php';?>

<!-- Main Wrapper -->
<div id="main-wrapper">

	
	<?php if (have_posts()) : ?>
	
		<?php while (have_posts()) : the_post(); ?>
		
		<?php the_content(); ?>
		
		<?php endwhile; ?>
		
		<?php $ARTICLE_LIMIT=3; include 'blogfeed.php';?>
		
	<?php else : ?>
		
		<?php the_error_page(); ?>
	
	<?php endif; ?>

</div>
	
	<?php get_footer(); ?>

</body>
</html>