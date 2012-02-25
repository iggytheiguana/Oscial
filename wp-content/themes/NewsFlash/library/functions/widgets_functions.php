<?php

// Register widgetized areas
if ( function_exists('register_sidebar') ) {
     register_sidebars(4,array('name' => 'Home Page Content %d ','before_widget' => '<div class="widget">','after_widget' => '</div>','before_title' => '<h3><span>','after_title' => '</span></h3>'));
	register_sidebars(1,array('name' => 'Sidebar','before_widget' => '<div class="widget">','after_widget' => '</div>','before_title' => '<h3><span>','after_title' => '</span></h3>'));
	register_sidebars(1,array('name' => 'Sub Sidebar Left','before_widget' => '<div class="widget">','after_widget' => '</div>','before_title' => '<h3><span>','after_title' => '</span></h3>'));
	register_sidebars(1,array('name' => 'Sub Sidebar Right','before_widget' => '<div class="widget">','after_widget' => '</div>','before_title' => '<h3><span>','after_title' => '</span></h3>'));
	register_sidebars(1,array('name' => 'Sidebar Sub Column Bottom','before_widget' => '<div class="widget">','after_widget' => '</div>','before_title' => '<h3><span>','after_title' => '</span></h3>'));
	register_sidebars(1,array('name' => 'Top Strip Navigation','before_widget' => '<div class="widget">','after_widget' => '</div>','before_title' => '<h3><span>','after_title' => '</span></h3>'));
	register_sidebars(1,array('name' => 'Header Navigation','before_widget' => '<div class="widget">','after_widget' => '</div>','before_title' => '<h3><span>','after_title' => '</span></h3>'));
}
	
// Check for widgets in widget-ready areas http://wordpress.org/support/topic/190184?replies=7#post-808787
// Thanks to Chaos Kaizer http://blog.kaizeku.com/
function is_sidebar_active( $index = 1){
	$sidebars	= wp_get_sidebars_widgets();
	$key		= (string) 'sidebar-'.$index;
 
	return (isset($sidebars[$key]));
}



// =============================== Sidebar Widget ======================================

class HeaderadvtWidget extends WP_Widget {
	function HeaderadvtWidget() {
	//Constructor
		$widget_ops = array('classname' => 'widget Header Advt', 'description' => 'Header Advt' );		
		$this->WP_Widget('widget_HeaderadvtWidget', 'PT &rarr; Header Advt', $widget_ops);
	}
	function widget($args, $instance) {
	// prints the widget
		extract($args, EXTR_SKIP);
		$title = empty($instance['title']) ? '' : apply_filters('widget_title', $instance['title']);
		$advt1 = empty($instance['advt1']) ? '' : apply_filters('widget_advt1', $instance['advt1']);
		$link1 = empty($instance['link1']) ? '' : apply_filters('widget_link1', $instance['link1']);
		$advt2 = empty($instance['advt2']) ? '' : apply_filters('widget_advt2', $instance['advt2']);
		$link2 = empty($instance['link2']) ? '' : apply_filters('widget_link2', $instance['link2']);
		$advt3 = empty($instance['advt3']) ? '' : apply_filters('widget_advt3', $instance['advt3']);
		$link3 = empty($instance['link3']) ? '' : apply_filters('widget_link3', $instance['link3']);
		$advt4 = empty($instance['advt4']) ? '' : apply_filters('widget_advt4', $instance['advt4']);
		$link4 = empty($instance['link4']) ? '' : apply_filters('widget_link4', $instance['link4']);
		?>						

		<div class="sidebaradvt">
 		 <?php if ( $advt1 <> "" ) { ?>	 
         		<img src="<?php echo $advt1; ?> "  />
         <?php } ?>
         
         
         <?php if ( $advt1 <> "" ) { ?>	 
         		<?php echo $advt1; ?> 
         <?php } ?>
         
         <?php if ( $advt1 <> "" ) { ?>	 
         		<?php echo $advt1; ?> 
         <?php } ?>
         
         <?php if ( $advt1 <> "" ) { ?>	 
         		<?php echo $advt1; ?> 
         <?php } ?>
         
        </div>  <!-- header right #end -->
            
            
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
      
  <p><label for="<?php echo $this->get_field_id('advt1'); ?>">Description <textarea class="widefat" rows="6" cols="20" id="<?php echo $this->get_field_id('advt1'); ?>" name="<?php echo $this->get_field_name('advt1'); ?>"><?php echo attribute_escape($advt1); ?></textarea></label></p>
<?php
	}}
register_widget('HeaderadvtWidget');


// =============================== Sidebar Advt Widget ======================================

class sidebaradvtWidget extends WP_Widget {
	function sidebaradvtWidget() {
	//Constructor
		$widget_ops = array('classname' => 'widget Sidebar 4 Advt 125x125px ', 'description' => 'Sidebar 4 Advt 125x125px' );		
		$this->WP_Widget('widget_sidebaradvtWidget', 'PT &rarr; Sidebar Advt', $widget_ops);
	}
	function widget($args, $instance) {
	// prints the widget
		extract($args, EXTR_SKIP);
		$title = empty($instance['title']) ? '' : apply_filters('widget_title', $instance['title']);
		$advt1 = empty($instance['advt1']) ? '' : apply_filters('widget_advt1', $instance['advt1']);
		$link1 = empty($instance['link1']) ? '' : apply_filters('widget_link1', $instance['link1']);
		$advt2 = empty($instance['advt2']) ? '' : apply_filters('widget_advt2', $instance['advt2']);
		$link2 = empty($instance['link2']) ? '' : apply_filters('widget_link2', $instance['link2']);
		$advt3 = empty($instance['advt3']) ? '' : apply_filters('widget_advt3', $instance['advt3']);
		$link3 = empty($instance['link3']) ? '' : apply_filters('widget_link3', $instance['link3']);
		$advt4 = empty($instance['advt4']) ? '' : apply_filters('widget_advt4', $instance['advt4']);
		$link4 = empty($instance['link4']) ? '' : apply_filters('widget_link4', $instance['link4']);
		?>						

		<div class="advt">
 		 <?php if ( $link1 <> "" ) { ?>	 
         		 <a href="<?php echo $link1; ?>" ><img src="<?php echo $advt1; ?>" alt="" class="fl"  /> </a>
         <?php } ?>
         
         <?php if ( $link2 <> "" ) { ?>	 
         		 <a href="<?php echo $link2; ?>" ><img src="<?php echo $advt2; ?>" alt="" class="fr"   /> </a>
         <?php } ?>
         
         <?php if ( $link3 <> "" ) { ?>	 
         		 <a href="<?php echo $link3; ?>" ><img src="<?php echo $advt3; ?>" alt=""  class="fl"  /> </a>
         <?php } ?>
         
         <?php if ( $link4 <> "" ) { ?>	  
         		 <a href="<?php echo $link4; ?>" ><img src="<?php echo $advt4; ?>" alt="" class="fr"   /> </a>
         <?php } ?>
         
        </div>  <!-- header right #end -->
            
            
	<?php
	}
	function update($new_instance, $old_instance) {
	//save the widget
		$instance = $old_instance;		
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['advt1'] = ($new_instance['advt1']);
		$instance['link1'] = ($new_instance['link1']);
		$instance['advt2'] = ($new_instance['advt2']);
		$instance['link2'] = ($new_instance['link2']);
		$instance['advt3'] = ($new_instance['advt3']);
		$instance['link3'] = ($new_instance['link3']);
		$instance['advt4'] = ($new_instance['advt4']);
		$instance['link4'] = ($new_instance['link4']);
 		return $instance;
	}
	function form($instance) {
	//widgetform in backend
		$instance = wp_parse_args( (array) $instance, array( 'title' => '', 'advt1' => '', 'advt2' => '', 'advt3' => '', 'advt4' => '', 'link1' => '','link2' => '','link3' => '','link4' => '' ) );		
		$title = strip_tags($instance['title']);
		$advt1 = ($instance['advt1']);
		$link1 = ($instance['link1']);
		$advt2 = ($instance['advt2']);
		$link2 = ($instance['link2']);
		$advt3 = ($instance['advt3']);
		$link3 = ($instance['link3']);
		$advt4 = ($instance['advt4']);
		$link4 = ($instance['link4']);
 ?>
      
  <p><label for="<?php echo $this->get_field_id('advt1'); ?>">Banner 1 Image URL link (ex.http://templatic.com/images/banner1.jpg)
  <input type="text" class="widefat" id="<?php echo $this->get_field_id('advt1'); ?>" name="<?php echo $this->get_field_name('advt1'); ?>" value="<?php echo attribute_escape($advt1); ?>"></label></p>
  <p><label for="<?php echo $this->get_field_id('link1'); ?>">Banner 1 URL link (ex.http://templatic.com/
  <input type="text" class="widefat" id="<?php echo $this->get_field_id('link1'); ?>" name="<?php echo $this->get_field_name('link1'); ?>" value="<?php echo attribute_escape($link1); ?>"></label></p>
  <p><label for="<?php echo $this->get_field_id('advt2'); ?>">Banner 2 Image URL link  
  <input type="text" class="widefat" id="<?php echo $this->get_field_id('advt2'); ?>" name="<?php echo $this->get_field_name('advt2'); ?>" value="<?php echo attribute_escape($advt2); ?>"></label></p>
  <p><label for="<?php echo $this->get_field_id('link2'); ?>">Banner 2 URL link  
  <input type="text" class="widefat" id="<?php echo $this->get_field_id('link2'); ?>" name="<?php echo $this->get_field_name('link2'); ?>" value="<?php echo attribute_escape($link2); ?>"></label></p>
  
  <p><label for="<?php echo $this->get_field_id('advt3'); ?>">Banner 3 Image URL link  
  <input type="text" class="widefat" id="<?php echo $this->get_field_id('advt3'); ?>" name="<?php echo $this->get_field_name('advt3'); ?>" value="<?php echo attribute_escape($advt3); ?>"></label></p>
  <p><label for="<?php echo $this->get_field_id('link3'); ?>">Banner 3 URL link  
  <input type="text" class="widefat" id="<?php echo $this->get_field_id('link3'); ?>" name="<?php echo $this->get_field_name('link3'); ?>" value="<?php echo attribute_escape($link3); ?>"></label></p>
  
  <p><label for="<?php echo $this->get_field_id('advt4'); ?>">Banner 4 Image URL link  
  <input type="text" class="widefat" id="<?php echo $this->get_field_id('advt4'); ?>" name="<?php echo $this->get_field_name('advt4'); ?>" value="<?php echo attribute_escape($advt4); ?>"></label></p>
  <p><label for="<?php echo $this->get_field_id('link4'); ?>">Banner 4 URL link  
  <input type="text" class="widefat" id="<?php echo $this->get_field_id('link4'); ?>" name="<?php echo $this->get_field_name('link4'); ?>" value="<?php echo attribute_escape($link4); ?>"></label></p>
  
<?php
	}}
register_widget('sidebaradvtWidget');
	
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
         
         <p class="rss"><a href="<?php bloginfo('rdf_url'); ?>">Rss Feed </a> <a href="http://feedburner.google.com/fb/a/mailverify?uri=<?php echo stripslashes(get_option('ptthemes_feedburner_id'));  ?>" target="_blank"   >Via Email</a></p>
        
		 
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
		$desc1 = empty($instance['desc1']) ? '' : apply_filters('widget_desc1', $instance['desc1']);
		$twittertext = empty($instance['twittertext']) ? 'Follow us on Twitter' : apply_filters('widget_twittertext', $instance['twittertext']);
		$facetext = empty($instance['facetext']) ? 'Join Me at Facebook' : apply_filters('widget_facetext', $instance['facetext']);

	
?> 
    	<div class="social_media" >
         <?php /*?><h3><?php echo $title; ?></h3><?php */?>
          		
                
                
                <ul>
                	<li class="i_email"><a href="http://feedburner.google.com/fb/a/mailverify?uri=<?php echo stripslashes(get_option('ptthemes_feedburner_id'));  ?>" target="_blank">Get updates via email</a></li>
                    <li class="i_rss"><a href="<?php if( get_option('ptthemes_feedburner_url')){echo get_option('ptthemes_feedburner_url');}else{ echo bloginfo('rss_url');} ?>">Subscribe via RSS</a></li>				
                    <?php if ( get_option('ptthemes_twitter_id') != "") { ?>
                    <li class="i_twitter">
 		 <a href="<?php echo stripslashes(get_option('ptthemes_twitter_id'));  ?>"><?php echo $twittertext; ?></a></li>
         			<?php } ?>
                    
                    <?php if ( get_option('ptthemes_facebook_id') != "") { ?>
                    <li class="i_facebook">
 		 <a href="<?php echo stripslashes(get_option('ptthemes_facebook_id'));  ?>"><?php echo $facetext; ?></a></li>
         			<?php } ?>
                </ul>
		 
        
          

 	  </div>	 
      

<?php
	}
	function update($new_instance, $old_instance) {
	//save the widget
		$instance = $old_instance;		
		$instance['desc1'] = ($new_instance['desc1']);
		$instance['title'] = ($new_instance['title']);
		$instance['twittertext'] = ($new_instance['twittertext']);
		$instance['facetext'] = ($new_instance['facetext']);
		
		
		return $instance;
	}
	function form($instance) {
	//widgetform in backend
		$instance = wp_parse_args( (array) $instance, array( 'title' => '', 'twittertext' => '', 'facetext' => '') );
		$desc1 = ($instance['desc1']);
		$title = strip_tags($instance['title']);
		$twittertext = ($instance['twittertext']);
		$facetext = ($instance['facetext']);
  ?>
      
 <?php /*?> <p><label for="<?php echo $this->get_field_id('title'); ?>">Title  :
  <input type="text" class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo attribute_escape($title); ?>"></label></p><?php */?>
  <p><label for="<?php echo $this->get_field_id('twittertext'); ?>">Twitter Text : 
  <input type="text" class="widefat" id="<?php echo $this->get_field_id('twittertext'); ?>" name="<?php echo $this->get_field_name('twittertext'); ?>" value="<?php echo attribute_escape($twittertext); ?>"></label></p>
    <p><label for="<?php echo $this->get_field_id('facetext'); ?>">Facebook Text : 
  <input type="text" class="widefat" id="<?php echo $this->get_field_id('facetext'); ?>" name="<?php echo $this->get_field_name('facetext'); ?>" value="<?php echo attribute_escape($facetext); ?>"></label></p>
 
<?php
	}}
register_widget('socialmedia');
	
	
// =============================== Google ads ======================================
class TextWidget extends WP_Widget {
	function TextWidget() {
	//Constructor
		$widget_ops = array('classname' => 'widget Google Ads ', 'description' => 'Front Page Google Ads Widget' );		
		$this->WP_Widget('widget_text', 'PT &rarr; Google Ads', $widget_ops);
	}
	function widget($args, $instance) {
	// prints the widget
		extract($args, EXTR_SKIP);
		$title = empty($instance['title']) ? '&nbsp;' : apply_filters('widget_title', $instance['title']);
		$desc1 = empty($instance['desc1']) ? '&nbsp;' : apply_filters('widget_desc1', $instance['desc1']);
		 ?>						


		<div class="widget">
  		<h3><?php echo $title; ?> </h3>
          
          <div class="google_ads"> 
        <?php if ( $desc1 <> "" ) { ?>	
         <?php echo $desc1; ?> 
         <?php } ?>
         </div>
         
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
     
        <p><label for="<?php echo $this->get_field_id('desc1'); ?>">Description <textarea class="widefat" rows="6" cols="20" id="<?php echo $this->get_field_id('desc1'); ?>" name="<?php echo $this->get_field_name('desc1'); ?>"><?php echo attribute_escape($desc1); ?></textarea></label></p>
       
<?php
	}}
register_widget('TextWidget');



// =============================== Sidebar Advt second  ======================================
class advtwidget extends WP_Widget {
	function advtwidget() {
	//Constructor
		$widget_ops = array('classname' => 'widget Advertise 290x150px ', 'description' => 'Front Page Advertise 290x150px' );		
		$this->WP_Widget('advtwidget', 'PT &rarr; Advertise 290x150px', $widget_ops);
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
     
        <p><label for="<?php echo $this->get_field_id('desc1'); ?>">Description <textarea class="widefat" rows="6" cols="20" id="<?php echo $this->get_field_id('desc1'); ?>" name="<?php echo $this->get_field_name('desc1'); ?>"><?php echo attribute_escape($desc1); ?></textarea></label></p>
       
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
                
                <h3><?php echo $title; ?> </h3>
               <div  id="slider">
                
				<?php 
			        global $post,$thumb_url;
			        $latest_menus = get_posts('numberposts='.$post_number.'postlink='.$post_link.'&category='.$category.'');
                    foreach($latest_menus as $post) :
                    setup_postdata($post);
			    ?>
                 <?php $post_images = bdw_get_images($post->ID,'large');?>
           <?php if(get_post_meta($post->ID,'featured',true)){?>
             
             
               <a class="widget-title" href="<?php the_permalink(); ?>"><img src="<?php echo bloginfo('template_url'); ?>/thumb.php?src=<?php echo get_post_meta($post->ID,'featured',true);?>&amp;w=585&amp;zc=1&amp;q=80<?php echo $thumb_url;?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>"  /> </a>
             
              <?php } else if($post_images[0]){ global $thumb_url; ?>
                   <a class="widget-title" href="<?php the_permalink(); ?>"><img src="<?php echo bloginfo('template_url'); ?>/thumb.php?src=<?php echo $post_images[0];?>&amp;w=585&amp;zc=1&amp;q=80<?php echo $thumb_url;?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>"  /> </a>  
            <?php }?>
            
            
             
     
   
<?php endforeach; ?>
<?php

	    echo '</div></div>';

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



// =============================== 2 columns news posts Widget (particular category) ======================================

class news2columns extends WP_Widget {
	function news2columns() {
	//Constructor
		$widget_ops = array('classname' => 'widget 2 Columns News', 'description' => 'List of latest posts in particular category' );
		$this->WP_Widget('news2columns', 'PT &rarr; Latest Posts', $widget_ops);
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
            	<?php if($post_images[0]){ global $thumb_url;?>
                   <a class="widget-title" href="<?php the_permalink(); ?>"><img src="<?php echo bloginfo('template_url'); ?>/thumb.php?src=<?php echo $post_images[0];?>&amp;w=77&amp;h=60&amp;zc=1&amp;q=80<?php echo $thumb_url;?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>"  /> </a>  
           <?php }else{?>
            
            		<span class="img_not_available2"> image not available </span>
         
            <?php }?>
            		
                    <h3> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3> 
                   <p class="date"><?php the_time('F j, Y') ?> </p>
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
            <?php }else{?>
            
            		<span class="img_not_available"> image not available </span>
         
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
        		
              <?php /*?>  <h3><?php echo $title; ?> </h3><?php */?>
        		
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
                  <?php /*?> <p> <?php echo bm_better_excerpt(80, ' ... '); ?> </p><?php */?>
                   
                     
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



// =============================== Featured News Widget (particular category) ======================================

class featuredpost extends WP_Widget {
	function featuredpost() {
	//Constructor
		$widget_ops = array('classname' => 'widget Featured news', 'description' => 'List of Featured News in particular category' );
		$this->WP_Widget('featured_post', 'PT &rarr; Featured news', $widget_ops);
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
		echo ' ';?>
        		
                <h3><?php echo $title; ?> </h3>
                 <ul>
                
                <?php 
			        global $post;
			        $latest_menus = get_posts('numberposts='.$post_number.'postlink='.$post_link.'&category='.$category.'');
                    foreach($latest_menus as $post) :
                    setup_postdata($post);
 			    ?>
                <?php $post_images = bdw_get_images($post->ID,'large');?>
                 	<li>
                         <?php if($post_images[0]){ global $thumb_url;?>
                         <a class="widget-title" href="<?php the_permalink(); ?>"><img src="<?php echo bloginfo('template_url'); ?>/thumb.php?src=<?php echo $post_images[0];?>&amp;w=145&amp;h=145&amp;zc=1&amp;q=80<?php echo $thumb_url;?>" alt="<?php the_title(); ?>"  /> </a>
                        <?php }?>
                         <h4><a class="widget-title" href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h4>
                        <p> <?php echo bm_better_excerpt(120, ' ... '); ?> </p>
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

register_widget('featuredpost');




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
			
        <h3 >Flickr</h3>
		  <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=<?php echo $number; ?>&amp;display=latest&amp;size=s&amp;layout=x&amp;source=user&amp;user=<?php echo $id; ?>"></script>  
		 
</div></div>	

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
	<h3 class="popular" ><?php echo $popname; ?></h3>
	
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
		        <li class="clearfix">
                    <a href="<?php echo $guid; ?>" title="<?php echo $post_title; ?>"><?php echo $post_title; ?></a>  
                   <span>  Posted on  <?php echo get_the_time('', $post->ID); ?> // <a href="<?php echo $guid; ?>#commentarea"><?php echo get_comments_number( $post->ID);//comments_number('0 Comment', '1 Comments', '% Comments'); ?> </a> </span>
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