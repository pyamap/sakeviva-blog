<div id="search">
	<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/"><label class="hidden" for="s"><?php _e('', 'kubrick'); ?></label>
	    <input type="text" value="<?php the_search_query(); ?>"  name="s" id="s" />
	    <input type="image" src="<?php bloginfo('template_directory'); ?>/images/btn.gif" alt="検索" id="searchsubmit"  value="<?php _e('Search', 'kubrick'); ?>" />
    </form>
</div>