<?php
// SIDEBARS AND WIDGETIZED AREAS
function joints_register_sidebars() {
	register_sidebar(array(
		'id' => 'sidebar1',
		'name' => __('Sidebar 1', 'jointswp'),
		'description' => __('The first (primary) sidebar.', 'jointswp'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	register_sidebar(array(
		'id' => 'offcanvas',
		'name' => __('Offcanvas', 'jointswp'),
		'description' => __('The offcanvas sidebar.', 'jointswp'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	// legacy sidebars - may need refactor

	/* add a widget area to the expanding top bar - relates to sidebar-titlebar.php */

	register_sidebar(array(
		'id' => 'titlebar',
		'name' => __('Title Bar', 'jointswp'),
		'description' => __('The top title bar widget area.', 'jointswp'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

   /* add widgets for home page grid*/

	register_sidebar(array(
		'id' => 'home_grid1',
		'name' => __('Home Grid One', 'jointswp'),
		'description' => __('The home widget grid, position one.', 'jointswp'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	register_sidebar(array(
		'id' => 'home_grid2',
		'name' => __('Home Grid Two', 'jointswp'),
		'description' => __('The home widget grid, position two.', 'jointswp'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	register_sidebar(array(
		'id' => 'home_grid3',
		'name' => __('Home Grid Three', 'jointswp'),
		'description' => __('The home widget grid, position three.', 'jointswp'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	register_sidebar(array(
		'id' => 'home_grid4',
		'name' => __('Home Grid Four', 'jointswp'),
		'description' => __('The home widget grid, position four.', 'jointswp'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	register_sidebar(array(
		'id' => 'home_grid5',
		'name' => __('Home Grid Five', 'jointswp'),
		'description' => __('The home widget grid, position five.', 'jointswp'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	register_sidebar(array(
		'id' => 'home_grid6',
		'name' => __('Home Grid Six', 'jointswp'),
		'description' => __('The home widget grid, position six.', 'jointswp'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	/* adds banner for featured article widget for news page */
	register_sidebar(array(
		'id' => 'featured_article',
		'name' => __('Featured Article', 'jointswp'),
		'description' => __('The news sidebar on the left.', 'jointswp'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));
    
    /* adds side bar widget for news page */
	register_sidebar(array(
		'id' => 'news_sidebar',
		'name' => __('News Sidebar', 'jointswp'),
		'description' => __('The news sidebar on the left.', 'jointswp'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));
	/* adds side bar widget for Help page */
	register_sidebar(array(
		'id' => 'help_sidebar',
		'name' => __('Help Sidebar', 'jointswp'),
		'description' => __('The Customer Support Sidebar', 'jointswp'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));
	/* adds side bar widget for Help page */
	register_sidebar(array(
		'id' => 'event_sidebar',
		'name' => __('Event Sidebar', 'jointswp'),
		'description' => __('The Customer Support Sidebar', 'jointswp'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));
	
	/* adds widget with countdown timer*/
	register_sidebar(array(
		'id' => 'countdown_grid',
		'name' => __('Countdown Grid', 'jointswp'),
		'description' => __('The home widget grid, countdown.', 'jointswp'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	/*
	to add more sidebars or widgetized areas, just copy
	and edit the above sidebar code. In order to call
	your new sidebar just use the following code:

	Just change the name to whatever your new
	sidebar's id is, for example:

	register_sidebar(array(
		'id' => 'sidebar2',
		'name' => __('Sidebar 2', 'jointswp'),
		'description' => __('The second (secondary) sidebar.', 'jointswp'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	To call the sidebar in your template, you can just copy
	the sidebar.php file and rename it to your sidebar's name.
	So using the above example, it would be:
	sidebar-sidebar2.php

	*/
} /* end register sidebars */

add_action( 'widgets_init', 'joints_register_sidebars' );