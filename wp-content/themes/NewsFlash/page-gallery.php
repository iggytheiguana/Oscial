<?php
/*
Template Name: Gallery Page
*/
?>

<?php get_header(); ?>
<?php global $is_home; ?>

             	
               
             
       			
    
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/library/js/mootools.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/library/js/slimbox.js"></script>
	    <link href="<?php bloginfo('template_directory'); ?>/library/css/slimbox.css" rel="stylesheet" type="text/css" />          
        
        
       		<div id="content" > 
            
            <h1 class="head"><?php the_title(); ?></h1>
                 <div class="breadcrumb clearfix">
                	<?php if ( get_option( 'ptthemes_breadcrumbs' )) { yoast_breadcrumb('',''); } ?>
                </div>   			 
                   
 		<ul class="gallerylist">
    
    <?php if(have_posts()) : ?>
    <?php $post_images = bdw_get_images($post->ID,'large');
	$post_images_thumb = bdw_get_images($post->ID,'thumb');
	
	?>
			<?php while(have_posts()) : the_post() ?>
             
    
      <?php
                if(count($post_images)>1)
				{
					for($im=0;$im<count($post_images);$im++)
					{
					?>
                       <li> <a href="<?php echo $post_images[$im];?>" alt="<?php the_title(); ?>" rel="lightbox" title="<?php the_title(); ?>">   
                       <img src="<?php echo $post_images_thumb[$im];?>" alt="<?php the_title(); ?>" height="150" width="165"  /> 
                       </a></li>
                     <?php	
					}
				}
				?>
                
                
                <?php endwhile; ?>
 <?php endif; ?>
    
    
    </ul>
        
	   
      </div> <!-- content #end -->
        
        
		  <?php get_sidebar(); ?>
<?php get_footer(); ?>