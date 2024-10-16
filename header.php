<!DOCTYPE html><!--htmlで書かれていることを宣言-->
<html <?php language_attributes(); ?>><!--日本語のサイトであることを指定-->
<head>
<meta charset="<?php bloginfo('charset'); ?>"/><!--エンコードがUTF-8であることを指定-->
<meta name="viewport" content="width=device-width, initial-scale=1.0 "><!--viewportの設定-->
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>"><!--スタイルシートの呼び出し-->
<link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"><!--fontawesomeの呼び出しCDNコード-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"><!--fontawesomeの呼び出しCDNコード-->
<script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"></script><!--fontawesomeの呼び出しCDNコード(JS用）-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"><!--6verの最新fontawesomeの呼び出しCDNコード(JS用）-->
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200&display=swap" rel="stylesheet"><!--notoserifjpフォント-->
<link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet"><!--Parisienne-->
<link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/><!--SwiperのCSS-->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script><!--SwiperのCDN-->
<!-- slick CSS -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
<!-- /slick CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="  crossorigin="anonymous"></script>
<script src="js/5-1-11.js"></script><!--for--nav-js-->
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="  crossorigin="anonymous"></script>
<script src="js/5-1-6.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script><!--cookie用-->
<script src="https://rawgit.com/kimmobrunfeldt/progressbar.js/master/dist/progressbar.min.js"></script><!--progressbar-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/css/lightbox.min.css" /><!--lightbox用-->
<!--質問アコーディオンJS-->
<script type="text/javascript">
			jQuery(function ($) {
              $('.accordion_one .ac_header').click(function(){
                $(this).next('.ac_inner').slideToggle();
                $(this).toggleClass("open");
               });
           });
</script>
<!--モーダル目次内のリンク移動-->
<script type="text/javascript">
			jQuery(function ($) {
                $('.modal-content a[href*="#"]').click(function () {
                var elmHash = $(this).attr('href'); //ページ内リンクのHTMLタグhrefから、リンクされているエリアidの値を取得
                var pos = $(elmHash).offset().top-80;//idの上部の距離からHeaderの高さを引いた値を取得
                $('body,html').animate({scrollTop: pos}, 500); //取得した位置にスクロール。500の数値が大きくなるほどゆっくりスクロール
                return false;
             });
        });
</script>
<!--投稿記事の「ライター別の最新記事一覧」のもっとみるボタン-->
<script type="text/javascript">
			jQuery(function ($) {
          var show = 3; //最初に表示する件数
          var num = 3;  //もっと見るで表示する件数
          var contents = '.catList li'; // 対象のlist
            $(contents + ':nth-child(n + ' + (show + 1) + ')').addClass('is-hidden');
            $('.more').on('click', function () {
            $(contents + '.is-hidden').slice(0, num).removeClass('is-hidden');
            if ($(contents + '.is-hidden').length == 0) {
            $('.more').fadeOut();
            }
          });
      });
</script>
<?php wp_head(); ?><!--システム・プラグイン用-->
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="splash">
		<div id="splash_logo">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hadatoiro.png" alt="画像" class="fadeUp"/>
    </div>
</div>
<div class="splashbg"></div><!---画面遷移用-->
<div class="modal">
                <div class="modal_bg js-modal-close"></div>
                  <div class="modalScroll">
                      <div class="modal_content">
                        <h2><span class="slide-in leftAnime"><span class="slide-in_inner leftAnimeInner">リラックス出来る空間を</span></span></h2>
                          
                          <div class="insta-wrapper">
                            <ul class="gallery">
                              <li class="ga-move"><a href="<?php echo get_stylesheet_directory_uri(); ?>/images/inside1.png" data-lightbox="gallery2" data-title="店内風景"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/inside1.png" alt="店内画像"></a><p>施術のベッド</p></li>
                              <li class="ga-move"><a href="<?php echo get_stylesheet_directory_uri(); ?>/images/inside11.png" data-lightbox="gallery2" data-title="店内風景"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/inside11.png" alt="店内画像"></a><p>施術のベッド</p></li>
                              <li class="ga-move"><a href="<?php echo get_stylesheet_directory_uri(); ?>/images/inside12.png" data-lightbox="gallery2" data-title="店内風景"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/inside12.png" alt="店内画像"></a><p>施術のベッド</p></li>
                              <li class="ga-move"><a href="<?php echo get_stylesheet_directory_uri(); ?>/images/inside13.png" data-lightbox="gallery2" data-title="店内風景"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/inside13.png" alt="店内画像"></a><p>施術のベッド</p></li>
                              <li class="ga-move"><a href="<?php echo get_stylesheet_directory_uri(); ?>/images/inside14.png" data-lightbox="gallery2" data-title="店内風景"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/inside14.png" alt="店内画像"></a><p>当店のアロマ</p></li>
                              <li class="ga-move"><a href="<?php echo get_stylesheet_directory_uri(); ?>/images/inside15.png" data-lightbox="gallery2" data-title="店内風景"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/inside15.png" alt="店内画像"></a><p>施術のベッド</p></li>
                              <li class="ga-move"><a href="<?php echo get_stylesheet_directory_uri(); ?>/images/inside16.png" data-lightbox="gallery2" data-title="店内風景"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/inside16.png" alt="店内画像"></a><p>施術のベッド</p></li>
                              <li class="ga-move"><a href="<?php echo get_stylesheet_directory_uri(); ?>/images/inside17.png" data-lightbox="gallery2" data-title="店内風景"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/inside17.png" alt="店内画像"></a><p>癒しのエントランス</p></li>
                            </ul>
                          </div>
                      
                        
                        <span class="popup-close" onclick="closePopUp()"></span>
                      </div>
                  </div>
</div><!--modal-->
<div id="modalOne" class="modal-sp"><!-- 目次用modalInner -->
   <div class="modal-content">
     <div class="modal-top">
       <span class="modal-close">×</span>
     </div>
     <div class="modal-container">
       <ul id="tocBlock"></ul>
     </div>
   </div>
</div><!-- 目次用modalInner -->
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
                <!--▼ メガグローバルナビゲーション -->
                <nav class="global-nav pc-only">
                  <ul class="nav-list">
                    <li class="nav-item">
                      <a href="https://daieirecords.com">ホーム</a>
                    </li>

                    <li id="id1" class="nav-item">
                      <a href="#">カテゴリー</a>
                        <div class="nav-item_sub">
                          <div class="inner">
                            <div class=mega-in-title>カテゴリー別記事一覧</div>
                            <div class=mega-in-contents>
                              <div class="mega-content-wrap">
                                <ul class="mega-flex-wrap">
                                  <li><a href="#">
                                    <div class="mega-content-img">
                                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/s1.png" alt="美容画像"/>
                                    </div>
                                    <div class="mega-content-text">
                                        <p>美容記事一覧</p>
                                    </div>
                                  </a></li>
                                  <li><a href="#">
                                    <div class="mega-content-img">
                                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/s2.png" alt="美容画像"/>
                                    </div>
                                    <div class="mega-content-text">
                                        <p>コスメ事一覧</p>
                                    </div>
                                  </a></li>
                                  <li><a href="#">
                                    <div class="mega-content-img">
                                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/s3.png" alt="美容画像"/>
                                    </div>
                                    <div class="mega-content-text">
                                        <p>ダイエット記事一覧</p>
                                    </div>
                                  </a></li>
                                  <li><a href="#">
                                    <div class="mega-content-img">
                                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/s4.png" alt="美容画像"/>
                                    </div>
                                    <div class="mega-content-text">
                                        <p>マッサージ記事一覧</p>
                                    </div>
                                  </a></li>
                                  <li><a href="#">
                                    <div class="mega-content-img">
                                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/s5.png" alt="美容画像"/>
                                    </div>
                                    <div class="mega-content-text">
                                        <p>オススメ記事一覧</p>
                                    </div>
                                  </a></li>
                                  <li><a href="#">
                                    <div class="mega-content-img">
                                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/s6.png" alt="美容画像"/>
                                    </div>
                                    <div class="mega-content-text">
                                        <p>リラックス記事一覧</p>
                                    </div>
                                  </a></li>
                                </ul>
                              </div> 
                              <div class="mega-content-sub-wrap">
                                <ul>
                                    <li class="sub-list"><a href="#">当店の店舗一覧</a>
                                    </li>
                                    <li class="sub-list"><a href="#">当店の価格一覧</a>
                                    </li>
                                </ul>
                                <ul class="sns-wrap">
                                  <li class="sub-list"><a href="#">当店のインスタグラムはコチラから</a>
                                  </li>
                                  <li class="sub-list"><a href="#">当店のTwitterはコチラから</a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div><!--inner-->
                        </div><!--nav-item_sub-->
                    </li><!--nav-item-->
                    
                    <li id="id2" class="nav-item">
                      <a href="#">料金価格</a>
                        <div class="nav-item_sub">
                          <div class="inner">
                            <div class="cost-flex">
                              <ul>
                                <h3>通常価格</h3>
                                <li><span class="system">快眠ヘッドマッサージ</span><span class="hour">1h</span><span class="cost">¥5000</span></li>
                                <li><span class="system">快眠ヘッドマッサージ</span><span class="hour">1h</span><span class="cost">¥5000</span></li>
                              </ul>
                              <ul>
                                <h3>オプション</h3>
                                <li><span class="system">快眠ヘッドマッサージ</span><span class="hour">1h</span><span class="cost">¥5000</span>
                              </ul>
                              <ul>
                                <h3>セットスパ</h3>
                                <li><span class="system">快眠ヘッドマッサージ</span><span class="hour">1h</span><span class="cost">¥5000</span>
                              </ul>
                            </div><!--cost-flex-->
                          </div><!--inner-->
                        </div><!--nav-item_sub-->
                    </li><!--nav-item-->
                    <li class="nav-item"><a href="#">店舗案内</a></li>
                    <li class="nav-item"><a href="#">会社概要</a></li>
                    <li class="nav-item"><a href="https://daieirecords.com/contact/">お問合せ</a></li>
                    <li class="nav-item"><a href="https://daieirecords.com/reservation/">ご予約</a></li>
                  </ul>
                </nav>
                <!--▲ メガグローバルナビゲーション -->
                <!--ヘッダーメニュー-->
                <!--<div id="header-nav-wrap" class="header-nav-wrap pc-only">
                    <?php /*wp_nav_menu( array(
                     
                         'theme_location' => 'main-menu',
                         'container' => 'nav',
                         'container_class' => 'main-menu',
                         'container_id' => 'main-menu',
                         'fallback_cb' => ''

                    ) ); */?>
                </div>-->
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
                                            <div class="hotword_list">
                                            <?php
                                                $args = array(
                                                    'smallest'=> '1',
                                                    'largest' => '1',
                                                    'unit'    => 'em',
                                                    'orderby' => 'count',  //記事件数で並び替える
                                                    'order'   => 'DESC',   //大きい順
                                                    'number'  => 10,
                                                );
                                                wp_tag_cloud($args); 
                                            ?>
                                            </div>
                                        </div>
                                    </div><!--search-content-->
                                </div><!--search-modal__main-->
                            </div>
                        </div>
                    </div>
                </nav>
                <div class="openbtn openbtn-sponly"><span></span><span></span><span></span></div><!--ハンバーガーボタン-->
                <nav id="g-nav">
                   <div id="g-nav-list">
                    
                    <div class="section s_07 sp-only">
                          <div class="accordion_one">
                                <div class="accordion_header">TOP</div><!--accordion_header-->
                                <div class="accordion_header">カテゴリー<div class="i_box"><i class="one_i"></i></div>
                                </div><!--accordion_header-->
                                    <div class="accordion_inner">
                                        <div class="accordion_one">
                                              <div class="accordion_header">美容<div class="i_box"><i class="one_i"></i></div>
                                              </div><!--accordion_header-->
                                                  <div class="accordion_inner">
                                                      <div class="accordion_one">
                                                        <div class="accordion_header"><a href="http://sample-site-test.local/category/sample-one/">sample1</a></div>
                                                        <div class="accordion_header">A_b</div>
                                                      </div><!--accordion_one-->
                                                  </div><!--accordion_inner-->
                                        </div><!--accordion_one-->
                                        <div class="accordion_one">
                                              <div class="accordion_header">B</div><!--accordion_header3-->
                                        </div><!--accordion_one-->
                                    </div><!--accordion_inner-->
                                <div class="accordion_header"><a href="http://http://sample-site-test.local/%e5%bd%93%e5%ba%97%e3%81%ab%e3%81%a4%e3%81%84%e3%81%a6/">当店について</a></div>
                                <div class="accordion_header"><a href="http://http://sample-site-test.local/%e5%bd%93%e5%ba%97%e3%81%ab%e3%81%a4%e3%81%84%e3%81%a6/">当店について</a></div>
                                <div class="accordion_header"><a href="http://http://sample-site-test.local/%e5%bd%93%e5%ba%97%e3%81%ab%e3%81%a4%e3%81%84%e3%81%a6/">当店について</a></div>
                                <div class="accordion_header"><a href="http://http://sample-site-test.local/%e5%bd%93%e5%ba%97%e3%81%ab%e3%81%a4%e3%81%84%e3%81%a6/">当店について</a></div>
                                <div class="accordion_header"><a href="http://http://sample-site-test.local/%e5%bd%93%e5%ba%97%e3%81%ab%e3%81%a4%e3%81%84%e3%81%a6/">当店について</a></div>
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
                                              <div class="accordion_header">美容<div class="i_box"><i class="one_i"></i></div>
                                              </div><!--accordion_header-->
                                                  <div class="accordion_inner">
                                                      <div class="accordion_one">
                                                        <div class="accordion_header"><a href="http://sample-site-test.local/category/sample-one/">sample1</a></div>
                                                        <div class="accordion_header">A_b</div>
                                                      </div><!--accordion_one-->
                                                  </div><!--accordion_inner-->
                                        </div><!--accordion_one-->
                                        <div class="accordion_one">
                                              <div class="accordion_header">B</div><!--accordion_header3-->
                                        </div><!--accordion_one-->
                                    </div><!--accordion_inner-->
                                <div class="accordion_header"><a href="http://http://sample-site-test.local/%e5%bd%93%e5%ba%97%e3%81%ab%e3%81%a4%e3%81%84%e3%81%a6/">当店について</a></div>
                                </div><!--accordion_header-->
                          </div><!--accordion_one-->
                      </div><!--section s_07-->
                    </div><!--header-bg-wrap pc-only-->

                   </div><!--g-nav-list-->
                </nav><!--g-nav-->

          </div><!--site-branding-->
 
       </div><!--end header-inner-->

       <?php if(is_front_page()): ?>
         <div class="foot-inner">
            <div class="sp-tel">
                <a href="tel:000-000-0000">
                <div class="sp-tel-text">お電話はこちらから</div>
                <div class="sp-number">000-000-0000</div>
                </a>
            </div>
            <div class="sp-contact">
                <a href="#" target="_blank" rel="noopner">ご予約はこちら</a>
            </div>
         </div>
       <?php endif; ?>

        

       
       
    </header>

    <!--パンクズ＊ヘッダー枠外に設置-->
    <?php if(!is_front_page()): ?>

        <div class="breadcrumb">
            <?php
                if(function_exists( 'yoast_breadcrumb' )){
                yoast_breadcrumb( '<p id="breadcrumbs">', '</p>');
                }
            ?>
        </div>

    <?php endif; ?>