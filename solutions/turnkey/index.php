<? require("../../src/core/top.php"); ?>

<!-- main -->
<div class="page">
    <div class="page__banner">
        <? component("banner", array(
            "picture" => "/images/content/banner/solutions/turnkey.svg",
            "bread" => array(
                array(
                    "name" => "Решения",
                    "url" => "/solutions/"
                ),
                array(
                    "name" => "Проекты под ключ"
                )
            ),
            "title" => "Проекты под ключ",
            "content" => "<p>Комплексные решения для крупного <br> бизнеса</p>"
        )) ?>
    </div>
    <div class="page__section">
        <? ob_start() ?>
        <h3>Полностью индивидуальное решение</h3>
        <h6>Организовываем мощные корпоративные сети с десятками точек VPN, на базе сети MPLS</h6>
        <h6>Уже на этапе строительства объект обеспечивается высокоскоростными каналами связи, позволяющими в том числе
            осуществлять удаленное видеонаблюдение и контроль работ.</h6>
        <p style="color:var(--txt-dark);">Нередко такие проекты одновременно требуют объединения в единую сеть десятков
            удаленных офисов, поддержку программных продуктов, colocation и организацию каналов связи с внешними
            дата-центрами, индивидуальное сопровождение и SLA-соглашение. Комплексную увязку всех этих решений
            правильнее всего организовывать одним центром ответственности – «под ключ». </p>
        <p style="color:var(--txt-dark);">Большой опыт реализации позволяет Интелпорт гарантировать высокое качество
            исполнения проектов «под ключ», а также профессионализм и своевременность на всех этапах работы с Вами.</p>
        <? $content = ob_get_clean() ?>
        <? component("internet-about", array(
            "img" => "/images/content/internet/about/offices.jpg",
            "content" => $content
        )) ?>
    </div>
    <div class="page__section border-bottom">
        <? ob_start() ?>
        <? component("turnkey-grid") ?>
        <? $content = ob_get_clean(); ?>
        <? component("gradient", array(
            "title" => "Направления работы",
            "content" => $content
        )) ?>
    </div>
    <div class="page__section border-bottom">
        <? component("feed", array(
            "class" => "feed--inner2",
            "titleIcon" => '<svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M33.25 15.833C33.25 26.9163 19 36.4163 19 36.4163C19 36.4163 4.75 26.9163 4.75 15.833C4.75 12.0537 6.25133 8.42913 8.92373 5.75674C11.5961 3.08434 15.2207 1.58301 19 1.58301C22.7793 1.58301 26.4039 3.08434 29.0763 5.75674C31.7487 8.42913 33.25 12.0537 33.25 15.833Z" stroke="#EAA521" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/> <path d="M19 20.583C21.6234 20.583 23.75 18.4564 23.75 15.833C23.75 13.2097 21.6234 11.083 19 11.083C16.3766 11.083 14.25 13.2097 14.25 15.833C14.25 18.4564 16.3766 20.583 19 20.583Z" stroke="#EAA521" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/> </svg>Проверьте свой адрес подключения',
            "fields" => array("addr", "tel"),
            "btnName" => "Подключить",
            "policy" => false
        )); ?>
    </div>
    <div class="page__section border-bottom">
        <? component("turnkey-desc") ?>
    </div>
    <div class="page__section">
        <? component("oai-algos", array(
            "title"=>"Процесс работы с проектами под ключ:",
            "list"=>array(
                "<h6>Выявление <br> потребностей</h6>
        <p>Обсуждение задач и потребностей клиента с представителем заказчика и пресэйл менеджером.</p>",
                "<h6>Технический аудит <br>/ уточнение задачи.</h6>
        <p>Аудит текущего состояния сети заказчика на всех объектах</p>",
                "<h6>Создание ТЗ.</h6>
        <p>Подготовка Технического задания по результатам аудита</p>",
                "<h6>Согласование сметы <br>и спецификации </h6>
        <p>Подбор оборудования исходя из потребностей заказчика, поиск поставщиков, составление сметной документации</p>",
                "<h6>Проектирование.</h6>
        <p>Подготовка комплексного проекта, куда включены все IT сервисы заказчика</p>",
                "<h6>Закупка оборудования <br>и материалов.</h6>
        <p>Поставка оборудования согласно сметной документации у проверенных поставщиков активного и пассивного сетевого оборудования</p>",
                "<h6>Монтаж, организация <br> услуг и сервисов.</h6>
        <p>Монтаж линейной инфраструктуры и установка активного сетевого оборудования</p>",
                "<h6>Пусконаладочные <br>работы (ПНР).</h6>
        <p>Настройка, тестирование и ввод в эксплуатацию запроектрованой телекоммуникационной системы</p>",
                "<h6>Сдача проекта.</h6>
        <p>Демонстрация установленной системы заказчику, подготовка исполнительной документации для дальнейшей эксплуатации.</p>",
            ),
            "class"=>"oai-algos--4",
            "bottom"=>false
        )) ?>
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
