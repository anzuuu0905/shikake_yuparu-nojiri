<?php get_header(); ?>

<main class="main grid__content">
      <section class="shop-head__wrap">
        <div class="shop-head__text">
          <h1 class="shop__title">売店</h1>
          <span class="shop__subtitle">Shop</span>
        </div>
      </section>

      <!-- パンくずリスト -->
      <?php get_template_part('parts/breadcrumb'); ?>

      <div class="shop shop__block">
        <div class="inner shop__inner">
          <div class="shop__text">
            <p class="shop__description">
              地元の新鮮な野(山)菜、<br class="u-mobile">それらの素材を使った小林市の加工品をはじめ、<br>
              宮崎県らしいお土産などが人気です。<br>
              特産品の全国発送も行っております。
            </p>
          </div>

          <!-- スライダー -->
          <?php get_template_part('parts/subpage-slick'); ?>

          <div class="shop-time__wrap">
            <h2 class="shop-body__title">営業時間</h2>
            <p class="shop-time__text">8:00〜18:00</p>
            <a class="shop-time__link" href="#calender">定休日はこちら</a>
          </div>

          <div class="shop-info__wrap">
            <h2 class="shop-body__title">オススメ商品のご案内</h2>
            <!-- ブログカードリスト -->
            <div class="blog__items card-list">
              <a href="#" class="blog-card card-list__item">
                <figure class="blog-card__img">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/subpage/shopinfo-img1.jpg" alt="ブログカード1">
                </figure>
                <div class="blog-card__body">
                  <h3 class="blog-card__title">宮崎県の「道の駅限定」商品</h3>
                  <div class="blog-card__info">
                    <time class="blog-card__data" datetime="2022-08-10">2022.08.10</time>
                  </div>
                </div>
                <div class="blog-card__foot">
                  <span class="blog-card__author">ハル（売店）</span>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- 関連スタッフブログ -->
      <?php get_template_part('parts/blog-connect'); ?>



<?php get_footer(); ?>