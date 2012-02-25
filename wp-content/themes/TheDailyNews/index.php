<?php get_header(); ?>

<div id="content">


<?php $top_query = new WP_Query('showposts=1'); ?>
<?php while($top_query->have_posts()) : $top_query->the_post();
$do_not_duplicate = $post->ID; ?>
  <div class="posts clearfix" >
    <p class="date">
      <?php the_time('j M, Y') ?>
      [
      <?php comments_popup_link('(0) Comment', '(1) Comment', '(%) Comment'); ?>
      ] </p>
    <h3 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
      <?php the_title(); ?>
      </a> </h3>
    <p class="author" > Written by
      <?php the_author_posts_link(); ?>
    </p>
    <?php the_content('continue'); ?>
  </div>
<?php endwhile; ?>



  <div class="recent_posts">
<?php $count = 0; $top_query = new WP_Query('showposts=6&offset=1'); ?>
<?php while($top_query->have_posts()) : $top_query->the_post();
$do_not_duplicate = $post->ID; $postcount++; ?>
 
    <div class="posts">
      <p class="date">
        <?php the_time('j M, Y') ?>
        [
        <?php comments_popup_link('(0) Comment', '(1) Comment', '(%) Comment'); ?>
        ] </p>
      <h3 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
        <?php the_title(); ?>
        </a> </h3>
      <p class="author" > Written by
        <?php the_author_posts_link(); ?>
      </p>
      <?php content('50'); ?>
      <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>" class="morelink" > Continue reading this article&hellip; </a>
      <!--Rateing-->
      <?php if(function_exists('the_ratings')) { the_ratings(); } ?>
      <!--Rateing end-->
    </div>
<?php $count++; if ($count == 2) { $count = 0; ?>
<hr /><?php }  ?>

<?php endwhile; ?>
</div>
  <!-- recent post  #end -->
</div>
<!-- content #end -->
<?php get_sidebar(); ?>
<!--include sidebar-->
<?php get_footer(); ?>
<!--include footer-->
