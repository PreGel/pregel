<div class="sidebar large-4 medium-5 small-12 columns" role="complementary">
 <div id="sidebar-news" class="large-12 medium-12 small-12 columns">
	<?php if ( is_active_sidebar( 'event_sidebar' ) ) : ?>

	       <?php //wp_list_categories('taxonomy=event_cat'); ?>

		<?php dynamic_sidebar( 'event_sidebar' ); ?>

		<!-- <?php $categories = get_categories( 'taxonomy=event_cat' ); 
		 $select = "<select name='cat' id='cat' class='postform'>n";
		  $select.= "<option value='-1'>Select category</option>n";
		  
		  foreach($categories as $category){
		    if($category->count > 0){
		        $select.= "<option value='".$category->slug."'>".$category->name."</option>";
		    }
		  }
		  
		  $select.= "</select>";
		  
		  echo $select;?>

		  <script type="text/javascript"><!--
		    var dropdown = document.getElementById("cat");
		    function onCatChange() {
		        if ( dropdown.options[dropdown.selectedIndex].value != -1 ) {
		            location.href = "<?php echo home_url();?>/category/"+dropdown.options[dropdown.selectedIndex].value+"/";
		        }
		    }
		    dropdown.onchange = onCatChange;
		  </script>  --> 
	
	<?php else : ?> 

	<!-- This content shows up if there are no widgets defined in the backend. -->
						
	<div class="alert help">
		<p><?php _e("Please activate the News Widget", "jointstheme");  ?></p>
	</div>

	<?php endif; ?>
 </div>
</div>