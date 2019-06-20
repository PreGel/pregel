<?php
/**
 * Widget template. This template can be overriden using the "sp_template_image-widget_widget.php" filter.
 * See the readme.txt file for more info.
 */

// Block direct requests
if ( !defined('ABSPATH') )
	die('-1');

echo $before_widget;
if ( !empty( $title ) ) { echo $before_title . $title . $after_title; }

echo '<a href="'.$instance['link'].'">';
echo '<article class="pg-caption">';


echo $this->get_image_html( $instance, false );

echo'<div class="pg-text-overlay">';

// moved this down for top-down slide effect - put back here for bottom-up slide effect
//if ( !empty( $title ) ) { echo $before_title . $title . $after_title; }

if ( !empty( $description ) ) {
	echo '<div class="'.$this->widget_options['classname'].'-description" >';
	echo wpautop( $description );
	echo "</div>";
}
//for a top-down slide effect
//if ( !empty( $title ) ) { echo $before_title . $title . $after_title; }
echo'</div>';
echo '</article>';
echo '</a>';
echo $after_widget;
?>