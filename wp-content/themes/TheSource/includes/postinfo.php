<?php if (!is_single() && (get_option('thesource_postinfo1') <> '')) { ?>
	<?php if ( (!(in_array('author', get_option('thesource_postinfo1'))) && !(in_array('categories', get_option('thesource_postinfo1'))) && !(in_array('comments', get_option('thesource_postinfo1')))) == FALSE) { ?>
		<p class="meta-info"><?php _e('Posted','TheSource'); ?> <?php if (in_array('author', get_option('thesource_postinfo1'))) { ?> <?php _e('by','TheSource'); ?> <?php the_author_posts_link(); } ?> <?php if (in_array('categories', get_option('thesource_postinfo1'))) { ?> <?php _e(' in','TheSource'); ?> <?php the_category(', ') ?><?php }; ?><?php if (in_array('comments', get_option('thesource_postinfo1'))) { ?> | <?php comments_popup_link(__('0 comments','TheSource'), __('1 comment','TheSource'), '% '.__('comments','TheSource')); ?><?php }; ?></p>
	<?php }; ?>
<?php } elseif (is_single() && (get_option('thesource_postinfo2') <> '')) { ?>
	<?php if ( (!(in_array('author', get_option('thesource_postinfo2'))) && !(in_array('categories', get_option('thesource_postinfo2'))) && !(in_array('comments', get_option('thesource_postinfo2')))) == FALSE) { ?>
		<div class="post-meta clearfix">
			<p class="meta-info"><?php _e('Posted','TheSource'); ?> <?php if (in_array('author', get_option('thesource_postinfo2'))) { ?> <?php _e('by','TheSource'); ?> <?php the_author_posts_link(); ?><?php }; ?><?php if (in_array('categories', get_option('thesource_postinfo2'))) { ?> <?php _e('in','TheSource'); ?> <?php the_category(', ') ?><?php }; ?><?php if (in_array('comments', get_option('thesource_postinfo2'))) { ?> | <?php comments_popup_link(__('0 comments','TheSource'), __('1 comment','TheSource'), '% '.__('comments','TheSource')); ?><?php }; ?></p>
		</div> <!-- end .post-meta -->
	<?php }; ?>
<?php }; ?>