<?php get_header('404') ?>
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
				</ul>
			</div>
		</div>
		<div id="post-0" class="post error404 not-found">
			<div class="entry-content">
                <div class="dp100">
					<h1 class="entry-title"><?php _e( 'Oups...', 'codium-now' ); ?></h1>
				<div class="hr"></div>
				<div class="entry-content">
					<p><?php _e( 'Apologies, but the page you requested could not be found. Perhaps searching will help.', 'codium-now' ); ?></p>
						<?php get_search_form(); ?>
				</div>
				</div>
			</div>
		</div>
		<!-- #post-0 -->
	</div>
	<!-- #content -->
</div>
<!-- #container -->
<script type="text/javascript">
	// focus on search field after it has loaded
	document.getElementById('s') && document.getElementById('s').focus();
</script>
<?php get_sidebar(); ?>
<?php get_footer() ?>