<?php get_header(); ?>

    <section id="primary" class="content-area">
        <main id="main" class="site-main">
                <?php if ( have_posts() ) : ?>

                    <header class="page-header">
                        <?php the_archive_title('<h1 class="page-title">', '</h1>'); ?>
                    </header><!-- .page-header -->
                    <div class="archive-flex">
                        <?php
                        while ( have_posts() ) :
                            the_post();
                            get_template_part( 'template-parts/excerpt' );

                        endwhile;
                
                        else :
                            echo '記事はありません。';
                        endif;
                        ?>
                    </div>
                <?php
                    $args = array(
                    'mid_size' => 1,
                    'prev_text' => '&lt;&lt;前へ',
                    'next_text' => '次へ&gt;&gt;',
                    'screen_reader_text' => ' ',
                    );
                    the_posts_pagination($args);
                ?>
        </main><!--#main-->
        <?php get_sidebar(); ?>
        </section><!--#primary-->
<?php get_footer();
