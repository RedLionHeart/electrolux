<?php get_header('other-pages'); ?>
    <div class="breadcrumbs breadcrumbs-single-cond">
        <div class="box">
            <a href="<?php echo get_home_url(); ?>" class="breadcrumbs__link">Главная</a>
            <span class="breadcrumb-text"><?php the_title(); ?></span>
        </div>
    </div>
    <article class="page-card">
        <div class="box">
            <div class="page-card__top-offer-wrapper">
                <h1 class="page-card__title"><?php the_title(); ?></h1>
                <div class="page-card__product-info">
                    <?php include_once "raiting.php" ?>
                    <span class="page-card__text-info"><?php the_field('count_sale') ?> продано</span>
                    <span class="page-card__text-info"><?php the_field('available_count') ?> в наличии</span>
                </div>
            </div>
            <section class="page-card__top-offer-container">
                <div class="page-card__top-left-offer-container">

                    <div class="page-card__slider-container">
                        <div class="page-card__main-slider">
                            <?php
                            //If you have video, add thumb in slider
                            if( get_field('video_link') ): ?>
                                <div class="page-card__main-slider-item-box page-card__main-slider-item-box-video">
                                    <?php the_field("video_link"); ?>
                                </div>
                            <?php endif; ?>
                            <?php
                            //Loop images
                            $img_length = 10;
                            for ($i=1; $i <= $img_length; $i++) {
                                if( get_field('img_'.$i) ): ?>
                                    <div class="page-card__main-slider-item-box">
                                        <img src="<?php the_field('img_'.$i); ?>" alt="preview" class="page-card__main-slider-img">
                                    </div>
                                <?php endif;
                            }
                            ?>
                        </div>
                        <div class="page-card__second-slider">
                            <?php
                            if( get_field('video_link') ): ?>
                                <div class="page-card__second-slider-item-box">
                                    <img src="<?=get_template_directory_uri()?>/src/images/page-card/play.png" alt="preview" class="page-card__second-slider-img page-card__second-slider-img_video">
                                </div>
                            <?php endif; ?>
                            <?php
                            //Loop images
                            $img_length = 10;
                            for ($i=1; $i <= $img_length; $i++) {
                                if( get_field('img_'.$i) ): ?>
                                    <div class="page-card__second-slider-item-box">
                                        <img src="<?php the_field('img_'.$i); ?>" alt="preview" class="page-card__second-slider-img">
                                    </div>
                                <?php endif;
                            }
                            ?>
                        </div>
                    </div>
                    <div class="page-card__advantages-container">
                        <div class="page-card__advantages-item">Выгодная рассрочка до 12 месяцев</div>
                        <div class="page-card__advantages-item">Доставка в любой город Беларуси</div>
                        <div class="page-card__advantages-item page-card__advantages-item_width-text">Гарантия 7 лет на кондиционер и монтаж</div>
                        <div class="page-card__advantages-item">Установка, обслуживание, ремонт</div>
                    </div>
                    <section class="page-card__bottom-offer-container page-card__none-991">
                        <div id="tabs">
                            <ul>
                                <li><a href="#tabs-1">Описание</a></li>
                                <li><a href="#tabs-2">Характеристики</a></li>
                                <li><a href="#tabs-3">Отзывы<span class="comments-count"> (<?php echo do_shortcode('[testimonials_count id='.$post->ID.']');?>)</span></a></li>
                            </ul>
                            <div id="tabs-1">
                                <p>
                                    <?php while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
                                        <?php the_content(); ?> <!-- Page Content -->
                                    <?php
                                    endwhile; //resetting the page loop
                                    wp_reset_query(); //resetting the page query
                                    ?>
                                </p>
                            </div>
                            <div id="tabs-2">
                                <ul class="options-wrapper">
                                    <li>
                                        <div class="option-name">Тип</div>
                                        <div class="option-value">
                                            <?php
                                            // Функция выводит все значения из таксономии с ссылками
                                            $cur_terms = get_the_terms( $post->ID, 'type' );
                                            if( is_array( $cur_terms ) ){
                                                foreach( $cur_terms as $cur_term ){
                                                    echo '<span>'. $cur_term->name .'</span> <br>';
                                                }
                                            }
                                            ?></div>
                                    </li>
                                    <li>
                                        <div class="option-name">Инверторная технология</div>
                                        <div class="option-value">
                                            <?php
                                            echo get_field('invert_technology') ? 'Есть' : 'Нет';
                                            ?>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="option-name">Режимы работы</div>
                                        <div class="option-value">
                                            <?php
                                            the_field('operating_mode');
                                            ?>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="option-name">Обслуживаемая площадь</div>
                                        <div class="option-value">
                                            <?php
                                            the_field('served_area');
                                            ?> м <sup>2</sup>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="option-name">Максимальная длина коммуникаций</div>
                                        <div class="option-value">
                                            <?php
                                            the_field('length_communication');
                                            ?> м
                                        </div>
                                    </li>
                                    <li>
                                        <div class="option-name">Класс энергопотребления</div>
                                        <div class="option-value">
                                            <?php
                                            the_field('class_energysafe');
                                            ?>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="option-name">Максимальный воздушный поток</div>
                                        <div class="option-value">
                                            <?php
                                            the_field('max_air');
                                            ?> куб./мин
                                        </div>
                                    </li>
                                    <li>
                                        <div class="option-name">Мощность в режиме охлаждения</div>
                                        <div class="option-value">
                                            <?php
                                            the_field('power_cooling');
                                            ?> Вт
                                        </div>
                                    </li>
                                    <li>
                                        <div class="option-name">Мощность в режиме обогрева</div>
                                        <div class="option-value">
                                            <?php
                                            the_field('power_hot');
                                            ?> Вт
                                        </div>
                                    </li>
                                    <li>
                                        <div class="option-name">Потребляемая мощность при охлаждении</div>
                                        <div class="option-value">
                                            <?php
                                            the_field('power_consump_cold');
                                            ?> Вт
                                        </div>
                                    </li>
                                    <li>
                                        <div class="option-name">Потребляемая мощность при обогреве</div>
                                        <div class="option-value">
                                            <?php
                                            the_field('power_consump_hot');
                                            ?> Вт
                                        </div>
                                    </li>
                                    <li>
                                        <div class="option-name">Режим приточной вентиляции</div>
                                        <div class="option-value">
                                            <?php
                                            echo get_field('supply_mode') ? 'Есть' : 'Нет';
                                            ?>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="option-name">Режим осушения</div>
                                        <div class="option-value">
                                            <?php
                                            echo get_field('drain_mode') ? 'Есть' : 'Нет';
                                            ?>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="option-name">Пульт дистанционного управления</div>
                                        <div class="option-value">
                                            <?php
                                            echo get_field('remote_control') ? 'Есть' : 'Нет';
                                            ?>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="option-name">Таймер включения / выключения</div>
                                        <div class="option-value">
                                            <?php
                                            echo get_field('on_off_timer') ? 'Есть' : 'Нет';
                                            ?>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="option-name">Уровень шума внутреннего блока</div>
                                        <div class="option-value">
                                            <?php
                                            echo the_field('noise_level_indoor');
                                            ?>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="option-name">Тип хладагента</div>
                                        <div class="option-value">
                                            <?php
                                            echo the_field('type_of_refrigerant');
                                            ?>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="option-name">Габариты внутреннего блока</div>
                                        <div class="option-value">
                                            <?php
                                            echo the_field('profile_indoor');
                                            ?>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="option-name">Габариты внешнего блока</div>
                                        <div class="option-value">
                                            <?php
                                            echo the_field('profile_external');
                                            ?>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="option-name">Вес внутреннего блока / внешнего блока</div>
                                        <div class="option-value">
                                            <?php
                                            echo the_field('weight_indoor_external_block');
                                            ?>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div id="tabs-3">
                                <?php echo do_shortcode('[testimonials_list id='.$post->ID.']');?>
                                <form id="testimonials" class="classic-form" action="" type="POST">
                                    <?php include(get_template_directory()."/partials/utm.php"); ?>
                                    <input type="hidden" name="action" value="add_testimonial">
                                    <input type="hidden" name="stars" id="stars" value="">
                                    <input type="hidden" name="post_id" value="<?php echo $post->ID; ?>">
                                    <input type="hidden" name="photos" id="photos" value="">
                                    <div class="input-wrapper stars">
                                        <div class="rate_title">Оцените этот товар:</div>
                                        <div id="reviewStars-input">
                                            <input id="star-4" type="radio" name="reviewStars"/>
                                            <label title="Отличный" for="star-4" data-id="5"></label>

                                            <input id="star-3" type="radio" name="reviewStars"/>
                                            <label title="Хороший" for="star-3" data-id="4"></label>

                                            <input id="star-2" type="radio" name="reviewStars"/>
                                            <label title="Нормальный" for="star-2" data-id="3"></label>

                                            <input id="star-1" type="radio" name="reviewStars"/>
                                            <label title="Так себе" for="star-1" data-id="2"></label>

                                            <input id="star-0" type="radio" name="reviewStars"/>
                                            <label title="Плохой" for="star-0" data-id="1"></label>
                                        </div>
                                    </div>
                                    <div class="input-wrapper">
                                        <input type="text" name="name" id="review-name" placeholder="Ваше имя*" required>
                                    </div>
                                    <div class="input-wrapper">
                                        <input type="text" name="plus" id="review-virtues" placeholder="Достоинства">
                                    </div>
                                    <div class="input-wrapper">
                                        <input type="text" name="minus" id="review-disadv" placeholder="Недостатки">
                                    </div>
                                    <div class="input-wrapper">
                                        <textarea id="testimonial" name="testimonial" placeholder="Ваш отзыв*" required></textarea>
                                    </div>
                                    <div class="error_field"></div>
                                    <button type="button" class="btn btn-primary btn-arrow">Оставить отзыв</button>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
                <aside class="page-card__top-right-offer-container">
                    <div class="sticky-container">
                        <p class="page-card__aside-title">Выберите площадь помещения:</p>
                        <div class="page-card__aside-available-area">
                            <?php $squares = get_field('square_variants');
                            if ($squares): ?>
                                <?php foreach( $squares as $square ): ?>
                            <a href="<?php the_field('link_'.$square)?>" class="page-card__aside-available-area-item
                            <?php if(get_field('current_square') === $square) {
                                echo 'page-card__aside-available-area-item_active';
                            }?>">
                                <?php echo $square; ?> м<sup>2</sup></a>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                        <div class="page-card__aside-horizontal-line"></div>
                        <div class="page-card__aside-offer-container">
                            <div class="page-card__aside-offer-item">
                                <img src="<?=get_template_directory_uri()?>/src/images/page-card/time.png" alt="time" class="page-card__aside-offer-img">
                                <span class="page-card__aside-offer-text">Акция! <br><span class="page-card__timer">07:07:07:07</span></span>
                            </div>
                            <div class="page-card__aside-offer-item">
                                <img src="<?=get_template_directory_uri()?>/src/images/page-card/views.png" alt="views" class="page-card__aside-offer-img">
                                <span class="page-card__aside-offer-text"><span class="page-card__views-count">23</span> просмотров<br>за сегодня</span>
                            </div>
                            <div class="page-card__aside-offer-item">
                                <img src="<?=get_template_directory_uri()?>/src/images/page-card/likes.png" alt="likes" class="page-card__aside-offer-img">
                                <span class="page-card__aside-offer-text">Нравится<br><span class="page-card__likes-percent">89</span>% клиентов</span>
                            </div>
                        </div>
                        <div class="page-card__aside-horizontal-line"></div>
                        <form action="<?php echo get_template_directory_uri() ?>/mailto.php" method="post" enctype="multipart/form-data" class="page-card__aside-form" name="aside-form">
                            <div>
                                <input type="radio" checked name="page-card-aside" id="cash" class="page-card__aside-form-input_none" value="Наличные">
                                <label for="cash" class="page-card__aside-form-label">Купить за наличные:</label>
                                <p class="page-card__aside-cost">
                                    <span class="page-card__aside-new-cost">
                                        <?php the_field('price_new') ?> р
                                    </span>
                                    <span class="page-card__aside-old-cost"><?php the_field('price_old') ?> р</span>
                                </p>
                                <div class="page-card__aside-top-sticker-container">
                                    <div class="page-card__aside-sticker-item">-<?php the_field('discount_size')?>% скидка</div>
                                    <div class="page-card__aside-sticker-item">-<?php the_field('assembly_discount')?>% на монтаж</div>
                                    <div class="page-card__aside-sticker-item page-card__aside-sticker-item_width">Общая экономия от <?php require_once('partials/calculate-saving.php'); ?> рублей</div>
                                </div>
                            </div>
                            <div class="page-card__aside-horizontal-line"></div>
                            <div>
                                <input type="radio" name="page-card-aside" id="credit" class="page-card__aside-form-input_none" value="В рассрочку">
                                <label for="credit" class="page-card__aside-form-label">Купить в рассрочку:</label>
                                <p class="page-card__aside-text-container">на 12 месяцев:<span class="page-card__aside-bold-text">
                                        <?php the_field('price_12')?> р (<?php echo round(get_field('price_12')/11)?> руб/мес)</span>
                                </p>
                                <p class="page-card__aside-text-container">на 6 месяцев:<span class="page-card__aside-bold-text">
                                        <?php the_field('price_6')?> р (<?php echo round(get_field('price_6')/6)?> руб/мес)</span>
                                </p>
                                <p class="page-card__aside-text-container">на 3 месяца:<span class="page-card__aside-bold-text">
                                        <?php the_field('price_3')?> р (<?php echo round(get_field('price_3')/3)?> руб/мес)</span> </p>
                                <div class="page-card__aside-bottom-sticker-container">
                                    <div class="page-card__aside-sticker-item">-<?php the_field('assembly_discount')?>% на монтаж</div>
                                    <div class="page-card__aside-sticker-item page-card__aside-sticker-item_width">Общая экономия от <?php echo $discount_assembly; ?> рублей</div>
                                </div>
                            </div>
                            <a href="javascript:;" data-fancybox data-src="#buy-condition-popup" data-options='{"touch": false}' class="page-card__aside-form-submit button-hover">Купить кондиционер</a>
                        </form>
                    </div>
                </aside>
            </section>
            <section class="page-card__bottom-offer-container page-card__show-992">
                <div id="tabs1">
                    <ul>
                        <li><a href="#tabs-11">Описание</a></li>
                        <li><a href="#tabs-21">Характеристики</a></li>
                        <li><a href="#tabs-31">Отзывы</a></li>
                    </ul>
                    <div id="tabs-11">
                        <p>
                            <?php while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
                                <?php the_content(); ?> <!-- Page Content -->
                            <?php
                            endwhile; //resetting the page loop
                            wp_reset_query(); //resetting the page query
                            ?>
                        </p>
                    </div>
                    <div id="tabs-21">
                        <ul class="options-wrapper">
                            <li>
                                <div class="option-name">Тип</div>
                                <div class="option-value">
                                    <?php
                                    // Функция выводит все значения из таксономии с ссылками
                                    $cur_terms = get_the_terms( $post->ID, 'type' );
                                    if( is_array( $cur_terms ) ){
                                        foreach( $cur_terms as $cur_term ){
                                            echo '<span>'. $cur_term->name .'</span> <br>';
                                        }
                                    }
                                    ?></div>
                            </li>
                            <li>
                                <div class="option-name">Инверторная технология</div>
                                <div class="option-value">
                                    <?php
                                    echo get_field('invert_technology') ? 'Есть' : 'Нет';
                                    ?>
                                </div>
                            </li>
                            <li>
                                <div class="option-name">Режимы работы</div>
                                <div class="option-value">
                                    <?php
                                    the_field('operating_mode');
                                    ?>
                                </div>
                            </li>
                            <li>
                                <div class="option-name">Обслуживаемая площадь</div>
                                <div class="option-value">
                                    <?php
                                    the_field('served_area');
                                    ?> м <sup>2</sup>
                                </div>
                            </li>
                            <li>
                                <div class="option-name">Максимальная длина коммуникаций</div>
                                <div class="option-value">
                                    <?php
                                    the_field('length_communication');
                                    ?> м
                                </div>
                            </li>
                            <li>
                                <div class="option-name">Класс энергопотребления</div>
                                <div class="option-value">
                                    <?php
                                    the_field('class_energysafe');
                                    ?>
                                </div>
                            </li>
                            <li>
                                <div class="option-name">Максимальный воздушный поток</div>
                                <div class="option-value">
                                    <?php
                                    the_field('max_air');
                                    ?> куб./мин
                                </div>
                            </li>
                            <li>
                                <div class="option-name">Мощность в режиме охлаждения</div>
                                <div class="option-value">
                                    <?php
                                    the_field('power_cooling');
                                    ?> Вт
                                </div>
                            </li>
                            <li>
                                <div class="option-name">Мощность в режиме обогрева</div>
                                <div class="option-value">
                                    <?php
                                    the_field('power_hot');
                                    ?> Вт
                                </div>
                            </li>
                            <li>
                                <div class="option-name">Потребляемая мощность при охлаждении</div>
                                <div class="option-value">
                                    <?php
                                    the_field('power_consump_cold');
                                    ?> Вт
                                </div>
                            </li>
                            <li>
                                <div class="option-name">Потребляемая мощность при обогреве</div>
                                <div class="option-value">
                                    <?php
                                    the_field('power_consump_hot');
                                    ?> Вт
                                </div>
                            </li>
                            <li>
                                <div class="option-name">Режим приточной вентиляции</div>
                                <div class="option-value">
                                    <?php
                                    echo get_field('supply_mode') ? 'Есть' : 'Нет';
                                    ?>
                                </div>
                            </li>
                            <li>
                                <div class="option-name">Режим осушения</div>
                                <div class="option-value">
                                    <?php
                                    echo get_field('drain_mode') ? 'Есть' : 'Нет';
                                    ?>
                                </div>
                            </li>
                            <li>
                                <div class="option-name">Пульт дистанционного управления</div>
                                <div class="option-value">
                                    <?php
                                    echo get_field('remote_control') ? 'Есть' : 'Нет';
                                    ?>
                                </div>
                            </li>
                            <li>
                                <div class="option-name">Таймер включения / выключения</div>
                                <div class="option-value">
                                    <?php
                                    echo get_field('on_off_timer') ? 'Есть' : 'Нет';
                                    ?>
                                </div>
                            </li>
                            <li>
                                <div class="option-name">Уровень шума внутреннего блока</div>
                                <div class="option-value">
                                    <?php
                                    echo the_field('noise_level_indoor');
                                    ?>
                                </div>
                            </li>
                            <li>
                                <div class="option-name">Тип хладагента</div>
                                <div class="option-value">
                                    <?php
                                    echo the_field('type_of_refrigerant');
                                    ?>
                                </div>
                            </li>
                            <li>
                                <div class="option-name">Габариты внутреннего блока</div>
                                <div class="option-value">
                                    <?php
                                    echo the_field('profile_indoor');
                                    ?>
                                </div>
                            </li>
                            <li>
                                <div class="option-name">Габариты внешнего блока</div>
                                <div class="option-value">
                                    <?php
                                    echo the_field('profile_external');
                                    ?>
                                </div>
                            </li>
                            <li>
                                <div class="option-name">Вес внутреннего блока / внешнего блока</div>
                                <div class="option-value">
                                    <?php
                                    echo the_field('weight_indoor_external_block');
                                    ?>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div id="tabs-31">
                        <?php echo do_shortcode('[testimonials_list id='.$post->ID.']');?>
                        <form id="testimonials" class="classic-form" action="" type="POST">
                            <?php include(get_template_directory()."/partials/utm.php"); ?>
                            <input type="hidden" name="action" value="add_testimonial">
                            <input type="hidden" name="stars" id="stars" value="">
                            <input type="hidden" name="post_id" value="<?php echo $post->ID; ?>">
                            <input type="hidden" name="photos" id="photos" value="">
                            <div class="input-wrapper stars">
                                <div class="rate_title">Оцените этот товар:</div>
                                <div id="reviewStars-input">
                                    <input id="star-4" type="radio" name="reviewStars"/>
                                    <label title="Отличный" for="star-4" data-id="5"></label>

                                    <input id="star-3" type="radio" name="reviewStars"/>
                                    <label title="Хороший" for="star-3" data-id="4"></label>

                                    <input id="star-2" type="radio" name="reviewStars"/>
                                    <label title="Нормальный" for="star-2" data-id="3"></label>

                                    <input id="star-1" type="radio" name="reviewStars"/>
                                    <label title="Так себе" for="star-1" data-id="2"></label>

                                    <input id="star-0" type="radio" name="reviewStars"/>
                                    <label title="Плохой" for="star-0" data-id="1"></label>
                                </div>
                            </div>
                            <div class="input-wrapper">
                                <input type="text" name="name" id="review-name" placeholder="Ваше имя*" required>
                            </div>
                            <div class="input-wrapper">
                                <input type="text" name="plus" id="review-virtues" placeholder="Достоинства">
                            </div>
                            <div class="input-wrapper">
                                <input type="text" name="minus" id="review-disadv" placeholder="Недостатки">
                            </div>
                            <div class="input-wrapper">
                                <textarea id="testimonial" name="testimonial" placeholder="Ваш отзыв*" required></textarea>
                            </div>
                            <div class="error_field"></div>
                            <button type="button" class="btn btn-primary btn-arrow">Оставить отзыв</button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </article>
    <section class="question-quiz">
        <div class="box">
            <h2 class="question-quiz__title title-section">Не знаете какой кондиционер подойдет именно Вам?</h2>
            <p class="paragraph-section question-quiz__description">Ответьте на 5 простых вопросов за 2 минуты и узнайте стоимость подходящего Вам кондиционера,
                а так же <span class="yellow-text">получите скидку на монтаж -10%</span> (Вы сэкономите более 26 рублей)!</p>
            <span class="question-quiz__timer">07:07:09:42</span>
            <form action="<?php echo get_template_directory_uri() ?>/mailto-quiz.php" method="post" enctype="multipart/form-data" id="section-quiz-form-footer" class="question-quiz__form">
                <?php include(get_template_directory()."/partials/utm.php"); ?>
                <div class="question-quiz__form-container-footer active-flex" id="section-quiz-form-step1-footer">
                    <article class="question-quiz__form-content">
                        <p class="question-quiz__form-title">Шаг 1: Выберите тип Вашего помещения:</p>
                        <span class="question-quiz__form-text">25% готово</span>
                        <div class="question-quiz__form-strip-box">
                            <div class="question-quiz__form-strip-left"></div>
                            <div class="question-quiz__form-strip-circle"></div>
                            <div class="question-quiz__form-strip-right"></div>
                        </div>
                        <div class="question-quiz__form-type-home-container">
                            <input type="radio" id="quiz1-footer" name="question-quiz__form-radio-container" value="квартира" class="question-quiz__form-type-home-input">
                            <label class="question-quiz__form-type-home-item" for="quiz1-footer">
                                <div class="question-quiz__form-type-home-item-success"></div>
                                <img src="<?=get_template_directory_uri()?>/src/images/quiz/1.jpg" alt="home1" class="question-quiz__form-type-home-img">
                                <p class="question-quiz__form-type-home-text">Квартира</p>
                            </label>
                            <input type="radio" id="quiz2-footer" name="question-quiz__form-radio-container" value="квартира" class="question-quiz__form-type-home-input">
                            <label class="question-quiz__form-type-home-item" for="quiz2-footer">
                                <div class="question-quiz__form-type-home-item-success"></div>
                                <img src="<?=get_template_directory_uri()?>/src/images/quiz/2.jpg" alt="home2" class="question-quiz__form-type-home-img">
                                <p class="question-quiz__form-type-home-text">Дом</p>
                            </label>
                            <input type="radio" id="quiz3-footer" name="question-quiz__form-radio-container" value="квартира" class="question-quiz__form-type-home-input">
                            <label class="question-quiz__form-type-home-item" for="quiz3-footer">
                                <div class="question-quiz__form-type-home-item-success"></div>
                                <img src="<?=get_template_directory_uri()?>/src/images/quiz/3.jpg" alt="home3" class="question-quiz__form-type-home-img">
                                <p class="question-quiz__form-type-home-text">Офис</p>
                            </label>
                            <input type="radio" id="quiz4-footer" name="question-quiz__form-radio-container" value="квартира" class="question-quiz__form-type-home-input">
                            <label class="question-quiz__form-type-home-item" for="quiz4-footer">
                                <div class="question-quiz__form-type-home-item-success"></div>
                                <img src="<?=get_template_directory_uri()?>/src/images/quiz/4.jpg" alt="home4" class="question-quiz__form-type-home-img">
                                <p class="question-quiz__form-type-home-text">Торговое пом-е</p>
                            </label>
                            <input type="radio" id="quiz5-footer" name="question-quiz__form-radio-container" value="квартира" class="question-quiz__form-type-home-input">
                            <label class="question-quiz__form-type-home-item" for="quiz5-footer">
                                <div class="question-quiz__form-type-home-item-success"></div>
                                <img src="<?=get_template_directory_uri()?>/src/images/quiz/5.jpg" alt="home5" class="question-quiz__form-type-home-img">
                                <p class="question-quiz__form-type-home-text">Склад</p>
                            </label>
                            <input type="radio" id="quiz6-footer" name="question-quiz__form-radio-container" value="квартира" class="question-quiz__form-type-home-input">
                            <label class="question-quiz__form-type-home-item" for="quiz6-footer">
                                <div class="question-quiz__form-type-home-item-success"></div>
                                <img src="<?=get_template_directory_uri()?>/src/images/quiz/6.jpg" alt="home6" class="question-quiz__form-type-home-img">
                                <p class="question-quiz__form-type-home-text">Другое</p>
                            </label>
                        </div>
                        <div class="question-quiz__form-button-container">
                            <!--<button class="question-quiz__form-button-back-container" type="button">
                              <div class="question-quiz__form-button-back-container_arrow"></div>
                              <div class="question-quiz__form-button-back-container_text">Назад</div>
                            </button>-->
                            <button class="question-quiz__form-button-skip" type="button">Пропустить этот шаг</button>
                            <button type="button" class="question-quiz__form-button-next-container button-hover">
                                <div class="question-quiz__form-button-next-container_text">Следующий шаг</div>
                                <div class="question-quiz__form-button-next-container_arrow"></div>
                            </button>
                        </div>
                    </article>
                    <aside class="question-quiz__form-aside">
                        <div class="question-quiz__form-aside-block-photo">
                            <img src="<?=get_template_directory_uri()?>/src/images/robert.png" alt="Консультант" class="question-quiz__form-aside-photo">
                        </div>
                        <span class="question-quiz__form-aside-title">Егор, менеджер:</span>
                        <p class="question-quiz__form-aside-text">
                            <q>Надо знать тип помещения для точного подбора необходимого кондиционера.<br>
                                <br>
                                От этого зависят условия эксплуатации и дальнейшая стабильная работа сплит-системы.</q>
                        </p>
                    </aside>
                </div>
                <div class="question-quiz__form-container-footer" id="section-quiz-form-step2-footer">
                    <article class="question-quiz__form-content">
                        <p class="question-quiz__form-title">Шаг 2: Выберите площадь Вашего помещения:</p>
                        <span class="question-quiz__form-text">50% готово</span>
                        <div class="question-quiz__form-strip-box">
                            <div class="question-quiz__form-strip-left"></div>
                            <div class="question-quiz__form-strip-circle"></div>
                            <div class="question-quiz__form-strip-right"></div>
                        </div>
                        <div class="question-quiz__form-type-home-container">
                            <input type="radio" id="form2-quiz1-footer" name="question-quiz__form2-radio-container" value="До 20м2" class="question-quiz__form-type-home-input">
                            <label class="question-quiz__form-area-item" for="form2-quiz1-footer">
                                <div class="question-quiz__form-area-item-circle"></div>
                                <span class="question-quiz__form-area-item-text">До 20 м<sup>2</sup></span>
                            </label>
                            <input type="radio" id="form2-quiz2-footer" name="question-quiz__form2-radio-container" value="до 25м2" class="question-quiz__form-type-home-input">
                            <label class="question-quiz__form-area-item" for="form2-quiz2-footer">
                                <div class="question-quiz__form-area-item-circle"></div>
                                <span class="question-quiz__form-area-item-text">До 25 м<sup>2</sup></span>
                            </label>
                            <input type="radio" id="form2-quiz3-footer" name="question-quiz__form2-radio-container" value="до 30м2" class="question-quiz__form-type-home-input">
                            <label class="question-quiz__form-area-item" for="form2-quiz3-footer">
                                <div class="question-quiz__form-area-item-circle"></div>
                                <span class="question-quiz__form-area-item-text">До 30 м<sup>2</sup></span>
                            </label>
                            <input type="radio" id="form2-quiz4-footer" name="question-quiz__form2-radio-container" value="до 35м2" class="question-quiz__form-type-home-input">
                            <label class="question-quiz__form-area-item" for="form2-quiz4-footer">
                                <div class="question-quiz__form-area-item-circle"></div>
                                <span class="question-quiz__form-area-item-text">До 35 м<sup>2</sup></span>
                            </label>
                            <input type="radio" id="form2-quiz5-footer" name="question-quiz__form2-radio-container" value="до 50м2" class="question-quiz__form-type-home-input">
                            <label class="question-quiz__form-area-item" for="form2-quiz5-footer">
                                <div class="question-quiz__form-area-item-circle"></div>
                                <span class="question-quiz__form-area-item-text">До 50 м<sup>2</sup></span>
                            </label>
                            <input type="radio" id="form2-quiz6-footer" name="question-quiz__form2-radio-container" value="до 60м2" class="question-quiz__form-type-home-input">
                            <label class="question-quiz__form-area-item" for="form2-quiz6-footer">
                                <div class="question-quiz__form-area-item-circle"></div>
                                <span class="question-quiz__form-area-item-text">До 60 м<sup>2</sup></span>
                            </label>
                            <input type="radio" id="form2-quiz7-footer" name="question-quiz__form2-radio-container" value="свыше 70м2" class="question-quiz__form-type-home-input">
                            <label class="question-quiz__form-area-item" for="form2-quiz7-footer">
                                <div class="question-quiz__form-area-item-circle"></div>
                                <span class="question-quiz__form-area-item-text">Свыше 70 м<sup>2</sup></span>
                            </label>
                        </div>
                        <div class="question-quiz__form-button-container">
                            <button class="question-quiz__form-button-back-container" type="button">
                                <div class="question-quiz__form-button-back-container_arrow"></div>
                                <div class="question-quiz__form-button-back-container_text">Назад</div>
                            </button>
                            <button class="question-quiz__form-button-skip" type="button">Пропустить этот шаг</button>
                            <button type="button" class="question-quiz__form-button-next-container button-hover">
                                <div class="question-quiz__form-button-next-container_text">Следующий шаг</div>
                                <div class="question-quiz__form-button-next-container_arrow"></div>
                            </button>
                        </div>
                    </article>
                    <aside class="question-quiz__form-aside">
                        <div class="question-quiz__form-aside-block-photo">
                            <img src="<?=get_template_directory_uri()?>/src/images/robert.png" alt="Консультант" class="question-quiz__form-aside-photo">
                        </div>
                        <span class="question-quiz__form-aside-title">Егор, менеджер:</span>
                        <p class="question-quiz__form-aside-text">
                            <q>Мощность оборудования напрямую зависит от площади помещения.<br>
                                <br>
                                Чем больше площадь, тем более производительное оборудование Вам потребуется.</q>
                        </p>
                    </aside>
                </div>
                <div class="question-quiz__form-container-footer" id="section-quiz-form-step3-footer">
                    <article class="question-quiz__form-content">
                        <p class="question-quiz__form-title">Шаг 3: Выберите ориентировочную стоимость кондиционера:</p>
                        <span class="question-quiz__form-text">75% готово</span>
                        <div class="question-quiz__form-strip-box">
                            <div class="question-quiz__form-strip-left"></div>
                            <div class="question-quiz__form-strip-circle"></div>
                            <div class="question-quiz__form-strip-right"></div>
                        </div>
                        <div class="question-quiz__form-type-home-container">
                            <input type="radio" id="form3-quiz1-footer" name="question-quiz__form3-radio-container" value="Бюджетный" class="question-quiz__form-type-home-input">
                            <label class="question-quiz__form-area-item" for="form3-quiz1-footer">
                                <div class="question-quiz__form-area-item-circle"></div>
                                <span class="question-quiz__form-area-item-text">Бюджетный</span>
                            </label>
                            <input type="radio" id="form3-quiz2-footer" name="question-quiz__form3-radio-container" value="Цена / качество" class="question-quiz__form-type-home-input">
                            <label class="question-quiz__form-area-item" for="form3-quiz2-footer">
                                <div class="question-quiz__form-area-item-circle"></div>
                                <span class="question-quiz__form-area-item-text">Цена / качество</span>
                            </label>
                            <input type="radio" id="form3-quiz3-footer" name="question-quiz__form3-radio-container" value="Премиум" class="question-quiz__form-type-home-input">
                            <label class="question-quiz__form-area-item" for="form3-quiz3-footer">
                                <div class="question-quiz__form-area-item-circle"></div>
                                <span class="question-quiz__form-area-item-text">Премиум</span>
                            </label>
                        </div>
                        <div class="question-quiz__form-button-container">
                            <button class="question-quiz__form-button-back-container" type="button">
                                <div class="question-quiz__form-button-back-container_arrow"></div>
                                <div class="question-quiz__form-button-back-container_text">Назад</div>
                            </button>
                            <button class="question-quiz__form-button-skip" type="button">Пропустить этот шаг</button>
                            <button type="button" class="question-quiz__form-button-next-container button-hover">
                                <div class="question-quiz__form-button-next-container_text">Следующий шаг</div>
                                <div class="question-quiz__form-button-next-container_arrow"></div>
                            </button>
                        </div>
                    </article>
                    <aside class="question-quiz__form-aside">
                        <div class="question-quiz__form-aside-block-photo">
                            <img src="<?=get_template_directory_uri()?>/src/images/robert.png" alt="Консультант" class="question-quiz__form-aside-photo">
                        </div>
                        <span class="question-quiz__form-aside-title">Егор, менеджер:</span>
                        <p class="question-quiz__form-aside-text">
                            <q>Какие цели Вы ставите?<br><br>
                                Охлаждение, охлаждение и обогрев? А может Вы в поиске дизайнерской модели?<br><br>
                                В зависимости от бюджета мы подберем несколько вариантов, которые помогут достигнуть Вашу цель.</q>
                        </p>
                    </aside>
                </div>
                <div class="question-quiz__form-container-footer" id="section-quiz-form-step4-footer">
                    <article class="question-quiz__form-content">
                        <p class="question-quiz__form-title">Шаг 4: Нужен ли Вам монтаж?</p>
                        <span class="question-quiz__form-text">99% готово</span>
                        <div class="question-quiz__form-strip-box">
                            <div class="question-quiz__form-strip-left"></div>
                            <div class="question-quiz__form-strip-circle"></div>
                            <div class="question-quiz__form-strip-right"></div>
                        </div>
                        <div class="question-quiz__form-type-home-container">
                            <input type="radio" id="form4-quiz1-footer" name="question-quiz__form4-radio-container" value="Да" class="question-quiz__form-type-home-input">
                            <label class="question-quiz__form-area-item" for="form4-quiz1-footer">
                                <div class="question-quiz__form-area-item-circle"></div>
                                <span class="question-quiz__form-area-item-text">Да</span>
                            </label>
                            <input type="radio" id="form4-quiz2-footer" name="question-quiz__form4-radio-container" value="Нет" class="question-quiz__form-type-home-input">
                            <label class="question-quiz__form-area-item" for="form4-quiz2-footer">
                                <div class="question-quiz__form-area-item-circle"></div>
                                <span class="question-quiz__form-area-item-text">Нет</span>
                            </label>
                        </div>
                        <div class="question-quiz__form-button-container">
                            <button class="question-quiz__form-button-back-container" type="button">
                                <div class="question-quiz__form-button-back-container_arrow"></div>
                                <div class="question-quiz__form-button-back-container_text">Назад</div>
                            </button>
                            <button class="question-quiz__form-button-skip" type="button">Пропустить этот шаг</button>
                            <button type="button" class="question-quiz__form-button-next-container button-hover">
                                <div class="question-quiz__form-button-next-container_text">Следующий шаг</div>
                                <div class="question-quiz__form-button-next-container_arrow"></div>
                            </button>
                        </div>
                    </article>
                    <aside class="question-quiz__form-aside">
                        <div class="question-quiz__form-aside-block-photo">
                            <img src="<?=get_template_directory_uri()?>/src/images/robert.png" alt="Консультант" class="question-quiz__form-aside-photo">
                        </div>
                        <span class="question-quiz__form-aside-title">Егор, менеджер:</span>
                        <p class="question-quiz__form-aside-text">
                            <q>Не секрет, что профессиональная установка лучше, чем некачественный монтаж, ведь 90% неисправностей кондиционера происходят из-за неправильного монтажа.
                                <br><br>
                                При монтаже <q>под ключ</q> мы используем европейские материалы. Гарантия 7 лет.</q>
                        </p>
                    </aside>
                </div>
                <div class="question-quiz__last-form-container-footer" id="section-quiz-form-step5-footer">
                    <div class="question-quiz__last-form_left-item question-quiz__last-form_item"></div>
                    <div class="question-quiz__last-form_right-item question-quiz__last-form_item">
                        <p class="question-quiz__last-form-title">Отлично! Вы ответили на все вопросы!<br>
                            В течение 5 минут мы расчитаем
                            несколько вариантов кондиционеров
                            с установкой для Вашего помещения!</p>
                        <p class="question-quiz__last-form-text">Оставьте Ваши контакты для получения результата</p>
                        <input type="text" class="question-quiz__last-form-input-text" required maxlength="30" placeholder="Введите Ваше имя">
                        <input type="tel" class="question-quiz__last-form-input-text" required placeholder="+375 (">
                        <button type="submit" value="Получить результат" class="question-quiz__last-form-input-submit">Получить результат</button>
						<input type="hidden" name="themeName" value="Отправка квиз/страница подробная карточка товара/электролюкс.бел">
                    </div>
                </div>
            </form>
        </div>
    </section>
    <section class="related-product">
        <div class="box">
            <h2 class="title-section">С этим так же смотрят:</h2>
            <div class="catalog__items-container related-product__items-container">
                <?php
                $args = array(
                'post_type' => 'condition',
                'orderby'   => 'rand',
                'posts_per_page' => 3,
                );
$query = new WP_Query( $args );
if( $query->have_posts() ){
    while( $query->have_posts() ){
        $query->the_post();
        ?>
                <div class="catalog__item">
                    <div class="catalog__sticker-container">
                        <?php if (get_field('bestseller')) {
                            echo '<div class="catalog__sticker-item">Хит продаж</div>';
                        } ?>
                        <?php if (get_field('assembly_discount')){
            echo '<div class="catalog__sticker-item">-' . get_field('assembly_discount') . '% на монтаж</div>';
                        } ?>
            <?php if (get_field('new_model')) {
                            echo '<div class="catalog__sticker-item">Новая модель</div>';
                        } ?>
                    </div>
                    <div class="catalog__img-wrapper">
                        <img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="catalog__img">
                    </div>
                    <p class="catalog__cond-title"><?php the_title(); ?></p>
                    <?php include "raiting.php" ?>
                    <div class="catalog__item-description">
                        <p class="catalog__descr-item">Обслуживаемая площадь: <span class="bold"><?php the_field('served_area')?> м<sup>2</sup></span></p>
                        <p class="catalog__descr-item">Режимы: <span class="bold">
                                <?php
                                $operating = get_field('operating_mode');
                                if ($operating && in_array('Охлаждение', $operating) && in_array('Обогрев', $operating) ):?>
                                охлаждение/обогрев
                                <?php elseif( $operating && in_array('Охлаждение', $operating) ): ?>
                                охлаждение
                                <?php elseif ($operating && in_array('Обогрев', $operating) ):?>
                                обогрев
                        <?php endif; ?>
                            </span></p>
                        <p class="catalog__descr-item">Мощность охлаждения: <span class="bold"><?php the_field('power_cooling')?> Вт</span></p>
                        <p class="catalog__descr-item">Мощность обогрева: <span class="bold"><?php the_field('power_hot')?> Вт</span></p>
                    </div>
                    <div class="catalog__horizontal-line"></div>
                    <p class="catalog__item-cost">Стоимость:
                        <span class="catalog__new-cost"><?php the_field('price_new') ?> р</span>
                        <span class="catalog__old-cost"><?php the_field('price_old')?> р</span>
                    </p>
                    <p class="catalog__payment">В рассрочку на 12 мес.: <span class="catalog__bold-text">
                            <?php echo round(get_field('price_12')/11)?> р/мес</span></p>
                    <a href="<?php echo get_permalink($query->post->ID) ?>" class="catalog__button-box catalog__button-box-animate">
                        <div class="catalog__button-text">Подробнее о модели</div>
                        <div class="catalog__button-logo catalog__item-button"></div>
                    </a>
                </div>
        <?php
    }
    wp_reset_postdata(); // сбрасываем переменную $post
}
else
    echo '<div class="empty">Пусто</div>';
                ?>
            </div>
        </div>
    </section>
    <section class="questions-product">
        <div class="box">
            <h2 class="questions__title title-section">Остались вопросы?<br>
                Ответим на любой из них!</h2>
            <form action="<?php echo get_template_directory_uri() ?>/mailto-default.php" method="post" enctype="multipart/form-data" class="questions__form form-default">
                <?php include(get_template_directory()."/partials/utm.php"); ?>
                <input type="text" placeholder="Введите Ваше имя"
                       minlength="2" maxlength="30" class="questions__form-input" required>
                <input type="tel" placeholder="Введите Ваш телефон" class="questions__form-input" required>
                <input type="submit" value="Получить консультацию!" class="questions__form-submit">
				<input type="hidden" name="themeName" value="Отправка остались вопросы?/страница подробная карточка товара/электролюкс.бел">
            </form>
        </div>
    </section>

<?php get_footer(); ?>