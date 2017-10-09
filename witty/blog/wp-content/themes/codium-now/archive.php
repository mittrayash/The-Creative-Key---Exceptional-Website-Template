<?php get_header(); ?>
<div id="container">
	<div id="content" class="">
		<div class="item">
			<div id="top" class="dp100 breadcrumbs-one entrycontent">
				<ul id="breadcrumbs-one">
					<li>
						<div style="display:inline" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
							<a href="<?php echo esc_url(home_url( '/' )); ?>" itemprop="url">
								<div class="homebutton"><span itemprop="title"><?php _e('Home', 'codium-now') ?></span></div>
							</a>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<div class="dp100">
			<h1 class="page-title">
				<?php if ( is_day() ) : ?>
				<?php printf( __( 'Daily Archives: <span>%s</span>', 'codium-now' ), get_the_date() ); ?>
				<?php elseif ( is_month() ) : ?>
				<?php printf( __( 'Monthly Archives: <span>%s</span>', 'codium-now' ), get_the_date('F Y') ); ?>
				<?php elseif ( is_year() ) : ?>
				<?php printf( __( 'Yearly Archives: <span>%s</span>', 'codium-now' ), get_the_date('Y') ); ?>
				<?php else : ?>
				<?php _e( 'Blog Archives', 'codium-now' ); ?>
				<?php endif; ?>
			</h1>
			<div class="hr"></div>
		</div>
		<?php if (have_posts()) : ?>  
		<?php while (have_posts()) : the_post(); ?>
		<!-- Begin post -->
		<div class="one-third column posthome">
	       <div id="post-<?php the_ID() ?>" <?php post_class('dp100') ?>>
               
               <?php if(has_post_thumbnail()){ ?> 
               <div id="effect-1" class="effects clearfix">
                    <div class="img">
                        <?php echo get_the_post_thumbnail($post->ID); ?>
                        <div class="overlay">
                            <a href="<?php the_permalink(); ?>" class="expand"></a>
                        </div>
                    </div>
                </div>
               <?php } else {?>
               <div id="effect-1" class="effects clearfix">
                    <div class="img nothumbnail">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/blank.jpg" width="100%" />
                    </div>
                </div>
               <?php } ?>
               <?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>'); ?>
               <div class="clear"></div>
               <div class="entry-content">
			    <p><?php echo codium_now_cleanCut(get_the_excerpt(), 140); ?></p>
				<div class="dp40">
                    <div class="entry-meta">
                <a href="<?php the_permalink() ?>" ><?php _e('read more ', 'codium-now') ?><span class="meta-nav"></span></a>
                    </div>
			    </div>
               <div class="dp60">
                   <div class="entry-meta alignright">
					<?php edit_post_link(__('Edit', 'codium-now'), "\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t<span class=\"meta-sep\">|</span>\n"); ?>
                    <span class="entry-date"><abbr class="published" title="<?php the_time('Y-M-D\TH:i:sO'); ?>"><?php the_date( __( 'n-d-Y', 'codium-now' ) ) ?></abbr></span>
                    <span class="meta-sep">|</span>   
					<span class="comments-link"><?php comments_popup_link( '', __('1', 'codium-now'), '%') ?></span>
				</div>
			   </div>
                </div>   
		  </div>
        </div>    
		<!-- End post -->
		<?php endwhile; endif ?>
        <div class="clear"></div>
		<div class="center">
			<?php if(function_exists('wp_pagenavi')) { 
				wp_pagenavi();
				} else {?>
			<div class="entry-content navigation">
				<p><?php posts_nav_link(); ?></p>
			</div>
			<?php } ?>
		</div>
	</div>
	<!-- #content -->
</div>
<!-- #container -->
<?php get_footer() ?>