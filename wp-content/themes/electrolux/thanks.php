<?php
/*
*   Template name: Страница спасибо
*/
get_header('other-pages');
?>
    <section class="thanks">
        <div class="box">
            <h1 class="thanks__title">Ура!<br>
                Вы оставили заявку!</h1>
            <div class="thanks__red-line"></div>
            <p class="thanks__paragraph">Среди менеджеров уже идет борьба за такого замечательного клиента как Вы!<br>
                В течение 15 минут Вам перезвонит самый лучший менеджер!</p>
            <a href="<?php echo get_home_url(); ?>" class="thanks__button button-hover">Вернуться на главную страницу</a>
        </div>
    </section>
<?php
get_footer();
?>
