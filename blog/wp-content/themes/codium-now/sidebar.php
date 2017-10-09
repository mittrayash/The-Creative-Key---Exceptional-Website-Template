<div id="primary" class="sidebar five columns entry-content">

	<ul class="">
		<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebarright') ) : // begin primary sidebar widgets ?>	
        <h3 class="widgettitlesidebar"><?php _e( 'Search', 'codium-now' ); ?></h3>
            <form role="search" method="get" class="search-form" action="/">
				<label>
					<span class="screen-reader-text"><?php _e( 'Search for:', 'codium-now' ); ?></span>
					<input type="search" class="search-field" placeholder="<?php _e( 'Search &hellip;', 'codium-now' ); ?>" value="" name="s" title="Search for:" />
				</label>
				<input type="submit" class="search-submit" value="Search" />
			</form>
        <div class="clear"></div>
        
        <h3 class="widgettitlesidebar"><?php _e( 'Recent Posts', 'codium-now' ); ?></h3>
            <ul>
            <?php
                $args = array( 'numberposts' => '5' );
                $recent_posts = wp_get_recent_posts( $args );
                foreach( $recent_posts as $recent ){
                    echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
                }
            ?>
            </ul>
        
        <h3 class="widgettitlesidebar"><?php _e( 'Archives', 'codium-now' ); ?></h3>
            <ul>
            <?php wp_get_archives(); ?> 
	       </ul>
        <div class="clear"></div>
		
        <h3 class="widgettitlesidebar"><?php _e( 'Meta', 'codium-now' ); ?></h3>
            <ul>
            <?php wp_register(); ?>
            <li><?php wp_loginout(); ?></li>
            <?php wp_meta(); ?>
            </ul>
        <div class="clear"></div>
        
        <?php endif; // end primary sidebar widgets  ?>

    </ul>
</div>
<!-- #primary .sidebar -->