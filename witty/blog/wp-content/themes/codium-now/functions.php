<?php
	/*
	This file is part of codium_now. Hack and customize by henri labarre and based on the marvelous sandbox theme	codium_now is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 2 of the License, or (at your option) any later version.
	
	*/
	
	if ( ! function_exists( 'codium_now_setup' ) ) :
	function codium_now_setup() {
	    
	    // Make theme available for translation
	    // Translations can be filed in the /languages/ directory
	    load_theme_textdomain( 'codium-now', get_template_directory() . '/languages' );
	
	    // add_editor_style support
	    add_editor_style( 'editor-style.css' );
	   
	    //feed
		add_theme_support('automatic-feed-links');
		
		add_theme_support( 'html5', array(
			'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
		) );
	    
		register_nav_menus( array(
			'primary'   => __( 'Top primary menu', 'codium-now' ),
		) );
	
	    // Post thumbnails support for post
		add_theme_support( 'post-thumbnails', array( 'post' ) ); // Add it for posts
		set_post_thumbnail_size( 450, 250, true ); // Normal post thumbnails
	
	    // This theme allows users to set a custom background
		add_theme_support( 'custom-background' );
	    
	    // This theme allows users to set a custom header image
	    //custom header for 3.4 and compatability for prior version
	
		$args = array(
			'width'               => 1280,
			'height'              => 250,
			'default-image'       => '',
			'default-text-color'  => '444',
			'wp-head-callback'    => 'codium_now_header_style',
			'admin-head-callback' => 'codium_now_admin_header_style',
	        
		);
	
		$args = apply_filters( 'codium_now_custom_header', $args );
	
	    add_theme_support( 'custom-header', $args );
	
	
	}
	endif; // codium_now_setup
	add_action( 'after_setup_theme', 'codium_now_setup' );
	
    add_theme_support( 'title-tag' ); 

    if ( ! function_exists( '_wp_render_title_tag' ) ) {
        function theme_slug_render_title() {
    ?>
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <?php
        }
        add_action( 'wp_head', 'theme_slug_render_title' );
    }

	if ( ! function_exists( 'codium_now_scripts_styles' ) ) :
	function codium_now_scripts_styles() {
	
	    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
			wp_enqueue_script( 'comment-reply' );
	
		// Loads our main stylesheet.
		wp_enqueue_style( 'codium_now-style', get_stylesheet_uri(), array(), '2014-11-22' );
	    wp_enqueue_script( 'codium_now-script', get_template_directory_uri() . '/js/menu.js', array( 'jquery' ), '20140630', true );
	
	}
	endif; // codium_now_scripts_styles
	add_action( 'wp_enqueue_scripts', 'codium_now_scripts_styles' );
	
	
	if ( ! function_exists( 'codium_now_header_style' ) ) :
	// gets included in the site header
	function codium_now_header_style() {
	    if (get_header_image() != ''){
	    ?>
<style type="text/css">
	div#wrapperimage {
	background: url(<?php header_image(); ?>); background-size:cover; height :250px;
	}
    @media only screen and (min-width: 888px) and (max-width: 1220px) {
        div#wrapperimage {
            background: url(<?php header_image(); ?>); background-size:cover; height :150px; 
        }
    }
    @media only screen and (max-width: 600px) {
        div#wrapperimage {
            background: url(<?php header_image(); ?>); background-size:cover; height :100px; 
        }
    }
    @media only screen and (min-width: 600px) and (max-width: 887px) {
        div#wrapperimage {
            background: url(<?php header_image(); ?>); background-size:cover; height :100px; 
        }
    }
</style>
<?php }
	if ( 'blank' == get_header_textcolor() ) { ?>
<style type="text/css">
	h1.blogtitle,.description,.blogtitle { display: none; }
</style>
<?php } else { ?>
<style type="text/css">
	h1.blogtitle a,.blogtitle a,.description,.menu-toggle:before, .search-toggle:before,.site-navigation a { color:#<?php header_textcolor() ?>; }
	.site-navigation a:hover { background:#<?php header_textcolor() ?>; }    
</style>
<?php }
	}
	endif; // codium_now_header_style
	
	if ( ! function_exists( 'codium_now_admin_header_style' ) ) :
	// gets included in the admin header
	function codium_now_admin_header_style() {
	   ?>
<style type="text/css">
	#headimg {
	width: <?php echo HEADER_IMAGE_WIDTH; ?>px;
	height: <?php echo HEADER_IMAGE_HEIGHT; ?>px;
	}
</style>
<?php
	}
	endif; // codium_now_admin_header_style
	
	
	// Set the content width based on the theme's design and stylesheet.
		if ( ! isset( $content_width ) )
		$content_width = 800;

	if ( ! function_exists( 'codium_now_cats_meow' ) ) :
	// For category lists on category archives: Returns other categories except the current one (redundant)
	function codium_now_cats_meow($glue) {
		$current_cat = single_cat_title( '', false );
		$separator = "\n";
		$cats = explode( $separator, get_the_category_list($separator) );
		foreach ( $cats as $i => $str ) {
			if ( strstr( $str, ">$current_cat<" ) ) {
				unset($cats[$i]);
				break;
			}
		}
		if ( empty($cats) )
			return false;
	
		return trim(join( $glue, $cats ));
	}
	endif; // codium_now_cats_meow
		
	if ( ! function_exists( 'codium_now_posted_on' ) ) :
	// data before post
	function codium_now_posted_on() {
		
		printf( __( '<span class="%1$s">Posted on</span> %2$s <span class="meta-sep">by</span> %3$s.', 'codium-now' ),
			'meta-prep meta-prep-author',
			sprintf( '<a href="%1$s" title="%2$s" rel="bookmark"><span class="entry-date">%3$s</span></a>',
				get_permalink(),
				esc_attr( get_the_time() ),
				get_the_date()
			),
			sprintf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s" rel="author">%3$s</a></span>',
				get_author_posts_url( get_the_author_meta( 'ID' ) ),
				sprintf( esc_attr__( 'View all posts by %s', 'codium-now' ), get_the_author() ),
				get_the_author()
			)
		);
	}
	endif;
	
	if ( ! function_exists( 'codium_now_posted_in' ) ) :
	// data after post
	function codium_now_posted_in() {
		// Retrieves tag list of current post, separated by commas.
		$tag_list = get_the_tag_list( '', ', ' );
		if ( $tag_list ) {
			$posted_in = __( 'This entry was posted in %1$s and tagged %2$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'codium-now' );
		} elseif ( is_object_in_taxonomy( get_post_type(), 'category' ) ) {
			$posted_in = __( 'This entry was posted in %1$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'codium-now' );
		} else {
			$posted_in = __( 'Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'codium-now' );
		}
		// Prints the string, replacing the placeholders.
		printf(
			$posted_in,
			get_the_category_list( ', ' ),
			$tag_list,
			get_permalink(),
			the_title_attribute( 'echo=0' )
		);
	}
	endif;
	
	if ( ! function_exists( 'codium_now_widgets_init' ) ) :
	// Widgets plugin: intializes the plugin after the widgets above have passed snuff
	function codium_now_widgets_init() {
	
	        register_sidebar(array(
			'name' => __( 'Left Widget for Footer', 'codium-now' ),
			'description' => __( 'Left Footer widget', 'codium-now' ),
			'id'            => 'widgetfooterleft',
			'before_widget'  =>   "\n\t\t\t" . '',
			'after_widget'   =>   "\n\t\t\t<div class=\"clear\"></div><div class=\"center\"></div>\n",
			'before_title'   =>   "\n\t\t\t\t". '<h3 class="widgettitle">',
			'after_title'    =>   "</h3>\n" .''
			));
	
	        register_sidebar(array(
			'name' => __( 'Center Widget for Footer', 'codium-now' ),
			'description' => __( 'Center Footer widget', 'codium-now' ),
			'id'            => 'widgetfootercenter',
			'before_widget'  =>   "\n\t\t\t" . '',
			'after_widget'   =>   "\n\t\t\t<div class=\"clear\"></div><div class=\"center\"></div>\n",
			'before_title'   =>   "\n\t\t\t\t". '<h3 class="widgettitle">',
			'after_title'    =>   "</h3>\n" .''
			));
	
	        register_sidebar(array(
			'name' => __( 'Right Widget for Footer', 'codium-now' ),
			'description' => __( 'Right Footer widget', 'codium-now' ),
			'id'            => 'widgetfooterright',
			'before_widget'  =>   "\n\t\t\t" . '',
			'after_widget'   =>   "\n\t\t\t<div class=\"clear\"></div><div class=\"center\"></div>\n",
			'before_title'   =>   "\n\t\t\t\t". '<h3 class="widgettitle">',
			'after_title'    =>   "</h3>\n" .''
			));
            register_sidebar(array(
			'name' => __( 'Widget for Right Sidebar', 'codium-now' ),
			'description' => __( 'Widget Right Sidebar', 'codium-now' ),
			'id'            => 'sidebarright',
			'before_widget'  =>   "\n\t\t\t" . '',
			'after_widget'   =>   "\n\t\t\t<div class=\"clear\"></div><div class=\"center\"></div>\n",
			'before_title'   =>   "\n\t\t\t\t". '<h3 class="widgettitlesidebar">',
			'after_title'    =>   "</h3>\n" .''
			));
	
		}
	endif;
	
	add_action( 'widgets_init', 'codium_now_widgets_init' );
	
	if ( ! function_exists( 'codium_now_excerpt_more' ) ) :
	// Changes default [...] in excerpt to a real link
	function codium_now_excerpt_more($more) {
	       global $post;
	       $readmore = __(' read more <span class="meta-nav"></span>', 'codium-now' );
		return ' <a href="'. get_permalink($post->ID) . '">' . $readmore . '</a>';
	}
	endif;
	add_filter('excerpt_more', 'codium_now_excerpt_more');
	
	
	// Adds filters for the description/meta content in archives.php
	add_filter( 'archive_meta', 'wptexturize' );
	add_filter( 'archive_meta', 'convert_smilies' );
	add_filter( 'archive_meta', 'convert_chars' );
	add_filter( 'archive_meta', 'wpautop' );
	
	// Remember: the codium_now is for play.
	
	// footer link 
	add_action('wp_footer', 'codium_now_footer_link');
	
	if ( ! function_exists( 'codium_now_footer_link' ) ) :
	function codium_now_footer_link() {	
	if ( is_front_page() && !is_paged()) {
		$powered = __( 'powered by', 'codium-now' );
	    $theme = __( 'by', 'codium-now' );
        $madelove = __( 'Website made with', 'codium-now' );
	    $content = '<div class="credits entry-content-footer">'.$madelove.'<span class="love"></span>'.$theme.' <a href="http://acefinity.com" title="Emploi Now">Acefinity</a>, '.$powered.' <a href="#" title="WordPress"><span class="wordpress"></span></a></div>';
	  	//echo $content;
	} else {
	    $powered = __( '', 'codium-now' );
	    $content = '<div class="credits entry-content-footer">'.$powered.' <a href="#" title="WordPress"><span class="wordpress"></span></a></div>';
	  	//echo $content;
	}
	}
	endif;
	
if ( ! function_exists( 'codium_now_cleanCut' ) ) :
//clean cut paragraph
function codium_now_cleanCut($string,$length,$cutString = '...')
{
if(strlen($string) <= $length)
{
return $string;
}
$str = substr($string,0,$length-strlen($cutString)+1);
return substr($str,0,strrpos($str,' ')).$cutString;
}
endif;

//exclude twitter for iframe responsive code
add_filter( 'embed_oembed_html', 'codium_now_tdd_oembed_filter', 10, 4 ) ;

function codium_now_tdd_oembed_filter($html, $url, $attr, $post_ID) {
    if (preg_match_all("/twitter/", $url, $matches, PREG_SET_ORDER)) {
        return $html;
    } else {
        $return = '<div class="video-container '.$url.'">'.$html.'</div>';
        return $return;
    }
}
?>