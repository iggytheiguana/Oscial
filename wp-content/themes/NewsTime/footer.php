 	</div> <!-- wrapper #end -->
  
  
  <div id="bottom" class="clearfix">
  		
      <div class="first_col">
      		<?php dynamic_sidebar(8);  ?>
      </div>
      
      <div class="second_col">
      		<?php dynamic_sidebar(9);  ?>
      </div>
      
      <div class="third_col">
      		<?php dynamic_sidebar(10);  ?>
      </div>
      
      <div class="four_col">
      		<?php dynamic_sidebar(11);  ?>
      </div>
  
  </div>  
  
  
  <div id="footer" class="clearfix">
  	  
           <p class="copy">&copy; <?php the_time('Y'); ?> <?php bloginfo(); ?>  All rights reserved.</p>
            <p class="fr"><span class="designby">NewsTime Theme by </span>  
            <span class="templatic"> <a href="http://templatic.com" title="templatic.com"><strong>Premium Wordpress Themes</strong></a>  </span></p>	
          
  </div> <!-- footer #end -->
  

<script src="<?php bloginfo('template_directory'); ?>/library/js/jquery.helper.js" type="text/javascript" ></script>


  <?php wp_footer(); ?><?php if ( get_option('ptthemes_google_analytics') <> "" ) { echo stripslashes(get_option('ptthemes_google_analytics')); } ?>
 </body>
</html>
		