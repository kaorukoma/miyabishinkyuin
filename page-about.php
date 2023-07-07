<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
<?php
    /*
Template Name:about
Description:当院についてのページです。
 */
    get_header(); ?>
    <? wp_head() ?>
</head>

<body>
<?php wp_body_open(); ?>
    <div class="inner lower">
    
    <?php get_template_part('includes/header-lower'); ?>
        <section class="mv">
            <div class="mv__inner lower">
            <?php
                $id = get_post_thumbnail_id();
                $img = wp_get_attachment_image_src(16, 'large');
                ?>
                <div class="mv__content mv-about" style="background-image:url('<?php echo $img[0]; ?>');">
                    <div class="mv__content-inner">
                        <h1 class="mv__title mv-about__title">About</h1>
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
                <li class="breadcrumb-list"><a class="breadcrumb-link" href="">当院について</a></li>
            </ol> -->
        </div>
        <main class="main">
            <section class="about-lower">
                <div class="about-lower__inner">
                    <div class="about-lower-head__wrap">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/stork.png" alt="" class="about-lower-head__img">
                        <h2 class="about-lower-head__title-wrap">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/clover.png" alt="" class="about-lower-head__title-logo">
                            <span class="about-lower-head__title">当院について</span>
                        </h2>
                    </div>
                    <h3 class="about-lower__title-middle">みやび鍼灸院は<br>こんなところです。</h3>
                    <p class="about-lower__text">
                        みやび鍼灸院は、不妊鍼灸・妊婦ケア・逆子を始め<br class="br-about">
                        女性のライフステージの変化による体の変化に寄り添える鍼灸院です。<br class="br-about">
                        不妊の原因によっては高度生殖医療の手助けも必要な場合もありますが、<br class="br-about">
                        どれだけ生殖医療の技術が発達しても、元気な卵子と精子、子宮でなければ<br class="br-about">
                        妊婦・安産は難しいこともあります。<br class="br-about">
                        卵子や子宮が元気になるには患者様自身が心身ともに元気なことが<br class="br-about">
                        とても大事だと考えています。<br class="br-about">
                        心も身体も整えて妊娠から出産、産後のケアを応援し、<br class="br-about">
                        その先のライフステージの身体の変化に寄りそえる鍼灸院にしたいと思っています。
                    </p>
                </div>
            </section>
            <section class="feature-lower">
                <div class="feauture-lower__inner">
                    <h3 class="feauture-lower-title">当院の特徴</h3>

                    <div class="card-wrap lower">
                        <div class="card-left lower">
                            <h4 class="card__title">01</h4>
                            <div class="card__img-wrap">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/DSC05449.jpg" alt="" class="card__img lower">
                            </div>
                            <h5 class="card-lower__title">女性専門の鍼灸院</h5>
                            <p class="card__text">
                                妊活をはじめ、女性ならではの悩みを聞きやすいように、半個室の女性専門の鍼灸院です。
                                女性ホルモンの乱れなど、病院に行くほどでもないかもしれない、などの体調も気兼ねなく質問してください。
                                また、施術において、肩こりであれば鎖骨回りや、腰痛であれば臀部などを一緒にほぐしていきますが、
                                鍼灸は直接、肌に触れるため、女性が施術することで安心して受けられます。
                            </p>

                        </div>
                        <div class="card-centre lower">
                            <h4 class="card__title">02</h4>
                            <div class="card__img-wrap">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/DSC05507.jpg" alt="" class="card__img lower">
                            </div>
                            <h5 class="card-lower__title">妊活の施術</h5>
                            <p class="card__text">
                                不妊治療に鍼灸をするのは海外では定番です。
                                当院は不妊治療の病院から、とても近くにあり、体外受精に合わせて通うことも可能です。
                                自然妊娠、人工授精、体外受精のステップアップに合わせて妊活鍼灸をおすすめしています。
                                卵子の質の変化には半年から8か月かかるといわれています。妊活を思い立ったら早めに施術にいらして下さい。
                                お家でできる妊活もたくさんあります。
                                妊活鍼灸と一緒に骨盤調整や当院オリジナル妊活マッサージもおすすめです。
                            </p>

                        </div>
                        <div class="card-right lower">
                            <h4 class="card__title">03</h4>
                            <div class="card__img-wrap">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/DSC05491.jpg" alt="" class="card__img lower">
                            </div>
                            <h5 class="card-lower__title">妊婦鍼灸マッサージ</h5>
                            <p class="card__text">
                                妊娠して、肩こりや腰痛、マイナートラブルに悩まされて、困ったなと思ったときに、妊婦の施術を行うところはあまりありません。
                                当院では、安産灸をはじめ、マイナートラブル、つわり、逆子、恥骨痛など出産前の体調管理、出産超過などに対応しています。
                                安産灸を行うと、妊娠中の身体のケアに役立ち、出産時は陣痛が軽減され、産後の肥立ちもよくなり、生まれてきた子も健やかに
                                育ちやすいといわれています。
                            </p>

                        </div>
                    </div>
                    <div class="card-wrap-bottom">
                        <div class="card-bottom-item">
                            <h4 class="card__title">04</h4>
                            <h5 class="card-lower__title">完全予約制</h5>
                            <p class="card__text">
                                完全予約制ですので、ほとんどお待たせせずに施術を受けていただけます。
                                院内は個室にしているため、予約枠が決まっています。
                                ご希望に添えない場合は申し訳ございません。
                                その際はキャンセル待ちでできるだけご希望に対応させていただきますが、
                                体外受精など決まった日にちに施術したい方は早めのご予約をお願いいたします。
                            </p>

                        </div>
                        <div class="card-bottom-item">
                            <h4 class="card__title">05</h4>
                            <h5 class="card-lower__title">新宿駅西口徒歩8分</h5>
                            <p class="card__text">
                                新宿駅西口から徒歩8分と駅から近く、高度不妊治療（ART）を行なっている病院からも大変近く、
                                通いやすいです。また、小滝橋通りは、飲食店が多く、大通りですの、夜も道が明るく、女性も安心して歩けます。
                                うつみやすこレディースクリニックから徒歩3分、加藤レディースクリニック（KLC）から徒歩5分、
                                新宿ARTクリニックから徒歩10分。もちろん、不妊症のクリニックに通っていない方も鍼灸施術をされていますので、
                                気軽にご連絡ください。
                            </p>

                        </div>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/img_pink.png" alt="" class="feauture-lower__img-left">
                </div>
            </section>
            <div class="interval-about-lower">
                <img src="<?php echo get_template_directory_uri(); ?>/img/flower.png" alt="" class="interval-about-lower__img">   
            </div>
            <section class="greeting">
                <div class="greeting__inner">
                    <h3 class="greeting__title">ごあいさつ</h3>

                <div class="greeting-top__wrap">
                    <div class="greeting-body-top">
                        <p class="greeting__text">
                            女性が活躍する社会になりましたが、頑張りすぎて、身体の変化に気がつかなかったり、
                            ちょっとした不調をそのままにして働いている方がとても多くみられます。<br>
                            そんな頑張る女性を少しでも癒すための鍼灸院を始めました。<br>
                            かれこれもう14年前の話です。<br>

                            また、仕事をしながら妊活する方もふえていますが、仕事しながらの妊活は大変で、
                            治療自体もとてもストレスになります。<br>
                            実際、妊活をはじめると初めて聞く言葉に対応できず、その場で何を質問すればいいのかわからなくなってしまい、
                            後になって思い出しても質問できなかったなどという話を伺います。<br>
                            また、友人などに気軽に話せないこともあり、一人で悩んでいる方も多いです。<br>

                            東洋医学には、生活習慣や四季折々の過ごし方、ちょっとした生活の見直しで解決できることがたくさんあります。<br>
                            病院や薬では解決しなかったことや、不安な気持ちやストレスを気軽に話せる場として、
                            正しい東洋医学の知識とたくさんの妊活を乗り越え出産に至った方たちを診てきた経験を活かし、
                            お役に立てればと思っています。<br>

                            働く女性の体のメンテナンス、妊活、出産、産後（育児疲れ）、更年期においてレディース鍼灸・東洋医学の知識を通して、
                            社会貢献していきたいと思います。<br>
                        </p>
                        <p class="greeting__name">院長 武石 佳代子</p>
                    </div>
                    <!-- <img src="./img/DSC05431.jpg" alt="" class="greeting__img-top"> -->
                    <img src="<?php echo get_template_directory_uri(); ?>/img/takeishi.jpg" alt="" class="greeting__img-top">
                </div>
                <div class="greeting-top__wrap-bottom">
                    <div class="greeting-body-bottom">
                        <p class="greeting__text">
                            小さい頃から身近に"はり""きゅう"があり、自然と鍼灸師を目指すようになりました。<br>
                            専門学校卒業後、地元の鍼灸整骨院で指圧技術を習得しました。<br>
                            日々患者様と向き合う中で女性特有の症状に悩まれている方が多く、
                            もっと深く勉強し女性特有の症状に悩まれている方を救いたいと思いみやび鍼灸院に入社しました。<br>
                            プライベートでは二人の娘の母です。<br>
                            妊娠中にはつわり、静脈瘤、足のつり、逆子、予定日超過、
                            産後には乳腺炎、第二子を出産する際にはVBACを経験しました。<br>
                            どのマイナートラブルも鍼灸治療を施すことで症状が軽減すること、
                            お産に向けての体のケアの大切さを身をもって学びました。<br>
                            自身の経験を生かし妊娠前から出産まで不安を感じている女性のお役に立てれば嬉しいです。
                        </p>
                        <p class="greeting__name">鍼灸師 伊藤 楓</p>
                    </div>
                    <!-- <img src="./img/DSC05431.jpg" alt="" class="greeting__img-bottom"> -->
                    <img src="<?php echo get_template_directory_uri(); ?>/img/itou.jpg" alt="" class="greeting__img-bottom">
                </div>





                </div>
            </section>
        </main>
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
        </section> -->
    </div>
    <?php get_template_part('includes/footer-lower'); ?>
    <?php get_footer(); ?>
    <?php wp_footer(); ?>

</body>

</html>