<?php
/* joints Custom Post Type Example
This page walks you through creating 
a custom post type and taxonomies. You
can edit this one or copy the following code 
to create another one. 

I put this in a separate file so as to 
keep it organized. I find it easier to edit
and change things if they are concentrated
in their own file.

*/


// let's create the function for the custom type
function custom_post_popkit() { 
	// creating (registering) the custom type 
	register_post_type( 'popkit_type', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array('labels' => array(
			'name' => __('POP Kits', 'jointswp'), /* This is the Title of the Group */
			'singular_name' => __('POP Kit', 'jointswp'), /* This is the individual type */
			'all_items' => __('All POP Kits', 'jointswp'), /* the all items menu item */
			'add_new' => __('Add New', 'jointswp'), /* The add new menu item */
			'add_new_item' => __('Add New POP Kit', 'jointswp'), /* Add New Display Title */
			'edit' => __( 'Edit', 'jointswp' ), /* Edit Dialog */
			'edit_item' => __('Edit POP Kits', 'jointswp'), /* Edit Display Title */
			'new_item' => __('New POP Kit', 'jointswp'), /* New Display Title */
			'view_item' => __('View POP Kit', 'jointswp'), /* View Display Title */
			'search_items' => __('Search POP Kits', 'jointswp'), /* Search Custom Type Title */ 
			'not_found' =>  __('Nothing found in the Database.', 'jointswp'), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __('Nothing found in Trash', 'jointswp'), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'This is the POP Kit post type', 'jointswp' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */ 
			'menu_icon' => 'dashicons-book', /* the icon for the custom post type menu. uses built-in dashicons (CSS class name) */
			'rewrite'	=> array( 'slug' => 'popkit', 'with_front' => false ), /* you can specify its url slug */
			//'has_archive' => 'popkits', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'sticky')
	 	) /* end of options */
	); /* end of register post type */
	
	/* this adds your post categories to your custom post type */
	//register_taxonomy_for_object_type('category', 'popkit_type');
	/* this adds your post tags to your custom post type */
	//register_taxonomy_for_object_type('post_tag', 'popkit_type');
	
} 

	// adding the function to the Wordpress init
	add_action( 'init', 'custom_post_popkit');
	
	/*
	for more information on taxonomies, go here:
	http://codex.wordpress.org/Function_Reference/register_taxonomy
	*/
	
	// now let's add custom categories (these act like categories)
    register_taxonomy( 'popkit_cat', 
    	array('popkit_type'), /* if you change the name of register_post_type( 'popkit_type', then you have to change this */
    	array('hierarchical' => true,     /* if this is true, it acts like categories */             
    		'labels' => array(
    			'name' => __( 'POP Kit Categories', 'jointswp' ), /* name of the POP Kit taxonomy */
    			'singular_name' => __( 'POP Kit Category', 'jointswp' ), /* single taxonomy name */
    			'search_items' =>  __( 'Search POP Kit Categories', 'jointswp' ), /* search title for taxomony */
    			'all_items' => __( 'All POP Kit Categories', 'jointswp' ), /* all title for taxonomies */
    			'parent_item' => __( 'Parent POP Kit Category', 'jointswp' ), /* parent title for taxonomy */
    			'parent_item_colon' => __( 'Parent POP Kit Category:', 'jointswp' ), /* parent taxonomy title */
    			'edit_item' => __( 'Edit POP Kit Category', 'jointswp' ), /* edit POP Kit taxonomy title */
    			'update_item' => __( 'Update POP Kit Category', 'jointswp' ), /* update title for taxonomy */
    			'add_new_item' => __( 'Add New POP Kit Category', 'jointswp' ), /* add new title for taxonomy */
    			'new_item_name' => __( 'New POP Kit Category Name', 'jointswp' ) /* name title for taxonomy */
    		),
    		'show_admin_column' => true, 
    		'show_ui' => true,
    		'query_var' => true,
    		'rewrite' => array( 'slug' => 'custom-slug' ),
    	)
    );   
    
	// now let's add custom tags (these act like categories)
    register_taxonomy( 'popkit_tag', 
    	array('popkit_type'), /* if you change the name of register_post_type( 'popkit_type', then you have to change this */
    	array('hierarchical' => false,    /* if this is false, it acts like tags */                
    		'labels' => array(
    			'name' => __( 'POP Kit Tags', 'jointswp' ), /* name of the POP Kit taxonomy */
    			'singular_name' => __( 'POP Kit Tag', 'jointswp' ), /* single taxonomy name */
    			'search_items' =>  __( 'Search POP Kit Tags', 'jointswp' ), /* search title for taxomony */
    			'all_items' => __( 'All POP Kit Tags', 'jointswp' ), /* all title for taxonomies */
    			'parent_item' => __( 'Parent POP Kit Tag', 'jointswp' ), /* parent title for taxonomy */
    			'parent_item_colon' => __( 'Parent POP Kit Tag:', 'jointswp' ), /* parent taxonomy title */
    			'edit_item' => __( 'Edit POP Kit Tag', 'jointswp' ), /* edit POP Kit taxonomy title */
    			'update_item' => __( 'Update POP Kit Tag', 'jointswp' ), /* update title for taxonomy */
    			'add_new_item' => __( 'Add New POP Kit Tag', 'jointswp' ), /* add new title for taxonomy */
    			'new_item_name' => __( 'New POP Kit Tag Name', 'jointswp' ) /* name title for taxonomy */
    		),
    		'show_admin_column' => true,
    		'show_ui' => true,
    		'query_var' => true,
    	)
    ); 
    
    /*
    	looking for custom meta boxes?
    	check out this fantastic tool:
    	https://github.com/jaredatch/Custom-Metaboxes-and-Fields-for-WordPress
    */