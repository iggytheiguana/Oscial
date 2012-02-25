<?php get_header(); ?>


 <?php include(TEMPLATEPATH."/sidebar_left.php");?>
 

    <?php if (is_paged()) $is_paged = true; ?>
 
        		<div id="content" class="content_index clearfix">
              
    			 <?php if (is_search()) { ?>
                    <h1 class="cat_head" ><span> Search Result "<?php printf(__('%s'), $s) ?>"</span> </h1>
                    <?php } ?>
                      
               <?php if ( get_option( 'ptthemes_breadcrumbs' )) {  ?>
                    <div class="breadcrumb clearfix">
					<?php yoast_breadcrumb('','');  ?>
                	</div>
                <?php } ?>

			<?php if(have_posts()) : ?>
 			<?php while(have_posts()) : the_post() ?>
              <?php $post_images = bdw_get_images($post->ID,'large');?>
        
                <div id="post-<?php the_ID(); ?>" class="posts" >
                
                <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
                      <?php the_title(); ?>
                      </a></h2>
                      <p class="date"> By <?php the_author_posts_link(); ?> at  <?php the_time('F j, Y') ?>  |   <?php the_time( $d ); ?>  | <a href="<?php the_permalink(); ?>#commentarea"><?php comments_number('0 Comment', '1 Comments', '% Comments'); ?> </a>   </p>
                
                
                 <?php if ( get_option( 'ptthemes_postcontent_full' )) { ?>
                 
                            <div class="post_content">
                            	
                                <?php if($post_images[0]){?>
                                 <img src="<?php echo bloginfo('template_url'); ?>/thumb.php?src=<?php echo $post_images[0];?>&amp;w=580&amp;zc=1&amp;q=80<?php echo $thumb_url;?>" alt="<?php the_title(); ?>"  class="main_img" />
                                <?php }?>
                                
                                <?php if(get_post_meta($post->ID,'video',true)){?>
                                    <div class="video_main">
                                    <?php echo get_post_meta($post->ID,'video',true);?>
                                    </div>
                                 <?php }?>
                            
                            
                              <?php the_content(); ?>
                            </div>
                            
                            
                            <?php } else { ?>
                            
                            <?php if($post_images[0]){?>
                                 <img src="<?php echo bloginfo('template_url'); ?>/thumb.php?src=<?php echo $post_images[0];?>&amp;w=190&amp; h=150&amp; zc=1&amp;q=80<?php echo $thumb_url;?>" alt="<?php the_title(); ?>"  class="imgleft" />
                                <?php }?>
                            
                            <p> <?php echo bm_better_excerpt(375, ''); ?> <a href="<?php the_permalink(); ?>"> more... </a></p>
                            <?php } ?>
                       
            
             
                 
                 <p class="post_bottom clearfix"> <span class="category"> <?php the_category(" , "); ?> </span>   <?php the_tags('<span class="tags">', ', ', '<br /> </span>'); ?>   </p>
                            
                            
                          
              
                
                
                
                
                </div>
      <?php endwhile; ?>
      
      
      
      
      <div class="pagination">
        <?php if (function_exists('wp_pagenavi')) { ?>
        <?php wp_pagenavi(); ?>
        <?php } ?>
      </div>
      <?php endif; ?>
			 
      </div> <!-- content #end -->
        
        
		 <?php get_sidebar(); ?>
		
<?php get_footer(); ?>
