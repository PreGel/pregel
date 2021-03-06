<?php
/* Custom post type for PreGel Collateral */

function collateral_post() { 
	// creating (registering) the custom type 
	register_post_type( 'collateral_type', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array('labels' => array(
			'name' => __('Collateral Post', 'jointswp'), /* This is the Title of the Group */
			'singular_name' => __('Collateral Post', 'jointswp'), /* This is the individual type */
			'all_items' => __('Collateral Posts', 'jointswp'), /* the all items menu item */
			'add_new' => __('Add New', 'jointswp'), /* The add new menu item */
			'add_new_item' => __('Add Collateral Post', 'jointswp'), /* Add New Display Title */
			'edit' => __( 'Edit', 'jointswp' ), /* Edit Dialog */
			'edit_item' => __('Edit Collateral Post', 'jointswp'), /* Edit Display Title */
			'new_item' => __('New Collateral Post', 'jointswp'), /* New Display Title */
			'view_item' => __('View Collateral Post', 'jointswp'), /* View Display Title */
			'search_items' => __('Search Collateral Post', 'jointswp'), /* Search Custom Type Title */ 
			'not_found' =>  __('Nothing found in the Database.', 'jointswp'), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __('Nothing found in Trash', 'jointswp'), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'This is the Collateral post type', 'jointswp' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 85, /* this is what order you want it to appear in on the left hand side menu */ 
			'menu_icon' => 'dashicons-images-alt', /* the icon for the custom post type menu. uses built-in dashicons (CSS class name) */
			'rewrite'	=> array( 'slug' => 'collateral', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'collateral', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'sticky', 'page-attributes')
	 	) /* end of options */
	); /* end of register post type */
	
	/* this adds your post categories to your custom post type */
	register_taxonomy_for_object_type('category', 'collateral_type');
	/* this adds your post tags to your custom post type */
	register_taxonomy_for_object_type('post_tag', 'collateral_type');
	
} 

	add_action( 'init', 'collateral_post');
	
    register_taxonomy( 'collateral_cat', 
    	array('collateral_type'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
    	array('hierarchical' => true,     /* if this is true, it acts like categories */             
    		'labels' => array(
    			'name' => __( 'Collateral Categories', 'jointswp' ), /* name of the custom taxonomy */
    			'singular_name' => __( 'Collateral Category', 'jointswp' ), /* single taxonomy name */
    			'search_items' =>  __( 'Search Collateral Categories', 'jointswp' ), /* search title for taxomony */
    			'all_items' => __( 'All Collateral Categories', 'jointswp' ), /* all title for taxonomies */
    			'parent_item' => __( 'Parent Collateral Category', 'jointswp' ), /* parent title for taxonomy */
    			'parent_item_colon' => __( 'Parent Collateral Category:', 'jointswp' ), /* parent taxonomy title */
    			'edit_item' => __( 'Edit Collateral Category', 'jointswp' ), /* edit custom taxonomy title */
    			'update_item' => __( 'Update Collateral Category', 'jointswp' ), /* update title for taxonomy */
    			'add_new_item' => __( 'Add New Collateral Category', 'jointswp' ), /* add new title for taxonomy */
    			'new_item_name' => __( 'New Collateral Category Name', 'jointswp' ) /* name title for taxonomy */
    		),
    		'show_admin_column' => true, 
    		'show_ui' => true,
    		'query_var' => true,
    		'rewrite' => array( 'slug' => 'collateral' ),
    	)
    );

        register_taxonomy( 'collateral_tag', 
    	array('collateral_type'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
    	array('hierarchical' => false,    /* if this is false, it acts like tags */                
    		'labels' => array(
    			'name' => __( 'Collateral Tags', 'jointswp' ), /* name of the custom taxonomy */
    			'singular_name' => __( 'Collateral Tag', 'jointswp' ), /* single taxonomy name */
    			'search_items' =>  __( 'Search Collateral Tags', 'jointswp' ), /* search title for taxomony */
    			'all_items' => __( 'All Collateral Tags', 'jointswp' ), /* all title for taxonomies */
    			'parent_item' => __( 'Parent Collateral Tag', 'jointswp' ), /* parent title for taxonomy */
    			'parent_item_colon' => __( 'Parent Collateral Tag:', 'jointswp' ), /* parent taxonomy title */
    			'edit_item' => __( 'Edit Collateral Tag', 'jointswp' ), /* edit custom taxonomy title */
    			'update_item' => __( 'Update Collateral Tag', 'jointswp' ), /* update title for taxonomy */
    			'add_new_item' => __( 'Add New Collateral Tag', 'jointswp' ), /* add new title for taxonomy */
    			'new_item_name' => __( 'New Collateral Tag Name', 'jointswp' ) /* name title for taxonomy */
    		),
    		'show_admin_column' => true,
    		'show_ui' => true,
    		'query_var' => true,
    	)
    ); 
?>