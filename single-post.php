<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
<?php get_header(); ?>
  <?php wp_head() ?>
</head>

<body>
<?php wp_body_open(); ?>
    <div class="inner lower">
    <?php get_template_part('includes/header-lower'); ?>
        <section class="mv">
            <div class="mv__inner">
            <?php
                $id = get_post_thumbnail_id();
                $img = wp_get_attachment_image_src(41, 'large');
                ?>
                <div class="mv__content mv-blog" style="background-image:url('<?php echo $img[0]; ?>');">
                    <div class="mv__content-inner">
                        <h1 class="mv__title mv-blog__title">Blog</h1>
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
                <li class="breadcrumb-list"><a class="breadcrumb-link" href="./blog-archive.html">ブログ一覧</a></li>
                <li class="breadcrumb-list"><a class="breadcrumb-link" href="">ブログ</a></li>
            </ol> -->
        </div>


        <main class="main">
            <section class="blog-lower post">
                <div class="blog-lower__inner">
                    <div class="blog-lower-head__wrap post">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/stork.png" alt="" class="blog-lower-head__img post">
                        <div class="blog-lower-head__title-wrap post">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/clover.png" alt="" class="blog-lower-head__title-logo">
                            <span class="blog-lower-head__title">ブログ</span>
                        </div>
                    </div>
                    <div class="post-container">
                        <div class="post-contents">
                            <?php if (have_posts()) :
                            while (have_posts()) : the_post(); ?>
                            <article class="post-item">
                                <div class="post-item__inner">
                                    <span class="post-label-lower"><?php $cat = get_the_category();
                                                                            $cat = $cat[0]; {
                                                                              echo $cat->cat_name;
                                                                            } ?></span>
                                    <h2 class="post-item__title"><?php the_title(); ?></h2>
                                    <div class="post-head">
                                        <div class="post-common-link">
                                            <a href="" class="fb-thumb__icon">
                                                <iframe
                                                    src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&width=69px&layout=standard&action=like&size=small&share=true&height=35&appId"
                                                    width="69px" height="20" style="border:none;overflow:hidden"
                                                    scrolling="no" frameborder="0" allowfullscreen="true"
                                                    allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                                            </a>
                                            
                                            <a href="//twitter.com/share?ref_src=twsrc%5Etfw"
                                                class="twitter-share-button twitter__icon" data-show-count="false"></a>
                                        </div>
                                        <div class="post-item-date__wrap">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/clock.png" alt="" class="blog-list__img-clock post">
                                            <time class="post-item-date" datetime="2020-01-01"><?php the_date('Y-m-d'); ?></time>
                                        </div>
                                    </div>
                                
                                <figure class="post-item__img-wrap">
                                <?php the_post_thumbnail('', array('class' => 'post-item__img', 'alt' => the_title_attribute('echo=0'))); ?>
                                </figure>
                                <div class="post-item_detail">
                                    <?php echo the_content(); ?>
                                </div>
                                </div>
                                <!-- <div class="post-item__detail-top">
                                    <h2 class="post-item__detail-top__title">見出しh2</h2>
                                    <p class="post-item__detail-top__text">
                                        本文テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテ
                                    </p>
                                </div>
                                <div class="post-item__detail-bottom">
                                    <h3 class="post-item__detail-bottom__title aos-init aos-animate" data-aos="fade-up">
                                        見出しh3</h3>
                                    <p class="post-item__detail-bottom__text aos-init aos-animate" data-aos="fade-up">
                                        本文テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                                    </p>
                                    <div class="quote-wrap aos-init aos-animate" data-aos="fade-up">
                                        <img src="/img/quotation.png" alt="" class="quote-img">
                                        <p class="quote-text">引用文テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                                    </div>
                                    <div class="post-item__detail-bottom__img-wrap aos-animate" data-aos="fade-zoom-in">
                                        <img src="./img/DSC05425.jpg" alt="" class="post-item__detail-bottom__img">
                                    </div>
                                    <ul class="post-item__detail-list aos-init aos-animate" data-aos="fade-up">
                                        <li class="post-item__detail-point">リストリストリストリストリスト </li>
                                        <li class="post-item__detail-point">リストリストリストリストリストリストリストリストリスト</li>
                                        <li class="post-item__detail-point">リストリストリストリストリストリストリストリストリストリストリスト</li>
                                    </ul>
                                    <a href="" class="post-item__detail-link">テキストリンクテキストリンク</a> -->
                                <!-- </div> -->
                            </article>
                            <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                        <?php get_template_part('sidebar-lower'); ?>
                    </div>
                    <!-- <?php the_post_navigation ( array( 
                        'prev_text' => '前のページへ', 
                        'next_text' => '次のページへ',
                        'in_same_term' => true,
                        ) ); 
                    ?> -->
                    <div class="nav-links">
                    <?php previous_post_link( '%link', '前へ'); ?>
                    <a class="page-numbers list" href="<?php echo esc_url(home_url('/')); ?>/blog">一覧へ戻る</a>
                    <?php next_post_link('%link', '次へ'); ?>
                    </div>
                    <!-- <nav class="navigation pagination" aria-label="">
                        <div class="nav-links">
                            <a class="prev page-numbers" href="">&lt;&lt;前へ</a> -->
                            <!-- <a class="page-numbers" href="">1</a>
                                <span class="page-numbers dots">...</span>
                                <a class="page-numbers" href="">3</a>
                                <a class="page-numbers" href="">4</a> -->
                            <!-- <a class="page-numbers list" href="<?php echo esc_url(home_url('/')); ?>/archive">一覧へ戻る</a> -->
                            <!-- <span class="page-numbers dots">...</span>
                                <a class="page-numbers" href="">8</a>
                                <a class="page-numbers" href="">9</a>
                                <a class="page-numbers" href="">10</a> -->
                            <!-- <a class="next page-numbers" href="">次へ&gt;&gt;</a>
                        </div>
                    </nav> -->
                </div>
            </section>
        </main>
       
        <section class="contact lower post">
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
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v13.0" nonce="pEv6nT3m">
    </script>
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    <?php get_footer(); ?>
    <?php wp_footer(); ?>



    </div>

</body>

</html>