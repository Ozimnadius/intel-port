<? require("../../src/core/top.php"); ?>

<!-- main -->
<div class="page">
    <div class="page__banner">
        <? component("banner", array(
            "picture" => "/images/content/banner/solutions/offices.svg",
            "bread" => array(
                array(
                    "name" => "Решения",
                    "url" => "/solutions/"
                ),
                array(
                    "name" => "Разветвленная сеть офисов"
                )
            ),
            "title" => "Разветвленная сеть <br> офисов",
            "content" => "<p>Комплекс услуг для эффективных <br> инфокоммуникаций территориально <br> удаленных объектов заказчика</p>"
        )) ?>
    </div>
    <div class="page__section">
        <? ob_start() ?>
        <h3>Что мы предлагаем</h3>
        <p>Организовываем мощные корпоративные сети с десятками точек VPN, на базе сети MPLS</p>
        <p>Уже на этапе строительства объект обеспечивается высокоскоростными каналами связи, позволяющими в том числе
            осуществлять удаленное видеонаблюдение и контроль работ.</p>
        <ul>
            <li>Количество объединяемых точек сети – не ограничено</li>
            <li>Пропускная способность - до 10 Гбит/с и выше</li>
            <li>География объектов - любые точки России и мира</li>
            <li>Основные используемые технологии: L2 VPN и L3 VPN</li>
        </ul>
        <? $content = ob_get_clean() ?>
        <? component("internet-about", array(
            "img" => "/images/content/internet/about/offices.jpg",
            "content" => $content
        )) ?>
    </div>
    <div class="page__section border-bottom">
        <? ob_start() ?>
        <? component("offices-grid") ?>
        <? $content = ob_get_clean(); ?>
        <? component("gradient", array(
            "title" => "Услуги",
            "txt"=>"Если у Вас крупный бизнес и множество удаленных офисов, <br> Вам будут интересны все эти услуги.",
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
