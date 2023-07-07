<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
<?php 
    /*
Template Name:menu-easyDelivery
Description:安産灸についてのページです。
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
                <li class="breadcrumb-list"><a class="breadcrumb-link" href="./index.html#menu">施術メニュー</a></li>
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
                            <h4 class="menu-lower__content-inner__title">安産灸について</h4>
                            <p class="menu-lower__content-inner__text">
                                安定期に入り20週前後になると胎動を感じてきます。胎動を感じるようになってきたら安産灸を始める時期となります。<br>
                                安産灸は、お母さんの体調を整え、お産を軽減させ、赤ちゃんが元気に産まれるお手伝いをします。安産灸には産後の回復を良くしたり、
                                母乳の出を良くする効果もあります。<br>
                                安産のお灸の通うペースは病院と同じで2週間～4週間に1回通うのがおすすめです。
                            </p>
                        </div>
                        <div class="menu-lower__content-list-wrap">
                            <h4 class="menu-lower__content-list__title">時期別の安産灸</h4>

                            <ul class="menu-lower__content-list">
                                <li class="menu-lower__content-list-item">
                                    <h5 class="menu-lower__content-list-item__title">妊娠初期（つわり対策)</h5>
                                    <p class="menu-lower__content-list-item__text">
                                        心拍の確認が取れた頃からつわりの施術を開始します。<br>
                                        また流産しやすい時期でもありますので、流産の予防のため、骨盤を締めたり、腎を温め、気のめぐりをよくしていきます。簡単なつわり対策や<br>
                                        お家でできる養生法を指導していきます。<br>
                                        つわりがひどく来院できない場合は無理なさらず安静にしていただき、安定期に入り、胎動を感じてから安産のお灸にいらしてください。<br>
                                    </p>
                                </li>
                                <li class="menu-lower__content-list-item">
                                    <h5 class="menu-lower__content-list-item__title">妊娠中期 16～27週（むくみ予防・切迫早産予防)</h5>
                                    <p class="menu-lower__content-list-item__text">
                                        体が安定してくる時期です。<br>
                                        この時期は胎動を感じてから安産のお灸ができるようになります。<br>
                                        ただし、無理をすると切迫早産しやすい時期でもありますので、安定期だからと言って油断をせずゆったりと過ごしてください。<br>
                                        20週を超えたあたりから、ご自身の持っている持病などが出やすく、浮腫みや、高血圧などが出てきやすくなります。<br>
                                        予防が大切です、症状が出てからだと治りにくいので、早め早めに予防をしていきましょう。<br>
                                        お灸の場所の変更や体調の変化がある時期ですので2週間から4週間に1回のペースで通うのがお勧めです。<br>
                                        お灸を受けられる際にドクターの許可がおりていることが必要です。<br>
                                        ※腰痛でお困りの方はさらしをお持ちください。さらしの巻き方も丁寧に指導します。
                                    </p>
                                </li>
                                <li class="menu-lower__content-list-item">
                                    <h5 class="menu-lower__content-list-item__title">妊娠後期（逆子をなおす)</h5>
                                    <p class="menu-lower__content-list-item__text">
                                        こむら返り・頻尿・恥骨痛・後期つわり・精神不安定・不眠などが出てきやすい時期です。<br>
                                        逆子と診断された場合はできるだけ早めに治しましょう。また、再逆子にならないよう指導、お灸をしていきます。<br>
                                        逆子の方は逆子のお灸施術のページもご覧ください。<br>
                                    </p>
                                </li>
                                <li class="menu-lower__content-list-item">
                                    <h5 class="menu-lower__content-list-item__title">臨月（安産のための体つくり総仕上げ)</h5>
                                    <p class="menu-lower__content-list-item__text">
                                        37週をむかえ「いつ生まれてきてもいい」時期に入りました。<br>
                                        出産に向け心や体の準備をしていきましょう。<br>
                                        ご自身で行える運動法やお灸で安産のための体つくりを指導していきます。<br>
                                        陣痛が来たらどうするのか、どの時間にどのくらいお灸を行えばいいのかなど、詳しくお伝えします。里帰り出産の方は帰る前に教えますので、<br>
                                        忘れたときはメールなどでご連絡頂ければ再度メールで指導します。
                                    </p>
                                </li>
                                <li class="menu-lower__content-list-item">
                                    <h5 class="menu-lower__content-list-item__title">出産（陣痛付け・予定日超過)</h5>
                                    <p class="menu-lower__content-list-item__text">
                                        いよいよ出産なのになかなか陣痛がこない！出産予定日を過ぎているのになかなかおしるしが来ないなど、出産前で歯がゆいときにもお灸が効果的です！お腹が大きくて大変かもしれませんがお灸をしにいらして下さい。
                                        ＊効果には個人差があります。
                                    </p>
                                </li>
                                <li class="menu-lower__content-list-item">
                                    <h5 class="menu-lower__content-list-item__title">安産のお灸を受けるにあたって</h5>
                                    <p class="menu-lower__content-list-item__text">
                                        安産のお灸を希望される方は以下のことをご確認のうえご連絡ください。<br>
                                        場合によっては施術を受けられない場合もございますのでご了承ください。<br>

                                        医師の許可、確認が取れているかどうか（許可のない場合はお灸ができないこともあります）<br>
                                        妊娠中に入院歴がある・安静の指示が出ているかどうか<br>
                                        出血の有無<br>
                                        服薬の有無<br>
                                        週数（胎動の有無など）<br>

                                        ※新宿駅までの道のりがあまりにも遠い方は出張させていただくことやお断りすることもあります（片道2時間以上など）
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
        </section>

 -->







    </div>
    <?php get_template_part('includes/footer-lower'); ?>
    <?php get_footer(); ?>
    <?php wp_footer(); ?>
</body>

</html>