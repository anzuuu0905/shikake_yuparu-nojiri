<?php get_header(); ?>

      <!-- パンくずリスト -->
      <?php get_template_part('parts/breadcrumb'); ?>

      <main class="main grid__content">
      <section class="subpage-head__common">
        <div class="subpage-head__text">
          <h1 class="subpage__title">運営会社</h1>
          <span class="subpage__subtitle">Company</span>
        </div>
      </section>
      <!-- パンくずリスト -->
      <div class="breadcrumb__inner inner">
        <ol class="breadcrumb__items">
          <li class="breadcrumb__item"><a href="index.html">TOP</a></li>
          <li class="breadcrumb__item breadcrumb__item--current">運営会社</li>
        </ol>
      </div>

      <section class="company company_block">
        <div class="company__wrapper">
          <div class="inner company__inner">
            <h2 class="company__title">会社概要</h2>
            <table class="company-table company__tables">
              <tr class="company-table__item">
                <th class="company-table__head">社名</th>
                <td class="company-table__body">ハーメックのじり株式会社</td>
              </tr>
              <tr class="company-table__item">
                <th class="company-table__head">所在地</th>
                <td class="company-table__body">〒886-0212<br>
                  　宮崎県小林市野尻町東麓5160番地<br>
                  　<img src="./images/common/tel-icon.png" alt="電話" class="company-table__icon">0984-44-2210</td>
              </tr>
              <tr class="company-table__item">
                <th class="company-table__head">設立</th>
                <td class="company-table__body">1998年8月</td>
              </tr>
              <tr class="company-table__item">
                <th class="company-table__head">代表者</th>
                <td class="company-table__body">代表取締役　金山 宏樹</td>
              </tr>
              <tr class="company-table__item">
                <th class="company-table__head">事業内容</th>
                <td class="company-table__body">ダミーです、小売業、飲食業、娯楽業、他</td>
              </tr>
            </table>
            <div class="company__contact">
              <a href="#" class="company__botton">お問い合わせ</a>
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

<?php get_footer(); ?>