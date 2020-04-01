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
    <a href="<?php echo $post->post_name ?>" class="catalog__img-wrapper">
        <img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="catalog__img">
    </a>
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
    <a href="<?php echo $post->post_name ?>" class="catalog__button-box catalog__button-box-animate">
        <div class="catalog__button-text">Подробнее о модели</div>
        <div class="catalog__button-logo catalog__item-button"></div>
    </a>
</div>