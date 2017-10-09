<?php get_header() ?>
<div id="containerlarge">
	<div id="content" class="eleven columns">
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
					<li class="divider">/</li>
					<li>
						<div style="display:inline" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
							<a href="<?php echo get_permalink($post->post_parent) ?>" itemprop="url">
								<span itemprop="title">
									<div class=""><?php echo get_the_title($post->post_parent) ?></div>
								</span>
							</a>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<div class="dp100">
			<?php the_post() ?>
			<h1 class="entry-title"><a href="<?php echo get_permalink($post->post_parent) ?>" rev="attachment"><?php _e('Attachment : ', 'codium-now') ?><?php echo get_the_title($post->post_parent) ?></a></h1>
			<div class="hr"></div>
			<div class="entry-content">
				<div id="post-<?php the_ID(); ?>" <?php post_class() ?>>
					<?php the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>'); ?>
                    <p style="text-align: center;"><a href="<?php echo wp_get_attachment_url($post->ID); ?>"><?php echo wp_get_attachment_image( $post->ID, 'large' ); ?></a></p>
					<?php wp_link_pages("\t\t\t\t\t<div class='page-link'>".__('Pages: ', 'codium-now'), "</div>\n", 'number'); ?>
					<span class="meta-nav-left"></span> <?php _e('Back to post : ', 'codium-now') ?><a href="<?php echo get_permalink($post->post_parent) ?>" rev="attachment"><?php echo get_the_title($post->post_parent) ?></a>	
					<div class="hr"></div>
                    <div class="dp100">
						<div class="dp50">
							<div class="postthumbimg-ds">
								<?php previous_image_link('thumbnail') ?>
							</div>
						</div>
						<div class="dp50">
							<div class="postthumbimg-dsr">
								<?php next_image_link('thumbnail') ?>
							</div>
						</div>
					</div>
					<div class="clear"></div>
					<div class="entry-meta">
						<?php codium_now_posted_on(); ?>
						<?php codium_now_posted_in(); ?>	
						<?php edit_post_link(__('Edit', 'codium-now'), "\n\t\t\t\t\t<span class=\"edit-link\">", "</span>"); ?>
					</div>
					<div class="hr"></div>
				</div>
				<!-- .post -->
				<?php comments_template(); ?>
			</div>
		</div>
	</div>
	<!-- #content -->
</div>
<!-- #container -->
<?php get_sidebar(); ?>
<?php get_footer() ?>