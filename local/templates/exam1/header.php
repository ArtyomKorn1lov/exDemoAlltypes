<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <? $APPLICATION->ShowHead(); ?>
    <title><? $APPLICATION->ShowTitle() ?></title>
    <link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/css/reset.css"/>
    <link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/css/style.css"/>
    <link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/css/owl.carousel.css"/>
    <script src="<?= SITE_TEMPLATE_PATH ?>/js/jquery.min.js"></script>
    <script src="<?= SITE_TEMPLATE_PATH ?>/js/owl.carousel.min.js"></script>
    <script src="<?= SITE_TEMPLATE_PATH ?>/js/scripts.js"></script>
    <link rel="icon" type="<?= SITE_TEMPLATE_PATH ?>/image/vnd.microsoft.icon" href="favicon.ico">
    <link rel="shortcut icon" href="favicon.ico">
</head>

<body>
<!-- wrap -->
<div class="wrap">
    <div id="panel"><? $APPLICATION->ShowPanel(); ?></div>
    <!-- header -->
    <header class="header">
        <div class="inner-wrap">
            <div class="logo-block"><a href="" class="logo">Мебельный магазин</a>
            </div>
            <div class="main-phone-block">
                <? if (user_classes\UserModuleForExecuteTaskEx1Demo1::DateIsBetween()) { ?>
                    <a href="tel:84952128506" class="phone">8 (495) 212-85-06</a>
                <? } else { ?>
                    <a href="mailto:store@store.ru" class="phone">store@store.ru</a>
                <? } ?>
                <div class="shedule">время работы с 9-00 до 18-00</div>
            </div>
            <div class="actions-block">
                <form action="/" class="main-frm-search">
                    <input type="text" placeholder="Поиск">
                    <button type="submit"></button>
                </form>
                <nav class="menu-block">
                    <ul>
                        <li class="att popup-wrap">
                            <a id="hd_singin_but_open" href="" class="btn-toggle">Войти на сайт</a>
                            <form action="/" class="frm-login popup-block">
                                <div class="frm-title">Войти на сайт</div>
                                <a href="" class="btn-close">Закрыть</a>
                                <div class="frm-row"><input type="text" placeholder="Логин"></div>
                                <div class="frm-row"><input type="password" placeholder="Пароль"></div>
                                <div class="frm-row"><a href="" class="btn-forgot">Забыли пароль</a></div>
                                <div class="frm-row">
                                    <div class="frm-chk">
                                        <input type="checkbox" id="login">
                                        <label for="login">Запомнить меня</label>
                                    </div>
                                </div>
                                <div class="frm-row"><input type="submit" value="Войти"></div>
                            </form>
                        </li>
                        <li><a href="">Зарегистрироваться</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!-- /header -->
    <!-- nav -->
    <?$APPLICATION->IncludeComponent(
        "bitrix:menu",
        "top_menu",
        Array(
            "ALLOW_MULTI_SELECT" => "N",
            "CHILD_MENU_TYPE" => "left",
            "DELAY" => "N",
            "MAX_LEVEL" => "3",
            "MENU_CACHE_GET_VARS" => array(0=>"",),
            "MENU_CACHE_TIME" => "3600",
            "MENU_CACHE_TYPE" => "A",
            "MENU_CACHE_USE_GROUPS" => "Y",
            "ROOT_MENU_TYPE" => "top",
            "USE_EXT" => "N"
        )
    );?>
    <!-- /nav -->
    <? if ($APPLICATION->GetCurUri(false) !== "/"): ?>
        <!-- breadcrumbs -->
        <div class="breadcrumbs-box">
            <div class="inner-wrap">
                <a href="">Главная</a>
                <a href="">Мебель</a>
                <span>Выставки и события</span>
            </div>
        </div>
    <? endif; ?>
    <!-- /breadcrumbs -->
    <!-- page -->
    <div class="page">
        <!-- content box -->
        <div class="content-box">
            <!-- side -->
            <div class="side">
                <? if ($APPLICATION->GetCurUri(false) !== "/"): ?>
                    <!-- side menu -->
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        "left",
                        Array(
                            "ALLOW_MULTI_SELECT" => "N",
                            "CHILD_MENU_TYPE" => "left",
                            "DELAY" => "N",
                            "MAX_LEVEL" => "1",
                            "MENU_CACHE_GET_VARS" => array(""),
                            "MENU_CACHE_TIME" => "3600",
                            "MENU_CACHE_TYPE" => "A",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "ROOT_MENU_TYPE" => "left",
                            "USE_EXT" => "N"
                        )
                    );?><br>
                    <!-- /side menu -->
                <? endif; ?>
                <!-- side anonse -->
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "include_info1",
                    Array(
                        "AREA_FILE_SHOW" => "page",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => ""
                    )
                );?><br>
                <!-- /side anonse -->

                <!-- side wrap -->
                <div class="side-wrap">
                    <div class="item-wrap">
                        <!-- side action -->
                        <div class="side-block side-action">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/side-action-bg.jpg" alt="" class="bg">
                            <div class="photo-block">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/img/side-action.jpg" alt="">
                            </div>
                            <div class="text-block">
                                <div class="title">Акция!</div>
                                <p>Мебельная полка всего за 560 <span class="r">a</span>
                                </p>
                            </div>
                            <a href="" class="btn-more">подробнее</a>
                        </div>
                        <!-- /side action -->
                    </div>

                    <!-- footer rew slider box -->
                    <div class="item-wrap">
                        <div class="rew-footer-carousel">
                            <div class="item">
                                <div class="side-block side-opin">
                                    <div class="inner-block">
                                        <div class="title">
                                            <div class="photo-block">
                                                <img src="<?= SITE_TEMPLATE_PATH ?>/img/side-opin.jpg" alt="">
                                            </div>
                                            <div class="name-block"><a href="">Дмитрий Иванов</a></div>
                                            <div class="pos-block">Генеральный директор,"Офис+"</div>
                                        </div>
                                        <div class="text-block">“В магзине предоставили потрясающий выбор
                                            расцветок, а также, получил большую скидку по карте постоянного...
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="side-block side-opin">
                                    <div class="inner-block">
                                        <div class="title">
                                            <div class="photo-block">
                                                <img src="<?= SITE_TEMPLATE_PATH ?>/img/side-opin.jpg" alt="">
                                            </div>
                                            <div class="name-block"><a href="">Дмитрий Иванов</a></div>
                                            <div class="pos-block">Генеральный директор,"Офис+"</div>
                                        </div>
                                        <div class="text-block">“В магазине предоставили потрясающий выбор
                                            расцветок, а также, получил большую скидку по карте постоянного...
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / footer rew slider box -->

                </div>
                <!-- /side wrap -->
            </div>
            <!-- /side -->
            <!-- content -->
            <div class="content">
                <div class="cnt">
                    <? if ($APPLICATION->GetCurUri(false) !== "/"): ?>
                        <header>
                            <h1><? $APPLICATION->ShowTitle(false); ?></h1>
                        </header>
                    <? endif; ?>

                    <? if ($APPLICATION->GetCurUri(false) == "/"): ?>
                        <p>«Мебельная компания» осуществляет производство мебели на высококлассном оборудовании с
                            применением минимальной доли ручного труда, что позволяет обеспечить высокое качество нашей
                            продукции. Налажен производственный процесс как массового и индивидуального характера, что с
                            одной стороны позволяет обеспечить постоянную номенклатуру изделий и индивидуальный подход –
                            с другой.
                        </p>
                        <!-- index column -->
                        <div class="cnt-section index-column">
                            <div class="col-wrap">

                                <!-- main actions box -->
                                <div class="column main-actions-box">
                                    <div class="title-block">
                                        <h2>Новинки</h2>
                                        <hr>
                                    </div>
                                    <div class="items-wrap">
                                        <div class="item-wrap">
                                            <div class="item">
                                                <div class="title-block att">
                                                    Угловой диван!
                                                </div>
                                                <br>
                                                <div class="inner-block">
                                                    <a href="" class="photo-block">
                                                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/new01.jpg" alt="">
                                                    </a>
                                                    <div class="text"><a href="">Угловой диван "Титаник", с большим
                                                            выбором расцветок и фактур.</a>
                                                        <a href="" class="btn-arr"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-wrap">
                                            <div class="item">
                                                <div class="title-block att">
                                                    Угловой диван!
                                                </div>
                                                <br>
                                                <div class="inner-block">
                                                    <a href="" class="photo-block">
                                                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/new02.jpg" alt="">
                                                    </a>
                                                    <div class="text"><a href="">Угловой диван "Титаник", с большим
                                                            выбором расцветок и фактур.</a>
                                                        <a href="" class="btn-arr"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-wrap">
                                            <div class="item">
                                                <div class="title-block att">
                                                    Угловой диван!
                                                </div>
                                                <br>
                                                <div class="inner-block">
                                                    <a href="" class="photo-block">
                                                        <img src="<?= SITE_TEMPLATE_PATH ?>/img/new03.jpg" alt="">
                                                    </a>
                                                    <div class="text"><a href="">Угловой диван "Титаник", с большим
                                                            выбором расцветок и фактур.</a>
                                                        <a href="" class="btn-arr"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="" class="btn-next">Все новинки</a>
                                </div>
                                <!-- /main actions box -->
                                <!-- main news box -->
                                <div class="column main-news-box">
                                    <div class="title-block">
                                        <h2>Новости</h2>
                                    </div>
                                    <hr>
                                    <div class="items-wrap">
                                        <div class="item-wrap">
                                            <div class="item">
                                                <div class="title"><a href="">29 августа 2012</a>
                                                </div>
                                                <div class="text"><a href="">Поступление лучших офисных кресел из
                                                        Германии </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-wrap">
                                            <div class="item">
                                                <div class="title"><a href="">29 августа 2012</a>
                                                </div>
                                                <div class="text"><a href="">Мастер-класс дизайнеров из Италии для
                                                        производителей мебели </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-wrap">
                                            <div class="item">
                                                <div class="title"><a href="">29 августа 2012</a>
                                                </div>
                                                <div class="text"><a href="">Поступление лучших офисных кресел из
                                                        Германии </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-wrap">
                                            <div class="item">
                                                <div class="title"><a href="">29 августа 2012</a>
                                                </div>
                                                <div class="text"><a href="">Наша дилерская сеть расширилась теперь
                                                        ассортимент наших товаров доступен в Казани </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="" class="btn-next">Все новости</a>
                                </div>
                                <!-- /main news box -->

                            </div>
                        </div>
                        <!-- /index column -->

                        <!-- afisha box -->
                        <div class="cnt-section afisha-box">
                            <div class="section-title-block">
                                <h2 class="second-ttile">Ближайшие мероприятия</h2>
                                <a href="" class="btn-next">все мероприятия</a>
                            </div>
                            <hr>
                            <div class="items-wrap">
                                <div class="item-wrap">
                                    <div class="item">
                                        <div class="title"><a href="">29 августа 2012, Москва</a>
                                        </div>
                                        <div class="text"><a href="">Семинар производителей мебели России и СНГ,
                                                Обсуждение тенденций.</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-wrap">
                                    <div class="item">
                                        <div class="title"><a href="">29 августа 2012, Москва</a>
                                        </div>
                                        <div class="text"><a href="">Открытие шоу-рума на Невском проспекте. Последние
                                                модели в большом ассортименте.</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-wrap">
                                    <div class="item">
                                        <div class="title"><a href="">29 августа 2012, Москва</a>
                                        </div>
                                        <div class="text"><a href="">Открытие нового магазина в нашей дилерской
                                                сети.</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /afisha box -->
                    <? endif; ?>

                    <hr>
