<?php
add_action( 'wp_enqueue_scripts', 'theme_style' );
add_action( 'wp_enqueue_scripts', 'theme_script' );
add_action( 'after_setup_theme', 'theme_menu' );
add_action( 'widgets_init', 'theme_sidebar' );
add_action( 'init', 'register_entry' );

function register_entry() {
	register_post_type( 'slider_banner', array(
		'label'               => null,
		'labels'              => array(
			'name'               => 'Slider banner', // основное название для типа записи
			'singular_name'      => 'Slider banner', // название для одной записи этого типа
			'add_new'            => 'Добавить Slider', // для добавления новой записи
			'add_new_item'       => 'Добавление Slider', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование Slider', // для редактирования типа записи
			'new_item'           => 'Новое Slider', // текст новой записи
			'view_item'          => 'Смотреть Slider', // для просмотра записи этого типа.
			'search_items'       => 'Искать Slider', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Slider Banner', // название меню
		),
		'description'         => 'Работы в Slider',
		'public'              => true,
		'publicly_queryable'  => true,
		// зависит от public
		'exclude_from_search' => false,
		// зависит от public
		'show_ui'             => true,
		// зависит от public
		'show_in_menu'        => true,
		// показывать ли в меню адмнки
		'show_in_admin_bar'   => true,
		// по умолчанию значение show_in_menu
		'show_in_nav_menus'   => true,
		// зависит от public
		'show_in_rest'        => null,
		// добавить в REST API. C WP 4.7
		'rest_base'           => null,
		// $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-images-alt',
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => array( 'title', 'editor', 'thumbnail' ),
		// 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => array(),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );
	register_post_type( 'why_us', array(
		'label'               => null,
		'labels'              => array(
			'name'               => 'Why Us', // основное название для типа записи
			'singular_name'      => 'Why Us', // название для одной записи этого типа
			'add_new'            => 'Добавить Why Us', // для добавления новой записи
			'add_new_item'       => 'Добавление Why Us', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование Why Us', // для редактирования типа записи
			'new_item'           => 'Новое Why Us', // текст новой записи
			'view_item'          => 'Смотреть Why Us', // для просмотра записи этого типа.
			'search_items'       => 'Искать Why Us', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Why Us', // название меню
		),
		'description'         => 'Работы в Slider',
		'public'              => true,
		'publicly_queryable'  => true,
		// зависит от public
		'exclude_from_search' => false,
		// зависит от public
		'show_ui'             => true,
		// зависит от public
		'show_in_menu'        => true,
		// показывать ли в меню адмнки
		'show_in_admin_bar'   => true,
		// по умолчанию значение show_in_menu
		'show_in_nav_menus'   => true,
		// зависит от public
		'show_in_rest'        => null,
		// добавить в REST API. C WP 4.7
		'rest_base'           => null,
		// $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-images-alt',
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => array( 'title', 'editor', 'thumbnail' ),
		// 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => array(),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );
	register_post_type( 'services', array(
		'label'               => null,
		'labels'              => array(
			'name'               => 'Services', // основное название для типа записи
			'singular_name'      => 'Services', // название для одной записи этого типа
			'add_new'            => 'Добавить Services', // для добавления новой записи
			'add_new_item'       => 'Добавление Services', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование Services', // для редактирования типа записи
			'new_item'           => 'Новое Services', // текст новой записи
			'view_item'          => 'Смотреть Services', // для просмотра записи этого типа.
			'search_items'       => 'Искать Services', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Services', // название меню
		),
		'description'         => 'Работы в Services',
		'public'              => true,
		'publicly_queryable'  => true,
		// зависит от public
		'exclude_from_search' => false,
		// зависит от public
		'show_ui'             => true,
		// зависит от public
		'show_in_menu'        => true,
		// показывать ли в меню адмнки
		'show_in_admin_bar'   => true,
		// по умолчанию значение show_in_menu
		'show_in_nav_menus'   => true,
		// зависит от public
		'show_in_rest'        => null,
		// добавить в REST API. C WP 4.7
		'rest_base'           => null,
		// $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-images-alt',
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		// 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => array(),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );
	register_post_type( 'teams', array(
		'label'               => null,
		'labels'              => array(
			'name'               => 'Team', // основное название для типа записи
			'singular_name'      => 'Team', // название для одной записи этого типа
			'add_new'            => 'Добавить Team', // для добавления новой записи
			'add_new_item'       => 'Добавление Team', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование Team', // для редактирования типа записи
			'new_item'           => 'Новое Team', // текст новой записи
			'view_item'          => 'Смотреть Team', // для просмотра записи этого типа.
			'search_items'       => 'Искать Team', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Team', // название меню
		),
		'description'         => 'Работы в Team',
		'public'              => true,
		'publicly_queryable'  => true,
		// зависит от public
		'exclude_from_search' => false,
		// зависит от public
		'show_ui'             => true,
		// зависит от public
		'show_in_menu'        => true,
		// показывать ли в меню адмнки
		'show_in_admin_bar'   => true,
		// по умолчанию значение show_in_menu
		'show_in_nav_menus'   => true,
		// зависит от public
		'show_in_rest'        => null,
		// добавить в REST API. C WP 4.7
		'rest_base'           => null,
		// $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-images-alt',
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		// 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => array(),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );
	register_post_type( 'counter', array(
		'label'               => null,
		'labels'              => array(
			'name'               => 'Counter', // основное название для типа записи
			'singular_name'      => 'Counter', // название для одной записи этого типа
			'add_new'            => 'Добавить Counter', // для добавления новой записи
			'add_new_item'       => 'Добавление Counter', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование Counter', // для редактирования типа записи
			'new_item'           => 'Новое Counter', // текст новой записи
			'view_item'          => 'Смотреть Counter', // для просмотра записи этого типа.
			'search_items'       => 'Искать Counter', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Counter', // название меню
		),
		'description'         => 'Работы в Counter',
		'public'              => true,
		'publicly_queryable'  => true,
		// зависит от public
		'exclude_from_search' => false,
		// зависит от public
		'show_ui'             => true,
		// зависит от public
		'show_in_menu'        => true,
		// показывать ли в меню адмнки
		'show_in_admin_bar'   => true,
		// по умолчанию значение show_in_menu
		'show_in_nav_menus'   => true,
		// зависит от public
		'show_in_rest'        => null,
		// добавить в REST API. C WP 4.7
		'rest_base'           => null,
		// $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => 'dashicons-images-alt',
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		// 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => array(),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );
}


function theme_sidebar() {
	register_sidebar( array(
		'name'          => 'колонка виджетов',
		'id'            => "right_sidebar",
		'description'   => 'вствавъ сюда виджеты',
		'before_widget' => '<div  class="widget %2$s">',
		'after_widget'  => "</div>\n",
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => "</h5>\n",
	) );
}

function theme_menu() {
	register_nav_menu( 'top', 'меню в шапке' );
	register_nav_menu( 'bottom', 'меню в подвале' );
	add_theme_support( 'custom-logo' );
	add_theme_support( 'post-thumbnails', array( 'post', 'slider_banner', 'teams' ) );
}

function theme_style() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css' );
	wp_enqueue_style( 'swiper', get_template_directory_uri() . '/assets/css/swiper.min.css' );
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.min.css' );
	wp_enqueue_style( 'venobox', get_template_directory_uri() . '/assets/css/venobox.css' );
	wp_enqueue_style( 'rateyo', get_template_directory_uri() . '/assets/css/rateyo.min.css' );
	wp_enqueue_style( 'flaticon', get_template_directory_uri() . '/assets/css/flaticon.css' );
	wp_enqueue_style( 'main-style', get_template_directory_uri() . '/assets/css/style.css' );
}


function theme_script() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.min.js' );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'popper', get_template_directory_uri() . '/assets/js/popper.min.js', [ 'jquery' ], null, true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', [ 'jquery' ], null, true );
	wp_enqueue_script( 'plugins', get_template_directory_uri() . '/assets/js/plugins.js', [ 'jquery' ], null, true );
	wp_enqueue_script( 'gmap3', get_template_directory_uri() . '/assets/js/gmap3.min.js', [ 'jquery' ], null, true );
	wp_enqueue_script( 'jquery.knob', get_template_directory_uri() . '/assets/js/jquery.knob.min.js', [ 'jquery' ], null, true );
	wp_enqueue_script( 'jquery.appear', get_template_directory_uri() . '/assets/js/jquery.appear.js', [ 'jquery' ], null, true );
	wp_enqueue_script( 'swiperRunner.min', get_template_directory_uri() . '/assets/js/swiperRunner.min.js', [ 'jquery' ], null, true );
	wp_enqueue_script( 'custom', get_template_directory_uri() . '/assets/js/custom.js', [ 'jquery' ], null, true );
}

//Polyang
add_action('init', function () {
	pll_register_string('tel', 'tel');
});













	 





