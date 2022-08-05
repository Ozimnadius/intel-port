<? require("../../src/core/top.php"); ?>

<!-- main -->
<div class="page">
    <div class="page__banner">
        <? component("banner", array(
            "picture" => "/images/content/banner/services/vpn.svg",
            "bread" => array(
                array(
                    "name" => "Услуги",
                    "url" => "/services/"
                ),
                array(
                    "name" => "Организация каналов VPN"
                )
            ),
            "title" => "Организация каналов VPN",
            "content" => "<p>Объединение территориально удаленных офисов <br> заказчика в единую информационную сеть</p>"
        )) ?>
    </div>
    <div class="page__section">
        <? ob_start() ?>
        <h3>Возможности и особенности услуги</h3>
        <ul>
            <li>Организация виртуальной частной сети заказчика, включая техническую поддержку и обслуживание.
                Предоставляем как единичные выделенные каналы передачи данных между двумя офисами, так и мощные
                корпоративные сети с десятками точек VPN на базе сети MPLS.
            </li>
            <li>Основные используемые технологии: L2 VPN и L3 VPN.</li>
            <li>Количество объединяемых точек сети – не ограничено.</li>
            <li>Пропускная способность - до 10 Гбит/с и выше.</li>
            <li>География объектов - любые точки России и мира.</li>
        </ul>
        <? $content = ob_get_clean() ?>
        <? component("internet-about", array(
            "img" => "/images/content/internet/about/vpn.jpg",
            "content" => $content
        )) ?>
    </div>
    <div class="page__section">
        <? component("vpn-indicators") ?>
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
    <div class="page__section border-bottom">
        <? component("internet-services", array(
            "list" => array(
                "Федеральным законом от 7 июля 2003 г. № 126-ФЗ «О связи».",
                "ГОСТ Р 53724-2009 Качество услуг связи. Общие положения.",
                "ГОСТ Р 53728-2009 Качество услуги «Передача данных». Показатели качества.",
                "ГОСТ Р 53729–2009. Качество услуги «Предоставление виртуальной частной сети (VPN)». Показатели качества.",
                "ГОСТ Р 53730–2009. Качество услуги «Предоставление каналов связи в аренду». Показатели качества.",
                "Приказом Министерства информационных технологий и связи РФ от 27 сентября 2007 г. № 113 «Об утверждении Требований к организационно-техническому обеспечению устойчивого функционирования сети связи общего пользования».",
                "Правилами оказания услуг связи по передаче данных, утвержденными Постановлением Правительства Российской Федерации от 23.01.2006 № 32.",
                "Правилами оказания телематических услуг связи, утвержденные Постановлением Правительства Российской Федерации от 10 сентября 2007 г. № 575.",
            )
        )) ?>
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
