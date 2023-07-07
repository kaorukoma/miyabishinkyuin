<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
<?php get_header(); ?>
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
                    $img = wp_get_attachment_image_src(41, 'large');
                    ?>
                    <div class="mv__content mv-blog" style="background-image:url('<?php echo $img[0]; ?>');">
                        <div class="mv__content-inner">
                            <h1 class="mv__title mv-blog__title">Blog</h1>
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
                <li class="breadcrumb-list"><a class="breadcrumb-link" href="">ブログ一覧</a></li>
            </ol> -->
        </div>


        <main class="main">
            <section class="blog-lower">
                <div class="blog-lower__inner">
                    <div class="blog-lower-head__wrap archive">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/stork.png" alt="" class="blog-lower-head__img archive">
                        <h2 class="blog-lower-head__title-wrap archive">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/clover.png" alt="" class="blog-lower-head__title-logo">
                            <span class="blog-lower-head__title">ブログ</span>
                        </h2>
                    </div>
                    <div class="blog-list__wrap lower">
                        <?php
                        if (get_query_var('paged')) {
                            $paged = get_query_var('paged');
                        } else {
                            $paged = 1;
                        }

                        $args = array(
                            // 投稿の取得条件
                            'paged'     => $paged,
                        );
                        $query = new WP_Query($args);
                        ?>
                        <ul class="blog-list lower">
                        <?php if (have_posts()) :
                        while (have_posts()) : the_post(); ?>
                            <li class="blog-list__item lower">
                                <a class="blog-text__link" href="<?php echo esc_url(get_permalink()); ?>">
                                <figure class="blog-list__img__wrap">
                                <?php if (has_post_thumbnail()) : ?>
                                            <?php the_post_thumbnail(); ?>
                                        <?php else : ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/DSC05919.jpg" alt="" class="blog-list__img">
                                        <?php endif; ?>
                                        </figure>
                                    <div class="blog-body__top">
                                        <div class="blog-body__top-left">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/clock.png" alt="" class="blog-list__img-clock">
                                            <time date-time="<?php echo get_the_date('Y-m-d'); ?>" class="blog-list__date"><?php echo esc_html(get_the_date()); ?></time>
                                        </div>
                                        <div class="blog-body__top-right">
                                            <span class="blog-list__category">
                                            <?php $cats = get_the_category(); ?>
                                            <?php echo $cats[0]->name; ?>
                                            </span>
                                        </div>
                                    </div>
                                    <h3 class="blog-list__title">
                                        <?php
                                            if (mb_strlen($post->post_title, 'UTF-8') > 30) {
                                                $title = mb_substr($post->post_title, 0, 30, 'UTF-8');
                                                echo $title . '……';
                                            } else {
                                                echo $post->post_title;
                                            }
                                            ?></h3>
                                    <p class="blog-text">
                                    <?php
                                            //brだけ残す
                                            if (mb_strlen($post->post_content, 'UTF-8') > 60) {
                                                $content = mb_substr(strip_tags($post->post_content, '<br>'), 0, 60, 'UTF-8');
                                                echo $content . '……';
                                            } else {
                                                echo strip_tags($post->post_content, '<br>');
                                            }
                                            ?>
                                    </p>
                                </a>
                            </li>
            
                            <?php endwhile;
                            else : ?>
                            <p>記事はありません。</p>
                            <?php
                            endif;
                            ?>
                            
                        </ul>
                        
                        <?php get_template_part('sidebar'); ?>
						<?php
                                        $args = array(
                                        'mid_size' => 2,
                                        'prev_text' => '&lt;前へ',
                                        'next_text' => '次へ&gt;',
                                        'screen_reader_text' => ' ',
                                        );
                                        the_posts_pagination($args);
                                    ?>  
                        <!-- <nav class="navigation pagination" aria-label="">
                            <div class="nav-links">
                                <a class="prev page-numbers" href="">&lt;&lt;前へ</a>
                                <a class="page-numbers" href="">1</a>
                                <a class="page-numbers" href="">2</a>
                               <span class="page-numbers dots">...</span> 
                                <span aria-current="page" class="page-numbers current">3</span>
                                <a class="page-numbers" href="">4</a> 
                                <span class="page-numbers dots">...</span>
                                <a class="page-numbers" href="">5</a>
                                 <a class="page-numbers" href="">8</a>
                            <a class="page-numbers" href="">9</a>
                            <a class="page-numbers" href="">10</a>
                                <a class="next page-numbers" href="">次へ&gt;&gt;</a>
                            </div>
                        </nav>  -->
                       
                </div>
                
                
                       
            </div>
            
        </section> 
       
    </main>
    

    <section class="contact lower archive">
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
<!--     <section class="prevention">
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