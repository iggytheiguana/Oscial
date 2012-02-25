
<p class="clear spcaer"><a href="<?php bloginfo('rss2_url'); ?>" class="i_rss"><strong>Entries (RSS)</strong></a></p>
<p class="i_mail "><strong>or Subscribe Via Email </strong></p>
<div class="subscribetextbg">
  <form action="http://www.feedburner.com/fb/a/emailverify" method="post" target="popupwindow" onsubmit="window.open('http://www.feedburner.com/fb/a/emailverifySubmit?feedId=<?php echo $_feedburner_id; ?>', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
    <input name="email" type="text" value="Your Email Address" class="subscribe_textield" onFocus="if (this.value == 'Your Email Address') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Your Email Address';}" />
    <br />
    <input type="hidden" value="http://feeds.feedburner.com/~e?ffid=<?php echo $_feedburner_id; ?>" name="url"/>
    <input type="hidden" value="<?php bloginfo('name'); ?>" name="title"/>
    <input type="hidden" name="loc" value="en_US"/>
    <input type="image" src="<?php bloginfo('template_url'); ?>/images/b_go2.png"  border="0" value="Subscribe" class="subscribe" />
  </form>
</div>
