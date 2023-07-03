<article id="post-<?php the_ID(); ?>"<?php post_class(); ?>>
    <header class="entry-header">
        <?php the_title('<h1 class="entry-title">','</h1>'); ?>
        <?php if ( is_singular('post')) { ?>
            <?php the_date('','投稿日: ' ); ?>
        <?php } // is_singlar('post') ?>
    </header><!--entry-header-->

    <figure class="post-thumbnail">
        <?php the_post_thumbnail(); ?>
    </figure><!--.post-thumbnail-->

    <?php the_tags( '<span class="tags-links">', '', '</span>' ); ?>

    <div class="entry-content">
        <?php
        the_content();//本文表示
        //カスタムフィールドは設定なし
        wp_link_pages(
            [
                'before' => '<div class="page-links">ページ:',
                'after' => '</div>',
            ]
        ); ?>
        <?php if (is_singular('post')) { ?>
            <footer class="entry-footer">
                <span class="cat-links">カテゴリー: <?php the_category(','); ?></span>
            </footer><!--.entry-footer -->
        <?php } // is_singlar('post') ?>

        <!--メインクエリはまだ未設定-->

    </div><!--entry-content-->
</article><!--#post-<?php the_ID(); ?>-->
