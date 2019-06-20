<div id="sidebar-news" class="large-12 columns" role="complementary">

	<?php if ( is_active_sidebar( 'featured_article' ) ) : ?>

		<?php dynamic_sidebar( 'featured_article' ); ?>

	<?php else : ?>

	<!-- This content shows up if there are no widgets defined in the backend. -->
						
	<div class="alert help">
		<p><?php _e("Please activate the Featured Article Widget", "jointstheme");  ?></p>
	</div>

	<?php endif; ?>

</div>