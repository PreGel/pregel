<?php
	
// Adding custom functions
//extend timeframe of preview links
add_filter( 'ppp_nonce_life', 'my_nonce_life' );
function my_nonce_life() {
    return 60 * 60 * 24 * 5; // 5 days
}

/*this is an example to reorder the admin meta divs, not sure*/

/*add_filter( 'get_user_option_meta-box-order_article_type', 'metabox_order' );
function metabox_order( $order ) {
    return array(
        'normal' => join( 
            ",", 
            array(       // vvv  Arrange here as you desire
                'customdiv-{CPT}',
                'authordiv',
                'slugdiv',
            )
        ),
    );
}*/

// this adds search box to top bar - as last item in the top bar menu - problem is with the expanding menu and autocomplete dropdown
/*add_filter('wp_nav_menu_items','add_search_box', 10, 2);
function add_search_box($items, $args) {

    if( 'main-nav' === $args -> theme_location ) {
 
        ob_start();
        get_search_form();
        $searchform = ob_get_contents();
        ob_end_clean();
        $items .= '<li class="menu-item">' . $searchform . '</li>';
    }
 
    return $items;
}*/
// limit the image size option for the home page grid
/*add_filter('image_widget_image_size','pg_grid_size');

function pg_grid_size($size) {
    $size = 'home_feature';
    return $size;
}*/
