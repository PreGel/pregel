 <div id="pg-collateral-cards" class="large-3 medium-4 small-6 columns panel end" data-equalizer-watch>
  <div class="row">
	<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
	<header class="article-header">	
		<h4 id="collateral-title" class="larage-12 large-centered columns"><?php the_title(); ?></h4>		
    </header> <!-- end article header -->
	<div id="collateral-card-img-container" class="large-12 medium-12 small-12 columns">

    <div class="collateral-card-img" itemprop="articleBody">
			<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned
							the_post_thumbnail("medium"); } 
			else { // if not then display a default image
			echo '<img src="https://pregelamerica.com/wp-content/uploads/2016/07/LOGO-AMERICAWEB-01.jpg" alt="" />';} ?>			
	</div>
	
    </div>

    <section class="large-12 large-centered columns">
	 <a id="download-button" class="large hollow button pardotTrackClick" href="<?php the_field('collateral_download_link'); ?>">Download</a>
	</section>
	<footer class="article-footer">
	 <p class="tags"><?php the_tags('<span class="tags-title">' . __('Tags:', 'jointstheme') . '</span> ', ', ', ''); ?></p>	</footer> <!-- end article footer -->												
	</article> <!-- end article -->
  </div>	
 </div>


