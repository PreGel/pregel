<?php
/*
Template Name: 3 row centered
*/
?>
<?php get_header(); ?>

<div id="content" class="">

	<!-- Beginning of Content  -->   

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<!-- Content section 1 -->
	<div id="pg-about-section-banner-video">
		<div class="grid-container">
			<div class="grid-x" id="pg-about-content-row">
				<h1 class="small-12 large-12 text-center cell"><?php the_field('page_title'); ?></h1>
				<div class="small-12 large-12 cell">
					<?php the_field('section_one_text'); ?>
				</div>
			</div>
		</div>
	</div>
	<!-- Content section 2 -->
	<div id="pg-about-section-two" class="alt-background-light-blue">
		<div class="grid-container">
			<div class="grid-x" id="pg-about-content-row">
				<div class="small-12 medium-10 large-10 large-centered medium-centered cell">
					<?php the_field('section_two_text'); ?>
				</div>
			</div>
		</div>
	</div>
	<!-- Content section 1 -->
	<div id="pg-about-section-three">
		<div class="grid-container">
			<div class="grid-x" id="pg-about-content-row">
				<div class="small-12 medium-10 large-10 large-centered medium-centered cell">
					<?php the_field('section_three_text'); ?>
				</div>
			</div>
		</div>
	</div>
	
<?php endwhile; endif; ?>	

</div> <!-- end #pg-inner-content -->
</div> <!-- end #pg-about-content -->

<?php get_footer(); ?>