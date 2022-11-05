<?php get_header(); ?>

<body>
  <div class="grid__container">

    <header class="header header__block grid__header">
      <div class="header__inner">
        <h1 class="logo">
          <a href="index.html" class="logo__link">
            <picture>
              <source srcset="./images/common/header-logo_pc.svg" media="(min-width: 768px)" /> <!-- タブレット画像 -->
              <img src="./images/common/header-logo_sp.svg" alt="ゆ〜ぱるのじり" />
            </picture>
          </a>
        </h1>
        <button class="header__drawer hamburger js-hamburger">
          <span></span>
          <span></span>
          <span></span>
        </button>
        <!-- sp　ヘッダーナビ -->
        <div class="header__sp-nav sp-nav js-drawer-menu">
          <div class="sp-nav__items">
            <div class="sp-nav__content">
              <a href="index.html" class="sp-nav__item">TOP</a>
              <a href="#" class="sp-nav__item">施設のご案内</a>
              <a href="#" class="sp-nav__item">レストラン味彩 <span>-あじさい-</span></a>
              <a href="#" class="sp-nav__item">売店</a>
              <a href="#" class="sp-nav__item">こばやしのじりの湯</a>
              <span class="sp-nav__item sp-nav__item--close">宿泊（休止中。再開未定）</span>
              <a href="#" class="sp-nav__item">アクセス情報</a>
              <a href="blog.html" class="sp-nav__item">スタッフブログ</a>
            </div>
            <div class="sp-nav__subcontent">
              <a href="#" class="sp-nav__subitem">お知らせ</a>
              <a href="#" class="sp-nav__subitem">イベント情報</a>
              <a href="#" class="sp-nav__subitem">メディア掲載</a>
              <a href="#" class="sp-nav__subitem">受賞実績</a>
              <a href="#" class="sp-nav__subitem">運営会社</a>
              <a href="#" class="sp-nav__subitem">採用情報</a>
              <a href="#" class="sp-nav__subitem">サイトマップ</a>
              <a href="#" class="sp-nav__subitem">プライバシーポリシー</a>
              <a href="#" class="sp-nav__subitem">お問い合わせ</a>
            </div>
            <!-- <div class="sp-nav__contact">
              <a href="#" class="sp-nav__botton">お問い合わせ</a>
            </div> -->
          </div>
        </div>
        <!-- pc ヘッダーナビ -->
        <div class="header__pc-nav pc-nav">
          <div class="pc-nav__items">
            <div class="pc-nav__content">
              <a href="index.html" class="pc-nav__item">TOP</a>
              <a href="#" class="pc-nav__item">施設のご案内</a>
              <a href="#" class="pc-nav__item">レストラン味彩 <span class="pc-nav__item--small">-あじさい-</span></a>
              <a href="#" class="pc-nav__item">売店</a>
              <a href="#" class="pc-nav__item">こばやしのじりの湯</a>
              <span class="pc-nav__item pc-nav__item--close">宿泊（休止中。再開未定）</span>
              <a href="#" class="pc-nav__item">アクセス情報</a>
              <a href="blog.html" class="pc-nav__item pc-nav__item--current">スタッフブログ</a>
            </div>
            <div class="pc-nav__subcontent">
              <a href="#" class="pc-nav__subitem">お知らせ</a>
              <a href="#" class="pc-nav__subitem">イベント情報</a>
              <a href="#" class="pc-nav__subitem">メディア掲載</a>
              <a href="#" class="pc-nav__subitem">受賞実績</a>
              <a href="#" class="pc-nav__subitem">運営会社</a>
              <a href="#" class="pc-nav__subitem">採用情報</a>
              <a href="#" class="pc-nav__subitem">サイトマップ</a>
              <a href="#" class="pc-nav__subitem">プライバシーポリシー</a>
            </div>
            <div class="pc-nav__contact">
              <a href="#" class="pc-nav__botton">お問い合わせ</a>
            </div>
          </div>
        </div>
      </div>
    </header>
    <main class="main grid__content">
      <section class="blogpage-head__wrap">
        <div class="blogpage-head__text">
          <h1 class="blogpage__title">スタッフブログ</h1>
          <span class="blogpage__subtitle">Staff blog</span>
        </div>
      </section>
      <!-- パンくずリスト -->
      <div class="breadcrumb__inner inner">
        <ol class="breadcrumb__items">
          <li class="breadcrumb__item"><a href="index.html">TOP</a></li>
          <li class="breadcrumb__item breadcrumb__item--current">スタッフブログ</li>
        </ol>
      </div>
      <!-- ブログナビメニュー -->
      <div class="blog-navi__inner inner">
        <ul class="blog-navi__items">
          <li class="blog-navi__item blog-navi__item--current"><a href="#">全て</a></li>
          <li class="blog-navi__item"><a href="#">レストラン味彩</a></li>
          <li class="blog-navi__item"><a href="#">売店</a></li>
          <li class="blog-navi__item"><a href="#">こばやしのじりの湯 </a></li>
          <li class="blog-navi__item"><a href="#">事務所</a></li>
          <li class="blog-navi__item"><a href="#">駅長</a></li>
          <li class="blog-navi__item"><a href="#">お知らせ</a></li>
          <li class="blog-navi__item"><a href="#">イベント情報</a></li>
          <li class="blog-navi__item"><a href="#">メディア掲載</a></li>
          <li class="blog-navi__item"><a href="#">受賞実績</a></li>
        </ul>
        <!-- 検索窓 -->
        <div class="search__wrap">
          <form method="get" action="#" class="search_container">
            <input type="text" size="25" placeholder="キーワード検索">
            <input type="submit" value="&#xf002">
          </form>
        </div>
      </div>

      <section class="blog-page blog-page__block">
        <div class="blog-page__wrapper">
          <div class="inner blog__inner">
            <!-- ブログカードリスト -->
            <div class="blog__items card-list">
              <a href="#" class="blog-card card-list__item">
                <div class="blog-card__new">
                  <img src="./images/blog/new-icon.png" alt="">
                </div>
                <figure class="blog-card__img">
                  <img src="./images/blog/blog-img1.jpg" alt="ブログカード1">
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
                  <img src="./images/blog/new-icon.png" alt="">
                </div>
                <figure class="blog-card__img">
                  <img src="./images/blog/blog-img2.jpg" alt="ブログカード2">
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
                  <img src="./images/blog/blog-img3.jpg" alt="ブログカード3">
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
                  <img src="./images/blog/blog-img4.jpg" alt="ブログカード4">
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
            <div class="blog__items card-list">
              <a href="#" class="blog-card card-list__item">
                <figure class="blog-card__img">
                  <img src="./images/blog/blog-img5.jpg" alt="ブログカード5">
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
                  <img src="./images/blog/blog-img6.jpg" alt="ブログカード2">
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
                  <img src="./images/blog/blog-img7.jpg" alt="ブログカード7">
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
                  <img src="./images/blog/blog-img8.jpg" alt="ブログカード8">
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
            <!-- ブログカードリスト -->
            <div class="blog__items card-list">
              <a href="#" class="blog-card card-list__item">
                <figure class="blog-card__img">
                  <img src="./images/blog/blog-img1.jpg" alt="ブログカード1">
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
                <figure class="blog-card__img">
                  <img src="./images/blog/blog-img2.jpg" alt="ブログカード2">
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
                  <img src="./images/blog/blog-img3.jpg" alt="ブログカード3">
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
                  <img src="./images/blog/blog-img4.jpg" alt="ブログカード4">
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
            <div class="blog__items card-list">
              <a href="#" class="blog-card card-list__item">
                <figure class="blog-card__img">
                  <img src="./images/blog/blog-img5.jpg" alt="ブログカード5">
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
                  <img src="./images/blog/blog-img6.jpg" alt="ブログカード2">
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
                  <img src="./images/blog/blog-img7.jpg" alt="ブログカード7">
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
                  <img src="./images/blog/blog-img8.jpg" alt="ブログカード8">
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
            <div class="blog__items card-list">
              <a href="#" class="blog-card card-list__item">
                <figure class="blog-card__img">
                  <img src="./images/blog/blog-img1.jpg" alt="ブログカード1">
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
                <figure class="blog-card__img">
                  <img src="./images/blog/blog-img2.jpg" alt="ブログカード2">
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
                  <img src="./images/blog/blog-img3.jpg" alt="ブログカード3">
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
                  <img src="./images/blog/blog-img4.jpg" alt="ブログカード4">
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
            <div class="blog__pagenavi wp-pagenavi">
              <span class="current pagelink">1</span>
              <a class="page smaller pagelink" href="#">2</a>
              <a class="page smaller pagelink" href="#">3</a>
              <a class="page larger pagelink" href="#">4</a>
              <a class="page larger pagelink" href="#">5</a>
              <a class="page-next nextpostslink pagelink" href="#"></a>
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