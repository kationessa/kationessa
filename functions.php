<?php
remove_filter('the_content', 'wpautop');

function wpt_register_js() {

	wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js');
    wp_enqueue_script( 'jquery' );


    wp_register_script('bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery');
    wp_enqueue_script('bootstrap.min');

 //   wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js');
	// wp_enqueue_script('bootstrap');

	// wp_register_script('npm', get_template_directory_uri() . '/js/npm.js');
	// wp_enqueue_script('npm');

	wp_register_script('audio', get_template_directory_uri() . '/audio1/list.js');
	wp_enqueue_script('audio');

	wp_register_script('popup', get_template_directory_uri() . '/js/popup.js');
	wp_enqueue_script('popup');

}

add_action( 'wp_enqueue_scripts', 'wpt_register_js' );

function register_styles(){
	 wp_register_style( 'bootstrap.css', get_template_directory_uri() . '/css/bootstrap.css' );
    wp_enqueue_style( 'bootstrap.css' );

    wp_register_style( 'bootstrap-theme.css', get_template_directory_uri() . '/css/bootstrap-theme.css' );
    wp_enqueue_style( 'bootstrap-theme.css' );

     wp_register_style( 'style.css', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'style.css' );


    wp_register_style( 'player.css', get_template_directory_uri() . '/audio1/player.css' );
    wp_enqueue_style( 'player.css' );

     wp_register_style( 'media.css', get_template_directory_uri() . '/css/media.css' );
    wp_enqueue_style( 'media.css' );

    

}
add_action( 'wp_enqueue_scripts', 'register_styles' );






function enqueue_styles() {
	// wp_enqueue_style( 'cormorant-style', get_stylesheet_uri());
	wp_register_style('font-cormorant', 'https://fonts.googleapis.com/css?family=Cormorant');
	wp_enqueue_style( 'font-cormorant');

	// wp_enqueue_style( 'roboto-style', get_stylesheet_uri());
	wp_register_style('font-roboto', 'https://fonts.googleapis.com/css?family=Roboto:300,500');
	wp_enqueue_style( 'font-roboto');

	// wp_enqueue_style( 'uni', get_stylesheet_uri());
	wp_register_style('font-cu', 'https://fonts.googleapis.com/css?family=Cormorant+Unicase');
	wp_enqueue_style( 'font-cu');
}
add_action('wp_enqueue_scripts', 'enqueue_styles');









class True_Walker_Head_Menu extends Walker_Nav_Menu {
	/**
	 * @see Walker::start_el()
	 * @since 3.0.0
	 *
	 * @param string $output
	 * @param object $item Объект элемента меню, подробнее ниже.
	 * @param int $depth Уровень вложенности элемента меню.
	 * @param object $args Параметры функции wp_nav_menu
	 */
	function start_el(&$output, $item, $depth, $args) {
		global $wp_query;           
		/*
		 * Некоторые из параметров объекта $item
		 * ID - ID самого элемента меню, а не объекта на который он ссылается
		 * menu_item_parent - ID родительского элемента меню
		 * classes - массив классов элемента меню
		 * post_date - дата добавления
		 * post_modified - дата последнего изменения
		 * post_author - ID пользователя, добавившего этот элемент меню
		 * title - заголовок элемента меню
		 * url - ссылка
		 * attr_title - HTML-атрибут title ссылки
		 * xfn - атрибут rel
		 * target - атрибут target
		 * current - равен 1, если является текущим элементов
		 * current_item_ancestor - равен 1, если текущим является вложенный элемент
		 * current_item_parent - равен 1, если текущим является вложенный элемент
		 * menu_order - порядок в меню
		 * object_id - ID объекта меню
		 * type - тип объекта меню (таксономия, пост, произвольно)
		 * object - какая это таксономия / какой тип поста (page /category / post_tag и т д)
		 * type_label - название данного типа с локализацией (Рубрика, Страница)
		 * post_parent - ID родительского поста / категории
		 * post_title - заголовок, который был у поста, когда он был добавлен в меню
		 * post_name - ярлык, который был у поста при его добавлении в меню
		 */
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
 
		/*
		 * Генерируем строку с CSS-классами элемента меню
		 */
		$class_names = $value = '';
		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		$classes[] = 'menu-item-' . $item->ID;
 
		// функция join превращает массив в строку
		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
		$class_names = ' class="' . esc_attr( $class_names ) . '"';
 
		/*
		 * Генерируем ID элемента
		 */
		$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
		$id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';
 
		/*
		 * Генерируем элемент меню
		 */
		// $output .= $indent . '<div' . $id . $value . $class_names .'>';
 
		// атрибуты элемента, title="", rel="", target="" и href=""
		$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
		$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
		$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
		$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
		$attributes .= ' class="navitem"';
 
		// ссылка и околоссылочный текст
		$item_output = $args->before;
		$item_output .= '<a'. $attributes .'>';
		$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
		$item_output .= '</a>';
		$item_output .= $args->after;
 
 		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
}

// $args = array(
// 	'theme_location' => 'head_menu',
// 	'walker'=> new True_Walker_Head_Menu() // этот параметр нужно добавить
 
// );

// wp_nav_menu($args );

register_nav_menus(
	array(
		'head_menu' => 'Header menu'
	)
);



$_LMM = array("Січеня","Лютого","Березня","Квітня","Травня","Червня","Липня","Серпня","Вересня","Жовтня","Листопада","Грудня");