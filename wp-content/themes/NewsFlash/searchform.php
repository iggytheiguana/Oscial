<div class="searchform">
  <form method="get" id="searchform" action="<?php bloginfo('home'); ?>">
    <input type="text" value="<?php echo get_option('ptthemes_search_name'); ?>" name="s" id="s" class="s" onfocus="if (this.value == '<?php echo get_option('ptthemes_search_name'); ?>') {this.value = '';}" onblur="if (this.value == '') {this.value = '<?php echo get_option('ptthemes_search_name'); ?>';}" />
    <input type="image" class="search_btn" src="<?php bloginfo('template_url'); ?>/images/search_icon.png" alt="Submit button" />
  </form>
</div>
