<?php

/**
 * web-focus functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package web-focus
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

if (!function_exists('web_focus_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function web_focus_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on web-focus, use a find and replace
		 * to change 'web-focus' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('web-focus', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'Primary' => esc_html__('Primary', 'web-focus'),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'web_focus_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action('after_setup_theme', 'web_focus_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function web_focus_content_width()
{
	$GLOBALS['content_width'] = apply_filters('web_focus_content_width', 640);
}
add_action('after_setup_theme', 'web_focus_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function web_focus_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'web-focus'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'web-focus'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'web_focus_widgets_init');

function web_focus_scripts()
{
	wp_enqueue_style('web-focus-style', get_stylesheet_uri());
	wp_enqueue_style('slider_style', get_template_directory_uri() . '/assets/css/slick.css');
	wp_enqueue_style('slider_theme_style', get_template_directory_uri() . '/assets/css/sub-style.css');
	wp_enqueue_style('animate-style', get_template_directory_uri() . '/assets/css/animate.css');
	wp_enqueue_style('light-box', get_template_directory_uri() . '/light-box/css/lightbox.css');
	wp_enqueue_style('flickity-style', 'https://unpkg.com/flickity@2/dist/flickity.min.css');
	if (!is_front_page()) {
		wp_enqueue_style('post-style', get_template_directory_uri() . '/assets/css/post/postStyle.css');
		wp_enqueue_style('comment-style', get_template_directory_uri() . '/assets/css/post/postComments.css');
		wp_enqueue_style('blog-style', get_template_directory_uri() . '/assets/css/blog/blogStyle.css');
		wp_enqueue_style('case-style', get_template_directory_uri() . '/assets/css/case/case.css');
		wp_enqueue_style('custom-style', get_template_directory_uri() . '/assets/css/custom.css');
	}

	// 	 wp_enqueue_script('web-focus-navigation', get_template_directory_uri() . '/js/navigation.js');
	wp_deregister_script('jquery');
	wp_register_script('jquery', 'https://code.jquery.com/jquery-3.5.1.min.js');
	wp_enqueue_script('jquery', false, array('jquery'), false, true);
	wp_enqueue_script('web-focus-slick-js', get_template_directory_uri() . '/js/slick.min.js', array(), null, true);
	wp_enqueue_script('web-focus-wow-js', get_template_directory_uri() . '/js/wow.min.js', array(), null, true);
	wp_enqueue_script('hover3d', get_template_directory_uri() . '/js/jquery.hover3d.min.js', array(), null, true);
	wp_enqueue_script('light-box', get_template_directory_uri() . '/light-box/js/lightbox.js', array(), null, true);
	wp_enqueue_script('web-focus-custom-js', get_template_directory_uri() . '/js/script.js', array(), null, true);
	// wp_enqueue_script('flickity-script', 'https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js', array(), null, true);

	// 	wp_register_script('animation-player', 'https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js');
	wp_register_script('animation-player', 'https://unpkg.com/@lottiefiles/lottie-player@0.2.0/dist/lottie-player.js');


	if (!is_front_page()) {
		wp_enqueue_script('animation-player', false, array('animation-player'), false, true);
	}

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
// add_filter('upload_mimes', 'custom_upload_mimes');
// function custom_upload_mimes($existing_mimes = array())
// {
// 	$existing_mimes['svg'] = 'image/svg+xml';
// 	return $existing_mimes;
// }

function remove_admin_login_header()
{
	remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');


add_action('wp_enqueue_scripts', 'web_focus_scripts');



add_filter('excerpt_more', function ($more) {
	return '...';
});

add_filter('excerpt_length', function () {
	return 45;
});




/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

add_filter('the_content', 'do_shortcode', 11);

add_action('init', 'create_case_post_type');
add_action('init', 'create_case_taxonomy_tag');
add_action('init', 'create_case_taxonomy_category');



function create_case_post_type()
{
	register_post_type('case', array(
		'labels'             => array(
			'name'               => 'Кейсы', // Основное название типа записи
			'singular_name'      => 'Кейсы', // отдельное название записи типа Book
			'add_new'            => 'Добавить новый',
			'add_new_item'       => 'Добавить новый кейс',
			'edit_item'          => 'Редактировать кейс',
			'new_item'           => 'Новый кейс',
			'view_item'          => 'Посмотреть кейс',
			'search_items'       => 'Найти кейс',
			'not_found'          => 'Кейсы не найден',
			'not_found_in_trash' => 'В корзине кейсов не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Кейсы'

		),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 4,
		'supports'           => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'post-formats', 'custom-fields'),
		'taxonomies'         => array('case-tag'),
	));
}
function create_case_taxonomy_tag()
{
	// Add new taxonomy, NOT hierarchical (like tags)
	$labels = array(
		'name' => _x('Tags', 'taxonomy general name'),
		'singular_name' => _x('Tag', 'taxonomy singular name'),
		'search_items' =>  __('Search Tags'),
		'popular_items' => __('Popular Tags'),
		'all_items' => __('All Tags'),
		'parent_item' => null,
		'parent_item_colon' => null,
		'edit_item' => __('Edit Tag'),
		'update_item' => __('Update Tag'),
		'add_new_item' => __('Add New Tag'),
		'new_item_name' => __('New Tag Name'),
		'separate_items_with_commas' => __('Separate tags with commas'),
		'add_or_remove_items' => __('Add or remove tags'),
		'choose_from_most_used' => __('Choose from the most used tags'),
		'menu_name' => __('Tags'),
	);

	register_taxonomy('case-tag', array('case'), array( // replace your post type with "news"
		'labels' 		=> $labels,
		'description'   => 'Теги для кейсов', // описание таксономии
		'hierarchical'  => false,
		'public' 		=> true,
		'show_ui'       => true,
		'query_var' 	=> true,
		'rewrite'       =>  array('slug' => 'case-tag', 'with_front' => false)
	));
}


add_shortcode('section_team', 'section_team');

function section_team()
{
	get_template_part('template-parts/shortcodes/section_team');
}

//Регистрация типа постов Wiki

add_action('init', 'create_wiki_post_type');
add_action('init', 'create_wiki_taxonomy_category');
// add_action('init', 'create_wiki_taxonomy_database');


function create_wiki_post_type()
{
	register_post_type('wiki', array(
		'labels'             => array(
			'name'               => 'Wiki', // Основное название типа записи
			'singular_name'      => 'Wiki', // отдельное название записи типа Book
			'add_new'            => 'Добавить термин',
			'add_new_item'       => 'Добавить новый термин',
			'edit_item'          => 'Редактировать термин',
			'new_item'           => 'Новый термин',
			'view_item'          => 'Посмотреть термин',
			'search_items'       => 'Найти термин',
			'not_found'          => 'Термин не найден',
			'not_found_in_trash' => 'В корзине Термин не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Wiki'

		),
		'description'		 => 'Энциклопедия wiki для интернет-маркетолога. В ней Вы найдете термины и информацию по маркетингу, digital маркетингу, продвижению сайтов, разработке сайтов, контекстной рекламе, медийной рекламе, веб дизайну, cмм и другие полезные знания.',
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 4,
		'supports'           => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'post-formats', 'custom-fields'),
		'taxonomies'         => array('wiki-category', 'wiki-database'),
	));
}
function create_wiki_taxonomy_category()
{
	// Add new taxonomy, NOT hierarchical (like tags)
	$labels = array(
		'name' => _x('Category', 'taxonomy general name'),
		'singular_name' => _x('Category', 'taxonomy singular name'),
		'search_items' =>  __('Search Category'),
		'popular_items' => __('Popular Category'),
		'all_items' => __('All Category'),
		'parent_item' => null,
		'parent_item_colon' => null,
		'edit_item' => __('Edit Category'),
		'update_item' => __('Update Category'),
		'add_new_item' => __('Add New Category'),
		'new_item_name' => __('New Category Name'),
		'separate_items_with_commas' => __('Separate Category with commas'),
		'add_or_remove_items' => __('Add or remove Category'),
		'choose_from_most_used' => __('Choose from the most used Category'),
		'menu_name' => __('Category'),
	);

	register_taxonomy('wiki-category', array('wiki'), array( // replace your post type with "news"
		'labels' 		=> $labels,
		'description'   => 'Категории для wiki', // описание таксономии
		'hierarchical'  => true,
		'public' 		=> true,
		'show_ui'       => true,
		'query_var' 	=> true,
		'show_admin_column'     => true,
		'rewrite'       =>  array('slug' => 'wiki-category', 'with_front' => false)
	));
}

// function create_wiki_taxonomy_database()
// {
// 	// Add new taxonomy, NOT hierarchical (like tags)
// 	$labels = array(
// 		'name' => _x('Database', 'taxonomy general name'),
// 		'singular_name' => _x('Database', 'taxonomy singular name'),
// 		'search_items' =>  __('Search Database'),
// 		'popular_items' => __('Popular Database'),
// 		'all_items' => __('All Database'),
// 		'parent_item' => null,
// 		'parent_item_colon' => null,
// 		'edit_item' => __('Edit Database'),
// 		'update_item' => __('Update Database'),
// 		'add_new_item' => __('Add New Database'),
// 		'new_item_name' => __('New Database Name'),
// 		'separate_items_with_commas' => __('Separate Database with commas'),
// 		'add_or_remove_items' => __('Add or remove Database'),
// 		'choose_from_most_used' => __('Choose from the most used Database'),
// 		'menu_name' => __('Database'),
// 	);

// 	register_taxonomy('wiki-database', array('wiki'), array( // replace your post type with "news"
// 		'labels' 		=> $labels,
// 		'description'   => 'База данных для wiki', // описание таксономии
// 		'hierarchical'  => false,
// 		'public' 		=> true,
// 		'show_ui'       => true,
// 		'query_var' 	=> true,
// 		'default_term'	=> 'Wiki',
// 		'rewrite'       =>  array('slug' => 'wiki', 'with_front' => false)
// 	));
// }







add_filter('navigation_markup_template', 'my_navigation_template', 10, 2);
function my_navigation_template($template, $class)
{
	/*
	Вид базового шаблона:
	<nav class="navigation %1$s" role="navigation">
		<h2 class="screen-reader-text">%2$s</h2>
		<div class="nav-links">%3$s</div>
	</nav>
	*/

	return '
	<nav class="navigation %1$s" role="navigation">
		<div class="nav-links">%3$s</div>
	</nav>    
	';
}

// выводим пагинацию
the_posts_pagination(array(
	'end_size' => 2,
));

add_action('widgets_init', 'register_case_tag');

function register_case_tag()
{
	register_sidebar(array(
		'name'          => 'Метки кейсов',
		'id'            => "case-tag-area",
		'description'   => 'Метки кейсов',
		'class'         => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => "</div>\n",
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => "</h2>\n",
		'before_sidebar' => '', // WP 5.6
		'after_sidebar'  => '', // WP 5.6
	));
}

add_filter('get_the_archive_title', function ($title) {
	return preg_replace('~^[^:]+: ~', '', $title);
});



function wph_search_by_title($search, &$wp_query)
{
	global $wpdb;
	if (empty($search)) return $search;

	$q = $wp_query->query_vars;
	$n = !empty($q['exact']) ? '' : '%';
	$search = $searchand = '';

	foreach ((array) $q['search_terms'] as $term) {
		$term = esc_sql(like_escape($term));
		$search .= "{$searchand}($wpdb->posts.post_title LIKE '{$n}{$term}{$n}')";
		$searchand = ' AND ';
	}

	if (!empty($search)) {
		$search = " AND ({$search}) ";
		if (!is_user_logged_in())
			$search .= " AND ($wpdb->posts.post_password = '') ";
	}
	return $search;
}
add_filter('posts_search', 'wph_search_by_title', 500, 2);


add_action('wp_enqueue_scripts', 'remove_some_stylesheet', 99);
function remove_some_stylesheet()
{
	wp_deregister_style('dashicons'); //dashicons.min.css
}

/* Отключаем админ панель для всех пользователей. */
show_admin_bar(false);


function not_style_post_homepage()
{
	if (is_home() || is_front_page()) {
		wp_dequeue_style('slider_theme_style'); //sub-style.css?ver=5.9.4
	}
}
add_action('wp_enqueue_scripts', 'not_style_post_homepage');


add_filter('init', function () {
	global $wp;

	$wp->add_query_var('search_query');
	$wp->remove_query_var('s');
});


add_filter('request', function ($request) {
	if (isset($_REQUEST['search_query'])) {
		$request['s'] = $_REQUEST['search_query'];
	}

	return $request;
});

function redirect_to_resources()
{
	$uri = $_SERVER['REQUEST_URI'];

	if (strpos($uri, '?s=') == true) {
		wp_safe_redirect(home_url());
	}
}

add_action('template_redirect', 'redirect_to_resources');
