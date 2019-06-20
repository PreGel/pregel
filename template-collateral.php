<?php
/*
Template Name: Collateral
*/
?>

<?php get_header(); ?>
<div id="content" class="pg-career-content">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?> 
	<!-- Title Banner of Page with Big Image -->
    <div id="pg-about-banner-container">
	  <div id="pg-about-banner"></div>
	</div>
	<div id="title-banner" class="large-centered cell">
		<h1 class="text-center"><?php the_field('collateral_banner_text'); ?></h1>							
	</div>
	 <!-- Content section 1 -->
	<div id="pg-jobs-section-one">
		<div class="grid-container">
	 <div class="grid-x" id="pg-about-content-row">
	  <div class="small-12 large-12 cell">
	   <?php the_field('collateral_section_one_text'); ?>
	  </div>
	   <!-- <div class="large-12 small-12 end cell"> -->
	    <!-- <div class="grid-x"> -->
			<?php $terms = get_terms('collateral_cat');
				//echo '<div id="collateral-cat-sidebar" class="large-10 large-centered cell">';
					foreach ($terms as $term) {
						echo '<div id="collateral-cat-li" class="large-3 medium-3 small-6 end cell"><a href="'.get_term_link($term).'">'.$term->name.'</a></div>';
					}
				//echo '</div>';
			?>
		<!-- </div> -->
	  <!--  </div>	 -->
	 </div>
	</div>
	</div>
	<!-- Collateral Post Section  -->
	<div class="alt-background-light-blue">
		<h2 class="text-center"><?php the_field('collateral_body_text'); ?></h2>
	 <div id="collateral-card-container">
	 <div class="grid-container">
	 <div class="grid-x">
	 <?php $query = new WP_Query( array( 'post_type' => 'collateral_type','orderby'=>'number','order'=>'ASC' ) );
		if ( $query->have_posts() ) : ?>
	 <?php while ( $query->have_posts() ) : $query->the_post(); ?>
	 <div id="pg-collateral-cards" class="large-3 medium-4 small-6 cell panel" data-equalizer-watch>
	<!--  <div class="grid-x"> -->
	 	<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">		
	 	    <?php the_field('collateral_id'); ?>				
			<header class="article-header">
			<h4 id="collateral-title" class="large-12 large-centered cell"><?php the_title(); ?></h4>
			</header> <!-- end article header -->	
			<div id="collateral-card-img-container" class="large-12 medium-12 small-12 cell">
			<div class="collateral-card-img" itemprop="articleBody">
			<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned
							the_post_thumbnail("medium"); } 
			else { // if not then display a default image
			echo '<img src="https://pregelamerica.com/wp-content/uploads/2016/07/LOGO-AMERICAWEB-01.jpg" alt="" />';} ?>			
			</div>
			</div>	
			<section class="large-12 large-centered cell">
		 	<a id="download-button" class="large hollow button pardotTrackClick" href="<?php the_field('collateral_download_link'); ?>"> Download </a>
			</section>			
			<!-- <section id="collateral-description"class="large-12 cell">
				<?php the_field('collateral_description'); ?>
			</section> -->
		</article> <!-- end article -->
	 <!-- </div> -->
	 </div>
	 <?php endwhile; ?>
		<!-- show pagination here -->
		<?php wp_reset_postdata(); ?>
	 <?php else : ?>
		<h2>N/A</h2>
	 <?php endif; ?>
	 </div>
	</div>
	</div>	
	</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>