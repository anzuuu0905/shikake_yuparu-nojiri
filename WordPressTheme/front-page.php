<?php get_header(); ?>

<main class="main grid__content">
      <section class="mainview mainview__wrap">
        <div class="slider5-wrap">
          <ul class="slider-5" id="js-slider-5">
            <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/mainview-img.jpg" alt=""></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/blog-img1.jpg" alt=""></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/mainview-img.jpg" alt=""></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/mainview-img.jpg" alt=""></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/mainview-img.jpg" alt=""></li>
          </ul>
        </div>
        <div class="dots-5"></div>
        <div class="mainview__text">
          <h2 class="mainview__title">のじりのいい湯と<br>
            ここだけグルメ。</h2>
        </div>
      </section>
      <div class="top-info  top-info__block">
        <div class="top-info__inner inner">
          <div class="top-info__wrap">
            <h3 class="top-info__title">営業時間のご案内</h3>
            <div class="top-info__container">
              <div class="top-info__content">
                <h4 class="top-info__head">レストラン味彩</h4>
                <p class="top-info__body">11:00 ~ 15:00 <span class="top-info__text">(ラストオーダー 14:30)<br>
                    夜/団体様のみのご予約制</span></p>
              </div>
              <div class="top-info__content">
                <h4 class="top-info__head">売店</h4>
                <p class="top-info__body">08:00 ~ 18:00</p>
              </div>
              <div class="top-info__content">
                <h4 class="top-info__head">こばやしのじりの湯</h4>
                <p class="top-info__body">11:00 ~ 20:30<span class="top-info__text">(受付終了 20:00)</span></p>
              </div>
            </div>
          </div>
          <div class="top-info__wrap">
            <h3 class="top-info__title">定休日</h3>
            <div class="top-info__textbox">
              <p class="top-info__close">毎月第1水曜日 <span class="top-info__text">(当日祝日の場合は翌日)</span></p>
              <a href="#calender" class="top-info__calender">営業日カレンダーを見る</a>
            </div>
            <div class="top-info__description">
              2022年00月00日 (水)が定休日です。<br>
              ※なお、1日 (第1水曜日)は通常通り営業いたします。
            </div>
          </div>
        </div>
      </div>

      <section class="blog blog__block">
        <div class="blog__wrapper">
          <div class="inner blog__inner">
            <div class="blog__head">
              <div class="blog__top">
                <h2 class="blog__title">スタッフブログ</h2>
                <span class="blog__subtitle">Staff blog</span>
              </div>
              <p class="blog__description">「道の駅」メンバーの日々の出来事や、小林市の紹介など<br class="u-desktop">スタッフの視点でいろいろな情報をブログで発信
                しています。</p>
            </div>
            <!-- ブログカードリスト -->
            <div class="blog__items card-list">
              <a href="#" class="blog-card card-list__item">
                <div class="blog-card__new">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/new-icon.png" alt="">
                </div>
                <figure class="blog-card__img">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/blog-img1.jpg" alt="ブログカード1">
                </figure>
                <div class="blog-card__body">
                  <h3 class="blog-card__title">アロエを増やしてみました</h3>
                  <div class="blog-card__info">
                    <time class="blog-card__data" datetime="2022-09-09">2022.09.09</time>
                    <span class="blog-card__author">うこちゃん（浴場）</span>
                  </div>
                </div>
                <div class="blog-card__foot">
                  <span class="blog-card__text">こばやしのじりの湯</span>
                </div>
              </a>
              <a href="#" class="blog-card card-list__item">
                <div class="blog-card__new">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/new-icon.png" alt="">
                </div>
                <figure class="blog-card__img">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/blog-img2.jpg" alt="ブログカード2">
                </figure>
                <div class="blog-card__body">
                  <h3 class="blog-card__title">ペットボトルキャップ、集めてます</h3>
                  <div class="blog-card__info">
                    <time class="blog-card__data" datetime="2022-09-08">2022.09.08</time>
                    <span class="blog-card__author">チョコミント（事務所）</span>
                  </div>
                </div>
                <div class="blog-card__foot">
                  <span class="blog-card__text">売店</span>
                </div>
              </a>
              <a href="#" class="blog-card card-list__item">
                <figure class="blog-card__img">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/blog-img3.jpg" alt="ブログカード3">
                </figure>
                <div class="blog-card__body">
                  <h3 class="blog-card__title">栗入荷しています</h3>
                  <div class="blog-card__info">
                    <time class="blog-card__data" datetime="2022-09-07">2022.09.07</time>
                    <span class="blog-card__author">ハル（売店）</span>
                  </div>
                </div>
                <div class="blog-card__foot">
                  <span class="blog-card__text">売店</span>
                </div>
              </a>
              <a href="#" class="blog-card card-list__item">
                <figure class="blog-card__img">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/blog-img4.jpg" alt="ブログカード4">
                </figure>
                <div class="blog-card__body">
                  <h3 class="blog-card__title">押し花</h3>
                  <div class="blog-card__info">
                    <time class="blog-card__data" datetime="2022-09-06">2022.09.06</time>
                    <span class="blog-card__author">ギコ（浴場）</span>
                  </div>
                </div>
                <div class="blog-card__foot">
                  <span class="blog-card__text">こばやしのじりの湯</span>
                </div>
              </a>
            </div>
            <div class="blog__items card-list card-list__pc">
              <a href="#" class="blog-card card-list__item">
                <figure class="blog-card__img">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/blog-img5.jpg" alt="ブログカード5">
                </figure>
                <div class="blog-card__body">
                  <h3 class="blog-card__title">地元小林の須木栗を使って新メニューを開発しています</h3>
                  <div class="blog-card__info">
                    <time class="blog-card__data" datetime="2022-09-05">2022.09.05</time>
                    <span class="blog-card__author">ゆうやん（レストラン 味彩）</span>
                  </div>
                </div>
                <div class="blog-card__foot">
                  <span class="blog-card__text">レストラン味彩</span>
                </div>
              </a>
              <a href="#" class="blog-card card-list__item">
                <figure class="blog-card__img">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/blog-img6.jpg" alt="ブログカード2">
                </figure>
                <div class="blog-card__body">
                  <h3 class="blog-card__title">「ゴーヤの甘酢漬け」を作ってみませんか？</h3>
                  <div class="blog-card__info">
                    <time class="blog-card__data" datetime="2022-09-04">2022.09.04</time>
                    <span class="blog-card__author">カモミール（駅長・事務所）</span>
                  </div>
                </div>
                <div class="blog-card__foot">
                  <span class="blog-card__text">売店</span>
                </div>
              </a>
              <a href="#" class="blog-card card-list__item">
                <figure class="blog-card__img">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/blog-img7.jpg" alt="ブログカード7">
                </figure>
                <div class="blog-card__body">
                  <h3 class="blog-card__title">ニシモロ弁</h3>
                  <div class="blog-card__info">
                    <time class="blog-card__data" datetime="2022-09-03">2022.09.03</time>
                    <span class="blog-card__author">きィ（浴場）</span>
                  </div>
                </div>
                <div class="blog-card__foot">
                  <span class="blog-card__text">売店</span>
                </div>
              </a>
              <a href="#" class="blog-card card-list__item">
                <figure class="blog-card__img">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/blog-img8.jpg" alt="ブログカード8">
                </figure>
                <div class="blog-card__body">
                  <h3 class="blog-card__title">9月3日(土)・4日(日)のチョウザメ三昧定食は合計10食ご用意いたします。</h3>
                  <div class="blog-card__info">
                    <time class="blog-card__data" datetime="2022-09-02">2022.09.02</time>
                    <span class="blog-card__author">ゆうやん（レストラン 味彩）</span>
                  </div>
                </div>
                <div class="blog-card__foot">
                  <span class="blog-card__text">イベント情報</span>
                </div>
              </a>
            </div>
            <!-- ブログリンクボタン -->
            <div class="blog__btn">
              <a class="btn-link" href="#">もっと見る</a>
            </div>
          </div>
        </div>
      </section>
      <section class="facility facility__block">
        <div class="facility__inner inner">
          <div class="facility__textbox">
            <p class="facility__description">レストラン・売店・入浴施設を完備した<br class="u-mobile">「道の駅ゆ～ぱるのじり」。<br>
              新鮮な野菜や加工品などのお土産はもちろん、<br class="u-mobile">疲れを癒す入浴施設も併設。<br>
              レストラン味彩では、小林市や宮崎県らしさを<br class="u-mobile">感じる新メニューが続々追加されています。<br>
              小林市、宮崎県の食材を楽しめる<br class="u-mobile">〝わざわざ行きたくなる〟「道の駅」を目指します。</p>
          </div>
          <div class="section__head">
            <h2 class="section__title">施設のご案内</h2>
            <span class="section__subtitle">Facility Information</span>
          </div>
          <div class="facility__items">
            <div class="facility__item">
              <figure class="facility__img1">
                <div class="facility__text facility__text--ajisai">
                  <h3 class="facility__title">レストラン味彩</h3>
                  <div class="facility__link"><a class="facility__btn" href="#">詳しく見る</a></div>
                </div>
              </figure>
            </div>
            <div class="facility__item">
              <figure class="facility__img2">
                <div class="facility__text">
                  <h3 class="facility__title">売店</h3>
                  <div class="facility__link"><a class="facility__btn" href="#">詳しく見る</a></div>
                </div>
              </figure>
            </div>
            <div class="facility__item">
              <figure class="facility__img3">
                <div class="facility__text">
                  <h3 class="facility__title">こばやしのじりの湯</h3>
                  <div class="facility__link"><a class="facility__btn" href="#">詳しく見る</a></div>
                </div>
              </figure>
            </div>
            <div class="facility__item">
              <figure class="facility__img4 facility__img--closed">
                <div class="facility__text">
                  <h3 class="facility__title">宿泊(休業中／再開未定)</h3>
                  <!-- <div class="facility__link"><a class="facility__btn" href="#">詳しく見る</a></div> -->
                </div>
              </figure>
            </div>
          </div>
        </div>
      </section>
      <section class="news news__block">
        <div class="news__inner inner">
          <div class="section__head">
            <h2 class="section__title">お知らせ</h2>
            <span class="section__subtitle">Information</span>
          </div>
          <div class="news__wrapper">
            <ul class="news__lists">
              <li class="news__list">
                ○月の定休日は、○日(○)です。
              </li>
              <li class="news__list">
                テキストが入ります。テキストが入ります。
              </li>
              <li class="news__list">
                テキストが入ります。テキストが入ります。テキストが入りま
              </li>
              <li class="news__list">
                テキストが入ります。テキストが入ります。テキストが入りま
              </li>
              <li class="news__list">
                テキストが入ります。テキストが入ります。
              </li>
              <!-- ブログリンクボタン -->
              <div class="news__btn">
                <a class="btn-link" href="#">もっと見る</a>
              </div>
            </ul>
            <div class="news-sns__area">
              <picture class="news-sns__img">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/facebook-article.jpg" media="(min-width: 768px)" /> <!-- タブレット画像 -->
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/facebook-article_sp.jpg" alt="facebook記事" />
              </picture>
            </div>
          </div>
        </div>
      </section>
      <section class="event event__block">
        <div class="event__wrapper">
          <div class="event__inner inner">
            <div class="section__head">
              <h2 class="section__title">イベント情報</h2>
              <span class="section__subtitle">Event Information</span>
            </div>
            <!-- ブログカードリスト -->
            <div class="event__items card-list">
              <a href="#" class="blog-card card-list__item">
                <div class="blog-card__new">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/new-icon.png" alt="">
                </div>
                <figure class="blog-card__img">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/event-blog1.jpg" alt="イベント情報1">
                </figure>
                <div class="blog-card__body">
                  <h3 class="blog-card__title">毎月第3日曜日は家庭の日です。</h3>
                  <div class="blog-card__info">
                    <time class="blog-card__data" datetime="2022-09-12">2022.09.12</time>
                    <span class="blog-card__author">ハル（売店）</span>
                  </div>
                </div>
                <div class="blog-card__foot">
                  <span class="blog-card__text">こばやしのじりの湯</span>
                </div>
              </a>
              <a href="#" class="blog-card card-list__item">
                <figure class="blog-card__img">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/event-blog2.jpg" alt="イベント情報2">
                </figure>
                <div class="blog-card__body">
                  <h3 class="blog-card__title">毎月２６日はお風呂の日♪</h3>
                  <div class="blog-card__info">
                    <time class="blog-card__data" datetime="2022-08-18">2022.08.8</time>
                    <span class="blog-card__author">ハル（売店）</span>
                  </div>
                </div>
                <div class="blog-card__foot">
                  <span class="blog-card__text">こばやしのじりの湯</span>
                </div>
              </a>
              <a href="#" class="blog-card card-list__item">
                <figure class="blog-card__img">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/event-blog3.jpg" alt="イベント情報3">
                </figure>
                <div class="blog-card__body">
                  <h3 class="blog-card__title">毎月第3日曜日は家庭の日です。</h3>
                  <div class="blog-card__info">
                    <time class="blog-card__data" datetime="2022-08-14">2022.08.14</time>
                    <span class="blog-card__author">ハル（売店）</span>
                  </div>
                </div>
                <div class="blog-card__foot">
                  <span class="blog-card__text">売店</span>
                </div>
              </a>
              <a href="#" class="blog-card card-list__item">
                <figure class="blog-card__img">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/event-blog4.jpg" alt="イベント情報4">
                </figure>
                <div class="blog-card__body">
                  <h3 class="blog-card__title">出店中止のお知らせ！</h3>
                  <div class="blog-card__info">
                    <time class="blog-card__data" datetime="2022-07-15">2022.07.15</time>
                    <span class="blog-card__author">カモミール（駅長・事務所）</span>
                  </div>
                </div>
                <div class="blog-card__foot">
                  <span class="blog-card__text">売店</span>
                </div>
              </a>
            </div>
            <!-- ブログリンクボタン -->
            <div class="blog__btn">
              <a class="btn-link" href="#">もっと見る</a>
            </div>
          </div>
        </div>
      </section>
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

<?php get_footer(); ?>