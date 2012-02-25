<?php get_header(); ?>
<!--page.php-->

 <div id="content">
  <!--loop-->
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <!--post title-->
  <h1   id="post-<?php the_ID(); ?>">
    <?php the_title(); ?>
  </h1>
  <!--post with more link -->
  <div class="clear">
    <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
  </div>
  <!--if you paginate pages-->
  <?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
  <!--end of post and end of loop-->
  <?php endwhile; endif; ?>
</div>
<!--page.php end-->

<?php get_sidebar(); ?> <!--include sidebar-->
<?php get_footer(); ?> <!--include footer-->