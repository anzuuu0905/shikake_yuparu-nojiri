<?php get_header(); ?>

    <main class="main grid__content">
      <section class="blogpage-head__wrap">
        <div class="blogpage-head__text">
          <h1 class="blogpage__title">スタッフブログ</h1>
          <span class="blogpage__subtitle">Staff blog</span>
        </div>
      </section>
      <!-- パンくずリスト -->
      <?php get_template_part('parts/breadcrumb'); ?>

      <!-- ブログナビメニュー -->
      <?php get_template_part('parts/category-nav'); ?>

      <section class="blog-page blog-page__block">
        <div class="blog-page__wrapper">
          <div class="inner blog__inner">
            <!-- ブログカードリスト -->
            <?php if (have_posts()) : while (have_posts()) : the_post(); 
            ?>
            <!-- <div class="blog__items card-list"> -->
            <?php get_template_part('parts/blog-card'); ?>
            <!-- </div> -->
            <?php endwhile; ?>
            <?php else : ?>
              <p class="">該当の記事はありませんでした。</p>          
            <?php endif; ?>
            <!-- ブログカードリスト -->
            <?php if(function_exists('wp_pagenavi')): ?>
              <div class="blog__pagenavi wp-pagenavi">
                <?php wp_pagenavi(); ?>
              </div>
            <?php endif; ?>

          </div>
        </div>
      </section>

<?php get_footer(); ?>