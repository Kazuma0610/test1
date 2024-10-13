<?php get_header(); ?>

    <section id="primary" class="content-area">
        <main id="main" class="site-main">
                <?php if ( have_posts() ) : ?>

                    <header class="page-header">
                        <?php the_archive_title('<h1 class="page-title-archive">', '</h1>'); ?>
                    </header><!-- .page-header -->
                    <div class="archive-flex">
                        <?php
                        while ( have_posts() ) :
                            the_post();
                            get_template_part( 'template-parts/excerpt' );

                        endwhile;
                
                        the_posts_pagination([
                            'prev_text' => '&larr;',
                            'next_text' => '&rarr;',
                        ]);

                        else:
                          echo '記事はありません';
                        endif;
                        ?>
                    </div>
        </main><!--#main-->
        <?php get_sidebar(); ?>
    </section><!--#primary-->
<?php get_footer();
