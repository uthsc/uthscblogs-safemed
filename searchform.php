<form role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>">
	<div class="row collapse">
		<div class="large-8 medium-9 columns">
			<input type="text" class="radius" value="" name="s" id="s" placeholder="<?php esc_attr_e('Search', 'reverie'); ?>">
		</div>
		<div class="large-4 medium-3 hide-for-small columns">
			<input type="submit" id="searchsubmit" value="<?php esc_attr_e('Search', 'reverie'); ?>" class="button postfix" >
		</div>
	</div>
</form>