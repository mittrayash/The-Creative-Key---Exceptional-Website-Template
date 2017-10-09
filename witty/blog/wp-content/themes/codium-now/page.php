<?php get_header() ?>
<div id="container">
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
				        <div style="display:inline" itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="" itemprop="url"><span itemprop="title"><?php echo the_title(); ?></span></a></div>
				    </li>
				</ul>
			</div>
		</div>
		<div class="dp100 entry-content">
			<?php the_post() ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class() ?>>
				<?php the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>'); ?>
                <div class="hr"></div>
				<?php the_content() ?>
				<?php wp_link_pages("\t\t\t\t\t<div class='page-link'>".__('Pages: ', 'codium-now'), "</div>\n", 'number'); ?>
				<div class="clear"></div>
				<div class="entry-meta">
				<?php edit_post_link(__('Edit', 'codium-now'), "\n\t\t\t\t\t<span class=\"edit-link\">", "</span>"); ?>
            </div>
                </div>
			<!-- .post -->
			<?php comments_template(); ?>
		</div>
	</div>
	<!-- #content -->
</div>
<!-- #container -->
<?php get_sidebar(); ?>
<?php get_footer() ?>