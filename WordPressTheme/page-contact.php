<?php get_header(); ?>

  <?php
    global $home;
    global $privacypolicy;
  ?>

  <main class="main grid__content">
      <section class="subpage-head__common">
        <div class="subpage-head__text">
          <h1 class="subpage__title">お問い合わせ</h1>
          <span class="subpage__subtitle">Contact Us</span>
        </div>
      </section>

      <!-- パンくずリスト -->
      <?php get_template_part('parts/breadcrumb'); ?>
      
      <section class="contact contact_block">
        <div class="contact__wrapper">
          <div class="inner contact__inner">
            <div class="contact-head__text">
              <p class="contact-head__description">当施設へのお問い合わせは、以下の入力フォームからお願いします。<br>
                慶事や法事のご予約も入力フォームもしくは、ページ下部の電話番号からご予約ください。<br>
                お問い合わせいただいた内容に関して、5営業日以内にメールにて返事いたします。<br>
                お急ぎに場合は、ページ下部の電話番号にお電話ください。</p>
              <p class="contact-head__annotation">※お問い合わせ内容によっては、お電話差し上げる場合もございます。
              </p>
            </div>
            <section class="contact-section__wrap">
              <h2 class="contact__title">WEBでのお問い合わせ</h2>
              <p class="contact__description">空欄を入力いただき、「確認する」ボタンをクリック（タップ）してください。「<span class="contact-form__mark">*</span>」印は入力必須項目です。
              </p>
              <div class="contact-form__inner">
                  <?php the_content(); ?>
                <!-- [contact-form-7 id="36" title="contact"]</div> -->
              </div>
              <!-- <div class="contact-form__inner">
                <form class="contact-form__block" action="" method="post">
                  <div class="contact-form__box contact-form__company">
                    <label for="company">企業・団体名<span class="contact-form__mark">*</span></label>
                    <input type="text" id="company" name="company" />
                    <p class="contact__example">例）道の駅ゆ～ぱるのじり　※個人の方は「個人」と記入ください。</p>
                  </div>
                  <div class="contact-form__box contact-form__name">
                    <label for="name">お名前<span class="contact-form__mark">*</span></label>
                    <ul class="contact-form__flex">
                      <li>
                        <input type="text" id="first-name" name="first-name" autocomplete="family-name" />
                        <p class="contact__example">例）山田</p>
                      </li>
                      <li>
                        <input type="text" id="last-name" name="last-name" autocomplete="given-name" />
                        <p class="contact__example">例）太郎</p>
                      </li>
                    </ul>
                  </div>
                  <div class="contact-form__box contact-form__kana">
                    <label for="kana">フリガナ<span class="contact-form__mark">*</span></label>
                    <ul class="contact-form__flex">
                      <li>
                        <input type="text" id="f-kana" name="kana" />
                        <p class="contact__example">例）ヤマダ</p>
                      </li>
                      <li>
                        <input type="text" id="l-kana" name="kana" />
                        <p class="contact__example">例）タロウ</p>
                      </li>
                    </ul>
                  </div>
                  <div class="contact-form__box contact-form__email">
                    <label for="email">メールアドレス<span class="contact-form__mark">*</span></label>
                    <input type="text" id="email" name="name" autocomplete="email" />
                    <p class="contact__example">例）yamada@yu-pal.co.jp</p>
                  </div>
                  <div class="contact-form__box contact-form__phone">
                    <label for="phone">電話番号</label>
                    <input type="text" id="phone" name="name" autocomplete="tel" />
                    <p class="contact__example">例）09012345678（ハイフン「-」無しで入力ください）</p>
                    <p class="contact__example">※入力いただくと、お問い合わせ内容によっては電話連絡差し上げます。</p>
                  </div>


                  <div class="contact-form__box contact-form__radiobox">
                    <div class="contact-form__radio">お問い合わせの種類<span class="contact-form__mark">*</span></div>
                    <input type="radio" name="type" id="type1" value="対応してほしい営業内容に関して">
                    <label for="type1">対応してほしい営業内容に関して</label>
                    <input type="radio" name="type" id="type2" value="ご意見・ご感想">
                    <label for="type2">ご意見・ご感想</label>
                    <input type="radio" name="type" id="type3" value="取材・撮影依頼">
                    <label for="type3">取材・撮影依頼</label>
                    <input type="radio" name="type" id="type4" value="その他">
                    <label for="type4">その他</label>
                    <p class="contact__example">※該当するものをお選びください。</p>
                  </div>

                  <div class="contact-form__box contact-form__content">
                    <div class="contet-label">
                      <label for="content">お問い合わせ内容<span class="contact-form__mark">*</span></label>
                    </div>
                    <textarea id="content" name="content"></textarea>
                  </div>
                  <div class="contact__privecy">
                    <a href="<?php echo $privacypolicy; ?>" target="_blank">プライバシーポリシー</a></div>
                  <div class="contact-form__send">
                    <btton class="contact-form__btn" type="submit">入力内容を確認する</btton>
                  </div>
                </form>
              </div> -->
              <p class="contact-form__description">※「送信」ボタンをクリック（タップ）していただきますと、入力いただいたメールアドレス宛に自動返信メールを送信します。自動返信メールが届かない場合はご入力いただいたメールアドレスが間違っている場合がございますので、改めて「WEBでのお問い合わせ」からお問い合わせください。</p>
            </section>
            <section class="contact-section__wrap">
              <h2 class="contact__title">お電話でのお問い合わせ</h2>
              <p class="contact__description">営業時間内にお掛けください。また、状況により電話に出られない場合もございます。予めご了承ください。
              </p>
              <a href="tel:0984-44-2210" class="contact__tel">0984-44-2210</a>
              <ul class="contact-time__items">
                <li class="contact-time__item">
                  <p class="contact-time__title">レストラン</p>
                  <span class="contact-time__body">11:00〜15:00（ラストオーダー 14:30）</span>
                </li>
                <li class="contact-time__item">
                  <p class="contact-time__title">売店</p>
                  <span class="contact-time__body">8:00〜18:00</span>
                </li>
                <li class="contact-time__item">
                  <p class="contact-time__title">浴場</p>
                  <span class="contact-time__body">11:00〜20:30 （受付終了 20:00）</span>
                </li>
              </ul>
              <p class="contact-time__description">※定休日：毎月第1水曜日（当日祝日の場合は翌日）</p>
            </section>
          </div>
        </div>
    </section>

<?php get_footer(); ?>
