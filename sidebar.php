<div class="aside-wrap">
                            <aside class="category">
                                <h3 class="category__title">カテゴリー</h3>
                                <?php wp_list_categories('title_li=&depth=1'); ?>
                                <!-- <ul class="category__list">
                                    <li class="category__item"><a href=""> カテゴリー1</a></li>
                                    <li class="category__item"><a href="">カテゴリー2</a></li>
                                    <li class="category__item"><a href="">カテゴリー3</a></li>
                                </ul> -->
                            </aside>
                            <aside class="relating-post">
                                <h3 class="relating-post__title">関連記事</h3>
                                <?php
                                $post_type = get_post_type();
                                $categories = get_the_category($post->ID);
                                $category_ID = array();
                                foreach ($categories as $category) :
                                    array_push($category_ID, $category->cat_ID);
                                endforeach;
                                $args = array(
                                    'post__not_in' => array($post->ID),
                                    'posts_per_page' => 3,
                                    'post_type' => $post_type,
                                    'category__in' => $category_ID,
                                    'orderby' => 'asc',
                                );
                                $query = new WP_Query($args); ?>
                                <?php if ($query->have_posts()) : ?>
                                    <?php while ($query->have_posts()) : $query->the_post(); ?>

                                <div class="relating-post__item">
                                    <p class="relating-post__text">
                                        <a class="relating-post__link" href="<?php the_permalink() ?>">
                                        <?php
                                        if (mb_strlen($post->post_title, 'UTF-8') > 30) {
                                            $title = mb_substr($post->post_title, 0, 30, 'UTF-8');
                                            echo $title . '……';
                                        } else {
                                            echo $post->post_title;
                                        }
                                        ?>
                                        </a>
                                    </p>
                                </div>
                                <?php endwhile; ?>
                                <?php endif;
                                wp_reset_postdata(); ?>
                            </aside>

                        </div>
                    </div>
