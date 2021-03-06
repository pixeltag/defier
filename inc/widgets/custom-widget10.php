<?php
/*************************************/
/******* Higlighted Block ************/
/*************************************/
global $defTheme;
class defier_Higlighted_block extends Wp_Widget {
	function __construct () {
    parent::__construct(false ,$name = do_shortcode('Defier Block | Highlight', 'defier'));
	} 	//end function construct
	public function form( $instance ) {
		$num_post = ! empty( $instance['num_post'] ) ? $instance['num_post'] : __( 'Number Of Posts', 'defier' );
		$defier_Higlighted_block_catogry_value = ! empty( $instance['defier_Higlighted_block_catogry'] ) ? $instance['defier_Higlighted_block_catogry'] : 1;
		?>
		<p>
		<label for="<?php echo do_shortcode($this->get_field_id( 'num_post' )); ?>"><?php echo do_shortcode( 'Number Of Posts:', 'defier' ); ?></label>
		<input class="widefat" id="<?php echo esc_html($this->get_field_id( 'num_post' )); ?>" name="<?php echo esc_html($this->get_field_name( 'num_post' )); ?>" type="text" value="<?php echo esc_attr( $num_post ); ?>">
		</p>
		<p><?php _e( 'Select Category:', 'defier' ); ?><?php wp_dropdown_categories(array('name' => $this->get_field_name('defier_Higlighted_block_catogry'), 'selected' => $defier_Higlighted_block_catogry_value, 'id' => $this->get_field_id( 'defier_Higlighted_block_catogry'), 'class' => 'widefat')); ?> </p>
		<?php
	}
	// end function form
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['num_post'] = ( ! empty( $new_instance['num_post'] ) ) ? strip_tags( $new_instance['num_post'] ) : '';
    $instance['defier_Higlighted_block_catogry'] = ( ! empty( $new_instance['defier_Higlighted_block_catogry'] ) ) ? strip_tags( $new_instance['defier_Higlighted_block_catogry'] ) : '';
		return $instance;
	}
	// end function update
	function widget($arags ,$instance)
	{
		extract($arags);
	      $num_post = empty($instance['num_post']) ? '4' :
        $instance['num_post'];
	      $defier_Higlighted_block_catogry = empty($instance['defier_Higlighted_block_catogry']) ? '1' :
        $instance['defier_Higlighted_block_catogry'];
        // Query featured entries
			$query_arguments = array(
			    'cat' => (int)$defier_Higlighted_block_catogry,
			    'posts_per_page' => (int)$num_post,
			    'orderby' => 'post_date',
			    'order' => 'DESC',
			    'post_status' => 'publish',
			    'meta_query' => array(array('key' => '_thumbnail_id'))
			);
		// The Query
		$i = 0 ;
		$defier_Higlighted_block_query =  new WP_Query($query_arguments );
		if($defier_Higlighted_block_query->have_posts()) {
		?>
		<div class="defier-block-box"> <section class="highlights-full"><?php
    		while ($defier_Higlighted_block_query->have_posts()) {
       		            $defier_Higlighted_block_query->the_post();
                         if($i == 0 )
                         {
        $content  = wp_trim_words( get_the_content(), 13, '<a class="readMore" href="'. get_permalink() .'"><i class="fa-ellipsis" aria-hidden="true"></i>'. __( 'Read More', 'defier' ) .' </a>' );
		    if(function_exists('defier_cat_color')){
        		   ?>
          		    <span class="defier-cat-title"><h4 class="widget-title"><div class="lavecat" style="background:<?php $rl_category_color = defier_cat_color((int)$defier_Higlighted_block_catogry); ?>"></div></i>
           		    <?php echo   get_cat_name((int)$defier_Higlighted_block_catogry); ?></h4></span>
                          <?php } ?>
                        <?php global $defTheme;
			                  global $wp_query;
                        $post = $wp_query->post;
                        ?>
       <ul class="defier-posts-list">
					<li class="defier-first-post">
									<div class="grid">
					                     <figure class="effect-thumbDefier  slidertwoWarpper miHeight <?php if(!empty($defTheme['pointer'])): ?>pointer<?php endif; ?>">
					                         <img alt="<?php the_title(); ?>" src="<?php echo  the_post_thumbnail_url();?>"/>
					                             <figcaption>
					                                 <h2><a class="quarterSize" href="<?php  the_permalink() ?>" alt="<?php the_title() ?>"><?php the_title() ?></a> </h2>
					                                   <p><?php  echo do_shortcode($content);  ?></p>
					                                 <div class="meta-label">
					                                     <div class="pull-left">
					                                         <?php get_template_part( 'inc/post-formats/parts/meta', 'secondary' );  ?>
					                                     </div>
					                                         <div class="pull-right"><i class="fa-head"></i><?php the_author(); ?></div>
					                                         </div>
					                             </figcaption>
					                     </figure>
														 </div>
					            </li>
        <?php
        if($num_post== 1){echo '</ul>';}
              }
              // end if
						else {
							        ?>
							        <li class="grid">
											<figure class="def-list-post ">
													<figcaption>
													<h4><a alt="<?php the_title() ?>" href="<?php  the_permalink() ?>"><?php the_title() ?></a></h4>
												   <div class="meta-label">
													  <div class="time"><?php defier_get_time() ?></div>
				                    <div class="view-counter"><?php  echo defier_PostViews( '', get_the_ID() ); ?></div>
												   </div>
													</figcaption>
												<img title="" alt="<?php the_title(); ?>" class="wp-post-image" src="<?php echo  the_post_thumbnail_url();?>">
											</figure>
									</li>
			            <?php
			            if($i== $num_post-1){echo '</ul>';}
			              }
                    $i++;
                      }
                    // end while
                    ?></section></div><?php
                    }
                    // end if check have post
										}
    // end function widget
}
// end of class
add_action('widgets_init',function(){
register_widget('defier_Higlighted_block') ;
});
?>
