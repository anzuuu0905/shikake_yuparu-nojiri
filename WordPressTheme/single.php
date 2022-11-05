<?php get_header(); ?>
    <main class="main grid__content">
      <section class="blog-article blog-article__block">
        <!-- パンくずリスト -->
        <div class="breadcrumb__inner inner">
          <ol class="breadcrumb__items">
            <li class="breadcrumb__item"><a href="index.html">TOP</a></li>
            <li class="breadcrumb__item breadcrumb__item--current">スタッフブログ</li>
          </ol>
        </div>
        <!-- ブログナビメニュー -->
        <?php get_template_part('parts/category-nav'); ?>

        <!-- <div class="blog-navi__inner inner">
          <ul class="blog-navi__items blog-navi__items--article">
            <li class="blog-navi__item blog-navi__item--current"><a href="<?php $blogs ?>">全て</a></li>
            <li class="blog-navi__item"><a href="<?php $blogs ?>">レストラン味彩</a></li>
            <li class="blog-navi__item"><a href="<?php $blogs ?>">売店</a></li>
            <li class="blog-navi__item"><a href="<?php $blogs ?>">こばやしのじりの湯 </a></li>
            <li class="blog-navi__item"><a href="<?php $blogs ?>">事務所</a></li>
            <li class="blog-navi__item"><a href="<?php $blogs ?>">駅長</a></li>
            <li class="blog-navi__item"><a href="<?php $blogs ?>">お知らせ</a></li>
            <li class="blog-navi__item"><a href="<?php $blogs ?>">イベント情報</a></li>
            <li class="blog-navi__item"><a href="<?php $blogs ?>">メディア掲載</a></li>
            <li class="blog-navi__item"><a href="<?php $blogs ?>">受賞実績</a></li>
          </ul>
        </div> -->
        <div class="inner blog-article__inner">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php if (has_post_thumbnail()) : ?>
              <figure class="blog-article__mainimg">
                <img src="<?php the_post_thumbnail_url('full'); ?>">
              </figure>
            <?php endif; ?>
            <!-- <figure class="blog-article__mainimg">
              <img src="./images/blog/blog-img1.jpg" alt="記事イメージ">
            </figure> -->
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
                <!-- <p class="blog-article__text">こんにちは。<br>
                  道の駅ゆ〜ぱるのじりの浴場に新しい「のれん」が出来ました。<br>
                  フクロウのキャラクターも描かれていて、とても可愛くて明るいのれんです。<br>
                  お客様が目を留め、「風情があるね」と言ってくださいました。<br>
                  反応は様々ですが、お客様の一言をとても嬉しく思いました。<br>
                  明るくなった道の駅ゆ〜ぱるのじりの浴場にぜひご来館ください。</p> -->
              </div>
              <!-- <figure class="blog-article__img">
                <img src="./images/blog/blog-img1.jpg" alt="記事イメージ">
              </figure> -->
            </div>

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
                  <p class="blog-author__name"><span>この記事を書いた人</span>ギコ（浴場）</p>
                </div>
                <div class="blog-author__linkpc"><a class="btn-link__blog" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">この人の他の記事を読む</a></div>
              </div>
              <p class="blog-author__description">投稿者のプロフィール文が入ります。投稿者のプロフィール文が入ります。投稿者のプロフィール文が入ります。投稿者のプロフィール文が入ります。</p>
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
            <?php query_posts('posts_per_page=4'); ?>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <a class="blog-card card-list__item" href="<?php the_permalink(); ?>">

                <figure class="blog-card__img">
                  <img src="
                  <?php
                  if (has_post_thumbnail()) :
                    the_post_thumbnail_url('full'); 
                  else :
                  ?>
                    https://yuparu-nojiri.com/wp/wp-content/uploads/2022/04/thumbnail.jpg
                  <?php endif; ?>
                  ">
                </figure>
                <div class="blog-card__body">
                  <h3 class="blog-card__title"><?php the_title(); ?></h3>
                  <div class="blog-card__info">
                    <time class="blog-card__data" datetime="<?php the_time('Y-m-d'); ?>"><?php the_date(); ?></time>
                  </div>
                </div>
                <div class="blog-card__foot">
                    <span class="blog-card__author"><?php the_author_meta('nickname'); ?></span>
                </div>
              </a>

              <?php endwhile; ?>
            <?php endif; ?>
          </div>

        <!-- WK START -->

        <!-- WK END -->









          <!-- ブログリンクボタン -->
          <div class="blog__btn">
            <a class="btn-link" href="#">もっと見る</a>
          </div>
        </div>
      </div>
      <section class="access access__block">
        <div class="access__inner inner">
          <div class="access__head">
            <div class="section__head">
              <h2 class="section__title">アクセス情報</h2>
              <span class="section__subtitle">Access Information</span>
            </div>
            <div class="access__btn">
              <a class="btn-link__access" href="#">もっと見る</a>
            </div>
          </div>
          <div class="access__text">
            <p class="access__description">「のじりこぴあ」や「萩の茶屋」が有名な花街道、国道268号沿。75台収容の大駐車場を完備。宮崎交通のバス停もございます。</p>
            <span class="access__root">宮崎道高原ICより県道29、R268経由で約20分 ・宮崎空港よりお車にて約70分</span>
            <div class="access__info">
              <p class="access__adress">宮崎県小林市野尻町三ケ野山4347-1</p>
              <div class="access__flex">
                <p class="access__tel">0984-44-2210</p>
                <a class="access__link" href="#">お問い合わせ</a>
              </div>
            </div>
          </div>
        </div>
        <div class="access__maparea">
          <iframe class="access__map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1692.430871289772!2d131.0815905!3d31.9646473!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x353f3857a01c1eeb%3A0x3c64e421f0886e2a!2z6YGT44Gu6aeF44KG772e44Gx44KL44Gu44GY44KK!5e0!3m2!1sja!2sjp!4v1665542453198!5m2!1sja!2sjp" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </section>
    </main>
  </div>
  <footer class="footer footer__block grid__footer">
    <nav class="footer__nav navi">
      <ul class="navi-large__items">
        <li class="navi-large__item"><a href="#">施設のご案内</a></li>
        <li class="navi-large__item"><a href="#">レストラン味彩</a></li>
        <li class="navi-large__item"><a href="#">売店</a></li>
        <li class="navi-large__item"><a href="#">こばやしのじりの湯</a></li>
        <li class="navi-large__item navi-large__item--closed">宿泊（休業中／再開未定）</li>
        <li class="navi-large__item"><a href="#">アクセス情報</a></li>
        <li class="navi-large__item"><a href="#">スタッフブログ</a></li>
      </ul>
      <ul class="navi-small__items">
        <li class="navi-small__item"><a href="#">お知らせ</a></li>
        <li class="navi-small__item"><a href="#">イベント情報</a></li>
        <li class="navi-small__item"><a href="#">運営会社</a></li>
        <li class="navi-small__item"><a href="#">採用情報</a></li>
        <li class="navi-small__item"><a href="#">プライバシーポリシー</a></li>
        <li class="navi-small__item"><a href="#">サイトマップ</a></li>
      </ul>
    </nav>
    <div class="footer__inner inner">
      <div class="footer__left">
        <div class="footer__textbox">
          <p class="footer__description">国土交通省・「道の駅」の第17回（2001.8）登録にて<br class="u-desktop">宮崎県内10駅目</p>
          <h2 class="footer__logo">道の駅ゆ〜ぱるのじり</h2>
          <p class="footer__adress">〒886-0213<br>
            宮崎県小林市野尻町三ケ野山4347-1</p>
          <p class="footer__tel">TEL&#xFF1A;0984-44-2210&ensp;FAX&#xFF1A;0984-44-2231</p>
          <p class="footer__holiday">定休日&#xFF1A;毎月第1水曜日<span class="footer__holiday--small">（当日祝日の場合は翌日）</span></p>
        </div>
        <div class="footer__info">
          <h3 class="footer__title">営業時間のご案内</h3>
          <table class="footer-time__wrap">
            <tr class="footer-time__table">
              <th>レストラン味彩</th>
              <td><span class="footer-time__small"> 昼/</span>11:00 ~ 15:00<span class="footer-time__small">（L.O. 14:30）</span><br>
                <span class="footer-time__small">夜/</span>団体様のみの御予約制<br>
                <span class="footer-time__small">17:00~21:00（L.O. 20:30）</span><br>
                <span class="footer-time__midium">※御宴会は、2時間（L.O. は1時間半）制</span>
              </td>
            </tr>
            <tr class="footer-time__table">
              <th>売店</th>
              <td>08:00 ~ 18:00</td>
            </tr>
            <tr class="footer-time__table">
              <th>こばやしのじりの湯</th>
              <td>11:00 ~ 20:30 <span class="footer-time__small">（最終受付 20:00）</span> </td>
            </tr>
          </table>
          <div class="footer-time__close">
            宿泊(休業中/再開未定)
          </div>
        </div>
      </div>
      <div class="footer__right">
        <h3 id="calender" class="footer__title">営業日カレンダー</h3>
        <p class="footer__message">2022年00月00日 (水)が定休日です。<br>
          ※なお、1日 (第1水曜日)は通常通り営業いたします。</p>
        <!-- XO Event Calendar プラグイン -->
        <div class="footer-calender__area"></div>

        <div class="footer-link__wrapper footer__links">
          <div class="footer__link1">
            <a href="#" class="footer-link__item1">
              <img src="./images/common/banner-youtube.jpg" alt="小林市公式youtubeチャンネル">
            </a>
            <a href="#" class="footer-link__item1">
              <img src="./images/common/banner-sample.jpg" alt="サンプル">
            </a>
          </div>
          <div class="footer__link2">
            <a href="#" class="footer-link__item2">
              <img src="./images/common/banner-kobayashishi.jpg" alt="小林市ホームページ">
            </a>
            <a href="#" class="footer-link__item2">
              <img src="./images/common/banner-kankou.jpg" alt="まちづくり×観光 小林市の今と未来を支える。">
            </a>
            <a href="#" class="footer-link__item2">
              <img src="./images/common/banner-michinoeki1.jpg" alt="全国「道の駅」連絡会公式サイト">
            </a>
            <a href="#" class="footer-link__item2">
              <img src="./images/common/banner-michinoeki2.jpg" alt="九州・沖縄道の駅連絡会。九州エリアの総合案内所">
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-overview__wrapper">
      <ul class="footer-overview__links">
        <li><a rel="noreferrer noopener" href="https://yuparu-nojiri.com" target="_blank"><img src="./images/common/logo-yupalnojiri.png" alt="ゆ～ぱるのじり"></a></li>
        <li><a rel="noreferrer noopener" href="https://nojiri-kopia.com/" target="_blank"><img src="./images/common/logo-nojirikopia.png" alt="のじりこぴあ"></a></li>
      </ul>
      <div class="footer-overview__wrap">
        <div class="footer-overview__logo">
          <a href="#"><img src="./images/common/logo-hermecnojiri.png" alt="ハーメックのじり株式会社"></a>
        </div>
        <div class="footer-overview__adress">
          <p class="footer-overview__text">〒886-0212<br>
            宮崎県 小林市 野尻町東麓5160</p>
        </div>
      </div>
      <div class="footer__copy">
        <small>Copyright &copy; 2022 Hermec Nojiri Co.,Ltd. All rights reserved.</small>
      </div>
    </div>
  </footer>
</body>



<?php get_footer(); ?>