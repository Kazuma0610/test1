<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">

        <?php the_title('<h2 class="entry-title"><a href="' 
        . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>

    </header><!--/entry-header-->

    <figure class="post-thumbnail">
        <?php the_post_thumbnail(); ?>
    </figure><!-- .post-thumbnail-->