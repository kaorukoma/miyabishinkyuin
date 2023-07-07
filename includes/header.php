<header class="header">
            <div class="header__inner">
                <div class="header__content">
                    <div class="header-left">
                        <a class="header__logo-img-link" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="みやび鍼灸院"
                                class="header__logo-img"></a>
                    </div>
                    <div class="header-right__text-wrap">
                        <!-- pc_nav -->
                    <?php wp_nav_menu(array(
                        'theme_location'=>'global',
                        'container' =>'nav',
                        'container_class'=>'gNav',
                        'menu_class'=>'gNav-list',
                        'add_li_class'=>'gNav-item',
                        'add_a_class'=>'gNav-link',
                    ));
                    ?>
                        <!-- <nav class="gNav">
                            <ul class="gNav-list">
                                <li class="gNav-item"><a class="gNav-link" href="/index.html">ホーム</a></li>
                                <li class="gNav-item"><a class="gNav-link" href="./about.html">当院について</a></li>
                                <li class="gNav-item"><a class="gNav-link" href="./index.html#menu">施術メニュー</a></li>
                                <li class="gNav-item"><a class="gNav-link" href="./price.html">料金一覧</a></li>
                                <li class="gNav-item"><a class="gNav-link" href="./faq.html">よくある質問</a></li>
                            </ul>
                        </nav> -->
                    </div>
                    <div class="header__btn-wrap">
                        <div class="btn btn-mail">
                            <a href="mailto:info@miyabi-shinkyu.com" class="btn__link btn-request__link">お問い合わせ</a>
                        </div>
                        <div class="btn button-book">
                            <a href="//liff.line.me/1661382187-R6DNWBZN?liff_id=1661382187-R6DNWBZN&is=mIXQWTIjfd" class="btn__link button-contact__link">Web予約</a>
                        </div>
                    </div>

                    <button type="button" class="hamburger-toggle  hamburger" id="js-hamburger"
                        aria-controls="js-global-menu" aria-expanded="false" area-label="メニューを開閉する">
                        <span class="hamburger__line"></span>
                    </button>
                    
                    <div class="sp-global-menu" id="js-global-menu" area-hidden="true">
                        <!-- ドロワーメニュー -->
                    <?php wp_nav_menu(array(
                        'theme_location'=>'drawer',
                        'container' =>'nav',
                        // 'container_class'=>'gNav',
                        'menu_class'=>'sp-global-menu__list',
                        'add_li_class'=>'sp-global-menu__item',
                        'add_a_class'=>'sp-global-menu__link',
                    ));
                    ?>
                     <div class="btn btn-mail">
                                        <a href="mailto:info@miyabi-shinkyu.com"
                                            class="btn__link btn-request__link">お問い合わせ</a>
                                    </div>
                                    <div class="btn button-book">
                                        <a href="//liff.line.me/1661382187-R6DNWBZN?liff_id=1661382187-R6DNWBZN&is=mIXQWTIjfd"
                                            class="btn__link button-contact__link">Web予約</a>
                                    </div>
                        <!-- <nav>
                            <ul class="sp-global-menu__list">
                                <li class="sp-global-menu__item"><a class="sp-global-menu__link" href="">ホーム</a></li>
                                <li class="sp-global-menu__item"><a class="sp-global-menu__link" href="./about.html">当院について</a></li>
                                <li class="sp-global-menu__item"><a class="sp-global-menu__link" href="./index.html#menu">施術メニュー</a>
                                </li>
                                <li class="sp-global-menu__item"><a class="sp-global-menu__link" href="./price.html">料金一覧</a></li>
                                <li class="sp-global-menu__item"><a class="sp-global-menu__link" href="./faq.html">よくある質問</a></li> -->
                                 <!-- <li class="sp-global-menu__item">
                                    <div class="btn btn-mail">
                                        <a href="mailto:info@miyabi-shinkyu.com"
                                            class="btn__link btn-request__link">お問い合わせ</a>
                                    </div>
                                </li>
                                <li class="sp-global-menu__item">
                                    <div class="btn button-book">
                                        <a href="//2.onemorehand.jp/miyabi/"
                                            class="btn__link button-contact__link">Web予約</a>
                                    </div>
                                </li>  -->
                            <!-- </ul>
                        </nav> -->
                    </div>
                    <div class="drawer-background" id="js-drawer-background">
                    </div><!-- /.drawer-background -->

                </div>
            </div>
        </header>
