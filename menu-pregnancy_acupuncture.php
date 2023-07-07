<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
<?php 
    /*
Template Name:menu-pregnancy_acupuncture
Description:妊活鍼灸についてのページです。
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
                            <h4 class="menu-lower__content-inner__title">当院での不妊鍼灸施術</h4>
                            <p class="menu-lower__content-inner__text">
                                鍼灸施術では、全身の気、血液、水のめぐりを整えていきます。
                                そうして、人間が本来もっている自己治癒能力を高め、心身のバランスを整えていきます。
                                みやび鍼灸院の鍼灸施術では、全身の血液の流れを良くする温灸・鍼施術を中心に施術を行います。
                                冷えによる血行の悪さは不妊症の方に多くみられる症状です。冷えにより子宮、卵巣がうまく働いていないことが多く、血液の流れを良くする施術は冷えの解消に最も有効だといえます。
                                全身に停滞していた流れを良くすることで、卵巣や子宮などの臓器に元々持っていた本来の働きを取り戻し、元気になることで妊娠のしやすい体に変わっていきます。 
                                温灸を使い、熱を入れ血流を良くします。心地よい刺激で跡は残りません。
                                髪の毛より細い鍼を使いますので痛みはまったくありません。鍼はもちろん使い捨てです。<br>
                                スタッフによるカウンセリング、心のケアも妊娠への近道です。<br>
                                不妊以外のお悩みもご相談下さい。


                            </p>
                        </div>
                        <div class="menu-lower__content-inner">
                            <h4 class="menu-lower__content-inner__title">鍼灸施術による成果</h4>
                            <p class="menu-lower__content-inner__text">
                                卵子の質を上げる<br>
                                黄体機能不全の改善<br>
                                生理周期の乱れを整える（ホルモンバランスの崩れ、低温期・高温期の乱れを整える）<br>
                                排卵周期の乱れを整える（早すぎても遅すぎても流産しやすくなります）<br>
                                薬による副作用の対処（卵巣の腫れを早くもとの状態に戻す、生理周期の乱れを整える、等）<br>
                                内膜を厚くする<br>
                                赤ちゃんがなかなかできないことへの不安・ストレスの緩和<br>
                                ＊効果には個人差があります。
                            </p>
                        </div>
                        
                        <div class="menu-lower__content-inner">
                            <h4 class="menu-lower__content-inner__title">不妊鍼灸施術の効果</h4>
                            <p class="menu-lower__content-inner__text">
                                鍼や灸による不妊症への効果の新聞の記事を一部引用致します。<br>
                                体外受精を５回以上行っても妊娠できなかった不妊症の女性１１４人に針施術を行ったところ、約４割にあたる４９人が妊娠に至ったと、名古屋市の明生鍼灸院と明治鍼灸大の研究グループが１０日、大阪市内で開かれている日本生殖医学会で報告した.。
                                ４９人のうち４人は自然妊娠だったほか、３０人は施術後１回目の体外受精で妊娠に成功したという。不妊施術の専門家が集まる学会で、針施術による効果を示すデータが発表されるのは珍しい。
                                報告された１１４人の施術実績は、１９９８年２月～２００６年６月に、同鍼灸院を訪ねた不妊患者のうち体外受精を５回以上行っても妊娠しなかった女性のもので、施術は、週１～２回のペースで行われ、腹部や足などにある婦人科疾患に効果があるとされるツボを針で刺激した。

                                妊娠した４９人の内訳は、自然妊娠４人のほか、人工授精での妊娠が１人、体外受精が４４人。
                                このうち施術後１回目の体外受精で妊娠した３０人のうち９人は、針施術の開始前に１０回以上も体外受精を行いながら妊娠できなかった深刻な不妊症だった。<br>

                                （参照：不妊症鍼の効果 2006年11月10日 読売新聞）
                            </p>
                            <p class="menu-lower__content-inner__text">施術を続けても子宝に恵まれない不妊症の女性に対す鍼灸施術が、妊娠率を飛躍的に向上させる効果のあることが名古屋市瑞穂区、明生鍼灸院と愛知県豊田市、竹内病院トヨタ不妊センターの共同研究で分かった。
                                不妊症への鍼灸効果を、まとまった症例数による科学的データで検証した研究は初めて。
                                研究は、結婚後五年、不妊専門機関で二年施術しても妊娠しない不妊症患者で、体外受精など高度な生殖医療を三回以上受けても妊娠できず、子宮の内膜が薄いことが原因と推定される五十七人（平均年齢三十四・七歳）が対象。
                                患者たちに鍼灸施術を半年以上続けたところ、三十一人の内膜が厚さ六ミリ以上など妊娠への一定基準に改善。うち十四人（同三十三・七歳）が、冷凍保存した自分の胚を移植して妊娠することができた。
                                このほか、不妊の原因が分からず、月経異常や頭痛、肩こりなど、健康に問題がないのに感じる体の不調（不定愁訴）がみられる患者二十四人（同三十五・二歳）への鍼灸施術でも、七人（同三十六・一歳）が妊娠した。
                                鍼灸施術が子宮の血流を活性化させ内膜の改善に至った可能性があるほか、妊娠より先に不定愁訴が治った例が八割もあった。
                                高度な生殖医療の妊娠率は２０％－３０％。これを三回受けた後は妊娠率が著しく下がるとされる。
                                流産を二度経験し、鍼灸施術で内膜が整い結婚六年目の今冬、出産した愛知県内の女性（四十一）は「排卵誘発剤などの連続使用で体調を崩し、身も心も限界だった。ゆっくり治す東洋医学で気持ちがほぐれた」と振り返る。
                                竹内病院センターの越知所長は「西洋医学を建物の補修に例えるなら、東洋医学は土台の改良工事。むやみに薬を増やすのでなく、自然の治癒力を引き出す東洋医学の知恵が役立てば」と話す。<br>

                                （参照：中日新聞（平成１３年１２月２８日号））
                            </p>
                        </div>
                        <div class="menu-lower__content-inner">
                            <h4 class="menu-lower__content-inner__title">着床日・採卵前の施術が効果的</h4>
                            <p class="menu-lower__content-inner__text">
                                鍼灸施術を（ＡＲＴ、体外受精や顕微授精の）胚盤胞移植日に行うと効果的といわれています。<br> 
                                鍼灸施術の本来の目的は体質改善ですが、胚盤胞の移植日に施術することで着床しやすくしたり、
                                採卵前に施術することでいい卵がとれるように施術をします。 <br>
                                (着床日は胚盤胞移植は当日か次の日くらいです。着床日が判らない方はお尋ね下さい。）

                            </p>
                        </div>
                        <div class="menu-lower__content-inner">
                            <h4 class="menu-lower__content-inner__title">おうちでできるアドバイスもします</h4>
                            <p class="menu-lower__content-inner__text">
                                鍼灸施術のみならず、おうちでできるお灸の仕方や、運動法、食事、睡眠、生活の仕方などの指導もしています。<br> 
                                卵が悪いのか、お腹が冷えているのか。 それとも、お腹が硬いのか、お腹に力がないのか、など不妊の原因に対して東洋医学的な考え方をもとに、
                                鍼灸でご自身が持っている体質の改善をすることで着床・無事出産できるように施術をします。<br>
                                灸点をおろし、お灸の仕方をアドバイスします。<br>
                                それだけでなく、おうちでできること、たとえば、卵子の質を上げるにはどうしていったらいいのか。 
                                流産しないようにするにはどうしたらいいのかなど、ご自身の体質と照らし合わせて、改善する為に、ご自宅でできることもアドバイスします。

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