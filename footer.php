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
</body>
</html>