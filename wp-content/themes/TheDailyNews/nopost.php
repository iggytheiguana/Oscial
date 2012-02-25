<h3>Sorry, no posts matched your criteria.</h3>
  <p>Please try searching again here...</p>
 
  <p class="clear"><strong>Or, take a look at Archives and Categories</strong></p>
  <div class="scategory">
    <h4>
      <?php _e('Category'); ?>
    </h4>
    <ul>
      <?php wp_list_categories('orderby=name&title_li'); ?>
    </ul>
  </div>
  
  
  
  <div class="archives">
    <h4 class="sidebartitle">
      <?php _e('Archives'); ?>
    </h4>
    <ul>
      <?php wp_get_archives('type=monthly'); ?>
    </ul>
  </div>
