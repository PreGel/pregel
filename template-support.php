<?php
/*
Template Name: Customer Support
*/
?>
<?php get_header(); ?>
			
<div id="content" class="pg-about-content">
  <!-- Title Banner of Page with Big Image -->
	<div id="pg-about-banner-container">
	 <!-- <div class="row"> -->
	  <div id="pg-about-banner"></div>
	 <!-- </div>  -->
	</div>
	
 <div id="inner-support-content">

  <div id="title-banner" class="large-centered columns">
	<h2 class="text-center"><?php the_field('title_banner_text'); ?></h2>							
  </div>
	<div class="grid-container">
	  <div class="grid-x grid-margin-x">
		<main id="main" class="large-8 medium-12 small-12 cell" role="main">
				    
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				 
			<!-- To see additional archive styles, visit the /parts directory -->
			<?php get_template_part( 'parts/loop', 'page' ); ?>
					    
		<?php endwhile; ?>	

			<?php joints_page_navi(); ?>
						
		<?php else : ?>
												
			<?php get_template_part( 'parts/content', 'missing' ); ?>
							
		<?php endif; ?>
			
		</main> <!-- end #main -->

		<?php get_sidebar('help'); ?>

	  </div>
	</div>

 </div> <!-- end #inner-content -->
</div> <!-- end #content -->

<?php get_footer(); ?>