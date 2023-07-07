<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
<?php 
    /*
Template Name:menu-pelvic_adjustment
Description:骨盤ケアについてのページです。
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
                            <span class="menu-lower__content-title"><?php echo get_field("treatment_title"); ?></span>
                        </h3>
                        <?php echo the_content(); ?>
                        <!-- <div class="menu-lower__content-inner">
                            <h4 class="menu-lower__content-inner__title">骨盤調整ケア</h4>
                            <p class="menu-lower__content-inner__text">
                                骨盤は体のベースとなり、全身の姿勢を支え、健康の要です。
                                女性の骨盤は浅くて広い洗面器のような形です。
                                子宮や卵巣、腸、膀胱といった内臓を包み込み妊娠すると赤ちゃんを大切に守る役割をします。
                                骨盤の歪みは、支えられている子宮や卵巣・膀胱なども歪ませます。
                                内臓が歪むと内臓は伸び縮みしづらい固い状態になり、凝って動きが悪くなった状態とも言えます。
                                凝った状態では血液などの体液の流れも悪くなり冷えが起きやすくなります。
                                歪んだ骨盤を骨盤ケアで整えて行きましょう。
                                
                            </p>
                        </div>
                        <div class="menu-lower__content-inner">
                            <h4 class="menu-lower__content-inner__title">トムソンベッド</h4>
                            <p class="menu-lower__content-inner__text">
                                当院では、骨盤矯正で『トムソンターミナルポイントテーブル』(通称トムソンベッド)を使用しております。
                                こちらのトムソンベッドは、ニュートンの「慣性の法則」を利用しております。             
                                テーブル(ベッド)が落下して下に到達したときに第二の力の働きにより、椎骨が矯正されます。                               
                                落下というと、少し恐ろしいような響きですが自動でベッドがゆっくりとうつ伏せの状態と仰向けの状態で倒れていきます。                            
                                このベッドで骨を矯正するのは力ではなく正しいベッドの使い方により最小の力で患者さんの体重を利用して矯正されます。                              
                                うつ伏せの状態と仰向けの状態にて施術者が仙骨周りの矯正及びお腹周りの筋肉を調整していきます。

                            </p>
                        </div>
                        <div class="menu-lower__content-inner">
                            <h4 class="menu-lower__content-inner__title">骨盤調整ケアと妊活</h4>
                            <p class="menu-lower__content-inner__text">
                                骨盤が歪む又は、緩むと子宮や腸が通常より下垂します。
                                下腹がぽっこり出るだけではなく骨盤内のうっ血やむくみが起こる為に、月経痛や冷え、尿もれのトラブルの原因となります。
                                下垂する事により、子宮や卵巣の機能低下、子宮や卵巣の圧迫によりねじれを引き起こすこともあります。
                                子宮の機能低下は子宮がふっくらと大きくなれず、小さく硬くなっていると考えられ、コロンと硬くて小さい子宮は妊娠しづらいといわれています。
                                理想的な子宮は丸くふっくらとしています。
                                骨盤は生理周期に合わせて開いたりしまったりしますが、歪んでしまうと開くべき時期に開きません。
                                その為、周辺の筋肉が緊張して骨盤内の血流が滞り、生理痛、頭痛、腰痛などを引き起こします。
                                また不要となった子宮内膜を排出することが出来ず、生理痛や、子宮内膜症につながる場合もあります。
                                骨盤矯正をする事により、内臓下垂を改善し、子宮や卵巣の動きを良くしましょう。
                                妊活の鍼灸に併せてトムソンベッドをされますと着床率も効果をあげております。
                                週に一回程度を続けると効果的です。

                            </p>
                        </div>
                        <div class="menu-lower__content-inner">
                            <h4 class="menu-lower__content-inner__title">産後ケアと骨盤矯正</h4>
                            <p class="menu-lower__content-inner__text">
                                        産後の場合は特に骨盤の下の部分を覆っている骨盤底筋群のゆるみになります。
                                        出産時、骨盤底筋群は赤ちゃんを出そうと伸び縮みし負担がかかり、会陰切開する事で筋肉が傷つきます。
                                        この様な骨盤の歪みや緩みをトムソンベッドで矯正していき骨盤を正しい位置に戻していきましょう。
                                        産後のケアをしておくと、その後の体調やホルモンバランスいい影響を及ぼします。
                                        産前のパンツが入らない場合は骨盤が広がっている可能性があります。その後の太りやすさにもつながってきます。
                                        また、骨盤ケアは老後の子宮脱などの予防になります。
                                        産後から6カ月の間に骨盤を整えておきましょう。<br>
                                        ＊妊娠中はできません。骨盤ストレッチでしたら施術可能です。
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