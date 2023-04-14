<!DOCTYPE html><!--htmlで書かれていることを宣言-->
<html <?php language_attributes(); ?>><!--日本語のサイトであることを指定-->
<head>
<meta charset="<?php bloginfo('charset'); ?>"/><!--エンコードがUTF-8であることを指定-->
<meta name="viewport" content="width=device-width, initial-scale=1.0 "><!--viewportの設定-->
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>"><!--スタイルシートの呼び出し-->
<link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"><!--fontawesomeの呼び出しCDNコード-->
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="  crossorigin="anonymous"></script>
<script src="js/5-1-11.js"></script><!--for--nav-js-->
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="  crossorigin="anonymous"></script>
<script src="js/5-1-6.js"></script>
<?php wp_head(); ?><!--システム・プラグイン用-->
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content">コンテンツへスキップ</a>
    <header id="header" class="site-header"> 
       <div class="header-inner">
          <div class="site-branding">
                <?php if (has_custom_logo()) : ?>
                    <div class="site-logo"><?php the_custom_logo(); ?></div>
                <?php endif; ?>
                <?php if (is_front_page() && is_home()) :?>
                    <h1 class="site-title"><?php bloginfo('name'); ?></h1>
                <?php else : ?>
                    <p class="site-title"><a href="<?php echo esc_url(home_url( '/' )); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
                <?php endif; ?>
                <p class="site-description"><?php bloginfo('description'); ?></p>
                <!--ヘッダーメニュー-->
                <div id="header-nav-wrap" class="header-nav-wrap pc-only">
                    <?php wp_nav_menu( array(
                     
                         'theme_location' => 'main-menu',
                         'container' => 'nav',
                         'container_class' => 'main-menu',
                         'container_id' => 'main-menu',
                         'fallback_cb' => ''

                    ) ); ?>
                </div>
                <div class="searchbtn"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/search.png" alt="画像"/></div>
                <nav id="search-modal">
                    <div id="search-modal__container">
                        <div class="search-modal__inner">
                            <div class="search-modal__content">
                                <div class="search-modal__header">
                                    <?php get_search_form(); ?>
                                    <button type="button" class="search-model__close-btn" aria-controls="searchmodal"></button>
                                </div>
                                <div class="search-modal__main">
                                    <div class="search-content">
                                        <div id="search-menu" class="search-content__menu">
                                            <div class="speech-bubbles">
                                                <div class="speech-bubbles__inner">
                                                    探す
                                                </div>
                                            </div>
                                            <div class="search-content__dropdown">
                                            <div class="accordion-container">
                                                <dl class="accordion-list">
                                                    <dt class="accordion-title js-accordion-title">カテゴリーから探す</dt><!-- /.accordion-title -->
                                                    <dd class="accordion-text">
                                                        <div class="accordion-list-flex">
                                                            <div class="nav-menu__list-item"><a class="nav-menu__link" href="#">ああああ</a></div>
                                                            <div class="nav-menu__list-item"><a class="nav-menu__link" href="#">いいいい</a></div>
                                                            <div class="nav-menu__list-item"><a class="nav-menu__link" href="#">うううう</a></div>
                                                            <div class="nav-menu__list-item"><a class="nav-menu__link" href="#">ええええ</a></div>
                                                        </div>
                                                    </dd><!-- /.accordion-text -->
                                                </dl><!-- /.accordion-list -->
                                                <dl class="accordion-list">
                                                    <dt class="accordion-title js-accordion-title">タイトル2タイトル2</dt><!-- /.accordion-title -->
                                                    <dd class="accordion-text"><p>テキスト2テキスト2テキスト2テキスト2</p></dd><!-- /.accordion-text -->
                                                </dl><!-- /.accordion-list -->
                                                <dl class="accordion-list">
                                                    <dt class="accordion-title js-accordion-title">タイトル3タイトル3</dt><!-- /.accordion-title -->
                                                    <dd class="accordion-text"><p>テキスト3テキスト3テキスト3テキスト3</p></dd><!-- /.accordion-text -->
                                                </dl><!-- /.accordion-list -->
                                            </div><!-- /.accordion-container -->  
                                            </div><!--search-content__dropdown-->
                                        </div><!--search-content__menu-->
                                        <div id="hot-word" class="search-content__hot-word">
                                            <div class="speech-bubbles">
                                                <div class="speech-bubbles__inner">
                                                    ホットワードで探す
                                                </div>
                                            </div>

                                        </div>
                                    </div><!--search-content-->
                                </div><!--search-modal__main-->
                            </div>
                        </div>
                    </div>
                </nav>
                <div class="openbtn"><span></span><span></span><span></span></div><!--ハンバーガーボタン-->
                <nav id="g-nav">
                   <div id="g-nav-list">
                    <div class="section s_07 sp-only">
                          <div class="accordion_one">
                                <div class="accordion_header">TOP</div><!--accordion_header-->
                                <div class="accordion_header">カテゴリー<div class="i_box"><i class="one_i"></i></div>
                                </div><!--accordion_header-->
                                    <div class="accordion_inner">
                                        <div class="accordion_one">
                                              <div class="accordion_header">A<div class="i_box"><i class="one_i"></i></div>
                                              </div><!--accordion_header-->
                                                  <div class="accordion_inner">
                                                      <div class="accordion_one">
                                                        <div class="accordion_header">A_a</div>
                                                        <div class="accordion_header">A_b</div>
                                                      </div><!--accordion_one-->
                                                  </div><!--accordion_inner-->
                                        </div><!--accordion_one-->
                                        <div class="accordion_one">
                                              <div class="accordion_header">B<div class="i_box"><i class="one_i"></i></div>
                                              </div><!--accordion_header3-->
                                                  <div class="accordion_inner">
                                                      <div class="accordion_one">
                                                        <div class="accordion_header">B_a</div>
                                                        <div class="accordion_header">B_b</div>
                                                      </div><!--accordion_one-->
                                                  </div><!--accordion_inner--> 
                                        </div><!--accordion_one-->
                                    </div><!--accordion_inner-->
                          </div><!--accordion_one-->
                    </div><!--section s_07-->
                    <div class="header-bg-wrap pc-only">
                      <div class="section s_07 pc-only">
                          <div class="accordion_one">
                                <div class="accordion_header">TOP</div><!--accordion_header-->
                                <div class="accordion_header">カテゴリー<div class="i_box"><i class="one_i"></i></div>
                                </div><!--accordion_header-->
                                    <div class="accordion_inner">
                                        <div class="accordion_one">
                                              <div class="accordion_header">A<div class="i_box"><i class="one_i"></i></div>
                                              </div><!--accordion_header-->
                                                  <div class="accordion_inner">
                                                      <div class="accordion_one">
                                                        <div class="accordion_header">A_a</div>
                                                        <div class="accordion_header">A_b</div>
                                                      </div><!--accordion_one-->
                                                  </div><!--accordion_inner-->
                                        </div><!--accordion_one-->
                                        <div class="accordion_one">
                                              <div class="accordion_header">B<div class="i_box"><i class="one_i"></i></div>
                                              </div><!--accordion_header3-->
                                                  <div class="accordion_inner">
                                                      <div class="accordion_one">
                                                        <div class="accordion_header">B_a</div>
                                                        <div class="accordion_header">B_b</div>
                                                      </div><!--accordion_one-->
                                                  </div><!--accordion_inner--> 
                                        </div><!--accordion_one-->
                                    </div><!--accordion_inner-->
                          </div><!--accordion_one-->
                      </div><!--section s_07-->
                    </div><!--header-bg-wrap pc-only-->
                   </div><!--g-nav-list-->
                </nav><!--g-nav-->

          </div><!--site-branding-->
 
       </div><!--end header-inner-->
       
    </header>