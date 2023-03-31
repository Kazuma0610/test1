<?php get_header(); ?>

    <section id="primary" class="content-area">
        <main id="main" class="site-main">

            <header class="page-header">
                <h1 class="page-title">「<?php the_search_query(); ?>」で検索した結果</h1>
            </header><!--peage-header-->
            <?php if ( have_post() ) : ?>
                <?php 
                while ( have_posts() ) :
                    the_post();
                    get_template_part('excerpt');
                endwhile;
                the_posts_pegination( [
                    'prev_text' => '&larr;',
                    'next_text' => '&rarr;',

                ] );
            else :?>
                <section class="no-results not-found">
                    <div class="page-content">
                        <P>お探しの記事やタグは見つかりませんでした。</p>
                        <?php
                        get_search_form();
                        if ( is_active_sidebar( 'serch_notfound' ) ) {
                            dynamic_sidebar( 'search_notfound' );
                        } ?>
                    </div>
                </section>
            <?php endif; ?>
        </main><!--#main-->
    </section><!--#primary-->

<?php get_footer();