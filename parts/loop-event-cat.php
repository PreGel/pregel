<div id="single-event-container" class="large-12 medium-12 small-12 columns">

	<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
							
		<header class="article-header">	
		 <div id="event-title" class="large-12 medium-12 small-12 columns">
		  <h3 class="entry-title single-title" itemprop="headline"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
		 </div>
	    </header> <!-- end article header -->
		
		<section class="entry-content" itemprop="articleBody">
		 <a href="<?php the_permalink() ?>">
		  <div id="event-img-container" class="large-5 medium-6 small-12 columns">
		  	
		  	<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned
							the_post_thumbnail("medium_large");
						} else { // if not then display a default image
							echo '<img style="height: 20rem;" src="https://pregelcolombia.com/wp-content/uploads/sites/21/2018/05/PreGel_COLOMBIA.png" alt="" />';
						} 
					?>
		  </div>
		 </a>
		</section> <!-- end article section -->
		<section class="entry-content" itemprop="articleBody">
		  <div id="event-description" class="large-7 medium-6 small-12 columns">
		  	<div class="large-12 small-12 columns">
		  	    <?php $terms = get_the_terms( $post->ID , 'event_cat' ); 
                    foreach ( $terms as $term ) {
                        $term_link = get_term_link( $term, 'event_cat' );
                        if( is_wp_error( $term_link ) )
                        continue;
                    echo '<a href="' . $term_link . '">' . $term->name . '</a>';
                    } 
                ?> 
            </div>
		    <h4 id="event-date" class="large-12 small-12 columns"><?php the_field('event_date'); ?></h4>
		    <h4 id="event-local" class="large-12 small-12 columns"><?php the_field('event_local'); ?></h4>
		    <div id="event-time" class="large-8 small-8 columns"><?php the_field('event_time'); ?></div>
		    <div id="event-booth" class="large-8 small-8 columns"><?php the_field('event_booth'); ?></div>
		  	<div id="event-blurb" class="large-12 small-12 columns"><?php the_field('event_blurb'); ?></div>
		  	<h4 id="event-url" class="large-12 columns end"><?php the_field('event_url'); ?>
		  	</h4>
		  </div>
		</section> <!-- end article section -->
		<!-- <section class="large-12 large-centered columns">
		 
		</section> -->
		  
		<footer class="article-footer">
		 <p class="tags"><?php the_tags('<span class="tags-title">' . __('Tags:', 'jointstheme') . '</span> ', ', ', ''); ?></p>	
		</footer> <!-- end article footer -->
																					
	</article> <!-- end article -->

</div> <!-- end container div -->