<?php get_header(); ?>
    <section id="primary" class="content-area">
        <section id="main" class="site-main">
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
            
                <div class="post__pagination">
                    <?php $nextpost = get_adjacent_post(false, '', false); if ($nextpost) : ?>
                    <div class="post__pagination__left">
                        <a href="<?php echo get_permalink($nextpost->ID); ?>">
                            <span class="post__pagination__left__img"><?php echo get_the_post_thumbnail($nextpost->ID); ?></span>
                            <span class="post__pagination__left__text"><?php echo esc_attr($nextpost->post_title); ?></span>
                            <span class="prev">前のお知らせ</span>
                        </a>
                    </div>
                    <?php endif; ?>
                    <?php $prevpost = get_adjacent_post(false, '', true); if ($prevpost) : ?>
                    <div class="post__pagination__right">
                        <a href="<?php echo get_permalink($prevpost->ID); ?>">
                            <span class="post__pagination__right__img"><?php echo get_the_post_thumbnail($prevpost->ID); ?></span>
                            <span class="post__pagination__right__text"><?php echo esc_attr($prevpost->post_title); ?></span>
                            <span class="next">次のお知らせ</span>
                        </a>
                    </div>
                    <?php endif; ?>
                </div>
                <!--関連記事-->
                <?php if(has_category() ) {
                    $catlist =get_the_category();
                    $category = array();
                    foreach($catlist as $cat){
                        $category[] = $cat->term_id;
                    }}
                ?>
                <?php $args = array(
                    'post_type' => 'news',
                    'posts_per_page' => '4', //表示させたい記事数
                    'post__not_in' =>array( $post->ID ), //現在の記事は含めない
                    'category__in' => $category, //先ほど取得したカテゴリー内の記事
                    'orderby' => 'rand' //ランダムで取得
                );
                $related_query = new WP_Query( $args );?>
                <aside class="related_post">
                    <h3>関連ニュース</h3>
                        <ul class="related_post_container">
                        <?php while ( $related_query->have_posts() ) : $related_query->the_post(); ?>
                            <li>
                                <a href="<?php the_permalink(); ?>">
                                    <!-- アイキャッチ表示 -->
                                    <div class="related_thumb"><?php the_post_thumbnail('medium'); ?></div>
                                    <!-- タイトル表示 -->
                                    <p class="related_title"><?php the_title(); ?></p>
                                </a>
                            </li>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); //最後に記事のリセット?>
                        </ul>
                </aside>

        </section><!--#main-->
        <?php get_sidebar(); ?>
    </section><!-- #primary-->                   
<?php get_footer(); ?>