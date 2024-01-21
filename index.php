<?php get_header(); ?>
    <main id="container-main"class="container">
        <div class="mv-contents">
            <div class="swiperCont">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/main1.png" alt="画像"/>
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/main2.png" alt="画像"/>
                        </div>
                        <div class="swiper-slide">
                            <a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/main3.png" alt="画像"/></a>
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/main2.png" alt="画像"/>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div><!--swipercont-->
        </div><!--mv-contents-->
        <div class="contents-main">

        
          <div class="wrapper">
	          <ul class="tab">
		          <li><a class="tab-a" href="#shop">当店</a></li>
		          <li><a class="tab-b" href="#media">コラム</a></li>
              <li><a class="tab-c" href="#sns">SNS</a></li>
	          </ul>

		        <div id="shop" class="area">
              
			        <article id="lead">
                <div class="lead-img fadeIn">
                </div>
                <div class="lead-area fadeIn">
                  <h2>恵比寿にある<br>癒しの<br>プライベート空間</h2>
                    <div class="text">エステサロン<br class="pc-only">肌十色は<br class="pc-only">頑張るあなたが<br class="pc-only">ちょっと疲れた時に<br class="pc-only">立ち寄れる<br class="pc-only">ほっとする時間を<br>つくります。</div>
                    <buttun class="lead-btn buttun" onclick="buttonClick()">
                        <a href="#" class="btn04 bordertop"><span><p>店内の風景</p></span></a>
                    </buttun>
                </div>
              </article><!--lead-->
              <section id="news">
                  <h2><span class="slide-in leftAnime"><span class="slide-in_inner leftAnimeInner">News</span><span class="subtitle slide-in_inner leftAnimeInner">お知らせ</span></span></h2>
                  <div class="news-flex fadeInTrigger">
                    <div class="news-content">
                      <?php echo do_shortcode('[news_list]'); ?>
                      <div class="news-btn">
                        <a href="https://daieirecords.com/news/" class="btn04 bordertop"><span><p>お知らせ一覧</p></span></a>
                      </div>
                    </div>
                    <div class="news-image"></div>
                  </div>
              </section><!--#menu-->
              
              

		        </div><!--shop/area-contents-->
		
            <div id="media" class="area">
			        <article id="colum">
                <h2><span class="slide-in leftAnime"><span class="slide-in_inner leftAnimeInner">Resent</span><span class="subtitle slide-in_inner leftAnimeInner">新着コラム</span></span></h2>
                <div class="post-wrap fadeInTrigger">
                  <ul class="newpost-flex">
                    <?php
                      $args = array(
                        'posts_per_page' => 8 //表示件数の指定
                      );
                      $posts = get_posts($args);
                      foreach ($posts as $post):
                      setup_postdata($post);
                    ?>
                      <li>
                        <a href="<?php the_permalink(); ?>">
                          <!-- アイキャッチ表示 -->
                          <div class="newpost_thumb"><?php the_post_thumbnail('medium'); ?></div>
                          <!-- タイトル表示 -->
                          <p class="newpost_title"><?php the_title(); ?></p>
                          <!--日付表示-->
                          <p class="newpost_date"><?php the_date(); ?></p>
                        </a>
                      </li>
                    <?php 
                      endforeach;//ループの終了
                      wp_reset_postdata();
                    ?>
                  </ul>
                </div>

              </article>
              <article id="topics">
                <h2><span class="slide-in leftAnime"><span class="slide-in_inner leftAnimeInner">Topics</span><span class="subtitle slide-in_inner leftAnimeInner">トピックス</span></span></h2>
                <div class="topics-wrap">
                  <ul class="delayScroll">
                    <li class="box"><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/topics1.png" alt="topic画像"/><div class="topics-area"><p>６月のキャンペーンの内容です</p></div></a></li>
                    <li class="box"><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/topics2.png" alt="topic画像"/><div class="topics-area"><p>６月のキャンペーンの内容です</p></div></a></li>
                    <li class="box"><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/topics3.png" alt="topic画像"/><div class="topics-area"><p>６月のキャンペーンの内容です</p></div></a></li>
                    <li class="box"><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/topics4.png" alt="topic画像"/><div class="topics-area"><p>６月のキャンペーンの内容です</p></div></a></li>
                    <li class="box"><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/topics5.png" alt="topic画像"/><div class="topics-area"><p>６月のキャンペーンの内容です</p></div></a></li>
                    <li class="box"><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/topics6.png" alt="topic画像"/><div class="topics-area"><p>６月のキャンペーンの内容です</p></div></a></li>
                    <li class="box"><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/topics7.png" alt="topic画像"/><div class="topics-area"><p>６月のキャンペーンの内容です</p></div></a></li>
                    <li class="box"><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/topics8.png" alt="topic画像"/><div class="topics-area"><p>６月のキャンペーンの内容です</p></div></a></li>
                  </ul>
                </div>

              </article>
	          </div><!--media/area-contents-->

            <div id="sns" class="area">
              <article id="insta">
                <h2><span class="slide-in leftAnime"><span class="slide-in_inner leftAnimeInner">Sns</span><span class="subtitle slide-in_inner leftAnimeInner">ソーシャルメディア</span></span></h2>
                <div class="insta-wrapper">
                  <ul class="gallery">
                    <li class="ga-move"><a href="<?php echo get_stylesheet_directory_uri(); ?>/images/yoko1.png" data-lightbox="gallery1" data-title="グループ1キャプション"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/yoko1.png" alt="インスタ画像"></a></li>
                    <li class="ga-move"><a href="<?php echo get_stylesheet_directory_uri(); ?>/images/tate1.png" data-lightbox="gallery1" data-title="グループ1キャプション"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tate1.png" alt="インスタ画像"></a></li>
                    <li class="ga-move"><a href="<?php echo get_stylesheet_directory_uri(); ?>/images/yoko2.png" data-lightbox="gallery1" data-title="グループ1キャプション"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/yoko2.png" alt="インスタ画像"></a></li>
                    <li class="ga-move"><a href="<?php echo get_stylesheet_directory_uri(); ?>/images/tate2.png" data-lightbox="gallery1" data-title="グループ1キャプション"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tate2.png" alt="インスタ画像"></a></li>
                    <li class="ga-move"><a href="<?php echo get_stylesheet_directory_uri(); ?>/images/yoko3.png" data-lightbox="gallery1" data-title="グループ1キャプション"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/yoko3.png" alt="インスタ画像"></a></li>
                    <li class="ga-move"><a href="<?php echo get_stylesheet_directory_uri(); ?>/images/tate3.png" data-lightbox="gallery1" data-title="グループ1キャプション"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tate3.png" alt="インスタ画像"></a></li>
                    <li class="ga-move"><a href="<?php echo get_stylesheet_directory_uri(); ?>/images/yoko4.png" data-lightbox="gallery1" data-title="グループ1キャプション"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/yoko4.png" alt="インスタ画像"></a></li>
                    <li class="ga-move"><a href="<?php echo get_stylesheet_directory_uri(); ?>/images/tate4.png" data-lightbox="gallery1" data-title="グループ1キャプション"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tate4.png" alt="インスタ画像"></a></li>
                  </ul>
                </div>
                <div class="banner-wrapper">
                  <ul>
                    <li>
                      <a href="#">
                        <div class="b-text">
                          <span class="text-one">X</span>
                        </div>
                        <figure class="b-pic">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/b-sns1.png" alt="Xbanner">
                        </figure>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <div class="b-text-insta">
                          <span class="text-one">INSTAGLAM</span>
                        </div>
                        <figure class="b-pic">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/b-sns2.png" alt="Instabanner">
                        </figure>
                      </a>
                    </li>
                  </ul>
                </div>
              </article>
            </div><!--sns/area-contents-->

            <section id="menu">
                <h2><span class="slide-in leftAnime"><span class="slide-in_inner leftAnimeInner">Menu</span><span class="subtitle slide-in_inner leftAnimeInner">施術メニュー</span></span></h2>
                <ul class="slider fadeInTrigger">
                  <li>
                    <section class="slider-wrap">
                      <a href="#">
                        <figure class="circle">
                          <span class="mask">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu1.png" alt="メニュー画像"/>
                          </span>
                        </figure>
                        <div class="menu-area">
                          <h3>フェイスマッサージ</h3>
                          <p>5000 yen～</p>
                        </div>
                      </a>
                    </section>
                  </li>
                  <li>
                    <section class="slider-wrap">
                      <a href="#">
                        <figure class="circle">
                          <span class="mask">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu2.png" alt="メニュー画像"/>
                          </span>
                        </figure>
                        <div class="menu-area">
                          <h3>フェイスマッサージ</h3>
                          <p>5000 yen～</p>
                        </div>
                      </a>
                    </section>
                  </li>
                  <li>
                    <section class="slider-wrap">
                      <a href="#">
                        <figure class="circle">
                          <span class="mask">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu3.png" alt="メニュー画像"/>
                          </span>
                        </figure>
                        <div class="menu-area">
                          <h3>フェイスマッサージ</h3>
                          <p>5000 yen～</p>
                        </div>
                      </a>
                    </section>
                  </li>
                  <li>
                    <section class="slider-wrap">
                      <a href="#">
                        <figure class="circle">
                          <span class="mask">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu4.png" alt="メニュー画像"/>
                          </span>
                        </figure>
                        <div class="menu-area">
                          <h3>フェイスマッサージ</h3>
                          <p>5000 yen～</p>
                        </div>
                      </a>
                    </section>
                  </li>
                  <li>
                    <section class="slider-wrap">
                      <a href="#">
                        <figure class="circle">
                          <span class="mask">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu5.png" alt="メニュー画像"/>
                          </span>
                        </figure>
                        <div class="menu-area">
                          <h3>フェイスマッサージ</h3>
                          <p>5000 yen～</p>
                        </div>
                      </a>
                    </section>
                  </li>
                </ul><!--slider-->
                <div class="menu-btn">
                  <a href="#" class="btn04 bordertop"><span><p>メニュー一覧を見る</p></span></a>
                </div>
            </section><!--#menu-->
            <section id="reserve" class="inner-section">
              <h2><span class="slide-in leftAnime"><span class="slide-in_inner leftAnimeInner">Reserve</span><span class="subtitle slide-in_inner leftAnimeInner">ご予約</span></span></h2>
              <div class="reserve-wrap fadeInTrigger">
                <div class="reserve-img"></div>
                <div class="reserve-text">
                  <h3>ご予約方法</h3>
                  <dl>
                    <dt><a href="00-0000-0000">TEL00-0000-0000</a></dt>
                    <dd>営業時間 : 10.00-19.00</dd>
                  </dl>
                  <div class="reserve-btn">
                    <a href="#" class="btn04 bordertop"><span><p>ご予約はコチラ</p></span></a>
                  </div>
                </div>
              </div>
            </section><!--reserve-->
            <section id="cast" class="inner-section">
              <h2><span class="slide-in leftAnime"><span class="slide-in_inner leftAnimeInner">Cast</span><span class="subtitle slide-in_inner leftAnimeInner">施術者</span></span></h2>
              <div class="cast-container">
                <div class="cast-wrap fadeInTrigger">
                  <ul class="cast-flex">
                    <li>
                      <figure class="bgDU">
                        <span class="mask-text">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cast1.png" alt="cast画像"/>
                          <span class="cap">アシスタントとして日々お客様により良いサービスをご提供できるよう、精進していく所存です。</span>
                        </span>
                      </figure>
                      <span class="cast-detail">アシスタント</span>
                      <div class="cast-area">
                        <h3>大和撫子</h3>
                        <span>Yamato-Nadeshiko</span>
                      </div>
                    </li>
                    <li>
                      <figure class="bgDU">
                        <span class="mask-text">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cast2.png" alt="cast画像"/>
                          <span class="cap">セラピストとして日々お客様により良いサービスをご提供できるよう、精進していく所存です。</span>
                        </span>
                      </figure>
                      <span class="cast-detail">セラピスト</span>
                      <div class="cast-area">
                        <h3>キャシー長岡</h3>
                        <span>Kyassy-Nagaoka</span>
                      </div>
                    </li>
                    <li>
                      <figure class="bgDU">
                        <span class="mask-text">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cast3.png" alt="cast画像"/>
                          <span class="cap">オーナーとして日々お客様に笑顔をご提供できるよう、精進していく所存です。</span>
                        </span>
                      </figure>
                      <span class="cast-detail">オーナー</span>
                      <div class="cast-area">
                        <h3>ローラ</h3>
                        <span>Rola</span>
                      </div>
                    </li>
                  </ul>
                  <div class="cast-btn">
                    <a href="#" class="btn04 bordertop"><span><p>キャスト一覧</p></span></a>
                  </div>
                </div>
              </div>
            </section><!--cast-->
            <section id="access" class="inner-section">
              <h2><span class="slide-in leftAnime"><span class="slide-in_inner leftAnimeInner">Access</span><span class="subtitle slide-in_inner leftAnimeInner">アクセス</span></span></h2>
              <div class="map-wrap fadeInTrigger">
                <div class="map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d810.5607240306477!2d139.70896841964714!3d35.64638678810843!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b4046e3f71d%3A0x85ab1d92ef294edf!2z5oG15q-U5a-_6aeF!5e0!3m2!1sja!2sjp!4v1687411838216!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="map-area">
                  <h3>当店へのアクセス方法</h3>
                  <div class="access-text-foot">電車でのお越しの方</div>
                  <p class="access-text-lead">山の手線「恵比寿駅」下車　徒歩30秒<br>
                  西口の出口から階段を降り<br>左手の青いビルの１階<br><br>
                  東京都渋谷区　福田2-2-3<br>○○○○内１F（店舗</p>
                </div>
              </div>
            </section><!--access-->
            
          </div><!--wrapper-->
           
          
 
        </div><!--end contents-main-->
    </main><!--end container-->
<?php get_footer(); ?>