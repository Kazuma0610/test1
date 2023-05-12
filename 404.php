<?php get_header(); ?>
    
<section id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="error-wrap">
                <h1 class="error-h1">お探しのページが見つかりません</h1>
            </div>
            <div class="error-contents">
                <div class="error-tl">
                    <p>検索して、再度見つけてみましょう</p>
                </div>
                <h2 class="error-h2">
                    1.  検索して見つける
                </h2>
                <div class="error-search">
                    <p>検索ボックスにお探しのコンテンツに該当するキーワードを入力下さい</p>
                    <div class="search-box">
                        <?php get_search_form(); ?>
                    </div>
                </div>
            </div>
 
        </main><!--end site-main-->
        <?php get_sidebar(); ?>
</section><!--end content-area-->

<?php get_footer(); ?>