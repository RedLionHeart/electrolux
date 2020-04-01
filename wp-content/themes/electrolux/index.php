<?php
/*
*   Template name: Главная страница
*/
get_header();
?>

    <section class="offer offer__video-container">
        <div class="box">
            <h1 class="offer__title">Кондиционеры Electrolux от официального дилера<br class="none-br-991">
                от 78 рублей в месяц в Беларуси.<br>
                Доставим и установим уже завтра!</h1>
            <div class="offer__horizontal-line_red"></div>
            <p class="offer__paragraph">Ответьте на 5 простых вопросов за 2 минуты и узнайте стоимость вашего кондиционера,<br class="none-br-991">
                а так же <span class="offer__text-red">получите скидку на установку -10%</span> (Вы сэкономите более 26 рублей)!</p>
            <a href="javascript:;" data-fancybox data-src="#quiz-popup" data-options='{"touch": false}' class="button-box button-hover">
                <div class="button-box__logo"></div>
                <div  class="button-box__text">Пройти простой тест за 2 минуты
                    и получить скидку -10% на монтаж!</div>
            </a>
            <div class="timer-box">
                <img src="<?=get_template_directory_uri()?>/src/images/time.png" alt="Часы" class="timer-box__logo">
                <div class="timer-box__title-box">
                    <div class="timer-box__title">До конца акции осталось:</div>
                    <div class="timer-box__timer"></div>
                </div>
            </div>
            <video loop="" muted="" autoplay="" poster="" class="offer__video">
                <source src="<?=get_template_directory_uri()?>/src/video/video-bckgr.mp4" type="video/mp4">
                <source src="<?=get_template_directory_uri()?>/src/video/video-webm.webm" type="video/webm">
                <!--<source src="uxtesting.ogv" type="video/ogg">-->
            </video>
        </div>
    </section>
    <section class="advantages">
        <div class="box">
            <div class="advantages-box">
                <div class="advantages__vertical-line"></div>
                <div class="advantages__item">
                    <img src="<?=get_template_directory_uri() ?>/src/images/payment.png" alt="Рассрочка" class="advantages__logo">
                    <p class="advantages__title">Выгодная рассрочка<br>
                        до 12 месяцев</p>
                </div>
                <div class="advantages__vertical-line"></div>
                <div class="advantages__item">
                    <img src="<?=get_template_directory_uri()?>/src/images/contract.png" alt="Договор" class="advantages__logo">
                    <p class="advantages__title">Гарантия<br>
                        7 лет по договору</p>
                </div>
                <div class="advantages__vertical-line"></div>
                <div class="advantages__item">
                    <img src="<?=get_template_directory_uri()?>/src/images/key.png" alt="Обслуживание" class="advantages__logo">
                    <p class="advantages__title">Доставка, установка,<br>
                        обслуживание, ремонт</p>
                </div>
                <div class="advantages__vertical-line"></div>
                <div class="advantages__item">
                    <img src="<?=get_template_directory_uri()?>/src/images/service.png" alt="Сервисный центр" class="advantages__logo">
                    <p class="advantages__title">Свой<br>
                        сервисный центр</p>
                </div>
                <div class="advantages__vertical-line"></div>
            </div>
        </div>
    </section>
    <section class="advantages-electrolux">
        <div class="box">
            <h2 class="title-section">Преимущества кондиционеров Electrolux</h2>
            <div class="advantages-electrolux__list">
                <div class="advantages-electrolux__main-img">
                    <img src="<?=get_template_directory_uri()?>/src/images/advantages/01.jpg" alt="image" class="advantages-electrolux__image">
                </div>
                <div class="advantages-electrolux__list-item advantages-electrolux__list-item-onclick adv-list-item_1"></div>
                <div class="advantages-electrolux__list-item advantages-electrolux__list-item-onclick adv-list-item_2"></div>
                <div class="advantages-electrolux__list-item advantages-electrolux__list-item-onclick adv-list-item_3"></div>
                <div class="advantages-electrolux__list-item advantages-electrolux__list-item-onclick adv-list-item_4"></div>
                <div class="advantages-electrolux__list-item advantages-electrolux__list-item-onclick adv-list-item_5"></div>
                <div class="advantages-electrolux__list-item advantages-electrolux__list-item-onclick adv-list-item_6"></div>
                <div class="advantages-electrolux__list-item advantages-electrolux__list-item-onclick adv-list-item_7"></div>
                <div class="advantages-electrolux__list-text list-text_right adv-list-text_1">
                    <h3 class="advantages-electrolux__list-title">01. Высокая энергоэффективность</h3>
                    Благодаря технологиям “Super DC Inverter”
                    кондиционеры Electrolux достигают сезонной энергоэффективности SEER = 6.3 (Класс A++), что соответствует последним европейским стандартам<br>
                    <a href="<?php echo get_home_url(null, "about-conditions/");?>" class="advantages-electrolux__list-link">Подробнее...</a>
                </div>
                <div class="advantages-electrolux__list-text list-text_right adv-list-text_2">
                    <h3 class="advantages-electrolux__list-title">02. Технологии теплообмена</h3>
                    Благодаря модернизированной форме внутренней поверхности медных трубок, энергоэффективность прибора увеличена на 5-6%<br>
                    <a href="<?php echo get_home_url(null, "about-conditions/");?>" class="advantages-electrolux__list-link">Подробнее...</a>
                </div>
                <div class="advantages-electrolux__list-text list-text_right adv-list-text_3">
                    <h3 class="advantages-electrolux__list-title">03. Бесшумная работа</h3>
                    За счет конструктивных особенностей внутреннего блока кондиционеры работают придельно тихо
                    (около 19 дБ)<br>
                    <a href="<?php echo get_home_url(null, "about-conditions/");?>" class="advantages-electrolux__list-link">Подробнее...</a>
                </div>
                <div class="advantages-electrolux__list-text list-text_left adv-list-text_4">
                    <h3 class="advantages-electrolux__list-title">04. Защита дома от замерзания</h3>
                    При низких температурах на улице кондиционеры в автономном режиме будут придерживать температуру в доме +8 С, потребляя минимум электроэнергии.<br>
                    <a href="<?php echo get_home_url(null, "about-conditions/");?>" class="advantages-electrolux__list-link">Подробнее...</a>
                </div>
                <div class="advantages-electrolux__list-text list-text_left adv-list-text_5">
                    <h3 class="advantages-electrolux__list-title">05. 4D-поток</h3>
                    Благодаря этой функции Вы сможете дистанционно изменять направление воздушного потока в 4-ех направлениях<br>
                    <a href="<?php echo get_home_url(null, "about-conditions/");?>" class="advantages-electrolux__list-link">Подробнее...</a>
                </div>
                <div class="advantages-electrolux__list-text list-text_left adv-list-text_6">
                    <h3 class="advantages-electrolux__list-title">06. Red Dot Award</h3>
                    Престижная награда в области дизайна.
                    Победа в конкурсе - знак высочайшего международного признания в професииональной среде<br>
                    <a href="<?php echo get_home_url(null, "about-conditions/");?>" class="advantages-electrolux__list-link">Подробнее...</a>
                </div>
            </div>
            <div class="advantages-electrolux__list-mobile">
                <div class="advantages-electrolux__list-mobile-item">
                    <a href="<?php echo get_home_url(null, "about-conditions/");?>" class="advantages-electrolux__list-mobile-logo adv-list-item-mobile_1"></a>
                    <div class="advantages-electrolux__list-mobile-text-container">
                        <span class="advantages-electrolux__list-mobile-text-title">01. Высокая энергоэффективность</span>
                        <p class="advantages-electrolux__list-mobile-text-default">Благодаря технологиям “Super DC Inverter”
                            кондиционеры Electrolux достигают сезонной энергоэффективности SEER = 6.3 (Класс A++), что соответствует последним европейским стандартам
                            <a href="<?php echo get_home_url(null, "about-conditions/");?>" class="advantages-electrolux__list-mobile-link">Подробнее...</a></p>
                    </div></div>
                <div class="advantages-electrolux__list-mobile-item">
                    <a href="<?php echo get_home_url(null, "about-conditions/");?>" class="advantages-electrolux__list-mobile-logo adv-list-item-mobile_2"></a>
                    <div class="advantages-electrolux__list-mobile-text-container">
                        <span class="advantages-electrolux__list-mobile-text-title">02. Технологии теплообмена</span>
                        <p class="advantages-electrolux__list-mobile-text-default">Благодаря модернизированной форме внутренней поверхности медных трубок, энергоэффективность прибора увеличена на 5-6%
                            <a href="<?php echo get_home_url(null, "about-conditions/");?>" class="advantages-electrolux__list-mobile-link">Подробнее...</a></p>
                    </div></div>
                <div class="advantages-electrolux__list-mobile-item">
                    <a href="<?php echo get_home_url(null, "about-conditions/");?>" class="advantages-electrolux__list-mobile-logo adv-list-item-mobile_3"></a>
                    <div class="advantages-electrolux__list-mobile-text-container">
                        <span class="advantages-electrolux__list-mobile-text-title">03. Бесшумная работа</span>
                        <p class="advantages-electrolux__list-mobile-text-default">За счет конструктивных особенностей внутреннего блока кондиционеры работают придельно тихо
                            (около 19 дБ)
                            <a href="<?php echo get_home_url(null, "about-conditions/");?>" class="advantages-electrolux__list-mobile-link">Подробнее...</a></p>
                    </div></div>
                <div class="advantages-electrolux__list-mobile-item">
                    <a href="<?php echo get_home_url(null, "about-conditions/");?>" class="advantages-electrolux__list-mobile-logo adv-list-item-mobile_4"></a>
                    <div class="advantages-electrolux__list-mobile-text-container">
                        <span class="advantages-electrolux__list-mobile-text-title">04. Защита дома от замерзания</span>
                        <p class="advantages-electrolux__list-mobile-text-default">При низких температурах на улице кондиционеры в автономном режиме будут придерживать температуру в доме +8 С, потребляя минимум электроэнергии.
                            <a href="<?php echo get_home_url(null, "about-conditions/");?>" class="advantages-electrolux__list-mobile-link">Подробнее...</a></p>
                    </div></div>
                <div class="advantages-electrolux__list-mobile-item">
                    <a href="<?php echo get_home_url(null, "about-conditions/");?>" class="advantages-electrolux__list-mobile-logo adv-list-item-mobile_5"></a>
                    <div class="advantages-electrolux__list-mobile-text-container">
                        <span class="advantages-electrolux__list-mobile-text-title">05. 4D-поток</span>
                        <p class="advantages-electrolux__list-mobile-text-default">Благодаря этой функции Вы сможете дистанционно изменять направление воздушного потока в 4-ех направлениях
                            <a href="<?php echo get_home_url(null, "about-conditions/");?>" class="advantages-electrolux__list-mobile-link">Подробнее...</a></p>
                    </div></div>
                <div class="advantages-electrolux__list-mobile-item">
                    <a href="<?php echo get_home_url(null, "about-conditions/");?>" class="advantages-electrolux__list-mobile-logo adv-list-item-mobile_6"></a>
                    <div class="advantages-electrolux__list-mobile-text-container">
                        <span class="advantages-electrolux__list-mobile-text-title">06. Red Dot Award</span>
                        <p class="advantages-electrolux__list-mobile-text-default">Престижная награда в области дизайна.
                            Победа в конкурсе - знак высочайшего международного признания в професииональной среде
                            <a href="<?php get_home_url( null, 'about-conditions/')?>" class="advantages-electrolux__list-mobile-link">Подробнее...</a></p>
                    </div></div>
            </div>
            <a href="<?php echo get_home_url(null, "about-conditions/");?>" class="advantages-electrolux__button button-hover">Узнать больше<br>
                о кондиционерах Electrolux</a>
        </div>
    </section>
    <section class="catalog" id="catalog">
        <div class="box">
            <h2 class="title-section">Каталог кондиционеров Electrolux</h2>
            <p class="catalog__description paragraph-section">Постоянно в наличии на складе более 50 лучших моделей Electrolux!</p>
            <div class="catalog__filters-container">
                <form action="<?php echo get_template_directory_uri() ?>/mailto.php" method="post" enctype="multipart/form-data" class="catalog__filters">
                    <div class="filters__fieldset">
                        <p class="filters__title">01. Выберите площадь помещения:</p>
                        <?php echo do_shortcode( '[facetwp facet="площадь_помещения"]' ); ?>

                    </div>
                    <div class="filters__fieldset">
                        <p class="filters__title">02. Выберите тип кондиционера:</p>
                        <?php echo do_shortcode( '[facetwp facet="type_cond"]' ); ?>
                    </div>
                    <div class="filters__fieldset">
                        <p class="filters__title">03. Ориентировочная стоимость:</p>
                        <?php echo do_shortcode( '[facetwp facet="ориентировочная_стоимость"]' ); ?>
                        <div class="catalog__button-filters-container">
                            <div class="catalog__button-trash button-hover" title="Сбросить" onclick="FWP.reset();"></div>
                            <div class="catalog__button-box button-hover catalog__button-box_with-trash" onclick="FWP.refresh();return false;">
                                <div class="catalog__button-text" id="send">Подобрать</div>
                                <div class="catalog__button-logo"></div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="catalog__button-box catalog__button-mobile">
                <div class="catalog__button-text">Показать фильтры</div>
                <div class="catalog__button-logo"></div>
            </div>
            <div class="catalog__button-hide-filters">
                Скрыть фильтры
            </div>

            <div class="catalog__items-container">
                <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$args = array(
    'post_type' => 'condition',
    'posts_per_page' => 3,
    'facetwp' => true, // we added this
    "meta_query" => [
        "sort_0" => [
            "key" => "bestseller",
            'value'   => '-1',
            'compare' => 'NOT LIKE'
        ]
    ],
    "orderby" => [
        "sort_0" => "DESC"
    ],
);

                query_posts($args);

                if ( have_posts() ) : while (have_posts()) : the_post();

                    get_template_part( 'content', get_post_format() );

                endwhile;

                endif;
                ?>
            </div>

            <div class="catalog__show-more-button fwp-load-more">Показать больше моделей</div>
        </div>
    </section>
    <section class="question-quiz">
        <div class="box">
            <h2 class="question-quiz__title title-section">Не знаете какой кондиционер подойдет именно Вам?</h2>
            <p class="paragraph-section question-quiz__description">Ответьте на 5 простых вопросов за 2 минуты и узнайте стоимость подходящего Вам кондиционера,
                а так же <span class="yellow-text">получите скидку на монтаж -10%</span> (Вы сэкономите более 26 рублей)!</p>
            <span class="question-quiz__timer">07:07:09:42</span>
            <form action="<?php echo get_template_directory_uri() ?>/mailto-quiz.php" method="post" enctype="multipart/form-data" id="section-quiz-form" class="question-quiz__form">
                <?php include(get_template_directory()."/partials/utm.php"); ?>
                <div class="question-quiz__form-container active-flex" id="section-quiz-form-step1">
                    <article class="question-quiz__form-content">
                        <p class="question-quiz__form-title">Шаг 1: Выберите тип Вашего помещения:</p>
                        <span class="question-quiz__form-text">25% готово</span>
                        <div class="question-quiz__form-strip-box">
                            <div class="question-quiz__form-strip-left"></div>
                            <div class="question-quiz__form-strip-circle"></div>
                            <div class="question-quiz__form-strip-right"></div>
                        </div>
                        <div class="question-quiz__form-type-home-container">
                            <input type="radio" id="quiz1" name="question-quiz__form-radio-container" value="квартира" class="question-quiz__form-type-home-input">
                            <label class="question-quiz__form-type-home-item" for="quiz1">
                                <div class="question-quiz__form-type-home-item-success"></div>
                                <img src="<?=get_template_directory_uri()?>/src/images/quiz/1.jpg" alt="home1" class="question-quiz__form-type-home-img">
                                <p class="question-quiz__form-type-home-text">Квартира</p>
                            </label>
                            <input type="radio" id="quiz2" name="question-quiz__form-radio-container" value="квартира" class="question-quiz__form-type-home-input">
                            <label class="question-quiz__form-type-home-item" for="quiz2">
                                <div class="question-quiz__form-type-home-item-success"></div>
                                <img src="<?=get_template_directory_uri()?>/src/images/quiz/2.jpg" alt="home2" class="question-quiz__form-type-home-img">
                                <p class="question-quiz__form-type-home-text">Дом</p>
                            </label>
                            <input type="radio" id="quiz3" name="question-quiz__form-radio-container" value="квартира" class="question-quiz__form-type-home-input">
                            <label class="question-quiz__form-type-home-item" for="quiz3">
                                <div class="question-quiz__form-type-home-item-success"></div>
                                <img src="<?=get_template_directory_uri()?>/src/images/quiz/3.jpg" alt="home3" class="question-quiz__form-type-home-img">
                                <p class="question-quiz__form-type-home-text">Офис</p>
                            </label>
                            <input type="radio" id="quiz4" name="question-quiz__form-radio-container" value="квартира" class="question-quiz__form-type-home-input">
                            <label class="question-quiz__form-type-home-item" for="quiz4">
                                <div class="question-quiz__form-type-home-item-success"></div>
                                <img src="<?=get_template_directory_uri()?>/src/images/quiz/4.jpg" alt="home4" class="question-quiz__form-type-home-img">
                                <p class="question-quiz__form-type-home-text">Торговое пом-е</p>
                            </label>
                            <input type="radio" id="quiz5" name="question-quiz__form-radio-container" value="квартира" class="question-quiz__form-type-home-input">
                            <label class="question-quiz__form-type-home-item" for="quiz5">
                                <div class="question-quiz__form-type-home-item-success"></div>
                                <img src="<?=get_template_directory_uri()?>/src/images/quiz/5.jpg" alt="home5" class="question-quiz__form-type-home-img">
                                <p class="question-quiz__form-type-home-text">Склад</p>
                            </label>
                            <input type="radio" id="quiz6" name="question-quiz__form-radio-container" value="квартира" class="question-quiz__form-type-home-input">
                            <label class="question-quiz__form-type-home-item" for="quiz6">
                                <div class="question-quiz__form-type-home-item-success"></div>
                                <img src="<?=get_template_directory_uri()?>/src/images/quiz/6.jpg" alt="home6" class="question-quiz__form-type-home-img">
                                <p class="question-quiz__form-type-home-text">Другое</p>
                            </label>
                        </div>
                        <div class="question-quiz__form-button-container">
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
                <div class="question-quiz__form-container" id="section-quiz-form-step2">
                    <article class="question-quiz__form-content">
                        <p class="question-quiz__form-title">Шаг 2: Выберите площадь Вашего помещения:</p>
                        <span class="question-quiz__form-text">50% готово</span>
                        <div class="question-quiz__form-strip-box">
                            <div class="question-quiz__form-strip-left"></div>
                            <div class="question-quiz__form-strip-circle"></div>
                            <div class="question-quiz__form-strip-right"></div>
                        </div>
                        <div class="question-quiz__form-type-home-container">
                            <input type="radio" id="form2-quiz1" name="question-quiz__form2-radio-container" value="До 20м2" class="question-quiz__form-type-home-input">
                            <label class="question-quiz__form-area-item" for="form2-quiz1">
                                <div class="question-quiz__form-area-item-circle"></div>
                                <span class="question-quiz__form-area-item-text">До 20 м<sup>2</sup></span>
                            </label>
                            <input type="radio" id="form2-quiz2" name="question-quiz__form2-radio-container" value="до 25м2" class="question-quiz__form-type-home-input">
                            <label class="question-quiz__form-area-item" for="form2-quiz2">
                                <div class="question-quiz__form-area-item-circle"></div>
                                <span class="question-quiz__form-area-item-text">До 25 м<sup>2</sup></span>
                            </label>
                            <input type="radio" id="form2-quiz3" name="question-quiz__form2-radio-container" value="до 30м2" class="question-quiz__form-type-home-input">
                            <label class="question-quiz__form-area-item" for="form2-quiz3">
                                <div class="question-quiz__form-area-item-circle"></div>
                                <span class="question-quiz__form-area-item-text">До 30 м<sup>2</sup></span>
                            </label>
                            <input type="radio" id="form2-quiz4" name="question-quiz__form2-radio-container" value="до 35м2" class="question-quiz__form-type-home-input">
                            <label class="question-quiz__form-area-item" for="form2-quiz4">
                                <div class="question-quiz__form-area-item-circle"></div>
                                <span class="question-quiz__form-area-item-text">До 35 м<sup>2</sup></span>
                            </label>
                            <input type="radio" id="form2-quiz5" name="question-quiz__form2-radio-container" value="до 50м2" class="question-quiz__form-type-home-input">
                            <label class="question-quiz__form-area-item" for="form2-quiz5">
                                <div class="question-quiz__form-area-item-circle"></div>
                                <span class="question-quiz__form-area-item-text">До 50 м<sup>2</sup></span>
                            </label>
                            <input type="radio" id="form2-quiz6" name="question-quiz__form2-radio-container" value="до 60м2" class="question-quiz__form-type-home-input">
                            <label class="question-quiz__form-area-item" for="form2-quiz6">
                                <div class="question-quiz__form-area-item-circle"></div>
                                <span class="question-quiz__form-area-item-text">До 60 м<sup>2</sup></span>
                            </label>
                            <input type="radio" id="form2-quiz7" name="question-quiz__form2-radio-container" value="свыше 70м2" class="question-quiz__form-type-home-input">
                            <label class="question-quiz__form-area-item" for="form2-quiz7">
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
                <div class="question-quiz__form-container" id="section-quiz-form-step3">
                    <article class="question-quiz__form-content">
                        <p class="question-quiz__form-title">Шаг 3: Выберите ориентировочную стоимость кондиционера:</p>
                        <span class="question-quiz__form-text">75% готово</span>
                        <div class="question-quiz__form-strip-box">
                            <div class="question-quiz__form-strip-left"></div>
                            <div class="question-quiz__form-strip-circle"></div>
                            <div class="question-quiz__form-strip-right"></div>
                        </div>
                        <div class="question-quiz__form-type-home-container">
                            <input type="radio" id="form3-quiz1" name="question-quiz__form3-radio-container" value="Бюджетный" class="question-quiz__form-type-home-input">
                            <label class="question-quiz__form-area-item" for="form3-quiz1">
                                <div class="question-quiz__form-area-item-circle"></div>
                                <span class="question-quiz__form-area-item-text">Бюджетный</span>
                            </label>
                            <input type="radio" id="form3-quiz2" name="question-quiz__form3-radio-container" value="Цена / качество" class="question-quiz__form-type-home-input">
                            <label class="question-quiz__form-area-item" for="form3-quiz2">
                                <div class="question-quiz__form-area-item-circle"></div>
                                <span class="question-quiz__form-area-item-text">Цена / качество</span>
                            </label>
                            <input type="radio" id="form3-quiz3" name="question-quiz__form3-radio-container" value="Премиум" class="question-quiz__form-type-home-input">
                            <label class="question-quiz__form-area-item" for="form3-quiz3">
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
                <div class="question-quiz__form-container" id="section-quiz-form-step4">
                    <article class="question-quiz__form-content">
                        <p class="question-quiz__form-title">Шаг 4: Нужен ли Вам монтаж?</p>
                        <span class="question-quiz__form-text">99% готово</span>
                        <div class="question-quiz__form-strip-box">
                            <div class="question-quiz__form-strip-left"></div>
                            <div class="question-quiz__form-strip-circle"></div>
                            <div class="question-quiz__form-strip-right"></div>
                        </div>
                        <div class="question-quiz__form-type-home-container">
                            <input type="radio" id="form4-quiz1" name="question-quiz__form4-radio-container" value="Да" class="question-quiz__form-type-home-input">
                            <label class="question-quiz__form-area-item" for="form4-quiz1">
                                <div class="question-quiz__form-area-item-circle"></div>
                                <span class="question-quiz__form-area-item-text">Да</span>
                            </label>
                            <input type="radio" id="form4-quiz2" name="question-quiz__form4-radio-container" value="Нет" class="question-quiz__form-type-home-input">
                            <label class="question-quiz__form-area-item" for="form4-quiz2">
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
                <div class="question-quiz__last-form-container" id="section-quiz-form-step5">
                    <div class="question-quiz__last-form_left-item question-quiz__last-form_item"></div>
                    <div class="question-quiz__last-form_right-item question-quiz__last-form_item">
                        <p class="question-quiz__last-form-title">Отлично! Вы ответили на все вопросы!<br>
                            В течение 5 минут мы расчитаем
                            несколько вариантов кондиционеров
                            с установкой для Вашего помещения!</p>
                        <p class="question-quiz__last-form-text">Оставьте Ваши контакты для получения результата</p>
                        <input type="text" class="question-quiz__last-form-input-text" name="name" required maxlength="30" placeholder="Введите Ваше имя">
                        <input type="tel" class="question-quiz__last-form-input-text" name="phone" required placeholder="+375 (">
                        <button type="submit" value="Получить результат" class="question-quiz__last-form-input-submit">Получить результат</button>
						<input type="hidden" name="themeName" value="Отправка квиз на главной 1/главная/электролюкс.бел">
                    </div>
                </div>
            </form>
        </div>
    </section>
    <section class="table-inform">
        <div class="box">
            <h2 class="title-section table-inform__title">Экономьте электричество в 3-5 раз!<br>
                Кондиционер Electrolux окупится за 2 сезона!</h2>
            <p class="paragraph-section table-inform__paragraph">Расчеты произведены на примере обогрева помещения площадью 35 м<sup>2</sup></p>
            <article >
                <table class="table-inform__table">
                    <tbody>
                    <tr class="table-inform__table-row">
                        <td class="table-inform__table-col-element"></td>
                        <td class="table-inform__table-col-element" colspan="2">
                            <img src="<?=get_template_directory_uri()?>/src/images/cond-table1.jpg" alt="кондиционер" class="table-inform__table-img"><br class="table-inform__table-img">
                            <span class="table-inform__bold-text">Тепловой насос Electrolux (зимний кондиционер)</span></td>
                        <td class="table-inform__table-col-element table-inform__bold-text" colspan="2">
                            <div class="table-inform__table-col-img-container">
                                <img src="<?=get_template_directory_uri()?>/src/images/cond-table2.jpg" alt="электрообогреватель" class="table-inform__table-img">
                                <img src="<?=get_template_directory_uri()?>/src/images/cond-table3.jpg" alt="электрообогреватель" class="table-inform__table-img">
                                <img src="<?=get_template_directory_uri()?>/src/images/cond-table4.jpg" alt="электрообогреватель" class="table-inform__table-img">
                                <img src="<?=get_template_directory_uri()?>/src/images/cond-table5.jpg" alt="электрообогреватель" class="table-inform__table-img">
                            </div>
                            Электрообогреватель, котел, конвектор и т. д.</td>
                    </tr>
                    <tr class="table-inform__table-row">
                        <td class="table-inform__table-col-element">Месяц</td>
                        <td class="table-inform__table-col-element">Потребление электроэнергии в сутки, кВт</td>
                        <td class="table-inform__table-col-element">Потребление электроэнергии в месяц, кВт</td>
                        <td class="table-inform__table-col-element">Потребление электроэнергии в сутки, кВт</td>
                        <td class="table-inform__table-col-element">Потребление электроэнергии в месяц, кВт</td>
                    </tr>
                    <tr class="table-inform__table-row">
                        <td class="table-inform__table-col-element">Октябрь</td>
                        <td class="table-inform__table-col-element">6</td>
                        <td class="table-inform__table-col-element">180</td>
                        <td class="table-inform__table-col-element">22.4</td>
                        <td class="table-inform__table-col-element">672</td>
                    </tr>
                    <tr class="table-inform__table-row">
                        <td class="table-inform__table-col-element">Ноябрь</td>
                        <td class="table-inform__table-col-element">8</td>
                        <td class="table-inform__table-col-element">240</td>
                        <td class="table-inform__table-col-element">31.5</td>
                        <td class="table-inform__table-col-element">946</td>
                    </tr>
                    <tr class="table-inform__table-row">
                        <td class="table-inform__table-col-element">Декабрь</td>
                        <td class="table-inform__table-col-element">11.1</td>
                        <td class="table-inform__table-col-element">335</td>
                        <td class="table-inform__table-col-element">32.7</td>
                        <td class="table-inform__table-col-element">981</td>
                    </tr>
                    <tr class="table-inform__table-row">
                        <td class="table-inform__table-col-element">Январь</td>
                        <td class="table-inform__table-col-element">14.7</td>
                        <td class="table-inform__table-col-element">442</td>
                        <td class="table-inform__table-col-element">27.8</td>
                        <td class="table-inform__table-col-element">834</td>
                    </tr>
                    <tr class="table-inform__table-row">
                        <td class="table-inform__table-col-element">Февраль</td>
                        <td class="table-inform__table-col-element">10.1</td>
                        <td class="table-inform__table-col-element">305</td>
                        <td class="table-inform__table-col-element">28.0</td>
                        <td class="table-inform__table-col-element">840</td>
                    </tr>
                    <tr class="table-inform__table-row">
                        <td class="table-inform__table-col-element">Март</td>
                        <td class="table-inform__table-col-element">6.5</td>
                        <td class="table-inform__table-col-element">195</td>
                        <td class="table-inform__table-col-element">25.2</td>
                        <td class="table-inform__table-col-element">756</td>
                    </tr>
                    <tr class="table-inform__table-row">
                        <td class="table-inform__table-col-element">Апрель</td>
                        <td class="table-inform__table-col-element">3.6</td>
                        <td class="table-inform__table-col-element">109</td>
                        <td class="table-inform__table-col-element">14.8</td>
                        <td class="table-inform__table-col-element">444</td>
                    </tr>
                    <tr class="table-inform__table-row">
                        <td class="table-inform__table-col-element table-inform__bold-text" colspan="2">Итого за отопительный период, кВт:</td>
                        <td class="table-inform__table-col-element table-inform__table-green-col">1806</td>
                        <td class="table-inform__table-col-element"></td>
                        <td class="table-inform__table-col-element table-inform__table-red-col">5473</td>
                    </tr>
                    </tbody>
                </table>
                <table class="table-inform__table-small">
                    <tbody class="table-inform__table-small-body">
                    <tr class="table-inform__table-small-row">
                        <td class="table-inform__table-small-col">При этом кондиционер сможет охлаждать Ваше помещение летом</td>
                    </tr>
                    <tr class="table-inform__table-small-row">
                        <td class="table-inform__table-small-col">С помощью кондиционера Вы сможете поддерживать точную температуру в помещении, нажав пару кнопкок на пульте</td>
                    </tr>
                    <tr class="table-inform__table-small-row">
                        <td class="table-inform__table-small-col">Кондиционеры не только обогревают/охлаждают помещение, но и очищают и ионизируют воздух</td>
                    </tr>
                    </tbody>
                </table>
            </article>
        </div>
    </section>
    <section class="guarantee">
        <div class="box">
            <h2 class="title-section guarantee__title">По согласованию с компанией Electrolux<br>
                мы предлагаем Вам самую большую гарантию в Беларуси!</h2>
            <p class="paragraph-section guarantee__paragraph">Мы уверены в качестве наших кондиционеров<br>
                и высоком профессионализме наших монтажников (с опытом работы более 10 лет!),<br>
                поэтому предлагаем самую большую гарантию по договору:</p>
            <div class="guarantee__inform-container">
                <div class="guarantee__inform-item">
                    <p class="guarantee__inform-item-upper-text">ГАРАНТИЯ</p>
                    <strong class="guarantee__inform-item-title">7 ЛЕТ</strong><br>
                    <strong class="guarantee__inform-item-subtitle">на кондиционер</strong><br>
                    <span class="guarantee__inform-item-text">* Другие компании поддерживают<br>
заводскую гарантию 3-5 лет</span>
                </div>
                <div class="guarantee__inform-plus">+</div>
                <div class="guarantee__inform-item">
                    <p class="guarantee__inform-item-upper-text">ГАРАНТИЯ</p>
                    <strong class="guarantee__inform-item-title">7 ЛЕТ</strong><br>
                    <strong class="guarantee__inform-item-subtitle">на установку</strong><br>
                    <span class="guarantee__inform-item-text">* Другие компании дают гарантию<br>
на работу всего-то 1 год =(</span>
                </div>
            </div>
            <p class="guarantee__more-information">
                В течение всего гарантийного срока в случае поломки кондиционера,<br class="none-br-991">
                мы оперативно произведем ремонтные работы в течение 1-2 дней,<br class="none-br-991">
                а если не сможем починить, то <span class="bold">БЕСПЛАТНО УСТАНОВИМ НОВЫЙ!</span>
            </p>
            <a href="javascript:;" data-fancybox data-src="#quiz-popup" data-options='{"touch": false}' class="button-box button-hover guarantee__button">
                <div class="button-box__logo"></div>
                <div class="button-box__text">Пройти простой тест за 2 минуты
                    и получить скидку -10% на монтаж!</div>
            </a>
        </div>
    </section>
    <section class="benefits">
        <div class="box">
            <h2 class="title-section benefits__title">Получайте еще больше выгод<br>
                от сотрудничества с нами:</h2>
            <div class="advantages-electrolux__list">
                <div class="advantages-electrolux__main-img">
                    <img src="<?=get_template_directory_uri()?>/src/images/benefits/01.jpg" alt="image" class="benefits__image">
                </div>
                <div class="advantages-electrolux__list-item benefits__list-item-onclick ben-list-item_1"></div>
                <div class="advantages-electrolux__list-item benefits__list-item-onclick ben-list-item_2"></div>
                <div class="advantages-electrolux__list-item benefits__list-item-onclick ben-list-item_3"></div>
                <div class="advantages-electrolux__list-item benefits__list-item-onclick ben-list-item_4"></div>
                <div class="advantages-electrolux__list-item benefits__list-item-onclick ben-list-item_5"></div>
                <div class="advantages-electrolux__list-item benefits__list-item-onclick ben-list-item_6"></div>
                <div class="advantages-electrolux__list-item  ben-list-item_7"></div>
                <div class="advantages-electrolux__list-text list-text_right adv-list-text_1">
                    <h3 class="advantages-electrolux__list-title">01. Выгодная цена</h3>
                    Мы работаем напрямую с первыми поставщиками и заводами-
                    производителями, что позволяет нам предлагать цену на кондиционеры ниже рыночной на 30-10%<br>
                    <a href="<?php echo get_home_url(null, "about-us/");?>" class="advantages-electrolux__list-link">Подробнее...</a>
                </div>
                <div class="advantages-electrolux__list-text list-text_right adv-list-text_2">
                    <h3 class="advantages-electrolux__list-title">02. Свой склад кондиционеров</h3>
                    Постоянно  в наличии более
                    50 лучших моделей на складе, что позволяет Вам купить любой  кондиционер и установить его
                    в день заказа<br>
                    <a href="<?php echo get_home_url(null, "about-us/");?>" class="advantages-electrolux__list-link">Подробнее...</a>
                </div>
                <div class="advantages-electrolux__list-text list-text_right adv-list-text_3">
                    <h3 class="advantages-electrolux__list-title">03. Мы всегда на связи 24/7</h3>
                    Для новых клиентов доступен круглосуточный чат на сайте,
                    для всех с кем мы уже работаем доступны наши корпоративные номера<br>
                    <a href="<?php echo get_home_url(null, "about-us/");?>" class="advantages-electrolux__list-link">Подробнее...</a>
                </div>
                <div class="advantages-electrolux__list-text list-text_left adv-list-text_4">
                    <h3 class="advantages-electrolux__list-title">04. Профессиональные инструменты</h3>
                    Для монтажа используем дорогостоящий профинструмент,
                    что позволяет нам выполнять монтаж быстро и качественно, не повреждая имущества. Убираем за собой мусор<br>
                    <a href="<?php echo get_home_url(null, "about-us/");?>" class="advantages-electrolux__list-link">Подробнее...</a>
                </div>
                <div class="advantages-electrolux__list-text list-text_left adv-list-text_5">
                    <h3 class="advantages-electrolux__list-title">05. Свой сервисный центр</h3>
                    Всем клиентам гарантируем быстрый ремонт кондиционера в сервисном центре, даже если
                    у Вас закончилась гарантия<br>
                    <a href="<?php echo get_home_url(null, "about-us/");?>" class="advantages-electrolux__list-link">Подробнее...</a>
                </div>
                <div class="advantages-electrolux__list-text list-text_left adv-list-text_6">
                    <h3 class="advantages-electrolux__list-title">06. Доставка в любую точку Беларуси</h3>
                    Потому что у нас свои автопарки по всей стране, что позволяет доставлять кондиционеры в любую точку
                    от 4 до 12 часов<br>
                    <a href="<?php echo get_home_url(null, "about-us/");?>" class="advantages-electrolux__list-link">Подробнее...</a>
                </div>
            </div>
            <div class="advantages-electrolux__list-mobile">
                <div class="advantages-electrolux__list-mobile-item">
                    <a href="<?php echo get_home_url(null, "about-conditions/");?>" class="advantages-electrolux__list-mobile-logo ben-list-item-mobile_1"></a>
                    <div class="advantages-electrolux__list-mobile-text-container">
                        <span class="advantages-electrolux__list-mobile-text-title">01. Выгодная цена</span>
                        <p class="advantages-electrolux__list-mobile-text-default">
                            Мы работаем напрямую с первыми поставщиками и заводами-производителями, что позволяет нам предлагать цену на кондиционеры ниже рыночной на 30-10%
                            <a href="<?php echo get_home_url(null, "about-us/");?>" class="advantages-electrolux__list-mobile-link">Подробнее...</a></p>
                    </div></div>
                <div class="advantages-electrolux__list-mobile-item">
                    <a href="<?php echo get_home_url(null, "about-us/");?>" class="advantages-electrolux__list-mobile-logo ben-list-item-mobile_2"></a>
                    <div class="advantages-electrolux__list-mobile-text-container">
                        <span class="advantages-electrolux__list-mobile-text-title">02. Свой склад кондиционеров</span>
                        <p class="advantages-electrolux__list-mobile-text-default">Постоянно  в наличии более 50 лучших моделей на складе, что позволяет Вам купить любой  кондиицонер и установить его
                            в день заказа
                            <a href="<?php echo get_home_url(null, "about-us/");?>" class="advantages-electrolux__list-mobile-link">Подробнее...</a></p>
                    </div></div>
                <div class="advantages-electrolux__list-mobile-item">
                    <a href="<?php echo get_home_url(null, "about-us/");?>" class="advantages-electrolux__list-mobile-logo ben-list-item-mobile_3"></a>
                    <div class="advantages-electrolux__list-mobile-text-container">
                        <span class="advantages-electrolux__list-mobile-text-title">03. Мы всегда на связи 24/7</span>
                        <p class="advantages-electrolux__list-mobile-text-default">Для новых клиентов доступен круглосуточный чат на сайте,
                            для всех с кем мы уже работаем доступны наши корпоративные номера
                            <a href="<?php echo get_home_url(null, "about-us/");?>" class="advantages-electrolux__list-mobile-link">Подробнее...</a></p>
                    </div></div>
                <div class="advantages-electrolux__list-mobile-item">
                    <a href="<?php echo get_home_url(null, "about-us/");?>" class="advantages-electrolux__list-mobile-logo ben-list-item-mobile_4"></a>
                    <div class="advantages-electrolux__list-mobile-text-container">
                        <span class="advantages-electrolux__list-mobile-text-title">04. Профессиональные инструменты</span>
                        <p class="advantages-electrolux__list-mobile-text-default">Для монтажа используем дорогостоящий профинструмент,
                            что позволяет нам выполнять монтаж быстро и качественно, не повреждая имущества. Убираем за собой мусор
                            <a href="<?php echo get_home_url(null, "about-us/");?>" class="advantages-electrolux__list-mobile-link">Подробнее...</a></p>
                    </div></div>
                <div class="advantages-electrolux__list-mobile-item">
                    <a href="<?php echo get_home_url(null, "about-us/");?>" class="advantages-electrolux__list-mobile-logo ben-list-item-mobile_5"></a>
                    <div class="advantages-electrolux__list-mobile-text-container">
                        <span class="advantages-electrolux__list-mobile-text-title">05. Свой сервисный центр</span>
                        <p class="advantages-electrolux__list-mobile-text-default">Всем клиентам гарантируем быстрый ремонт кондиционера в сервисном центре, даже если
                            у Вас закончилась гарантия
                            <a href="<?php echo get_home_url(null, "about-us/");?>" class="advantages-electrolux__list-mobile-link">Подробнее...</a></p>
                    </div></div>
                <div class="advantages-electrolux__list-mobile-item">
                    <a href="<?php echo get_home_url(null, "about-us/");?>" class="advantages-electrolux__list-mobile-logo ben-list-item-mobile_6"></a>
                    <div class="advantages-electrolux__list-mobile-text-container">
                        <span class="advantages-electrolux__list-mobile-text-title">06. Доставка в любую точку Беларуси</span>
                        <p class="advantages-electrolux__list-mobile-text-default">
                            Потомучто у нас свои автопарки по всей стране, что позволяет доставлять кондиционеры в любую точку
                            от 4 до 12 часов
                            <a href="<?php echo get_home_url(null, "about-us/");?>" class="advantages-electrolux__list-mobile-link">Подробнее...</a></p>
                    </div></div>
            </div>
            <a href="<?php echo get_home_url(null, "about-us/");?>" class="advantages-electrolux__button button-hover benefits__button">Узнать еще больше о выгодах</a>
        </div>
    </section>
    <section class="consultation">
        <div class="box">
            <h2 class="title-section">Получайте бесплатную консультацию<br>
                от наших ведущих специалистов прямо сейчас!</h2>
            <div class="consultation__card-container">
                <div class="consultation__card-item">
                    <div class="consultation__card-img-container">
                        <img src="<?=get_template_directory_uri()?>/src/images/consult-egor.png" alt="Консультант Егор" class="consultation__card-img">
                        <span class="consultation__card-img-text">Егор,<br>менеджер</span>
                    </div>
                    <h3 class="consultation__card-title">Оставьте заявку на бесплатную консультацию
                        за 5 минут и получите:</h3>
                    <ol class="consultation__card-text">
                        <li>Бесплатную консультацию с ведущим специалистом</li>
                        <li>Профессиональный подбор кондиционера</li>
                        <li>Предварительную стоимость кондиционера</li>
                        <li>Индивидуальную скидку</li>
                    </ol>
                    <a href="javascript:;" data-fancybox data-src="#consult-manager-popup" data-options='{"touch": false}' class="consultation__card-button-box">
                        <div class="consultation__button-text">Получить консультацию менеджера</div>
                        <div class="consultation__button-logo"></div>
                    </a>
                </div>
                <div class="consultation__card-item">
                    <div class="consultation__card-img-container">
                        <img src="<?=get_template_directory_uri()?>/src/images/consult-vitaly.png" alt="Консультант Виталий" class="consultation__card-img">
                        <span class="consultation__card-img-text">Виталий,<br>инженер</span>
                    </div>
                    <h3 class="consultation__card-title">Закажите бесплатный выезд инженера,<br>
                        просто оставьте заявку и получите:</h3>
                    <ol class="consultation__card-text">
                        <li>Бесплатный выезд мастера на место</li>
                        <li>Составление оптимального плана монтажа
                            с учетом Ваших пожеланий и помещения</li>
                        <li>Рекомендации по выбору кондиционера</li>
                        <li>Предварительную стоимость установки</li>
                    </ol>
                    <a href="javascript:;" data-fancybox data-src="#consult-engineer-popup" data-options='{"touch": false}' class="consultation__card-button-box">
                        <div class="consultation__button-text">Заказать выезд инженера</div>
                        <div class="consultation__button-logo"></div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="statistics">
        <div class="box">
            <h2 class="title-section">Мы уже установили более 7.000 кондиционеров Electrolux в Беларуси<br>
                и не собираемся останавливаться!</h2>
            <div class="statistics__slider-box statistics__slider-box-main-page">
                <div class="statistics__slider-item">
                    <img src="<?=get_template_directory_uri()?>/src/images/statistics/1.jpg" alt="Статистика" class="statistics__slider-img">
                    <span class="statistics__slider-text">г. Гомель</span>
                </div>
                <div class="statistics__slider-item">
                    <img src="<?=get_template_directory_uri()?>/src/images/statistics/2.jpg" alt="Статистика" class="statistics__slider-img">
                    <span class="statistics__slider-text">г. Минск</span>
                </div>
                <div class="statistics__slider-item">
                    <img src="<?=get_template_directory_uri()?>/src/images/statistics/3.jpg" alt="Статистика" class="statistics__slider-img">
                    <span class="statistics__slider-text">г. Брест</span>
                </div>
                <div class="statistics__slider-item">
                    <img src="<?=get_template_directory_uri()?>/src/images/statistics/4.jpg" alt="Статистика" class="statistics__slider-img">
                    <span class="statistics__slider-text">г. Витебск</span>
                </div>
                <div class="statistics__slider-item">
                    <img src="<?=get_template_directory_uri()?>/src/images/statistics/5.jpg" alt="Статистика" class="statistics__slider-img">
                    <span class="statistics__slider-text">г. Могилев</span>
                </div>
                <div class="statistics__slider-item">
                    <img src="<?=get_template_directory_uri()?>/src/images/statistics/6.jpg" alt="Статистика" class="statistics__slider-img">
                    <span class="statistics__slider-text">г. Гродно</span>
                </div>
            </div>
        </div>
    </section>
    <section class="reviews">
        <div class="box">
            <h2 class="title-section reviews__title">Что значит хороший сервис?</h2>
            <p class="paragraph-section reviews__paragraph">Самый простой критерий - это клиенты, довольные нашей работой!</p>
            <div class="reviews__video-container">
                <div class="reviews__video-item-container">
                    <div class="reviews__video-item">
                        <a class="video__link" href="https://youtu.be/BXODgRIwGwc?list=PLRZ-FaUQj-CNz9DhkEI6d0cmkGrFbc1w8">
                            <img class="video__media" src="https://i.ytimg.com/vi/BXODgRIwGwc/maxresdefault.jpg" alt="Монтаж кондиционера на автомойке">
                        </a>
                        <button type="button" class="video__button" aria-label="Запустить видео">
                            <svg сlass="video__button-svg" width="51" height="51" viewBox="0 0 39 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M39 22.5L0.750002 44.5836L0.750004 0.416352L39 22.5Z" fill="#F6554D"/>
                            </svg>
                        </button>
                    </div>
                    <p class="reviews__video-title">Отзыв об установке кондиционера</p>
                </div>
                <div class="reviews__video-item-container">
                    <div class="reviews__video-item">
                        <a class="video__link" href="https://youtu.be/MhKRLHQ92Mg?list=PLRZ-FaUQj-CNz9DhkEI6d0cmkGrFbc1w8">
                            <img class="video__media" src="https://i.ytimg.com/vi/MhKRLHQ92Mg/maxresdefault.jpg" alt="Монтаж кондиционера на автомойке">
                        </a>
                        <button type="button" class="video__button" aria-label="Запустить видео">
                            <svg сlass="video__button-svg" width="51" height="51" viewBox="0 0 39 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M39 22.5L0.750002 44.5836L0.750004 0.416352L39 22.5Z" fill="#F6554D"/>
                            </svg>
                        </button>
                    </div>
                    <p class="reviews__video-title">Отзыв об установке кондиционера</p>
                </div>
                <div class="reviews__video-item-container">
                    <div class="reviews__video-item">
                        <a class="video__link" href="https://youtu.be/vTMjJvBzRyw?list=PLRZ-FaUQj-CNz9DhkEI6d0cmkGrFbc1w8">
                            <img class="video__media" src="https://i.ytimg.com/vi/vTMjJvBzRyw/maxresdefault.jpg" alt="Монтаж кондиционера на автомойке">
                        </a>
                        <button type="button" class="video__button" aria-label="Запустить видео">
                            <svg сlass="video__button-svg" width="51" height="51" viewBox="0 0 39 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M39 22.5L0.750002 44.5836L0.750004 0.416352L39 22.5Z" fill="#F6554D"/>
                            </svg>
                        </button>
                    </div>
                    <p class="reviews__video-title">Отзыв об установке кондиционера</p>
                </div>
                <div class="reviews__video-item-container">
                    <div class="reviews__video-item">
                        <a class="video__link" href="https://youtu.be/iu0yBky7p7E?list=PLRZ-FaUQj-CNz9DhkEI6d0cmkGrFbc1w8">
                            <img class="video__media" src="https://i.ytimg.com/vi/iu0yBky7p7E/maxresdefault.jpg" alt="Монтаж кондиционера на автомойке">
                        </a>
                        <button type="button" class="video__button" aria-label="Запустить видео">
                            <svg сlass="video__button-svg" width="51" height="51" viewBox="0 0 39 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M39 22.5L0.750002 44.5836L0.750004 0.416352L39 22.5Z" fill="#F6554D"/>
                            </svg>
                        </button>
                    </div>
                    <p class="reviews__video-title">Отзыв об установке кондиционера</p>
                </div>
            </div>

        </div>
    </section>
    <section class="question-quiz">
        <div class="box">
            <h2 class="question-quiz__title title-section">Не знаете какой кондиционер подойдет именно Вам?</h2>
            <p class="paragraph-section question-quiz__description">Ответьте на 5 простых вопросов за 2 минуты и узнайте стоимость подходящего Вам кондиционера,
                а так же <span class="yellow-text">получите скидку на монтаж -10%</span> (Вы сэкономите более 26 рублей)!</p>
            <span class="question-quiz__timer question-quiz__timer1">07:07:09:42</span>
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
                        <input type="text" class="question-quiz__last-form-input-text" name="name" required maxlength="30" placeholder="Введите Ваше имя">
                        <input type="tel" class="question-quiz__last-form-input-text" name="phone" required placeholder="+375 (">
                        <button type="submit" value="Получить результат" class="question-quiz__last-form-input-submit">Получить результат</button>
						<input type="hidden" name="themeName" value="Отправка квиз на главной 2/главная/электролюкс.бел">
                    </div>
                </div>
            </form>
        </div>
    </section>
    <section class="questions">
        <div class="box">
            <h2 class="questions__title title-section">Остались вопросы?<br>
                Ответим на любой из них!</h2>
            <form action="<?php echo get_template_directory_uri() ?>/mailto-default.php" method="post" enctype="multipart/form-data" class="questions__form form-default">
                <?php include(get_template_directory()."/partials/utm.php"); ?>
                <input type="text" placeholder="Введите Ваше имя"
                       minlength="2" maxlength="30" name="name" class="questions__form-input" required>
                <input type="tel" placeholder="Введите Ваш телефон" name="phone" class="questions__form-input" required>
                <input type="submit" value="Получить консультацию!" class="questions__form-submit">
				<input type="hidden" name="themeName" value="Отправка остались вопросы?/главная/форма в конце/электролюкс.бел">
            </form>
        </div>
    </section>

<?php
get_footer();
?>