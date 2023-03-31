<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">

        <?php the_title('<h2 class="entry-title"><a href="' 
        . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>

    </header><!--/entry-header-->

    <figure class="post-thumbnail">
        <?php the_post_thumbnail(); ?>
    </figure><!-- .post-thumbnail-->

    <div class="entry-content">
        <?php the_excerpt(); ?>
    </div><!--.entry-content-->

    <footer class="entry-footer">
        <span class="cat-links">カテゴリー： <?php the_category(','); ?></span>
        <?php the_tags( '<span class="tags-links">タグ:',',','</span>' ); ?>
    </footer><!--.entry-footer-->
</article><!--#post-<?php the_ID(); ?> -->

    