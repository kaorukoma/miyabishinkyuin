<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
<?php
    /*
Template Name:price
Description:料金についてのページです。
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
                $img = wp_get_attachment_image_src(8, 'large');
                ?>
                <div class="mv__content mv-price" style="background-image:url('<?php echo $img[0]; ?>');">
                    <div class="mv__content-inner">
                        <h1 class="mv__title mv-price__title">Price</h1>
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
                <li class="breadcrumb-list"><a class="breadcrumb-link" href="">料金一覧</a></li>
            </ol> -->
        </div>
        <main class="main">
            <section class="price-lower">
                <div class="price-lower__inner">
                    <div class="price-lower-head__wrap">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/stork.png" alt="" class="price-lower-head__img">
                        <h2 class="price-lower-head__title-wrap">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/clover.png" alt="" class="price-lower-head__title-logo">
                            <span class="price-lower-head__title">料金一覧</span>
                        </h2>
                    </div>
                    <p class="price-lower-head__text">
                        お支払いは、各種カードもお使いいただけます。<br>
                        Paypay,楽天pay,auPay,Visa,master,アメックス,Diners,DISCOVER,JCB,<br>
                        Suica,PASUMO,iD,Quicpay
                    </p>

                    <div class="price-menu__wrap lower">
                        <div class="price-menu__title-wrap">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/clover.png" alt="" class="price-menu__title-img">
                            <h3 class="price-menu__title lower">施術メニュー</h3>
                        </div>
                        <p class="price-menu__attention lower">
                            鍼灸メニューは別途3300円の初診料がかかります。<br> 相談に応じて子連れ可能です。<br>
                            ※当日キャンセルは2200円がかかります。
                        </p>

                        <ul class="price-menu__list">
                        <?php
							$treatmentFee = get_field('treatment_fee');
						?>
                        <?php
							$treatmentTitles = get_field('treatment_titles');
						?>

                            <li class="price-menu__item">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/clover.png" alt="" class="price-menu__item-img">
                                <span class="price-menu-name lower"><?php echo $treatmentTitles ['acupuncture_title'];?><img
                                        class="price-menu__list-line-1 line" src="<?php echo get_template_directory_uri(); ?>/img/price-menu__list-line-1.png"
                                        alt=""></span>
                                <span class="price-menu-price"><?php echo $treatmentFee ['acupuncture_price']; ?></span>
                                <span class="price-menu-time">(50分)</span>

                            </li>
                            <!-- <li class="price-menu__item">
                                <img src="<?php //echo get_template_directory_uri(); ?>/img/clover.png" alt="" class="price-menu__item-img">
                                <span class="price-menu-name lower">鍼灸一部位（S)<img class="price-menu__list-line-2 line"
                                        src="<?php //echo get_template_directory_uri(); ?>/img/price-menu__list-line-2.png" alt=""></span>
                                <span class="price-menu-price"><?php //echo get_field("each_price_2"); ?></span>
                                <span class="price-menu-time">(25分)</span>
                            </li> -->
                            <!-- <li class="price-menu__item">
                                <img src="<?php //echo get_template_directory_uri(); ?>/img/clover.png" alt="" class="price-menu__item-img">
                                <span class="price-menu-name lower">妊活鍼灸（不妊・着床鍼）<img
                                        class="price-menu__list-line-3 line" src="<?php //echo get_template_directory_uri(); ?>/img/price-menu__list-line-3.png"
                                        alt=""></span>
                                <span class="price-menu-price"><?php //echo get_field("each_price_1"); ?></span>
                                <span class="price-menu-time">(50分)</span>
                            </li> -->
                            <li class="price-menu__item">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/clover.png" alt="" class="price-menu__item-img">
                                <span class="price-menu-name lower"><?php echo $treatmentTitles ['breechMoxibustion_title']; ?><img class="price-menu__list-line-5 line"
                                        src="<?php echo get_template_directory_uri(); ?>/img/price-menu__list-line-5.png" alt=""></span>
                                <span class="price-menu-price"><?php echo $treatmentFee ['breechMoxibustion_price']; ?></span>
                                <span class="price-menu-time">(50分)</span>
                            </li>
                            <li class="price-menu__item">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/clover.png" alt="" class="price-menu__item-img">
                                <span class="price-menu-name lower"><?php echo $treatmentTitles ['safeDeliveryMoxibustion_title']; ?><img class="price-menu__list-line-4 line"
                                        src="<?php echo get_template_directory_uri(); ?>/img/price-menu__list-line-4.png" alt=""></span>
                                <span class="price-menu-price"><?php echo $treatmentFee ['safeDeliveryMoxibustion_price']; ?></span>
                                <span class="price-menu-time">(50分)</span>
                            </li>
                            <li class="price-menu__item">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/clover.png" alt="" class="price-menu__item-img">
                                <span class="price-menu-name lower"><?php echo $treatmentTitles ['beautyAcupuncture_title']; ?><img class="price-menu__list-line-6 line"
                                        src="<?php echo get_template_directory_uri(); ?>/img/lineprice-menu__list-line-6.png" alt=""></span>
                                <span class="price-menu-price"><?php echo $treatmentFee ['beautyAcupuncture_price']; ?></span>
                                <span class="price-menu-time">(50分）</span>
                            </li>
                            <li class="price-menu__item-none">
                                <div class="price-menu__item-img__wrap">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/clover.png" alt="" class="price-menu__item-img">
                                    <span class="price-menu-name lower">カッピング・スライドカッピング</span>
                                </div>
                                <ul class="price-menu__inner-menu">
                                    <li class="price-menu__inner-item">
                                        <div class="price-menu-wrap">
                                            <span class="price-menu__inner-name">*<?php echo $treatmentTitles ['cupping_title']; ?><img
                                                    class="price-menu__list-line-7 line"
                                                    src="<?php echo get_template_directory_uri(); ?>/img/price-menu__list-line-7.png" alt=""></span>
                                            <span class="price-menu-price-left"><?php echo $treatmentFee ['cuppingShort_price']; ?></span>
                                            <span class="price-menu-time-left">(S)(25分)</span>
                                        </div>
                                        <div class="price-menu__inner-right">
                                            <span class="price-menu-price-right"><?php echo $treatmentFee ['cuppingLong_price']; ?></span>
                                            <span class="price-menu-time-right">(L)(50分)</span>
                                        </div>
                                    </li>
                                    <li class="price-menu__inner-item bottom">
                                        <div class="price-menu-wrap">
                                        <span class="price-menu__inner-name">*<?php echo $treatmentTitles ['slideCupping_title']; ?><img
                                                class="price-menu__list-line-8 line"
                                                src="<?php echo get_template_directory_uri(); ?>/img/price-menu__list-line-8.png" alt="">
                                        </span>
                                        
                                            <span class="price-menu-price-left"><?php echo $treatmentFee ['slideCuppingShort_price']; ?></span>
                                            <span class="price-menu-time-left">(S)(25分)</span>
                                        </div>
                                        <div class="price-menu__inner-right">
                                            <span class="price-menu-price-right"><?php echo $treatmentFee ['slideCuppingLong_price']; ?></span>
                                            <span class="price-menu-time-right">(L)(50分)</span>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="price-menu__item">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/clover.png" alt="" class="price-menu__item-img">
                                <span class="price-menu-name lower"><?php echo $treatmentTitles ['PelvicCare_title']; ?><img
                                        class="price-menu__list-line-9 line" src="<?php echo get_template_directory_uri(); ?>/img/price-menu__list-line-9.png"
                                        alt=""></span>
                                <span class="price-menu-price"><?php echo $treatmentFee ['PelvicCare_price']; ?></span>
                                <span class="price-menu-time">(10〜15分)</span>
                            </li>
                            <li class="price-menu__item">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/clover.png" alt="" class="price-menu__item-img">
                                <span class="price-menu-name lower"><?php echo $treatmentTitles ['pregnancyMassage_title']; ?><img class="price-menu__list-line-10 line"
                                        src="<?php echo get_template_directory_uri(); ?>/img/price-menu__list-line-10.png" alt=""></span>
                                <span class="price-menu-price"><?php echo $treatmentFee ['pregnancyMassage_price']; ?></span>
                                <span class="price-menu-time">(25〜30分)</span>
                            </li>
                        </ul>
                    </div>
                    <div class="price-menu__wrap lower">
                        <div class="price-menu__title-wrap">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/clover.png" alt="" class="price-menu__title-img">
                            <h3 class="price-menu__title lower">コースメニュー</h3>
                        </div>
                        <p class="price-menu__attention lower">鍼灸メニューは別途3300円の初診料がかかります。<br> 相談に応じて子連れ可能です。</p>
                       
                        <ul class="price-menu__list">
                        <?php
							$courseMenuPrice1 = get_field('course_menu_price1');
						?>
                        <?php
							$courseMenuPrice2 = get_field('course_menu_price2');
						?>
                        <?php
							$courseMenuTitle = get_field('course_menu_title');
						?>
                        <?php
							$courseMenuSubtitle = get_field('course_menu_subTitle');
						?>

                            <li class="price-menu__item lower">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/clover.png" alt="" class="price-menu__item-img">
                                <span class="price-menu-name lower">
                                    <?php echo $courseMenuTitle ['premiumPregnancy_course_title']; ?>
                                    <img class="price-menu__list-line-1 line lower"
                                        src="<?php echo get_template_directory_uri(); ?>/img/price-menu__list-line-2.png" alt=""></span>
                                <span class="price-menu-price"><?php echo $courseMenuPrice1 ['premiumPregnancy_course_price1']; ?></span>
                                <span class="price-menu-arrow">→</span>
                                <span class="price-menu-price"><?php echo $courseMenuPrice2 ['premiumPregnancy_course_price2']; ?></span>
                                <span class="price-menu-time">（100分）</span>
                            </li>
                            <li>
                                <p class="price-menu-subname">
                                (<?php echo $courseMenuSubtitle ['premiumPregnancy_course_subTitle']; ?>)
                                </p>
                            </li>
                            <li class="price-menu__item lower">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/clover.png" alt="" class="price-menu__item-img">
                                <span class="price-menu-name lower"><?php echo $courseMenuTitle ['pregnancy_course_title']; ?><img class="price-menu__list-line-2 line lower"
                                        src="<?php echo get_template_directory_uri(); ?>/img/price-menu__list-line-2.png" alt=""></span>
                                <span class="price-menu-price"><?php echo $courseMenuPrice1 ['pregnancy_course_price1']; ?></span>
                                <span class="price-menu-arrow">→</span>
                                <span class="price-menu-price"><?php echo $courseMenuPrice2 ['pregnancy_course_price2']; ?></span>
                                <span class="price-menu-time">（80分）</span>
                            </li>
                            <li>
                                <p class="price-menu-subname">
                                    （<?php echo $courseMenuSubtitle ['pregnancy_course_subTitle']; ?>）
                                </p>
                            </li>
                            <li class="price-menu__item lower">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/clover.png" alt="" class="price-menu__item-img">
                                <span class="price-menu-name lower"><?php echo $courseMenuTitle ['stiffShoulder_course_title']; ?>
                                    <img class="price-menu__list-line-3 line lower"
                                        src="<?php echo get_template_directory_uri(); ?>/img/price-menu__list-line-2.png" alt=""></span>
                                <span class="price-menu-price"><?php echo $courseMenuPrice1 ['stiffShoulder_course_price1']; ?></span>
                                <span class="price-menu-arrow">→</span>
                                <span class="price-menu-price"><?php echo $courseMenuPrice2 ['stiffShoulder_course_price2']; ?></span>
                                <span class="price-menu-time">（80分）</span>
                            </li>
                            <li>
                                <p class="price-menu-subname">
                                    （<?php echo $courseMenuSubtitle ['stiffShoulder_course_subTitle']; ?>）
                                </p>
                            </li>

                            <li class="price-menu__item lower">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/clover.png" alt="" class="price-menu__item-img">
                                <span class="price-menu-name lower"><?php echo $courseMenuTitle ['beautyWholeBody_course_title']; ?>
                                    <img class="price-menu__list-line-5 line lower"
                                        src="<?php echo get_template_directory_uri(); ?>/img/price-menu__list-line-5.png" alt=""></span>
                                <span class="price-menu-price"><?php echo $courseMenuPrice1 ['beautyWholeBody_course_price1']; ?></span>
                                <span class="price-menu-arrow">→</span>
                                <span class="price-menu-price"><?php echo $courseMenuPrice2 ['beautyWholeBody_course_price2']; ?></span>
                                <span class="price-menu-time">（60分）</span>
                            </li>
                            <li>
                                <p class="price-menu-subname">
                                （<?php echo $courseMenuSubtitle ['beautyWholeBody_course_subTitle']; ?>）
                                </p>
                            </li>

                            <li class="price-menu__item lower">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/clover.png" alt="" class="price-menu__item-img">
                                <span class="price-menu-name lower"><?php echo $courseMenuTitle ['postpartumCare_course_title']; ?>
                                    <img class="price-menu__list-line-4 line lower"
                                        src="<?php echo get_template_directory_uri(); ?>/img/price-menu__list-line-4.png" alt=""></span>
                                <span class="price-menu-price"><?php echo $courseMenuPrice1 ['postpartumCare_course_price1']; ?></span>
                                <span class="price-menu-arrow">→</span>
                                <span class="price-menu-price"><?php echo $courseMenuPrice2 ['postpartumCare_course_price2']; ?></span>
                                <span class="price-menu-time">（45分）</span>
                            </li>
                            <li>
                                <p class="price-menu-subname">
                                （<?php echo $courseMenuSubtitle ['postpartumCare_course_subTitle']; ?>）
                                </p>
                            </li>

                            <li class="price-menu__item lower">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/clover.png" alt="" class="price-menu__item-img">
                                <span class="price-menu-name lower"><?php echo $courseMenuTitle ['pregnantRelax_course_title']; ?>
                                    <img class="price-menu__list-line-6 line lower"
                                        src="<?php echo get_template_directory_uri(); ?>/img/lineprice-menu__list-line-6.png" alt=""></span>
                                <span class="price-menu-price"><?php echo $courseMenuPrice1 ['pregnantRelax_course_price1']; ?></span>
                                <span class="price-menu-arrow">→</span>
                                <span class="price-menu-price"><?php echo $courseMenuPrice2 ['pregnantRelax_course_price2']; ?></span>
                                <span class="price-menu-time">（45分）</span>
                            </li>
                            <li>
                                <p class="price-menu-subname">
                                （<?php echo $courseMenuSubtitle ['pregnantRelax_course_subTitle']; ?>）
                                </p>
                            </li>
                            
                        </ul>
                    </div>
                    <div class="price-menu__wrap lower">
                        <div class="price-menu__title-wrap">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/clover.png" alt="" class="price-menu__title-img">
                            <h3 class="price-menu__title lower">オプション</h3>
                        </div>
                        <p class="price-menu__attention lower">
                            鍼灸メニューは別途3300円の初診料がかかります。<br> 相談に応じて子連れ可能です。
                        </p>

                        <ul class="price-menu__list">
                        <?php
							$optionMenuPrice = get_field('option_menu_price');
						?>
                        <?php
							$optionMenuTitle = get_field('option_menu_title');
						?>

                            <li class="price-menu__item">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/clover.png" alt="" class="price-menu__item-img">
                                <span class="price-menu-name lower"><?php echo $optionMenuTitle ['relaxation_title']; ?>
                                    <img class="price-menu__list-line-1 line option"
                                        src="<?php echo get_template_directory_uri(); ?>/img/price-menu__list-line-2.png" alt="">
                                </span>
                                <span class="price-menu-time">20分から</span>
                                <span class="price-menu-price">(10分 &nbsp; <?php echo $optionMenuPrice ['relaxation_price']; ?>)</span>

                            </li>
                            <li class="price-menu__item">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/clover.png" alt="" class="price-menu__item-img">
                                <span class="price-menu-name lower">
                                <?php echo $optionMenuTitle ['waistMassage_title']; ?>
                                    <img class="price-menu__list-line-2 line option"
                                        src="<?php echo get_template_directory_uri(); ?>/img/price-menu__list-line-2.png" alt=""></span>
                                <span class="price-menu-price"><?php echo $optionMenuPrice ['waistMassage_price']; ?></span>
                                <span class="price-menu-time">(10〜15分)</span>
                            </li>
                            <li class="price-menu__item">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/clover.png" alt="" class="price-menu__item-img">
                                <span class="price-menu-name lower"> <?php echo $optionMenuTitle ['sacralMassage_title']; ?>
                                    <img class="price-menu__list-line-3 line option "
                                        src="<?php echo get_template_directory_uri(); ?>/img/price-menu__list-line-2.png" alt=""></span>
                                <span class="price-menu-price"><?php echo $optionMenuPrice ['sacralMassage_price']; ?></span>
                                <span class="price-menu-time">(10〜15分)</span>
                            </li>
                            <li class="price-menu__item">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/clover.png" alt="" class="price-menu__item-img">
                                <span class="price-menu-name lower"><?php echo $optionMenuTitle ['pelvicAdjustmentStretch_title']; ?>
                                    <img class="price-menu__list-line-5 line option"
                                        src="<?php echo get_template_directory_uri(); ?>/img/price-menu__list-line-5.png" alt=""></span>
                                <span class="price-menu-price"><?php echo $optionMenuPrice ['pelvicAdjustmentStretch_price']; ?></span>
                                <span class="price-menu-time">(10〜15分)</span>
                            </li>
                            <li class="price-menu__item">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/clover.png" alt="" class="price-menu__item-img">
                                <span class="price-menu-name lower"><?php echo $optionMenuTitle ['scapulaMassage_title']; ?>
                                    <img class="price-menu__list-line-4 line option"
                                        src="<?php echo get_template_directory_uri(); ?>/img/price-menu__list-line-4.png" alt=""></span>
                                <span class="price-menu-price"><?php echo $optionMenuPrice ['scapulaMassage_price']; ?></span>
                                <span class="price-menu-time">(10〜15分)</span>
                            </li>
                            <li class="price-menu__item">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/clover.png" alt="" class="price-menu__item-img">
                                <span class="price-menu-name lower"><?php echo $optionMenuTitle ['footMassage_title']; ?>
                                    <img class="price-menu__list-line-6 line option"
                                        src="<?php echo get_template_directory_uri(); ?>/img/lineprice-menu__list-line-6.png" alt=""></span>
                                <span class="price-menu-price"><?php echo $optionMenuPrice ['footMassage_price']; ?></span>
                                <span class="price-menu-time">(10〜15分)</span>
                            </li>
                            <li class="price-menu__item">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/clover.png" alt="" class="price-menu__item-img">
                                <span class="price-menu-name lower"><?php echo $optionMenuTitle ['handMassage_title']; ?><img
                                        class="price-menu__list-line-9 line option"
                                        src="<?php echo get_template_directory_uri(); ?>/img/price-menu__list-line-2.png" alt=""></span>
                                <span class="price-menu-price"><?php echo $optionMenuPrice ['handMassage_price']; ?></span>
                                <span class="price-menu-time">(10〜15分)</span>
                            </li>
                            <li class="price-menu__item">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/clover.png" alt="" class="price-menu__item-img">
                                <span class="price-menu-name lower"><?php echo $optionMenuTitle ['headMassage_title']; ?><img class="price-menu__list-line-10 line option"
                                        src="<?php echo get_template_directory_uri(); ?>/img/price-menu__list-line-10.png" alt=""></span>
                                <span class="price-menu-price"><?php echo $optionMenuPrice ['headMassage_price']; ?></span>
                                <span class="price-menu-time">(10〜15分)</span>
                            </li>
                            <li class="price-menu__item">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/clover.png" alt="" class="price-menu__item-img">
                                <span class="price-menu-name lower"><?php echo $optionMenuTitle ['beautyAcupuncture_title']; ?><img class="price-menu__list-line-7 line option"
                                        src="<?php echo get_template_directory_uri(); ?>/img/price-menu__list-line-10.png" alt=""></span>
                                <span class="price-menu-price"><?php echo $optionMenuPrice ['beautyAcupuncture_price']; ?></span>
                                <span class="price-menu-time">(10〜15分)</span>
                            </li>
                            <li class="price-menu__item">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/clover.png" alt="" class="price-menu__item-img">
                                <span class="price-menu-name lower"><?php echo $optionMenuTitle ['cupping_title']; ?><img
                                        class="price-menu__list-line-8 line option"
                                        src="<?php echo get_template_directory_uri(); ?>/img/price-menu__list-line-10.png" alt=""></span>
                                <span class="price-menu-price"><?php echo $optionMenuPrice ['cupping_price']; ?></span>
                                <span class="price-menu-time">(10〜15分)</span>
                            </li>
                            <li class="price-menu__item">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/clover.png" alt="" class="price-menu__item-img">
                                <span class="price-menu-name lower"><?php echo $optionMenuTitle ['slideCupping_title']; ?><img
                                        class="price-menu__list-line-11 line option"
                                        src="<?php echo get_template_directory_uri(); ?>/img/price-menu__list-line-10.png" alt=""></span>
                                <span class="price-menu-price"><?php echo $optionMenuPrice ['slideCupping_price']; ?></span>
                                <span class="price-menu-time">(10〜15分)</span>
                            </li>
                            <li class="price-menu__item">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/clover.png" alt="" class="price-menu__item-img">
                                <span class="price-menu-name lower"><?php echo $optionMenuTitle ['thomsonBed_title']; ?><img
                                        class="price-menu__list-line-12 line option"
                                        src="<?php echo get_template_directory_uri(); ?>/img/price-menu__list-line-10.png" alt=""></span>
                                <span class="price-menu-price"><?php echo $optionMenuPrice ['thomsonBed_price']; ?></span>
                                <span class="price-menu-time">(10〜15分)</span>
                            </li>
                            <li class="price-menu__item">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/clover.png" alt="" class="price-menu__item-img">
                                <span class="price-menu-name lower">今月のキャンペーン(月替わり)</span>

                            </li>
                        </ul>
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
        </section> -->

    </div>
    <?php get_template_part('includes/footer-lower'); ?>
    <?php get_footer(); ?>
    <?php wp_footer(); ?>

</body>

</html>