<div id="sidebar">
 <?php include (TEMPLATEPATH . "/ads.php"); ?>
<ul>
 <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(1) ) : else : ?>
<?php /* Menu for subpages of current page (copied from K2 theme) */
    global $notfound;
    if (is_page() and ($notfound != '1')) {
        $current_page = $post->ID;
        while($current_page) {
            $page_query = $wpdb->get_row("SELECT ID, post_title, post_status, post_parent FROM $wpdb->posts WHERE ID = '$current_page'");
            $current_page = $page_query->post_parent;
        }
        $parent_id = $page_query->ID;
        $parent_title = $page_query->post_title;

        // if ($wpdb->get_results("SELECT * FROM $wpdb->posts WHERE post_parent = '$parent_id' AND post_status != 'attachment'")) {
        if ($wpdb->get_results("SELECT * FROM $wpdb->posts WHERE post_parent = '$parent_id' AND post_type != 'attachment'")) {
    ?>
<?php } } ?>
  <li>
    <h2 class="sidebartitle">
      <?php _e('Most Commented'); ?>
    </h2>
    <ul>
     <?php 
	$result = $wpdb->get_results("SELECT comment_count,ID,post_title,post_author FROM $wpdb->posts ORDER BY comment_count DESC LIMIT 0 , 4");
	foreach ($result as $topten) {
	$postid = $topten->ID;
	$title = $topten->post_title; 
	$commentcount = $topten->comment_count;
	if ($commentcount != 0) {
	?>
 		 <li><a href="<?php echo get_permalink($postid); ?>"><?php echo $title; ?> (<?php echo $commentcount; ?>)</a> </li>
	<?php } } ?>
    </ul>
  </li>
	<li>
    <h2 class="sidebartitle">
      <?php _e('Pages'); ?>
    </h2>
    <ul>
   	   <li class="<?php if (is_home()) { echo "current_page_item"; } ?>"><a href="<?php echo get_settings('home'); ?>">Home</a></li>		
      <?php wp_list_pages('depth=1&sort_column=menu_order&title_li=' . ('') . '' ); ?>
    </ul>
  </li>
  <li>
    <h2 class="sidebartitle">
      <?php _e('Archives'); ?>
    </h2>
    <ul>
      <?php wp_get_archives('type=monthly'); ?>
    </ul>
  </li>
  <?php endif; ?>
</ul>

 </div>
