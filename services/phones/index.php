<? require("../../src/core/top.php"); ?>

<!-- main -->
<div class="page">
    <div class="page__banner">
        <? component("banner", array(
            "picture" => "/images/content/banner/services/phones.svg",
            "bread" => array(
                array(
                    "name" => "Услуги",
                    "url" => "/services/"
                ),
                array(
                    "name" => "Телефония"
                )
            ),
            "title" => "Телефония",
            "content" => "<p>Полный спектр услуг современной <br> телефонной связи</p>"
        )) ?>
    </div>
    <div class="page__section">
        <div class="container">
            <div class="container-inner point-top-right">
                <? component("phones-about") ?>
            </div>
        </div>
    </div>
    <div class="page__section">
        <? component("phones-dops") ?>
    </div>
    <div class="page__section">
        <? component("phones-methods") ?>
    </div>
    <div class="page__section">
        <? component("internet-indicators", array(
            "title" => "Базовые возможности",
            "list" => array(
                array(),
                array(
                    "top" => "Число внешних <br> абонентских линий",
                    "numbers" => '<svg width="104" height="104" viewBox="0 0 104 104" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M80.6 28.6875C74.36 28.6875 68.4667 31.1142 64.2633 35.3175L33.8 62.3575C31.0267 65.1308 27.3433 66.6475 23.4 66.6475C15.2967 66.6475 8.66667 60.1042 8.66667 52.0008C8.66667 43.8975 15.2967 37.3542 23.4 37.3542C27.3433 37.3542 31.0267 38.8708 33.9733 41.8175L38.87 46.1508L45.5 40.3442L39.9533 35.5342C35.5333 31.1142 29.64 28.6875 23.4 28.6875C10.4867 28.6875 0 39.1742 0 52.0008C0 64.8275 10.4867 75.3142 23.4 75.3142C29.64 75.3142 35.5333 72.8875 39.7367 68.6842L70.2 41.6442C72.9733 38.8708 76.6567 37.3542 80.6 37.3542C88.7033 37.3542 95.3333 43.8975 95.3333 52.0008C95.3333 60.1042 88.7033 66.6475 80.6 66.6475C76.7 66.6475 72.9733 65.1308 70.0267 62.1842L65 57.8075L58.5 63.6142L64.0467 68.4675C68.4667 72.8442 74.3167 75.2708 80.6 75.2708C93.5133 75.2708 104 64.8275 104 52.0008C104 39.0008 93.5133 28.6875 80.6 28.6875Z" fill="url(#paint0_linear_724_43679)"/> <defs> <linearGradient id="paint0_linear_724_43679" x1="-3.8743e-07" y1="75.3142" x2="107.98" y2="62.6655" gradientUnits="userSpaceOnUse"> <stop offset="0.0444861" stop-color="#6266B8"/> <stop offset="0.591388" stop-color="#994A8C"/> <stop offset="1" stop-color="#E74C55"/> </linearGradient> </defs> </svg>',
                    "bottom" => "без ограничений"
                ),
                array(
                    "top" => "Число внутренних номеров с прокладкой внутренней телефонной сети",
                    "numbers" => '<svg width="104" height="104" viewBox="0 0 104 104" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M80.6 28.6875C74.36 28.6875 68.4667 31.1142 64.2633 35.3175L33.8 62.3575C31.0267 65.1308 27.3433 66.6475 23.4 66.6475C15.2967 66.6475 8.66667 60.1042 8.66667 52.0008C8.66667 43.8975 15.2967 37.3542 23.4 37.3542C27.3433 37.3542 31.0267 38.8708 33.9733 41.8175L38.87 46.1508L45.5 40.3442L39.9533 35.5342C35.5333 31.1142 29.64 28.6875 23.4 28.6875C10.4867 28.6875 0 39.1742 0 52.0008C0 64.8275 10.4867 75.3142 23.4 75.3142C29.64 75.3142 35.5333 72.8875 39.7367 68.6842L70.2 41.6442C72.9733 38.8708 76.6567 37.3542 80.6 37.3542C88.7033 37.3542 95.3333 43.8975 95.3333 52.0008C95.3333 60.1042 88.7033 66.6475 80.6 66.6475C76.7 66.6475 72.9733 65.1308 70.0267 62.1842L65 57.8075L58.5 63.6142L64.0467 68.4675C68.4667 72.8442 74.3167 75.2708 80.6 75.2708C93.5133 75.2708 104 64.8275 104 52.0008C104 39.0008 93.5133 28.6875 80.6 28.6875Z" fill="url(#paint0_linear_724_43679)"/> <defs> <linearGradient id="paint0_linear_724_43679" x1="-3.8743e-07" y1="75.3142" x2="107.98" y2="62.6655" gradientUnits="userSpaceOnUse"> <stop offset="0.0444861" stop-color="#6266B8"/> <stop offset="0.591388" stop-color="#994A8C"/> <stop offset="1" stop-color="#E74C55"/> </linearGradient> </defs> </svg>',
                    "bottom" => "без ограничений"
                ),
                array(
                    "top" => "Время разговора на номера фиксированной телефонной связи ",
                    "numbers" => '<svg width="104" height="104" viewBox="0 0 104 104" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M80.6 28.6875C74.36 28.6875 68.4667 31.1142 64.2633 35.3175L33.8 62.3575C31.0267 65.1308 27.3433 66.6475 23.4 66.6475C15.2967 66.6475 8.66667 60.1042 8.66667 52.0008C8.66667 43.8975 15.2967 37.3542 23.4 37.3542C27.3433 37.3542 31.0267 38.8708 33.9733 41.8175L38.87 46.1508L45.5 40.3442L39.9533 35.5342C35.5333 31.1142 29.64 28.6875 23.4 28.6875C10.4867 28.6875 0 39.1742 0 52.0008C0 64.8275 10.4867 75.3142 23.4 75.3142C29.64 75.3142 35.5333 72.8875 39.7367 68.6842L70.2 41.6442C72.9733 38.8708 76.6567 37.3542 80.6 37.3542C88.7033 37.3542 95.3333 43.8975 95.3333 52.0008C95.3333 60.1042 88.7033 66.6475 80.6 66.6475C76.7 66.6475 72.9733 65.1308 70.0267 62.1842L65 57.8075L58.5 63.6142L64.0467 68.4675C68.4667 72.8442 74.3167 75.2708 80.6 75.2708C93.5133 75.2708 104 64.8275 104 52.0008C104 39.0008 93.5133 28.6875 80.6 28.6875Z" fill="url(#paint0_linear_724_43679)"/> <defs> <linearGradient id="paint0_linear_724_43679" x1="-3.8743e-07" y1="75.3142" x2="107.98" y2="62.6655" gradientUnits="userSpaceOnUse"> <stop offset="0.0444861" stop-color="#6266B8"/> <stop offset="0.591388" stop-color="#994A8C"/> <stop offset="1" stop-color="#E74C55"/> </linearGradient> </defs> </svg>',
                    "bottom" => "без ограничений"
                ),
                array(),
                array(),
                array(
                    "top" => "Резервирование <br> магистрального доступа",
                    "numbers" => "АТС",
                    "bottom" => ""
                ),
                array(
                    "top" => "Процент потерь пакетов <br> не более",
                    "numbers" => "0,01<sup>%</sup>",
                    "bottom" => ""
                ),
                array(
                    "top" => "Вариация задержки <br> не более",
                    "numbers" => "3",
                    "bottom" => "мс"
                ),
                array()
            ),
            "bottom" => "И множество других функций для <br> оптимизации алгоритмов обработки вызовов"
        )) ?>
    </div>
    <div class="page__section">
        <? component("feed", array(
            "class" => "feed--inner",
            "titleIcon" => '<svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M33.25 15.833C33.25 26.9163 19 36.4163 19 36.4163C19 36.4163 4.75 26.9163 4.75 15.833C4.75 12.0537 6.25133 8.42913 8.92373 5.75674C11.5961 3.08434 15.2207 1.58301 19 1.58301C22.7793 1.58301 26.4039 3.08434 29.0763 5.75674C31.7487 8.42913 33.25 12.0537 33.25 15.833Z" stroke="#EAA521" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/> <path d="M19 20.583C21.6234 20.583 23.75 18.4564 23.75 15.833C23.75 13.2097 21.6234 11.083 19 11.083C16.3766 11.083 14.25 13.2097 14.25 15.833C14.25 18.4564 16.3766 20.583 19 20.583Z" stroke="#EAA521" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/> </svg>Проверьте свой адрес подключения',
            "fields" => array("addr", "tel"),
            "btnName" => "Подключить",
            "policy" => false
        )); ?>
    </div>
    <div class="page__section border-bottom">
        <? component("internet-support") ?>
    </div>
    <div class="page__section">
        <? component("feed", array(
            "titleSmall" => "Заявка на подключение",
            "fields" => array("name", "tel", "select"),
            "btnName" => "Подключить"
        )); ?>
    </div>
    <div class="page__section border-bottom border-top">
        <? component("advantages") ?>
    </div>
    <div class="page__section">
        <? component("feed", array(
            "title" => "Бесплатный консалтинг <br> вашей действующей связи.",
            "text" => "Повышаем эффективность, сокращаем расходы. <br> Проверьте актуальность ваших тарифов на услуги связи.",
            "fields" => array("name", "tel", "email"),
            "btnName" => "Проверить"
        )); ?>
    </div>
    <div class="page__section border-bottom border-top">
        <? component("index-lics") ?>
    </div>
    <div class="page__section border-bottom">
        <? component("partners") ?>
    </div>
    <div class="page__section">
        <? component('index-contacts') ?>
    </div>
</div>
<!-- END main -->


<? require("../../src/core/bottom.php"); ?>
