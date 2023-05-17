<?php get_header(); ?>
    <main class="container">
      <div class="mv-contents">
          <!-- メインとなるコンテナを大外に -->
          <div class="swiper">
          <!-- ラッパーで包んであげて -->
              <div class="swiper-wrapper">
                  <!-- スライドする要素たち -->
                  <div class="swiper-slide c-01"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/1.png" alt="画像"/></div>
                  <div class="swiper-slide c-02"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/2.png" alt="画像"/></div>
                  <div class="swiper-slide c-03"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/3.png" alt="画像"/></div>
              </div>
                  <!-- ページネーションがいるときか下記を追記 -->
                  <div class="swiper-pagination"></div>

                  <!-- 左右のナビゲーションボタンが必要であれば下記も追記 -->
                  <div class="swiper-button-prev"></div>
                  <div class="swiper-button-next"></div>

                   <!-- スクロールバー表示したいときは下記を追記 -->
                  <div class="swiper-scrollbar"></div>
          </div>
      </div>
      <div class="contents-main">
 
      </div><!--end contents-main-->
</main><!--end container-->
<?php get_footer(); ?>