<?php
require_once( dirname(__FILE__) . '../../../../wp-config.php');
require_once( dirname(__FILE__) . '/functions.php');
header("Content-type: text/css");

global $options;

foreach ($options as $value) {
    if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); } }
?>
/*Everything should be below this*/
@import url("css/color-<?php echo $pt_body_color; ?>.css");

body{
font: <?php echo $pt_body_font_size; ?>px <?php echo $pt_body_font_family; ?>;
}

<?php
//BLOG ALIGNMENT
if ( 'center' == $pt_blog_alignment) //IF center
{ ?>

<?php } elseif ( 'left' == $pt_blog_alignment) //IF RIGHT 
{ ?>
#page {  float:left;  }
#footer { clear:both; margin:0;  } 
   
<?php } elseif ( 'right' == $pt_blog_alignment) //IF RIGHT 
{ ?>
#page {  float:right;  }
#footer { clear:both; margin:0;  } 
<?php
}
?>


<?php
 //SIDEBAR LEFT / RIGHT?
if ( 'left' == $pt_sidebar_position) //IF Left
{ ?>

#sidebar {float:left; } 
#content {float:right;}

#wrapper { background:url(images/sidebarbg2.png) repeat-y left top;  }

<?php } elseif ( 'right' == $pt_sidebar_position ) //IF RIGHT 
{ ?>
#sidebar {float:right; } 
#content {float:left;}
#wrapper { background:url(images/sidebarbg.png) repeat-y right top;  }

<?php
}
?> 