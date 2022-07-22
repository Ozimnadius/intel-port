<? require("../../src/core/top.php"); ?>

<!-- main -->
<div class="page">
    <div class="page__banner">
        <? component("banner", array(
            "picture" => "/images/content/banner/solutions/complex.svg",
            "bread" => array(
                array(
                    "name" => "Решения",
                    "url" => "/solutions/"
                ),
                array(
                    "name" => "Девелоперам"
                )
            ),
            "title" => "Девелоперам",
            "content" => "<p>Комплексные решения для объектов <br> коммерческой недвижимости</p>"
        )) ?>
    </div>
    <div class="page__section">
        <? ob_start() ?>
        <h3>Возможности и особенности услуги</h3>
        <p>Полный комплекс услуг девелоперам для обеспечения зданий качественными телекоммуникациями. Начиная от
            проектирования внешних и внутренних коммуникаций, заканчивая предоставлением арендаторам широкого спектра
            современных услуг связи. </p>
        <p>Уже на этапе строительства объект обеспечивается высокоскоростными каналами связи, позволяющими в том числе
            осуществлять удаленное видеонаблюдение и контроль работ.</p>
        <p>Благодаря гибкому подходу и многолетнему опыту работы с объектами коммерческой недвижимости, мы сформировали
            большой выбор моделей сотрудничества, выгодно отличающихся на этом рынке.</p>
        <? $content = ob_get_clean() ?>
        <? component("internet-about", array(
            "img" => "/images/content/internet/about/complex.jpg",
            "content" => $content
        )) ?>
    </div>
    <div class="page__section border-bottom">
        <? ob_start() ?>
        <? component("oai-grid", array(
            "list" => array(
                "<h3>Инвестируем в вашу инфраструктуру</h3><p>Инвестируем и полностью организуем телекоммуникационную инфраструктуру объекта.</p>",
                "<h3>Строим внешние сети связи</h3><p>Организуем ввод кабельной канализации в здание и подключаем его к городским сетям по волоконно-оптическому кабелю.</p>",
                "<h3>Телефонизируем объект или здание</h3><p>Создаем структурированные кабельные сети и телефонизируем объект или здание.</p>",
                "<h3>Готовим и сдаем техническую документацию</h3><p>Окажем содействие в сдаче объекта Гостехкомиссии, в том числе выдадим ТУ и справку для предоставления в ИГАСН.</p>",
                "<h3>Подключаем общественные зоны Wi-Fi </h3><p>Организуем подключение Wi-Fi-зон в местах общего пользования с авторизацией пользователей.</p>",
                "<h3>Услуги для  <br> УК бесплатно</h3><p>Предоставляем управляющей компании необходимые услуги связи бесплатно. </p>",
                "<h3>Кешбек по <br> партнерскому договору</h3><p>Выплачиваем собственнику/управляющей компании повышенный процент в рамках партнерского договора. </p>",
                "<h3>Модернизируем за наш счет</h3><p>Обслуживаем и модернизируем ИТ-инфраструктуру объекта за свой счет.</p>",
            )
        )) ?>
        <? $content = ob_get_clean(); ?>
        <? component("gradient", array(
            "title" => "Выгоды сотрудничества",
            "content" => $content
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
    <div class="page__section">
        <? component("complex-services") ?>
    </div>
    <div class="page__section border-bottom border-top">
        <? component("index-lics") ?>
    </div>
    <div class="page__section border-bottom">
        <? component("recs") ?>
    </div>
    <div class="page__section border-bottom">
        <? component("feed", array(
            "titleSmall" => "Заявка на подключение",
            "fields" => array("name", "tel", "select"),
            "btnName" => "Подключить"
        )); ?>
    </div>
    <div class="page__section border-bottom">
        <? component("advantages") ?>
    </div>
    <div class="page__section border-bottom">
        <? component("feed", array(
            "title" => "Бесплатный консалтинг <br> вашей действующей связи.",
            "text" => "Повышаем эффективность, сокращаем расходы. <br> Проверьте актуальность ваших тарифов на услуги связи.",
            "fields" => array("name", "tel", "email"),
            "btnName" => "Проверить"
        )); ?>
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
