<?php
/*************************************/
/********** Recent Widget ************/
/*************************************/
add_action('widgets_init','Defier_LatestPosts_Widget');

function Defier_LatestPosts_Widget() {
	register_widget('Defier_LatestPosts_Widget');
	
	}
class Defier_LatestPosts_Widget extends WP_Widget
{
	public function __construct()
	{
		parent::__construct(
			'defier-latest-posts-widget',
			'Defier widget - Recent Posts',
			array('description' => 'Recent posts with thumbnail.', 'classname' => 'latest-posts')
		);

		add_action('save_post', array($this, 'flush_widget_cache'));
		add_action('edit_post', array($this, 'flush_widget_cache')); // comments covered
		add_action('deleted_post', array($this, 'flush_widget_cache'));
		add_action('switch_theme', array($this, 'flush_widget_cache'));
		add_action('defier_widget_flush_cache', array($this, 'flush_widget_cache'));
	}

	// code below is modified from default
	public function widget($args, $instance)
	{
		$cache = get_transient('defier_widget_latest_posts');

		if (!is_array($cache)) {
			$cache = array();
		}

		if (!isset($args['widget_id'])) {
			$args['widget_id'] = $this->id;
		}

		// cache available
		if (!defined('ICL_LANGUAGE_CODE') && isset($cache[ $args['widget_id'] ])) {
			echo $cache[ $args['widget_id'] ];
			return;
		}

		ob_start();
		extract($args);

		$title = apply_filters('widget_title', empty($instance['title']) ? __('Recent Posts', 'defier-widgets') : $instance['title'], $instance, $this->id_base);
		if (empty($instance['number']) || !$number = absint($instance['number'])) {
 			$number = 5;
		}

		// start of args
		$query_args = array(
			'posts_per_page' => $number, 'post_status' => 'publish', 'ignore_sticky_posts' => 1
		);

		// limit by category
		if (!empty($instance['category'])) {
			$query_args['cat'] = $instance['category'];
		}

		$r = new WP_Query(apply_filters('defier_widget_latest_posts_query_args', $query_args));

		// do custom loop if available
		if (has_action('defier_widget_latest_posts_loop')):

			$args['title'] = $title;
			do_action('defier_widget_latest_posts_loop', array_merge($args, $instance), $r);

		elseif ($r->have_posts()):
?>

			<?php echo $args['before_widget']; ?>
				<?php if ($title): ?>
					<?php echo "<span class='defier-cat-title'><h4 class='widget-title'><div class='lavecat'></div>" . $title ." </h4></span>"; ?>
				<?php endif;?>
			<ul class="defier-posts-list firstBigItem">
			<?php global $defTheme; 
			                      global $wp_query;
                        $post = $wp_query->post;
			?>
			<?php  while ($r->have_posts()) : $r->the_post(); global $post; ?>
					<li class="grid">
						<figure class="def-list-post">
							<figcaption>
								<h5><a title="" href="<?php  the_permalink() ?>"><?php the_title() ?></a></h5>
                                    <div class="meta-label">
								                      <div class="time"><?php defier_get_time() ?></div>
                                                        <div class="view-counter"><?php  echo defier_PostViews( '', get_the_ID() ); ?></div>

                                    </div>
							</figcaption>
							<img title="" alt="<?php the_title(); ?>" class="wp-post-image" src="<?php echo  wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>">
						</figure>
					</li>
				<?php endwhile; ?>
			</ul>
			<?php echo $args['after_widget']; ?>
<?php
		endif;

		// reset the global $the_post as this query will have stomped on it
		wp_reset_postdata();

		$cache[$args['widget_id']] = ob_get_flush();

		set_transient('defier_widget_latest_posts', $cache);
	}

	public function update($new, $old)
	{
		foreach ($new as $key => $val) {
			$new[$key] = wp_filter_kses($val);
		}

		$this->flush_widget_cache();

		return $new;
	}

	public function flush_widget_cache()
	{
		delete_transient('defier_widget_latest_posts');
	}

	public function form($instance)
	{
		$instance = array_merge(array('title' => '', 'number' => 5, 'category' => ''), $instance);
		extract($instance);

		$fields = apply_filters('defier_widget_latest_posts_form', array('title' => '', 'category' => '', 'number' => ''));
?>

	<?php if (isset($fields['title'])): ?>
		<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', 'defier-widgets'); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" /></p>
	<?php endif; ?>

	<?php if (isset($fields['category'])): ?>
		<p><label for="<?php echo $this->get_field_id('category'); ?>"><?php _e('Limit to Category:', 'defier-widgets'); ?></label>
		<?php wp_dropdown_categories(array(
				'show_option_all' => __('-- Not Limited --', 'defier-widgets'),
				'hierarchical' => 1,
				'order_by' => 'name',
				'class' => 'widefat',
				'name' => $this->get_field_name('category'),
				'selected' => $category
		)); ?>
		</p>
	<?php endif; ?>

	<?php if (isset($fields['type'])): ?>

		<p><label for="<?php echo $this->get_field_id('type'); ?>"><?php _e('Type:', 'defier-widgets'); ?></label>

		<select id="<?php echo $this->get_field_id('type'); ?>" name="<?php echo $this->get_field_name('type'); ?>" class="widefat">
			<option value="list" <?php selected($type, 'list'); ?>><?php _e('List', 'defier-widgets'); ?></option>
			<option value="blocks" <?php selected($type, 'blocks'); ?>><?php _e('Image Blocks', 'defier-widgets'); ?></option>
		</select>

		</p>

	<?php endif; ?>


	<?php if (isset($fields['number'])): ?>
		<p><label for="<?php echo $this->get_field_id('number'); ?>"><?php _e('Number of posts to show:', 'defier-widgets'); ?></label>
		<input id="<?php echo $this->get_field_id('number'); ?>" name="<?php echo $this->get_field_name('number'); ?>" type="text" value="<?php echo $number; ?>" size="3" /></p>
	<?php endif; ?>

<?php
	}
}


?>