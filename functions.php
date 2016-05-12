<?php
/**
 * Функции шаблона (function.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */

define('TM_DIR', get_template_directory(__FILE__));
define('TM_URL', get_template_directory_uri(__FILE__));

require_once TM_DIR . '/lib/Parser.php';
require_once TM_DIR . '/lib/bootstrap_menu.php';
require_once TM_DIR . '/lib/clean_comments_constructor.php';

function typical_title() { // функция вывода тайтла
	global $page, $paged; // переменные пагинации должны быть глобыльными
	wp_title('', true, 'right'); // вывод стандартного заголовка без разделителя
	$site_description = get_bloginfo('description', 'display'); // получаем описание сайта
	if ($site_description && (is_home() || is_front_page())) //если описание сайта есть и мы на главной
		echo " | $site_description"; // выводим описание сайта с "|" разделителем
	if ($paged >= 2 || $page >= 2) // если пагинация была использована
		echo ' | '.sprintf(__( 'Страница %s'), max($paged, $page)); // покажем номер страницы с "|" разделителем
}

register_nav_menus(array( // Регистрируем 2 меню
	'top' => 'Верхнее', // Верхнее
	'bottom' => 'Внизу' // Внизу
));

add_theme_support('post-thumbnails'); // включаем поддержку миниатюр
set_post_thumbnail_size(250, 150); // задаем размер миниатюрам 250x150
add_image_size('big-thumb', 400, 400, true); // добавляем еще один размер картинкам 400x400 с обрезкой

register_sidebar(array( // регистрируем левую колонку, этот кусок можно повторять для добавления новых областей для виджитов
	'name' => 'Сайдбар', // Название в админке
	'id' => "sidebar", // идентификатор для вызова в шаблонах
	'description' => 'Обычная колонка в сайдбаре', // Описалово в админке
	'before_widget' => '<div id="%1$s" class="widget %2$s">', // разметка до вывода каждого виджета
	'after_widget' => "</div>\n", // разметка после вывода каждого виджета
	'before_title' => '<span class="widgettitle">', //  разметка до вывода заголовка виджета
	'after_title' => "</span>\n", //  разметка после вывода заголовка виджета
));

function pagination() { // функция вывода пагинации
	global $wp_query; // текущая выборка должна быть глобальной
	$big = 999999999; // число для замены
	$links = paginate_links(array( // вывод пагинации с опциями ниже
		'base' => str_replace($big,'%#%',esc_url(get_pagenum_link($big))), // что заменяем в формате ниже
		'format' => '?paged=%#%', // формат, %#% будет заменено
		'current' => max(1, get_query_var('paged')), // текущая страница, 1, если $_GET['page'] не определено
		'type' => 'array', // нам надо получить массив
		'prev_text'    => 'Назад', // текст назад
    	'next_text'    => 'Вперед', // текст вперед
		'total' => $wp_query->max_num_pages, // общие кол-во страниц в пагинации
		'show_all'     => false, // не показывать ссылки на все страницы, иначе end_size и mid_size будут проигнорированны
		'end_size'     => 15, //  сколько страниц показать в начале и конце списка (12 ... 4 ... 89)
		'mid_size'     => 15, // сколько страниц показать вокруг текущей страницы (... 123 5 678 ...).
		'add_args'     => false, // массив GET параметров для добавления в ссылку страницы
		'add_fragment' => '',	// строка для добавления в конец ссылки на страницу
		'before_page_number' => '', // строка перед цифрой
		'after_page_number' => '' // строка после цифры
	));
 	if( is_array( $links ) ) { // если пагинация есть
	    echo '<ul class="pagination">';
	    foreach ( $links as $link ) {
	    	if ( strpos( $link, 'current' ) !== false ) echo "<li class='active'>$link</li>"; // если это активная страница
	        else echo "<li>$link</li>"; 
	    }
	   	echo '</ul>';
	 }
}

add_action('wp_footer', 'add_scripts'); // приклеем ф-ю на добавление скриптов в футер
function add_scripts() { // добавление скриптов
    if(is_admin()) return false; // если мы в админке - ничего не делаем
    wp_deregister_script('jquery'); // выключаем стандартный jquery
    wp_enqueue_script('libs',get_template_directory_uri().'/js/libs.min.js','','',true); // добавляем свой
    wp_enqueue_script('custom-scripts', get_template_directory_uri().'/js/script.min.js','','',true); // бутстрап
    wp_enqueue_script('owl', get_template_directory_uri().'/js/owl.carousel.min.js','','',true); // бутстрап
    wp_enqueue_script('main', get_template_directory_uri().'/js/main.js','','',true); // и скрипты шаблона
	wp_localize_script('main', 'myajax',
		array(
			'url' => admin_url('admin-ajax.php')
		)
	);
}

add_action('wp_print_styles', 'add_styles'); // приклеем ф-ю на добавление стилей в хедер
function add_styles() { // добавление стилей
    if(is_admin()) return false; // если мы в админке - ничего не делаем
    wp_enqueue_style( 'libs', get_template_directory_uri().'/css/libs.min.css' );// бутстрап
    wp_enqueue_style( 'custom-styles', get_template_directory_uri().'/css/style.min.css' ); 
    wp_enqueue_style( 'styles', get_template_directory_uri().'/css/style.min.css' ); 
    wp_enqueue_style( 'owl', get_template_directory_uri().'/css/owl.carousel.css' ); 
	wp_enqueue_style( 'main', get_template_directory_uri().'/style.css' ); // основные стили шаблона
}

function prn($content) {
	echo '<pre style="background: lightgray; border: 1px solid black; padding: 2px">';
	print_r ( $content );
	echo '</pre>';
}

function content_class_by_sidebar() { // функция для вывода класса в зависимости от существования виджетов в сайдбаре
	if (is_active_sidebar( 'sidebar' )) { // если есть
		echo 'col-sm-9'; // пишем класс на 80% ширины
	} else { // если нет
		echo 'col-sm-12'; // контент на всю ширину
	}
}

// AJAX ACTION
add_action( 'wp_ajax_header', 'headerForm' );
add_action( 'wp_ajax_nopriv_header', 'headerForm' );

function headerForm() {
    if ( $_POST ) {
        $adminMail = get_option( 'admin_email' );

        if ( $_POST['name'] && $_POST['email'] ) {
            $str = "С вашего сайта оставили заявку на обратную связь:<br>";
            $str .= 'Имя: ' . $_POST["name"] . ' <br>';
            $str .= 'Телефон: ' . $_POST["phone"] . ' <br>';
            $str .= 'Почта: ' . $_POST["email"] . ' <br>';

            if ( ! empty( $_POST['detail'] ) ) {
                $str .= 'Деталь: ' . $_POST["detail"] . ' <br>';
            }

            mail( $adminMail, "Письмо с сайта Автозапчасти", $str, "Content-type: text/html; charset=UTF-8\r\n" );
        }
    }
    wp_die();
}

// AJAX ACTION
add_action( 'wp_ajax_find', 'findCarForm' );
add_action( 'wp_ajax_nopriv_find', 'findCarForm' );

function findCarForm() {
    if ( $_POST ) {
        $adminMail = get_option( 'admin_email' );

        if ( $_POST['name'] && $_POST['phone'] ) {
            $str = "С вашего сайта оставили заявку на комплектующие:<br>";
            $str .= 'Имя: ' . $_POST["name"] . ' <br>';
            $str .= 'Телефон: ' . $_POST["phone"] . ' <br>';

            mail( $adminMail, "Письмо с сайта Автозапчасти", $str, "Content-type: text/html; charset=UTF-8\r\n" );
        }
    }
    wp_die();
}

// AJAX ACTION
add_action( 'wp_ajax_sale', 'saleForm' );
add_action( 'wp_ajax_nopriv_sale', 'saleForm' );

function saleForm() {
    if ( $_POST ) {
        $adminMail = get_option( 'admin_email' );

        if ( $_POST['name'] && $_POST['phone'] ) {
            $str = "С вашего сайта оставили заявку со скидкой 5%:<br>";
            $str .= 'Имя: ' . $_POST["name"] . ' <br>';
            $str .= 'Телефон: ' . $_POST["phone"] . ' <br>';
            $str .= 'Почта: ' . $_POST["email"] . ' <br>';

            mail( $adminMail, "Письмо с сайта Автозапчасти", $str, "Content-type: text/html; charset=UTF-8\r\n" );
        }
    }
    wp_die();
}


/*------------------------------------------------ REVIEWS -----------------------------------------------------------*/

add_action( 'init', 'initReviews' );

function initReviews() {
    $labels = array(
        'name'               => 'Отзывы', // Основное название типа записи
        'singular_name'      => 'Отзывы', // отдельное название записи типа Book
        'add_new'            => 'Добавить отзыв',
        'add_new_item'       => 'Добавить новый отзыв',
        'edit_item'          => 'Редактировать отзыв',
        'new_item'           => 'Новый отзыв',
        'view_item'          => 'Посмотреть отзыв',
        'search_items'       => 'Найти отзыв',
        'not_found'          => 'Отзывов не найдено',
        'not_found_in_trash' => 'В корзине отзывов не найдено',
        'parent_item_colon'  => '',
        'menu_name'          => 'Отзывы'

    );
    $args   = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail' )
    );
    register_post_type( 'reviews', $args );
}

function reviewsShortcode() {
    $args = array(
        'post_type'      => 'reviews',
        'post_status'    => 'publish',
        'posts_per_page' => - 1
    );

    $my_query = null;
    $my_query = new WP_Query( $args );

    $parser = new Parser();
    if ( $_POST ) {
        echo $parser->render( TM_DIR . '/view/reviews.php', [ 'my_query' => $my_query ] );
        die();
    } else {
        $parser->render( TM_DIR . '/view/reviews.php', [ 'my_query' => $my_query ] );
    }
}

add_shortcode( 'reviews', 'reviewsShortcode' );

//product realtors custom field
function reviewCity( $post ) {
    ?>
    <p>
        <span>Город: </span>
        <input type="text" name="extra[city]" value="<?php echo get_post_meta( $post->ID, "city", 1 ); ?>">
    </p>
    <?php
}

//register custom fields
function registerCustomFields() {
    add_meta_box( 'extra_city', 'Город', 'reviewCity', 'reviews', 'normal', 'high' );
}

add_action( 'add_meta_boxes', 'registerCustomFields', 1 );

/* Сохраняем данные, при сохранении поста*/
function updateCustomFields( $post_id ) {
    if ( ! isset( $_POST['extra'] ) ) {
        return false;
    }
    foreach ( $_POST['extra'] as $key => $value ) {
        if ( empty( $value ) ) {
            delete_post_meta( $post_id, $key ); // удаляем поле если значение пустое
            continue;
        }

        update_post_meta( $post_id, $key, $value ); // add_post_meta() работает автоматически
    }

    return $post_id;
}

add_action( 'save_post', 'updateCustomFields', 10, 1 );
/*----------------------------------------------- END REVIEWS --------------------------------------------------------*/