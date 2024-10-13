<!-- 記者の最新記事のPHPコード -->
<section>
	<div class="catListBlock">
		<div class="catListInner">
			<div class="catListInnerBlock">
        <div class="write_head__title">この記者の最新記事一覧</div>
				<ul class="catList">
                <?php query_posts('author=2&showposts=18');?>
                <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
                   <?php global $post; ?>
 
                    <li>
                        <a href="<?php the_permalink(); ?>">
                          <div class="cat-img">
                            <!-- アイキャッチ表示 -->
                            <div class="cat_thumb"><?php the_post_thumbnail('thumbnail'); ?></div>
                          </div>
                          <div class="cat-text">
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
                              ?>
                            </p>
                          </div>
						            </a>
                    </li>
 
                <?php endwhile;
                endif;
                wp_reset_query();
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