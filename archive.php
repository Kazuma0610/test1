<?php get_header(); ?>

    <section id="primary" class="content-area">
        <main id="main" class="site-main">
            <?php if ( have_posts() ) : ?>

                <header class="page-header">
                    <?php the_archive_title('<h1 class="page-title">' , '</h1>'); ?>
                </header><!-- .page-header -->
                
                <?php
                while ( have_posts() ) :
                    the_post();
                    get_template_part( 'template-parts/excerpt' );

                endwhile;

                the_posts_pegination( [
                    'prev_text' => '&larr;',
                    'next_text' => '&rarr;',
                ] );
            else :
                echo '記事はありません。';
            endif;
            ?>
        </main><!--#main-->
        </section><!--#primary-->
<?php get_footer();
