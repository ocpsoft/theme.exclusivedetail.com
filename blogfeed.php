<div class="main-wrapper-style3" style="padding-top: 5px; padding-bottom: 5px;">
		<div class="inner">
			<div class="container">
				<div class="row">
					<div class="8u">

						<!-- Article list -->
							<section class="box-article-list">
								<h2 class="fa fa-file-text-o">
								
								<a href="<?php echo get_permalink( get_option('page_for_posts' ) ); ?>">
								From the blog
								</a>
								
								</h2>
								
								<?php
									$args = array( 'numberposts' => $ARTICLE_LIMIT, 'offset' => '1' );
									$recent_posts = wp_get_recent_posts( $args );
									foreach( $recent_posts as $recent ){
								?>
								
									<!-- Excerpt -->
									<article class="box-excerpt">
										<a href="<?php echo get_permalink($recent['ID']) ?>" class="image image-left">
											<?php
												if( has_post_thumbnail( $recent['ID'] ))
													echo get_the_post_thumbnail( $recent['ID'], 'thumbnail' ); 
											?>
										</a>
										<div>
											<header>
												<span class="date"><?php echo date("F j, Y, g:i a", strtotime($recent["post_date"])) ?></span>
												<h3><a href="<?php echo get_permalink($recent['ID']) ?>" title="<?php echo esc_attr($recent["post_title"]) ?>"><?php echo $recent["post_title"] ?></a></h3>
											</header>
											<p><?php content_id($recent['ID'], 30) ?>
											<a href="<?php echo get_permalink($recent['ID']) ?>"> read more</a>. </p>
										</div>
									</article>
										
								<?php
									}
								?>

							</section>

					
					</div>
					<div class="4u">
					
						<!-- Spotlight -->
							<section class="box-spotlight">
								<h2 class="fa fa-file-text-o">Spotlight</h2>
								
								<?php
									$args = array( 'numberposts' => '1', 'offset' => '0' );
									$recent_posts = wp_get_recent_posts( $args );
									foreach( $recent_posts as $recent ){
								?>
								
									<article>
										<a href="<?php echo get_permalink($recent['ID']) ?>" class="image image-full">
										
										<?php 
												if( has_post_thumbnail( $recent['ID'] )) :
													echo get_the_post_thumbnail( $recent['ID'], 'medium' ); 
											?>
										<?php else :?>
											<!-- <img src="/wp-content/uploads/2014/02/detailing_1-300x225.jpeg" alt="Featured Post Image" width="300" height="245" class="alignnone size-medium wp-image-29" /> -->
										<?php endif ?>
										</a>
										<header>
											<h3><a href="<?php echo get_permalink($recent['ID']) ?>" title="<?php echo esc_attr($recent["post_title"]) ?>"><?php echo $recent["post_title"] ?></a></h3>
										</header>
										<p><?php content_id($recent['ID'], 70); ?></p>
										<footer>
											<a href="<?php echo get_permalink($recent['ID']) ?>" class="button alt fa fa-file-o">Continue Reading</a>
											<p style="margin-top: 15px;">
											<a href="<?php echo get_permalink( get_option('page_for_posts' ) ); ?>">Or read more articles...</a>
											</p>
										</footer>
									</article>
								
								<?php
									}
								?>
								
							</section>

					</div>
				</div>
			</div>
		</div>
	</div>
