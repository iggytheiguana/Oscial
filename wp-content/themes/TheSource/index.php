<?php if (is_archive()) $post_number = get_option('thesource_archivenum_posts');
if (is_search()) $post_number = get_option('thesource_searchnum_posts');
if (is_tag()) $post_number = get_option('thesource_tagnum_posts');
if (is_category()) $post_number = get_option('thesource_catnum_posts');
if (is_home()) $args=array(
					   'showposts'=>get_option('thesource_homepage_posts'),
					   'paged'=>$paged,
					   'category__not_in' => get_option('thesource_exlcats_recent'),
					); ?>
<?php get_header(); ?>
	
<?php global $query_string; 
if (is_category()) query_posts($query_string . "&showposts=$post_number&paged=$paged&cat=$cat");
elseif (is_home()) query_posts($args);
else query_posts($query_string . "&showposts=$post_number&paged=$paged"); ?>
	
<div id="main-content-wrap">
	<div id="main-content" class="clearfix">
		<?php include(TEMPLATEPATH . '/includes/breadcrumb.php'); ?>
		<div id="top-shadow"></div>
			
		<div id="recent-posts" class="clearfix">	
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php include(TEMPLATEPATH . '/includes/entry.php'); ?>
			<?php endwhile; ?>

				<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); }
					else { ?>
						<?php include(TEMPLATEPATH . '/includes/navigation.php'); ?>
				<?php } ?>

			<?php else : ?>
				<?php include(TEMPLATEPATH . '/includes/no-results.php'); ?>
			<?php endif; wp_reset_query(); ?>		
	
		</div> <!-- end #recent-posts -->

		<?php get_sidebar(); ?>
		
<?php get_footer(); ?>