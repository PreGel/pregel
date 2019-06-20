<?php
/*
single_collateral_type.php
*/
?>
 <?php get_header(); ?> 
			
<div id="content">

	<!-- Title Banner of Page with Big Image -->
	   <div id="pg-about-banner-container">
	    <div class="row">
		 <div id="" class="large-centered columns">					
		 </div>
	    </div> 
	   </div>

	<div id="inner-content" class="row">

		<main id="main" class="large-12 large-centered columns" role="main">
		
		  <div id="single-collateral-post-container" class="large-10 large-centered columns">

		    <?php
			$args = array(
			  'post_type' => 'collateral_post',
			  'meta_key' => '_custom_post_order',
			  'orderby' => 'meta_value',
			  'order' => 'ASC'
			);
			$query = new WP_query ( $args );
			if ( $query->have_posts() ) {
			  while ($query->have_posts() ) {
			    $query->the_post();
			    /* only list posts that have a current custom post order value */
			    if ( !empty(get_post_meta( $post->ID, '_custom_post_order', true )) ) : ?>

			    
			    <?php get_template_part( 'parts/loop', 'single-collateral' ); ?>
			                  
			    <?php endwhile; else : ?>
			    
			    <?php get_template_part( 'parts/content', 'missing' ); ?>


			<?php 
			    endif; }
			  wp_reset_postdata();
			} ?>

          </div>

		</main> <!-- end #main -->

	</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>