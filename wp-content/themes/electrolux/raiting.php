<div class="catalog__rating">
    <?php
    // Система прорисовки рейтинга
    $stars = 5;
    $raiting = get_field('raiting_cond'); //2.5
    $i = 0;
    $count_stars = round($raiting, 0, PHP_ROUND_HALF_DOWN);//2
    $difference_value = $raiting - $count_stars;//0.5

    for (; $i < $stars; $i++) {
        if ($i+1 <= $count_stars) {
            echo '<span class="catalog__rating-star catalog__rating-star_active"></span>';
        }
        else if ($difference_value > 0 && $i == $count_stars) {
            echo '<span class="catalog__rating-star catalog__rating-star_half-active"></span>';
        }
        else {
            echo '<span class="catalog__rating-star"></span>';
        }
    }
    ?>
</div>