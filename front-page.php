<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <?php get_header(); ?>
    <?php wp_head(); ?>
</head>

<body>
    <?php wp_body_open(); ?>
    <div class="inner">
        <?php get_template_part('includes/header'); ?>
        <svg class="bg__img-top header-scrolled" width="100%" height="100%" id="svg" viewBox="0 0 1440 400" xmlns="http://www.w3.org/2000/svg" class="transition duration-300 ease-in-out delay-150">
            <path d="M 0,400 C 0,400 0,200 0,200 C 169.7333333333333,179.60000000000002 339.4666666666666,159.20000000000002 500,165 C 660.5333333333334,170.79999999999998 811.8666666666666,202.8 967,213 C 1122.1333333333334,223.2 1281.0666666666666,211.6 1440,200 C 1440,200 1440,400 1440,400 Z" stroke="none" stroke-width="0" fill="#f8f1e8ff" class="transition-all duration-300 ease-in-out delay-150 path-0" transform="rotate(-180 720 200)">
            </path>
        </svg>
        <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#F8F1E8" fill-opacity="1" d="M0,192L80,176C160,160,320,128,480,144C640,160,800,224,960,250.7C1120,277,1280,267,1360,261.3L1440,256L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path></svg>         -->


        <section class="mv">
            <div class="mv__inner">
            <?php
                $id = get_post_thumbnail_id();
                $img = wp_get_attachment_image_src(19, 'large');
                ?>
                <div class="mv__content" style="background-image:url('<?php echo $img[0]; ?>');">
                    <div class="mv__content-inner">
                        <div class="mv-left">
                            <div class="mv__text-wrap">
                                <p class="mv__text-right">卵子の質を高め</p>
                                <p class="mv__text-center">妊娠しやすい体作りを</p>
                                <p class="mv__text-right">お手伝いします。</p>
                            </div>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/stork.png" alt="stork" class="mv-left__img">
                        </div>
                        <h1 class="mv__title">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/logo-mv.png" alt="みやび鍼灸院" class="mv__title-logo">
                        </h1>

                        <div class="mv-right__img-wrap">
                            <div class="mv-right__img-top-wrap">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/circle.png" class="mv-right__img-top" alt="circle">
                                <p class="mv-right__text-top">女性専門</p>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/dots-pink.png" alt="dots" class="mv-right__img-dots-top">
                                </img>
                            </div>
                            <div class="mv-right__img-bottom-wrap">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/circle.png" class="mv-right__img-bottom" alt="circle">
                                <p class="mv-right__text-bottom">完全予約</p>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/dots-green.png" alt="dots" class="mv-right__img-dots-bottom">
                                </img>
                            </div>
                        </div>
                        <div class="scrolldown1"><span>Scroll</span></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="news">
            <div class="news__inner">
                <svg class="bg__img-middle" width="100%" height="100%" id="svg" viewBox="0 0 1440 400" xmlns="http://www.w3.org/2000/svg" class="transition duration-300 ease-in-out delay-150">
                    <path d="M 0,400 C 0,400 0,200 0,200 C 164.40000000000003,223.46666666666667 328.80000000000007,246.93333333333334 507,236 C 685.1999999999999,225.06666666666666 877.2,179.73333333333335 1035,168 C 1192.8,156.26666666666665 1316.4,178.13333333333333 1440,200 C 1440,200 1440,400 1440,400 Z" stroke="none" stroke-width="0" fill="#f8f1e8ff" class="transition-all duration-300 ease-in-out delay-150 path-0"></path>
                </svg>
                <div class="news__content">
                    <div class="news__body">
                        <h2 class="news__title">News</h2>
                        <?php $args = array(
                                'post_type' => 'news',
                                'numberposts' => 1,    //表示する記事の数の指定
                                // 'post_per_page' => -1,
                            );
                            $posts = get_posts($args);
                            foreach ($posts as $post) :
                                setup_postdata($post);
                            ?>
                        <div class="news__label-warp">
                            <span class="news-date"><time datetime="2022-07-24"><?php echo get_field("news_date"); ?></time></span>
                            <span class="news__title-top"><?php echo get_field("news_title"); ?></span>
                        </div>
                        <p class="news__text"><?php echo wp_trim_words(get_field("news_text"), 10, '…'); ?></p>
                    </div>
                    <?php
                            endforeach;
                            wp_reset_postdata(); ?>
                </div>
                <div class="btn common-btn news-btn">
                    <a href="<?php echo esc_url(home_url('/')); ?>/news" class="news__link">
                        <span class="news__link-text">More</span>
                        <span>></span>
                    </a>
                </div>
            </div>

        </section>
    <main>
        <section class="about">
            <div class="about__inner">
                <div class="about__content">
                    <div class="about__body">
                        <div class="about__logo-wrap">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/img_green.png" alt="みやび鍼灸院_logo" class="about__logo">
                            <p class="about__logo-text">
                                About
                                <span class="about__logo-sub-text">
                                    当院について
                                </span>
                            </p>
                        </div>
                        <h2 class="about__title">
                            みやび鍼灸院は<br>こんなところです。
                        </h2>
                        <p class="about__text">
                            女性専門の鍼灸院として、不妊治療（妊活鍼灸）から
                            妊娠中の安産灸、逆子灸、産後の骨盤ケア、
                            更年期など女性のライフステージの変化に寄り添って、
                            東洋医学の観点から鍼灸治療を通じて身体のサポートをします。<br>
                            妊活中の方も、妊娠中の方も、育児中の方も、仕事帰りの方も
                            通いやすい新宿の治療院です。<br>
                            首・肩こり・腰痛・頭痛なども気兼ねなくご相談ください。<br>
                            あらゆるライフステージでの健やかな毎日を送れます様に、
                            養生・ケアという形で応援していきたいと思っています。

                        </p>

                    </div>
                    <div class="about__img-wrap">
                        <img class="about__img" src="<?php echo get_template_directory_uri(); ?>/img/DSC05642-2.jpg" alt="みやび鍼灸院">
                    </div>
                    <div class="btn common-btn about-btn">
                        <a href="<?php echo esc_url(home_url('/')); ?>/about" class="news__link">
                            <span class="news__link-text">More</span>
                            <span>></span></a>
                    </div>
                </div>
            </div>
        </section>

        <section class="feauture">
            <div class="feauture__inner">
                <div class="feauture__content">
                    <h2 class="feauture__title">当院の特徴</h2>
                    <div class="card-wrap">
                        <div class="card-left">
                            <h3 class="card__title">01</h3>
                            <div class="card__img-wrap">
                                <span class="card__img-label">女性専門の鍼灸院</span>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/DSC05449.jpg" alt="みやび鍼灸院" class="card__img">
                            </div>
                            <p class="card__text">当院は女性専門の鍼灸院です。
                                妊活をはじめ、女性ならではの悩みを話しやすくするために半個室の施術院です。
                                また、鍼灸は直接肌に触れるため、女性が施術
                                することで安心して受けられます。</p>

                        </div>
                        <div class="card-centre">
                            <h3 class="card__title">02</h3>
                            <div class="card__img-wrap">
                                <span class="card__img-label">不妊症の施術</span>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/DSC05507.jpg" alt="みやび鍼灸院" class="card__img">
                            </div>
                            <p class="card__text">不妊治療に鍼灸をするのは海外では定番です。
                                当院は不妊治療の病院から、とても近くにあり、
                                体外受精に合わせて通うことも可能です。自然妊娠
                                希望の方もいらしています。妊活鍼灸と一緒に
                                骨盤調整や当院オリジナル妊活マッサージもおすすめです。</p>

                        </div>
                        <div class="card-right">
                            <h3 class="card__title">03</h3>
                            <div class="card__img-wrap">
                                <span class="card__img-label">妊婦鍼灸マッサージ</span>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/DSC05491.jpg" alt="みやび鍼灸院" class="card__img">
                            </div>
                            <p class="card__text">妊活を卒業して妊婦になって、困ったとおもうのは、
                                妊婦の施術を行うところはあまりありません。
                                マイナートラブル、つわり、逆子、肩こり、
                                腰痛、恥骨痛など出産前の体調管理、出産超過などに
                                対応しています。安産灸は胎動を感じた頃から始めましょう。</p>

                        </div>
                    </div>
                    <div class="btn common-btn feauture-btn">
                        <a href="<?php echo esc_url(home_url('/')); ?>/about" class="news__link">
                            <span class="news__link-text">More</span>
                            <span>></span></a>
                    </div>
                </div>
            </div>
        </section>
        <div class="interval-baby">
            <div class="interval__img-circle-pink__wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/img/img_pink.png" alt="みやび鍼灸院" class="interval__img-circle-pink-right">
            </div>
            <?php
                $id = get_post_thumbnail_id();
                $img = wp_get_attachment_image_src(29, 'large');
                ?>
            <div class="interval__img-baby" style="background-image:url('<?php echo $img[0]; ?>');"></div>
            <div class="interval__img-circle-pink__wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/img/img_pink.png" alt="みやび鍼灸院" class="interval__img-circle-left">
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/flower.png" alt="みやび鍼灸院" class="interval__img-clover">
        </div>

        <section class="menu" id="menu">
            <div class="menu__inner">
                <h2 class="menu__title-wrap">
                    <span class="menu__title">Menu</span>
                    <span class="menu__sub-title">施術メニュー</span>
                </h2>
                <p class="menu-card-title__attention">
                    鍼灸メニューは別途3,300円の初診料がかかります。<br> 相談に応じて子連れは可能です。
                </p>
                <div class="menu__content">
                <?php
                $id = get_post_thumbnail_id();
                $img = wp_get_attachment_image_src(7, 'large');
                ?>
                    <div class="menu-head__img" style="background-image:url('<?php echo $img[0]; ?>');"></div>
                    <div class="menu-card__wrap">
                        <div class="menu-card__list-wrap">

                            <div class="menu-card">
                                <a class="menu-card__link" href="<?php echo esc_url(home_url('/')); ?>/menu-acupuncture">
                                    <span class="menu-card__label">鍼灸全身・一部位</span>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/DSC05530-2.jpg" alt="みやび鍼灸院_鍼" class="menu-card__img">
                                </a>
                            </div>
                            <div class="menu-card">
                                <a class="menu-card__link" href="<?php echo esc_url(home_url('/')); ?>/menu-pregnancy_acupuncture">
                                    <span class="menu-card__label">妊活鍼灸 <br>（不妊・着床鍼）</span>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/DSC05538-3.jpg" alt="みやび鍼灸院_鍼" class="menu-card__img">
                                </a>
                            </div>
                            <div class="menu-card">
                                <a class="menu-card__link" href="<?php echo esc_url(home_url('/')); ?>/menu-breechchild">
                                    <span class="menu-card__label menu-card__label-short">逆子の灸</span>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/breech-child.png" alt="みやび鍼灸院_逆子灸" class="menu-card__img">
                                </a>
                            </div>
                            <div class="menu-card">
                                <a class="menu-card__link" href="<?php echo esc_url(home_url('/')); ?>/menu-easyDelivery">
                                    <span class="menu-card__label">妊婦・安産灸</span>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/DSC05642-2.jpg" alt="みやび鍼灸院_安産灸" class="menu-card__img">
                                </a>
                            </div>
                            <div class="menu-card">
                                <a class="menu-card__link" href="<?php echo esc_url(home_url('/')); ?>/menu-beauty_acupuncture">
                                    <span class="menu-card__label menu-card__label-short">美容鍼灸</span>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/DSC05928.jpg" alt="みやび鍼灸院_美容鍼灸" class="menu-card__img">
                                </a>
                            </div>
                            <div class="menu-card">
                                <a class="menu-card__link" href="<?php echo esc_url(home_url('/')); ?>/menu-cupping_therapy">
                                    <span class="menu-card__label">カッピング・<br>スライドカッピング</span>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/DSC06018.jpg" alt="みやび鍼灸院_カッピング" class="menu-card__img">
                                </a>
                            </div>
                            <div class="menu-card">
                                <a class="menu-card__link" href="<?php echo esc_url(home_url('/')); ?>/menu-pelvic_adjustment">
                                    <span class="menu-card__label menu-card__label-shot">骨盤ケア</span>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/DSC05991.jpg" alt="みやび鍼灸院_骨盤ケア" class="menu-card__img">
                                </a>
                            </div>
                            <div class="menu-card">
                                <a class="menu-card__link" href="<?php echo esc_url(home_url('/')); ?>/menu-pregnancy_massage">
                                    <span class="menu-card__label">妊活マッサージ</span>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/DSC05507.jpg" alt="みやび鍼灸院_妊活マッサージ" class="menu-card__img">
                                </a>
                            </div>
                            <div class="menu-card">
                                <a class="menu-card__link" href="<?php echo esc_url(home_url('/')); ?>/menu-course">
                                    <span class="menu-card__label">コースメニュー</span>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/DSC05912.jpg" alt="みやび鍼灸院_コース" class="menu-card__img">
                                </a>
                            </div>
                            <div class="menu-card">
                                <a class="menu-card__link" href="<?php echo esc_url(home_url('/')); ?>/menu-option">
                                    <span class="menu-card__label menu-card__label-short">オプション</span>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/DSC06095.jpg" alt="みやび鍼灸院_オプション" class="menu-card__img">
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <div class="interval-second">
            <div class="interval-second__img-warp">
                <img src="<?php echo get_template_directory_uri(); ?>/img/DSC05425.jpg" alt="みやび鍼灸院" class="interval-second__img">
            </div>
            <div class="interval-second__img-warp">
                <img src="<?php echo get_template_directory_uri(); ?>/img/DSC06096.jpg" alt="みやび鍼灸院" class="interval-second__img">
            </div>
            <div class="interval-second__img-warp">
                <img src="<?php echo get_template_directory_uri(); ?>/img/DSC05919.jpg" alt="みやび鍼灸院" class="interval-second__img">
            </div>
            <div class="interval-second__img-warp">
                <img src="<?php echo get_template_directory_uri(); ?>/img/DSC05923.jpg" alt="みやび鍼灸院" class="interval-second__img">
            </div>
            <div class="interval-second__img-warp">
                <img src="<?php echo get_template_directory_uri(); ?>/img/DSC05586.jpg" alt="みやび鍼灸院" class="interval-second__img">
            </div>
            <div class="interval-second__img-warp">
                <img src="<?php echo get_template_directory_uri(); ?>/img/DSC05463.jpg" alt="みやび鍼灸院" class="interval-second__img">
            </div>

        </div>

        <div class="interval-third">
            <img src="<?php echo get_template_directory_uri(); ?>/img/flower.png" alt="みやび鍼灸院_クローバー" class="interval__img-clover interval-third-clover ">
        </div>
        <section class="price">
            <div class="price__inner">
                <div class="price__content">
                    <div class="price__img-circle-pink__wrap">
                        <div class="price-head__wrap">
                            <h2 class="price__title-wrap">
                                <span class="price__title">Price</span>
                                <span class="price__sub-title">料金一覧</span>
                            </h2>
                            <p class="price__attention">
                                お支払いは、各種カードもお使いいただけます。<br>
                                Paypay,楽天pay,auPay,Visa,Master,Amex,Diners,DISCOVER,JCB,
                                Suica,Pasumo,iD,QuickPay
                            </p>
                        </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/img_pink.png" alt="みやび鍼灸院_楕円" class="price__img-circle-pink-right">
                    </div>
                    <div class="price-menu__wrap">
                        <h3 class="price-menu__title">施術メニュー</h3>
                        <p class="price-menu__attention">鍼灸メニューは別途3300円の初診料がかかります。<br> 相談に応じて子連れ可能です。</p>

                        <ul class="price-menu__list">
                            <li class="price-menu__item">
                                <span class="price-menu-name">鍼灸全身・一部位 &nbsp;&nbsp;&nbsp; 全身（L) <img class="price-menu__list-line-1 line" src="<?php echo get_template_directory_uri(); ?>/img/price-menu__list-line-1.png" alt="みやび鍼灸院_下線"></span>
                                <span class="price-menu-price"><?php echo get_field("each_price_1"); ?></span>
                                <span class="price-menu-time">(50分)</span>

                            </li>
                            <li class="price-menu__item">
                                <span class="price-menu-name">鍼灸一部位（S)<img class="price-menu__list-line-2 line" src="<?php echo get_template_directory_uri(); ?>/img/price-menu__list-line-2.png" alt="みやび鍼灸院_下線"></span>
                                <span class="price-menu-price"><?php echo get_field("each_price_2"); ?></span>
                                <span class="price-menu-time">(25分)</span>
                            </li>
                            <li class="price-menu__item">
                                <span class="price-menu-name">妊活鍼灸（不妊・着床鍼）<img class="price-menu__list-line-3 line" src="<?php echo get_template_directory_uri(); ?>/img/price-menu__list-line-3.png" alt="みやび鍼灸院_下線"></span>
                                <span class="price-menu-price"><?php echo get_field("each_price_1"); ?></span>
                                <span class="price-menu-time">(50分)</span>
                            </li>
                            <li class="price-menu__item">
                                <span class="price-menu-name">逆子の灸<img class="price-menu__list-line-5 line" src="<?php echo get_template_directory_uri(); ?>/img/price-menu__list-line-5.png" alt="みやび鍼灸院_下線"></span>
                                <span class="price-menu-price"><?php echo get_field("each_price_1"); ?></span>
                                <span class="price-menu-time">(50分）</span>
                            </li>
                            <li class="price-menu__item">
                                <span class="price-menu-name">妊婦・安産灸<img class="price-menu__list-line-4 line" src="<?php echo get_template_directory_uri(); ?>/img/price-menu__list-line-4.png" alt="みやび鍼灸院_下線"></span>
                                <span class="price-menu-price"><?php echo get_field("each_price_1"); ?></span>
                                <span class="price-menu-time">(50分）</span>
                            </li>
                            <li class="price-menu__item">
                                <span class="price-menu-name">美容鍼灸<img class="price-menu__list-line-6 line" src="<?php echo get_template_directory_uri(); ?>/img/lineprice-menu__list-line-6.png" alt="みやび鍼灸院_下線"></span>
                                <span class="price-menu-price"><?php echo get_field("each_price_1"); ?></span>
                                <span class="price-menu-time">(50分）</span>
                            </li>
                            <li class="price-menu__item-none">
                                <span class="price-menu-name">カッピング・スライドカッピング</span>
                                <ul class="price-menu__inner-menu">
                                    <li class="price-menu__inner-item">
                                        <div class="price-menu-wrap">
                                            <span class="price-menu__inner-name">＊カッピング<img class="price-menu__list-line-7 line" src="<?php echo get_template_directory_uri(); ?>/img/price-menu__list-line-7.png" alt="みやび鍼灸院_下線"></span>
                                            <span class="price-menu-price-left"><?php echo get_field("each_price_2"); ?></span>
                                            <span class="price-menu-time-left">(S)(25分)</span>
                                        </div>
                                        <div>
                                            <span class="price-menu-price-right"><?php echo get_field("each_price_1"); ?></span>
                                            <span class="price-menu-time-right">(L)(50分)</span>
                                        </div>
                                    </li>
                                    <li class="price-menu__inner-item bottom">
                                        <span class="price-menu__inner-name">＊スライドカッピング<img class="price-menu__list-line-8 line" src="<?php echo get_template_directory_uri(); ?>/img/price-menu__list-line-8.png" alt="みやび鍼灸院_下線"></span>
                                        <div class="price-menu-wrap">
                                            <span class="price-menu-price-left"><?php echo get_field("each_price_2"); ?></span>
                                            <span class="price-menu-time-left">(S)(25分)</span>
                                        </div>
                                        <div>
                                            <span class="price-menu-price-right"><?php echo get_field("each_price_1"); ?></span>
                                            <span class="price-menu-time-right">(L)(50分)</span>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="price-menu__item">
                                <span class="price-menu-name">骨盤ケア（トムソンベッド)<img class="price-menu__list-line-9 line" src="<?php echo get_template_directory_uri(); ?>/img/price-menu__list-line-9.png" alt="みやび鍼灸院_下線"></span>
                                <span class="price-menu-price"><?php echo get_field("each_price_3"); ?></span>
                                <span class="price-menu-time">(10〜15分）</span>
                            </li>
                            <li class="price-menu__item">
                                <span class="price-menu-name">妊活マッサージ<img class="price-menu__list-line-10 line" src="<?php echo get_template_directory_uri(); ?>/img/price-menu__list-line-10.png" alt="みやび鍼灸院_下線"></span>
                                <span class="price-menu-price"><?php echo get_field("each_price_2"); ?></span>
                                <span class="price-menu-time">(25〜30分）</span>
                            </li>
                        </ul>
                    </div>
                    <div class="btn common-btn price-btn">
                        <a href="<?php echo esc_url(home_url('/')); ?>/price" class="news__link">
                            <span class="news__link-text">More</span>
                            <span>></span></a>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/flower.png" alt="みやび鍼灸院_クローバー" class="price-bottom__img-clover">
                </div>
            </div>
        </section>
        <section class="faq">
            <div class="faq__inner">
                <div class="faq__content">
                    <div class="faq__img-circle-pink__wrap">
                        <h2 class="faq__title-wrap">
                            <span class="faq__title">Faq</span>
                            <span class="faq__sub-title">よくある質問</span>
                        </h2>
                    </div>
                    <div class="accordion ">
                        <div class="accordion-container jsAccordionContainer">

                            <dl>
                                <dt class="accordion-title accordion-title-under jsAccordionTitle ">
                                    <span class="accordion-title-left">Q</span>

                                    どのくらいの頻度で通うのがいいですか？

                                </dt>
                                <dd class=" accordion-text jsAccordionText">
                                    <span class="accordion-content-left">A</span>
                                    <span class="accordion-content-right">
                                        状況によりますが、体質改善の為に半年～1年をめどに週に1回程度をお勧めしております。
                                        年齢や身体の状態に合わせて、または、体外授精を近日に控えている方などは日にちをつめて
                                        通っていただくこともあります。
                                        また、採卵、IVF・ICSIにあわせて通う日を指定することもあります。
                                    </span>
                                </dd>
                                <dt class="accordion-title accordion-title-under jsAccordionTitle ">
                                    <span class="accordion-title-left">Q</span>

                                    鍼の治療は痛みを伴いますか？

                                </dt>
                                <dd class="accordion-text jsAccordionText">
                                    <span class="accordion-content-left">A</span>
                                    <span class="accordion-content-right">
                                        痛みには個人差があります。鍼先は髪の毛よりも細いものを使用しており、注射のような痛みはありません。しかし、鍼には特有の響きというものがあります。痛みとは違い、重だるく感じるものですが、初めての方はどうしてもそれを「痛い」と感じてしまいます。
                                        また、刺さない鍼というものもあります。小児鍼として子供用に昔から使用されている鍼です。
                                    </span>
                                </dd>
                                <dt class="accordion-title accordion-title-under accordion-title-top jsAccordionTitle ">
                                    <span class="accordion-title-left">Q</span>
                                    移植日の予約の取り方を教えてください。
                                </dt>
                                <dd class="accordion-text jsAccordionText ">
                                    <span class="accordion-content-left">A</span>
                                    <span class="accordion-content-right">
                                        通っている病院の移植時間によりますが、加藤レディースクリニックに通っている方は午前中の10時30分にご予約を取っていただき、当日の診療が終わったら電話でご連絡ください。
                                        ほかのクリニックの方も移植日に鍼をしたほうがいいので移植の時間が決まりましたらご予約ください。
                                    </span>
                                </dd>
                                <dt class="accordion-title accordion-title-top jsAccordionTitle ">
                                    <span class="accordion-title-left">Q</span>

                                    妊娠しても通えますか？

                                </dt>
                                <dd class="accordion-text jsAccordionText ">
                                    <span class="accordion-content-left">A</span>
                                    <span class="accordion-content-right">
                                        はい。妊娠初期はつわりや流産予防に、中期はマイナートラブル（腰痛・足のむくみ・恥骨痛など）や逆子、出産前には産前ケアとして通えます。安産灸は胎動を感じる20週前後から始めるといいです。
                                    </span>
                                </dd>
                                <dt class="accordion-title accordion-title-top jsAccordionTitle ">
                                    <span class="accordion-title-left">Q</span>

                                    カッピングの跡はどれくらいで取れますか？

                                </dt>
                                <dd class="accordion-text jsAccordionText ">
                                    <span class="accordion-content-left">A</span>
                                    <span class="accordion-content-right">
                                        個人差がありますが、7日前後です。ただ、具合の悪い場所は長く残ることもあります。
                                    </span>
                                </dd>
                            </dl>
                        </div><!-- accordion__container -->
                        
                    </div>
                    <div class="btn common-btn faq-btn">
                        <a href="<?php echo esc_url(home_url('/')); ?>/faq" class="news__link">
                            <span class="news__link-text">More</span>
                            <span>></span></a>
                    </div>

                    <img src="<?php echo get_template_directory_uri(); ?>/img/flower.png" alt="" class="faq-bottom__img-clover">

                </div>
            </div>
        </section>
        <section class="blog">
            <div class="blog__inner">
                <div class="blog__content">
                    <h2 class="blog__title-wrap">
                        <span class="blog__title">Blog</span>
                        <span class="blog__sub-title">ブログ</span>
                    </h2>
                    <?php
                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 3,
                        );
                        $the_query = new WP_Query($args);
                    ?>
                        
                    <ul class="blog-list topPage">
                        <?php if ($the_query->have_posts()) :
                            while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <li class="blog-list__item topPage">
                            <a class="blog-text__link" href="<?php the_permalink(); ?>">
                                <!-- <img src="./img/DSC05919.jpg" alt="" class="blog-list__img topPage"> -->
                                <figure class="blog-list__img-wrap topPage">
                                <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail( array( 250, 160 ), array('class' => 'blog-list__img topPage', 'alt' => the_title_attribute('echo=0'))); ?>
                                <?php else : ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/DSC05919.jpg" alt="" class="blog-list__img">
                                 <?php endif; ?>
                                </figure>
                               
                                <div class="blog-body__top">
                                    <div class="blog-body__top-left">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/clock.png" alt="" class="blog-list__img-clock topPage">
                                        <time datetime="2022-07-28" class="blog-list__date"><?php echo get_the_date('Y-m-d'); ?></time>

                                    </div>
                                    <div class="blog-body__top-right">
                                        <span class="blog-list__category">
                                            <?php $cat = get_the_category();
                                            $cat = $cat[0]; {
                                            echo $cat->cat_name;
                                            } ?>
                                        </span>
                                    </div>
                                </div>
                                <h3 class="blog-list__title topPage">
                                    <?php
                                        if (mb_strlen($post->post_title, 'UTF-8') > 10) {
                                        $title = mb_substr($post->post_title, 0, 10, 'UTF-8');
                                        echo $title . '…';
                                        } else {
                                        echo $post->post_title;
                                        }
                                        ?>
                                </h3>
                                <p class="blog-text topPage">
                                    <?php
                                        echo wp_trim_words( get_the_content(), 30, '...' );
                                        ?>
                                </p>
                            </a>
                        </li>
                            <?php endwhile; ?>
                            <?php endif;
                            wp_reset_postdata();
                            ?>
                    </ul>
                    <div class="btn common-btn blog-btn">
                        <a href="<?php echo esc_url(home_url('/')); ?>/blog" class="news__link">
                            <span class="news__link-text">More</span>
                            <span>></span></a>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/flower.png" alt="" class="blog-bottom__img-clover">
                </div>
            </div>
        </section>
        <section class="access">
            <div class="access__inner">
                <h2 class="access__title-wrap">
                    <span class="access__title">Access</span>
                    <span class="access-sub__title">診療時間・アクセス</span>
                </h2>
                <div class="access__content">
                    <div class="access-body">
                        <h3 class="access-body__title">
                            <span class="access-body__title-left">女性専門</span>
                            <span class="accessbody__title-right">みやび鍼灸院</span>
                        </h3>
                        <div class="access-address">
                            <p class="address-postcode">〒160-0023</p>
                            <p class="address-top">東京都新宿区西新宿７丁目８−１１ &nbsp;美笠ビル&nbsp;501</p>
                            <p class="address-owner-name">院長&nbsp;武石 佳代子</p>
                            <p class="address-tel">Tel&nbsp;03-6887-2522</p>
                            <p class="address-open">月曜〜金曜&nbsp;10:00〜19:00</p>
                            <p class="address-open">土曜・祝日&nbsp;10:00〜15:00</p>
                            <p class="address-close">定休日／日曜日</p>
                        </div>
                    </div>
                    <div class="access-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.239383471837!2d139.69599971513227!3d35.69572638019095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188d29c95985c9%3A0xb9ff311f4601e027!2z44G_44KE44Gz6Y2854G46Zmi!5e0!3m2!1sja!2sjp!4v1658987852568!5m2!1sja!2sjp" width="775" height="420" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </section>
        <section class="contact">
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
        </section> -->
    </main>

        <?php get_template_part('includes/footer'); ?>
        <?php get_footer(); ?>
        <?php wp_footer(); ?>
    </div>

</body>

</html>