<?php get_header(); ?>

 <div id="content">
  <!--the loop-->

  <h1>Search Results</h1>
  
  
  <div class="recent_posts">
   <?php if (have_posts()) : $count = 0; ?>
  <?php while (have_posts()) : the_post(); $postcount++; ?>
  <!--post title as a link-->
  <div class="posts">
     
   
  
      <p class="date"><?php the_time('j M, Y') ?> [ <?php comments_popup_link('(0) Comment', '(1) Comment', '(%) Comment'); ?> ]   </p>
                      
        <h3 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"> <?php the_title(); ?> </a> </h3>
                     
            <p class="author" > Written by <?php the_author_posts_link(); ?> </p>
            
                      <?php the_excerpt(); ?>

  				<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>" class="morelink"  > Continue reading this article&hellip;  </a>
  
    
      <!--Rateing-->
    <?php if(function_exists('the_ratings')) { the_ratings(); } ?>
    <!--Rateing end-->
  
  </div>
  
  <?php $count++; if ($count == 2) { $count = 0; ?>
<hr /><?php }  ?>

  <?php endwhile; ?>
  
  </div>
   
  
  <!-- Prev/Next page navigation -->
  <?php if(function_exists('wp_pagenavi')) { ?>
  <div class="wp-pagenavi clearfix">
    <?php wp_pagenavi();  ?>
  </div>
  <?php } 
 
 else {?>
 
  <div class="page-nav navi_spacer">
    <div class="nav-previous">
      <?php previous_posts_link('Previous Page') ?>
    </div>
    <div class="nav-next">
      <?php next_posts_link('Next Page') ?>
    </div>
  </div>
  <? } ?>
    

  <?php else : ?>
 		
  			<?php include (TEMPLATEPATH . "/nopost.php"); ?> <!-- nopost -->
            
  <?php endif; ?>
  <!--search.php end-->
</div>


<?php get_sidebar(); ?> <!--include sidebar-->
<?php get_footer(); ?> <!--include footer-->
