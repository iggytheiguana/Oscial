<?php
/*
Template Name: Home Page
*/
?>
<?php get_header(); ?>
<script src="<?php bloginfo('template_directory'); ?>/library/js/jquery_002.js" type="text/javascript"></script>
<script type="text/javascript">
$(window).load(function() {
	$('#slider').nivoSlider({
	  effect:'random', //Specify sets like: 'fold,fade,sliceDown'
		slices:15,
		animSpeed:500,
		pauseTime:3000,
		startSlide:0, //Set starting Slide (0 index)
		directionNav:true, //Next and Prev
		directionNavHide:true, //Only show on hover
		controlNav:true, //1,2,3...
		controlNavThumbs:false, //Use thumbnails for Control Nav
        controlNavThumbsFromRel:false, //Use image rel for thumbs
		controlNavThumbsSearch: '.jpg', //Replace this with...
		controlNavThumbsReplace: '_thumb.jpg', //...this in thumb Image src
		keyboardNav:false, //Use left and right arrows
		pauseOnHover:true, //Stop animation while hovering
		manualAdvance:false, //Force manual transitions
		captionOpacity:0.8, //Universal caption opacity
		beforeChange: function(){},
		afterChange: function(){},
		slideshowEnd: function(){} //Triggers after all slides have been shown
	});
});
</script>
               	
                    
                    <div id="content" class="index_content">
                    	 <?php dynamic_sidebar(1);  ?>
                         
                         
                         <div class="index_column fl">
                          <?php dynamic_sidebar(2);  ?>
                         </div>
                         
                         <div class="index_column fr">
                         	<?php dynamic_sidebar(3);  ?>
                         </div>
                         
                         
                         
                         <div class="single_columns">
                         	<?php dynamic_sidebar(4);  ?>
                         </div>
                         
                         
                         
                        </div> <!-- content #end -->
          
     
    
  <?php get_sidebar(); ?>
 
<?php  get_footer(); ?>