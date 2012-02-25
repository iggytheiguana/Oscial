<?php get_header(); ?>

<div id="content">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <!--post title-->
  <div class="posts">
  
    <p class="date"><?php the_time('j M, Y') ?>     </p>
                      
        <h3 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"> <?php the_title(); ?> </a> </h3>
        
         <p class="author" > Written by <?php the_author_posts_link(); ?> </p>
     
   
      <?php the_content('continue'); ?>
      <!--Post Meta-->
    
     
     <!--Rateing-->
    <?php if(function_exists('the_ratings')) { the_ratings(); } ?>
    <!--Rateing end-->
      
      </div>
      
    <!--include comments template-->
    <?php comments_template(); ?>
    
    <!--do not delete-->
    <?php endwhile; else: ?>
				
                <?php include (TEMPLATEPATH . "/nopost.php"); ?> <!-- nopost -->
                
    <?php endif; ?>
    <!--single.php end-->

</div>
<!--post end -->

<?php get_sidebar(); ?> <!--include sidebar-->
<?php get_footer(); ?> <!--include footer-->