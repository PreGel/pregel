<?php if ( is_active_sidebar( 'home_grid2' ) ) : ?>

		<?php dynamic_sidebar( 'home_grid2' ); ?>

	<?php else : ?>

	<!-- This content shows up if there are no widgets defined in the backend. -->
						
	<div class="alert help">
		<p><?php _e("Please activate a widget for position two.", "jointstheme");  ?></p>
	</div>

	<?php endif; ?>