<div id="titlebar">

	<?php if ( is_active_sidebar( 'titlebar' ) ) : ?>

		<?php dynamic_sidebar( 'titlebar' ); ?>

	<?php else : ?>

	<!-- This content shows up if there are no widgets defined in the backend. -->
						
	<div class="alert help">
		<p><?php _e("Please activate some Widgets.", "jointstheme");  ?></p>
	</div>

	<?php endif; ?>

</div>