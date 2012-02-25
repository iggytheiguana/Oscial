<?php

// Register widgetized areas
if ( function_exists('register_sidebar') ) {
	register_sidebars(1,array('name' => 'Header Navigation','before_widget' => '<div class="widget">','after_widget' => '</div>','before_title' => '<h3><span>','after_title' => '</span></h3>'));
     register_sidebars(1,array('name' => 'Header top right advt','before_widget' => '<div class="widget">','after_widget' => '</div>','before_title' => '<h3><span>','after_title' => '</span></h3>'));
	 register_sidebars(1,array('name' => 'Front content','before_widget' => '<div class="widget">','after_widget' => '</div>','before_title' => '<h3><span>','after_title' => '</span></h3>'));
	 register_sidebars(1,array('name' => 'Front content sub sidebar left','before_widget' => '<div class="widget">','after_widget' => '</div>','before_title' => '<h3><span>','after_title' => '</span></h3>'));
	 register_sidebars(1,array('name' => 'Front content sub sidebar right','before_widget' => '<div class="widget">','after_widget' => '</div>','before_title' => '<h3><span>','after_title' => '</span></h3>'));
	 register_sidebars(1,array('name' => 'Sidebar Left','before_widget' => '<div class="widget">','after_widget' => '</div>','before_title' => '<h3><span>','after_title' => '</span></h3>'));
	 register_sidebars(1,array('name' => 'Sidebar right','before_widget' => '<div class="widget">','after_widget' => '</div>','before_title' => '<h3><span>','after_title' => '</span></h3>'));
	 register_sidebars(4,array('name' => 'Footer content %d ','before_widget' => '<div class="widget">','after_widget' => '</div>','before_title' => '<h3><span>','after_title' => '</span></h3>'));
}
	
// Check for widgets in widget-ready areas http://wordpress.org/support/topic/190184?replies=7#post-808787
// Thanks to Chaos Kaizer http://blog.kaizeku.com/
function is_sidebar_active( $index = 1){
	$sidebars	= wp_get_sidebars_widgets();
	$key		= (string) 'sidebar-'.$index;
 
	return (isset($sidebars[$key]));
}



// =============================== Sidebar Widget ======================================

class categorywidget extends WP_Widget {
	function categorywidget() {
	//Constructor
		$widget_ops = array('classname' => 'widget Category Verticle Menu - Left sidebar', 'description' => 'Category Verticle dorpdown menu (Left Sidebar)' );		
		$this->WP_Widget('widget_categorywidget', 'PT &rarr; Category Verticle Menu ', $widget_ops);
	}
	function widget($args, $instance) {
	// prints the widget
		extract($args, EXTR_SKIP);
		$title = empty($instance['title']) ? '' : apply_filters('widget_title', $instance['title']);
		?>						

		<h3><span>Category</span></h3>
		<ul id="slidemenu" class="slidemenu">
        	<?php wp_list_categories('orderby=name&title_li'); ?>
        </ul>
            
            
	<?php
	}
	function update($new_instance, $old_instance) {
	//save the widget
		$instance = $old_instance;		
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['advt1'] = ($new_instance['advt1']);
 		return $instance;
	}
	function form($instance) {
	//widgetform in backend
		$instance = wp_parse_args( (array) $instance, array( 'title' => '', 'advt1' => '' ) );		
		$title = strip_tags($instance['title']);
		$advt1 = ($instance['advt1']);
 ?>
      
 <?php /*?> <p><label for="<?php echo $this->get_field_id('advt1'); ?>">Description <textarea class="widefat" rows="6" cols="20" id="<?php echo $this->get_field_id('advt1'); ?>" name="<?php echo $this->get_field_name('advt1'); ?>"><?php echo attribute_escape($advt1); ?></textarea></label></p><?php */?>
<?php
	}}
register_widget('categorywidget');



	
// =============================== Feedburner Subscribe widget ======================================
class subscribeWidget extends WP_Widget {
	function subscribeWidget() {
	//Constructor
		$widget_ops = array('classname' => 'widget Subscribe', 'description' => 'Subscribe' );		
		$this->WP_Widget('widget_subscribeWidget', 'PT &rarr; Subscribe', $widget_ops);
	}
	function widget($args, $instance) {
	// prints the widget
		extract($args, EXTR_SKIP);
		$id = empty($instance['id']) ? '' : apply_filters('widget_id', $instance['id']);
		$title = empty($instance['title']) ? '' : apply_filters('widget_title', $instance['title']);
		$text = empty($instance['text']) ? '' : apply_filters('widget_text', $instance['text']);
	
?>
	
     

	 
    	<div class="subscribe" >
         <h3><?php echo $title; ?></h3>
         
         <p class="rss"><a href="<?php bloginfo('rdf_url'); ?>">Rss Feed </a> <a href="http://feedburner.google.com/fb/a/mailverify?uri=<?php echo stripslashes(get_option('ptthemes_feedburner_id'));  ?>" target="_blank"   >Email</a></p>
        
		 
		<form class="subscribe_form"  action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow"  onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=<?php echo $id; ?>', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">    
     <input type="text" class="field" onfocus="if (this.value == 'Your Email Address') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Your Email Address';}" name="email"/>
     <input type="hidden" value="<?php echo $id; ?>" name="uri"/><input type="hidden" name="loc" value="en_US"/>
     <button class="btn_submit" type="submit" name="submit"></button>
     </form>
		  </div>	 
      

<?php
	}
	function update($new_instance, $old_instance) {
	//save the widget
		$instance = $old_instance;		
		$instance['id'] = strip_tags($new_instance['id']);
		$instance['title'] = ($new_instance['title']);
		
		return $instance;
	}
	function form($instance) {
	//widgetform in backend
		$instance = wp_parse_args( (array) $instance, array( 'title' => '', 'advt1' => '' ) );		
		$id = strip_tags($instance['id']);
		$title = strip_tags($instance['title']);

 ?>
      
  <p><label for="<?php echo $this->get_field_id('title'); ?>">Title 
  <input type="text" class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo attribute_escape($title); ?>"></label></p>
  <p><label for="<?php echo $this->get_field_id('id'); ?>">Feedburner ID: (example:- templatic/eKPs) 
  <input type="text" class="widefat" id="<?php echo $this->get_field_id('id'); ?>" name="<?php echo $this->get_field_name('id'); ?>" value="<?php echo attribute_escape($id); ?>"></label></p>
<?php
	}}
register_widget('subscribeWidget');



// =============================== social meida widget ======================================
class socialmedia extends WP_Widget {
	function socialmedia() {
	//Constructor
		$widget_ops = array('classname' => 'widget social media', 'description' => 'social media' );		
		$this->WP_Widget('widget_socialmedia', 'PT &rarr; Social Media', $widget_ops);
	}
	function widget($args, $instance) {
	// prints the widget
		extract($args, EXTR_SKIP);
		$title = empty($instance['title']) ? '' : apply_filters('widget_title', $instance['title']);
		$twitter = empty($instance['twitter']) ? '' : apply_filters('widget_twitter', $instance['twitter']);
		$facebook = empty($instance['facebook']) ? '' : apply_filters('widget_facebook', $instance['facebook']);
		$diggit = empty($instance['diggit']) ? '' : apply_filters('widget_diggit', $instance['diggit']);
		$myspace = empty($instance['myspace']) ? '' : apply_filters('widget_myspace', $instance['myspace']);
?> 
    	
         <h3><span><?php echo $title; ?></span></h3>
          		
                 
                <ul class="social_bookmark">
                	 <?php if ( $twitter <> "" ) { ?>	 
         		 		<li class="i_twitter"><a href="<?php echo $twitter; ?>" >Twitter </a></li>
         			<?php } ?>
                    
                    <?php if ( $facebook <> "" ) { ?>	 
         		 		<li class="i_facebook"><a href="<?php echo $facebook; ?>" >Facebook </a></li>
         			<?php } ?>
                    
                    <?php if ( $diggit <> "" ) { ?>	 
         		 		<li class="i_digg"><a href="<?php echo $twitter; ?>" >DiggIt </a></li>
         			<?php } ?>
                    
                    <?php if ( $myspace <> "" ) { ?>	 
         		 		<li class="i_myspace"><a href="<?php echo $myspace; ?>" >MySpce </a></li>
         			<?php } ?>
                </ul>
		 
         

<?php
	}
	function update($new_instance, $old_instance) {
	//save the widget
		$instance = $old_instance;		
		$instance['twitter'] = ($new_instance['twitter']);
		$instance['facebook'] = ($new_instance['facebook']);
		$instance['diggit'] = ($new_instance['diggit']);
		$instance['myspace'] = ($new_instance['myspace']);
		$instance['title'] = ($new_instance['title']);
		
		
		return $instance;
	}
	function form($instance) {
	//widgetform in backend
		$instance = wp_parse_args( (array) $instance, array( 'title' => '', 'twitter' => '', 'facebook' => '','diggit' => '','myspace' => '') );
		$twitter = ($instance['twitter']);
		$facebook = ($instance['facebook']);
		$myspace = ($instance['myspace']);
		$diggit = ($instance['diggit']);
		$title = strip_tags($instance['title']);
  ?>
      
  <p><label for="<?php echo $this->get_field_id('title'); ?>">Title 
  <input type="text" class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo attribute_escape($title); ?>"></label></p>
  <p><label for="<?php echo $this->get_field_id('twitter'); ?>">Twitter full url (ex.http://twitter.com/templatic)
  <input type="text" class="widefat" id="<?php echo $this->get_field_id('twitter'); ?>" name="<?php echo $this->get_field_name('twitter'); ?>" value="<?php echo attribute_escape($twitter); ?>"></label></p>
   <p><label for="<?php echo $this->get_field_id('facebook'); ?>">Facebook full url 
  <input type="text" class="widefat" id="<?php echo $this->get_field_id('facebook'); ?>" name="<?php echo $this->get_field_name('facebook'); ?>" value="<?php echo attribute_escape($facebook); ?>"></label></p>
  <p><label for="<?php echo $this->get_field_id('diggit'); ?>">DiggIt full url 
  <input type="text" class="widefat" id="<?php echo $this->get_field_id('diggit'); ?>" name="<?php echo $this->get_field_name('diggit'); ?>" value="<?php echo attribute_escape($diggit); ?>"></label></p>
  <p><label for="<?php echo $this->get_field_id('myspace'); ?>">DiggIt full url 
  <input type="text" class="widefat" id="<?php echo $this->get_field_id('myspace'); ?>" name="<?php echo $this->get_field_name('myspace'); ?>" value="<?php echo attribute_escape($myspace); ?>"></label></p>
 
<?php
	}}
register_widget('socialmedia');
	
	

// =============================== Sidebar Advt second  ======================================
class advtwidget extends WP_Widget {
	function advtwidget() {
	//Constructor
		$widget_ops = array('classname' => 'widget Advertise', 'description' => 'common advertise widget in header top right, sidebar left, sidebar right, bottom section' );		
		$this->WP_Widget('advtwidget', 'PT &rarr; Advertise', $widget_ops);
	}
	function widget($args, $instance) {
	// prints the widget
		extract($args, EXTR_SKIP);
		$title = empty($instance['title']) ? '&nbsp;' : apply_filters('widget_title', $instance['title']);
		$desc1 = empty($instance['desc1']) ? '&nbsp;' : apply_filters('widget_desc1', $instance['desc1']);
		 ?>						


		 
  		<?php /*?><h3><?php echo $title; ?> </h3><?php */?>
          
        <div class="advt_single">    
        <?php if ( $desc1 <> "" ) { ?>	
         <?php echo $desc1; ?> 
         <?php } ?>
        </div>
         
	 
             
	<?php
	}
	function update($new_instance, $old_instance) {
	//save the widget
		$instance = $old_instance;		
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['desc1'] = ($new_instance['desc1']);
		return $instance;
	}
	function form($instance) {
	//widgetform in backend
		$instance = wp_parse_args( (array) $instance, array( 'title' => '', 't1' => '', 't2' => '', 't3' => '',  'img1' => '', 'desc1' => '' ) );		
		$title = strip_tags($instance['title']);
		$desc1 = ($instance['desc1']);
?>
		<p><label for="<?php echo $this->get_field_id('title'); ?>">Widget Title: <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo attribute_escape($title); ?>" /></label></p>
     
        <p><label for="<?php echo $this->get_field_id('desc1'); ?>">your advt code (ex.google adsense etc.) <textarea class="widefat" rows="6" cols="20" id="<?php echo $this->get_field_id('desc1'); ?>" name="<?php echo $this->get_field_name('desc1'); ?>"><?php echo attribute_escape($desc1); ?></textarea></label></p>
       
<?php
	}}
register_widget('advtwidget');

 
// =============================== Latest Posts Widget (particular category) ======================================

class LatestPosts extends WP_Widget {
	function LatestPosts() {
	//Constructor
		$widget_ops = array('classname' => 'widget latest posts', 'description' => 'List of latest posts in particular category' );
		$this->WP_Widget('widget_posts1', 'PT &rarr; Latest Slider Posts', $widget_ops);
	}

	function widget($args, $instance) {
	// prints the widget

		extract($args, EXTR_SKIP);
		echo $before_widget;
		$title = empty($instance['title']) ? '&nbsp;' : apply_filters('widget_title', $instance['title']);
 		$category = empty($instance['category']) ? '&nbsp;' : apply_filters('widget_category', $instance['category']);
		$post_number = empty($instance['post_number']) ? '&nbsp;' : apply_filters('widget_post_number', $instance['post_number']);
		$post_link = empty($instance['post_link']) ? '&nbsp;' : apply_filters('widget_post_link', $instance['post_link']);

		// if ( !empty( $title ) ) { echo $before_title . $title . $after_title; };
		echo '<div class="featured_news">';
		 ?>
                
                <h3> <span><?php echo $title; ?></span> </h3>
                
               <div class="anythingSlider">
 				 <div class="wrapper">
                 
                 	 <ul> 
				<?php 
			        global $post;
			        $latest_menus = get_posts('numberposts='.$post_number.'postlink='.$post_link.'&category='.$category.'');
                    foreach($latest_menus as $post) :
                    setup_postdata($post);
			    ?>
                 <?php $post_images = bdw_get_images($post->ID,'large');?>
           
           			 
          		
   				 
            
             			  <li>
                    <h4><a class="widget-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    
                    <?php if($post_images[0]){ global $thumb_url; ?>
                    <a class="widget-title" href="<?php the_permalink(); ?>">   <img src="<?php echo bloginfo('template_url'); ?>/thumb.php?src=<?php echo $post_images[0];?>&amp;w=460&amp;h=400&amp;zc=1&amp;q=80<?php echo $thumb_url;?>" alt="" title=""  /> </a>  
            <?php }?>   
                      
                 <p class="date"><?php the_time('j F') ?>, at <?php the_time('H : s A') ?>  ~  <a href="<?php the_permalink(); ?>#commentarea"><?php comments_number('0 Comment', '1 Comments', '% Comments'); ?> </a>  </p>
					</li>
     
   
<?php endforeach; ?>
<?php

	    echo '</ul></div></div></div>';

		echo $after_widget;
	}

	function update($new_instance, $old_instance) {
	//save the widget
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['category'] = strip_tags($new_instance['category']);
		$instance['post_number'] = strip_tags($new_instance['post_number']);
		$instance['post_link'] = strip_tags($new_instance['post_link']);
		return $instance;

	}

	function form($instance) {
	//widgetform in backend
		$instance = wp_parse_args( (array) $instance, array( 'title' => '', 'category' => '', 'post_number' => '' ) );
		$title = strip_tags($instance['title']);
		$category = strip_tags($instance['category']);
		$post_number = strip_tags($instance['post_number']);
		$post_link = strip_tags($instance['post_link']);

?>
<p>
  <label for="<?php echo $this->get_field_id('title'); ?>">Title:
    <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo attribute_escape($title); ?>" />
  </label>
</p>
<p>
  <label for="<?php echo $this->get_field_id('category'); ?>">Categories (<code>IDs</code> separated by commas):
  <input class="widefat" id="<?php echo $this->get_field_id('category'); ?>" name="<?php echo $this->get_field_name('category'); ?>" type="text" value="<?php echo attribute_escape($category); ?>" />
  </label>
</p>
<p>
  <label for="<?php echo $this->get_field_id('post_number'); ?>">Number of posts:
  <input class="widefat" id="<?php echo $this->get_field_id('post_number'); ?>" name="<?php echo $this->get_field_name('post_number'); ?>" type="text" value="<?php echo attribute_escape($post_number); ?>" />
  </label>
</p>
<?php
	}

}

register_widget('LatestPosts');



// =============================== Latest news posts Widget (particular category) ======================================

class news2columns extends WP_Widget {
	function news2columns() {
	//Constructor
		$widget_ops = array('classname' => 'widget Latest News', 'description' => 'List of latest posts in particular category' );
		$this->WP_Widget('news2columns', 'PT &rarr; Latest News', $widget_ops);
	}

	function widget($args, $instance) {
	// prints the widget

		extract($args, EXTR_SKIP);
		echo $before_widget;
		$title = empty($instance['title']) ? '&nbsp;' : apply_filters('widget_title', $instance['title']);
 		$category = empty($instance['category']) ? '&nbsp;' : apply_filters('widget_category', $instance['category']);
		$post_number = empty($instance['post_number']) ? '&nbsp;' : apply_filters('widget_post_number', $instance['post_number']);
		$post_link = empty($instance['post_link']) ? '&nbsp;' : apply_filters('widget_post_link', $instance['post_link']);

		// if ( !empty( $title ) ) { echo $before_title . $title . $after_title; };
		echo '';
		 ?>
          <h3> <span><?php echo $title; ?></span> </h3>
          <ul class="news_list">
                
				<?php 
			        global $post;
			        $latest_menus = get_posts('numberposts='.$post_number.'postlink='.$post_link.'&category='.$category.'');
                    foreach($latest_menus as $post) :
                    setup_postdata($post);
			    ?>
                 <?php $post_images = bdw_get_images($post->ID,'large');?>
           
           		<li class="clearfix"> 
            	<?php if($post_images[0]){ global $thumb_url;?>
                   <a class="widget-title" href="<?php the_permalink(); ?>"><img src="<?php echo bloginfo('template_url'); ?>/thumb.php?src=<?php echo $post_images[0];?>&amp;w=105&amp;h=65&amp;zc=1&amp;q=80<?php echo $thumb_url;?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>"  /> </a>  
            <?php }?>
            		
                    <h4> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4> 
                   <p class="comment_l"><a href="<?php the_permalink(); ?>#commentarea"><?php comments_number('0 Comment', '1 Comments', '% Comments'); ?> </a> </p>
            	 </li>
    
<?php endforeach; ?>
<?php

	    echo '</ul>';

		echo $after_widget;
	}

	function update($new_instance, $old_instance) {
	//save the widget
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['category'] = strip_tags($new_instance['category']);
		$instance['post_number'] = strip_tags($new_instance['post_number']);
		$instance['post_link'] = strip_tags($new_instance['post_link']);
		return $instance;

	}

	function form($instance) {
	//widgetform in backend
		$instance = wp_parse_args( (array) $instance, array( 'title' => '', 'category' => '', 'post_number' => '' ) );
		$title = strip_tags($instance['title']);
		$category = strip_tags($instance['category']);
		$post_number = strip_tags($instance['post_number']);
		$post_link = strip_tags($instance['post_link']);

?>
<p>
  <label for="<?php echo $this->get_field_id('title'); ?>">Title:
    <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo attribute_escape($title); ?>" />
  </label>
</p>
<p>
  <label for="<?php echo $this->get_field_id('category'); ?>">Categories (<code>IDs</code> separated by commas):
  <input class="widefat" id="<?php echo $this->get_field_id('category'); ?>" name="<?php echo $this->get_field_name('category'); ?>" type="text" value="<?php echo attribute_escape($category); ?>" />
  </label>
</p>
<p>
  <label for="<?php echo $this->get_field_id('post_number'); ?>">Number of posts:
  <input class="widefat" id="<?php echo $this->get_field_id('post_number'); ?>" name="<?php echo $this->get_field_name('post_number'); ?>" type="text" value="<?php echo attribute_escape($post_number); ?>" />
  </label>
</p>
<?php
	}

}

register_widget('news2columns');




// =============================== category wise news list Widget (particular category) ======================================

class CategoryNews extends WP_Widget {
	function CategoryNews() {
	//Constructor
		$widget_ops = array('classname' => 'widget Category wise News List', 'description' => 'List of latest posts in particular category' );
		$this->WP_Widget('CategoryNews', 'PT &rarr; Latest News Category Wise', $widget_ops);
	}

	function widget($args, $instance) {
	// prints the widget

		extract($args, EXTR_SKIP);
		echo $before_widget;
		$title = empty($instance['title']) ? '&nbsp;' : apply_filters('widget_title', $instance['title']);
 		$category = empty($instance['category']) ? '&nbsp;' : apply_filters('widget_category', $instance['category']);
		$post_number = empty($instance['post_number']) ? '&nbsp;' : apply_filters('widget_post_number', $instance['post_number']);
		$post_link = empty($instance['post_link']) ? '&nbsp;' : apply_filters('widget_post_link', $instance['post_link']);

		// if ( !empty( $title ) ) { echo $before_title . $title . $after_title; };
		echo '';
		 ?>
          <h3> <span><?php echo $title; ?></span> </h3>
          
               <div class="category_wise_post">   
                <?php
				 global $post;
				 setup_postdata($post);
				$postcount = 0;
				$page = (get_query_var('paged')) ? get_query_var('paged') : 1;
				query_posts( 'paged=$page&showposts='.$post_number.'&cat='.$category );
				if (have_posts()) { while (have_posts()) { the_post(); 
				if( $postcount == 0 ) { 
				//GETS LATEST POST ?>
     	<?php $post_images = bdw_get_images($post->ID,'large');?>
 			
			  
            <?php if($post_images[0]){ global $thumb_url; ?>
                   <div class="cate_img"> <a class="popular_img" href="<?php the_permalink(); ?>">   <img src="<?php echo bloginfo('template_url'); ?>/thumb.php?src=<?php echo $post_images[0];?>&amp;w=270&amp;h=144&amp;zc=1&amp;q=80<?php echo $thumb_url;?>" alt="" title=""  /></a>  
                     
                     
                     <div class="category_wise_post_date"> <span>  <?php the_time('j M') ?>, at <?php the_time('H : s A') ?> </span>
                       <a class="cate_comments" href="<?php the_permalink(); ?>#commentarea"><?php comments_number('0 Comment', '1 Comments', '% Comments'); ?></a>  </div>  </div>            
                     
            <?php }?>  
            
            <h4><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
  
  
  			<ul>
  			<?php 
		} elseif( $postcount > 0 && $postcount <= 5 ) { 
		//GETS MORE EXCERPTS
	?>
	 
    <li> <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a> </li>  
    
	<?php }	$postcount ++;	// close the loop 
		} 
	 } ?>        
    	
        </ul>
        

<?php

	    echo '</div>';

		echo $after_widget;
	}

	function update($new_instance, $old_instance) {
	//save the widget
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['category'] = strip_tags($new_instance['category']);
		$instance['post_number'] = strip_tags($new_instance['post_number']);
		$instance['post_link'] = strip_tags($new_instance['post_link']);
		return $instance;

	}

	function form($instance) {
	//widgetform in backend
		$instance = wp_parse_args( (array) $instance, array( 'title' => '', 'category' => '', 'post_number' => '' ) );
		$title = strip_tags($instance['title']);
		$category = strip_tags($instance['category']);
		$post_number = strip_tags($instance['post_number']);
		$post_link = strip_tags($instance['post_link']);

?>
<p>
  <label for="<?php echo $this->get_field_id('title'); ?>">Title:
    <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo attribute_escape($title); ?>" />
  </label>
</p>
<p>
  <label for="<?php echo $this->get_field_id('category'); ?>">Categories (<code>IDs</code> separated by commas):
  <input class="widefat" id="<?php echo $this->get_field_id('category'); ?>" name="<?php echo $this->get_field_name('category'); ?>" type="text" value="<?php echo attribute_escape($category); ?>" />
  </label>
</p>
<p>
  <label for="<?php echo $this->get_field_id('post_number'); ?>">Number of posts:
  <input class="widefat" id="<?php echo $this->get_field_id('post_number'); ?>" name="<?php echo $this->get_field_name('post_number'); ?>" type="text" value="<?php echo attribute_escape($post_number); ?>" />
  </label>
</p>
<?php
	}

}

register_widget('CategoryNews');




// =============================== 1 columns news posts Widget (particular category) ======================================

class news1columns extends WP_Widget {
	function news1columns() {
	//Constructor
		$widget_ops = array('classname' => 'widget Single Columns News', 'description' => 'List of latest posts in particular category' );
		$this->WP_Widget('news1columns', 'PT &rarr; Latest Posts Single Columns', $widget_ops);
	}

	function widget($args, $instance) {
	// prints the widget

		extract($args, EXTR_SKIP);
		echo $before_widget;
		$title = empty($instance['title']) ? '&nbsp;' : apply_filters('widget_title', $instance['title']);
 		$category = empty($instance['category']) ? '&nbsp;' : apply_filters('widget_category', $instance['category']);
		$post_number = empty($instance['post_number']) ? '&nbsp;' : apply_filters('widget_post_number', $instance['post_number']);
		$post_link = empty($instance['post_link']) ? '&nbsp;' : apply_filters('widget_post_link', $instance['post_link']);

		// if ( !empty( $title ) ) { echo $before_title . $title . $after_title; };
		echo '';
		 ?>
          <h3><?php echo $title; ?> </h3>
          <ul class="news_list">
                
				<?php 
			        global $post;
			        $latest_menus = get_posts('numberposts='.$post_number.'postlink='.$post_link.'&category='.$category.'');
                    foreach($latest_menus as $post) :
                    setup_postdata($post);
			    ?>
                 <?php $post_images = bdw_get_images($post->ID,'large');?>
           
           		<li class="clearfix"> 
                	<span  class="post_comments" > <a href="<?php the_permalink(); ?>#commentarea"><?php comments_number('0', '1', '%'); ?> <small>Comments</small></a>  </span>
            	<?php if($post_images[0]){ global $thumb_url;?>
                   <a class="widget-title" href="<?php the_permalink(); ?>"><img src="<?php echo bloginfo('template_url'); ?>/thumb.php?src=<?php echo $post_images[0];?>&amp;w=130&amp;h=100&amp;zc=1&amp;q=80<?php echo $thumb_url;?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>"  /> </a>  
            <?php }?>
            		
                    <h3> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3> 
                   <p class="date"><?php the_time('F j, Y') ?> </p>
                   
                   <p> <?php echo bm_better_excerpt(175, ''); ?> <a href="<?php the_permalink(); ?>"> more... </a></p>
                   
</li>
    
<?php endforeach; ?>
<?php

	    echo '</ul>';

		echo $after_widget;
	}

	function update($new_instance, $old_instance) {
	//save the widget
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['category'] = strip_tags($new_instance['category']);
		$instance['post_number'] = strip_tags($new_instance['post_number']);
		$instance['post_link'] = strip_tags($new_instance['post_link']);
		return $instance;

	}

	function form($instance) {
	//widgetform in backend
		$instance = wp_parse_args( (array) $instance, array( 'title' => '', 'category' => '', 'post_number' => '' ) );
		$title = strip_tags($instance['title']);
		$category = strip_tags($instance['category']);
		$post_number = strip_tags($instance['post_number']);
		$post_link = strip_tags($instance['post_link']);

?>
<p>
  <label for="<?php echo $this->get_field_id('title'); ?>">Title:
    <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo attribute_escape($title); ?>" />
  </label>
</p>
<p>
  <label for="<?php echo $this->get_field_id('category'); ?>">Categories (<code>IDs</code> separated by commas):
  <input class="widefat" id="<?php echo $this->get_field_id('category'); ?>" name="<?php echo $this->get_field_name('category'); ?>" type="text" value="<?php echo attribute_escape($category); ?>" />
  </label>
</p>
<p>
  <label for="<?php echo $this->get_field_id('post_number'); ?>">Number of posts:
  <input class="widefat" id="<?php echo $this->get_field_id('post_number'); ?>" name="<?php echo $this->get_field_name('post_number'); ?>" type="text" value="<?php echo attribute_escape($post_number); ?>" />
  </label>
</p>
<?php
	}

}

register_widget('news1columns');





 // =============================== In The Spotlight Widget (particular category) ======================================

class spotlightpost extends WP_Widget {
	function spotlightpost() {
	//Constructor
		$widget_ops = array('classname' => 'widget Featured Video', 'description' => 'List of In Featured Video in particular category' );
		$this->WP_Widget('spotlight_post', 'PT &rarr; Featured Video', $widget_ops);
	}

	function widget($args, $instance) {
	// prints the widget

		extract($args, EXTR_SKIP);
		echo $before_widget;
		$title = empty($instance['title']) ? '&nbsp;' : apply_filters('widget_title', $instance['title']);
		$category = empty($instance['category']) ? '&nbsp;' : apply_filters('widget_category', $instance['category']);
		$post_number = empty($instance['post_number']) ? '&nbsp;' : apply_filters('widget_post_number', $instance['post_number']);
		$post_link = empty($instance['post_link']) ? '&nbsp;' : apply_filters('widget_post_link', $instance['post_link']);

		// if ( !empty( $title ) ) { echo $before_title . $title . $after_title; };
		echo ' <div class="spotlight">';?>
        		
                <h3> <span><?php echo $title; ?></span> </h3>
        		
				<?php 
			        global $post;
			        $latest_menus = get_posts('numberposts='.$post_number.'postlink='.$post_link.'&category='.$category.'');
                    foreach($latest_menus as $post) :
                    setup_postdata($post);
 			    ?>
              		 
                <?php if(get_post_meta($post->ID,'video',true)){?>
                     <div class="video">
                    <?php echo get_post_meta($post->ID,'video',true);?>
                    </div>
                    <?php }?>
                    <h4><a class="widget-title" href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h4>
			       
                     
                 <?php endforeach; ?>
                <?php

	    echo '</div>';
		

		echo $after_widget;
	}

	function update($new_instance, $old_instance) {
	//save the widget
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['category'] = strip_tags($new_instance['category']);
		$instance['post_number'] = strip_tags($new_instance['post_number']);
		$instance['post_link'] = strip_tags($new_instance['post_link']);
		return $instance;

	}

	function form($instance) {
	//widgetform in backend
		$instance = wp_parse_args( (array) $instance, array( 'title' => '', 'category' => '', 'post_number' => '' ) );
		$title = strip_tags($instance['title']);
		$category = strip_tags($instance['category']);
		$post_number = strip_tags($instance['post_number']);
		$post_link = strip_tags($instance['post_link']);

?>
<p>
  <label for="<?php echo $this->get_field_id('title'); ?>">Title:
    <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo attribute_escape($title); ?>" />
  </label>
</p>
<p>
  <label for="<?php echo $this->get_field_id('category'); ?>">Categories (<code>IDs</code> separated by commas):
    <input class="widefat" id="<?php echo $this->get_field_id('category'); ?>" name="<?php echo $this->get_field_name('category'); ?>" type="text" value="<?php echo attribute_escape($category); ?>" />
  </label>
</p>
<p>
  <label for="<?php echo $this->get_field_id('post_number'); ?>">Number of posts:
    <input class="widefat" id="<?php echo $this->get_field_id('post_number'); ?>" name="<?php echo $this->get_field_name('post_number'); ?>" type="text" value="<?php echo attribute_escape($post_number); ?>" />
  </label>
</p>
<?php
	}

}

register_widget('spotlightpost');








// =============================== Flickr widget ======================================

class flickrWidget extends WP_Widget {
	function flickrWidget() {
	//Constructor
		$widget_ops = array('classname' => 'widget Flickr Photos ', 'description' => 'Flickr Photos' );
		$this->WP_Widget('widget_flickrwidget', 'PT &rarr; Flickr Photos', $widget_ops);
	}

	function widget($args, $instance) {
	// prints the widget

		extract($args, EXTR_SKIP);
		echo $before_widget;
		$id = empty($instance['id']) ? '&nbsp;' : apply_filters('widget_id', $instance['id']);
		$number = empty($instance['number']) ? '&nbsp;' : apply_filters('widget_number', $instance['number']);

?>

<div class="widget flickr">
			
        <h3 > <span>Photo Gallery</span></h3>
		  <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=<?php echo $number; ?>&amp;display=latest&amp;size=s&amp;layout=x&amp;source=user&amp;user=<?php echo $id; ?>"></script>  
		 
</div>	</div>

<?php
	}

	function update($new_instance, $old_instance) {
	//save the widget
		$instance = $old_instance;
		$instance['id'] = strip_tags($new_instance['id']);
		$instance['number'] = strip_tags($new_instance['number']);
		return $instance;

	}

	function form($instance) {
	//widgetform in backend
		$instance = wp_parse_args( (array) $instance, array('title' => '',  'id' => '', 'number' => '') );
		$id = strip_tags($instance['id']);
		$number = strip_tags($instance['number']);
?>

<p>
  <label for="<?php echo $this->get_field_id('id'); ?>">Flickr ID (<a href="http://www.idgettr.com">idGettr</a>):
    <input class="widefat" id="<?php echo $this->get_field_id('id'); ?>" name="<?php echo $this->get_field_name('id'); ?>" type="text" value="<?php echo attribute_escape($id); ?>" />
  </label>
</p>
<p>
  <label for="<?php echo $this->get_field_id('number'); ?>">Number of photos:
    <input class="widefat" id="<?php echo $this->get_field_id('number'); ?>" name="<?php echo $this->get_field_name('number'); ?>" type="text" value="<?php echo attribute_escape($number); ?>" />
  </label>
</p>
<?php
	}

}

register_widget('flickrWidget');

 
// =============================== Popular Posts Widget ======================================

function PopularPostsSidebar()
{

    $settings_pop = get_option("widget_popularposts");

	$name = $settings_pop['name'];
	$number = $settings_pop['number'];
	if ($name <> "") { $popname = $name; } else { $popname = 'Popular Posts'; }
	if ($number <> "") { $popnumber = $number; } else { $popnumber = '10'; }

?>
 
	<div  class="popular_post">
	<h3 class="popular" ><span><?php echo $popname; ?></span></h3>
	
		<ul>
 			<?php
			global $wpdb;
            $now = gmdate("Y-m-d H:i:s",time());
            $lastmonth = gmdate("Y-m-d H:i:s",gmmktime(date("H"), date("i"), date("s"), date("m")-12,date("d"),date("Y")));
            $popularposts = "SELECT ID, post_title, COUNT($wpdb->comments.comment_post_ID) AS 'stammy' FROM $wpdb->posts, $wpdb->comments WHERE comment_approved = '1' AND $wpdb->posts.ID=$wpdb->comments.comment_post_ID AND post_status = 'publish' AND post_date < '$now' AND post_date > '$lastmonth' AND comment_status = 'open' GROUP BY $wpdb->comments.comment_post_ID ORDER BY stammy DESC LIMIT $popnumber";
            $posts = $wpdb->get_results($popularposts);
            $popular = '';
            if($posts){
                foreach($posts as $post){
	                $post_title = stripslashes($post->post_title);
		               $guid = get_permalink($post->ID);
					   
					      $first_post_title=substr($post_title,0,26);
            ?>
             <?php $post_images = bdw_get_images($post->ID,'large');?>
            
		        <li class="clearfix">
                    <a href="<?php echo $guid; ?>" title="<?php echo $post_title; ?>"><?php echo $post_title; ?></a>  
                       ~  <span class="popular_cat"><?php the_category(", "); ?> </span>
                       
                       <?php if($post_images[0]){ global $thumb_url; ?>
                   <a class="popular_img" href="<?php echo $guid; ?>"> <img src="<?php echo bloginfo('template_url'); ?>/thumb.php?src=<?php echo $post_images[0];?>&amp;w=150&amp;h=105&amp;zc=1&amp;q=80<?php echo $thumb_url;?>" alt="" title=""  />
                    <span class="popular_date">   <?php the_time('j F') ?>, at <?php the_time('H : s A') ?></span>
                     </a>  
            <?php }?>   
                       
                      
                 </li>
            <?php } } ?>

		</ul>
 
 </div>

<?php
}
function PopularPostsAdmin() {

	$settings_pop = get_option("widget_popularposts");

	// check if anything's been sent
	if (isset($_POST['update_popular'])) {
		$settings_pop['name'] = strip_tags(stripslashes($_POST['popular_name']));
		$settings_pop['number'] = strip_tags(stripslashes($_POST['popular_number']));

		update_option("widget_popularposts",$settings_pop);
	}

	echo '<p>
			<label for="popular_name">Title:
			<input id="popular_name" name="popular_name" type="text" class="widefat" value="'.$settings_pop['name'].'" /></label></p>';
	echo '<p>
			<label for="popular_number">Number of popular posts:
			<input id="popular_number" name="popular_number" type="text" class="widefat" value="'.$settings_pop['number'].'" /></label></p>';
	echo '<input type="hidden" id="update_popular" name="update_popular" value="1" />';

}

register_sidebar_widget('PT &rarr; Popular Posts', 'PopularPostsSidebar');
register_widget_control('PT &rarr; Popular Posts', 'PopularPostsAdmin', 250, 200);


// =============================== Twitter widget ======================================
// Plugin Name: Twitter Widget
// Plugin URI: http://seanys.com/2007/10/12/twitter-wordpress-widget/
// Description: Adds a sidebar widget to display Twitter updates (uses the Javascript <a href="http://twitter.com/badges/which_badge">Twitter 'badge'</a>)
// Version: 1.0.3
// Author: Sean Spalding
// Author URI: http://seanys.com/
// License: GPL
class twitter extends WP_Widget {
	function twitter() {
	//Constructor
		$widget_ops = array('classname' => 'Twitter', 'description' => 'Twitter' );
		$this->WP_Widget('widget_Twidget', 'PT &rarr; Twitter', $widget_ops);
	}

	function widget($args, $instance) {
	// prints the widget

		extract($args, EXTR_SKIP);
		echo $before_widget;
		$title = empty($instance['title']) ? '&nbsp;' : apply_filters('widget_title', $instance['title']);
		$account = empty($instance['account']) ? '&nbsp;' : apply_filters('widget_account', $instance['account']);
		$show = empty($instance['show']) ? '&nbsp;' : apply_filters('widget_show', $instance['show']);
		$follow = empty($instance['follow']) ? '&nbsp;' : apply_filters('widget_follow', $instance['follow']);

		 // Output
		echo $before_widget ;

		// start
		echo '<div id="twitter"> <h3><a href="http://www.twitter.com/'.$account.'/" title="'.$follow.'">'.$title.' </a></h3>';              
		echo '<ul id="twitter_update_list"><li></li></ul>
		      <script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>';
		echo '<script type="text/javascript" src="http://twitter.com/statuses/user_timeline/'.$account.'.json?callback=twitterCallback2&amp;count='.$show.'"></script>';
		echo '</div> </div>';
			
				
		// echo widget closing tag
		echo $after_widget;
	}

	function update($new_instance, $old_instance) {
	//save the widget
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['account'] = strip_tags($new_instance['account']);
		$instance['follow'] = strip_tags($new_instance['follow']);
		$instance['show'] = strip_tags($new_instance['show']);
		return $instance;

	}

	function form($instance) {
	//widgetform in backend
		$instance = wp_parse_args( (array) $instance, array('account'=>'rbhavesh', 'title'=>'Twitter Updates', 'show'=>'3' ) );
		$title = strip_tags($instance['title']);
		$show = strip_tags($instance['show']);
		$follow = strip_tags($instance['follow']);
		$account = strip_tags($instance['account']);
?>
<p>
  <label for="<?php echo $this->get_field_id('account'); ?>"><?php  _e('Twitter Account ID')?>:
    <input class="widefat" id="<?php echo $this->get_field_id('account'); ?>" name="<?php echo $this->get_field_name('account'); ?>" type="text" value="<?php echo attribute_escape($account); ?>" />
  </label>
</p>
<p>
  <label for="<?php echo $this->get_field_id('title'); ?>"><?php  _e('Title')?>:
    <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo attribute_escape($title); ?>" />
  </label>
</p>

<p>
  <label for="<?php echo $this->get_field_id('show'); ?>"><?php  _e('Show Twitter Posts')?>:
    <input class="widefat" id="<?php echo $this->get_field_id('show'); ?>" name="<?php echo $this->get_field_name('show'); ?>" type="text" value="<?php echo attribute_escape($show); ?>" />
  </label>
</p>

<?php
	}

}

register_widget('twitter');
/*function widget_Twidget_init() {

	if ( !function_exists('register_sidebar_widget') )
		return;

	function widget_Twidget($args) {

		// "$args is an array of strings that help widgets to conform to
		// the active theme: before_widget, before_title, after_widget,
		// and after_title are the array keys." - These are set up by the theme
		extract($args);

		// These are our own options
		$options = get_option('widget_Twidget');
		$account = $options['account'];  // Your Twitter account name
		$title = $options['title'];  // Title in sidebar for widget
		$show = $options['show'];  // # of Updates to show
		$follow = $options['follow'];  // # of Updates to show

        // Output
		echo $before_widget ;

		// start
		echo '<div id="twitter"> <h3><a href="http://www.twitter.com/'.$account.'/" title="'.$follow.'">'.$title.' </a></h3>';              
		echo '<ul id="twitter_update_list"><li></li></ul>
		      <script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>';
		echo '<script type="text/javascript" src="http://twitter.com/statuses/user_timeline/'.$account.'.json?callback=twitterCallback2&amp;count='.$show.'"></script>';
		echo '</div>';
			
				
		// echo widget closing tag
		echo $after_widget;
	}

	// Settings form
	function widget_Twidget_control() {

		// Get options
		$options = get_option('widget_Twidget');
		// options exist? if not set defaults
		if ( !is_array($options) )
			$options = array('account'=>'rbhavesh', 'title'=>'Twitter Updates', 'show'=>'3');

        // form posted?
		if ( $_POST['Twitter-submit'] ) {

			// Remember to sanitize and format use input appropriately.
			$options['account'] = strip_tags(stripslashes($_POST['Twitter-account']));
			$options['title'] = strip_tags(stripslashes($_POST['Twitter-title']));
			$options['show'] = strip_tags(stripslashes($_POST['Twitter-show']));
			$options['follow'] = strip_tags(stripslashes($_POST['Twitter-follow']));
			$options['linkedin'] = strip_tags(stripslashes($_POST['Twitter-linkedin']));
			$options['facebook'] = strip_tags(stripslashes($_POST['Twitter-facebook']));
			update_option('widget_Twidget', $options);
		}

		// Get options for form fields to show
		$account = htmlspecialchars($options['account'], ENT_QUOTES);
		$title = htmlspecialchars($options['title'], ENT_QUOTES);
		$show = htmlspecialchars($options['show'], ENT_QUOTES);
		$follow = htmlspecialchars($options['follow'], ENT_QUOTES);

		// The form fields
		echo '<p style="text-align:left;">
				<label for="Twitter-account">' . __('Twitter Account ID:') . '
				<input style="width: 280px;" id="Twitter-account" name="Twitter-account" type="text" value="'.$account.'" />
				</label></p>';
		echo '<p style="text-align:left;">
				<label for="Twitter-title">' . __('Title:') . '
				<input style="width: 280px;" id="Twitter-title" name="Twitter-title" type="text" value="'.$title.'" />
				</label></p>';
		echo '<p style="text-align:left;">
				<label for="Twitter-show">' . __('Show Twitter Posts:') . '
				<input style="width: 280px;" id="Twitter-show" name="Twitter-show" type="text" value="'.$show.'" />
				</label></p>';
		echo '<input type="hidden" id="Twitter-submit" name="Twitter-submit" value="1" />';
	}


	// Register widget for use
	register_sidebar_widget(array('PT &rarr; Twitter', 'widgets'), 'Widget_Twidget');

	// Register settings for use, 300x200 pixel form
	register_widget_control(array('PT &rarr; Twitter', 'widgets'), 'Widget_Twidget_control', 300, 200);
	
}

// Run code and init
add_action('widgets_init', 'widget_Twidget_init');*/
?>