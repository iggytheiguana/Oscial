<?php $thumb = '';
	$width = get_option('thesource_thumbnail_width_usual');
	$height = get_option('thesource_thumbnail_height_usual');
	$classtext = 'thumb alignleft';
	$titletext = get_the_title();
	
	$thumbnail = get_thumbnail($width,$height,$classtext,$titletext,$titletext);
	$thumb = $thumbnail["thumb"]; ?>

<div class="entry clearfix" >
	<h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	
	<div class="entry-content clearfix">
		<?php if ($thumb <> '' && get_option('thesource_thumbnails_index') == 'on') { ?>
			<a href="<?php the_permalink(); ?>">
				<?php print_thumbnail($thumb, $thumbnail["use_timthumb"], $titletext , $width, $height, $classtext); ?>
			</a>
			
			<?php if (get_option('thesource_postinfo1') <> '') { ?>
				<?php if (in_array('date', get_option('thesource_postinfo1'))) { ?>
					<p class="date"><span><?php the_time(get_option('thesource_date_format')) ?></span></p>
				<?php }; ?>
			<?php }; ?>
		<?php }; ?>
		
		<?php if (get_option('thesource_blog_style') == 'on') the_content(""); else { ?>
			<p><?php truncate_post(365); ?></p>
		<?php }; ?>
		
	</div> <!-- end .entry-content -->
	
	<div class="post-meta clearfix">
		<?php include(TEMPLATEPATH . '/includes/postinfo.php'); ?>
		
		<a href="<?php the_permalink(); ?>" class="readmore"><span><?php _e('Read More','TheSource'); ?></span></a>
	</div>
</div> <!-- end .entry -->