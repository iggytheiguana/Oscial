<?php
global $options;
foreach ($options as $value) {
		global $$value['id'];
        if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); } }
?>
<div class="advt clearfix"><a href="<?php echo "$pt_ad_one_link"; ?>"><img src="<?php echo "$pt_ad_one"; ?>" alt="" border="0"    /></a> </div>

 