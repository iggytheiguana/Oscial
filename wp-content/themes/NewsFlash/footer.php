  			</div>
        </div>
 	</div> <!-- wrapper #end -->
  
  
  
  <div id="footer">
  	  
           	<div class="fl"><p class="copy">&copy; <?php the_time('Y'); ?> <?php bloginfo(); ?>  All rights reserved.</p>
           <?php if ( get_option('ptthemes_footerpages') <> "" ) { ?>
                    <ul class="fnav">
                    <?php wp_list_pages('title_li=&depth=0&include=' . get_option('ptthemes_footerpages') . '&sort_column=menu_order'); ?>
                    </ul>
		<?php } ?> </div>
            
            <p class="fr"><span class="designby">NewsFlash Theme by </span>  
            <span class="templatic"> <a href="http://templatic.com" title="templatic.com"><strong>Premium Wordpress Themes</strong></a>  </span></p>	
          
  </div> <!-- footer #end -->
 
 
  <?php wp_footer(); ?><?php if ( get_option('ptthemes_google_analytics') <> "" ) { echo stripslashes(get_option('ptthemes_google_analytics')); } ?>
 </body>
</html>
		