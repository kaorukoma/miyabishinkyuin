<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
<?php 
    /*
Template Name:menu-cupping_therapy
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
            <section class="menu-lower cupping">
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
                            <span class="menu-lower__content-title"><?php echo get_field("treatment_ subtitle"); ?></span>
                        </h3>
                        <?php echo the_content(); ?>
                        <!-- <div class="menu-lower__content-inner">
                            <div class="menu-lower__content-list-wrap">
                                <h4 class="menu-lower__content-list__title">カッピング（吸玉・吸角）で期待できる効果</h4>
                                <p class="menu-lower__content-list__text">
                                </p>
                                <ul class="menu-lower__content-list">
                                    <li class="menu-lower__content-list-item">
                                        <h5 class="menu-lower__content-list-item__title"> ・免疫機能が高まる</h5>
                                        <p class="menu-lower__content-list-item__text">
                                            血管が広がり、血行が良くなることにより、免疫機能に働いている細胞も全身に運ばれ免疫力の活性化が期待できます。  
                                        </p>
                                    </li>
                                    <li class="menu-lower__content-list-item">
                                        <h5 class="menu-lower__content-list-item__title">・血液をきれいにする</h5>
                                        <p class="menu-lower__content-list-item__text">
                                            吸玉の吸引圧によって血管を広げ患部を中心に血液循環を促します
                                            糖尿病による知覚障害や、高脂血症による動脈硬化の予防にも有用性があります。            
                                        </p>
                                    </li>
                                    <li class="menu-lower__content-list-item">
                                        <h5 class="menu-lower__content-list-item__title">・血行をよくし体を温める</h5>
                                        <p class="menu-lower__content-list-item__text">
                                            血液は細胞を養う栄養を運搬しています。細胞は血液から栄養を受け取り代謝することで生命活動を維持するエネルギーを作りだし代謝した結果、作られる不要な物質を血液中に出します。血行が悪い状態が続くと様々な症状に影響します。
                                            吸玉の吸引圧は細胞の代謝をスムーズにし、患部の状態を速やかに改善する効果が期待できます。
                                        </p>
                                    </li>
                                    <li class="menu-lower__content-list-item">
                                        <h5 class="menu-lower__content-list-item__title">・皮膚の若さ、潤いを保つ</h5>
                                        <p class="menu-lower__content-list-item__text">
                                            吸玉(カッピング)を行うことで皮膚血管が広がり、血液の循環量が増える事により皮膚温も上昇します。
                                            それらによって栄養が十分に運搬されるようになると皮膚の新陳代謝が頻繁に行われるようになり皮膚の状態もよくなります。
                                        </p>
                                    </li>
                                    <li class="menu-lower__content-list-item">
                                        <h5 class="menu-lower__content-list-item__title">・関節の働きを円滑にする</h5>
                                        <p class="menu-lower__content-list-item__text">
                                            関節を動かした時に痛みが生じている場合、関節周りの血流が悪くなっていることがあります。
                                            吸玉を症状のでている患部に吸着させることで関節液が働き関節の症状が改善されます。
                                        </p>
                                    </li>
                                    <li class="menu-lower__content-list-item">
                                        <h5 class="menu-lower__content-list-item__title">  ・内臓諸機関を活発にする</h5>
                                        <p class="menu-lower__content-list-item__text">
                                            皮膚には内臓に関係する神経系が多く存在しています。吸玉を行うことで神経系に伝わり内臓の機能調整が行われます。
                                        </p>
                                    </li>
                                    <li class="menu-lower__content-list-item">
                                        <h5 class="menu-lower__content-list-item__title">・鎮痛作用により肩こりや腰痛の改善</h5>
                                        <p class="menu-lower__content-list-item__text">
                                            血行をよくすることで発痛物質を遠ざけ痛みを徐々に和らげます。
                                        </p>
                                    </li>
                                    <li class="menu-lower__content-list-item">
                                        <h5 class="menu-lower__content-list-item__title">・そのほかにも</h5>
                                        <p class="menu-lower__content-list-item__text">
                                            ・血管をはじめ組織を強化する<br>
                                            ・自律神経を正常に調節する<br>
                                            ・ホルモンバランスが整う<br>
                                            ・腰痛や肩こりなどからくる諸症状の改善<br>
                                            ・病気の予防<br>
                                            これらに効果が期待できます。<br>
                                        </p>
                                        <p class="menu-lower__content-inner__text">

                                            吸玉を行うと患部に反応が残ります。東洋医学的には”瘀血(おけつ)”、西洋医学的には”古血(ふるち)”といったものが吸玉の吸引圧によって皮膚上に引き上げられたものと考えられます。
                                            施術後、この反応の色味や状態で身体の調子がわかると言われています。
                                            薄いピンク色であれば血流は良好ですが、赤や紫、黒と濃くなっていくほどその身体の部分の状態がよくありません。
                                            また、色が変化しない場合は身体の深部の方から悪くなっていることも考えられるので注意が必要です。
                                            吸玉の痕は数日～1週間程度で跡形もなく消えていきますのでご安心ください。<br>
            
                                            ＊効果には個人差があります
                                        </p>
                                    </li>
                                </ul>
                            </div>
    
                            <h4 class="menu-lower__content-inner__title"></h4>
                            <p class="menu-lower__content-inner__text"> 
                            </p>
                        </div>
                        <div class="menu-lower__content-list-wrap">
                            <h4 class="menu-lower__content-list__title">施術後の反応</h4>
                            <p class="menu-lower__content-list__text">
                            </p>
                            <ul class="menu-lower__content-list">
                                <li class="menu-lower__content-list-item">
                                    <h5 class="menu-lower__content-list-item__title">だるさ（疲労感）</h5>
                                    <p class="menu-lower__content-list-item__text">
                                        鍼などの施術後にも起こりやすい症状ですが、吸玉もだるさや疲労感が出ることがあります。これは、<br>
                                        ・血流量が多くなることで老廃物や疲労物質の処理によるもの<br>
                                        ・内分泌、神経系からのホルモン調整が起こった結果身体のリズムが整ったことで生じた<br>
                                        ・強く吸いすぎた、施術時間が長すぎた、
                                        などが原因と考えられます。<br>
                                        身体が物理的な刺激に対して起こした反応です。だるさが取れるととともに、症状の改善がみられます。
                                        だるさという症状がすべて悪いわけではありません。症状が出てしまった場合はゆっくり身体を休めて下さい。<br>
        
                                    </p>
                                </li>
                                <li class="menu-lower__content-list-item">
                                    <h5 class="menu-lower__content-list-item__title">貧血（ふらつき）</h5>
                                    <p class="menu-lower__content-list-item__text">
                                        カッピング・吸玉は陰圧にするため血管が拡張するので、一時的に貧血のような症状を引き起こすことがあります。

                                    </p>
                                </li>
                                <li class="menu-lower__content-list-item">
                                    <h5 class="menu-lower__content-list-item__title">食欲がわく、お腹がすく、眠くなる</h5>
                                    <p class="menu-lower__content-list-item__text">
                                        カッピング・吸玉はとても気持ちよく、リラックスできるので、副交感神経優位になります
                                        そのため、眠くなり消化器官の働きが活発になり食欲が増します。
                                        不眠や寝つきの悪さで来院した方が施術中によく寝ていたり、食欲のない方がお腹がすくことなどがみられます。
                                            </p>
                                </li>
                                <li class="menu-lower__content-list-item">
                                    <h5 class="menu-lower__content-list-item__title">水泡ができることがある</h5>
                                    <p class="menu-lower__content-list-item__text">
                                        水泡ができる場合は施術の刺激量が強すぎた場合や、内臓からの反射作用ということが考えられます。
                                        水泡ができてしまった場合はつぶさず、絆創膏等で覆っておき、保湿しながら様子を見てください。
        
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
                            <h4 class="menu-lower__content-list__title">禁忌事項</h4>
                            <p class="menu-lower__content-list__text">
                                安心して施術を受けてもらうために・・・
                                病気や症状によってはカッピングを受けれないことがあります。
                            </p>
                            <ul class="menu-lower__content-list">
                                <li class="menu-lower__content-list-item">
                                    <h5 class="menu-lower__content-list-item__title">・早急に外科的手術を必要とする場合</h5>
                                    <p class="menu-lower__content-list-item__text">
                                    </p>
                                </li>
                                <li class="menu-lower__content-list-item">
                                    <h5 class="menu-lower__content-list-item__title">
                                    ・心臓弁膜症など心臓に持病がある場合</h5>
                                    <p class="menu-lower__content-list-item__text">
                                    </p>
                                </li>
                                <li class="menu-lower__content-list-item">
                                    <h5 class="menu-lower__content-list-item__title">
                                        ・強度の動脈硬化・静脈瘤・動脈瘤がある場合、陰圧により血管壁が傷つき出血するかもしれまい為
                                    </h5>
                                    <p class="menu-lower__content-list-item__text">
                                    </p>
                                </li>
                                <li class="menu-lower__content-list-item">
                                    <h5 class="menu-lower__content-list-item__title">
                                        ・全身性貧血の場合、白血病のかたも、酸素を運ぶ赤血球が少ない全身性貧血の場合、酸素が頭部へ行きにくくなるため貧血が悪化したり、別の症状が起こる可能性があります。
                                    </h5>
                                    <p class="menu-lower__content-list-item__text">
                                    </p>
                                </li>
                                <li class="menu-lower__content-list-item">
                                    <h5 class="menu-lower__content-list-item__title">
                                        ・風邪やインフルエンザ、ノロウィルスの感染による吐き下しなど体調が極端に弱っている場合は、かえって疲れたり症状を悪化させることがあります。
                                    </h5>
                                    <p class="menu-lower__content-list-item__text">
                                    </p>
                                </li>
                                <li class="menu-lower__content-list-item">
                                    <h5 class="menu-lower__content-list-item__title">
                                        ・悪性腫瘍
                                    </h5>
                                    <p class="menu-lower__content-list-item__text">
                                    </p>
                                </li>
                                <li class="menu-lower__content-list-item">
                                    <h5 class="menu-lower__content-list-item__title">
                                        ・妊娠中、特に初期は腰部・腹部は禁忌です。ただし、生理中は問題ありません。

                                    </h5>
                                    <p class="menu-lower__content-list-item__text">
                                    </p>
                                </li>
                                <li class="menu-lower__content-list-item">
                                    <h5 class="menu-lower__content-list-item__title">
                                        ・食後や激しい運動した直後は1時間くらい置いてから施術にいらしてください。

                                    </h5>
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
        </section>
 -->








    </div>
    <?php get_template_part('includes/footer-lower'); ?>
    <?php get_footer(); ?>
    <?php wp_footer(); ?>
</body>

</html>