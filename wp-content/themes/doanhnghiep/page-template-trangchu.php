
<?php 
/*
Template Name: page-template-trangchu
*/
get_header(); 
?>	

<div class="page-wrapper">
	<div class="g_content">
		<div class="slide_intro">
			<div class="container">
				<?php 
		$my_postid = 7;//This is page id or post id
		$content_post = get_post($my_postid);
		$content = $content_post->post_content;
		$content = apply_filters('the_content', $content);
		$content = str_replace(']]>', ']]&gt;', $content);
		echo $content;
		?>
	</div>
</div>			
<div class="product_area_index">
	<div class="container">
		<?php
						$taxonomy     = 'product_cat';
						$orderby      = 'name';  
						  $show_count   = 0;      // 1 for yes, 0 for no
						  $pad_counts   = 0;      // 1 for yes, 0 for no
						  $hierarchical = 0;      // 1 for yes, 0 for no  
						  $title        = '';  
						  $empty        = 0;
						  $args = array(
						  	'taxonomy'     => $taxonomy,
						  	'orderby'      => $orderby,
						  	'show_count'   => $show_count,
						  	'pad_counts'   => $pad_counts,
						  	'hierarchical' => $hierarchical,
						  	'title_li'     => $title,
						  	'hide_empty'   => $empty,
						  );
						  $all_categories = get_categories( $args );
						  ?>
						  <div class="loop_post_category_idx">
						  	<?php foreach ($all_categories as $cat) { ?>
						  		<?php   	
						  		if($cat->category_parent == 0) {
						  			$category_id = $cat->term_id;       
						  			?>
						  			
						  			<div class="item_loop_post_category_idx">
						  				<div class="top_menu_list_product">
						  					<div class="parent_catgories_idx">

						  						<?php $thumbnail_id = get_woocommerce_term_meta( $category_id, 'thumbnail_id', true );
						  							$image = wp_get_attachment_url( $thumbnail_id );
						  						 ?>
						  								<figure class="thumbnail" style="background:url(<?php echo $image; ?>);" class="thumb_cat" >
						  									<a href="<?php echo get_category_link($category_id) ?>"><img src="<?php echo $image; ?>"></a>
						  								</figure>
						  						<?php echo '<a href="'. get_term_link($cat->slug, 'product_cat') .'">'. $cat->name .'</a>';?>
						  						<!-- $cat->count -->
						  					</div>
						  					<?php
						  					$args2 = array(
						  						'taxonomy'     => $taxonomy,
						  						'child_of'     => 0,
						  						'parent'       => $category_id,
						  						'orderby'      => $orderby,
						  						'show_count'   => $show_count,
						  						'pad_counts'   => $pad_counts,
						  						'hierarchical' => $hierarchical,
						  						'title_li'     => $title,
						  						'hide_empty'   => $empty
						  					);
						  					$sub_cats = get_categories( $args2 );
						  					if($sub_cats) {
						  						?>
						  						<ul class="sub_product_category">
						  							<?php
						  							foreach($sub_cats as $sub_category) {
						  								echo  '<li><a href="'.get_term_link($sub_category->slug, 'product_cat')  .'">'.$sub_category->name.' </a></li>' ;
						  							}?>
						  						</ul>
						  						<?php   
						  					}
						  					?>
						  				</div>
						  				
						 
						  			</div>
						  			<?php 
						  		} //endif
						  	}//end foreach ?>
						  </div>


						</div>

					</div>

<div class="partners">
	<div class="container">
		<?php
/**
 * Setup query to show the ‘services’ post type with all posts filtered by ‘home’ category.
 * Output is linked title with featured image and excerpt.
 */
   
    $args = array(  
        'post_type' => 'partners',
        'post_status' => 'publish',
        'posts_per_page' => 1, 
        'orderby' => 'title', 
        'order' => 'ASC'
    );

    $loop = new WP_Query( $args ); 
        
    while ( $loop->have_posts() ) : $loop->the_post(); 
    	//echo the_title();
       	the_post_thumbnail('thumbnail');
    endwhile;
    wp_reset_postdata(); 
?>
	</div>
</div>

				</div>

			</div>


			<?php get_footer(); ?>




