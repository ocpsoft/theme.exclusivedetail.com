<?php
/*
 Template Name: Page (Splash)
*/
?>

<!DOCTYPE html>
<html lang="en">

<?php get_header(); ?>

<body class="homepage">
	<?php include 'navbar.php';?>

<!-- Main Wrapper -->
<div id="main-wrapper">

	
	<?php if (have_posts()) : ?>
	
		<?php while (have_posts()) : the_post(); ?>
		
		<?php the_content(); ?>
		
		<?php endwhile; ?>
		
		<?php include 'blogfeed.php';?>
		
	<?php else : ?>
		
		<?php the_error_page(); ?>
	
	<?php endif; ?>

</div>
	
	<?php get_footer(); ?>

</body>
</html>