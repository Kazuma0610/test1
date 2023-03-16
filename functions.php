	
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

  }

//JSの読み込み//
function my_scripts_method() {
	wp_enqueue_script(
		'custom_script',
		get_template_directory_uri() . '/js/main.js',
	);
}
add_action('wp_enqueue_scripts', 'my_scripts_method');
