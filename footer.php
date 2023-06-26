    <footer id="footer" class="site-footer">
        <div class="footer-inner">
            <?php bloginfo('name'); ?>
            <?php the_privacy_policy_link(); ?>
        </div><!--site-info-->
        <div id="page_top"><a href="#"></a></div>
    </footer><!--#footer -->

</div><!--#page-->
<?php wp_footer(); ?>
<script>
    const swiper = new Swiper('.swiper', {
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
        spaceBetween: 10,               //追記
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
        $(".shop-img").owlCarousel({
            margin:20,
            loop:true,
            autoplay:true,
            autoplayTimeout:5000,
            autoplayHoverPause:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                1000:{
                    items:3
                }
            },
        });
    </script>
</body>
</html>