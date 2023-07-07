<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
<?php 
    /*
Template Name:menu-beauty_acupuncture
Description:美容鍼灸治療についてのページです。
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
            <section class="menu-lower beauty">
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
                            <h4 class="menu-lower__content-inner__title">オーダメイドの美容鍼を提供しております</h4>
                            <p class="menu-lower__content-inner__text">
                                当院の美容鍼の施術は患者さん「お一人お一人」に合わせたオーダーメイドの美容鍼を提供しております。
                                患者さんによってお悩みやご要望は違います。同じお悩みでも、年齢や生活習慣、食事で体質やホルモンバランスは変わってきます。
                                
                                鍼の刺激についても「痛いのは絶対に嫌」な方もいれば、「ちょっとくらい痛くてもいいから直ぐに効果がほしい」という方など様々です。
                                当院ではカウンセリングで、現在のお体の状態や特に気になっている部分を細かく伺ったうえで、施術内容を「お一人お一人」カスタマイズし、オーダーメイドの施術を行っております。
                                
                            </p>
                        </div>
                        <div class="menu-lower__content-inner">
                            <h4 class="menu-lower__content-inner__title">美容鍼とは？</h4>
                            <p class="menu-lower__content-inner__text">
                                「美しくなること」を目的にした鍼灸治療が美容鍼です。
                                美容鍼灸の目的として主に、美肌効果(くすみ改善、保湿効果、キメの細かい肌作りなど)、リフトアップ、小顔効果、シワ・シミ・クマの改善効果、むくみの改善効果などがあげられます。
                                鍼灸治療を行うことで、全身の新陳代謝を高め、その人が本来持つ自然で健康的な美しさを取り戻すことが期待できます。

                            </p>
                        </div>
                        <div class="menu-lower__content-inner">
                            <h4 class="menu-lower__content-inner__title">美容鍼灸の目的</h4>
                            <p class="menu-lower__content-inner__text">
                                近年、女性の美容に対する願望にはたるみの改善や美白効果など顔面部に対して美しさを求める傾向があります。そのため美容を目的とした美容鍼では主に顔面部への施術が一般的といえます。
                                実際の施術では、筋肉のつきかたや東洋医学での経絡やツボを考え、局所的な施術として顔を覆っている筋肉や経絡・ツボに対し刺激を与え、顔面全体の血行を促進させます。                                      
                                また、顔面全体の血行促進だけでなく顔面部を通る経絡を刺激することにより、その経絡と繋がっている臓腑組織の機能調整や体幹、四肢への作用も期待できると考えられます。
                                もっとも特徴的と言えるのは美容の悩みに対して根本的な原因解決法を目指す事ができるところにあります。                    
                                当院の鍼灸治療は基本的に体全体を診て(望診)、話を聞き(聴診)、体に触れ(触診)施術を行っていきます。
                                体の冷えている部分や血行の悪さ、筋肉の緊張、ストレスを受けている状況などを把握し患者様の体の不調を整えます。                                        
                                そしてその不調が原因となって起こる肌の悩みに対し、鍼灸の技術による健康面からのアプローチによって根本的な解決へ導く事ができます。                                       
                                このように美容鍼灸は体の様々な問題を根本から解決していくことが大きな特徴となります。

                            </p>
                        </div>
                        <div class="menu-lower__content-inner">
                            <h4 class="menu-lower__content-inner__title">美容鍼灸の理論</h4>
                            <p class="menu-lower__content-inner__text">
                                顔面部への刺鍼は筋肉を引き締め、たるみを解消し、小顔効果やリフトアップにつながります。
                                美容鍼は鍼によって微細な傷を受けるとその部分を治そうとして再生力が高まります。
                                顔面部の血流改善によってシミ・シワ・クマなどが減少します。皮膚の再生が促進されることによって肌に潤いを与え、ハリをだし美肌効果(くすみ改善・保湿効果・キメの細かい肌作り)や美白効果にもつながるのではないかと考えられます。
                                全身治療における鍼灸の刺激は、全身の血流改善、自立神経系や内分泌系を調整すると考えられます。
                                そのため自律神経やホルモンバランスの乱れが関与しているニキビやシミ、シワなどの肌のトラブルの改善にもつながるのではないかと考えられます。

                            </p>
                        </div>
                        <div class="menu-lower__content-inner">
                            <h4 class="menu-lower__content-inner__title">美容鍼灸の副作用</h4>
                            <p class="menu-lower__content-inner__text">
                                美容鍼を受けた方の感想として、シワ・シミの軽減、クマ・くすみの改善、リフトアップ効果、むくみの改善、美白効果、毛穴の引き締め効果などがあげられています。また美容の効果以外にも、冷え症が改善した、生理が整ってきた、睡眠の質があがったなどという話を耳にします。
                                これは鍼灸治療の理論から考えるとけっして不思議な事ではありません。
                                たとえ美容の目的で鍼灸治療をうけたとしても全体的な施術を行うことで体の不調を整える事にもつながります。
                                そのため、意識していなかった美容に対する悩み以外の不調についても副作用的に改善することがあるのです。
                                鍼灸の治療機序については、いまだ解明されていない部分も少なくありません。
                                東洋医学からみた美容鍼は「気」や「血」などのバランスが崩れることで、しわ・たるみ・くま・くすみなどが出来ると考えられています。
                                鍼灸によって臓腑や気・血・津液・精などのバランスを整えると体調がよくなってきます。
                                すると、肌や髪も健康になり、きめが整い、色つやがでてきたりします。
                                鍼灸治療を行う時に、望診(見て診察をする)や問診(質問をして診察をする)から得られた情報で、体質を分類することがあります。
                                これは中医学における体質分類といえるでしょう。
                                自分の体質のタイプを把握しておけば、美容目的に限らず、病気を予防したり、不調を感じたときに自分でツボを刺激したりと応用が効きます。
                                ただし時間が経つと体質は変化していきますので定期的に体質チェックをしていきましょう。

                            </p>
                        </div>
                        
                        <div class="menu-lower__content-list-wrap">
                            <h4 class="menu-lower__content-list__title">美容の鍼（はり）の効果</h4>
                            <p class="menu-lower__content-list__text">
                                肌質や年齢を問わず施術することができます。
                                ( ※効果には個人差があります。また、美容鍼を受けるにあたってのお願いをご確認ください)

                            </p>
                            <ul class="menu-lower__content-list">
                                <li class="menu-lower__content-list-item">
                                    <h5 class="menu-lower__content-list-item__title">シミの改善予防</h5>
                                    <p class="menu-lower__content-list-item__text">
                                        シミの敵は紫外線。当たってすぐにシミになってしまうのは皮膚の新陳代謝機能が低下し、過敏になりすぎているのです。
                                        筋肉へ直接アプローチすることで肌にハリが生まれ、皮膚のターンオーバーを促進し、シミを改善し予防します。

                                    </p>
                                </li>
                                <li class="menu-lower__content-list-item">
                                    <h5 class="menu-lower__content-list-item__title">乾燥肌やニキビの改善</h5>
                                    <p class="menu-lower__content-list-item__text">
                                        乾燥肌は体内に必要な水分を保持する力が弱く皮膚表面が乾燥してしまった状態になります。
                                        皮脂の分泌が促進され肌のうるおいが保たれます。すると肌の老化予防につながり、乾燥肌やニキビを改善します。
                                    </p>
                                </li>
                                <li class="menu-lower__content-list-item">
                                    <h5 class="menu-lower__content-list-item__title">目のくまやむくみの改善・リフトアップ効果</h5>
                                    <p class="menu-lower__content-list-item__text">
                                        目の下や顔全体のたるみは内臓のたるみとも言われているほど内臓との関係性があります
                                        お腹がちゃぷちゃぷしたり消化が悪くなっていませんか？
                                        内臓を引き上げる事で血流が改善し、目のくまやむくみを改善し、リフトアップ効果、アンチエイジング効果が期待できます。
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
                        </div>
                            <div class="menu-lower__content-list-wrap">
                                <h4 class="menu-lower__content-list__title">美容鍼を受けるにあたってのお願い</h4>
                                <p class="menu-lower__content-list__text">
                                    美容鍼を受ける際に以下のことにあてはまる場合はお知らせください。
                                </p>
                            <ul class="menu-lower__content-list">
                                <li class="menu-lower__content-list-item">
                                    <h5 class="menu-lower__content-list-item__title">・歯の治療をしている</h5>
                                    <p class="menu-lower__content-list-item__text">
                                    </p>
                                </li>
                                <li class="menu-lower__content-list-item">
                                    <h5 class="menu-lower__content-list-item__title">・ピルなどホルモン剤を服用している</h5>
                                    <p class="menu-lower__content-list-item__text">
                                    </p>
                                </li>

                                <li class="menu-lower__content-list-item">
                                    <h5 class="menu-lower__content-list-item__title">・金属アレルギーがある</h5>
                                    <p class="menu-lower__content-list-item__text">
                                    </p>
                                </li>
                                <li class="menu-lower__content-list-item">
                                    <h5 class="menu-lower__content-list-item__title">・前日にお酒を飲んでいる</h5>
                                    <p class="menu-lower__content-list-item__text">

                                    </p>
                                </li>
                                <li class="menu-lower__content-list-item">
                                    <h5 class="menu-lower__content-list-item__title">・前日に十分な睡眠がとれていない</h5>
                                    <p class="menu-lower__content-list-item__text">
                                    </p>
                                </li>
                                <li class="menu-lower__content-list-item">
                                    <h5 class="menu-lower__content-list-item__title">・ピーリングを行っている場合は２，３日ほど日を空けてください</h5>
                                    <p class="menu-lower__content-list-item__text">
                                    </p>
                                </li>
                            
                                <li class="menu-lower__content-list-item">
                                    <h5 class="menu-lower__content-list-item__title"> ・結婚式や撮影などがある。</h5>
                                    <p class="menu-lower__content-list-item__text">
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <div class="menu-lower__content-inner">
                            <h4 class="menu-lower__content-inner__title">＊東洋医学の問診の１つに 望診 というものがあります。</h4>
                            <p class="menu-lower__content-inner__text">
                                歩き方や表情などからも診察して状態を確認しますが、顔の部位によって体調の変化が出るのです。<br>
                                【 額(おでこ) 】小腸や血管の状態や、膀胱の状態<br>
                                【鼻上や鼻筋 】呼吸器系のトラブル(気管支喘息や咳のではじめ)、腸の働き低下(便秘)br
                                【目下】目の下の皮膚はほかの部分より薄いため、血液の色をよく反映させます。<br>
                                【頬周り】<br>
                                赤くほてる(頬だけに赤みがさしているのはカラダが衰弱していることを示します）<br>
                                白っぽい(貧血傾向、呼吸器が弱い、皮膚が弱くなっている)br
                                吹き出もの(過食や便秘) <br>
                                毛穴(胃腸の弱まり) <br>
                                【顎(あご)】大腸の状態<br>
                                【口】<br>
                                口角の切れや口周りの吹出物・口内炎は免疫が下がっていることを表します。<br>
                                また、胃腸の働きが弱く消化が良くない状態でもあります。<br>
                                このように部位にニキビや赤み、くぼみがある時は、身体の症状と関連しているかもしれません。参考にしてみてください。<br>
                                また、美容鍼を受ける前の参考にしてみてください。

                            </p>
                        </div>  -->
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