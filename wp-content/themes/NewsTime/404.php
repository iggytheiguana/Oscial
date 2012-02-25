<?php get_header(); ?>

 <?php include(TEMPLATEPATH."/sidebar_left.php");?>

  
       			<div id="content" class="content_index clearfix">
            
             <h1 class="cat_head" ><span><?php echo get_option('ptthemes_404error_name'); ?></span></h1>
             
             	<h1> 404 Error !</h1>
             
               <?php if ( get_option( 'ptthemes_breadcrumbs' )) {  ?>
                <div class="breadcrumb clearfix">
                <?php yoast_breadcrumb('','');  ?>
                </div>
            <?php } ?>
	    
		<?php if ( get_option( 'ptthemes_breadcrumbs' )) { yoast_breadcrumb('<div id="breadcrumb"><p>','</p></div>'); } ?>
	
		  <div class="cat-spot"><p><?php echo get_option('ptthemes_404solution_name'); ?></p></div>
 		
        
          </div> <!-- content  #end -->
         
		 <?php get_sidebar(); ?>
    
 <?php get_footer(); ?>
