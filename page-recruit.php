<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <?php
    /*
Template Name:recruit
Description:求人情報についてのページです。
 */
    get_header(); ?>
    <? wp_head() ?>
</head>

<body>
    <?php wp_body_open(); ?>
    <div class="inner lower">
        <?php get_template_part('includes/header-lower'); ?>
        <section class="mv">
            <div class="mv__inner">
                <?php
                $id = get_post_thumbnail_id();
                $img = wp_get_attachment_image_src(64, 'large');
                ?>
                <div class="mv__content mv-recruit" style="background-image:url('<?php echo $img[0]; ?>');">
                    <div class="mv__content-inner">
                        <h1 class="mv__title mv-recruit__title">Recruit</h1>
                    </div>
                </div>
            </div>
        </section>
        <div class="breadcrumb-wrap">
        <?php if (function_exists('bcn_display')) {
                bcn_display();
            } ?>
            <!-- <ol class="breadcrumb">
                <li class="breadcrumb-list"><a class="breadcrumb-link" href="/index.html">ホーム</a> ></li>
                <li class="breadcrumb-list"><a class="breadcrumb-link" href="">求人情報</a></li>
            </ol> -->
        </div>


        <main class="main">
            <section class="recruit-lower">
                <div class="recruit-lower__inner">
                    <div class="recruit-lower-head__wrap">
                        <div class="recruit-lower-head-body">
                            <h2 class="recruit-lower-head__title-wrap post">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/clover.png" alt="" class="recruit-lower-head__title-logo">
                                <span class="recruit-lower-head__title">求人情報</span>
                            </h2>
                            <p class="recruit-lower-head__text">＊<?php echo get_field("recruit_current"); ?></p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="recruit__content">
                <div class="recruit__content__inner">
                    <ul class="recruit__content__list-title">
                        <li class="recruit__content__list-item">
                            <a href="#work">
                                <span class="recruit__content__list-item__number">01</span>
                                <p class="recruit__content__list-item__text">長く働けるように楽しく、<br>
                                    安心して働く！</p>
                            </a>
                        </li>
                        <li class="recruit__content__list-item">
                            <a href="#merit">
                                <span class="recruit__content__list-item__number">02</span>
                                <p class="recruit__content__list-item__text">みやび鍼灸院で働く<br class="recruit-br">メリット</p>
                            </a>
                        </li>
                        <li class="recruit__content__list-item">
                            <a href="#voice">
                                <span class="recruit__content__list-item__number">03</span>
                                <p class="recruit__content__list-item__text">先輩の声</p>
                            </a>
                        </li>
                        <li class="recruit__content__list-item">
                            <a href="#application">
                                <span class="recruit__content__list-item__number">04</span>
                                <p class="recruit__content__list-item__text">募集要項</p>
                            </a>
                        </li>
                    </ul>
                    <div class="recruit-detail-wrap">
                        <div class="recruit-detail" id="work">
                            <h3 class="recruit-detail__title-wrap">
                                <span class="recruit-detail__title-number">01</span>
                                <span class="recruit-detail__title">
                                    長く働けるように楽しく、安心して働く！
                                </span>
                            </h3>
                            <div class="recruit-detail-body">
                                <p class="recruit-detail__text-top">
                                    みやび鍼灸院では長期的に働いてくれる鍼灸師を募集しております。<br>
                                    女性が長く、安心して働けるように「質問のしやすいアットホーム感」と
                                    「働きやすい労働環境」を整えるようにしております。
                                </p>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/DSC05538-3.jpg" alt="" class="recruit-detail-top__img">
                            </div>
                        </div>
                        <div class="recruit-detail-second" id="merit">
                            <h3 class="recruit-detail__title-wrap">
                                <span class="recruit-detail__title-number">02</span>
                                <span class="recruit-detail__title">
                                    みやび鍼灸院で働くメリット
                                </span>
                            </h3>
                            <div class="recruit-detail-body-second">
                                <div class="recruit-detail-body__inner">
                                    <h4 class="recruit-detail-body-title">質問しやすいアットホームな雰囲気</h4>
                                    <p class="recruit-detail__text">
                                        どんな人でも、入社したばかりの頃は不安を抱えがち。<br>
                                        みやび鍼灸院ではいつでも質問がしやすい雰囲気があり、
                                        「ここはどうすればよいですか？」「こうしてね」とすぐに疑問は解決ができます。<br>
                                        ベテランの鍼灸師もおり、無理なく仕事を覚えていってもらえればと思います。
                                    </p>
                                </div>
                                <div class="recruit-detail-body__inner">
                                    <h4 class="recruit-detail-body-title">福利厚生が充実しています。</h4>
                                    <p class="recruit-detail__text">
                                        社会保険とは別に、新宿区内の中小企業、個人企業で働く従業員及び事業主が加入できる
                                        「ぱる新宿」に加入しています。<br>
                                        都内のテーマパークやスポーツ施設やジムの割引や映画のチケット、
                                        ホテルのレストランの食事などが割引になります。<br>
                                        働いているみんなは、しっかり活用してお得にサービスを受けているようです。
                                    </p>
                                </div>
                                <div class="recruit-detail-body__inner">
                                    <h4 class="recruit-detail-body-title">週休2日で残業はほとんどありません</h4>
                                    <p class="recruit-detail__text">週休は必ず2日あり、残業もほとんどありません。<br>
                                        ONとOFFをはっきりとさせる雰囲気があり、
                                        プライベートを充実させられます。
                                    </p>
                                </div>
                                <div class="recruit-detail-body__inner">
                                    <h4 class="recruit-detail-body-title">不妊鍼灸施術が学べます</h4>
                                    <p class="recruit-detail__text">
                                        当院では不妊症、生理不順、更年期障害、冷え性などの婦人科系疾患を中心に、
                                        様々な疾患に対し、鍼灸施術を行います。<br>
                                        不妊鍼灸の臨床経験を詰める環境です。
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="recruit-detail" id="voice">
                            <h3 class="recruit-detail__title-wrap">
                                <span class="recruit-detail__title-number">03</span>
                                <span class="recruit-detail__title">先輩の声</span>
                            </h3>
                            <div class="recruit-detail-body">
                                <p class="recruit-detail__text-top">
                                    集客力の高い不妊施術を、西洋医学及び東洋医学の両面の見地から知識と技を学ぶことができる鍼灸院です。<br>
                                    これまでのキャリアの中で磨いたスキルを積極的に施術へ活かせます。患者さんへ提供できるレベルであれば、
                                    施術メニューとして採用してもらえます。<br>
                                    スタッフ間の仲も良いため、情報共有が活発なのも特徴ですね。
                                    自分が全く経験したことのなかった分野の勉強ができ、良い刺激になっています。
                                </p>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/DSC06095.jpg" alt="" class="recruit-detail-top__img">
                            </div>
                        </div>
                        <div class="recruit-detail" id="application">
                            <h3 class="recruit-detail__title-wrap">
                                <span class="recruit-detail__title-number">04</span>
                                <span class="recruit-detail__title">募集要項</span>
                            </h3>

                            <dl class="recruit-detail__list">
                                <div class="recruit-detail__list-item">
                                    <dt class="recruit-detail__list-title">募集職種</dt>
                                    <dd class="recruit-detail__list-text">はり師・きゅう師の有資格者</dd>
                                </div>
                                <div class="recruit-detail__list-item">
                                    <dt class="recruit-detail__list-title">応募資格</dt>
                                    <dd class="recruit-detail__list-text">
                                        鍼灸師の国家資格を保持する21才～40才くらいまでの女性または鍼灸学校の学生<br>
                                        ３年以上の連続した勤務が可能な者<br>
                                        心身共に健康で、非喫煙者
                                    </dd>
                                </div>
                                <div class="recruit-detail__list-item">
                                    <dt class="recruit-detail__list-title">勤務時間</dt>
                                    <dd class="recruit-detail__list-text">
                                        月～金 9:30～20:00 <br>
                                        土曜日 9:30～17:00 土曜日は必ず勤務 <br>
                                        休憩あり・時間応相談可
                                    </dd>
                                </div>
                                <div class="recruit-detail__list-item">
                                    <dt class="recruit-detail__list-title">勤務の内容</dt>
                                    <dd class="recruit-detail__list-text">
                                        掃除・洗濯・ベッドメイク<br>
                                        受付業務・電話対応<br>
                                        鍼灸施術補助・鍼灸施術・新メニューの考案など<br>
                                        雑務<br>
                                        ブログ・SNSの更新
                                    </dd>
                                </div>
                                <div class="recruit-detail__list-item">
                                    <dt class="recruit-detail__list-title">給与</dt>
                                    <dd class="recruit-detail__list-text">
                                        研修期間（3ヶ月）時給<?php echo get_field("wage_practice_1"); ?>～&nbsp;社員希望<?php echo get_field("wage_practice_2"); ?>～<br>
                                        [正社員]<?php echo get_field("wage_fulltime_1"); ?>以上<br>
                                        [アルバイト]経験者:時給<?php echo get_field("wage_fulltime_2"); ?>以上&nbsp;臨床未経験者:時給<?php echo get_field("wage_fulltime_3"); ?>以上
                                    </dd>
                                </div>
                                <div class="recruit-detail__list-item">
                                    <dt class="recruit-detail__list-title">待遇</dt>
                                    <dd class="recruit-detail__list-text">
                                        雇用保険 &nbsp;労働保険 &nbsp;厚生年金&nbsp;健康保険&nbsp;福利厚生&nbsp;制服支給 <br>
                                        賞与年1回&nbsp;昇給考査年1回あり&nbsp;交通費月1万まで支給
                                    </dd>
                                </div>
                                <div class="recruit-detail__list-item">
                                    <dt class="recruit-detail__list-title">休日／休暇</dt>
                                    <dd class="recruit-detail__list-text">
                                        [正社員] ・週休2日 ・年末年始休暇 ・年次有給休暇 ・夏季特別休暇 <br>
                                        [パート・アルバイト] 週3～4日からのシフト制
                                    </dd>
                                </div>
                                <div class="recruit-detail__list-item">
                                    <dt class="recruit-detail__list-title">勤務地</dt>
                                    <dd class="recruit-detail__list-text">
                                        JR新宿駅西口より徒歩5分
                                        〒160-0023&nbsp;東京都新宿区西新宿7-8-11&nbsp;美笠ビル501
                                    </dd>
                                </div>
                                <div class="recruit-detail__list-item">
                                    <dt class="recruit-detail__list-title">選考方法</dt>
                                    <dd class="recruit-detail__list-text">
                                        書類選考後、面接、3か月の研修期間あり。<br>
                                        以下の能力のある方は優遇いたします。<br>
                                        ＊あん摩マッサージ指圧師の資格を所持 <br>
                                        *アロマセラピー、エステ、マッサージ等で3年以上の施術経験者<br>
                                        ＊パソコン能力
                                    </dd>
                                </div>
                                <div class="recruit-detail__list-item">
                                    <dt class="recruit-detail__list-title">
                                        応募<br>
                                        お問い合わせ
                                    </dt>
                                    <dd class="recruit-detail__list-text">
                                        メールより24時間受付中です。<br>
                                        お電話による応募:03-6887-2522 <br>
                                        電話もしくはメールでご連絡後、下記の書類を採用担当者宛にご郵送ください。
                                        履歴書以外は、パソコンで作成したものでも結構です。一週間以内にこちらから
                                        ご連絡を差し上げます。<br>
                                        ＊写真付きの履歴書 <br>
                                        ＊職務経歴書 <br>
                                        ＊簡単な自己紹介文 <br>

                                        書類送付の際に都合のよい面接時間をお知らせください。<br>
                                        メールでの問い合わせの際、みやび鍼灸院からの連絡が届くように設定していない方がいらっしゃり、連絡が取れないことがあります。
                                        連絡のない場合はお手数ですがお問合せ下さい。
                                    </dd>
                                </div>
                            </dl>
                        </div>
                    </div>

            </section>
        </main>
        <section class="contact lower recruit">
            <div class="contact__inner">
                <div class="contact__content">
                    <h2 class="contact__title-wrap">
                        <span class="contact__title">Contact</span>
                        <span class="contact-sub__title">お問い合わせ</span>
                    </h2>
                    <div class="contact-tel__wrap">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/tel.png" alt="tel" class="contact-tel__img">
                        <a class="contact-tel" href="tel:03-6887-2522">03-6887-2522</a>
                    </div>
                    <div class="contact-mail__wrap">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/mail.png" alt="mail" class="contact-mail__img">
                        <a class="contact-mail" href="mailto:info@miyabi-shinkyu.com">info@miyabi-shinkyu.com</a>
                    </div>
                    <div class="contact-sns__wrap">
                        <a href="https://www.facebook.com/%E3%81%BF%E3%82%84%E3%81%B3%E9%8D%BC%E7%81%B8%E9%99%A2-%E6%96%B0%E5%AE%BF%E4%B8%8D%E5%A6%8A-281664381875815/" class="contact-fb__link"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" alt="facebook" class="contact-fb__img"></a>
                        <a href="https://www.instagram.com/miyabishinkyu/?hl=ja" class="contact-instagram__link"><img src="<?php echo get_template_directory_uri(); ?>/img/Instagram.png" alt="Instagram" class="contact-iG__img"></a>
                        <a href="https://lin.ee/ftZN3FB" class="contact-line__link"><img src="<?php echo get_template_directory_uri(); ?>/img/Line.png" alt="Line" class="contact-line__img"></a>
                        <a href="https://twitter.com/miyabishinkyu" class="contact-twitter__link"><img src="<?php echo get_template_directory_uri(); ?>/img/Twitter.png" alt="Twitter" class="contact-twitter__img"></a>
                    </div>
                    <div class="contact__btn-wrap">
                        <div class="btn btn-mail contact__btn-mail">
                            <a href="mailto:info@miyabi-shinkyu.com" class="btn__link btn-request__link contact__btn-link">お問い合わせ</a>
                        </div>
                        <div class="btn button-book contact__btn-book">
                            <a href="//liff.line.me/1661382187-R6DNWBZN?liff_id=1661382187-R6DNWBZN&is=mIXQWTIjfd" class="btn__link button-contact__link contact__btn-link">Web予約</a>
                        </div>
                    </div>
                    <p class="contact__attention">
                        ※施術中は電話を受け取ることができないことがありますので、電話がつながらないときは<br class="br-contact">
                        留守番電話にお名前とメッセージをお願いいたします。折り返しご連絡いたします。
                    </p>
                </div>
            </div>
        </section>
<!--         <section class="prevention">
            <div class="prevention__inner">
                <div class="prevention__content">
                    <p class="prevention-head__text">
                        みやび鍼灸院では、新型コロナウイルス感染症の感染拡大防止対策を徹底しております。
                    </p>
                    <div class="prevention__img-wrap">
                        <div class="prevention__img-left-wrap">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/DSC05563.jpg" alt="" class="prevention__img-left">
                        </div>
                        <div class="prevention__img-right-wrap">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/DSC05578.jpg" alt="" class="prevention__img-right">
                        </div>
                    </div>
                    <ul class="prevention__list-top">
                        <li class="prevention__item-left">
                            <p class="prevention__item-title">＊予防</p>
                            <ul class="prevenntion__item-inner">
                                <li class="prevention__item-list">
                                    当院のスタッフはワクチン3回接種済みです。
                                </li>
                                <li class="prevention__item-list">
                                    スタッフの体調管理も毎朝行っています。
                                </li>
                                <li class="prevention__item-list">
                                    患者さんには来院の際に検温を行なっております。

                                </li>
                                <li class="prevention__item-list">
                                    個室のため、密にならないようになっております。
                                </li>
                            </ul>
                        </li>
                        <li class="prevention__item-right">
                            <p class="prevention__item-title">＊清潔</p>
                            <ul class="prevenntion__item-inner">
                                <li class="prevention__item-list">
                                    シーツ・鍼・灸は使い捨てです。
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="prevention__list-bottom">
                        <li class="prevention__item-left">
                            <p class="prevention__item-title">＊消毒</p>
                            <ul class="prevenntion__item-inner">
                                <li class="prevention__item-list">
                                    来院の際に患者さんに手洗いと消毒のお願いをしております。
                                </li>
                                <li class="prevention__item-list">
                                    受付や、施術ルームにも消毒液が完備してあります。
                                </li>
                                <li class="prevention__item-list">
                                    良く触れるところには除菌スプレーにて除菌・消毒しています。
                                </li>
                                <li class="prevention__item-list">
                                    施術器具も使い捨ての物以外は消毒を徹底しております。
                                </li>
                            </ul>
                        </li>
                        <li class="prevention__item-right">
                            <p class="prevention__item-title">＊換気</p>
                            <ul class="prevenntion__item-inner">
                                <li class="prevention__item-list">
                                    当院は保健所に認可されている鍼灸院です。
                                </li>
                                <li class="prevention__item-list">
                                    認可をうける際換気の項目もあり、
                                    換気扇も2か所ある通気の良い鍼灸院です。
                                </li>

                            </ul>
                        </li>
                    </ul>

                </div>
            </div>
        </section>
 -->
        <?php get_template_part('includes/footer-lower'); ?>
        <?php get_footer(); ?>
        <?php wp_footer(); ?>
    </div>
</body>


</html>