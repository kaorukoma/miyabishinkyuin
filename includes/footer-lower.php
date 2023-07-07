<footer class="footer">
    <div class="footer__inner">
        <div class="footer__content">
        <a class="footer__logo-img-link" href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo-mv.png" alt="" class="footer__logo">
        </a>
            <?php wp_nav_menu(array(
                        'theme_location'=>'footer-lower',
                        'container' =>'nav',
                        'container_class'=>'footer__nav',
                        'menu_class'=>'footer__nav-list',
                        'add_li_class'=>'footer__nav-item',
                        'add_a_class'=>'footer__nav-link',
                    ));
                    ?>
            <!-- <nav class="footer__nav">
                <ul class="footer__nav-list">
                    <li class="footer__nav-item"><a class="footer__nav-link" href="<?php echo esc_url(home_url('/')); ?>">ホーム</a></li>
                    <li class="footer__nav-item"><a class="footer__nav-link" href="<?php echo esc_url(home_url('/')); ?>/about">当院について</a></li>
                    <li class="footer__nav-item"><a class="footer__nav-link" href="<?php echo esc_url(home_url('/')); ?>/#menu">施術メニュー</a></li>
                    <li class="footer__nav-item"><a class="footer__nav-link" href="<?php echo esc_url(home_url('/')); ?>/price">料金一覧</a></li>
                    <li class="footer__nav-item"><a class="footer__nav-link" href="<?php echo esc_url(home_url('/')); ?>/faq">よくある質問</a></li>
                    <li class="footer__nav-item"><a class="footer__nav-link" href="<?php echo esc_url(home_url('/')); ?>/recruit">求人情報</a></li>
                    <li class="footer__nav-item"><a class="footer__nav-link" href="//miyabishinkyu.stores.jp/">お灸の購入</a></li>
                </ul>
            </nav> -->
            <p class="footer__copy-right">
                <small>Copyright&copy;みやび鍼灸院 All rights reserved.</small>
            </p>
        </div>
    </div>
</footer>
<div id="js-scroll-fadein" class="js-scroll-fadein top">
    <img src="<?php echo get_template_directory_uri(); ?>/img/TOP.png" alt="" class="top__img">
</div>