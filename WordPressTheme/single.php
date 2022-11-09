<?php get_header(); ?>
    <main class="main grid__content">
      <section class="blog-article blog-article__block">
        <!-- パンくずリスト -->
        <?php get_template_part('parts/breadcrumb'); ?>
        <!-- ブログナビメニュー -->
        <?php get_template_part('parts/category-nav'); ?>
        <div class="inner blog-article__inner">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php if (has_post_thumbnail()) : ?>
              <figure class="blog-article__mainimg">
                <img src="<?php the_post_thumbnail_url('full'); ?>">
              </figure>
            <?php endif; ?>
            <div class="blog-article__wrapper">
              <div class="blog-article__titlebox">
                <h2 class="blog-article__title"><?php the_title(); ?></h2>
                <div class="blog-article__info">
                  <div class="blog-article__author"><?php the_author_nickname(); ?></div>
                  <time class="blog-article__data" datetime="<?php the_time('Y-m-d'); ?>"><?php the_date(); ?></time>
                </div>
                <?php the_tags('<ul><li class="blog-article__tag">', '</li><li class="blog-article__tag">', '</li></ul>'); ?>
              </div>

              <div class="blog-article__textbox">
                <?php the_content(); ?>
            </div>

            <!-- 未対応 -->
            <div class="blog-article__sns shareBox">
              <div class="blog-article__snstext">
                <span>Share!!</span>
              </div>
              <div class="blog-article__snslist">
                <a rel="noreferrer noopener" href="#" target="_blank"><img src="./images/common/sns01.jpeg" alt=""></a>
                <a rel="noreferrer noopener" href="#" target="_blank"><img src="./images/common/sns02.jpeg" alt=""></a>
                <a rel="noreferrer noopener" href="#" target="_blank"><img src="./images/common/sns03.jpeg" alt=""></a>
                <a rel="noreferrer noopener" href="#" target="_blank"><img src="./images/common/sns04.jpeg" alt=""></a>
                <a rel="noreferrer noopener" href="#" target="_blank"><img src="./images/common/sns05.jpeg" alt=""></a>
                <a rel="noreferrer noopener" href="#" target="_blank"><img src="./images/common/sns06.jpeg" alt=""></a>
                <a rel="noreferrer noopener" href="#" target="_blank"><img src="./images/common/sns07.jpeg" alt=""></a>
              </div>
            </div>

            <div class="blog-article__author blog-author__block">
              <div class="blog-author__wrap">
                <div class="blog-author__namebox">
                  <div class="blog-author__img">
                  <?php echo get_avatar( get_the_author_id(), 130 ); ?>
                </div>
                  <p class="blog-author__name"><span>この記事を書いた人</span><?php the_author_nickname(); ?></p>
                </div>
                <div class="blog-author__linkpc"><a class="btn-link__blog" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">この人の他の記事を読む</a></div>
              </div>
              <p class="blog-author__description"><?php the_author_meta('user_description'); ?></p>
              <div class="blog-author__linksp">
              <a class="btn-link__blog" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">この人の他の記事を読む</a>
              </div>
            </div>
          <?php endwhile;
          endif; ?>
        </div>
      </section>
      <!-- 関連スタッフブログ -->
      <!-- ブログカードリスト -->
      <div class="blog-connect__links">
        <div class="blog-connect__inner inner">
          <div class="blog-connect__top">
            <h2 class="blog-connect__title">関連スタッフブログ</h2>
            <span class="blog-connect__subtitle">Related Staff blog</span>
          </div>
          <div class="blog__items card-list">
            <?php
              $categories = get_the_category($post->ID);
              $cat_id = array();
              foreach( $categories as $category ) {
                array_push($cat_id, $category -> cat_ID);
              }
              $args = array(
                'post_type' => array('post'),
                'post_status' => array('publish'),//公開状態
                'posts_per_page' => 4,//8件取得
                'post__not_in' =>array( $post->ID ), //現在の記事は含めない
                'category__in' => $cat_id,
                'order' => 'DESC',//降順
                'orderby' => 'date',//日付で並び替える
              );
              $the_query = new WP_Query( $args );
              // var_dump($the_query);
            ?>
              <!-- ループ -->
              <?php if ( $the_query->have_posts() ) : ?>
                <?php while ( $the_query->have_posts() ) : ?>
                  <?php 
                    $the_query->the_post();
                    $post_id = get_the_ID();
                  ?>
              <?php get_template_part('parts/blog-card'); ?>

              <?php endwhile; ?>
            <?php endif; ?>
          </div>

          <!-- ブログリンクボタン -->
          <div class="blog__btn">
            <a class="btn-link" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">もっと見る</a>
          </div>
        </div>
      </div>

<?php get_footer(); ?>