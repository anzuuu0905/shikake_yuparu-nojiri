<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <!-- 削除予定 -->
  <!-- <title>道の駅　ゆ〜ぱるのじり</title> -->
  <!-- 削除予定 -->

  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- ファビコン -->
  <!-- <link rel="”icon”" href="./favicon.ico" /> -->
  <!-- css -->
  <!-- <link rel="stylesheet" href="./css/styles.css">
  <link rel="stylesheet" href="./slick/slick.css">
  <link rel="stylesheet" href="./slick/slick-theme.css"> -->
  <!-- JavaScript -->
  <!-- <script src="https://code.jquery.com/jquery-3.6.0.js"></script> -->
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/slick.min.js"></script>

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div class="grid__container">

    <header class="header header__block grid__header">
      <div class="header__inner">
        <h1 class="logo">
          <a href="#" class="logo__link">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/header-logo_pc.svg" media="(min-width: 768px)" /> <!-- タブレット画像 -->
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/header-logo_sp.svg" alt="ゆ〜ぱるのじり" />
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
              <a href="#" class="sp-nav__item">TOP</a>
              <a href="#" class="sp-nav__item">施設のご案内</a>
              <a href="#" class="sp-nav__item">レストラン味彩 <span>-あじさい-</span></a>
              <a href="#" class="sp-nav__item">売店</a>
              <a href="#" class="sp-nav__item">こばやしのじりの湯</a>
              <span class="sp-nav__item sp-nav__item--close">宿泊（休止中。再開未定）</span>
              <a href="#" class="sp-nav__item">アクセス情報</a>
              <a href="#" class="sp-nav__item">スタッフブログ</a>
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
              <a href="#" class="pc-nav__item pc-nav__item--orange">TOP</a>
              <a href="#" class="pc-nav__item">施設のご案内</a>
              <a href="#" class="pc-nav__item">レストラン味彩 <span class="pc-nav__item--small">-あじさい-</span></a>
              <a href="#" class="pc-nav__item">売店</a>
              <a href="#" class="pc-nav__item">こばやしのじりの湯</a>
              <span class="pc-nav__item pc-nav__item--close">宿泊（休止中。再開未定）</span>
              <a href="#" class="pc-nav__item">アクセス情報</a>
              <a href="#" class="pc-nav__item">スタッフブログ</a>
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