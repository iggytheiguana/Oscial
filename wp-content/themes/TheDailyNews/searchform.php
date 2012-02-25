
<form method="get" id="searchform" action="<?php bloginfo('home'); ?>">
  <input type="text" value="Search here..." name="s" class="searchbg_textield" onfocus="if (this.value == 'Search here...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search here...';}"/>
  <input type="image" class="search" src="<?php bloginfo('template_url'); ?>/images/b_go.png" alt="Submit button" />
</form>
