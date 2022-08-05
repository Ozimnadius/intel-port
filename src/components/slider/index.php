<? $list = array(
    array(
        array(
            "img" => "/images/content/slider/3.jpg",
            "imgTablet" => "/images/content/slider/3-tablet.jpg",
            "imgMobile" => "/images/content/slider/3-mobile.jpg",
            "title" => "2015",
            "sub" => "Собственное волоконно-оптическая сеть",
            "txt" => "Начали активное строительство собственной волоконно-оптической сети по всем районам Москвы. Реализовали ряд крупных контрактов, включая ФСКН и ГЦС и ЗИ МВД России.",
        ),
        array(
            "img" => "/images/content/slider/4.jpg",
            "imgTablet" => "/images/content/slider/4-tablet.jpg",
            "imgMobile" => "/images/content/slider/4-mobile.jpg",
            "title" => "2016",
            "sub" => "Оптическое кольцо в Москве на скорости 10 Гбит/с",
            "txt" => "Организован дублирующий узел сети телематических услуг и передачи данных в Москве на площадях дата центра Техногород. Организовано первое оптическое кольцо в Москве на скорости 10Гбит/с. Реализованы первые контракты в городах: Санкт-Петербург, Тула, Ставрополь, Пятигорск, Брянск, Курск, Калуга, Обнинск.",
        ),
    ),
    array(
        array(
            "img" => "/images/content/slider/5.jpg",
            "imgTablet" => "/images/content/slider/5-tablet.jpg",
            "imgMobile" => "/images/content/slider/5-mobile.jpg",
            "title" => "2017",
            "sub" => "Москва – Санкт-Петербург",
            "txt" => "Организован центральный узел сети в СПб на площадях «БМ18» и в дата центре «Кантемировская 12». Введен в эксплуатацию первый междугородний участок сети компании Москва – Санкт-Петербург с резервированием по различным географическим маршрутам.",
        ),
        array(
            "img" => "/images/content/slider/6.jpg",
            "imgTablet" => "/images/content/slider/6-tablet.jpg",
            "imgMobile" => "/images/content/slider/6-mobile.jpg",
            "title" => "2018",
            "sub" => "Чемпионат мира по Футболу",
            "txt" => "Предоставлены инфокоммуникационные услуги для нужд Чемпионата мира по футболу! Организовали высокоскоростной доступ к сети интернет, защищенные каналы связи между территориально удаленными дата центрами, защиту от DDoS-атак, а также комплексную IT поддержку для сайта и информационной системы Чемпионата мира по футболу FAN ID.",
        )
    ),
    array(
        array(
            "img" => "/images/content/slider/7.jpg",
            "imgTablet" => "/images/content/slider/7-tablet.jpg",
            "imgMobile" => "/images/content/slider/7-mobile.jpg",
            "title" => "2019",
            "sub" => "100 общественных парковок",
            "txt" => "Начали реализацию крупных контрактов на рынке B2O в интересах ДИТ Москвы. Построили десятки ВОЛС с дальнейшей сдачей «темных» волокон и «последних миль» в аренду. К сети в Москве подключили около 100 общественных парковок ГКУ АМПП. Ввели в эксплуатацию второе оптическое кольцо 10Гбит/с. Установили оборудование, поддерживающее скорости до 100Гбит/с.",
        ),
        array(
            "img" => "/images/content/slider/8.jpg",
            "imgTablet" => "/images/content/slider/8-tablet.jpg",
            "imgMobile" => "/images/content/slider/8-mobile.jpg",
            "title" => "2020",
            "sub" => "Более 250 бизнес объектов",
            "txt" => "Организовали каналы связи в стационарные пункты Мосэкомонитонг на всей территории Москвы и МО. Нашими долгосрочными клиентами стали такие серьезные игроки российского бизнеса как MAIL.RU, ЯНДЕКС.ТАКСИ, МЕДСКАН, АЙ-ТЕКО, ТРАНСКОНТЕЙНЕР, РОСТЕЛЕКОМ, ANTTEQ, ЕВРООНКО, Bureau Veritas и многие другие.",
        ),
    ),
    array(
        array(
            "img" => "/images/content/slider/9.jpg",
            "imgTablet" => "/images/content/slider/9-tablet.jpg",
            "imgMobile" => "/images/content/slider/9-mobile.jpg",
            "title" => "2021",
            "sub" => "Подготовка к чемпионату Европы по Футболу",
            "txt" => "Предоставлены инфокоммуникационные услуги для нужд Чемпионата Европы по футболу! Подключены к сети интернет более 10-ти Центров выдачи паспортов болельщиков. Организовали высокоскоростной доступ в интернет, защищенные каналы связи между территориально удаленными дата центрами, защиту от DDoS-атак, а также комплексную IT поддержку для сайта и информационной системы ЧМ по футболу FAN ID.",
        ),
    )

) ?>
<div class="slider">
    <div class="container slider__container">
        <div class="slider__wrap">
            <div class="slider__map">
                <img src="/images/content/slider/map.svg" alt="map">
            </div>
            <div class="slider__imgs">
                <? component("slider-imgs", array(
                        "arr"=> $list
                )) ?>
            </div>
            <div class="slider__swiper swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide slider__slide slider__slide--big slide-big">
                        <div class="slide-big__sub">Более</div>
                        <div class="slide-big__title">250</div>
                        <div class="slide-big__sub">бизнес объектов</div>
                        <div class="slide-big__txt">
                            В настоящее время мы <br> обслуживаем более 250 бизнес <br> объектов на
                            территории Москвы <br> и Петербурга.
                        </div>
                        <? component("btn", array(
                            "class" => "btn-border slide-big__btn",
                            "text" => "Консультироваться"
                        )) ?>
                        <div class="slide-big__info">
                            <svg width="166" height="34" viewBox="0 0 166 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M63 4C61.3431 4 60 5.34315 60 7V14.1C57.7178 14.5633 56 16.581 56 19V22.0772C56 23.5362 56.4559 24.9587 57.3039 26.1459L60.2889 30.325C61.0398 31.3761 62.252 32 63.5439 32H71.259C72.6945 32 74.0198 31.2309 74.732 29.9846L77.0777 25.8796C77.6821 24.8219 78 23.6248 78 22.4066V19C78 16.3194 75.8906 14.1316 73.2412 14.0057C72.6917 13.3886 71.8913 13 71 13C70.4653 13 69.9634 13.1399 69.5286 13.385C68.9956 12.5521 68.0623 12 67 12C66.6494 12 66.3128 12.0602 66 12.1707V7C66 5.34315 64.6569 4 63 4ZM66 15C66 15.5523 65.5523 16 65 16C64.4477 16 64 15.5523 64 15V7C64 6.44772 63.5523 6 63 6C62.4477 6 62 6.44772 62 7V20C62 20.5523 61.5523 21 61 21C60.4477 21 60 20.5523 60 20V16.1707C58.8348 16.5825 58 17.6938 58 19V22.0772C58 23.1193 58.3256 24.1354 58.9313 24.9834L61.9164 29.1625C62.2918 29.6881 62.898 30 63.5439 30H71.259C71.9767 30 72.6394 29.6154 72.9955 28.9923L75.3412 24.8873C75.7729 24.1318 76 23.2767 76 22.4066V19C76 17.6938 75.1652 16.5825 74 16.1707V17C74 17.5523 73.5523 18 73 18C72.4477 18 72 17.5523 72 17V16C72 15.4477 71.5523 15 71 15C70.4477 15 70 15.4477 70 16C70 16.5523 69.5523 17 69 17C68.4477 17 68 16.5523 68 16V15C68 14.4477 67.5523 14 67 14C66.4477 14 66 14.4477 66 15Z" fill="white"/>
                                <path d="M94.06 12.195C92.46 12.195 91.145 11.67 90.115 10.62C89.085 9.58 88.57 8.29 88.57 6.75C88.57 5.21 89.085 3.92 90.115 2.88C91.145 1.83 92.46 1.305 94.06 1.305C95.01 1.305 95.89 1.535 96.7 1.995C97.51 2.455 98.14 3.075 98.59 3.855L97.375 4.56C97.075 3.98 96.625 3.52 96.025 3.18C95.435 2.83 94.78 2.655 94.06 2.655C92.84 2.655 91.85 3.045 91.09 3.825C90.33 4.595 89.95 5.57 89.95 6.75C89.95 7.92 90.33 8.89 91.09 9.66C91.85 10.44 92.84 10.83 94.06 10.83C94.78 10.83 95.435 10.66 96.025 10.32C96.625 9.97 97.075 9.51 97.375 8.94L98.59 9.63C98.15 10.41 97.525 11.035 96.715 11.505C95.915 11.965 95.03 12.195 94.06 12.195ZM105.074 8.145C105.844 8.465 106.229 9.045 106.229 9.885C106.229 10.525 106.019 11.04 105.599 11.43C105.179 11.81 104.589 12 103.829 12H100.079V4.5H103.529C104.269 4.5 104.844 4.685 105.254 5.055C105.674 5.425 105.884 5.92 105.884 6.54C105.884 7.26 105.614 7.795 105.074 8.145ZM103.469 5.67H101.354V7.635H103.469C104.229 7.635 104.609 7.3 104.609 6.63C104.609 5.99 104.229 5.67 103.469 5.67ZM101.354 10.815H103.754C104.134 10.815 104.424 10.725 104.624 10.545C104.834 10.365 104.939 10.11 104.939 9.78C104.939 9.47 104.834 9.23 104.624 9.06C104.424 8.88 104.134 8.79 103.754 8.79H101.354V10.815ZM113.847 5.79V4.5H115.152V12H113.847V10.71C113.207 11.7 112.262 12.195 111.012 12.195C109.952 12.195 109.057 11.815 108.327 11.055C107.587 10.285 107.217 9.35 107.217 8.25C107.217 7.16 107.587 6.23 108.327 5.46C109.067 4.69 109.962 4.305 111.012 4.305C112.262 4.305 113.207 4.8 113.847 5.79ZM111.177 10.935C111.937 10.935 112.572 10.68 113.082 10.17C113.592 9.64 113.847 9 113.847 8.25C113.847 7.49 113.592 6.855 113.082 6.345C112.572 5.825 111.937 5.565 111.177 5.565C110.427 5.565 109.797 5.825 109.287 6.345C108.777 6.855 108.522 7.49 108.522 8.25C108.522 9 108.777 9.64 109.287 10.17C109.797 10.68 110.427 10.935 111.177 10.935ZM122.41 3.375H118.36V2.235H122.41V3.375ZM118.42 9.765L122.575 4.5H123.625V12H122.335V6.735L118.18 12H117.13V4.5H118.42V9.765ZM125.611 4.5H132.106V12H130.801V5.745H126.916V12H125.611V4.5ZM139.283 7.62V4.5H140.588V12H139.283V8.865H135.398V12H134.093V4.5H135.398V7.62H139.283ZM143.864 9.765L148.019 4.5H149.069V12H147.779V6.735L143.624 12H142.574V4.5H143.864V9.765ZM150.215 4.5H156.635V5.76H154.085V12H152.78V5.76H150.215V4.5ZM164.686 8.85H158.401C158.531 9.51 158.836 10.03 159.316 10.41C159.796 10.78 160.396 10.965 161.116 10.965C162.106 10.965 162.826 10.6 163.276 9.87L164.386 10.5C163.646 11.63 162.546 12.195 161.086 12.195C159.906 12.195 158.936 11.825 158.176 11.085C157.436 10.325 157.066 9.38 157.066 8.25C157.066 7.11 157.431 6.17 158.161 5.43C158.891 4.68 159.836 4.305 160.996 4.305C162.096 4.305 162.991 4.695 163.681 5.475C164.381 6.235 164.731 7.165 164.731 8.265C164.731 8.455 164.716 8.65 164.686 8.85ZM160.996 5.535C160.306 5.535 159.726 5.73 159.256 6.12C158.796 6.51 158.511 7.04 158.401 7.71H163.411C163.301 7.02 163.026 6.485 162.586 6.105C162.146 5.725 161.616 5.535 160.996 5.535ZM93.985 24.145C94.755 24.465 95.14 25.045 95.14 25.885C95.14 26.525 94.93 27.04 94.51 27.43C94.09 27.81 93.5 28 92.74 28H88.99V20.5H92.44C93.18 20.5 93.755 20.685 94.165 21.055C94.585 21.425 94.795 21.92 94.795 22.54C94.795 23.26 94.525 23.795 93.985 24.145ZM92.38 21.67H90.265V23.635H92.38C93.14 23.635 93.52 23.3 93.52 22.63C93.52 21.99 93.14 21.67 92.38 21.67ZM90.265 26.815H92.665C93.045 26.815 93.335 26.725 93.535 26.545C93.745 26.365 93.85 26.11 93.85 25.78C93.85 25.47 93.745 25.23 93.535 25.06C93.335 24.88 93.045 24.79 92.665 24.79H90.265V26.815ZM97.0189 20.5H102.584V28H101.279V21.76H98.3239V24.82C98.3239 26.02 98.0839 26.875 97.6039 27.385C97.1239 27.885 96.4189 28.09 95.4889 28V26.77C96.0089 26.84 96.3939 26.725 96.6439 26.425C96.8939 26.115 97.0189 25.57 97.0189 24.79V20.5ZM111.761 24.85H105.476C105.606 25.51 105.911 26.03 106.391 26.41C106.871 26.78 107.471 26.965 108.191 26.965C109.181 26.965 109.901 26.6 110.351 25.87L111.461 26.5C110.721 27.63 109.621 28.195 108.161 28.195C106.981 28.195 106.011 27.825 105.251 27.085C104.511 26.325 104.141 25.38 104.141 24.25C104.141 23.11 104.506 22.17 105.236 21.43C105.966 20.68 106.911 20.305 108.071 20.305C109.171 20.305 110.066 20.695 110.756 21.475C111.456 22.235 111.806 23.165 111.806 24.265C111.806 24.455 111.791 24.65 111.761 24.85ZM108.071 21.535C107.381 21.535 106.801 21.73 106.331 22.12C105.871 22.51 105.586 23.04 105.476 23.71H110.486C110.376 23.02 110.101 22.485 109.661 22.105C109.221 21.725 108.691 21.535 108.071 21.535ZM118.301 24.145C119.071 24.465 119.456 25.045 119.456 25.885C119.456 26.525 119.246 27.04 118.826 27.43C118.406 27.81 117.816 28 117.056 28H113.306V20.5H116.756C117.496 20.5 118.071 20.685 118.481 21.055C118.901 21.425 119.111 21.92 119.111 22.54C119.111 23.26 118.841 23.795 118.301 24.145ZM116.696 21.67H114.581V23.635H116.696C117.456 23.635 117.836 23.3 117.836 22.63C117.836 21.99 117.456 21.67 116.696 21.67ZM114.581 26.815H116.981C117.361 26.815 117.651 26.725 117.851 26.545C118.061 26.365 118.166 26.11 118.166 25.78C118.166 25.47 118.061 25.23 117.851 25.06C117.651 24.88 117.361 24.79 116.981 24.79H114.581V26.815ZM127.195 27.055C126.435 27.815 125.5 28.195 124.39 28.195C123.28 28.195 122.345 27.815 121.585 27.055C120.825 26.295 120.445 25.36 120.445 24.25C120.445 23.14 120.825 22.205 121.585 21.445C122.345 20.685 123.28 20.305 124.39 20.305C125.5 20.305 126.435 20.685 127.195 21.445C127.965 22.215 128.35 23.15 128.35 24.25C128.35 25.35 127.965 26.285 127.195 27.055ZM124.39 26.92C125.14 26.92 125.77 26.665 126.28 26.155C126.79 25.645 127.045 25.01 127.045 24.25C127.045 23.49 126.79 22.855 126.28 22.345C125.77 21.835 125.14 21.58 124.39 21.58C123.65 21.58 123.025 21.835 122.515 22.345C122.005 22.855 121.75 23.49 121.75 24.25C121.75 25.01 122.005 25.645 122.515 26.155C123.025 26.665 123.65 26.92 124.39 26.92Z" fill="white"/>
                                <path opacity="0.6" d="M24.41 10.58L19.83 6L24.41 1.41L23 0L17 6L23 12L24.41 10.58Z" fill="white"/>
                                <path opacity="0.2" d="M59.41 10.58L54.83 6L59.41 1.41L58 0L52 6L58 12L59.41 10.58Z" fill="white"/>
                                <path opacity="0.5" d="M33.41 10.58L28.83 6L33.41 1.41L32 0L26 6L32 12L33.41 10.58Z" fill="white"/>
                                <path opacity="0.1" d="M68.41 10.58L63.83 6L68.41 1.41L67 0L61 6L67 12L68.41 10.58Z" fill="white"/>
                                <path opacity="0.7" d="M15.41 10.58L10.83 6L15.41 1.41L14 0L8 6L14 12L15.41 10.58Z" fill="white"/>
                                <path opacity="0.3" d="M50.41 10.58L45.83 6L50.41 1.41L49 0L43 6L49 12L50.41 10.58Z" fill="white"/>
                                <path opacity="0.8" d="M7.41 10.58L2.83 6L7.41 1.41L6 0L0 6L6 12L7.41 10.58Z" fill="white"/>
                                <path opacity="0.4" d="M42.41 10.58L37.83 6L42.41 1.41L41 0L35 6L41 12L42.41 10.58Z" fill="white"/>
                            </svg>

                        </div>
                    </div>
                    <div class="swiper-slide slider__slide slide slide--2">
                        <div class="slide__item">
                            <div class="slide__title slide__title--big">2013</div>
                            <div class="slide__sub">Год основания</div>
                            <div class="slide__txt">
                                Создана компания ИНТЕЛПОРТ. Получены лицензии на предоставление полного
                                спектра услуг связи по всей России. Подключены первые корпоративные клиенты.
                            </div>
                        </div>
                        <div class="slide__item">
                            <div class="slide__title slide__title">2014</div>
                            <div class="slide__sub">Центральный узел «ММТС-9»</div>
                            <div class="slide__txt">
                                Организован центральный узел сети телематических услуг и передачи данных в Москве на
                                «ММТС-9». Подключен к сети первый бизнес центр в Москве – РАЙЦЕНТР, Электрозаводская 14.
                            </div>

                        </div>

                    </div>
                    <? foreach ($list as $items): ?>
                        <div class="swiper-slide slider__slide slide">
                            <? foreach ($items as $i): ?>
                                <div class="slide__item">
                                    <div class="slide__title"><?= $i["title"] ?></div>
                                    <div class="slide__sub"><?= $i["sub"] ?></div>
                                    <div class="slide__txt">
                                        <?= $i["txt"] ?>
                                    </div>
                                </div>
                            <? endforeach; ?>
                        </div>
                    <? endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
