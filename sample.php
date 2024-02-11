<!-- NEWS -->
<section>
	<div class="catListBlock">
		<div class="catListInner">
			<div class="catListInnerBlock">
				<ul class="catList">
                    <?php
                    global $post;
                    $lastposts = get_posts( array(
                        'posts_per_page' => 18,
                        'post_type'      => 'post'
                    ) );
                    foreach ( $lastposts as $post ) :
                        setup_postdata( $post );
                        ?>
					<li>
						<a href="<?php the_permalink(); ?>">
							<div class="catTop">
								<p class="catDate"><?php the_date(); ?></p>
								<p class="catName"><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></p>
							</div>
							<p class="catTitle"><?php
    $limit = 40; // 表示させる文字数の上限
    if (mb_strlen($post->post_title)>$limit) {
      $title= mb_substr($post->post_title,0,$limit) ; echo $title. '…' ;
    } else {
      echo $post->post_title;
    }
  ?></p>
						</a>
					</li>
<?php
                    endforeach;
                    wp_reset_postdata();
                    ?>
				</ul>
				<div class="more">
					<button>もっと記事を見る</button>
				</div>
			</div>
		</div>
	</div>						
</section>
<!-- NEWS -->