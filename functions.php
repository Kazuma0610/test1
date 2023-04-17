	
<?php
//テーマのセットアップ
// HTML5でマークアップさせる
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
// Feedのリンクを自動で生成する
add_theme_support( 'automatic-feed-links' );
//アイキャッチ画像を使用する設定
add_theme_support( 'post-thumbnails' );

//カスタムメニュー
register_nav_menu( 'header-nav',  ' ヘッダーナビゲーション ' );
register_nav_menu( 'footer-nav',  ' フッターナビゲーション ' );
function register_my_menu() {
  register_nav_menu( 'main-menu','Main Menu');
  register_nav_menu( 'sp-menu','Sp Menu');
  register_nav_menu( 'pc-menu','Pc Menu');
}
add_action( 'after_setup_theme', 'register_my_menu' );

//CSSの読み込み
add_action('wp_enqueue_scripts', 'add_styles');
  function add_styles() {
    // スタイルシートの登録と読み込み
    wp_register_style(
        'main_style',
        get_template_directory_uri() . '/style.css',
        array(),
        '1.0' 
      ); 
      
      wp_enqueue_style(
        'navi_style',
        get_template_directory_uri() . '/css/navi-menu.css',
        array('main_style'), // main_styleが読み込まれた後にnavi_styleを読み込む 
        '1.0'
      );

      wp_enqueue_style(
        'singular_style',
        get_template_directory_uri() . '/css/singular.css',
        array('main_style'), // main_styleが読み込まれた後にsingular_styleを読み込む 
        '1.0'
      );
  }

//JSの読み込み//
function my_scripts_method() {
	wp_enqueue_script(
		'custom_script',
		get_template_directory_uri() . '/js/main.js',
	);
}
add_action('wp_enqueue_scripts', 'my_scripts_method');


//ウイジェットの設定//
if (function_exists('register_sidebar')) {
  register_sidebar(array(
    'name' => 'サイドバー',
    'id' => 'sidebar',
    'description' => 'サイドバーウィジェット',
    'before_widget' => '<div>',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="side-title">',
    'after_title' => '</h3>'
 ));
}

register_sidebar(array(
  'id' => 'search',
  'name' => '検索表示エリア',
  'description' => '検索表示エリアです',
  'before_widget' => '<div class="widget-search">',
  'after_widget' => '</div>',
  'before_title' => '<h4>',
  'after_title' => '</h4>',
));


//-----------------------------------------------------
// 検索対象にカテゴリやタグを含める
//-----------------------------------------------------
function custom_search($search, $wp_query) {
  global $wpdb;

  //検索ページ以外
  if (!$wp_query->is_search)
  return $search;

  if (!isset($wp_query->query_vars))
  return $search;

  $search_words = explode(' ', isset($wp_query->query_vars['s']) ? $wp_query->query_vars['s'] : '');
  if ( count($search_words) > 0 ) {
      $search = '';
      foreach ( $search_words as $word ) {
          if ( !empty($word) ) {
              $search_word = $wpdb-> _escape("%{$word}%");
              $search .= " AND (
                      {$wpdb->posts}.post_title LIKE '{$search_word}'
                      OR {$wpdb->posts}.post_content LIKE '{$search_word}'
          /*タグ名・カテゴリ名を検索対象に含める記述 start*/
                      OR {$wpdb->posts}.ID IN (
                          SELECT distinct r.object_id
                          FROM {$wpdb->term_relationships} AS r
                          INNER JOIN {$wpdb->term_taxonomy} AS tt ON r.term_taxonomy_id = tt.term_taxonomy_id
                          INNER JOIN {$wpdb->terms} AS t ON tt.term_id = t.term_id
                          WHERE t.name LIKE '{$search_word}'
                      OR t.slug LIKE '{$search_word}'
                      OR tt.description LIKE '{$search_word}'
                      )
        /*タグ名・カテゴリ名を検索対象に含める記述 end*/
              ) ";
          }
      }
  }

  return $search;
}
add_filter('posts_search','custom_search', 10, 2);