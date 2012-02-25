<?php class TabbedWidget extends WP_Widget
{
    function TabbedWidget(){
		$widget_ops = array('description' => 'Displays Tabbed Widget');
		$control_ops = array('width' => 400, 'height' => 300);
		parent::WP_Widget(false,$name='ET Tabbed Widget',$widget_ops,$control_ops);
    }

  /* Displays the Widget in the front-end */
    function widget($args, $instance){
		extract($args);
		
		$postsNumRecent = empty($instance['postsNumRecent']) ? '' : $instance['postsNumRecent'];
		$postsNumPopular = empty($instance['postsNumPopular']) ? '' : $instance['postsNumPopular'];
		$postsNumRandom = empty($instance['postsNumRandom']) ? '' : $instance['postsNumRandom'];

?>

<div id="tabbed-area">
			
	<ul class="clearfix" id="tab_controls">
		<li class="first active"><a href="#"><span><?php _e('Recent','TheSource') ?></span></a></li>
		<li class="second"><a href="#"><span><?php _e('Popular','TheSource') ?></span></a></li>
		<li class="last"><a href="#"><span><?php _e('Random','TheSource') ?></span></a></li>
	</ul>
	
	<div id="all_tabs" class="clearfix">
		<div class="widget popular">
			<ul>
				<?php query_posts("showposts=$postsNumRecent&caller_get_posts=1");
					if (have_posts()) : while (have_posts()) : the_post(); ?>
						<?php include(TEMPLATEPATH . '/includes/widgets/custom_post.php'); ?>
					<?php endwhile; 
					endif; wp_reset_query(); ?>
			</ul>
		</div> <!-- end .widget -->
		
		<div class="widget popular">
			<ul>
				<?php global $wpdb;
				$result = $wpdb->get_results("SELECT comment_count,ID,post_title FROM $wpdb->posts ORDER BY comment_count DESC LIMIT 0 , $postsNumPopular");
				foreach ($result as $post) {
					//setup_postdata($post);
					$postid = $post->ID;
					$title = $post->post_title;
					$commentcount = $post->comment_count;
					if ($commentcount != 0) { ?>
						<?php query_posts("p=$postid&caller_get_posts=1"); ?>
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<?php include(TEMPLATEPATH . '/includes/widgets/custom_post.php'); ?>
						<?php endwhile; endif; wp_reset_query(); ?>
					<?php };
				}; ?>
			</ul>
		</div> <!-- end .widget -->
		
		<div class="widget popular">
			<ul>
				<?php query_posts("showposts=$postsNumRandom&caller_get_posts=1&orderby=rand");
					if (have_posts()) : while (have_posts()) : the_post(); ?>
						<?php include(TEMPLATEPATH . '/includes/widgets/custom_post.php'); ?>
					<?php endwhile; 
					endif; wp_reset_query(); ?>
			</ul>
		</div> <!-- end .widget -->
	</div> <!-- end #all-tabs -->
		
</div> <!-- end #tabbed-area -->

	

<?php

	}

  /*Saves the settings. */
    function update($new_instance, $old_instance){
		$instance = $old_instance;
		
		$instance['postsNumRecent'] = stripslashes($new_instance['postsNumRecent']);
		$instance['postsNumPopular'] = stripslashes($new_instance['postsNumPopular']);
		$instance['postsNumRandom'] = stripslashes($new_instance['postsNumRandom']);
		
		return $instance;
	}

  /*Creates the form for the widget in the back-end. */
    function form($instance){
		//Defaults
		$instance = wp_parse_args( (array) $instance, array('postsNumRecent'=>'3','postsNumPopular'=>'3','postsNumRandom'=>'3') );

		$postsNumRecent = htmlspecialchars($instance['postsNumRecent']);
		$postsNumPopular = htmlspecialchars($instance['postsNumPopular']);
		$postsNumRandom = htmlspecialchars($instance['postsNumRandom']);
		
		# Number of Recent posts
		echo '<p><label for="' . $this->get_field_id('postsNumRecent') . '">' . 'Number of Recent posts:' . '</label><input class="widefat" id="' . $this->get_field_id('postsNumRecent') . '" name="' . $this->get_field_name('postsNumRecent') . '" type="text" value="' . $postsNumRecent . '" /></p>';
		
		# Number of Popular posts
		echo '<p><label for="' . $this->get_field_id('postsNumPopular') . '">' . 'Number of Popular posts:' . '</label><input class="widefat" id="' . $this->get_field_id('postsNumPopular') . '" name="' . $this->get_field_name('postsNumPopular') . '" type="text" value="' . $postsNumPopular . '" /></p>';
		
		# Number of Random posts
		echo '<p><label for="' . $this->get_field_id('postsNumRandom') . '">' . 'Number of Random posts:' . '</label><input class="widefat" id="' . $this->get_field_id('postsNumRandom') . '" name="' . $this->get_field_name('postsNumRandom') . '" type="text" value="' . $postsNumRandom . '" /></p>';
	}

}// end AboutMeWidget class

function TabbedWidgetInit() {
  register_widget('TabbedWidget');
}

add_action('widgets_init', 'TabbedWidgetInit');

?>