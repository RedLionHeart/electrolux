/*(function () {
    var elem = document.querySelector('#send');
    var form = document.querySelector('.catalog__filters');

    if(elem){
        elem.addEventListener('click', function () {
            form.submit();
        });
    }
})();*/

function getCookie(name) {
    let matches = document.cookie.match(new RegExp(
        "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
    ));
    return matches ? decodeURIComponent(matches[1]) : undefined;
}
function setCookie(name, value, options = {}) {

    options = {
        path: '/',
        // при необходимости добавьте другие значения по умолчанию
        ...options
    };

    if (options.expires instanceof Date) {
        options.expires = options.expires.toUTCString();
    }

    let updatedCookie = encodeURIComponent(name) + "=" + encodeURIComponent(value);

    for (let optionKey in options) {
        updatedCookie += "; " + optionKey;
        let optionValue = options[optionKey];
        if (optionValue !== true) {
            updatedCookie += "=" + optionValue;
        }
    }

    document.cookie = updatedCookie;
}
function deleteCookie(name) {
    setCookie(name, "", {
        'max-age': -1
    })
}

(function () {
    var advantagesItemClicked = document.querySelectorAll('.advantages-electrolux__list-item-onclick');
    var advantagesImage = document.querySelector('.advantages-electrolux__image');

    advantagesItemClicked.forEach(function (item, index) {
        var checkClickButton = function(){
            advantagesItemClicked.forEach(function (item, index) {
                if(item.classList.contains('active-adv')){
                    var indexAdvantagesItem = 'active-adv-list-item_' + (index + 1);
                    item.classList.remove(indexAdvantagesItem, 'active-adv');
                }
            })
        };
        item.addEventListener('click', function () {

           switch (index) {
               case 0:
                   checkClickButton();
                   item.classList.add('active-adv-list-item_1');
                   item.classList.add('active-adv');
                   advantagesImage.src = './wp-content/themes/electrolux/src/images/advantages/01.jpg';
                   break;
               case 1:
                   checkClickButton();
                   item.classList.add('active-adv-list-item_2');
                   item.classList.add('active-adv');
                   advantagesImage.src = './wp-content/themes/electrolux/src/images/advantages/02.jpg';
                   break;
               case 2:
                   checkClickButton();
                   item.classList.add('active-adv-list-item_3');
                   item.classList.add('active-adv');
                   advantagesImage.src = './wp-content/themes/electrolux/src/images/advantages/03.jpg';
                   break;
               case 3:
                   checkClickButton();
                   item.classList.add('active-adv-list-item_4');
                   item.classList.add('active-adv');
                   advantagesImage.src = './wp-content/themes/electrolux/src/images/advantages/04.jpg';
                   break;
               case 4:
                   checkClickButton();
                   item.classList.add('active-adv-list-item_5');
                   item.classList.add('active-adv');
                   advantagesImage.src = './wp-content/themes/electrolux/src/images/advantages/05.jpg';
                   break;
               case 5:
                   checkClickButton();
                   item.classList.add('active-adv-list-item_6');
                   item.classList.add('active-adv');
                   advantagesImage.src = './wp-content/themes/electrolux/src/images/advantages/06.jpg';
                   break;
           }
        })
    })
})();

(function () {
    var benefitsItemClicked = document.querySelectorAll('.benefits__list-item-onclick');
    var benefitsImage = document.querySelector('.benefits__image');

    benefitsItemClicked.forEach(function (item, index) {
        var checkClickButton = function(){
            benefitsItemClicked.forEach(function (item, index) {
                if(item.classList.contains('active-ben')){
                    var indexAdvantagesItem = 'active-ben-list-item_' + (index + 1);
                    item.classList.remove(indexAdvantagesItem, 'active-ben');
                }
            })
        };
        item.addEventListener('click', function () {

            switch (index) {
                case 0:
                    checkClickButton();
                    item.classList.add('active-ben-list-item_1');
                    item.classList.add('active-ben');
                    benefitsImage.src = './wp-content/themes/electrolux/src/images/benefits/01.jpg';
                    break;
                case 1:
                    checkClickButton();
                    item.classList.add('active-ben-list-item_2');
                    item.classList.add('active-ben');
                    benefitsImage.src = './wp-content/themes/electrolux/src/images/benefits/02.jpg';
                    break;
                case 2:
                    checkClickButton();
                    item.classList.add('active-ben-list-item_3');
                    item.classList.add('active-ben');
                    benefitsImage.src = './wp-content/themes/electrolux/src/images/benefits/03.jpg';
                    break;
                case 3:
                    checkClickButton();
                    item.classList.add('active-ben-list-item_4');
                    item.classList.add('active-ben');
                    benefitsImage.src = './wp-content/themes/electrolux/src/images/benefits/04.jpg';
                    break;
                case 4:
                    checkClickButton();
                    item.classList.add('active-ben-list-item_5');
                    item.classList.add('active-ben');
                    benefitsImage.src = './wp-content/themes/electrolux/src/images/benefits/05.jpg';
                    break;
                case 5:
                    checkClickButton();
                    item.classList.add('active-ben-list-item_6');
                    item.classList.add('active-ben');
                    benefitsImage.src = './wp-content/themes/electrolux/src/images/benefits/06.jpg';
                    break;
            }
        })
    })
})();

$('.our-command .statistics__slider-box').slick({
    infinite: true,
    slidesToShow: 4,
    dots:true,
    dotsClass: 'statistics__custom-button-container',
    customPaging: function(slider, i) {
        return '<div class="statistics__custom-button"></div>';
    },
    prevArrow: '<div class="statistics__custom-arrow-prev"></div>',
    nextArrow: '<div class="statistics__custom-arrow-next"></div>',
    variableWidth: true,
    responsive: [
        {
            breakpoint: 1199,
            settings: {
                slidesToShow: 3,
                variableWidth: true,
            }
        },
        {
            breakpoint: 991,
            settings: {
                slidesToShow: 1,
                variableWidth: true,
                centerMode:true,
            }
        },
    ]
});
$('.statistics__slider-box-main-page').slick({
    infinite: true,
    slidesToShow: 3,
    dots:true,
    dotsClass: 'statistics__custom-button-container',
    customPaging: function(slider, i) {
        return '<div class="statistics__custom-button"></div>';
    },
    prevArrow: '<div class="statistics__custom-arrow-prev"></div>',
    nextArrow: '<div class="statistics__custom-arrow-next"></div>',
    variableWidth: true,
    responsive: [
        {
            breakpoint: 1199,
            settings: {
                slidesToShow: 2,
                variableWidth: true,
            }
        },
        {
            breakpoint: 991,
            settings: {
                slidesToShow: 1,
                variableWidth: true,
                centerMode:true,
            }
        },
    ]
});

(function () {
    function findVideos() {
        let videos = document.querySelectorAll('.reviews__video-item');
        for (let i = 0; i < videos.length; i++) {
            setupVideo(videos[i]);
        }
    }

    function setupVideo(video) {
        let link = video.querySelector('.video__link');
        let media = video.querySelector('.video__media');
        let button = video.querySelector('.video__button');
        let id = parseMediaURL(media);

        video.addEventListener('click', () => {
            let iframe = createIframe(id);

            link.remove();
            button.remove();
            video.appendChild(iframe);
        });

        link.removeAttribute('href');
        video.classList.add('video--enabled');
    }

    function parseMediaURL(media) {
        let regexp = /https:\/\/i\.ytimg\.com\/vi\/([a-zA-Z0-9_-]+)\/maxresdefault\.jpg/i;
        let url = media.src;
        let match = url.match(regexp);

        return match[1];
    }

    function createIframe(id) {
        let iframe = document.createElement('iframe');

        iframe.setAttribute('allowfullscreen', '');
        iframe.setAttribute('allow', 'autoplay');
        iframe.setAttribute('src', generateURL(id));
        iframe.classList.add('video__media');

        return iframe;
    }

    function generateURL(id) {
        let query = '?rel=0&showinfo=0&autoplay=1';

        return 'https://www.youtube.com/embed/' + id + query;
    }

    findVideos();
})();

/*Верхняя форма на главной*/
(function () {
    var quizStepItems = document.querySelectorAll('.question-quiz__form-container');
    var quizLastStep = document.querySelector('.question-quiz__last-form-container');
    var numberOfElements = 3;

    quizStepItems.forEach(function (current, index) {
        var currentInputRadioOfQuiz = current.querySelectorAll('.question-quiz__form-type-home-input');
        var currentStepOfQuiz = current;
        var buttonNext = current.querySelector('.question-quiz__form-button-next-container');
        var buttonSkip = current.querySelector('.question-quiz__form-button-skip');

        buttonNext.addEventListener('click', function () {
            currentInputRadioOfQuiz.forEach(function (current) {
                if(current.checked && index<numberOfElements) {
                    currentStepOfQuiz.classList.remove('active-flex');
                    quizStepItems[index + 1].classList.add('active-flex');
                }
                if(current.checked && index === numberOfElements){
                    quizStepItems[numberOfElements].classList.remove('active-flex');
                    quizLastStep.classList.add('active-flex');
                }
            })
        });
        buttonSkip.addEventListener('click', function () {
            if(index<numberOfElements){
                currentStepOfQuiz.classList.remove('active-flex');
                quizStepItems[index + 1].classList.add('active-flex');
            } else{
                quizStepItems[numberOfElements].classList.remove('active-flex');
                quizLastStep.classList.add('active-flex');
            }
        });

        if(index > 0 && index <=numberOfElements){
            var buttonBack = current.querySelector('.question-quiz__form-button-back-container');
            buttonBack.addEventListener('click', function () {
                if(index<=numberOfElements){
                    currentStepOfQuiz.classList.remove('active-flex');
                    quizStepItems[index - 1].classList.add('active-flex');
                }
            })
        }

    });
})();

/*Нижняя форма на главной*/
(function () {
    var quizStepItems = document.querySelectorAll('.question-quiz__form-container-footer');
    var quizLastStep = document.querySelector('.question-quiz__last-form-container-footer');
    var numberOfElements = 3;

    quizStepItems.forEach(function (current, index) {
        var currentInputRadioOfQuiz = current.querySelectorAll('.question-quiz__form-type-home-input');
        var currentStepOfQuiz = current;
        var buttonNext = current.querySelector('.question-quiz__form-button-next-container');
        var buttonSkip = current.querySelector('.question-quiz__form-button-skip');

        buttonNext.addEventListener('click', function () {
            currentInputRadioOfQuiz.forEach(function (current) {
                if(current.checked && index<numberOfElements) {
                    currentStepOfQuiz.classList.remove('active-flex');
                    quizStepItems[index + 1].classList.add('active-flex');
                }
                if(current.checked && index === numberOfElements){
                    quizStepItems[numberOfElements].classList.remove('active-flex');
                    quizLastStep.classList.add('active-flex');
                }
            })
        });

        buttonSkip.addEventListener('click', function () {
            if(index<numberOfElements){
                currentStepOfQuiz.classList.remove('active-flex');
                quizStepItems[index + 1].classList.add('active-flex');
            } else{
                quizStepItems[numberOfElements].classList.remove('active-flex');
                quizLastStep.classList.add('active-flex');
            }
        });

        if(index > 0 && index <=numberOfElements){
            var buttonBack = current.querySelector('.question-quiz__form-button-back-container');
            buttonBack.addEventListener('click', function () {
                if(index<=numberOfElements){
                    currentStepOfQuiz.classList.remove('active-flex');
                    quizStepItems[index - 1].classList.add('active-flex');
                }
            })
        }
    });
})();

/*Попап quiz форма*/
(function () {
    var quizStepItems = document.querySelectorAll('.popup__form-container');
    var quizLastStep = document.querySelector('.popup__last-form-container');
    var numberOfElements = 3;

    quizStepItems.forEach(function (current, index) {
        var currentInputRadioOfQuiz = current.querySelectorAll('.question-quiz__form-type-home-input');
        var currentStepOfQuiz = current;
        var buttonNext = current.querySelector('.question-quiz__form-button-next-container');
        var buttonSkip = current.querySelector('.question-quiz__form-button-skip');

        buttonNext.addEventListener('click', function () {
            currentInputRadioOfQuiz.forEach(function (current) {
                if(current.checked && index<numberOfElements) {
                    currentStepOfQuiz.classList.remove('active-flex');
                    quizStepItems[index + 1].classList.add('active-flex');
                }
                if(current.checked && index === numberOfElements){
                    quizStepItems[numberOfElements].classList.remove('active-flex');
                    quizLastStep.classList.add('active-flex');
                }
            })
        });

        buttonSkip.addEventListener('click', function () {
            if(index<numberOfElements){
                currentStepOfQuiz.classList.remove('active-flex');
                quizStepItems[index + 1].classList.add('active-flex');
            } else{
                quizStepItems[numberOfElements].classList.remove('active-flex');
                quizLastStep.classList.add('active-flex');
            }
        });

        if(index > 0 && index <=numberOfElements){
            var buttonBack = current.querySelector('.question-quiz__form-button-back-container');
            buttonBack.addEventListener('click', function () {
                if(index<=numberOfElements){
                    currentStepOfQuiz.classList.remove('active-flex');
                    quizStepItems[index - 1].classList.add('active-flex');
                }
            })
        }
    });
})();


(function () {
    // Начальный отсчет времени. Берется при загрузке страницы

    var countDownDate = new Date().getTime();
    var cancelDate = countDownDate + (604800000);
    //604800000
    var newCancelDate;

    if(getCookie('dateT')){
        // вытягиваем cancelDate из cookies и перезаписываем переменную newCancelDate
        newCancelDate = getCookie('dateT');
    } else {
        //если нет переменной - записываем ее в cookies
        newCancelDate = cancelDate;
        setCookie('dateT', cancelDate , { expires: 365, path: '/' });
    }

    // Конечная дата отсчета = начальная дата + промежуток времени

    var timerContainerMain = document.querySelector(".timer-box__timer");
    var quizTimer = document.querySelector(".question-quiz__timer");
    var quizTimer1 = document.querySelector(".question-quiz__timer1");
    var pageCardTimer = document.querySelector(".page-card__timer");

// Обновление каждую секунду
    var x = setInterval(function() {
        // Текущая дата, нужна для ежесекундного обновления оставшегося времени
        var now = new Date().getTime();
        //Подсчет времени оставшегося до дедлайна
        var distance = newCancelDate - now;
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        // Вставляем в разметку оставшееся время
        if(timerContainerMain){
            timerContainerMain.innerHTML = '0' + days + ":" + hours + ":"
                + minutes + ":" + seconds;
        }
        if(quizTimer){
            quizTimer.innerHTML = '0' + days + ":" + hours + ":"
                + minutes + ":" + seconds;
        }
        if(quizTimer1){
            quizTimer1.innerHTML = '0' + days + ":" + hours + ":"
                + minutes + ":" + seconds;
        }
        if(pageCardTimer){
            pageCardTimer.innerHTML = '0' + days + ":" + hours + ":"
                + minutes + ":" + seconds;
        }
        // If the count down is finished, write some text
        if (distance < 0) {
            deleteCookie('dateT');
            timerContainerMain.innerHTML = "Время вышло";

        }
    }, 1000);
})();

(function () {
    var element = document.querySelector('.burger-menu');
    var mobileMenu = document.querySelector('.mobile-menu__container');
    var checkboxElement = element.querySelector('input');

    element.addEventListener('click', function (evt) {
        if (mobileMenu.style.display === 'block'){
            mobileMenu.style.display = 'none';
        } else{
            mobileMenu.style.display = 'block';
            mobileMenu.style.animation = 'showBlock .3s ease forwards';
        }

    });
    document.addEventListener('click', function (evt) {
        if (mobileMenu.style.display === 'block' && !evt.target.closest('.burger-menu')) {
            checkboxElement.click();
            mobileMenu.style.display = 'none';
        }
    })
})();

$(window).on('resize', function(){
    $('.page-card__main-slider').slick('unslick');
    $('.page-card__main-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.page-card__second-slider',
    });
});
$('.page-card__main-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.page-card__second-slider',
});

$(window).on('resize', function(){
    $('.page-card__second-slider').slick('unslick');
    $('.page-card__second-slider').slick({
        slidesToScroll: 1,
        asNavFor: '.page-card__main-slider',
        arrows: false,
        focusOnSelect: true,
        slidesToShow: 5,
        variableWidth:true,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    variableWidth:false,
                    slidesToShow:5
                }
            },
        ]
    });
});

$('.page-card__second-slider').slick({
    slidesToScroll: 1,
    asNavFor: '.page-card__main-slider',
    arrows: false,
    focusOnSelect: true,
    slidesToShow: 5,
    variableWidth:true,
    responsive: [
        {
            breakpoint: 768,
            settings: {
                variableWidth:false,
                slidesToShow:5
            }
        },
    ]
});

$('.examples__slider-box').slick({
    infinite: true,
    slidesToShow: 4,
    dots:false,
    variableWidth: false,
    arrows:false,
    autoplay:true,
    responsive: [
        {
            breakpoint: 1440,
            settings: {
                slidesToShow:4,
                variableWidth:false
            }
        },
        {
            breakpoint: 1190,
            settings: {
                slidesToShow:3,
                variableWidth:false
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow:2,
                variableWidth:false
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow:1,
                variableWidth:false
            }
        }
    ]
});



$( function() {
    if($( "#tabs" )){
        $( "#tabs" ).tabs();
    }
} );
$( function() {
    if($( "#tabs1" )){
        $( "#tabs1" ).tabs();
    }
} );


(function () {
    var cardForm = document.querySelector('.page-card__aside-form');
    var buttonOpenPopup = document.querySelector('.page-card__aside-form-submit');
    var addedPopup = document.querySelector('#buy-condition-popup');

    if(buttonOpenPopup){
        var titleProduct = document.querySelector('.page-card__title');
        var formPopup = addedPopup.querySelector('.callme-popup__form');
        var hiddenInput = formPopup.querySelector('#cashinput');
        var hiddenName = formPopup.querySelector('#hiddenName');

        buttonOpenPopup.addEventListener('click', function (evt) {
            if(cardForm.elements[0].checked){
                hiddenInput.value = cardForm.elements[0].value;
            } else {
                hiddenInput.value = cardForm.elements[1].value;
            }
            hiddenName.value = titleProduct.textContent;
        })
    }
})();

(function () {
    var viewsContainer = document.querySelector('.page-card__views-count');
    var likesPercent = document.querySelector('.page-card__likes-percent');

    // Находим случайное целое число из заданного промежутка.
    var getRandomIntegerNumber = function (min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
    };
    if(viewsContainer){
        viewsContainer.textContent = getRandomIntegerNumber(1, 40);
    }
    if(likesPercent){
        likesPercent.textContent = getRandomIntegerNumber(80, 100);
    }
})();

(function () {
    $(document).ready(function () {
        $('input[type="tel"]').inputmask("+375999999999");
    });
})();

$('#testimonials .btn').on( 'click', function( event ){
    var error = false;
    if ($('#testimonial').val() == '') {
        $('#testimonial').addClass('error');
        error = true;
    } else {
        $('#testimonial').removeClass('error');
    }

    if ($('#name').val() == '') {
        $('#name').addClass('error');
        error = true;
    } else {
        $('#name').removeClass('error');
    }

    if ($('#city').val() == '') {
        $('#city').addClass('error');
        error = true;
    } else {
        $('#city').removeClass('error');
    }

    if (error == true) {
        $('.error_field').html('Пожалуйста заполните обязательные поля!');
        return false;
    } else {
        $('.error_field').html('');
        $('#testimonial').removeClass('error');
        $('#name').removeClass('error');
        $('#city').removeClass('error');
    }

    event.stopPropagation();
    event.preventDefault();

        var  testimonial_data = $('#testimonials').serialize();
        jQuery.ajax({
            type: 'POST',
            url: '/wp-admin/admin-ajax.php',
            data: testimonial_data,
            success: function(data) {
                console.log('part 2 ok');
            },
            error: function () {
                console.log(data);
            }
        });

});
$(document).on('click','#reviewStars-input label',function(){
    $('#stars').val($(this).attr('data-id'));
});

$(window).on('load', function() {
    if ($('.facetwp-facet-площадь_помещения').length > 0) {
        $('.facetwp-facet-площадь_помещения .facetwp-checkbox').each(function () {
            $(this).append('м<sup>2</sup>');
        });
    }
});

$(document).on('facetwp-loaded', function() {
    $('.fwp-loader').hide();
    if (FWP.settings.pager.page < FWP.settings.pager.total_pages) {
        if (! FWP.loaded && 1 > $('.fwp-load-more').length) {
            $('.facetwp-template')
                .after('<div class="facetwp__loader">' +
                    '<button class="fwp-load-more jbutton">Show more</button>' +
                    '<button class="fwp-load-all jbutton">Show all</button></div>');
        }
        else {
            $('.fwp-load-more').show();
        }
    }
    else {
        $('.fwp-load-more').hide();
    }
});



//форма для ухода с сайта
(function () {
    // Отправка данных на сервер
    $('.callme-popup__form-download').trigger('reset');
    $(function() {
        'use strict';
        $('.callme-popup__form-download').on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                url: 'https://электролюкс.бел/wp-content/themes/electrolux/mailto-default.php',
                type: 'POST',
                contentType: false,
                processData: false,
                data: new FormData(this),
                success: function(msg) {
                    if (msg == 'ok') {
                        $('.callme-popup__form-download').trigger('reset'); // очистка формы
                        document.location.href = 'https://электролюкс.бел/download-catalog';
                    } else {
                        alert('Ошибка отправки');
                    }
                }
            });
        });
    });
})();

//формы для страницы спасибо quiz
(function () {
    // Отправка данных на сервер
    $('.question-quiz__form').trigger('reset');
    $(function () {
        'use strict';
        $('.question-quiz__form').on('submit', function (e) {
            e.preventDefault();
            $.ajax({
                url: 'https://электролюкс.бел/wp-content/themes/electrolux/mailto-quiz.php',
                type: 'POST',
                contentType: false,
                processData: false,
                data: new FormData(this),
                success: function (msg) {
                    if (msg == 'ok') {
                        document.location.href = 'https://электролюкс.бел/thanks-page';
                        $('.question-quiz__form').trigger('reset'); // очистка формы
                    } else {
                        alert('Ошибка отправки');
                    }
                }
            });
        });
    });
})();
//формы для страницы спасибо quiz попап
(function () {
    // Отправка данных на сервер
    $('.popup-quiz__form').trigger('reset');
    $(function () {
        'use strict';
        $('.popup-quiz__form').on('submit', function (e) {
            e.preventDefault();
            $.ajax({
                url: 'https://электролюкс.бел/wp-content/themes/electrolux/mailto-quiz.php',
                type: 'POST',
                contentType: false,
                processData: false,
                data: new FormData(this),
                success: function (msg) {
                    if (msg == 'ok') {
                        document.location.href = 'https://электролюкс.бел/thanks-page';
                        $('.popup-quiz__form').trigger('reset'); // очистка формы
                    } else {
                        alert('Ошибка отправки');
                    }
                }
            });
        });
    });
})();
//формы для страницы спасибо, остальные формы
(function () {
    // Отправка данных на сервер
    $('.form-default').trigger('reset');
    $(function () {
        'use strict';
        $('.form-default').on('submit', function (e) {
            e.preventDefault();
            $.ajax({
                url: 'https://электролюкс.бел/wp-content/themes/electrolux/mailto-default.php',
                type: 'POST',
                contentType: false,
                processData: false,
                data: new FormData(this),
                success: function (msg) {
                    if (msg == 'ok') {
                        document.location.href = 'https://электролюкс.бел/thanks-page';
                        $('.form-default').trigger('reset'); // очистка формы
                    } else {
                        alert('Ошибка отправки');
                    }
                }
            });
        });
    });
})();

// Скрытие/раскрытие фильтров на главной по кнопке
(function () {
    var $filtersContainer = $('.catalog__filters-container');
    var $filtersButton = $('.catalog__button-mobile');
    var $filtersButtonHide = $('.catalog__button-hide-filters');

    $filtersButton.on('click',function(){
        if ($filtersContainer.is(':hidden')){
            $filtersContainer.show(300);
            $filtersButton.hide();
            $filtersButtonHide.show();
        }
    });

    $filtersButtonHide.on('click',function(){
        if ($filtersContainer.is(':visible')){
            $filtersContainer.hide(300);
            $filtersButton.show();
            $filtersButtonHide.hide();
        }
    });
})();

// При нажатии на кнопку показать результаты пролистываем к товарам
(function () {
    var elem = $('.catalog__filters .catalog__button-box');

    var onClickHadler = function (element){
        $(element).on('click', function(){
            var element = $(document).find('.catalog__items-container');
            var posY = element.eq(0).offset().top - 120;
            $('html, body').animate({
                scrollTop: posY
            }, 500);
        });
    };
    onClickHadler(elem);
})();

(function(){
    var pxShow = 300; // height on which the button will show
    var fadeInTime = 400; // how slow/fast you want the button to show
    var fadeOutTime = 400; // how slow/fast you want the button to hide
    var scrollSpeed = 300; // how slow/fast you want the button to scroll to top. can be a value, 'slow', 'normal' or 'fast'

// Show or hide the sticky footer button
    jQuery(window).scroll(function() {

        if (jQuery(window).scrollTop() >= pxShow) {
            jQuery("#gotop").fadeIn(fadeInTime);
        } else {
            jQuery("#gotop").fadeOut(fadeOutTime);
        }

    });
})();

/*----------------------------------------------------*/
/* Smooth Scrolling
------------------------------------------------------*/
$('.smoothscroll').on('click', function (e) {

    e.preventDefault();

    var target = this.hash,
        $target = $(target);

    $('html, body').stop().animate({
        'scrollTop': $target.offset().top
    }, 800, 'swing', function () {
        window.location.hash = target;
    });

});

//скролл правой части контента(сайдбар) на странице карточки товара
(function(){
    var stickyContainer = $('.sticky-container');
    $(window).resize(function() {
        var width = window.innerWidth || document.body.clientWidth;
        var height = window.innerHeight || document.body.clientHeight;

        if(width > 768 && height < 850){
            stickyContainer.css({position: 'relative', top: 0, });
        } else if(width > 768 && height > 850) {
            stickyContainer.css({position: 'sticky', top: '90px', });
        } else {
            stickyContainer.css({position: 'sticky',});
        }
    });
})();

//попап на скачивание каталога при уходе с сайта
$(document).ready(function () {
deleteCookie('catalog');
    if(getCookie('catalog')){
        return false;
    } else {
        var boxElement = document.querySelector('#popup-download');

        function timerPopupShow () {
            var width = window.innerWidth || document.body.clientWidth;
            if(width > 991){
                $(document).mouseleave(function () {
                    if (boxElement.style.display !== 'inline-block') {
                        $(this).unbind('mouseleave');
                        return $.fancybox.open({
                            src: '#popup-download',
                            type: 'inline',
                            opts: {
                                "touch": false,
                                beforeShow : function() {
                                    $('.fancybox-bg').css({background:'rgba(246, 85, 77, 0.95)'})
                                }
                            }
                        });

                    } else {
                        return true;
                    }
                });
            }
        }
        setTimeout(timerPopupShow, 20000); // 20 seconds

        setCookie('catalog', true , { expires: 1, path: '/' }); // 1 day
    }

});

//плавный скролл до якорной ссылки + переход с отступом до элемента
(function(){
    $('.main-menu a[href*="#"]').click(function () {
        var el = "#" + $(this).attr('href').split("#")[1];
        var top = $(el).offset().top - 110;

        $('body,html').animate({scrollTop: top}, 1500);
        return false;
    });
    $('.mobile-menu__list a[href*="#"]').click(function () {
        var element = document.querySelector('.burger-menu');
        var mobileMenu = document.querySelector('.mobile-menu__container');
        var checkboxElement = element.querySelector('input');

        checkboxElement.click();
        mobileMenu.style.display = 'none';
        var el = "#" + $(this).attr('href').split("#")[1];
        var top = $(el).offset().top - 80;

        $('body,html').animate({scrollTop: top}, 1000);
        return false;
    });
})();