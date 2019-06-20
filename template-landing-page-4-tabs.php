<?php
/*
Template Name: Landing Page 4 tabs
*/
?>
<!doctype html>

  <html class="no-js"  <?php language_attributes(); ?>>

	<head>
		<meta charset="utf-8">
		
		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta class="foundation-mq">
		
		<!-- If Site Icon isn't set in customizer -->
		<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
			<!-- Icons & Favicons -->
			<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
			<link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon" />
			<!--[if IE]>
				<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
			<![endif]-->
			<meta name="msapplication-TileColor" content="#f01d4f">
			<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/images/win8-tile-icon.png">
	    	<meta name="theme-color" content="#121212">
	    <?php } ?>

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<link rel="canonical" href="https://pregelamerica.com">
		<?php wp_head(); ?>

		<!-- testing - pull in styles from magento for nav -->

		<!-- <link rel="stylesheet" type="text/css" href="http://store.pregeltest.com/skin/frontend/intenso/default/css/foundation.css" media="all" /> -->
		<!-- <link rel="stylesheet" type="text/css" href="http://store.pregeltest.com/skin/frontend/intenso/default/css/styles.css" media="all" /> -->

		<!-- Drop Google Analytics here -->
		<!-- end analytics -->

	</head>
	
		
	<body <?php body_class(); ?>>
		<!-- this is for desktops, this navs moves to off-canvas for mobile -->
		<?php get_template_part( /*'parts/nav', 'title-bar-custom'*/ ); ?>

		<div class="off-canvas-wrapper">
			
			<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
				
				<?php get_template_part( /*'parts/content', 'offcanvas' */); ?>
				
				<div class="off-canvas-content" data-off-canvas-content>
					
					<header class="header" role="banner">
							
						 <!-- This navs will be applied to the topbar, above all content 
							  To see additional nav styles, visit the /parts directory -->
							 	
					</header> <!-- end .header -->

<div id="content" class="">

 <!-- Beginning of Content  -->   
  <div class="row" id="pg-about-content-row">
  	<img src="assets/images/pregel-logo.png" alt="">
  </div>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	    <!-- Content section 1 -->
			<div id="pg-about-section-banner-video">
			 <div class="row" id="pg-about-content-row">
				<div class="large-6 small-12 columns">

				  <h1 class="small-12 large-12 text-center columns"><?php the_field('page_title'); ?></h1>

				  <div class="small-12 large-12 columns">
					 <?php the_field('section_one_text'); ?>
					 <a href="<?php the_field('button_link'); ?>" class="button"><?php the_field('button_text'); ?></a>
				  </div>

				</div>

				<div class="large-6 small-12 columns">
					<?php the_field('video_section'); ?>
				</div>
			  
			 </div>
			</div>
		<!-- Content section 2 -->
			<div id="pg-about-section-two" class="alt-background-light-blue">
			 <div class="row" id="pg-about-content-row">

			  <div class="small-12 medium-10 large-10 large-centered medium-centered columns">
			  	<h2 class="text-center"><?php the_field('section_two_title'); ?></h2>
				 <?php the_field('section_two_text'); ?>
			  </div>

			  <div class="small-12 medium-12 large-12 columns">
				<ul class="tabs" data-deep-link="true" data-update-history="true" data-deep-link-smudge="true" data-deep-link-smudge="500" data-tabs id="deeplinked-tabs">
				  <li class="tabs-title is-active"><a href="#panel1d" aria-selected="true"><?php the_field('tab_one_title'); ?></a></li>
				  <li class="tabs-title"><a href="#panel2d"><?php the_field('tab_two_title'); ?></a></li>
				  <li class="tabs-title"><a href="#panel3d"><?php the_field('tab_three_title'); ?></a></li>
				  <li class="tabs-title"><a href="#panel4d"><?php the_field('tab_four_title'); ?></a></li>
				</ul>

				<div class="tabs-content" data-tabs-content="deeplinked-tabs">
				  <div class="tabs-panel is-active" id="panel1d">
				    <?php the_field('tab_one_text'); ?>
				  </div>
				  <div class="tabs-panel" id="panel2d">
				    <?php the_field('tab_two_text'); ?>
				  </div>
				  <div class="tabs-panel" id="panel3d">
				    <?php the_field('tab_three_text'); ?>
				  </div>
				  <div class="tabs-panel" id="panel4d">
				    <?php the_field('tab_four_text'); ?>
				  </div>
				</div>
			  </div>

			 </div>
			</div>
		<!-- Content section 3 -->
			<div id="pg-about-section-three">
			 <div class="row" id="pg-about-content-row">

			  <div class="large-6 small-12 columns">
			  	<?php the_field('form_section'); ?>
			  </div>

			  <div class="large-6 small-12 columns">

			  	<h3 class="text-center"><?php the_field('section_link_title'); ?></h3>

			  	<div class="large-6 small-12 columns">
			  		<?php the_field('link_one_img'); ?>
			  		<h4 class="text-center"><?php the_field('section_link_one'); ?></h4>
			  	</div>

			  	<div class="large-6 small-12 columns">
			  		<?php the_field('link_two_img'); ?>
			  		<h4 class="text-center"><?php the_field('section_link_two'); ?></h4>
			  	</div>

			  	<div class="large-6 small-12 columns">
			  		<?php the_field('link_three_img'); ?>
			  		<h4 class="text-center"><?php the_field('section_link_three'); ?></h4>
			  	</div>

			  	<div class="large-6 small-12 columns">
			  		<?php the_field('link_four_img'); ?>
			  		<h4 class="text-center"><?php the_field('section_link_four'); ?></h4>
			  	</div>

			  	<div class="large-6 small-12 columns">
			  		<?php the_field('link_five_img'); ?>
			  		<h4 class="text-center"><?php the_field('section_link_five'); ?></h4>
			  	</div>

			  	<div class="large-6 small-12 columns">
			  		<?php the_field('link_six_img'); ?>
			  		<h4 class="text-center"><?php the_field('section_link_six'); ?></h4>
			  	</div>

			  </div>

			 </div>
			</div>
		
    <?php endwhile; endif; ?>	

 </div> <!-- end #pg-inner-content -->
</div> <!-- end #pg-about-content -->

<?php get_footer(); ?>