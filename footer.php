    <footer id="footer" class="site-footer">
        <div class="footer-inner">
            <?php bloginfo('name'); ?>
            <?php the_privacy_policy_link(); ?>
        </div><!--site-info-->
    </footer><!--#footer -->

</div><!--#page-->
<?php wp_footer(); ?>
<script>
    const swiper = new Swiper('.swiper', {
  pagination: {
    el: '.swiper-pagination',
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  scrollbar: {
    el: '.swiper-scrollbar',
  },
    loop: true,
    slidesPerView: 3,
    centeredSlides : true,
    slideToClickedSlide: true,
    spaceBetween: 5,
});
</script>
</body>
</html>