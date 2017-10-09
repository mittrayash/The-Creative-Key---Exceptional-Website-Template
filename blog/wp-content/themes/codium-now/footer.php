</div>
<div id="footer">
<div id="wrapperfooter" class="container">
<div id="" class="entry-content">
    <?php if ( is_active_sidebar( 'widgetfooterleft' ) OR is_active_sidebar( 'widgetfootercenter' ) OR is_active_sidebar( 'widgetfooterright' ) ) { ?>
		    <?php if ( is_active_sidebar( 'widgetfooterleft' ) ) : ?>
            <div class="one-third column">
                <?php dynamic_sidebar( 'widgetfooterleft' ); ?>
            </div>
            <?php endif; // end widgetfooterleft  ?>
            <?php if ( is_active_sidebar( 'widgetfootercenter' ) ) : ?>
            <div class="one-third column">
                <?php dynamic_sidebar( 'widgetfootercenter' ); ?>
            </div>
            <?php endif; // end widgetfootercenter  ?>
            <?php if ( is_active_sidebar( 'widgetfooterright' ) ) : ?>
            <div class="one-third column">
                <?php dynamic_sidebar( 'widgetfooterright' ); ?>
            </div>
            <?php endif; // end widgetfooterright  ?>
    
<?php }; // end widgetfooterright  ?>
<div class="clear"></div>
<?php wp_footer() ?>
</div> 
</div> 
</div>
</body>
</html>