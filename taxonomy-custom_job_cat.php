<?php
/*
This is the taxonomy content section for the custom job post type
*/
?>

<?php get_header(); ?>
			
<div id="content">

	<div id="inner-content" class="row">

	    <main id="main" class="large-8 medium-8 columns first" role="main">
	
		    <header>
		    	<h1 class="page-title"><span><?php _e("Posts Categorized:", "jointstheme"); ?></span> <?php single_cat_title(); ?></h1>
		    </header>

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		 
				<!-- To see additional archive styles, visit the /parts directory -->
				<?php get_template_part( 'parts/loop', 'archive' ); ?>
			    
			<?php endwhile; ?>	

				<?php joints_page_navi(); ?>
				
			<?php else : ?>
										
				<?php get_template_part( 'parts/content', 'missing' ); ?>
					
			<?php endif; ?>

	    </main> <!-- end #main -->
	    
	</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>