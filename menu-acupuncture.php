<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
<?php 
    /*
Template Name:menu-acupuncture
Description:鍼灸治療についてのページです。
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
                            <h4 class="menu-lower__content-inner__title">ツボとは？</h4>
                            <p class="menu-lower__content-inner__text">
                                鍼灸治療の話をする前にまず、ツボについてお話します。ツボとは、鍼灸効果を発揮するからだの反射回路です。<br>
                                古代中国では身体をめぐる気血の通路を経絡と考えました。<br>
                                気血とは、人体生存に不可欠な物質、現代で言えば代謝物質、またその流れと考えます。<br>
                                縦の脈の流れを経脈、横の流れを絡脈といい、併せて経絡といいます。<br>

                                この経絡上の気血の出入りするところや、経絡が合流して枝分かれする場所を経穴とよび、私達が「ツボ」と呼んでいるところです。<br>
                                つぼに刺激を与えると、つぼから離れた体の器官の活動が変化することがわかっています。<br>
                                これは鍼やお灸の熱刺激が神経系の反射回路によって反応するからです。<br>
                                生理学的に考えると、次のような説が考えられます。<br>
                                1. 動脈の自律神経軸索→脊髄後角→脊髄内の求心路→脳幹部→自律神経中枢→交感神経または副交感神経（自律神経遠心路）→内臓<br>
                                2. ポリモーダル受容器→脊髄後角→脊髄内の上行路→脳幹部→自律神経中枢→交感神経または副交感神経（自律神経遠心路）→内臓<br>
                                このように、皮膚の表面上ですが、内臓および自律神経に働きかけることがツボの作用と考えられます。
                            </p>
                        </div>
                        <div class="menu-lower__content-list-wrap">
                            <h4 class="menu-lower__content-list__title">鍼灸とは</h4>
                            <p class="menu-lower__content-list__text">
                                鍼灸は、この体にある多くのツボ（経穴）を、鍼やお灸で刺激することで心身の不調を改善する方法です。<br>
                                鍼灸は、紀元前に中国で流行し、日本では特に江戸時代から独自に発展をしてきました。今は国家資格をもつ鍼灸師と医師のみが行える施術です。<br>
                                鍼は0.12mm程度の極めて細い針を使い捨てでツボに刺します。痛みは人によって感じ方が違いますが、チクッと刺さる感じがあります。<br>
                                また、鍼独特の響きと言われる効果があります。<br>
                                刺さない鍼もあります。<br>
                                灸はヨモギを乾燥させたものを使います。症状によってお灸を使い分け温度を調整します。<br>
                                火を使うため70℃近い熱いものから40℃くらいの暖かいものまで様々です。

 
                            </p>
                            <ul class="menu-lower__content-list">
                                <li class="menu-lower__content-list-item">
                                    <h5 class="menu-lower__content-list-item__title">鍼灸の効果・作用について</h5>
                                    <p class="menu-lower__content-list-item__text">
                                        私たちには、もともと体が病気やケガをした時に治そうとする「自然治癒力」が備わっています。
                                        鍼灸はその自然治癒能力をひきだし、身体を治していくお手伝いをします。
                                        鍼灸の効果の出る仕組みのメカニズムは全てが明らかになっている訳ではありませんが、鍼灸の効果と作用についてお話します。<br>
                                        
                                        ①調整作用は、器官や組織に一定の刺激を与えて、その機能を調整する作用。
                                        痛みや知覚の鈍麻・消失、運動麻痺などの低下・減弱したり、逆に疼痛・痙攣を和らげるなどです。<br>
                                        ②誘導作用は患部に直接刺鍼施灸するか、または遠隔部に刺鍼施灸して、
                                        その部の血管に影響を及ぼし、充血させ、患部の血流を調整する。
                                        誘導作用は「血液」のコントロールを目的としています。<br>
                                        ③鎮痛作用は、内因性モルヒネ様物質あるいは加工性抑制などの機序により、鎮痛作用が発現する。<br>
                                        ④防衛作用は、白血球や大貪食細胞などを増加させて、各種疾患の治療機能を促進させ、生体の防御力を高める作用です。<br>
                                        ⑤免疫作用は、免疫能を高める作用。<br>
                                        ⑥消炎作用は、施術により白血球は増加し、施術部位に遊走する。または血流改善により病的滲出物などの吸収を促進させ、体内の防衛能力を高める作用。<br>
                                        ⑦転調作用は、自律神経失調症やアレルギー体質を改善して，体質を強壮にする作用。<br>
                                        ⑧反射作用は、痛み刺激あるいは温熱刺激による反射機転を介して、組織・臓器の機能を鼓舞あるいは抑制する作用。<br>
                                        以上の作用があります。

                                        鍼灸による刺激が、自律神経や免疫の働きなどに作用し、筋肉の緊張を和らげたり、血液やリンパ液の循環をよくしたりすることが、自然治癒力の向上を助けると考えられています。
                                    </p>
                                </li>
                                <li class="menu-lower__content-list-item">
                                    <h5 class="menu-lower__content-list-item__title">鍼灸治療で効果が期待できる症状</h5>
                                    <p class="menu-lower__content-list-item__text">
                                        近年、NIH（米国国立衛生研究所）により、鍼灸治療が西洋医学の代替治療としてさまざまな病気の治療に有効であるという発表がありました。
                                        その中の一部ですが、ご紹介します。<br>
                                        婦人科系疾患では、・更年期障害・乳腺炎・白帯下・生理痛・月経不順・冷え性・血の道・不妊<br>
                                        神経系疾患では不眠・自律神経失調症・頭痛・めまい<br>
                                        代謝内分秘系疾患では・バセドウ氏病・糖尿病・痛風・脚気・貧血<br>
                                        眼科系疾患では・眼精疲労・仮性近視・結膜炎・疲れ目・かすみ目<br>
                                        運動器系疾患ほか頚肩腕症候群・頚椎捻挫後遺症・五十肩・腱鞘炎・腰痛<br>
                                        に有効と言われています。
                                    </p>
                                </li>
                                <li class="menu-lower__content-list-item">
                                    <h5 class="menu-lower__content-list-item__title">幅広い鍼灸の可能性</h5>
                                    <p class="menu-lower__content-list-item__text">
                                        さまざまな病気に有効である鍼灸ですが、スポーツ鍼灸の分野では、アスリートだけでなく、
                                        山登りやウォーキングなどでも機能が上がり、健康で暮らしたいと思っている方に予防医学としてもとても注目されています。
                                        近年では、パーキンソン病や脳梗塞の後遺症に対するリハビリ、耳鳴りなどの神経疾患、世界では美容鍼も盛んにおこなわれ、
                                        日本では5組に1組といわれる不妊治療、他にはがん治療などの終末期医療、自律神経においては、気圧病、気温差アレルギーなどにも期待が出来ると言われています。
                                        さまざま分野に鍼灸治療が有効であり、刺さない鍼をする子供から老年まで一生付き添えるものだと言えます。
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
        </section>
 -->
    </div>
    <?php get_template_part('includes/footer-lower'); ?>
    <?php get_footer(); ?>
    <?php wp_footer(); ?>
</body>

</html>