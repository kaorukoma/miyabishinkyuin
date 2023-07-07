<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
<?php
    /*
Template Name:faq
Description:よくある質問についてのページです。
 */
    get_header(); ?>
    <? wp_head() ?>
</head>

<body>
<?php wp_body_open(); ?>
    <div class="inner lower">
    <?php get_template_part('includes/header-lower'); ?>
        <section class="mv">
            <div class="mv__inner">
            <?php
                $id = get_post_thumbnail_id();
                $img = wp_get_attachment_image_src(38, 'large');
                ?>
                <div class="mv__content mv-faq" style="background-image:url('<?php echo $img[0]; ?>');">
                    <div class="mv__content-inner">
                        <h1 class="mv__title mv-faq__title">Faq</h1>
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
                <li class="breadcrumb-list"><a class="breadcrumb-link" href="">よくある質問</a></li>
            </ol> -->
        </div>
        <main class="main">
            <section class="faq-lower">
                <div class="faq-lower__inner">
                    <div class="faq-lower-head__wrap">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/stork.png" alt="" class="faq-lower-head__img">
                        <h2 class="faq-lower-head__title-wrap">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/clover.png" alt="" class="faq-lower-head__title-logo">
                            <span class="faq-lower-head__title">よくある質問</span>
                        </h2>
                    </div>
                    <div class="faq-tab__wrap">
                        <ul class="tab-menu">
                            <li class="tab-menu__item">
                                <span class="tab-trigger js-tab-trigger is-active" data-id="tab01">
                                    妊活
                                </span>
                            </li>
                            <li class="tab-menu__item">
                                <span class="tab-trigger js-tab-trigger" data-id="tab02">
                                    美容鍼灸
                                </span>
                            </li>
                            <li class="tab-menu__item">
                                <span class="tab-trigger js-tab-trigger" data-id="tab03">
                                    カッピング
                                </span>
                            </li>
                            <li class="tab-menu__item">
                                <span class="tab-trigger js-tab-trigger" data-id="tab04">
                                    鍼について
                                </span>
                            </li>
                            <li class="tab-menu__item">
                                <span class="tab-trigger js-tab-trigger" data-id="tab05">
                                    お灸について
                                </span>
                            </li>
                            <li class="tab-menu__item">
                                <span class="tab-trigger js-tab-trigger" data-id="tab06">
                                    施術について
                                </span>
                            </li>
                        </ul><!-- .tab-menu -->

                        <div class="tab-content">
                            <div class="tab-content__item js-tab-target is-active" id="tab01">
                                <div class="faq-menu__title-wrap">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/clover.png" alt="" class="faq-menu__title-img">
                                    <h3 class="faq-menu__title lower">妊活</h3>
                                </div>
                                <dl class="faq-list">
                                    <dt class="faq-question">
                                        <span class="faq-question-logo">Q</span> 
                                        開始するタイミングはいつが良いなどございますか？
                                    </dt>
                                    <dd class="faq-answer">
                                        <span class="faq-answer-logo">A</span> 
                                        いつから始めるといいですか？と、よく質問をお受け致しますが、どのタイミングでも問題ございません。
                                        早すぎる、遅すぎることはなく、病院へ通われている方もいない方も、タイミング・人工授精・体外受精
                                        の方もいらてしおります。<br>
                                        しかし、体質を変えていくことについて少々お時間がかかるということはご理解くださいませ。
                                    </dd>
                                    <dt class="faq-question">
                                        <span class="faq-question-logo">Q</span> 
                                        病院へ行ったことがないのですが・・・
                                    </dt>
                                    <dd class="faq-answer">
                                        <span class="faq-answer-logo">A</span> 
                                        病院へ通っていない方、通ったことがない方もいらしております。
                                        まずお話を伺い検査の必要を感じた場合、促させて頂くこともございますが、病院に通うか否かを起き目になるのはご自身です。
                                        ご本人の意見を尊重して、一番良い方法をアドバイスさせていただければと考えております。
                                    </dd>
                                    <dt class="faq-question">
                                        <span class="faq-question-logo">Q</span> 
                                        病院と併用して通えますか？
                                    </dt>
                                    <dd class="faq-answer">
                                        <span class="faq-answer-logo">A</span> 
                                        もちろんです。病院に通われている方も、そうでない方もいらっしゃいます。
                                        病院に通うのが疲れてしまったという方も、これから頑張る方も気軽にお越しください。
                                        患者様のご希望を尊重して施術を行います。些細なことも是非ご相談ください。
                                    </dd>
                                    <dt class="faq-question">
                                        <span class="faq-question-logo">Q</span> 
                                        初回時に持参するものはございますか？
                                    </dt>
                                    <dd class="faq-answer">
                                        <span class="faq-answer-logo">A</span> 
                                        治療履歴（結婚・治療薬・妊娠の有無）をまとめてお持ちください。
                                        血液検査結果、基礎体温表などもございましたら、一緒に頂けますと参考となります。
                                    </dd>
                                    <dt class="faq-question">
                                        <span class="faq-question-logo">Q</span> 
                                        通い方の頻度などはございますか？
                                    </dt>
                                    <dd class="faq-answer">
                                        <span class="faq-answer-logo">A</span> 
                                        状況によりますが、体質改善の為に半年～1年を目処に週に1回程度をお勧めしております。
                                        年齢や身体の状態に合わせて、または、体外授精を近日に控えている方などは日にちをつめて通っていただくこともあります。
                                        また、採卵、IVF/ICSI時にあわせて通っていただきたい日を指定することもあります。
                                    </dd>
                                    <dt class="faq-question">
                                        <span class="faq-question-logo">Q</span> 
                                        どのような方が通われていますか？
                                    </dt>
                                    <dd class="faq-answer">
                                        <span class="faq-answer-logo">A</span> 
                                        20代～40代以上の妊娠したい方、タイミング、AIH、IVF・ICSIとさまざまな方が通っています。
                                        1人目、2人目不妊の方もいらっしゃいます。
                                        お子様連れでもかまいません。（事前に一言お声掛けください）。
                                    </dd>
                                    <dt class="faq-question">
                                        <span class="faq-question-logo">Q</span> 
                                        採卵・質の良い卵子とは？
                                    </dt>
                                    <dd class="faq-answer">
                                        <span class="faq-answer-logo">A</span> 
                                        良い卵子を作るにはストレス緩和や、栄養、血流改善が大事です。
                                    </dd>
                                    <dt class="faq-question">
                                        <span class="faq-question-logo">Q</span> 
                                        鍼が妊活のどのような点に効くのでしょうか？
                                    </dt>
                                    <dd class="faq-answer">
                                        <span class="faq-answer-logo">A</span> 
                                        鍼によって、自律神経を整える事ができます。
                                        ストレスを緩和させたり、血流を増やすことで卵の質が良くなり、内膜も厚くなります。
                                        活性酸素を抑えて老化を緩やかにするのも卵の質にとって大事な事です。
                                        また、東洋医学的な見解から申しますと、腎気があふれ、体の元気が増え妊娠しやすくなるのです。
                                    </dd>
                                    <dt class="faq-question">
                                        <span class="faq-question-logo">Q</span> 
                                        男性は通えないのでしょうか？
                                    </dt>
                                    <dd class="faq-answer">
                                        <span class="faq-answer-logo">A</span> 
                                        誠に申し訳ございません。
                                        当院は女性専門の鍼灸院ですので、男の方はお断りをしております。
                                        妊活におきましては、アドバイスはできますが、施術はできません。
                                    </dd>
                                </dl>
                            </div><!-- .tab-content__item -->
                            <div class="tab-content__item js-tab-target" id="tab02">
                                <div class="faq-menu__title-wrap">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/clover.png" alt="" class="faq-menu__title-img">
                                    <h3 class="faq-menu__title lower">美容鍼灸</h3>
                                </div>
                                <dl class="faq-list">
                                    <dt class="faq-question">
                                        <span class="faq-question-logo">Q</span> 
                                        施術時間はどのくらいかかりますか？
                                    </dt>
                                    <dd class="faq-answer">
                                        <span class="faq-answer-logo">A</span> 
                                        その方の症状に合わせた施術をしていますので、時間はそれぞれです。
                                        一人ひとり体型や体質が異なるように、一回の施術で身体が受け入れられる刺激の量も異なりますので、
                                        その時の体調・その方に合わせた施術時間ということになります。
                                        目安としては45～75分程度です。
                                    </dd>
                                    <dt class="faq-question">
                                        <span class="faq-question-logo">Q</span> 
                                        副作用はありませんか？
                                    </dt>
                                    <dd class="faq-answer">
                                        <span class="faq-answer-logo">A</span> 
                                        美容鍼灸は体の自然治癒力を活用した施術ですので副作用はありません。
                                        まれに好転反応として一時的に体がだるさを感じたり、皮下出血によって青あざが生じる場合があります。
                                    </dd>
                                    <dt class="faq-question">
                                        <span class="faq-question-logo">Q</span> 
                                        メイクはしていってもよいのでしょうか？
                                    </dt>
                                    <dd class="faq-answer">
                                        <span class="faq-answer-logo">A</span> 
                                        はい、メイクをしたままでも施術ができます。肌への消毒の際に部分的に落ちることがあります。
                                        施術後にメイク直しをされる際には化粧品をお持ちください。
                                    </dd>
                                    <dt class="faq-question">
                                        <span class="faq-question-logo">Q</span> 
                                        跡は残りませんか？
                                    </dt>
                                    <dd class="faq-answer">
                                        <span class="faq-answer-logo">A</span> 
                                        お灸等のように鍼は跡が残りませんが、皮下出血によってアザが生じる場合があります。
                                        好転反応のひとつとして自己治癒力により２週間ほどで消えてます。
                                    </dd>
                                    <dt class="faq-question">
                                        <span class="faq-question-logo">Q</span> 
                                        生理中でも大丈夫ですか？
                                    </dt>
                                    <dd class="faq-answer">
                                        <span class="faq-answer-logo">A</span> 
                                        はい、大丈夫です。お肌が過敏になっている時期なので、こちらで施術の刺激を調整します。
                                        そのため、生理中の場合は必ず一言お声掛けください。
                                    </dd>
                                    <dt class="faq-question">
                                        <span class="faq-question-logo">Q</span> 
                                        鍼はいたくないですか？感染しませんか？
                                    </dt>
                                    <dd class="faq-answer">
                                        <span class="faq-answer-logo">A</span> 
                                        美容のための専門の鍼を使用します。髪の毛よりも細く痛みを感じにくいですが、
                                        もし感じる場合はお申し付けください。
                                        鍼は日本製の一本ずつ滅菌処理された使い捨てのディスポーサブル鍼を使用します。
                                        使用後はすぐに廃棄します。
                                    </dd>
                                </dl>
                            </div><!-- .tab-content__item -->
                            <div class="tab-content__item js-tab-target" id="tab03">
                                <div class="faq-menu__title-wrap">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/clover.png" alt="" class="faq-menu__title-img">
                                    <h3 class="faq-menu__title lower">カッピング</h3>
                                </div>
                                <dl class="faq-list">
                                    <dt class="faq-question">
                                        <span class="faq-question-logo">Q</span> 
                                        生理痛の場合、何回吸玉（カッピング）をするとよくなりますか？
                                    </dt>
                                    <dd class="faq-answer">
                                        <span class="faq-answer-logo">A</span> 
                                        個人差がありますが、生理2～3周期ほどで改善がみられます。生理前からお受けになることをおすすめします。
                                    </dd>
                                    <dt class="faq-question">
                                        <span class="faq-question-logo">Q</span> 
                                        吸い玉（カッピング）をしたあとは飲酒をしても大丈夫ですか？
                                    </dt>
                                    <dd class="faq-answer">
                                        <span class="faq-answer-logo">A</span> 
                                        飲酒は控えめにしてください。
                                    </dd>
                                    <dt class="faq-question">
                                        <span class="faq-question-logo">Q</span> 
                                        吸い玉（カッピング）をした当日の入浴はしても大丈夫ですか？
                                    </dt>
                                    <dd class="faq-answer">
                                        <span class="faq-answer-logo">A</span> 
                                        大丈夫ですが、身体に負担がかかりますので、長時間湯船につかるのは控えましょう。
                                    </dd>
                                    <dt class="faq-question">
                                        <span class="faq-question-logo">Q</span> 
                                        効果はどのくらい続きますか？
                                    </dt>
                                    <dd class="faq-answer">
                                        <span class="faq-answer-logo">A</span> 
                                        個人差がありますが、およそ1週間程度です。
                                    </dd>
                                    <dt class="faq-question">
                                        <span class="faq-question-logo">Q</span> 
                                        吸い玉（カッピング）は何回受けるとよいですか？
                                    </dt>
                                    <dd class="faq-answer">
                                        <span class="faq-answer-logo">A</span> 
                                        体調・症状にもよりますが、吸い玉（カッピング）の跡が消えたころに来院していただき、
                                        3か月を1クールとして施術されるのが望ましいです。
                                        3か月続けたあとも予防のために月に1回程度受けることをおすすめします。
                                    </dd>
                                    <dt class="faq-question">
                                        <span class="faq-question-logo">Q</span> 
                                        副作用はありませんか？
                                    </dt>
                                    <dd class="faq-answer">
                                        <span class="faq-answer-logo">A</span> 
                                        直接の副作用はありませんが、体がよくなっていく過程で、めまい・かゆみ・だるさなどがあらわれることがあります。
                                        その場合は、およそ2～3日でおさまり、その後次第に具合がよくなります。
                                    </dd>
                                    <dt class="faq-question">
                                        <span class="faq-question-logo">Q</span> 
                                        当日はどのような格好でいくのがよいですか？
                                    </dt>
                                    <dd class="faq-answer">
                                        <span class="faq-answer-logo">A</span> 
                                        当院では着替えを用意しております。施術前に着替えていただきますので、着替えやすい服装でいらしてください。
                                    </dd>
                                    <dt class="faq-question">
                                        <span class="faq-question-logo">Q</span> 
                                        吸い玉（カッピング）の跡はどの位で消えますか？
                                    </dt>
                                    <dd class="faq-answer">
                                        <span class="faq-answer-logo">A</span> 
                                        個人差がありますが、7日前後です。ただ、具合の悪い場所は長く残ることもあります。
                                    </dd>
                                    <dt class="faq-question">
                                        <span class="faq-question-logo">Q</span> 
                                        吸い玉（カッピング）が適さないことはありますか？
                                    </dt>
                                    <dd class="faq-answer">
                                        <span class="faq-answer-logo">A</span> 
                                        原則として下記にあてはまる方はお受けになれません。
                                        ＊悪化した慢性病をお持ちの方
                                        ＊飲酒されている方
                                        ＊衰弱している方
                                        ＊強度の全身性貧血の場合
                                        ＊発熱のある方
                                        ＊すぐに外科手術を必要とされるような急性疾患
                                        ＊心臓や血圧が正常でない方
                                        ＊妊娠中の方
                                        ＊激しい運動のあとや食後は避けられた方がいいです。
                                    </dd>
                                    <dt class="faq-question">
                                        <span class="faq-question-logo">Q</span> 
                                        1クールと2クールの違いはなんですか？
                                    </dt>
                                    <dd class="faq-answer">
                                        <span class="faq-answer-logo">A</span> 
                                        1クール（15分）の場合は主訴を中心に1回分(約20個)を行っていきます。
                                        2クール（15分×2）の場合は主訴1回+その他気になっている部分で1回と2回分行います。
                                    </dd>
                                </dl>
                            </div><!-- .tab-content__item -->
                            <div class="tab-content__item js-tab-target" id="tab04">
                                <div class="faq-menu__title-wrap">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/clover.png" alt="" class="faq-menu__title-img">
                                    <h3 class="faq-menu__title lower">鍼について</h3>
                                </div>
                                <dl class="faq-list">
                                    <dt class="faq-question">
                                        <span class="faq-question-logo">Q</span> 
                                        鍼で感染しませんか？
                                    </dt>
                                    <dd class="faq-answer">
                                        <span class="faq-answer-logo">A</span> 
                                        鍼は使い捨てのものを使用しておりますし、鍼をおくパレットも使い捨てですので安心して通ってください。
                                    </dd>
                                    <dt class="faq-question">
                                        <span class="faq-question-logo">Q</span> 
                                        鍼は痛いですか？
                                    </dt>
                                    <dd class="faq-answer">
                                        <span class="faq-answer-logo">A</span> 
                                        鍼は痛くありません。鍼先は髪の毛よりも細いものを使います。
                                        ただし、鍼には特有の響きというものがあります。痛みとは違い、重だるく感じるものですが、初めての方はどうしても「痛い」といってしまいます。
                                        また、ささない鍼というのもあります。小児鍼として子供用に昔から使用されている鍼です。
                                    </dd>
                                </dl>
                            </div>
                            <div class="tab-content__item js-tab-target" id="tab05">
                                <div class="faq-menu__title-wrap">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/clover.png" alt="" class="faq-menu__title-img">
                                    <h3 class="faq-menu__title lower">お灸について</h3>
                                </div>
                                <dl class="faq-list">
                                    <dt class="faq-question">
                                        <span class="faq-question-logo">Q</span> 
                                        お灸は熱いですか？痕には残りませんか？
                                    </dt>
                                    <dd class="faq-answer">
                                        <span class="faq-answer-logo">A</span> 
                                        昔、おばあさんが家でお灸をして、すごい跡がついていたのを見たことがあるとか、
                                        熱いのを絶えていたのを見て育ったという方が中にはいるかもしれませんね。
                                        お灸には火を使うものですので、熱さを感じるのが普通です。
                                        当院では、できるだけ直接するお灸ではなく、間接的にするお灸を使い、
                                        痕は残らない暖かさが心地よい治療を心がけています。
                                        ただ、どうしても、直接行ったほうが効果がある場合は直接お灸をすることがありますが、
                                        お米くらいの大きさのお灸で、痕の残らないように心がけています。
                                    </dd>
                                </dl>
                            </div>
                            <div class="tab-content__item js-tab-target" id="tab06">
                                <div class="faq-menu__title-wrap">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/clover.png" alt="" class="faq-menu__title-img">
                                    <h3 class="faq-menu__title lower">施術にあたって</h3>
                                </div>
                                <dl class="faq-list">
                                    <dt class="faq-question">
                                        <span class="faq-question-logo">Q</span> 
                                        施術後に運動をしても平気ですか？
                                    </dt>
                                    <dd class="faq-answer">
                                        <span class="faq-answer-logo">A</span> 
                                        施術後に運動できるような症状でない場合は運動しない方がいいです。
                                        体調がよくなってから、運動するようにしましょう。また、体調がよくても、鍼灸刺激した直後ですから、
                                        身体にさまざまな反応が出ますし、疲労もします。身体も軽くなり、つい動きすぎてしまう傾向があるので、
                                        施術後に激しく動かすことは控えた方がよいです。
                                    </dd>
                                    <dt class="faq-question">
                                        <span class="faq-question-logo">Q</span> 
                                        施術後にお風呂に入っても平気ですか？
                                    </dt>
                                    <dd class="faq-answer">
                                        <span class="faq-answer-logo">A</span> 
                                        はい、大丈夫です。鍼は注射とは違います。鍼の刺した穴は一瞬でふさがりますから、入浴しても差し支えありません。ただ、一時間ほどお時間をあけてからお風呂に入った方がいいです。
                                    </dd>
                                    <dt class="faq-question">
                                        <span class="faq-question-logo">Q</span> 
                                        生理中でも大丈夫ですか？
                                    </dt>
                                    <dd class="faq-answer">
                                        <span class="faq-answer-logo">A</span> 
                                        はい、大丈夫です。生理痛の施術もできますので、特に心配せず通ってください。
                                    <dt class="faq-question">
                                        <span class="faq-question-logo">Q</span> 
                                        着替えは必要ですか？
                                    </dt>
                                    <dd class="faq-answer">
                                        <span class="faq-answer-logo">A</span> 
                                        着替えはこちらで用意してありますので、普段の格好でいらしてください。施術の際に、下着をつけたままで構いませんが、ブラトップの場合は脱いでいただきますので、予めご了承ください。
                                    <dt class="faq-question">
                                        <span class="faq-question-logo">Q</span> 
                                        時間はどのくらいかかりますか？
                                    </dt>
                                    <dd class="faq-answer">
                                        <span class="faq-answer-logo">A</span> 
                                        その人の症状にあった施術をしますので、時間は人それぞれです。長い時間やってもらったほうが、お得な感じがしますが、一人ひとり体型や体質が異なるように、一回の施術で身体が受け入れられる刺激の量も異なりますので、その時の体調・その人にあった施術時間ということになります。目安としては30～45分程度だと思ってください。
                                    </dd>
                                    <dt class="faq-question">
                                        <span class="faq-question-logo">Q</span> 
                                        どのくらいの間隔で通えばよいですか？
                                    </dt>
                                    <dd class="faq-answer">
                                        <span class="faq-answer-logo">A</span> 
                                        急性や、重症など症状によりますが、はじめは期間を詰めて通っていただき、経過がよくなるにつれて徐々に日にちをあけていきます。最終的によくなったら、様子を見てくださいと、いいます。そのあとは、ご自身の判断で再発防止や健康の維持のために月に１～２回通っていただいても結構です。自分の判断で、痛くなったら施術し、よくなったら施術をやめるという通い方は、治るものも治らなくしてしまいますので、お気をつけください。
                                    </dd>
                                    <dt class="faq-question">
                                        <span class="faq-question-logo">Q</span> 
                                        どんなときに病院へ行き、どんなときに鍼灸院へ行くのでしょうか？
                                    </dt>
                                    <dd class="faq-answer">
                                        <span class="faq-answer-logo">A</span> 
                                        緊急な手術が必要な場合や、集中治療が必要なもの、隔離を要する伝染病などのときは病院へ行ってください。
                                        また、事故で外傷を受けたときもまずは病院で検査をしてください。
                                        そのほかのものでは鍼灸院で施術できるものがあります。
                                    </dd>
                                    <dt class="faq-question">
                                        <span class="faq-question-logo">Q</span> 
                                        クレジットカードは使えますか？
                                    </dt>
                                    <dd class="faq-answer">
                                        <span class="faq-answer-logo">A</span> 
                                        お支払いは、各種カードもお使いいただけます。
                                        Paypay,楽天pay,auPay,Visa, Master,AMEX,Diners,DISCOVER,JCB,
                                        Suica,PASUMO,QUicPay
                                        </dd>
                                </dl>
                            </div>
                        </div><!-- .tab-content -->
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



    </div>
    <?php get_template_part('includes/footer-lower'); ?>
    <?php get_footer(); ?>
    <?php wp_footer(); ?>

</body>

</html>