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
                    <p>検索ボックスにお探しのコンテンツに該当するキーワードを入力</p>
                    <div class="search-box">
                        <?php get_search_form(); ?>
                    </div>
                </div>
                <h2 class="error-h2">
                    2.  カテゴリーから見つける
                </h2>
                <div class="error-cat">
                    <p>それぞれのカテゴリーの一覧から目的のページを探す</p>
                    <div class="cat-box">
                        <ul>
                            <li><a href="#">sample1</a></li>
                            <li><a href="#">sample2</a></li>
                            <li><a href="#">sample3</a></li>
                            <li><a href="#">sample4</a></li>
                            <li><a href="#">sample5</a></li>
                        </ul>
                    </div>
                </div>
                <h2 class="error-h2">
                    3.  無効なリンクを報告する
                </h2>
                <div class="error-report">
                    <p>当サイトで無効なリンクを発見された場合、お問い合わせからご報告頂けたら幸いでございます</p>
                    <div class="report-box">
                        <a href="#">お問合せはコチラから</a>
                    </div>
                </div>
            </div>
 
        </main><!--end site-main-->
        <?php get_sidebar(); ?>
</section><!--end content-area-->

<?php get_footer(); ?>