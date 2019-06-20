<div class="sidebar large-4 medium-6 small-12 cell" role="complementary">
 <div id="sidebar-news">
  <div style="padding:1rem;">
		<?php if ( is_active_sidebar( 'news_sidebar' ) ) : ?>

			<?php dynamic_sidebar( 'news_sidebar' ); ?>

		<?php else : ?>

		<!-- This content shows up if there are no widgets defined in the backend. -->
							
		<div class="alert help">
			<p><?php _e("Please activate the News Widget", "jointstheme");  ?></p>
		</div>

		<?php endif; ?>
  </div>
 </div>
</div>