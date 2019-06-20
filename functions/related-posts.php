<?php
// Related Posts Function, matches posts by tags - call using joints_related_posts(); )
function joints_related_posts() {
	global $post;
	$tags = wp_get_post_tags( $post->ID );
	if($tags) {
		foreach( $tags as $tag ) {
			$tag_arr .= $tag->slug . ',';
		}
		$args = array(
			'tag' => $tag_arr,
			'numberposts' => 3, /* you can change this to show more */
			'post__not_in' => array($post->ID)
		);
		$related_posts = get_posts( $args );
		if($related_posts) {
		echo '<div class="related-posts">';
		echo '<h4>You Might Also Like:</h4>';
		echo '<div class="grid-x">';
			foreach ( $related_posts as $post ) : setup_postdata( $post ); ?>
				<div class="large-4 medium-6 small-12 cell panel" data-equalizer-watch>
		
			<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">
			
				<section id="archive-grid-featured-image" class="featured-image" itemprop="articleBody">
					<?php the_post_thumbnail('full'); ?>
				</section> <!-- end article section -->
			
				<header class="article-header">
					<h4 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>	
					<?php get_template_part( 'parts/content', 'byline'); ?>				
				</header> <!-- end article header -->
								    							
			</article> <!-- end article -->
			<p class="grid-btn"><a href="<?php the_permalink(); ?>"class="button hollow">Read Post</a></p> 
		</div>
			<?php endforeach; }
			}
	wp_reset_postdata();
	echo '</div></div>';
} /* end joints related posts function */