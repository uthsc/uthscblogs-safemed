<form role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>"
      xmlns="http://www.w3.org/1999/html">
    <input type="text" value="" name="s" id="s" placeholder="<?php esc_attr_e('Search', 'reverie'); ?>">
    <input type="submit" id="searchsubmit" value="&#xf002;" class="button postfix fa">
</form>