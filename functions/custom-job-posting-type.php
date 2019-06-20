<?php
		function job_opening_post() { 
	// creating (registering) the custom type 
	register_post_type( 'job_posting', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array('labels' => array(
			'name' => __('Job Post', 'jointswp'), /* This is the Title of the Group */
			'singular_name' => __('Job Post', 'jointswp'), /* This is the individual type */
			'all_items' => __('All JobsPosts', 'jointswp'), /* the all items menu item */
			'add_new' => __('Add New', 'jointswp'), /* The add new menu item */
			'add_new_item' => __('Add New Job Opening', 'jointswp'), /* Add New Display Title */
			'edit' => __( 'Edit', 'jointswp' ), /* Edit Dialog */
			'edit_item' => __('Edit Job Post', 'jointswp'), /* Edit Display Title */
			'new_item' => __('New Job Post', 'jointswp'), /* New Display Title */
			'view_item' => __('View Job Post', 'jointswp'), /* View Display Title */
			'search_items' => __('Search Job Post', 'jointswp'), /* Search Custom Type Title */ 
			'not_found' =>  __('Nothing found in the Database.', 'jointswp'), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __('Nothing found in Trash', 'jointswp'), /* This displays if there is nothing in the trash */
			'parent_item' => ''
			), /* end of arrays */
			'description' => __( 'This is a job opening post type', 'jointswp' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 80, /* this is what order you want it to appear in on the left hand side menu */ 
			'menu_icon' => 'dashicons-universal-access-alt', /* the icon for the custom post type menu. uses built-in dashicons (CSS class name) */
			'rewrite'	=> array( 'job_posting', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'job_posting', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'thumbnail', 'revisions', 'page-attributes')
	 	) /* end of options */
	); /* end of register post type */
	
	/* this adds your post categories to your custom post type */
	register_taxonomy_for_object_type('category', 'job_posting');
	/* this adds your post tags to your custom post type */
	register_taxonomy_for_object_type('post_tag', 'job_posting');
	
} 

	// adding the function to the Wordpress init
	add_action( 'init', 'job_opening_post');
	
	/*
	for more information on taxonomies, go here:
	http://codex.wordpress.org/Function_Reference/register_taxonomy
	*/
	
	// now let's add custom categories (these act like categories)
    register_taxonomy( 'custom_job_cat', 
    	array('job_posting'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
    	array('hierarchical' => true,     /* if this is true, it acts like categories */             
    		'labels' => array(
    			'name' => __( 'Job Categories', 'jointswp' ), /* name of the custom taxonomy */
    			'singular_name' => __( 'Job Category', 'jointswp' ), /* single taxonomy name */
    			'search_items' =>  __( 'Search Job Categories', 'jointswp' ), /* search title for taxomony */
    			'all_items' => __( 'All Job Categories', 'jointswp' ), /* all title for taxonomies */
    			'parent_item' => __( 'Parent Job Category', 'jointswp' ), /* parent title for taxonomy */
    			'parent_item_colon' => __( 'Parent Job Category:', 'jointswp' ), /* parent taxonomy title */
    			'edit_item' => __( 'Edit Job Category', 'jointswp' ), /* edit custom taxonomy title */
    			'update_item' => __( 'Update Job Category', 'jointswp' ), /* update title for taxonomy */
    			'add_new_item' => __( 'Add New Job Category', 'jointswp' ), /* add new title for taxonomy */
    			'new_item_name' => __( 'New Job Category Name', 'jointswp' ) /* name title for taxonomy */
    		),
    		'show_admin_column' => true, 
    		'show_ui' => true,
    		'query_var' => true,
    		'rewrite' => array( 'slug' => 'custom-slug' ),
    	)
    );   
    
	// now let's add custom tags (these act like categories)
    register_taxonomy( 'custom_job_tag', 
    	array('job_posting'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
    	array('hierarchical' => false,    /* if this is false, it acts like tags */                
    		'labels' => array(
    			'name' => __( 'Job Tags', 'jointswp' ), /* name of the custom taxonomy */
    			'singular_name' => __( 'Job Tag', 'jointswp' ), /* single taxonomy name */
    			'search_items' =>  __( 'Search CJobTags', 'jointswp' ), /* search title for taxomony */
    			'all_items' => __( 'All Job Tags', 'jointswp' ), /* all title for taxonomies */
    			'parent_item' => __( 'Parent Job Tag', 'jointswp' ), /* parent title for taxonomy */
    			'parent_item_colon' => __( 'Parent Job Tag:', 'jointswp' ), /* parent taxonomy title */
    			'edit_item' => __( 'Edit Job Tag', 'jointswp' ), /* edit custom taxonomy title */
    			'update_item' => __( 'Update Job Tag', 'jointswp' ), /* update title for taxonomy */
    			'add_new_item' => __( 'Add New Job Tag', 'jointswp' ), /* add new title for taxonomy */
    			'new_item_name' => __( 'New Job Tag Name', 'jointswp' ) /* name title for taxonomy */
    		),
    		'show_admin_column' => true,
    		'show_ui' => true,
    		'query_var' => true,
    	)
    ); 
?>