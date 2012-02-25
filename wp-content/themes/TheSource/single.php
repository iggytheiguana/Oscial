<?php the_post(); ?>

<?php get_header(); ?>
	<?php if (get_option('thesource_integration_single_top') <> '' && get_option('thesource_integrate_singletop_enable') == 'on') echo(get_option('thesource_integration_single_top')); ?>	
	
	<div id="main-content-wrap">
		<div id="main-content" class="clearfix">
			<?php include(TEMPLATEPATH . '/includes/breadcrumb.php'); ?>
			<div id="top-shadow"></div>
				
			<div id="recent-posts" class="clearfix">
				<div class="entry post clearfix">
					<h1 class="title"><?php the_title(); ?></h1>
					
					<?php include(TEMPLATEPATH . '/includes/postinfo.php'); ?>
					
					<div class="entry-content">
						<?php if (get_option('thesource_thumbnails') == 'on') { ?>
						
							<?php $width = get_option('thesource_thumbnail_width_posts');
								  $height = get_option('thesource_thumbnail_height_posts');
								  $classtext = 'thumb alignleft';
								  $titletext = get_the_title();
							
								  $thumbnail = get_thumbnail($width,$height,$classtext,$titletext,$titletext);
								  $thumb = $thumbnail["thumb"]; ?>
							
							<?php if($thumb <> '') { ?>
								<?php print_thumbnail($thumb, $thumbnail["use_timthumb"], $titletext , $width, $height, $classtext); ?>
								<?php if (get_option('thesource_postinfo2') <> '') { ?>
									<?php if (in_array('date', get_option('thesource_postinfo2'))) { ?>
										<p class="date"><span><?php the_time(get_option('thesource_date_format')) ?></span></p>	
									<?php }; ?>
								<?php }; ?>
							<?php }; ?>
								
						<?php }; ?>
				
						<?php the_content(); ?>
						<?php wp_link_pages(array('before' => '<p><strong>'.__('Pages','TheSource').':</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
						<?php edit_post_link(__('Edit this page','TheSource')); ?>
					</div> <!-- end .entry-content -->
					
				</div> <!-- end .entry -->
				
				<?php if (get_option('thesource_468_enable') == 'on') { ?>
					<?php if(get_option('thesource_468_adsense') <> '') echo(get_option('thesource_468_adsense'));
					else { ?>
						<a href="<?php echo(get_option('thesource_468_url')); ?>"><img src="<?php echo(get_option('thesource_468_image')); ?>" alt="468 ad" class="foursixeight" /></a>
					<?php } ?>	
				<?php } ?>
				
				<?php if (get_option('thesource_show_postcomments') == 'on') comments_template('', true); ?>
				
			</div> <!-- end #recent-posts -->

		<?php get_sidebar(); ?>
		
<?php get_footer(); ?>
