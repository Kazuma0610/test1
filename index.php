<?php get_header(); ?>
    <main id="container-main"class="container">
        <div class="mv-contents">
            <div class="swiperCont">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/1.png" alt="画像"/>
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/2.png" alt="画像"/>
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/3.png" alt="画像"/>
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/2.png" alt="画像"/>
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
		    <li><a href="#shop">SHOP</a></li>
		    <li><a href="#media">MEDIA</a></li>
	      </ul>

		  <div id="shop" class="area">
			<h2>当店について</h2>
		  </div><!--shop/area-contents-->
		
          <div id="media" class="area">
			<h2>MEDIA</h2>
	      </div><!--media/area-contents-->
        </div><!--wrapper-->
            
 
        </div><!--end contents-main-->
    </main><!--end container-->
<?php get_footer(); ?>