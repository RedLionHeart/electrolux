<?php
/**
 * electrolux functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package electrolux
 */

if ( ! function_exists( 'electrolux_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function electrolux_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on electrolux, use a find and replace
		 * to change 'electrolux' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'electrolux', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'electrolux' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'electrolux_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'electrolux_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function electrolux_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'electrolux_content_width', 640 );
}
add_action( 'after_setup_theme', 'electrolux_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function electrolux_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'electrolux' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'electrolux' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'electrolux_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function electrolux_scripts() {
	wp_enqueue_style( 'electrolux-font', 'https://fonts.googleapis.com/css?family=Montserrat:400,700,800&display=swap' );
	wp_enqueue_style( 'electrolux-fancybox', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css' );
	wp_enqueue_style( 'electrolux-ui', 'https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css' );
    wp_enqueue_style( 'electrolux-style', get_stylesheet_uri() );

	wp_enqueue_script('electrolux-jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js', false, false, true );

    wp_enqueue_script('electrolux-inputmask', 'https://cdnjs.cloudflare.com/ajax/libs/inputmask/4.0.9/jquery.inputmask.bundle.min.js', 'electrolux-jquery', false, true);
    wp_enqueue_script('electrolux-jquery-ui', 'https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js', 'electrolux-jquery', false, true);
    wp_enqueue_script('electrolux-fancybox', get_template_directory_uri() . '/src/js/jquery.fancybox.min.js', 'electrolux-jquery', false, true);
    wp_enqueue_script('electrolux-libs', get_template_directory_uri() . '/src/js/libs.min.js', 'electrolux-jquery', false, true);
    wp_enqueue_script('electrolux-main', get_template_directory_uri() . '/src/js/main.js', 'electrolux-jquery', false, true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'electrolux_scripts' );

// Create condic post type
add_action( 'init', 'register_post_types' );
function register_post_types(){
    $args = [
        'labels' => [
            'name' => 'Кондиционеры',
            'singular_name' => 'Кондиционер',
            'add_new' => 'Добавить новый',
            'search_items' => 'Поиск кондиционеров',
            'not_found' => 'Кондиционеров не было найдено',
        ],
        'description' => 'Тип товара кондиционеры',
        'menu_icon' => 'dashicons-carrot',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports' => [ 'title', 'editor', 'thumbnail'],
        //'rewrite' => array( 'slug' => 'каталог' ),
        //'rewrite' => array( 'slug' => 'каталог' ),
        // 'capabilities' => [

        // ]
    ];
    register_post_type( 'condition', $args );
}

function remove_post_slug( $post_link, $post, $leavename ) {

    if ( 'condition' != $post->post_type || 'publish' != $post->post_status ) {
        return $post_link;
    }

    $post_link = str_replace( '/' . $post->post_type . '/', '/', $post_link );

    return $post_link;
}
add_filter( 'post_type_link', 'remove_post_slug', 10, 3 );


function parse_request_trick( $query ) {

    if ( ! $query->is_main_query() || 2 != count( $query->query ) || ! isset( $query->query['page'] ) ) {
        return;
    }

    if ( ! empty( $query->query['name'] ) ) {
        $query->set( 'post_type', array( 'post', 'condition', 'page' ) );
    }
}
add_action( 'pre_get_posts', 'parse_request_trick' );

function condition_init() {
    // create a new taxonomy
    $labels = array(
        'name' => _x( 'Тип кондиционера', 'taxonomy general name' ),
        'singular_name' => _x( 'Тип кондиционера', 'taxonomy singular name' ),
    );

    register_taxonomy('type',array('condition'), array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'типы' ),
    ));

    // tax
    $labels = array(
        'name' => _x( 'Стоимость', 'taxonomy general name' ),
    );
    register_taxonomy('functions',array('condition'), array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'стоимость' ),
    ));

    // tax
    $labels = array(
        'name' => _x( 'Обслуживаемая площадь', 'taxonomy general name' )
    );
    register_taxonomy('servesedarea',array('condition'), array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'обслуживаемая-площадь' ),
    ));
}
add_action( 'init', 'condition_init' );

add_filter( 'facetwp_is_main_query', function( $is_main_query, $query ) {

    if ( $query->query_vars['facetwp'] == true ) {

        $is_main_query = true;
    }
    else{
        $is_main_query = false;
    }


    return $is_main_query;
}, 10, 2 );

function add_comment_menu() {
    add_menu_page(
        'Комментарии', // имя в меню
        'Комментарии к кондиционерам', // title страницы
        'manage_options', // уровень доступа
        'conditions_comments', // slug страницы
        'render_comment_page', // функция, отображающая собственно страницу
        'dashicons-editor-help', // иконка
        '50' // позиция в меню
    );
}
add_action('admin_menu', 'add_comment_menu');

function render_comment_page() {
    global $wpdb;
    $testimonials = $wpdb->get_results("SELECT * FROM wp_testimonials ORDER BY date_added DESC");
    if( $testimonials ){
        ?>
        <table class="comments_wrapper">
        <thead>
        <tr>
            <td>Пост</td>
            <td>Рейтинг</td>
            <td>Отзыв</td>
            <td>Достоинства</td>
            <td>Недостатки</td>
            <td>Дата добавления</td>
            <td>Опубликовано</td>
        </tr>
        </thead>
        <?php
        foreach ($testimonials as $testimonial) { ?>
            <tr class="comment_body" id="comment<?php echo $testimonial->id?>">
                <td><a href="/wp-admin/post.php?post=<?php echo $testimonial->post_id?>&action=edit" target="_blank"><?php echo $testimonial->post_id?></a></td>
                <td style="width:2%"><input style="width:100%" name="stars" type="text" value="<?php echo $testimonial->stars?>"></td>
                <td><textarea style="width:100%; height: 300px;" name="testimonial"><?php echo $testimonial->testimonial?></textarea></td>
                <td><textarea style="width:100%; height: 300px;" name="plus"><?php echo $testimonial->plus?></textarea></td>
                <td><textarea style="width:100%; height: 300px;" name="minus"><?php echo $testimonial->minus?></textarea></td>
                <td><?php echo $testimonial->date_added?></td>
                <td>
                    <input type="checkbox" <?php if ($testimonial->publish) { echo 'checked'; } ?> value="<?php echo $testimonial->publish; ?>" class="publish" name="publish">
                    <input type="hidden" name="action" value="edit_testimonial">
                    <input type="hidden" name="id" value="<?php echo $testimonial->id?>">
                </td>
                <td><a href="javascript:void(0)" id="com_save" data-id="<?php echo $testimonial->id?>">Сохранить</a></td>
                <td><a href="javascript:void(0)" id="com_delete" data-id="<?php echo $testimonial->id?>">Удалить</a></td>
            </tr>
        <? }
        echo '</table>';
    }
    ?>
    <script>
        jQuery(document).on('click','.publish',function() {
            if (jQuery(this).val() == 0) {
                jQuery(this).val('1');
            } else {
                jQuery(this).val('0');
            }
        });
        jQuery(document).on('click','#com_save',function() {
            var inputs = jQuery('#comment'+jQuery(this).attr('data-id')).find('input,select,textarea'), object={};
            jQuery.each(inputs, function(num, element){
                object[jQuery(element).attr('name')] = jQuery(element).val()
            });
            jQuery.ajax({
                type: 'POST',
                url: '/wp-admin/admin-ajax.php',
                data: object,
                success: function(data) {
                    alert('Сохранено');
                },
                error: function () {
                    console.log(data);
                }
            });
        });
        jQuery(document).on('click','#com_delete',function() {
            var object = {};
            var delete_block = jQuery(this).attr('data-id');
            object['action'] = 'delete_testimonial';
            object['id'] = jQuery(this).attr('data-id');
            jQuery.ajax({
                type: 'POST',
                url: '/wp-admin/admin-ajax.php',
                data: object,
                success: function(data) {
                    jQuery('#comment'+delete_block).remove();
                    jQuery('#buttons'+delete_block).remove();
                    alert('Удалено');

                },
                error: function () {
                    console.log(data);
                }
            });
        });
    </script>
    <?php
}

function edit_testimonial() {
    global $wpdb;
    $wpdb->update( 'wp_testimonials',
        array( 'stars' => $_POST['stars'], 'testimonial' => $_POST['testimonial'], 'plus' => $_POST['plus'], 'minus' => $_POST['minus'], 'photo' => $_POST['photo'], 'video' => $_POST['video'], 'name' => $_POST['name'], 'city' => $_POST['city'], 'email' => $_POST['email'], 'publish' => $_POST['publish'] ),
        array( 'id' => $_POST['id'] )
    );
    var_dump($wpdb->last_error);
    $data = array('response' => 'ok' );
    echo json_encode( $data );
    exit;
}
add_action( 'wp_ajax_nopriv_edit_testimonial', 'edit_testimonial' );
add_action( 'wp_ajax_edit_testimonial', 'edit_testimonial' );

function delete_testimonial() {
    global $wpdb;
    $wpdb->delete( 'wp_testimonials', array( 'id' => $_POST['id'] ) );
    var_dump($wpdb->last_error);
    $data = array('response' => 'ok' );
    echo json_encode( $data );
    exit;
}
add_action( 'wp_ajax_nopriv_delete_testimonial', 'delete_testimonial' );
add_action( 'wp_ajax_delete_testimonial', 'delete_testimonial' );

function add_testimonial() {
    global $wpdb;
    if ($wpdb->insert("wp_testimonials",
        array("post_id" => $_POST['post_id'], "stars" => $_POST['stars'], "testimonial" => $_POST['testimonial'], "plus" => $_POST['plus'], "minus" => $_POST['minus']),
        array("%d","%d","%s","%s","%s"))) {
        $data = array('response' => 'ok' );
    } else {
        $data = array('response' => 'false' );
    }
    var_dump($wpdb->last_error);
    echo json_encode( $data );
    exit;
}
add_action( 'wp_ajax_nopriv_add_testimonial', 'add_testimonial' );
add_action( 'wp_ajax_add_testimonial', 'add_testimonial' );

function cyrillic_translit( $title ){
    $iso9_table = array(
        'А' => 'A', 'Б' => 'B', 'В' => 'V', 'Г' => 'G', 'Ѓ' => 'G',
        'Ґ' => 'G', 'Д' => 'D', 'Е' => 'E', 'Ё' => 'YO', 'Є' => 'YE',
        'Ж' => 'ZH', 'З' => 'Z', 'Ѕ' => 'Z', 'И' => 'I', 'Й' => 'J',
        'Ј' => 'J', 'І' => 'I', 'Ї' => 'YI', 'К' => 'K', 'Ќ' => 'K',
        'Л' => 'L', 'Љ' => 'L', 'М' => 'M', 'Н' => 'N', 'Њ' => 'N',
        'О' => 'O', 'П' => 'P', 'Р' => 'R', 'С' => 'S', 'Т' => 'T',
        'У' => 'U', 'Ў' => 'U', 'Ф' => 'F', 'Х' => 'H', 'Ц' => 'TS',
        'Ч' => 'CH', 'Џ' => 'DH', 'Ш' => 'SH', 'Щ' => 'SHH', 'Ъ' => '',
        'Ы' => 'Y', 'Ь' => '', 'Э' => 'E', 'Ю' => 'YU', 'Я' => 'YA',
        'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'ѓ' => 'g',
        'ґ' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'yo', 'є' => 'ye',
        'ж' => 'zh', 'з' => 'z', 'ѕ' => 'z', 'и' => 'i', 'й' => 'j',
        'ј' => 'j', 'і' => 'i', 'ї' => 'yi', 'к' => 'k', 'ќ' => 'k',
        'л' => 'l', 'љ' => 'l', 'м' => 'm', 'н' => 'n', 'њ' => 'n',
        'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't',
        'у' => 'u', 'ў' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'ts',
        'ч' => 'ch', 'џ' => 'dh', 'ш' => 'sh', 'щ' => 'shh', 'ъ' => '',
        'ы' => 'y', 'ь' => '', 'э' => 'e', 'ю' => 'yu', 'я' => 'ya'
    );

    $name = strtr( $title, $iso9_table );
    $name = preg_replace('~[^A-Za-z0-9\'_\-\.]~', '-', $name );
    $name = preg_replace('~\-+~', '-', $name ); // --- на -
    $name = preg_replace('~^-+|-+$~', '', $name ); // кил - на концах

    return $name;
}

function condition_testimonials($data) {
    global $wpdb;
    $testimonials = $wpdb->get_results("SELECT * FROM wp_testimonials WHERE post_id = '".$data['id']."' AND publish = 1 ORDER BY date_added DESC");
    $html = '';
    $counter_testimonials = 1;
    if( $testimonials ){
        foreach ($testimonials as $testimonial) {
            $stars = '';
            $gallery = '';
            if ($testimonial->stars) {
                $width = $testimonial->stars * 2 * 10;
                $stars .= '<div class="t_stars">
                            <div class="color" style="width:'.$width.'%"></div>
                            <img src="'.get_template_directory_uri().'/src/images/stars_bg.png">
                          </div>';
            }
            $date = date("d-m-Y", strtotime($testimonial->date_added));
            $html .=
                '<div class="testimonial">
                    <div class="t_top">
                        <div class="t_name">Отзыв №' . $counter_testimonials . '</div>
                        '.$stars.'
                        <div class="t_date">'.$date.'</div>                        
                    </div>
                    <div class="t_comment">'.$testimonial->testimonial.'</div>
                    <div class="t_bottom">
                        <div class="t_plus"><b>Плюсы:</b> '.$testimonial->plus.'</div>
                        <div class="t_minus"><b>Минусы</b>: '.$testimonial->minus.'</div>
                    </div>
                    <div id="slider-preview_testimonials">
                        '.$gallery.'     
                    </div>              
                </div>';
            $counter_testimonials++;
        }
    }

    if (empty($html)) {
        return '<p>Отзывов пока нету</p>';
    } else {
        return '<div id="testimonials_list"><div class="testimonials_list">' . $html . '</div></div>';
    }
}
add_shortcode( 'testimonials_list', 'condition_testimonials' );

function getTestimonialsCount($data) {
    global $wpdb;
    $testimonialsCount = $wpdb->get_results("SELECT COUNT(id) as count FROM wp_testimonials WHERE post_id = '".$data['id']."' AND publish = 1 ORDER BY date_added DESC");
    $count = ($testimonialsCount[0]->count) ? $testimonialsCount[0]->count : 0;
    return $count;
}
add_shortcode( 'testimonials_count', 'getTestimonialsCount' );


function true_loadmore_scripts() {
    if ( is_main_query() ) {
        // Archive
        //if ( is_archive() || is_page('каталог/')) {
        wp_enqueue_script( 'true_loadmore', get_stylesheet_directory_uri() . '/src/js/loadmore.js', array('jquery') );
        //}
    }
}

add_action( 'wp_enqueue_scripts', 'true_loadmore_scripts' );

function true_load_posts(){
    $term = get_term_by('slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );

    $args = unserialize( stripslashes( $_POST['query'] ) );
    $args["post_type"] = "condition";
    $args["facetwp"] = true;
    $args["tax_query"] = [
        'taxonomy' => $term->taxonomy,
        'field'    => 'slug',
        'terms'    => $term->slug,
    ];
    $args["paged"] = $_POST['page'] + 1; // следующая страница
    $args["post_status"] = 'publish';


    // обычно лучше использовать WP_Query, но не здесь
    query_posts( $args );
    // если посты есть
    if( have_posts() ) :

        // запускаем цикл
        while( have_posts() ): the_post();

            '<a href="#">TEST</a>';

        endwhile;

    endif;
    die();
}
add_action('wp_ajax_loadmore', 'true_load_posts');
add_action('wp_ajax_nopriv_loadmore', 'true_load_posts');

function fwp_home_custom_query( $query ) {
    if ( $query->is_home() && $query->is_main_query() ) {
        $query->set( 'post_type', 'condition' );
        $query->set( 'orderby', 'title' );
        $query->set( 'order', 'ASC' );
    }
}
add_filter( 'pre_get_posts', 'fwp_home_custom_query' );

function fwp_disable_auto_refresh() {
?>
<script>
(function($) {
    $(function() {
        if ('undefined' !== typeof FWP) {
            FWP.auto_refresh = false;
        }
    });
})(jQuery);
</script>
<?php
}
add_action( 'wp_head', 'fwp_disable_auto_refresh', 100 );

$options = array(
    'default' => array(
        'label' => __( 'Sort by', 'fwp' ),
        'query_args' => array()
    ),
    'title_asc' => array(
        'label' => __( 'Title (A-Z)', 'fwp' ),
        'query_args' => array(
            'orderby' => 'title',
            'order' => 'ASC',
        )
    ),
    'title_desc' => array(
        'label' => __( 'Title (Z-A)', 'fwp' ),
        'query_args' => array(
            'orderby' => 'title',
            'order' => 'DESC',
        )
    ),
    'date_desc' => array(
        'label' => __( 'Date (Newest)', 'fwp' ),
        'query_args' => array(
            'orderby' => 'date',
            'order' => 'DESC',
        )
    ),
    'date_asc' => array(
        'label' => __( 'Date (Oldest)', 'fwp' ),
        'query_args' => array(
            'orderby' => 'date',
            'order' => 'ASC',
        )
    )
);


function fwp_load_more() {
?>

<script>
(function($) {
    $(function() {
        if ('object' != typeof FWP) {
            return;
        }

        FWP.hooks.addFilter('facetwp/template_html', function(resp, params) {
            if (FWP.is_load_more) {
                FWP.is_load_more = false;
                $('.facetwp-template').append(params.html);
                return true;
            }
            return resp;
        });
$(document).on('click', '.fwp-load-more', function() {
    $('.fwp-load-more').html('Показать больше моделей');
    FWP.is_load_more = true;
    FWP.paged = parseInt(FWP.settings.pager.page) + 1;
    FWP.soft_refresh = true;
    FWP.refresh();
});

    });
})(jQuery);
</script>
<?php
}
add_action( 'wp_head', 'fwp_load_more', 99 );


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
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function at_remove_dup_canonical_link() {
return false;
}
add_filter( 'wpseo_canonical', 'at_remove_dup_canonical_link' );