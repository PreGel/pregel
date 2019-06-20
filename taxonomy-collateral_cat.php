<?php
/*
This is the custom post type taxonomy template.
If you edit the custom taxonomy name, you've got
to change the name of this template to
reflect that name change.

i.e. if your custom taxonomy is called
register_taxonomy( 'shoes',
then your single template should be
taxonomy-shoes.php

*/
?>

<?php get_header(); ?>

<div id="content">
			
			<div id="pg-news-container" class="grid-container">

			  <div id="cat-filter">
			  	<!-- <div class="large-12 cell"> -->
			  	<h4>Browse by Category</h4>
			  		 <?php $terms = get_terms('collateral_cat');
						echo '<div id="news-cat-list" class="grid-x grid-margin-x">';
						 foreach ($terms as $term) {
						 echo '<div id="news-cat-button" class="auto cell"><a class="button expanded" href="'.get_term_link($term).'">'.$term->name.'</a></div>';
						  }
						echo '</div>';
						?>

			  	<!-- </div> -->
			  </div>
			</div>
			<div class="grid-container">	
			    <div id="news-grid-feed" class="grid-x grid-margin-x">
			   <!--  <div class="large-12 medium-12 small-12 cell" role="main"> -->
			    
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				 
					<!-- To see additional archive styles, visit the /parts directory -->
					<?php get_template_part( 'parts/loop', 'collateral-cat' ); ?>
									    
					<?php endwhile; ?>	

						<?php joints_page_navi(); ?>
										
					<?php else : ?>
																
						<?php get_template_part( 'parts/content', 'missing' ); ?>
											
					<?php endif; ?>
				</div>
			    </div><!-- end #news-grid-feed -->
		

	</div> <!-- end #content-->

<?php get_footer(); ?>