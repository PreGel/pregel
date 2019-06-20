<?php get_header(); ?>
 

	<div id="content">
		<div id="intro">
			<?php masterslider("pg-home"); ?>
		</div>
		<div id="product-bar">
			<div class="grid-x expanded">
				<div class="large-3 small-6 cell link gelato"><a href="https://products.pregelamerica.com/enpga/products/gelato-sorbetto.html"><h3>Gelato</h3></a></div>
				<div class="large-3 small-6 cell link pastry"><a href="https://products.pregelamerica.com/enpga/products/pastry-confections.html"><h3>Pastry</h3></a></div>
				<div class="large-3 small-6 cell link froyo"><a href="https://products.pregelamerica.com/enpga/products/soft-serve.html"><h3 id="soft-serve">Soft&nbsp;Serve</h3></a></div>
				<div class="large-3 small-6 cell link bev"><a href="https://products.pregelamerica.com/enpga/products/specialty-beverages.html"><h3>Beverages</h3></a></div>
			</div>
		</div>
		

		<!-- home widget grid -->



		<!-- IE does not support calc ?? - was using calc for full responsive homepage grid to offset title in overlay -->
		<!-- <style>
			@media all and (-ms-high-contrast: none), (-ms-high-contrast: active) {
             /* IE10+ CSS here */
		    .pg-text-overlay .widgettitle {
			  	/*transform: translateY(-140%) !important;*/
			  	transform: translateY(140%) !important;
			  	/*transform: translateY(calc(-100% - 10px)) !important;*/
				}
			.pg-caption:hover .pg-text-overlay {
				 transform: translateY(20%); 
				}
		    } 
		</style> -->

			<div class="grid-x expanded large-collapse">
			<div class="large-4 medium-12 cell">

				<div id="homeGridOne" class="homeGrid">

					<?php
					$args = array(
						'post_type' => 'article_type',
						'article_cat'=> 'Featured Home Grid One');

					$my_query = new WP_Query( $args );

					if( $my_query->have_posts() ) {
					    while ($my_query->have_posts()) : $my_query->the_post(); ?>
					  


					<div class="widget_sp_image">
						  <!-- test static headers -->
					<h4 class="widgettitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
					   <article class="pg-caption">
					   	<!-- custom thumbnail size 600px wide -->
					    		<?php the_post_thumbnail('home-feature') ?>

					    		<!-- note-flipping these around for top-down effect, reverse for bottom-up effect - put h4 title back here for bottom-up slide effect -->

						        
						        <h5 class="alt"><?php echo get_post_meta( get_the_ID(), '_pg_article_subtitle', true );?></h5>
						        <p><?php echo get_post_meta( get_the_ID(), '_pg_article_callout', true );?></p>
						        <p><a class="button" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">Read More</a></p>

						      


					    </article>
					</div>
					  

					        <?php endwhile;
					        wp_reset_query(); 
					}
					
					else {
						 get_sidebar('home_grid1');
					}
					?>


				</div> <!-- end homeGrid -->

			    </div> <!-- end column -->

			<div class="large-4 medium-12 cell">

				<div id="homeGridTwo" class="homeGrid">

				<?php
					$args = array(
						'post_type' => 'article_type',
						'article_cat'=> 'Featured Home Grid Two');

					$my_query = new WP_Query( $args );

					if( $my_query->have_posts() ) {
					    while ($my_query->have_posts()) : $my_query->the_post(); ?>
					<div class="widget_sp_image">
						 <h4 class="widgettitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
					   <article class="pg-caption">
					   	<!-- custom thumbnail size 600px wide -->
					    		<?php the_post_thumbnail('home-feature') ?>

					    		<div class="pg-text-overlay">
					    			<!-- note-flipping these around for top-down effect, reverse for bottom-up effect - put h4 title back here for bottom-up slide effect -->
						        
						        <h5 class="alt"><?php echo get_post_meta( get_the_ID(), '_pg_article_subtitle', true );?></h5>
						        <p><?php echo get_post_meta( get_the_ID(), '_pg_article_callout', true );?></p>
						        <p><a class="button" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">Read More</a></p>
						       
						        </div>


					    </article>
					</div>


					        <?php endwhile;
					        wp_reset_query(); 
					}
					
					else {
						 get_sidebar('home_grid2');
					}
					?>

				</div>  <!-- end homeGrid -->

			</div> <!-- end column -->
			<div class="large-4 medium-12 cell">

			<div id="homeGridThree" class="homeGrid">

				<?php
					$args = array(
						'post_type' => 'article_type',
						'article_cat'=> 'Featured Home Grid Three');

					$my_query = new WP_Query( $args );

					if( $my_query->have_posts() ) {
					    while ($my_query->have_posts()) : $my_query->the_post(); ?>
					 <div class="widget_sp_image">
					 	 <h4 class="widgettitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
					   <article class="pg-caption">
					   	<!-- custom thumbnail size 600px wide -->
					    		<?php the_post_thumbnail('home-feature') ?>

					    		<div class="pg-text-overlay">
					    			<!-- note-flipping these around for top-down effect, reverse for bottom-up effect - put h4 title back here for bottom-up slide effect -->
						        
						        <h5 class="alt"><?php echo get_post_meta( get_the_ID(), '_pg_article_subtitle', true );?></h5>
						        <p><?php echo get_post_meta( get_the_ID(), '_pg_article_callout', true );?></p>
						        <p><a class="button" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">Read More</a></p>
						       
						        </div>


					    </article>
					</div>

					        <?php endwhile;
					        wp_reset_query(); 
					}
					
					else {
						 get_sidebar('home_grid3');
					}
					?>

				</div>  <!-- end homeGrid -->

			</div> <!-- end column -->
		<!-- </div> --> <!-- end row -->

		<!-- <div class="row expanded large-collapse"> -->

			<div class="large-4 medium-12 cell">

				<div id="homeGridFour" class="homeGrid">
				<?php
					$args = array(
						'post_type' => 'article_type',
						'article_cat'=> 'Featured Home Grid Four');

					$my_query = new WP_Query( $args );

					if( $my_query->have_posts() ) {
					    while ($my_query->have_posts()) : $my_query->the_post(); ?>
					 <div class="widget_sp_image">
					 	<!-- testing static headers	 -->				 	 
					   <h4 class="widgettitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
					   <article class="pg-caption">
					   	<!-- custom thumbnail size 600px wide -->
					    		<?php the_post_thumbnail('home-feature') ?>

					    		<div class="pg-text-overlay">
					    				<!-- note-flipping these around for top-down effect, reverse for bottom-up effect - put h4 title back here for bottom-up slide effect -->
						        
						        <h5><?php echo get_post_meta( get_the_ID(), '_pg_article_subtitle', true );?></h5>
						        <p><?php echo get_post_meta( get_the_ID(), '_pg_article_callout', true );?></p>
						        <p><a class="button" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">Read More</a></p>
						       
						        </div>


					    </article>
					</div>

					        <?php endwhile;
					        wp_reset_query(); 
					}
					
					else {
						 get_sidebar('home_grid4');
					}
					?>
			     </div>   <!-- end homeGrid -->
			</div>  <!-- end column -->

			<div class="large-4 medium-12 cell">

				<div id="homeGridFive" class="homeGrid">


				<?php
					$args = array(
						'post_type' => 'article_type',
						'article_cat'=> 'Featured Home Grid Five');

					$my_query = new WP_Query( $args );

					if( $my_query->have_posts() ) {
					    while ($my_query->have_posts()) : $my_query->the_post(); ?>
					  <div class="widget_sp_image">
					  	 <h4 class="widgettitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
					   <article class="pg-caption">
					   	<!-- custom thumbnail size 600px wide -->
					    		<?php the_post_thumbnail('home-feature') ?>

					    		<div class="pg-text-overlay">
					    			<!-- note-flipping these around for top-down effect, reverse for bottom-up effect - put h4 title back here for bottom-up slide effect -->
						       
						        <h5 class="alt"><?php echo get_post_meta( get_the_ID(), '_pg_article_subtitle', true );?></h5>
						        <p><?php echo get_post_meta( get_the_ID(), '_pg_article_callout', true );?></p>
						        <p><a class="button" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">Read More</a></p>
						        
						        </div>


					    </article>
					</div>

					        <?php endwhile;
					        wp_reset_query(); 
					}
					
					else {
						 get_sidebar('home_grid5');
					}
					?>
					</div>  <!-- end homeGrid -->

			</div>  <!-- end column -->

			<div class="large-4 medium-12 cell">

				<div id="homeGridSix" class="homeGrid">

				<?php
					$args = array(
						'post_type' => 'article_type',
						'article_cat'=> 'Featured Home Grid Six');

					$my_query = new WP_Query( $args );

					if( $my_query->have_posts() ) {
					    while ($my_query->have_posts()) : $my_query->the_post(); ?>
					  <div class="widget_sp_image">
					  	 <h4 class="widgettitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
					   <article class="pg-caption">
					   	<!-- custom thumbnail size 600px wide -->
					    		<?php the_post_thumbnail('home-feature') ?>

					    		<div class="pg-text-overlay">
					    				<!-- note-flipping these around for top-down effect, reverse for bottom-up effect - put h4 title back here for bottom-up slide effect -->
						       
						        <h5 class="alt"><?php echo get_post_meta( get_the_ID(), '_pg_article_subtitle', true );?></h5>
						        <p><?php echo get_post_meta( get_the_ID(), '_pg_article_callout', true );?></p>
						        <p><a class="button" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">Read More</a></p>
						        
						        </div>


					    </article>
					   </div>

					        <?php endwhile;
					        wp_reset_query(); 
					}
					
					else {
						 get_sidebar('home_grid6');
					}
					?>
					</div>  <!-- end homeGrid -->

			</div> <!-- end column -->


		</div> <!-- end row -->
		<!-- end home widget grid -->
		<?php 

						$image = get_field('bottom_banner');
						$link = get_field('bottom_banner_link');

						if( !empty($image) ): ?>
						<div id="home-bottom-banner" class="alt-background-light-blue">
							<div class="row">
								<div class="small-12 cell ">
									 <a href="<?php echo $link ?>"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></a>
								</div>
							</div>
						</div>

		<?php endif; ?>
	  <!-- <div id="gelato-shop" class="row expanded large-collapse">
	  	<div id="gelato-shop-img" class="large-6 cell"></div>
	  	<div id="gelato-shop-text" class="large-6 cell">
	  		
	  	</div>
	  </div> -->
	</div> <!-- end #content -->

<?php get_footer(); ?>