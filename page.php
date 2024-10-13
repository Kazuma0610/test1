<?php get_header(); ?>
    <section id="primary" class="content-area">
        <main id="main" class="site-main-post">

        <div class="splashbg2"></div><!---画面遷移用-->
            
            <?php
            while ( have_posts() ) :
                the_post();

                get_template_part('template-parts/content');
                if ( comments_open() || get_comments_number() ) { ?>
                    <div id="comments" class="comments-area">
                    <?php comments_template(); ?>
                    </div><!-- #comments --><?php
                }
                
            endwhile;
            ?>

        </main><!--site-main-post-->
    </section><!--content-area-->
<?php get_footer();?>