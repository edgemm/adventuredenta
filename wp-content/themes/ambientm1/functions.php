<?php
/*
 *  Author: Shelly King / Ambient Media | @ambientm1
 *  URL: ambientm1.com | @ambientm1
 *  Custom functions, support, custom post types and more. Theme built on HTML5 Blank starter theme - html5blank.com/ - and Twitter Bootstrap framework - http://getbootstrap.com/2.3.2/.	
 */

/*------------------------------------*\
	Theme Support
\*------------------------------------*/

if (!isset($content_width))
{
	$content_width = 900;
}

if (function_exists('add_theme_support'))
{
	// Add Menu Support
	add_theme_support('menus');

	// Add Thumbnail Theme Support
	add_theme_support('post-thumbnails');
	add_image_size('large', 700, '', true); // Large Thumbnail
	add_image_size('medium', 250, '', true); // Medium Thumbnail
	add_image_size('small', 120, '', true); // Small Thumbnail

	// Enables post and comment RSS feed links to head
	add_theme_support('automatic-feed-links');

	// Localisation Support
	load_theme_textdomain('ambientm1', get_template_directory() . '/languages');
}

/*------------------------------------*\
	Functions
\*------------------------------------*/

// Ambient Media navigation
function ambientm1_nav()
{
	wp_nav_menu(
	array(
		'theme_location'  => 'header-menu',
		'menu'			=> '', 
		'container'	   => 'div', 
		'container_class' => 'menu-{menu slug}-container', 
		'container_id'	=> '',
		'menu_class'	  => 'menu', 
		'menu_id'		 => '',
		'echo'			=> true,
		'fallback_cb'	 => 'wp_page_menu',
		'before'		  => '',
		'after'		   => '',
		'link_before'	 => '',
		'link_after'	  => '',
		'items_wrap'	  => '<ul class="nav">%3$s</ul>',
		'depth'		   => 0,
		'walker'		  => new My_Custom_Nav_Walker
		)
	);
}
class My_Custom_Nav_Walker extends Walker_Nav_Menu {

	function start_lvl(&$output, $depth = 0, $args = array()) {
		$output .= "\n<ul class=\"dropdown-menu\">\n";
	}

	function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
		$item_html = '';
		parent::start_el($item_html, $item, $depth, $args);

		if ( $item->is_dropdown && $depth === 0 ) {
			$item_html = str_replace( '<a', '<a class="dropdown-toggle"', $item_html );
		}

		$output .= $item_html;
	}

	function display_element($element, &$children_elements, $max_depth, $depth = 0, $args, &$output) {
		if ( $element->current )
		$element->classes[] = 'active';

		$element->is_dropdown = !empty( $children_elements[$element->ID] );

		if ( $element->is_dropdown ) {
			if ( $depth === 0 ) {
				$element->classes[] = 'dropdown';
			} elseif ( $depth === 1 ) {
				$element->classes[] = 'dropdown-submenu';
			}
		}

	parent::display_element($element, $children_elements, $max_depth, $depth, $args, $output);
	}
}

// Protocol relative URLs for enqueued scripts/styles
function ambientm1_protocol_relative($url)
{
	if(is_admin()) return $url;
	return str_replace(array('http:','https:'), '', $url, $c=1);
}

// Load Ambient Media scripts (header.php)
function ambientm1_header_scripts()
{
	if (!is_admin()) {
		wp_register_script('conditionizr', '//cdnjs.cloudflare.com/ajax/libs/conditionizr.js/2.2.0/conditionizr.min.js', array(), '2.2.0'); // Conditionizr
		wp_enqueue_script('conditionizr'); // Enqueue it!
		
		wp_register_script('modernizr', '//cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js', array(), '2.6.2'); // Modernizr
		wp_enqueue_script('modernizr'); // Enqueue it!

		wp_register_script('less', get_template_directory_uri() . '/js/less.js', array(), '1.0.30'); //
		wp_enqueue_script('less'); // Enqueue it!
	}

	// home sliders
	wp_enqueue_script( 'jquery-slidesjs', get_template_directory_uri() . '/js/jquery.slides.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'slides-scripts', get_template_directory_uri() . '/js/ad-slides.js', array(), '1.0.0', true );

}

// Load Ambient Media scripts (footer.php)
function ambientm1_footer_scripts()
{
	if (!is_admin()) {
		wp_deregister_script('jquery'); // Deregister WordPress jQuery
		
		wp_register_script('ambientm1scripts', get_template_directory_uri() . '/js/scripts.js', array(), '1.0.0'); // Custom scripts
		wp_enqueue_script('ambientm1scripts'); // Enqueue it!
		
		wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '2.0'); // Modernizr
		wp_enqueue_script('bootstrap'); // Enqueue it!

		wp_register_script('prettyphoto', get_template_directory_uri() . '/js/jquery.prettyPhoto.js', array(), '3.1.5'); // Modernizr
		wp_enqueue_script('prettyphoto'); // Enqueue it!

		wp_register_script('waypoints', get_template_directory_uri() . '/js/waypoints.min.js', array(), '2.0.3'); // Modernizr
		wp_enqueue_script('waypoints'); // Enqueue it!
	}
}

// Load Ambient Media conditional scripts
function conditional_scripts()
{
	if (is_page('pagenamehere')) {
		wp_register_script('scriptname', get_template_directory_uri() . '/js/scriptname.js', array('jquery'), '1.0.0'); // Conditional script(s)
		wp_enqueue_script('scriptname'); // Enqueue it!
	}
}

// Load Ambient Media styles
function ambientm1_styles()
{
	wp_register_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '1.0', 'all');
	wp_enqueue_style('normalize'); // Enqueue it!

/*
	wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), '1.0', 'all');
	wp_enqueue_style('main'); // Enqueue it!
*/

	wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '1.0', 'all');
	wp_enqueue_style('bootstrap'); // Enqueue it!

	wp_register_style('prettyphoto', get_template_directory_uri() . '/css/prettyPhoto.css', array(), '1.0', 'all');
	wp_enqueue_style('prettyphoto'); // Enqueue it!
	
	wp_register_style('ie8', get_template_directory_uri() . '/css/ie8.css', array(), '1.0', 'all');
	wp_enqueue_style('ie8'); // Enqueue it!	
}

// Register Ambient Media Navigation
function register_ambientm1_menu()
{
	register_nav_menus(array( // Using array to specify more menus if needed
		'header-menu' => __('Header Menu', 'ambientm1'), // Main Navigation
		'sidebar-menu' => __('Sidebar Menu', 'ambientm1'), // Sidebar Navigation
		'about-menu' => __('Patient Care Menu', 'ambientm1'), // Sidebar Navigation
		'research-menu' => __('About Us Menu', 'ambientm1'), // Sidebar Navigation
		'engagement-menu' => __('Services Menu', 'ambientm1'), // Sidebar Navigation
		'media-menu' => __('Contact Menu', 'ambientm1'), // Sidebar Navigation
		'footer-menu' => __('Footer Menu', 'ambientm1'), // Sidebar Navigation
	));
}

// Remove the <div> surrounding the dynamic navigation to cleanup markup
function my_wp_nav_menu_args($args = '')
{
	$args['container'] = false;
	return $args;
}

// Remove Injected classes, ID's and Page ID's from Navigation <li> items
function my_css_attributes_filter($var)
{
	return is_array($var) ? array() : '';
}

// Remove invalid rel attribute values in the categorylist
function remove_category_rel_from_category_list($thelist)
{
	return str_replace('rel="category tag"', 'rel="tag"', $thelist);
}

// Add page slug to body class, love this - Credit: Starkers Wordpress Theme
function add_slug_to_body_class($classes)
{
	global $post;
	if (is_home()) {
		$key = array_search('blog', $classes);
		if ($key > -1) {
			unset($classes[$key]);
		}
	} elseif (is_page()) {
		$classes[] = sanitize_html_class($post->post_name);
	} elseif (is_singular()) {
		$classes[] = sanitize_html_class($post->post_name);
	}

	return $classes;
}

// If Dynamic Sidebar Exists
if (function_exists('register_sidebar'))
{
	register_sidebar(array(
		'name' => __('General Sidebar', 'ambientm1'),
		'description' => __('Description for this widget-area...', 'ambientm1'),
		'id' => 'sidebar-widgets',
		'before_widget' => '<div id="%1$s" class="%2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));

	register_sidebar(array(
		'name' => __('Patient Care', 'ambientm1'),
		'description' => __('Description for this widget-area...', 'ambientm1'),
		'id' => 'new-patients',
		'before_widget' => '<div id="%1$s" class="%2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	)); 

	register_sidebar(array(
		'name' => __('About Us', 'ambientm1'),
		'description' => __('Description for this widget-area...', 'ambientm1'),
		'id' => 'about-us',
		'before_widget' => '<div id="%1$s" class="%2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	)); 

	register_sidebar(array(
		'name' => __('Services', 'ambientm1'),
		'description' => __('Description for this widget-area...', 'ambientm1'),
		'id' => 'pediatrics',
		'before_widget' => '<div id="%1$s" class="%2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	)); 

	register_sidebar(array(
		'name' => __('Contact', 'ambientm1'),
		'description' => __('Description for this widget-area...', 'ambientm1'),
		'id' => 'contact',
		'before_widget' => '<div id="%1$s" class="%2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));

	register_sidebar(array(
		'name' => __('Subfooter', 'ambientm1'),
		'description' => __('Description for this widget-area...', 'ambientm1'),
		'id' => 'subfooter',
		'before_widget' => '<div id="%1$s" class="%2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	)); 
}

// Remove wp_head() injected Recent Comment styles
function my_remove_recent_comments_style()
{
	global $wp_widget_factory;
	remove_action('wp_head', array(
		$wp_widget_factory->widgets['WP_Widget_Recent_Comments'],
		'recent_comments_style'
	));
}

// Custom Excerpts
function ambientm1wp_index($length)
{
	return 40;
}

// Create 40 Word Callback for Custom Post Excerpts
function ambientm1wp_custom_post($length)
{
	return 40;
}

// Create the Custom Excerpts callback
function ambientm1wp_excerpt($length_callback = '', $more_callback = '')
{
	global $post;
	if (function_exists($length_callback)) {
		add_filter('excerpt_length', $length_callback);
	}
	if (function_exists($more_callback)) {
		add_filter('excerpt_more', $more_callback);
	}
	$output = get_the_excerpt();
	$output = apply_filters('wptexturize', $output);
	$output = apply_filters('convert_chars', $output);
	$output = '<p>' . $output . '</p>' . '<a class="read-more" href="' . get_permalink($post->ID) . '">' . __('Read More...', 'ambientm1') . '</a>';

	echo $output;
}

// Custom Excerpts for homepage
function ambientm1wp_home($length)
{
	return 40;
}

// Create the Custom Excerpts callback
function ambientm1wp_homeexcerpt($length_callback = '')
{
	global $post;
	if (function_exists($length_callback)) {
		add_filter('excerpt_length', $length_callback);
	}
	$output = get_the_excerpt();
	$output = apply_filters('wptexturize', $output);
	$output = apply_filters('convert_chars', $output);
	$output = '<p class="summary">' . $output . '</p>';

	echo $output;
}

// Remove Admin bar
function remove_admin_bar()
{
	return false;
}

// Remove 'text/css' from our enqueued stylesheet
function ambientm1_style_remove($tag)
{
	return preg_replace('~\s+type=["\'][^"\']++["\']~', '', $tag);
}

// Remove thumbnail width and height dimensions that prevent fluid images in the_thumbnail
function remove_thumbnail_dimensions( $html )
{
	$html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
	return $html;
}

// Custom Gravatar in Settings > Discussion
function ambientm1gravatar ($avatar_defaults)
{
	$myavatar = get_template_directory_uri() . '/img/gravatar.jpg';
	$avatar_defaults[$myavatar] = "Custom Gravatar";
	return $avatar_defaults;
}

// Threaded Comments
function enable_threaded_comments()
{
	if (!is_admin()) {
		if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
			wp_enqueue_script('comment-reply');
		}
	}
}

// Custom Comments Callback
function ambientm1comments($comment, $args, $depth)
{
	$GLOBALS['comment'] = $comment;
	extract($args, EXTR_SKIP);
	
	if ( 'div' == $args['style'] ) {
		$tag = 'div';
		$add_below = 'comment';
	} else {
		$tag = 'li';
		$add_below = 'div-comment';
	}
?>
	<<?php echo $tag ?> <?php comment_class(empty( $args['has_children'] ) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
	<?php if ( 'div' != $args['style'] ) : ?>
	<div id="div-comment-<?php comment_ID() ?>" class="comment-body">
	<?php endif; ?>
	<div class="comment-author vcard">
	<div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
		<?php
			printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'),'  ','' );
		?>
	</div>
	<?php if ($args['avatar_size'] != 0) echo get_avatar( $comment, $args['180'] ); ?>
	<?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
	</div>
<?php if ($comment->comment_approved == '0') : ?>
	<em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.') ?></em>
	<br />
<?php endif; ?>

	<?php comment_text() ?>

	<div class="reply">
	<?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
	</div>
	<?php if ( 'div' != $args['style'] ) : ?>
	</div>
	<?php endif; ?>
<?php }

/*------------------------------------*\
	Actions + Filters + ShortCodes
\*------------------------------------*/

// Add Actions
add_action('init', 'ambientm1_header_scripts'); // Add Custom Scripts to wp_head
add_action('wp_footer', 'ambientm1_footer_scripts'); // Add Custom Scripts to wp_footer
add_action('wp_print_scripts', 'conditional_scripts'); // Add Conditional Page Scripts
add_action('get_header', 'enable_threaded_comments'); // Enable Threaded Comments
add_action('wp_enqueue_scripts', 'ambientm1_styles'); // Add Theme Stylesheet
add_action('init', 'register_ambientm1_menu'); // Add Ambient Media Menu
add_action('init', 'create_post_type_ambientm1'); // Add our Ambient Media Custom Post Type
add_action('widgets_init', 'my_remove_recent_comments_style'); // Remove inline Recent Comment Styles from wp_head()

// Remove Actions
remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
remove_action('wp_head', 'index_rel_link'); // Index link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // Prev link
remove_action('wp_head', 'start_post_rel_link', 10, 0); // Start link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Display relational links for the posts adjacent to the current post.
remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

// Add Filters
add_filter('script_loader_src', 'ambientm1_protocol_relative'); // Protocol relative URLs for enqueued scripts
add_filter('style_loader_src' , 'ambientm1_protocol_relative'); // Protocol relative URLs for enqueued styles
add_filter('avatar_defaults', 'ambientm1gravatar'); // Custom Gravatar in Settings > Discussion
add_filter('body_class', 'add_slug_to_body_class'); // Add slug to body class (Starkers build)
add_filter('widget_text', 'do_shortcode'); // Allow shortcodes in Dynamic Sidebar
add_filter('widget_text', 'shortcode_unautop'); // Remove <p> tags in Dynamic Sidebars (better!)
add_filter('wp_nav_menu_args', 'my_wp_nav_menu_args'); // Remove surrounding <div> from WP Navigation
// add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected classes (Commented out by default)
// add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected ID (Commented out by default)
// add_filter('page_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> Page ID's (Commented out by default)
add_filter('the_category', 'remove_category_rel_from_category_list'); // Remove invalid rel attribute
add_filter('the_excerpt', 'shortcode_unautop'); // Remove auto <p> tags in Excerpt (Manual Excerpts only)
add_filter('the_excerpt', 'do_shortcode'); // Allows Shortcodes to be executed in Excerpt (Manual Excerpts only)
add_filter('show_admin_bar', 'remove_admin_bar'); // Remove Admin bar
add_filter('style_loader_tag', 'ambientm1_style_remove'); // Remove 'text/css' from enqueued stylesheet
add_filter('post_thumbnail_html', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to thumbnails
add_filter('image_send_to_editor', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to post images

// Remove Filters
remove_filter('the_excerpt', 'wpautop'); // Remove <p> tags from Excerpt altogether

// Shortcodes
add_shortcode('one_column', 'one_column'); // You can place [one_column] in Pages, Posts now.
add_shortcode('two_column', 'two_column');
add_shortcode('three_column', 'three_column');
add_shortcode('four_column', 'four_column');
add_shortcode('five_column', 'five_column');
add_shortcode('six_column', 'six_column');
add_shortcode('seven_column', 'seven_column');
add_shortcode('eight_column', 'eight_column');
add_shortcode('nine_column', 'nine_column');
add_shortcode('ten_column', 'ten_column');
add_shortcode('eleven_column', 'eleven_column');
add_shortcode('twelve_column', 'twelve_column');
add_shortcode('video', 'shortcode_video');

/*------------------------------------*\
	ShortCode Functions
\*------------------------------------*/

// Shortcode Demo with Nested Capability
function one_column($atts, $content = null)
{
	return '<div class="span1">' . do_shortcode($content) . '</div>';
}
function two_columns($atts, $content = null)
{
	return '<div class="span2">' . do_shortcode($content) . '</div>';
}
function three_columns($atts, $content = null)
{
	return '<div class="span3">' . do_shortcode($content) . '</div>';
}
function four_columns($atts, $content = null)
{
	return '<div class="span4">' . do_shortcode($content) . '</div>';
}
function five_columns($atts, $content = null)
{
	return '<div class="span5">' . do_shortcode($content) . '</div>';
}
function six_columns($atts, $content = null)
{
	return '<div class="span6">' . do_shortcode($content) . '</div>';
}
function seven_columns($atts, $content = null)
{
	return '<div class="span7">' . do_shortcode($content) . '</div>';
}
function eight_columns($atts, $content = null)
{
	return '<div class="span8">' . do_shortcode($content) . '</div>';
}
function nine_columns($atts, $content = null)
{
	return '<div class="span9">' . do_shortcode($content) . '</div>';
}
function ten_columns($atts, $content = null)
{
	return '<div class="span10">' . do_shortcode($content) . '</div>';
}
function eleven_columns($atts, $content = null)
{
	return '<div class="span11">' . do_shortcode($content) . '</div>';
}
function twelve_columns($atts, $content = null)
{
	return '<div class="span12">' . do_shortcode($content) . '</div>';
}

function shortcode_video( $atts ) {
	extract( shortcode_atts( array(
		'width' => 'width',
		'height' => 'height',
		'file' => 'file',
	), $atts ) );
	
	/* Store Blog Info Directory in a Variable */
	$blog_dir = get_bloginfo('stylesheet_directory');

	return "<div class=\"video-container\">\n
		<video controls> \n
		<source src=\"$blog_dir/videos/{$file}.mp4\" type=\"video/mp4\"> \n
		<source src=\"$blog_dir/videos/{$file}.ogv\" type=\"video/ogg\"> \n
		<source src=\"$blog_dir/videos/{$file}.webm\" type=\"video/webm\"> \n
		
		<a href=\"$blog_dir/videos/{$file}.flv\" style=\"clear:both;display:block;width:{$width}px;height:{$height}px;\" id=\"{$file}\"></a> \n
		<script language=\"JavaScript\"> \n
			flowplayer(\"{$file}\", \"$blog_dir/flow/flowplayer-3.2.16.swf\", { clip: { autoPlay: false, autoBuffering: true } }); \n
		</script> \n
		
		</video>\n
		</div>\n";

}

/*------------------------------------*\
	Custom Post Types
\*------------------------------------*/

function create_post_type_ambientm1()
{
	register_taxonomy_for_object_type('category', 'ambientm1'); // Register Taxonomies for Category
	register_taxonomy_for_object_type('post_tag', 'ambientm1');
   
	register_post_type('video-gallery', // Register Custom Post Type
		array(
		'labels' => array(
			'name' => __('Video Gallery', 'ambientm1'),
			'singular_name' => __('Video', 'ambientm1'),
			'add_new' => __('Add New Video', 'ambientm1'),
			'add_new_item' => __('Add New Video', 'ambientm1'),
			'edit' => __('Edit Video', 'ambientm1'),
			'edit_item' => __('Edit Video', 'ambientm1'),
			'new_item' => __('New Video', 'ambientm1'),
			'view' => __('View Video', 'ambientm1'),
			'view_item' => __('View Video', 'ambientm1'),
			'search_items' => __('Search Videos', 'ambientm1'),
			'not_found' => __('No videos found', 'ambientm1'),
			'not_found_in_trash' => __('No videos found in Trash', 'ambientm1')
		),
		'public' => true,
		'hierarchical' => true,
		'has_archive' => true,
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'thumbnail',
			'custom-fields'
		), // Go to Dashboard Custom Ambient Media post for supports
		'can_export' => true, // Allows export in Tools > Export
		'taxonomies' => array(
			'post_tag',
			'category'
		) // Add Category and Post Tags support
	));
	register_post_type('loop-drs', // Register Custom Post Type
		array(
		'labels' => array(
			'name' => __('Doctor Bios', 'ambientm1'),
			'singular_name' => __('Doctor Bio', 'ambientm1'),
			'add_new' => __('Add New Doctor Bio', 'ambientm1'),
			'add_new_item' => __('Add New Doctor Bio', 'ambientm1'),
			'edit' => __('Edit Doctor Bio', 'ambientm1'),
			'edit_item' => __('Edit Doctor Bio', 'ambientm1'),
			'new_item' => __('New Doctor Bio', 'ambientm1'),
			'view' => __('View Doctor Bio', 'ambientm1'),
			'view_item' => __('View Doctor Bio', 'ambientm1'),
			'search_items' => __('Search Doctor Bios', 'ambientm1'),
			'not_found' => __('No Doctor Bios found', 'ambientm1'),
			'not_found_in_trash' => __('No Doctor Bios found in Trash', 'ambientm1')
		),
		'public' => true,
		'hierarchical' => true,
		'has_archive' => true,
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'thumbnail'
		), // Go to Dashboard Custom Ambient Media post for supports
		'can_export' => true, // Allows export in Tools > Export
		'taxonomies' => array(
			'post_tag',
			'category'
		) // Add Category and Post Tags support
	));
	register_post_type('loop-team', // Register Custom Post Type
		array(
		'labels' => array(
			'name' => __('Team Bios', 'ambientm1'),
			'singular_name' => __('Team Bio', 'ambientm1'),
			'add_new' => __('Add New Team Bio', 'ambientm1'),
			'add_new_item' => __('Add New Team Bio', 'ambientm1'),
			'edit' => __('Edit Team Bio', 'ambientm1'),
			'edit_item' => __('Edit Team Bio', 'ambientm1'),
			'new_item' => __('New Team Bio', 'ambientm1'),
			'view' => __('View Team Bio', 'ambientm1'),
			'view_item' => __('View Team Bio', 'ambientm1'),
			'search_items' => __('Search Team Bios', 'ambientm1'),
			'not_found' => __('No Team Bios found', 'ambientm1'),
			'not_found_in_trash' => __('No Team Bios found in Trash', 'ambientm1')
		),
		'public' => true,
		'hierarchical' => true,
		'has_archive' => true,
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'thumbnail',
			'custom-fields'
		), // Go to Dashboard Custom Ambient Media post for supports
		'can_export' => true, // Allows export in Tools > Export
		'taxonomies' => array(
			'post_tag',
			'category'
		) // Add Category and Post Tags support
	));
	register_post_type( 'home_slider',
		array(
		'labels' => array(
			'name' => _x( 'Home Sliders', 'home_slider' ),
			'singular_name' => _x( 'Home Slider', 'home_slider' ),
			'add_new' => _x( 'Add New Home Slider', 'home_slider' ),
			'add_new_item' => _x( 'Add New Home Slider', 'home_slider' ),
			'edit_item' => _x( 'Edit Home Slider', 'home_slider' ),
			'new_item' => _x( 'New Home Slider', 'home_slider' ),
			'view_item' => _x( 'View Home Slider', 'home_slider' ),
			'search_items' => _x( 'Search Home Sliders', 'home_slider' ),
			'not_found' => _x( 'No home sliders found', 'home_slider' ),
			'not_found_in_trash' => _x( 'No home sliders found in Trash', 'home_slider' ),
			'parent_item_colon' => _x( 'Parent Home Slider:', 'home_slider' ),
			'menu_name' => _x( 'Home Sliders', 'home_slider' ),
		),
		'hierarchical' => false,
		'supports' => array(
			'title',
			'editor',
			'thumbnail',
			'custom-fields'
		),
		'taxonomies' => array( 'Slider Order' ),
		'public' => true,
		'show_ui' => true,
		'menu_position' => 20,
		'show_in_nav_menus' => false,
		'publicly_queryable' => false,
		'exclude_from_search' => true,
		'has_archive' => false,
		'query_var' => true,
		'can_export' => true,
		'rewrite' => true,
		'capability_type' => 'post'
	));
}

/*------------------------------------*\
	Breadcrumbs
\*------------------------------------*/

function the_breadcrumb() {
		echo '<ul id="breadcrumbs">';
	if (!is_home()) {
		echo '<li><a href="';
		echo get_option('home');
		echo '">';
		echo 'Home';
		echo '</a></li><li class="separator"> &raquo; </li>';
		if (is_category() || is_single()) {
			echo '<li>';
			the_category(' </li><li class="separator"> &raquo; </li><li> ');
			if (is_single()) {
				echo '</li><li class="separator"> &raquo; </li><li>';
				the_title();
				echo '</li>';
			}
		} elseif (is_page()) {
			if($post->post_parent){
				$anc = get_post_ancestors( $post->ID );
				 
				foreach ( $anc as $ancestor ) {
					$output = '<li><a href="'.get_permalink($ancestor).'" title="'.get_the_title($ancestor).'">'.get_the_title($ancestor).'</a></li> <li class="separator">&raquo;</li>';
				}
				echo $output;
				echo '<strong title="'.$title.'"> '.$title.'</strong>';
			} else {
				echo '<strong> ';
				echo the_title();
				echo '</strong>';
			}
		}
	}
	elseif (is_tag()) {single_tag_title();}
	elseif (is_day()) {echo"<li>Archive for "; the_time('F jS, Y'); echo'</li>';}
	elseif (is_month()) {echo"<li>Archive for "; the_time('F, Y'); echo'</li>';}
	elseif (is_year()) {echo"<li>Archive for "; the_time('Y'); echo'</li>';}
	elseif (is_author()) {echo"<li>Author Archive"; echo'</li>';}
	elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li>Blog Archives"; echo'</li>';}
	elseif (is_search()) {echo"<li>Search Results"; echo'</li>';}
	echo '</ul>';
}

?>