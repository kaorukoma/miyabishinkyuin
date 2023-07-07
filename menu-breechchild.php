<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
<?php 
    /*
Template Name:menu-breechchild
Description:逆子鍼灸治療についてのページです。
 */
get_header(); ?>
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
                    $img = wp_get_attachment_image_src(19, 'large');
                    ?>
                <div class="mv__content mv-menu" style="background-image:url('<?php echo $img[0]; ?>');">
                    <div class="mv__content-inner">
                        <h1 class="mv__title mv-menu__title">Treatment</h1>
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
                <li class="breadcrumb-list"><a class="breadcrumb-link" href="">施術メニュー</a></li>
            </ol> -->
        </div>
        <main class="main">
            <section class="menu-lower">
                <div class="menu-lower__inner">
                    <div class="menu-lower-head__wrap">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/stork.png" alt="" class="menu-lower-head__img">
                        <h2 class="menu-lower-head__title-wrap">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/clover.png" alt="" class="menu-lower-head__title-logo">
                            <span class="menu-lower-head__title"><?php echo get_field("treatment_title"); ?></span>
                        </h2>
                    </div>
                    <div class="menu-lower__content">
                        <h3 class="menu-lower__content-title-wrap">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/clover.png" alt="" class="menu-lower__content-img">
                            <span class="menu-lower__content-title"><?php echo get_field("treatment_subtitle"); ?></span>
                        </h3>
                        <?php echo the_content(); ?>
                        <!-- <div class="menu-lower__content-inner">
                            <h4 class="menu-lower__content-inner__title">逆子のツボ・お灸施術ご希望の方へ</h4>
                            <p class="menu-lower__content-inner__text">
                                逆子のツボ・お灸施術には担当医師の同意が必要です。
                                担当医師の同意が得られましたら、できるだけ早めにご連絡下さい。
                                予約が取れない場合は、直接お電話下さい。<a class=" menu-lower__content-tel" href="tel:03-6877-2522">03-6877-2522</a>まで!
                                分からないことがありましたら、気軽にご質問、ご連絡お願い致します。

                                また、逆子が治った方は、治りましたとご連絡下さい。
                                再度逆子にならないように施術・指導致します。<br>

                                ＊効果には個人差があります。
                            </p>
                        </div>
                        <div class="menu-lower__content-inner">
                            <h4 class="menu-lower__content-inner__title">逆子とは</h4>
                            <p class="menu-lower__content-inner__text">
                                逆子は、妊娠中期まで、赤ちゃんはお母さんのお腹の中で自由に動き回り、半分くらいが逆子であるとも言われています。
                                妊娠後期には、赤ちゃんの頭がおおきくなり、重力に従って重い頭が自然に下向きになっていきます。<br>
                                 28週を過ぎた頃に頭の向きが下にない場合に逆子と診断されます。
                            </p>
                        </div>
                        <div class="menu-lower__content-inner">
                            <h4 class="menu-lower__content-inner__title">逆子の危険性</h4>
                            <p class="menu-lower__content-inner__text">
                                逆子になると、母親の身体と赤ちゃんを結ぶへその緒が頭より先に出てしまう危険があります。
                                この時、へその緒が産道に挟まり、赤ちゃんの脳への血液循環が悪くなってしまうと、赤ちゃんは危険な状態に陥りやすくなります。
                                この為、産院では分娩の際にこの逆子を認める場合は、そのほとんどが帝王切開を選択しています。
                                もともと帝王切開の予定であれば、逆子でもいいと思う方もいるかもしれません。
                                しかし、東洋医学の観点からみると、逆子は陰陽のバランスが逆転している状態なので、赤ちゃんにとって辛い状態を引き起こしています。
                                帝王切開でも逆子を治しておく事がとても大切な事です。

                            </p>
                        </div>
                        <div class="menu-lower__content-inner">
                            <h4 class="menu-lower__content-inner__title">逆子のツボ・灸施術</h4>
                            <p class="menu-lower__content-inner__text">
                                骨盤位・横位・斜位などの逆子のことを東洋医学では「胎位異常」または「胎位不正」といいます。
                                逆子のお灸の効果は子宮内の子宮内の血流を良くして、胎動を増加させ回りやすくしていきます。
                                また、陰陽のバランスを整え赤ちゃんが正しい位置にいられるように保持する作用があります。
                                逆子に関係するものとしては、「任脉」「衝脉」「腎」「肝」「脾」という経絡や臓腑が考えられます。 
                                これら経絡を巡る気血の過不足を鍼灸で整える事と、昔から逆子の特効穴として使われているツボにお灸施術をしていきます。

                            </p>
                        </div>
                        <div class="menu-lower__content-inner">
                            <h4 class="menu-lower__content-inner__title">灸施術で治す逆子・逆子に効くつぼ</h4>
                            <p class="menu-lower__content-inner__text">
                                「腎」「肝」「脾」の三本の経絡が交差する「三陰交」というツボは、子宮を巡る気血循環に大きく作用と、子宮の緊張を弛める作用もあります。
                                また、安産のお灸としても知られています。<br>
                                さらに足の小指末端にある「至陰」というツボは「腎」に関わりが深く、また陰と陽の境目にあるというツボの特性から、逆子の状態の上下の逆転した赤ちゃんの頭を正常な位置に矯正する作用があります。
                                いずれもお灸がよく効きます。<br>
                                はやく逆子を治すために、自宅でもお灸をしていただきます。 また、逆子が治った後も、逆子に戻らないようにお灸施術をつづけるといいでしょう。 
                                鍼灸院でのお灸は自宅で行うお灸と異なり、おうちでお灸をやるよりも効果が高いです。 <br>
                                逆子の灸施術は早めに始めた方が治りやすいので、逆子とわかった時点でいらして下さい。

                            </p>
                        </div>
                        <div class="menu-lower__content-list-wrap">
                            <h4 class="menu-lower__content-list__title"></h4>
                            <p class="menu-lower__content-list__text">

                            </p>
                            <ul class="menu-lower__content-list">
                                <li class="menu-lower__content-list-item">
                                    <h5 class="menu-lower__content-list-item__title"></h5>
                                    <p class="menu-lower__content-list-item__text">
                                    </p>
                                </li>
                                <li class="menu-lower__content-list-item">
                                    <h5 class="menu-lower__content-list-item__title"></h5>
                                    <p class="menu-lower__content-list-item__text">
                                    </p>
                                </li>
                                <li class="menu-lower__content-list-item">
                                    <h5 class="menu-lower__content-list-item__title"></h5>
                                    <p class="menu-lower__content-list-item__text">
                                    </p>
                                </li>
                                <li class="menu-lower__content-list-item">
                                    <h5 class="menu-lower__content-list-item__title"></h5>
                                    <p class="menu-lower__content-list-item__text">
                                    </p>
                                </li>
                                <li class="menu-lower__content-list-item">
                                    <h5 class="menu-lower__content-list-item__title"></h5>
                                    <p class="menu-lower__content-list-item__text">
                                        
                                    </p>
                                </li>
                                <li class="menu-lower__content-list-item">
                                    <h5 class="menu-lower__content-list-item__title"></h5>
                                    <p class="menu-lower__content-list-item__text">
                                    </p>
                                </li>
                                <li class="menu-lower__content-list-item">
                                    <h5 class="menu-lower__content-list-item__title"></h5>
                                    <p class="menu-lower__content-list-item__text">
                                    </p>
                                </li>
                            </ul>
                        </div> -->
                        <div class="menu-lower__content-list__link-wrap">
                            <a class="menu-lower__content-list__link" href="<?php echo esc_url(home_url('/')); ?>#menu">
                                メニュー一覧へ戻る
                            </a>
                        </div>
                    </div>
                </div>
            </section>

        </main>
        <section class="contact lower">
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
                        ※施術中は電話を受け取ることができないことがありますので、電話がつながらないときは<br>
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

    </div>
    <?php get_template_part('includes/footer-lower'); ?>
    <?php get_footer(); ?>
    <?php wp_footer(); ?>
</body>

</html>