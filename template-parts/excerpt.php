<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <figure class="post-thumbnail-excerpt">
        <?php the_post_thumbnail(); ?>
    </figure><!-- .post-thumbnail-->

    <header class="entry-header">

        <?php the_title('<h2 class="entry-title"><a href="' 
        . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>

    </header><!--/entry-header-->

    <time class="card__time" datetime="<?php the_time('Y.m.d'); ?>">
        <?php the_time('Y.m.d'); ?>
    </time>

    <footer class="entry-footer">
        <span class="cat-links">カテゴリー： <?php the_category(','); ?></span>
    </footer><!--.entry-footer-->
</article><!--#post-<?php the_ID(); ?> -->

    