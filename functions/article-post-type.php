<?php
/* Custom post type for News Article */
	/*
	for more information on taxonomies, go here:
	http://codex.wordpress.org/Function_Reference/register_taxonomy
	*/
	
	// now let's add custom categories (these act like categories)
    register_taxonomy( 'article_cat', 
    	array('article_type'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
    	array('hierarchical' => true,     /* if this is true, it acts like categories */             
    		'labels' => array(
    			'name' => __( 'News Categories', 'jointswp' ), /* name of the News taxonomy */
    			'singular_name' => __( 'News Category', 'jointswp' ), /* single taxonomy name */
    			'search_items' =>  __( 'Search News Categories', 'jointswp' ), /* search title for taxomony */
    			'all_items' => __( 'All News Categories', 'jointswp' ), /* all title for taxonomies */
    			'parent_item' => __( 'Parent News Category', 'jointswp' ), /* parent title for taxonomy */
    			'parent_item_colon' => __( 'Parent News Category:', 'jointswp' ), /* parent taxonomy title */
    			'edit_item' => __( 'Edit News Category', 'jointswp' ), /* edit News taxonomy title */
    			'update_item' => __( 'Update News Category', 'jointswp' ), /* update title for taxonomy */
    			'add_new_item' => __( 'Add New News Category', 'jointswp' ), /* add new title for taxonomy */
    			'new_item_name' => __( 'New News Category Name', 'jointswp' ) /* name title for taxonomy */
    		),
    		'show_admin_column' => true, 
    		'show_ui' => true,
    		'query_var' => true,
    		'rewrite' => array( 'slug' => 'news' ),
    	)
    );   
    
	// now let's add custom tags (these act like categories)
    register_taxonomy( 'article_tag', 
    	array('article_type'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
    	array('hierarchical' => true,    /* if this is false, it acts like tags */                
    		'labels' => array(
    			'name' => __( 'News Tags', 'jointswp' ), /* name of the News taxonomy */
    			'singular_name' => __( 'News Tag', 'jointswp' ), /* single taxonomy name */
    			'search_items' =>  __( 'Search News Tags', 'jointswp' ), /* search title for taxomony */
    			'all_items' => __( 'All News Tags', 'jointswp' ), /* all title for taxonomies */
    			'parent_item' => __( 'Parent News Tag', 'jointswp' ), /* parent title for taxonomy */
    			'parent_item_colon' => __( 'Parent News Tag:', 'jointswp' ), /* parent taxonomy title */
    			'edit_item' => __( 'Edit News Tag', 'jointswp' ), /* edit News taxonomy title */
    			'update_item' => __( 'Update News Tag', 'jointswp' ), /* update title for taxonomy */
    			'add_new_item' => __( 'Add New News Tag', 'jointswp' ), /* add new title for taxonomy */
    			'new_item_name' => __( 'New News Tag Name', 'jointswp' ) /* name title for taxonomy */
    		),
    		'show_admin_column' => true,
    		'show_ui' => true,
    		'query_var' => true,
    	)
    ); 

function custom_post_article() { 
	// creating (registering) the custom type 
	register_post_type( 'article_type', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array('labels' => array(
			'name' => __('News Articles', 'jointswp'), /* This is the Title of the Group */
			'singular_name' => __('News Article', 'jointswp'), /* This is the individual type */
			'all_items' => __('All News Articles', 'jointswp'), /* the all items menu item */
			'add_new' => __('Add New', 'jointswp'), /* The add new menu item */
			'add_new_item' => __('Add New News Article', 'jointswp'), /* Add New Display Title */
			'edit' => __( 'Edit', 'jointswp' ), /* Edit Dialog */
			'edit_item' => __('Edit News Article', 'jointswp'), /* Edit Display Title */
			'new_item' => __('New News Article', 'jointswp'), /* New Display Title */
			'view_item' => __('View News Article', 'jointswp'), /* View Display Title */
			'search_items' => __('Search News Articles', 'jointswp'), /* Search Custom Type Title */ 
			'not_found' =>  __('Nothing found in the Database.', 'jointswp'), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __('Nothing found in Trash', 'jointswp'), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'This is the News Article post type', 'jointswp' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 2, /* this is what order you want it to appear in on the left hand side menu */ 
			'menu_icon' => 'dashicons-id-alt', /* the icon for the custom post type menu. uses built-in dashicons (CSS class name) */
			'rewrite'	=> array( 'slug' => 'news-item', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'news', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'sticky', 'page-attributes')
	 	) /* end of options */
	); /* end of register post type */
	
	/* this adds your post categories to your custom post type */
	//register_taxonomy_for_object_type('category', 'article_type');
	/* this adds your post tags to your custom post type */
	//register_taxonomy_for_object_type('post_tag', 'article_type');
	
} 

	// adding the function to the Wordpress init
	add_action( 'init', 'custom_post_article');

?>