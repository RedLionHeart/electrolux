</main>
<footer class="footer">
    <div class="box">
        <div class="footer__item-box">
            <div class="footer__item-container">
                <a href="<?php echo get_home_url(); ?>">
                <img src="<?=get_template_directory_uri()?>/src/images/logo-white.png" 
                     alt="Логотип футер белый" 
                     class="footer__item-logo">
                </a>
                <p class="footer__item-text">Кондиционеры Electrolux-
                    продажа, установка, обслуживание
                    в Беларуси</p>
                <div class="footer__item-horizontal-line"></div>
                <form action="<?php echo get_template_directory_uri() ?>/mailto-default.php" method="post" enctype="multipart/form-data" class="footer__form-mobile form-default">
                    <?php include(get_template_directory()."/partials/utm.php"); ?>
                    <input type="email" name="email" class="footer__form-input" placeholder="E-mail" required>
                    <input type="submit" class="footer__form-submit" value="Подписаться">
                </form>
                <strong class="footer__item-bold-text footer__item-mobile-none">ПОЛЕЗНЫЕ САЙТЫ:</strong>
                <div class="footer__item-link-container">
                    <a href="http://klimat24.by/" target="_blank" class="footer__item-link">Интернет-магазин климатической техники</a>
                    <a href="https://xn--24-6kc5ajgi3c.xn--90ais//" target="_blank" class="footer__item-link">Интернет-магазин кондиционеров</a>
                    <a href="https://xn--b1afk4ade.xn--24-6kc5ajgi3c.xn--90ais/" target="_blank" class="footer__item-link">Сервисное обслуживание кондиционеров</a>
                </div>
                <div class="footer__contacts-mobile">
                    <p> Звоните и пишите нам:<br>
                        <a href="tel:+375293048877" class="footer__item-bold-text">+375 (29) 304-88-77</a></p>
                    <p> E-mail:<br>
                        <a href="mailto:klimat24.bel@gmail.com" class="footer__item-bold-text">klimat24.bel@gmail.com</a></p>
                    <p> Адрес салона-магазина:<br>
                        <span class="footer__item-bold-text">ул. Советская, 61, оф. 202, (2-ой этаж)</span></p>
                    <p> Время работы офиса:<br>
                        <span class="footer__item-bold-text">Понедельник - Пятница: с 9:00-18:00<br>
Суббота: с 10:00-17:00<br>
Воскресенье: с 10:00-16:00</span></p>
                </div>
            </div>
            <div class="footer__item-container footer__item-container-with-line footer__item-container-center">
                <div class="footer__item-vertical-line"></div>
                <div class="footer__item-content">
                    <strong class="footer__item-bold-text">КОНТАКТНАЯ ИНФОРМАЦИЯ:</strong>
                    <p> Звоните и пишите нам:<br>
                        <a href="tel:+375293048877" class="footer__item-bold-text">+375 (29) 304-88-77</a></p>
                    <p> E-mail:<br>
                        <a href="mailto:klimat24.bel@gmail.com" class="footer__item-bold-text">klimat24.bel@gmail.com</a></p>
                    <p> Адрес салона-магазина:<br>
                        <span class="footer__item-bold-text">ул. Советская, 61, оф. 202, (2-ой этаж)</span></p>
                    <p> Время работы офиса:<br>
                        <span class="footer__item-bold-text">Понедельник - Пятница: с 9:00-18:00<br>
Суббота: с 10:00-17:00<br>
Воскресенье: с 10:00-16:00</span></p>
                </div>
            </div>
            <div class="footer__item-container footer__item-container-with-line footer__item-container-right">
                <div class="footer__item-vertical-line"></div>
                <div class="footer__item-content">
                    <strong class="footer__item-bold-text">НАШИ РЕКВИЗИТЫ:</strong>
                    <p>ООО "Климат24бел"<br>
                        УНП 491059396<br>
                        Р/с: BY83TECN30126211800100000000 в РУ №3 ОАО "Технобанк"
                        БИК TECNBY22 Регистрационный номер в Торговом реестре
                        Республики Беларусь: 356661 Свидетельство о государственной
                        регистрации №491059396 выдано 31.07.2019 г.</p>
                    <strong class="footer__item-bold-text">ПОДПИСЫВАЙТЕСЬ НА НОВОСТИ И АКЦИИ:</strong>
                    <form action="<?php echo get_template_directory_uri() ?>/mailto-default.php" method="post" enctype="multipart/form-data" class="footer__form form-default">
                        <?php include(get_template_directory()."/partials/utm.php"); ?>
                        <input type="email" name="email" class="footer__form-input" placeholder="E-mail" required>
                        <input type="submit" class="footer__form-submit" value="Подписаться">
						<input type="hidden" name="themeName" value="Отправка подписка на новости/футер/электролюкс.бел">
                    </form>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php function check_mobile_device() {
    $mobile_agent_array = array('ipad', 'iphone', 'android', 'pocket', 'palm', 'windows ce', 'windowsce', 'cellphone', 'opera mobi', 'ipod', 'small', 'sharp', 'sonyericsson', 'symbian', 'opera mini', 'nokia', 'htc_', 'samsung', 'motorola', 'smartphone', 'blackberry', 'playstation portable', 'tablet browser');
    $agent = strtolower($_SERVER['HTTP_USER_AGENT']);
    foreach ($mobile_agent_array as $value) {
        if (strpos($agent, $value) !== false) return true;
    };
    return false;
};?>
<div class="button-fixed__container">
    <a href="tel:+375293048877" class="button-fixed__item">
        <svg width="18" height="29" viewBox="0 0 18 29" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M10.7829 26.1429C10.7829 27.125 9.97935 27.9286 8.99721 27.9286C8.01507 27.9286 7.2115 27.125 7.2115 26.1429C7.2115 25.1607 8.01507 24.3571 8.99721 24.3571C9.97935 24.3571 10.7829 25.1607 10.7829 26.1429ZM15.4258 22.5714C15.4258 22.9509 15.091 23.2857 14.7115 23.2857H3.28292C2.90346 23.2857 2.56864 22.9509 2.56864 22.5714V6.85714C2.56864 6.47768 2.90346 6.14286 3.28292 6.14286H14.7115C15.091 6.14286 15.4258 6.47768 15.4258 6.85714V22.5714ZM11.1401 3.64286C11.1401 3.84375 10.9838 4 10.7829 4H7.2115C7.0106 4 6.85435 3.84375 6.85435 3.64286C6.85435 3.44196 7.0106 3.28571 7.2115 3.28571H10.7829C10.9838 3.28571 11.1401 3.44196 11.1401 3.64286ZM17.5686 3.28571C17.5686 1.72321 16.274 0.428571 14.7115 0.428571H3.28292C1.72042 0.428571 0.425781 1.72321 0.425781 3.28571V26.1429C0.425781 27.7054 1.72042 29 3.28292 29H14.7115C16.274 29 17.5686 27.7054 17.5686 26.1429V3.28571Z"
                  fill="white"/>
        </svg>
        <span class="button-fixed__item-text">Позвонить нам</span>
    </a>
    <? if(check_mobile_device()) :?>
  <a title="Viber" href="viber://add?number=375293048877" class="button-fixed__item">
    <? else : ?>
        <a title="Viber" href="viber://chat?number=+375293048877" class="button-fixed__item">
    <? endif; ?>
        <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M28.1865 24.7963C27.8393 25.6857 26.4895 27.3528 25.5463 28.0649C24.6921 28.7081 24.0881 28.9547 23.2901 28.9922C22.6336 29.0241 22.3614 28.9686 21.522 28.6239C14.937 25.9277 9.67959 21.9044 5.50445 16.3759C3.32452 13.489 1.66432 10.4948 0.52992 7.3886C-0.131738 5.57661 -0.164309 4.79 0.379162 3.86272C0.614139 3.47219 1.61361 2.50374 2.33901 1.96375C3.55019 1.06933 4.10762 0.738486 4.55338 0.645944C4.85815 0.580238 5.38859 0.631137 5.7264 0.752368C5.89065 0.808356 6.14331 0.939304 6.28895 1.03185C7.18046 1.61903 9.66098 4.77195 10.472 6.34518C10.9359 7.24423 11.0913 7.91007 10.9461 8.40379C10.7968 8.93452 10.5478 9.21354 9.43624 10.1033C8.99048 10.4615 8.57311 10.8298 8.5075 10.9274C8.33813 11.1694 8.2018 11.6442 8.2018 11.9796C8.20785 12.7579 8.71456 14.1683 9.37994 15.2538C9.89549 16.0964 10.82 17.1768 11.7348 18.0065C12.8087 18.9837 13.7561 19.6496 14.8254 20.1761C16.1999 20.8559 17.0393 21.028 17.6535 20.7439C17.8084 20.6745 17.9726 20.581 18.0243 20.5394C18.0718 20.4973 18.4324 20.0595 18.8269 19.5751C19.5868 18.6251 19.7594 18.4715 20.2801 18.2943C20.9413 18.0712 21.616 18.1314 22.2967 18.4761C22.8132 18.7417 23.9387 19.4353 24.6655 19.9383C25.6217 20.6041 27.6681 22.262 27.944 22.5924C28.4312 23.1893 28.514 23.9537 28.1865 24.7963Z" fill="white"/>
            <path d="M27.9482 22.5206C27.6754 22.1866 25.6525 20.5106 24.7072 19.8368C23.9887 19.3282 22.8765 18.6269 22.3655 18.3583C21.6926 18.0097 21.0256 17.9489 20.372 18.1744C19.8573 18.3536 19.6866 18.509 18.9355 19.4695C18.5455 19.9594 18.189 20.402 18.1421 20.4446C18.091 20.4867 17.9286 20.5812 17.7755 20.6514C17.1683 20.9387 16.3385 20.7646 14.9798 20.0773C13.9228 19.5449 12.9863 18.8716 11.9247 17.8834C11.0204 17.0445 10.1069 15.952 9.59675 15.0999C8.93854 14.0023 8.43763 12.5757 8.43211 11.7892C8.43211 11.45 8.56688 10.9704 8.73431 10.7252C8.76053 10.685 8.84424 10.5993 8.96383 10.4894C7.32726 11.4879 5.36227 12.0708 3.24779 12.0708C3.19351 12.0708 3.1397 12.0671 3.08496 12.0662C3.86783 13.4797 4.75879 14.8693 5.76612 16.2346C9.89343 21.8249 15.0902 25.8932 21.6001 28.6195C22.4299 28.9681 22.699 29.0247 23.348 28.992C24.1369 28.9536 24.7339 28.7042 25.5784 28.0543C26.5103 27.3342 27.8451 25.6485 28.1883 24.7492C28.5125 23.8967 28.4307 23.1237 27.9482 22.5206Z" fill="white"/>
            <path d="M13.8401 0.216236C14.0662 0.0116648 14.2242 -0.0172215 15.0061 0.00740283C15.413 0.0216092 16.0131 0.0689637 16.34 0.106847C17.9895 0.311893 19.323 0.707303 20.7859 1.41762C22.2255 2.11799 23.1463 2.78048 24.3651 3.9866C25.5068 5.12501 26.1392 5.98875 26.8112 7.32794C27.7468 9.1956 28.2798 11.4165 28.3703 13.8619C28.4031 14.6958 28.3803 14.8819 28.188 15.1201C27.823 15.5823 27.0235 15.5056 26.7498 14.9866C26.6627 14.8152 26.6389 14.6674 26.6104 13.9997C26.5614 12.9754 26.49 12.313 26.3467 11.5217C25.7809 8.41899 24.2837 5.94045 21.8952 4.16276C19.904 2.67583 17.8462 1.95131 15.1507 1.79409C14.2394 1.742 14.08 1.70838 13.8744 1.55116C13.4899 1.25046 13.4708 0.54535 13.8401 0.216236Z" fill="white"/>
            <path d="M19.4984 6.39467C18.5606 5.86061 17.1742 5.46405 15.9105 5.36634C15.4532 5.33097 15.2014 5.24167 15.0287 5.05024C14.7635 4.76111 14.7348 4.36941 14.9598 4.04491C15.2014 3.6846 15.5745 3.62624 16.69 3.78672C19.5215 4.18284 21.7151 5.43752 23.1524 7.4756C23.9597 8.62329 24.4628 9.97169 24.6364 11.4178C24.6966 11.9474 24.6966 12.913 24.6313 13.073C24.5698 13.2242 24.374 13.4293 24.2059 13.5138C24.0245 13.6026 23.637 13.5942 23.4232 13.4868C23.064 13.3135 22.9566 13.0376 22.9566 12.2901C22.9566 11.1375 22.6437 9.92262 22.1026 8.97962C21.486 7.90266 20.5917 7.01316 19.4984 6.39467Z" fill="white"/>
            <path d="M21.3133 12.7469C21.038 13.0182 20.5313 13.0282 20.2232 12.7718C20.001 12.5913 19.9298 12.4003 19.879 11.8836C19.8176 11.1959 19.7067 10.7141 19.5155 10.2677C19.1053 9.31863 18.3847 8.82688 17.1652 8.66579C16.5919 8.59098 16.4201 8.52066 16.233 8.28476C15.8935 7.84787 16.0242 7.14018 16.494 6.87934C16.6709 6.78458 16.7453 6.77361 17.1361 6.79904C17.3786 6.81401 17.7371 6.85939 17.9283 6.90428C18.8457 7.11524 19.5478 7.49128 20.1488 8.09923C20.9221 8.88773 21.3461 9.8413 21.5318 11.2113C21.657 12.1045 21.6052 12.4561 21.3133 12.7469Z" fill="white"/>
            <path d="M27.942 22.4337C27.6655 22.0951 25.615 20.3964 24.6569 19.7135C23.9287 19.198 22.8013 18.4871 22.2834 18.2149C21.6013 17.8616 20.9252 17.8 20.2627 18.0285C19.741 18.2102 19.568 18.3676 18.8067 19.3412C18.4113 19.8377 18.05 20.2864 18.0025 20.3295C17.9535 20.3703 17.801 20.458 17.6523 20.5282C16.4858 21.9576 15.1118 23.1934 13.5742 24.1779C15.9772 25.9288 18.6146 27.4027 21.5085 28.6144C22.3496 28.9677 22.6223 29.025 23.2801 28.9918C24.0797 28.953 24.6849 28.7002 25.5409 28.0415C26.4855 27.3116 27.8385 25.603 28.1863 24.6915C28.514 23.8284 28.431 23.045 27.942 22.4337Z" fill="white"/>
        </svg>
        <span class="button-fixed__item-text">Напиcать в Viber</span>
    </a>
</div>

<div class="go-top" id="gotop">
    <a href="#top" class="smoothscroll">
        <span class="icon ion-android-arrow-up"></span>
    </a>
</div>

<div class="callme-popup" id="callme-popup">
    <p class="callme-popup__title">Получите ответ<br>
        на Ваш вопрос по телефону!</p>
    <p class="callme-popup__paragraph">В течение 5 минут<br>
        с Вами свяжется наш консультант<br>
        и ответит на все вопросы!</p>
    <form action="<?php echo get_template_directory_uri() ?>/mailto-default.php" method="post" enctype="multipart/form-data" class="callme-popup__form form-default">
        <?php include(get_template_directory()."/partials/utm.php"); ?>
        <input
                type="text"
                class="callme-popup__input"
                name="name"
                placeholder="Введите Ваше имя"
                required
        />
        <input
                type="tel"
                class="callme-popup__input"
                name="phone"
                placeholder="Введите номер телефона"
                required
        />
        <input
                type="submit"
                class="callme-popup__submit"
                value="Перезвоните мне"
        />
		<input type="hidden" name="themeName" value="Отправка перезвоните мне/шапка/электролюкс.бел">
    </form>
</div>
<div class="callme-popup" id="consult-manager-popup">
    <p class="callme-popup__title">Просто оставьте заявку<br>
        на бесплатную консультацию!</p>
    <p class="callme-popup__paragraph">В течение 5 минут<br>
        с Вами свяжется наш менеджер<br>
        и ответит на все вопросы!</p>
    <form action="<?php echo get_template_directory_uri() ?>/mailto-default.php" method="post" enctype="multipart/form-data" class="callme-popup__form form-default">
        <?php include(get_template_directory()."/partials/utm.php"); ?>
        <input
                type="text"
                class="callme-popup__input"
                name="name"
                placeholder="Введите Ваше имя"
                required
                maxlength="30"
        />
        <input
                type="tel"
                class="callme-popup__input"
                name="phone"
                placeholder="Введите номер телефона"
                required
        />
        <input
                type="submit"
                class="callme-popup__submit"
                value="Получить консультацию"
        />
		<input type="hidden" name="themeName" value="Отправка получить консультацию менеджера (егор)/блок ведущие спецы/электролюкс.бел">
    </form>
</div>
<div class="callme-popup" id="consult-engineer-popup">
    <p class="callme-popup__title">Закажите выезд инженера<br>
        прямо сейчас!</p>
    <p class="callme-popup__paragraph">В течение 5 минут<br>
        с Вами свяжется наш консультант<br>
        для уточнения деталей!</p>
    <form action="<?php echo get_template_directory_uri() ?>/mailto-default.php" method="post" enctype="multipart/form-data" class="callme-popup__form form-default">
        <?php include(get_template_directory()."/partials/utm.php"); ?>
        <input
                type="text"
                class="callme-popup__input"
                name="name"
                placeholder="Введите Ваше имя"
                required
                maxlength="30"
        />
        <input
                type="tel"
                class="callme-popup__input"
                name="phone"
                placeholder="Введите номер телефона"
                required
        />
        <input
                type="submit"
                class="callme-popup__submit"
                value="Заказать выезд инженера"
        />
		<input type="hidden" name="themeName" value="Отправка заказать выезд инженера (виталик)/блок ведущие спецы/электролюкс.бел">
    </form>
</div>
<div class="callme-popup" id="consult-specialist-popup">
    <p class="callme-popup__title">Просто оставьте заявку<br>
        на бесплатную консультацию!</p>
    <p class="callme-popup__paragraph">В течение 5 минут<br>
        с Вами свяжется наш специалист<br>
        и ответит на все вопросы!</p>
    <form action="<?php echo get_template_directory_uri() ?>/mailto-default.php" method="post" enctype="multipart/form-data" class="callme-popup__form form-default">
        <?php include(get_template_directory()."/partials/utm.php"); ?>
        <input
                type="text"
                class="callme-popup__input"
                name="name"
                placeholder="Введите Ваше имя"
                required
                maxlength="30"
        />
        <input
                type="tel"
                class="callme-popup__input"
                name="phone"
                placeholder="Введите номер телефона"
                required
        />
        <input
                type="submit"
                class="callme-popup__submit"
                value="Получить консультацию"
        />
		<input type="hidden" name="themeName" value="Отправка получить консультацию/страница о нас/блок с фотами/электролюкс.бел">
    </form>
</div>
<div class="callme-popup" id="buy-condition-popup">
    <p class="callme-popup__title">Оставьте заявку<br>
        на покупку кондиционера!</p>
    <p class="callme-popup__paragraph">В течение 5 минут<br>
        с Вами свяжется наш менеджер<br>
        для уточнения деталей заявки!</p>
    <form action="<?php echo get_template_directory_uri() ?>/mailto-default.php" method="post" enctype="multipart/form-data" class="callme-popup__form form-default">
        <?php include(get_template_directory()."/partials/utm.php"); ?>
        <input
                type="text"
                class="callme-popup__input"
                name="name"
                placeholder="Введите Ваше имя"
                required
                maxlength="30"
        />
        <input
                type="tel"
                class="callme-popup__input"
                name="phone"
                placeholder="Введите номер телефона"
                required
        />
        <input
                type="submit"
                class="callme-popup__submit"
                value="Купить кондиционер"
        />
        <input type="hidden" name="themeName" id="hiddenName" value="">
        <input type="hidden" name="cash" id="cashinput" class="page-card__aside-form-input_none">
    </form>
</div>
<div class="quiz-popup" id="quiz-popup">
    <form action="<?php echo get_template_directory_uri() ?>/mailto-quiz.php" method="post" enctype="multipart/form-data" id="popup-quiz-form" class="popup-quiz__form">
        <?php include(get_template_directory()."/partials/utm.php"); ?>
        <div class="popup__form-container active-flex" id="popup-quiz-form-step1">
            <article class="question-quiz__form-content">
                <p class="question-quiz__form-title">Шаг 1: Выберите тип Вашего помещения:</p>
                <span class="question-quiz__form-text">25% готово</span>
                <div class="question-quiz__form-strip-box">
                    <div class="question-quiz__form-strip-left"></div>
                    <div class="question-quiz__form-strip-circle"></div>
                    <div class="question-quiz__form-strip-right"></div>
                </div>
                <div class="question-quiz__form-type-home-container">
                    <input type="radio" id="quiz1-popup" name="question-quiz__form-radio-container" value="квартира" class="question-quiz__form-type-home-input">
                    <label class="question-quiz__form-type-home-item" for="quiz1-popup">
                        <div class="question-quiz__form-type-home-item-success"></div>
                        <img src="<?=get_template_directory_uri()?>/src/images/quiz/1.jpg" alt="home1" class="question-quiz__form-type-home-img">
                        <p class="question-quiz__form-type-home-text">Квартира</p>
                    </label>
                    <input type="radio" id="quiz2-popup" name="question-quiz__form-radio-container" value="квартира" class="question-quiz__form-type-home-input">
                    <label class="question-quiz__form-type-home-item" for="quiz2-popup">
                        <div class="question-quiz__form-type-home-item-success"></div>
                        <img src="<?=get_template_directory_uri()?>/src/images/quiz/2.jpg" alt="home2" class="question-quiz__form-type-home-img">
                        <p class="question-quiz__form-type-home-text">Дом</p>
                    </label>
                    <input type="radio" id="quiz3-popup" name="question-quiz__form-radio-container" value="квартира" class="question-quiz__form-type-home-input">
                    <label class="question-quiz__form-type-home-item" for="quiz3-popup">
                        <div class="question-quiz__form-type-home-item-success"></div>
                        <img src="<?=get_template_directory_uri()?>/src/images/quiz/3.jpg" alt="home3" class="question-quiz__form-type-home-img">
                        <p class="question-quiz__form-type-home-text">Офис</p>
                    </label>
                    <input type="radio" id="quiz4-popup" name="question-quiz__form-radio-container" value="квартира" class="question-quiz__form-type-home-input">
                    <label class="question-quiz__form-type-home-item" for="quiz4-popup">
                        <div class="question-quiz__form-type-home-item-success"></div>
                        <img src="<?=get_template_directory_uri()?>/src/images/quiz/4.jpg" alt="home4" class="question-quiz__form-type-home-img">
                        <p class="question-quiz__form-type-home-text">Торговое пом-е</p>
                    </label>
                    <input type="radio" id="quiz5-popup" name="question-quiz__form-radio-container" value="квартира" class="question-quiz__form-type-home-input">
                    <label class="question-quiz__form-type-home-item" for="quiz5-popup">
                        <div class="question-quiz__form-type-home-item-success"></div>
                        <img src="<?=get_template_directory_uri()?>/src/images/quiz/5.jpg" alt="home5" class="question-quiz__form-type-home-img">
                        <p class="question-quiz__form-type-home-text">Склад</p>
                    </label>
                    <input type="radio" id="quiz6-popup" name="question-quiz__form-radio-container" value="квартира" class="question-quiz__form-type-home-input">
                    <label class="question-quiz__form-type-home-item" for="quiz6-popup">
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
        <div class="popup__form-container" id="popup-quiz-form-step2">
            <article class="question-quiz__form-content">
                <p class="question-quiz__form-title">Шаг 2: Выберите площадь Вашего помещения:</p>
                <span class="question-quiz__form-text">50% готово</span>
                <div class="question-quiz__form-strip-box">
                    <div class="question-quiz__form-strip-left"></div>
                    <div class="question-quiz__form-strip-circle"></div>
                    <div class="question-quiz__form-strip-right"></div>
                </div>
                <div class="question-quiz__form-type-home-container">
                    <input type="radio" id="form2-quiz1-popup" name="question-quiz__form2-radio-container" value="До 20м2" class="question-quiz__form-type-home-input">
                    <label class="question-quiz__form-area-item" for="form2-quiz1-popup">
                        <div class="question-quiz__form-area-item-circle"></div>
                        <span class="question-quiz__form-area-item-text">До 20 м<sup>2</sup></span>
                    </label>
                    <input type="radio" id="form2-quiz2-popup" name="question-quiz__form2-radio-container" value="до 25м2" class="question-quiz__form-type-home-input">
                    <label class="question-quiz__form-area-item" for="form2-quiz2-popup">
                        <div class="question-quiz__form-area-item-circle"></div>
                        <span class="question-quiz__form-area-item-text">До 25 м<sup>2</sup></span>
                    </label>
                    <input type="radio" id="form2-quiz3-popup" name="question-quiz__form2-radio-container" value="до 30м2" class="question-quiz__form-type-home-input">
                    <label class="question-quiz__form-area-item" for="form2-quiz3-popup">
                        <div class="question-quiz__form-area-item-circle"></div>
                        <span class="question-quiz__form-area-item-text">До 30 м<sup>2</sup></span>
                    </label>
                    <input type="radio" id="form2-quiz4-popup" name="question-quiz__form2-radio-container" value="до 35м2" class="question-quiz__form-type-home-input">
                    <label class="question-quiz__form-area-item" for="form2-quiz4-popup">
                        <div class="question-quiz__form-area-item-circle"></div>
                        <span class="question-quiz__form-area-item-text">До 35 м<sup>2</sup></span>
                    </label>
                    <input type="radio" id="form2-quiz5-popup" name="question-quiz__form2-radio-container" value="до 50м2" class="question-quiz__form-type-home-input">
                    <label class="question-quiz__form-area-item" for="form2-quiz5-popup">
                        <div class="question-quiz__form-area-item-circle"></div>
                        <span class="question-quiz__form-area-item-text">До 50 м<sup>2</sup></span>
                    </label>
                    <input type="radio" id="form2-quiz6-popup" name="question-quiz__form2-radio-container" value="до 60м2" class="question-quiz__form-type-home-input">
                    <label class="question-quiz__form-area-item" for="form2-quiz6-popup">
                        <div class="question-quiz__form-area-item-circle"></div>
                        <span class="question-quiz__form-area-item-text">До 60 м<sup>2</sup></span>
                    </label>
                    <input type="radio" id="form2-quiz7-popup" name="question-quiz__form2-radio-container" value="свыше 70м2" class="question-quiz__form-type-home-input">
                    <label class="question-quiz__form-area-item" for="form2-quiz7-popup">
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
        <div class="popup__form-container" id="popup-quiz-form-step3">
            <article class="question-quiz__form-content">
                <p class="question-quiz__form-title">Шаг 3: Выберите ориентировочную стоимость кондиционера:</p>
                <span class="question-quiz__form-text">75% готово</span>
                <div class="question-quiz__form-strip-box">
                    <div class="question-quiz__form-strip-left"></div>
                    <div class="question-quiz__form-strip-circle"></div>
                    <div class="question-quiz__form-strip-right"></div>
                </div>
                <div class="question-quiz__form-type-home-container">
                    <input type="radio" id="form3-quiz1-popup" name="question-quiz__form3-radio-container" value="Бюджетный" class="question-quiz__form-type-home-input">
                    <label class="question-quiz__form-area-item" for="form3-quiz1-popup">
                        <div class="question-quiz__form-area-item-circle"></div>
                        <span class="question-quiz__form-area-item-text">Бюджетный</span>
                    </label>
                    <input type="radio" id="form3-quiz2-popup" name="question-quiz__form3-radio-container" value="Цена / качество" class="question-quiz__form-type-home-input">
                    <label class="question-quiz__form-area-item" for="form3-quiz2-popup">
                        <div class="question-quiz__form-area-item-circle"></div>
                        <span class="question-quiz__form-area-item-text">Цена / качество</span>
                    </label>
                    <input type="radio" id="form3-quiz3-popup" name="question-quiz__form3-radio-container" value="Премиум" class="question-quiz__form-type-home-input">
                    <label class="question-quiz__form-area-item" for="form3-quiz3-popup">
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
        <div class="popup__form-container" id="popup-quiz-form-step4">
            <article class="question-quiz__form-content">
                <p class="question-quiz__form-title">Шаг 4: Нужен ли Вам монтаж?</p>
                <span class="question-quiz__form-text">99% готово</span>
                <div class="question-quiz__form-strip-box">
                    <div class="question-quiz__form-strip-left"></div>
                    <div class="question-quiz__form-strip-circle"></div>
                    <div class="question-quiz__form-strip-right"></div>
                </div>
                <div class="question-quiz__form-type-home-container">
                    <input type="radio" id="form4-quiz1-popup" name="question-quiz__form4-radio-container" value="Да" class="question-quiz__form-type-home-input">
                    <label class="question-quiz__form-area-item" for="form4-quiz1-popup">
                        <div class="question-quiz__form-area-item-circle"></div>
                        <span class="question-quiz__form-area-item-text">Да</span>
                    </label>
                    <input type="radio" id="form4-quiz2-popup" name="question-quiz__form4-radio-container" value="Нет" class="question-quiz__form-type-home-input">
                    <label class="question-quiz__form-area-item" for="form4-quiz2-popup">
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
        <div class="popup__last-form-container" id="popup-quiz-form-step5">
            <div class="question-quiz__last-form_left-item question-quiz__last-form_item"></div>
            <div class="question-quiz__last-form_right-item question-quiz__last-form_item">
                <p class="question-quiz__last-form-title">Отлично! Вы ответили на все вопросы!<br>
                    В течение 5 минут мы расчитаем
                    несколько вариантов кондиционеров
                    с установкой для Вашего помещения!</p>
                <p class="question-quiz__last-form-text">Оставьте Ваши контакты для получения результата</p>
                <input type="text" name="name" class="question-quiz__last-form-input-text" required maxlength="30" placeholder="Введите Ваше имя">
                <input type="tel" name="phone" class="question-quiz__last-form-input-text" required placeholder="+375 (">
                <button type="submit" value="Получить результат" class="question-quiz__last-form-input-submit">Получить результат</button>
				<input type="hidden" name="themeName" value="Отправка квиз (лайтбокс)/электролюкс.бел">
            </div>
        </div>
    </form>
</div>

<div class="popup-download" id="popup-download">
    <p class="popup-download__title">Постойте!<br>
        Не уходите с пустыми руками!</p>
    <p class="popup-download__paragraph">Заберите с собой каталог с ценами,<br>
        в котором мы собрали только лучшие модели кондиционеров Electrolux<br>
        за апрель 2020 года!</p>
    <img src="<?=get_template_directory_uri()?>/src/images/download-catalog.png" alt="Скачать каталог" class="popup-download__image">
    <div class="popup-download__form">
        <p class="popup-download__subtitle">Заполните короткую форму<br>
            и в ту же минуту Вы получите<br>
            каталог Electrolux с ценами!</p>
        <form action="#" class="callme-popup__form-download">
            <input
                    type="text"
                    class="callme-popup__input"
                    name="name"
                    placeholder="Введите Ваше имя"
                    required
                    maxlength="30"
            />
            <input
                    type="tel"
                    class="callme-popup__input"
                    name="phone"
                    placeholder="Введите номер телефона"
                    required
            />
            <input
                    type="submit"
                    class="callme-popup__submit"
                    value="Получить каталог бесплатно!"
            />
            <input type="hidden" name="themeName" value="Отправка скачать каталог/поп ап при уходе с сайта/электролюкс.бел">
        </form>
    </div>
</div>

<?php wp_footer(); ?>
<a href="//scroogefrog.com/en/?referrer_id=29135"><img src="//stat.clickfrog.ru/img/clfg_ref/icon_0.png" alt="click fraud detection"></a><div id="clickfrog_counter_container" style="width:0px;height:0px;overflow:hidden;"></div><script type="text/javascript">(function(d, w) {var clickfrog = function() {if(!d.getElementById('clickfrog_js_container')) {var sc = document.createElement('script');sc.type = 'text/javascript';sc.async = true;sc.src = "//stat.clickfrog.ru/c.js?r="+Math.random();sc.id = 'clickfrog_js_container';var c = document.getElementById('clickfrog_counter_container');c.parentNode.insertBefore(sc, c);}};if(w.opera == "[object Opera]"){d.addEventListener("DOMContentLoaded",clickfrog,false);}else {clickfrog();}})(document, window);</script><noscript><div style="width:0px;height:0px;overflow:hidden;"><img src="//stat.clickfrog.ru/no_script.php?img" style="width:0px; height:0px;" alt=""/></div></noscript><script type="text/javascript">var clickfrogru_uidh='74ccd47b6e5b0b03f1dcbb3717cde2a9';</script>
</body>
</html>