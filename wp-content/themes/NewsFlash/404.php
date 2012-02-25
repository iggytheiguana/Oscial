<?php get_header(); ?>

  
       		<div id="content" >
            
             <h1><?php echo get_option('ptthemes_404error_name'); ?></h1>
                 <div class="breadcrumb clearfix">
                	<?php if ( get_option( 'ptthemes_breadcrumbs' )) { yoast_breadcrumb('',''); } ?>
                </div>
	    
		 
	
		  <div class="cat-spot"><p><?php echo get_option('ptthemes_404solution_name'); ?></p></div>
 		
        
          </div> <!-- content  #end -->
         
		 <?php get_sidebar(); ?>
    
 <?php get_footer(); ?>
