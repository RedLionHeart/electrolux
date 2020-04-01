<?php
/*
*   Template name: Страница скачивания каталога
*/
get_header('other-pages');
?>
<section class="thanks">
    <div class="box">
        <h1 class="thanks__title">Заявка на скачивание<br>
            каталога получена!</h1>
        <div class="thanks__red-line"></div>
        <p class="thanks__paragraph">Наши эксперты в скором времени свяжутся с вами и проконсультируют по любым вопросам!</p>
        <a href="<?=get_template_directory_uri()?>/src/Каталог кондиционеров Electrolux 2020, электролюкс.бел, 375293048877.pdf" download class="thanks__button button-hover">Скачать каталог</a>
    </div>
</section>
<?php
get_footer();
?>
