<?php get_header(); ?>
<?php global $is_home; ?>

             	
               
              <?php include(TEMPLATEPATH."/sidebar_left.php");?>
       			
    

       		<div id="content" class="content_inner" > 
            
             <h1 class="cat_head" ><span><?php the_title(); ?></span></h1>
                <?php if ( get_option( 'ptthemes_breadcrumbs' )) {  ?>
                <div class="breadcrumb clearfix">
                <?php yoast_breadcrumb('','');  ?>
                </div>
            <?php } ?>			 
                   
 		<?php if(have_posts()) : ?>
			<?php while(have_posts()) : the_post() ?>
            		<?php $pagedesc = get_post_meta($post->ID, 'pagedesc', $single = true); ?>
            
        
                    <div id="post-<?php the_ID(); ?>" >
                        <div class="entry"> 
                            <?php the_content(); ?>
                        </div>
                    </div><!--/post-->
                
            <?php endwhile; else : ?>
        
                    <div class="posts">
                        <div class="entry-head"><h2><?php echo get_option('ptthemes_404error_name'); ?></h2></div>
                        <div class="entry-content"><p><?php echo get_option('ptthemes_404solution_name'); ?></p></div>
                    </div>
        
        <?php endif; ?>
        
	   
      </div> <!-- content #end -->
        
        
		   
          
          
<?php get_footer(); ?>