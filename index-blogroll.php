
<div class="main-wrapper-style3">
	<div class="inner">
		<div class="container">
			<div class="row">

					<!-- Article list -->
					<section class="box-article-list">
						<h2 class="fa fa-file-text-o">From the blog</h2>

						<p><?php posts_nav_link('&#8734;','&laquo; Newer articles','Older articles &raquo;'); ?></p>
						
						<?php
							if ( have_posts() ) :
								while ( have_posts() ) : the_post();
									// Your loop code
						?>
						
							<!-- Excerpt -->
							<article class="box-excerpt">
								<a href="<?php the_permalink() ?>" class="image image-left">
								<?php if (has_post_thumbnail()) : ?>
									<?php the_post_thumbnail( 'medium' );
									?>	
								<?php endif; ?>
								</a>
								<div>
									<header>
										<span class="date"><?php the_date("F j, Y, g:i a") ?></span>
										<h3><a href="<?php echo the_permalink() ?>" title="<?php the_title() ?>"><?php the_title() ?></a></h3>
									</header>
									<p><?php content(200); ?>
									<a href="<?php echo the_permalink() ?>"> read more</a>. </p>
								</div>
							</article>
								
						<?php
								endwhile;
							else :
								echo wpautop( 'Sorry, no posts were found' );
							endif;
						?>

						<p><?php posts_nav_link('&#8734;','&laquo; Newer articles','Older articles &raquo;'); ?></p>

					</section>
				</div>
		</div>
	</div>
</div>
