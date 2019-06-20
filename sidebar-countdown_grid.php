<!-- <div id="CountdownGrid" class="homeGrid"> -->

	<?php if ( is_active_sidebar( 'countdown_grid' ) ) : ?>

		<?php dynamic_sidebar( 'countdown_grid' ); ?>

	<?php else : ?>

	<!-- This content shows up if there are no widgets defined in the backend. -->
						
	<div class="alert help">
		<p><?php _e("Please activate a widget for the Countdown Grid", "jointstheme");  ?></p>
	</div>

	<?php endif; ?>

<!-- </div> -->