<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8" />
    <meta
            name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="shortcut icon" href="<?php bloginfo('template_url') ?>/src/images/favicon.png" type="image/png">
    <?php wp_head(); ?>

    <!-- Google Tag Manager -->
    <!--<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-5N8MTSS');</script>-->
    <!-- End Google Tag Manager -->
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(48036602, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/48036602" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->

    <?php
    include_once "clickfrogru_udp_tcp.php";
    ?>
    <script src="//code.jivosite.com/widget/kO1hyYLaRJ" async></script>
</head>

<body <?php body_class(); ?> id="top">

<!-- Google Tag Manager (noscript) -->
<!--<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5N8MTSS"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>-->
<!-- End Google Tag Manager (noscript) -->

<header class="header">
    <div class="box">
        <div class="header-wrapper">
            <a href="<?php echo get_home_url(); ?>" class="logo-box">
                <div class="header__logo-link">
                    <img src="<?=get_template_directory_uri()?>/src/images/logo.png" alt="Electrolux" class="header__logo">
                </div>
                <div class="vertical-gray-line"></div>
                <p class="header__title">Кондиционеры Electrolux <br>
                    продажа, установка, обслуживание<br>
                    в Беларуси</p>
            </a>
            <nav class="header__menu">
                <?php
                wp_nav_menu( [
                    'menu'            => 'menu_main',
                    'menu_class'      => 'main-menu',
                    'container'       => false,
                ] );
                ?>
                <div class="mobile-menu">
                    <div class="burger-menu">
                        <input type="checkbox" />
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="mobile-menu__container">
                        <?php
                        wp_nav_menu( [
                            'menu'            => 'menu_main',
                            'menu_class'      => 'mobile-menu__list',
                            'container'       => false,
                        ] );
                        ?>
                        <div class="header-contacts">
                            <div class="header-contacts__phone">
                                <a href="tel:+375293048877" class="header-contacts__phone-link">+375 (29) 304-88-77</a>
                            </div>
                            <div class="header-contacts__call-me-box">
                                <div class="call-me__logo-box">
                                    <a href="viber://add?number=375293048877"
                                       target="_blank"
                                       class="call-me__logo-item call-me__logo-viber">
                                    </a>
                                    <a href="https://api.whatsapp.com/send?phone=375293048877"
                                       target="_blank"
                                       class="call-me__logo-item call-me__logo-teleg">
                                    </a>
                                </div>
                                <a href="javascript:;" data-fancybox data-src="#callme-popup" data-options='{"touch": false}' class="header-contacts__callmeback">Перезвоните мне</a>
                            </div>
                        </div>
                    </div>

                </div>
            </nav>
            <div class="header-contacts">
                <div class="header-contacts__phone">
                    <a href="tel:+375293048877" class="header-contacts__phone-link">+375 (29) 304-88-77</a>
                </div>
                <div class="header-contacts__call-me-box">
                    <div class="call-me__logo-box">
                        <a href="viber://chat?number=+375293048877"
                           target="_blank"
                           class="call-me__logo-item call-me__logo-viber">
                        </a>
                        <a href="https://api.whatsapp.com/send?phone=375293048877"
                           target="_blank"
                           class="call-me__logo-item call-me__logo-teleg">
                        </a>
                    </div>
                    <a href="javascript:;" data-fancybox data-src="#callme-popup" data-options='{"touch": false}' class="header-contacts__callmeback">Перезвоните мне</a>
                </div>
            </div>
        </div>
    </div>
</header>
<main class="main">