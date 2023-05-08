<?php get_header(); ?>
    <section id="primary" class="content-area">
        <main id="main" class="site-main">
            
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
                            <span class="prev">前の記事</span>
                        </a>
                    </div>
                    <?php endif; ?>
                    <?php $prevpost = get_adjacent_post(false, '', true); if ($prevpost) : ?>
                    <div class="post__pagination__right">
                        <a href="<?php echo get_permalink($prevpost->ID); ?>">
                            <span class="post__pagination__right__img"><?php echo get_the_post_thumbnail($prevpost->ID); ?></span>
                            <span class="post__pagination__right__text"><?php echo esc_attr($prevpost->post_title); ?></span>
                            <span class="next">次の記事</span>
                        </a>
                    </div>
                    <?php endif; ?>
                </div>
        </main><!--#main-->
        <?php get_sidebar(); ?>
    </section><!-- #primary-->                   
<?php get_footer(); ?>