<?php get_header(); ?>

<div id="content">
  <!--the loop-->
 
  <?php if (have_posts()) : $count = 0; ?>
  <h1>
    <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
    <?php /* If this is a category archive */ if (is_category()) { ?>
    <?php echo single_cat_title(); ?>
    <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
    Archive for
    <?php the_time('F jS, Y'); ?>
    <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
    Archive for
    <?php the_time('F, Y'); ?>
    <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
    Archive for
    <?php the_time('Y'); ?>
    <?php /* If this is a search */ } elseif (is_search()) { ?>
    Search Results
    <?php /* If this is an author archive */ } elseif (is_author()) { ?>
    Author Archive
    <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
      Blog Archives
      <!--do not delete-->
      <?php } ?>
  </h1>
 
 
<div class="recent_posts">
 
  <?php while (have_posts()) : the_post(); $postcount++; ?>
  <!--post title as a link-->
  <div class="posts">
   
   		<p class="date"><?php the_time('j M, Y') ?> [ <?php comments_popup_link('(0) Comment', '(1) Comment', '(%) Comment'); ?> ]   </p>
                      
        <h3 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"> <?php the_title(); ?> </a> </h3>
                     
            <p class="author" > Written by <?php the_author_posts_link(); ?> </p>
            
      <?php content('50'); ?>

  
    
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
      
  <!-- do not delete-->
  <?php else : ?>
 					
					<?php include (TEMPLATEPATH . "/nopost.php"); ?> <!-- nopost -->
                    
                   
                    
  <?php endif; ?>
  <!--archive.php end-->
  
</div>

<?php get_sidebar(); ?> <!--include sidebar-->
<?php get_footer(); ?> <!--include footer-->