<?php get_header(); ?>

<script type="text/javascript" src="h<?php bloginfo('template_url'); ?>/library/js/jquery.min.js"></script>       
		  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/library/js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
            <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/library/js/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
            <script type="text/javascript">
                $(document).ready(function() {
         
                    $("a[rel=example_group]").fancybox({
                        'transitionIn'		: 'none',
                        'transitionOut'		: 'none',
                        'titlePosition' 	: 'over',
                        'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
                            return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
                        }
                    });
        
                });
        </script> 


  		<div id="content" >
        
        <h1 class="head">
        <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
        <?php the_title(); ?></a>
        </h1>
        
     
      <?php if(have_posts()) : ?>
         <?php $post_images = bdw_get_images($post->ID,'large');?>
		  <?php while(have_posts()) : the_post() ?>
	
              <div id="post-<?php the_ID(); ?>" class="posts post_spacer">
               <p class="date clearfix"> <span class="fl">  By <?php the_author_posts_link(); ?> at  <?php the_time('F j, Y') ?>  |   <?php the_time( $d ); ?>  | 
               <?php /*?><a href="<?php the_permalink(); ?>#commentarea"><?php comments_number('0 Comment', '1 Comments', '% Comments'); ?> </a><?php */?> </span>    <span class="i_print"> <a href="#" onclick="window.print();return false;" >Print</a></span>  </p>
              
            <?php if ( get_option('ptthemes_featured_gallery') ) { ?>
                
                 <?php } else { ?> 
                     <?php if($post_images[0]){?>
                           <a href="<?php echo $post_images[0];?>" rel="example_group" title="<?php the_title(); ?>">  <img src="<?php echo bloginfo('template_url'); ?>/thumb.php?src=<?php echo $post_images[0];?>&amp;w=555&amp;zc=1&amp;q=80<?php echo $thumb_url;?>" alt="<?php the_title(); ?>"  class="main_img" /> </a>
                            <?php }?>
                            
                            <div  class="small_thumb" >
                            <?php
                            if(count($post_images)>1)
                            {
                                for($im=0;$im<count($post_images);$im++)
                                {
                                ?>
                                    <a href="<?php echo $post_images[$im];?>" alt="<?php the_title(); ?>" rel="example_group" title="<?php the_title(); ?>">   
                                   <img src="<?php echo bloginfo('template_url'); ?>/thumb.php?src=<?php echo $post_images[$im];?>&amp;w=79&amp;h=75&amp;zc=1&amp;q=80<?php echo $thumb_url;?>" alt="<?php the_title(); ?>"  /> 
                                   </a>
                                 <?php	
                                }
                            }
                            ?>
                            </div> 
                            
                <?php } ?> 
                 
              	  <?php if(get_post_meta($post->ID,'video',true)){?>
                    <div class="video_main">
                    <?php echo get_post_meta($post->ID,'video',true);?>
                    </div>
                 <?php }?>
                 
                 	
                      <?php the_content(); ?>
             
                   <p class="post_bottom clearfix"> <span class="category"> <?php the_category(" "); ?> </span>   <?php the_tags('<span class="tags">', ', ', '<br /> </span>'); ?>   </p>
              </div> <!-- post #end -->
<div class="pos_navigation clearfix">
			<div class="post_left fl"><?php previous_post_link('%link','&laquo; '.__('Previous')) ?></div>
			<div class="post_right fr"><?php next_post_link('%link',__('Next').' &raquo;') ?></div>
	</div>
             <?php get_related_posts($post);?>
                  
      <?php endwhile; ?>
 <?php endif; ?>
          <div id="comments" class="clearfix"> <?php comments_template(); ?></div>
  </div> <!-- content #end -->
        <?php get_sidebar(); ?>
 <?php get_footer(); ?>