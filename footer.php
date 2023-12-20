    <footer id="footer" class="site-footer">
        <div class="footer-inner">
          <div class="footer-flex">
            <div class="footer-tl slide-in leftAnime"><div class="slide-in_inner leftAnimeInner">
              <dl><dt>恵比寿にあるエステサロン</dt><dd>肌十色</dd></dl>
            </div></div>
            <div class="footer-list">
              <div class="slide-in leftAnime"><div class="slide-in_inner leftAnimeInner">
                <ul>
                  <li>
                    <a href="#">Top</a>
                  </li>
                  <li>
                    <a href="#">Menu</a>
                  </li>
                  <li>
                    <a href="#">Reserve</a>
                  </li>
                  <li>
                    <a href="#">Cast</a>
                  </li>
                  <li>
                    <a href="https://daieirecords.com/contact/">Contact</a>
                  </li>
                  <li>
                    <a href="#">Colum</a>
                  </li>
                </ul>
              </div></div>
            </div>
          </div>
          <small>
            <span class="slide-in leftAnime"><span class="slide-in_inner leftAnimeInner">© 肌十色</span></span>
          </small>
        </div><!--footer-inner-->
        <div id="page_top"><a href="#"></a></div>
    </footer><!--#footer -->
</div><!--#page-->
<?php wp_footer(); ?>
<script>
    const swiper = new Swiper('.mySwiper', {
        loop: true,                        
        slidesPerView: 1,
        centeredSlides : true,
        spaceBetween: 10,               //追記
        autoplay: {                         
            delay: 7000,  
        },                   
        breakpoints: {
            1030: {
                slidesPerView: 2,
                spaceBetween: 10,
                },
            },
        centeredSlides : true,
        spaceBetween: 5,               //追記
        autoplay: {                         
            delay: 7000,  
        },                   
        pagination: {                       
            el: '.swiper-pagination',
        },
        navigation: {                      
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>
<!-- slick -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
  jQuery(".slider").slick({
   dots:true,
   autoplay: true,
   autoplaySpeed: 5000,
   infinite: true,
   slidesToShow: 4,
   slidesToScroll: 4,
   responsive: [
      {
        breakpoint: 1200, // 768〜1023px以下のサイズに適用
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
        },
      },
      {
        breakpoint: 768, // 480〜767px以下のサイズに適用
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
        },
      },
      {
        breakpoint: 480, // 〜479px以下のサイズに適用
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });
</script>
<!-- slick -->
</body>
</html>