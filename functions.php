<?php
function my_setup()
{
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        )
        );
    }
    add_action('after_setup_theme','my_setup');

/* ---------------------------------------
* CSS / JavaScriptの読み込み
* -------------------------------------- */
function my_script_init()
{
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery','//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js',array(),'1.7.1',true );
    wp_enqueue_script('script',get_template_directory_uri().'/js/main.js',array( 'jquery' ),'1.0.1',true );
    wp_enqueue_style('style-name',get_template_directory_uri().'/css/style.css', array(),'1.0.1' );
    wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css2?family=Inter&display=swap' );
    wp_enqueue_style( 'noto-sans', '//fonts.googleapis.com/css?family=Noto+Sans+JP' );

}
add_action('wp_enqueue_scripts','my_script_init' );

// Global site tag (gtag.js) - Google Analytics
function hook_google_analytics() {
    echo <<<EOF


    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-198458447-5"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'UA-198458447-5');
    </script>


    <script async src="https://www.googletagmanager.com/gtag/js?id=G-CH3QSBJQR9"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-CH3QSBJQR9');
    </script>
EOF;
}

add_action('wp_head', 'hook_google_analytics');




// 記事表示時の成形無効化
add_action('wp_head','autop');
  function autop(){
    remove_filter('the_content','wpauttop');
    remove_filter('the_excerpt','wpautop');
    remove_filter('the_title','wpautoh');
  }


/**
 * メニューの登録
 *
 * @codex https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/register_nav_menus
 */
function my_menu_init() {
	register_nav_menus( array(
		'global'  => 'グローバルメニュー',
		'global-lower'  => 'グローバルローワーメニュー',
		'drawer'  => 'ドロワーメニュー',
        'footer' =>'フッターメニュー',
        'footer-lower' =>'フッターローワーメニュー',
	) );
}
add_action( 'init', 'my_menu_init' );

// wp_nav_menuのliにのliにclass追加
function add_additional_class_on_li($classes,$item,$args)
{
if (isset( $args->add_li_class)){
    $classes['class'] = $args ->add_li_class;
}
return $classes;
}
add_filter('nav_menu_css_class','add_additional_class_on_li',1,3);

// wp_nav_menuののaにclass追加
function add_additional_class_on_a($classes,$item,$args)
{
if (isset($args->add_li_class)){
    $classes['class'] =$args->add_a_class;
}
return $classes;
}
add_filter('nav_menu_link_attributes','add_additional_class_on_a',1,3);


// blogのarchive.phpを作る設定↓
function post_has_archive($args,$post_type){
    if('post'== $post_type){
    $args['rewrite']=true;
    $args['has_archive']='blog';
    $args['label']='ブログ';
}
return  $args;
}
add_filter('register_post_type_args','post_has_archive',10,2);

// function get_main_title(){
//     if(is_singular('post')):
//         $category_obj = get_the_category();
//         return $category_obj[0]->name;
//         elseif (is_category()):
//             return single_cat_title();
//         endif;
// }






// ページネーションの実装↓

// function the_pagination() {
//   global $wp_query;
//   $bignum = 999999999;
//   if ( $wp_query->max_num_pages <= 1 )
//     return;
//   echo '<nav class="pagination">';
//   echo paginate_links( array(
//     'base'         => str_replace( $bignum, '%#%', esc_url( get_pagenum_link($bignum) ) ),
//     'format'       => '',
//     'current'      => max( 1, get_query_var('paged') ),
//     'total'        => $wp_query->max_num_pages,
//     'prev_text'    => '&larr;',
//     'next_text'    => '&rarr;',
//     'type'         => 'list',
//     'end_size'     => 5,
//     'mid_size'     => 3
//   ) );
//   echo '</nav>';
// }


// imgにwidth/heigh属性をつけないようにする指定↓
function remove_hwstring_from_image_tag( $html, $id, $alt, $title, $align, $size ) {
    list( $img_src, $width, $height ) = image_downsize($id, $size);
    $hwstring = image_hwstring( $width, $height );
    $html = str_replace( $hwstring, '', $html );
    return $html;
}
add_filter( 'get_image_tag', 'remove_hwstring_from_image_tag', 10, 6 );

// 新しい順に並べたい時に指定↓
// function admin_custom_posttype_order($wp_query) {
//     if( is_admin() ) {
//       $post_type = $wp_query->query['post_type'];
//       if($post_type == 'news') {
//         $wp_query->set('orderby','date'); //並べ替えの基準(日付)
//         $wp_query->set('order','DESC'); //新しい順。古い順にしたい場合はASCを指定
//       }
//     }
//   }
//   add_filter('pre_get_posts', 'admin_custom_posttype_order');

// 抜粋の文字数を変更する the_excerpt()
function my_excerpt_length(){
    return 100;
}
add_filter('excerpt_length','my_excerpt_length',999);

// 抜粋の末尾のテキストを変更する

function my_excerpt_more($more){
    return'...';

}
add_filter('excerpt_more','my_excerpt_more');

// メインループにクエリをセット

function my_pre_get_posts($query){
    if(is_admin()||!$query -> is_main_query())return;

    if($query -> is_front_page){
        $query -> set('posts_per_page', 3);
    }
    if($query -> is_archive){
        $query -> set('posts_per_page',15);
    }
}
add_action('pre_get_posts','my_pre_get_posts');

// function subroopPagination($end_size = 2, $mid_size = 1, $prev_next = true) {
//     global $query;
//     $max_page = $query->max_num_pages;//最大ページ
//     $current = $query->query['paged'];//現在のページ
//     $page_format = paginate_links(
//         array(
//             'total' => $max_page,
//             'type'  => 'array',
//             'prev_text' => '前へ',
//             'next_text' => '次へ',
//             'end_size' => $end_size,//初期値:2両端のﾍﾟｰｼﾞﾘﾝｸの数
//             'mid_size' => $mid_size,//初期値:1両端ページリンクを表示数
// 'prev_next' => $prev_next,//初期値:true [前へ][次へ]のリンクを含むか
//         )
//     );
//     $code = '';
//     if( is_array($page_format) ) {
//     $paged = get_query_var('paged') == 0 ? 1 : get_query_var('paged');
//     $code .= '<div class="navigation post-navigation">';
//     $code .= '<ul class="nav-links">';
//     if(!is_paged()){
//         $code .= '<span class="page-numbers"></span>';
//     }
//     foreach ( $page_format as $page ) {
//         $code .= $page;
//     }
//     if($current==$max_page){
//         $code .= '<span class="page-numbers"></span>';
//     }
//         $code .= '</ul>';
//         $code .= '</div>';
//     }
//     wp_reset_query();
//     return $code;
// }

// // 管理画面のメニューの一部を非表示にする
// function remove_menus() {
//     remove_menu_page( 'plugins.php' ); // プラグイン
//     remove_menu_page( 'tools.php' ); // ツール
//     remove_menu_page( 'options-general.php' ); // 設定 
//   } 

//   add_action( 'admin_menu', 'remove_menus', 999 );

// //   管理画面のプラグインを非表示にする
//   function remove_plugins_menus() {
   
//     remove_menu_page( 'wpcf7' ); // Contact Form 7
//     remove_menu_page( 'ai1wm_export' ); // All-in-One WP Migration
//     remove_menu_page( 'cptui_main_menu' ); // Custom Post Type UI
//     remove_menu_page( 'edit.php?post_type=acf-field-group' ); // Advanced custom fields
//     remove_menu_page( 'all-in-one-seo-pack/aioseop_class.php' ); // All In One SEO Pack.
// 	remove_submenu_page( 'tools.php', 'aiosp_import' ); // All In One SEO Pack.
//   }
  
//   add_action( 'admin_menu', 'remove_plugins_menus',999 );

  function my_custom_manage_aio_columns($columns) {
    unset( $columns['seotitle'] );      // SEO title
    unset( $columns['seokeywords'] );   // SEO keyword
    unset( $columns['seodesc'] );       // SEO descript
    unset( $columns['se-actions'] );    // SEO action
    return $columns;
  }
  add_filter( 'manage_edit-post_columns', 'my_custom_manage_aio_columns' );
  add_filter( 'manage_edit-page_columns', 'my_custom_manage_aio_columns' );
   

 function wp_custom_admin_css() { ?>
   
     <style type="text/css">
    #aioseo-settings {
       display:none;
     }
     </style>
     <?php } 
     
    add_action('admin_head', 'wp_custom_admin_css', 100);

function my_plugin_allowed_block_types_all( $allowed_block_types, $block_editor_context ) {
	
  // 許可するブロックタイプ
   
	$allowed_block_types = array(
		'core/paragraph',
		'core/heading',
		'core/image',
		'core/list',
		

	);
	return $allowed_block_types;

}
add_filter( 'allowed_block_types_all', 'my_plugin_allowed_block_types_all', 10, 2 );

