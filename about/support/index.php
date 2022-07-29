<? require("../../src/core/top.php"); ?>

<!-- main -->
<div class="page">
    <div class="page__banner">
        <? component("banner", array(
            "picture" => "/images/content/banner/support.svg",
            "bread" => array(
                array(
                    "name" => "Техподдержка 24/7",
                ),
            ),
            "title" => "Техническая <br> поддержка 24/7",
            "content" => '<p>Мгновенная реакция и квалифицированные консультации</p><div><br><p> Круглосуточно:</p><h2><a href="tel:+7(499)303-33-33">+7 (499) 303-33-33</a></h2><p>По техническим вопросам: <a href="mailto:support@intel-port.ru">support@intel-port.ru</a></p></div>'
        )) ?>
    </div>
    <div class="page__section">
        <? ob_start() ?>
        <h3>Принципы обслуживанияПринципы обслуживания</h3>
        <ul>
            <li>На первой и единственной линии технической поддержки у нас работают высококвалифицированные инженеры, которые грамотно и оперативно решают Ваши задачи. Сотрудники постоянно проходят внешние и внутренне обучение.</li>
            <li>Строго отслеживаем время реакции на обращения и своевременно информируем о сроках решения задач.</li>
            <li>Уделяем особенное внимание мотивации сотрудников. Персонально поощряем ответственность, инициативность и оперативность! </li>
            <li>Следим за удовлетворенностью клиента. Для этого оценивается исполнение каждого тикета, а раз в пол года оценивается NPS — индекс потребительской лояльности каждого заказчика нашей компании.</li>
        </ul>
        <? $content = ob_get_clean() ?>
        <? component("internet-about", array(
            "img" => "/images/content/internet/about/support2.jpg",
            "content" => $content
        )) ?>
    </div>
    <div class="page__section">
        <? ob_start() ?>
        <? component("support-grid") ?>
        <? $content = ob_get_clean(); ?>
        <? component("gradient", array(
            "title" => "SLA по технической поддержке",
            "content" => $content
        )) ?>
    </div>
    <div class="page__section border-bottom">
        <? component("index-lics") ?>
    </div>
    <div class="page__section border-bottom">
        <? component("recs") ?>
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
