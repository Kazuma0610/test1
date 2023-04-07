<?php get_header(); ?>

    <section id="primary" class="content-area">
        <main id="main" class="site-main">
        


            <?php if (have_posts()): ?>
                <div class="search_result"><?php
                     if (isset($_GET['s']) && empty($_GET['s'])) {
                     echo '検索キーワード未入力'; // 検索キーワードが未入力の場合のテキストを指定
                     } else {
                    echo '“'.$_GET['s'] .'”の検索結果：'.$wp_query->found_posts .'件'; // 検索キーワードと該当件数を表示
                }
                ?></div>
                <ul>
                    <?php while(have_posts()): the_post(); ?>
                    <li>
                        <a href="<?php the_permalink(); ?>"><?php echo the_post_thumbnail(); ?><?php echo get_the_title(); ?></a>
                    </li>
                    <?php endwhile; ?>
                </ul>
                <?php the_posts_pagination([
                    'prev_text' => '&larr;',
                    'next_text' => '&rarr;',
                ]); ?>
                <?php else: ?>
                    <P>検索されたキーワードにマッチする記事はありませんでした</P>
                <div class="page-content">
                    <p>見つからなかった場合は再度検索</p>
                    <?php
                        get_search_form();
                    ?>
                </div><!--page-content-->
                <?php endif; ?>
                
                


        </main><!--#main-->
        <?php get_sidebar(); ?>
    </section><!--#primary-->

<?php get_footer(); 