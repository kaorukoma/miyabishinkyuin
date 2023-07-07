<!DOCTYPE html>
<html <?php language_attributes(); ?>>

    <head>
    <?php get_header(); ?>
    <?php wp_head(); ?>
    </head>

    <body>
    <?php wp_body_open(); ?>
    <div class="inner lower">
        <?php get_template_part('includes/header-lower'); ?>
        <section class="mv">
            <div class="mv__inner">
            <?php
                $id = get_post_thumbnail_id();
                $img = wp_get_attachment_image_src(35, 'large');
                ?>
                <div class="mv__content mv-news" style="background-image:url('<?php echo $img[0]; ?>');">
                    <div class="mv__content-inner">
                        <h1 class="mv__title mv-news__title">News</h1>
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
                <li class="breadcrumb-list"><a class="breadcrumb-link" href="./news-archive.html">お知らせ一覧</a> ></li>
                <li class="breadcrumb-list"><a class="breadcrumb-link" href="">お知らせ</a></li>
            </ol> -->
        </div>
        <main class="main">
            <section class="news-detail">
                <div class="news-detail__inner">
                <?php if (have_posts()) :
                    while (have_posts()) : the_post();  ?>
                    <h2 class="news-detail__head-title"><?php echo get_field("news_title"); ?></h2>
                    <p class="news-detail__date"><?php echo get_field("news_date"); ?></p>
                    <!-- <h2 class="news-detail__title"></h2> -->
                    <!-- <div class="news-detail__img-wrap aos-init aos-animate" data-aos="fade-zoom-in">
                        <img src="./img/8月キャンペーン.jpeg" alt="" class="news-detail__img">
                    </div> -->
                    <figure class="news-detail__img-wrap aos-init aos-animate" data-aos="fade-zoom-in">
                            <?php the_post_thumbnail('', array('class' => 'news-detail__img', 'alt' => the_title_attribute('echo=0'))); ?>   
                            <!-- <img src="" alt=""class="news-detail__img"> -->
                            </figure>
                    <p class="news-detail__text"><?php echo get_field("news_detail"); ?></p>
                    <?php echo the_content(); ?>
                    <!-- <h3 class="news-detail__sub-title"></h3> -->
                    <!-- <p class="news-detail__sub-text"></p> -->
                    <!-- <a href="" class="news-detail-link"></a> -->
                </div>
                <?php
                    endwhile;
                endif;
                wp_reset_postdata(); ?>
                 <div class="nav-links">
                    <?php previous_post_link( '%link', '前へ'); ?>
                    <a class="page-numbers list" href="<?php echo esc_url(home_url('/')); ?>/news">一覧へ戻る</a>
                    <?php next_post_link('%link', '次へ'); ?>
                    </div>
                
                <!-- <nav class="navigation pagination" aria-label="">
                    <div class="nav-links">
                        <a class="prev page-numbers" href="">&lt;&lt;前へ</a> -->
                        <!-- <a class="page-numbers" href="">1</a>
                        <span class="page-numbers dots">...</span>
                        <a class="page-numbers" href="">3</a>
                        <a class="page-numbers" href="">4</a> -->
                        <!-- <a class="page-numbers list" href="<?php echo esc_url(home_url('/')); ?>/news">一覧へ戻る</a> -->
                        <!-- <span class="page-numbers dots">...</span>
                        <a class="page-numbers" href="">8</a>
                        <a class="page-numbers" href="">9</a>
                        <a class="page-numbers" href="">10</a> -->
                        <!-- <a class="next page-numbers" href="">次へ&gt;&gt;</a>
                    </div>
                </nav> -->
                
            </section>
        </main>
        <section class="contact lower news">
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
                            <a href="mailto:info@miyabi-shinkyu.com"
                                class="btn__link btn-request__link contact__btn-link">お問い合わせ</a>
                        </div>
                        <div class="btn button-book contact__btn-book">
                            <a href="//liff.line.me/1661382187-R6DNWBZN?liff_id=1661382187-R6DNWBZN&is=mIXQWTIjfd"
                                class="btn__link button-contact__link contact__btn-link">Web予約</a>
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
        <?php get_template_part('includes/footer'); ?>
        <?php get_footer(); ?>
        <?php wp_footer(); ?>

    </div>

    </body>
</html>