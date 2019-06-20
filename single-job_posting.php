<?php
/*
This is the single post template for the custom job post type
*/
?>
 <?php get_header(); ?> 
			
<div id="content" class="grid-container">

	<!-- Title Banner of Page with Big Image -->
	   <div id="pg-about-banner-container">
	    <div class="row">
		 <div id="pg-job-banner" class="large-centered columns">					
		 </div>
	    </div> 
	   </div>

	<div id="inner-content" class="grid-x grid-margin-x">

		<main id="main" class="large-12 large-centered cell" role="main">
		
		  <div id="single-job-post-container" class="large-10 large-centered cell">

		    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		    	<?php get_template_part( 'parts/loop', 'single-job' ); ?>
		    					
		    <?php endwhile; else : ?>
		
		   		<?php get_template_part( 'parts/content', 'missing' ); ?>

		    <?php endif; ?>

          </div>

		</main> <!-- end #main -->

	</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>