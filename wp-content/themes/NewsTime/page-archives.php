<?php
/*
Template Name: Archives Page
*/
?>
<?php get_header(); ?>
                
        
        
        
        <?php include(TEMPLATEPATH."/sidebar_left.php");?>

       			<div id="content" class="content_index clearfix">
            	
                <h1 class="cat_head" ><span><?php the_title(); ?></span></h1>   
                <?php if ( get_option( 'ptthemes_breadcrumbs' )) {  ?>
                <div class="breadcrumb clearfix">
                <?php yoast_breadcrumb('','');  ?>
                </div>
            <?php } ?>
            
            
        <div id="post-<?php the_ID(); ?>" >
      <div class="arclist clearfix">
        <ul>
          <?php query_posts('showposts=60'); ?>
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <li>
            <div class="archives-time">
              <?php the_time('M j Y') ?>
            </div>
            <a href="<?php the_permalink() ?>">
            <?php the_title(); ?>
            </a> - <?php echo $post->comment_count ?> </li>
          <?php endwhile; endif; ?>
        </ul>
      </div>
    </div>
      <!--/arclist -->
   
       </div> <!-- content-in #end -->
        
        
        <?php get_sidebar(); ?>
		  

<?php get_footer(); ?>