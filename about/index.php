<? require("../src/core/top.php"); ?>

<!-- main -->
<div class="page">
    <div class="page__banner">
        <? component("banner", array(
            "class" => "banner--main",
            "picture" => "/images/content/banner/index.svg",
            "bread" => array(
                array(
                    "name" => "О компании",
                ),
            ),
            "title" => "О компании",
            "content" => "<p>ИНТЕЛПОРТ – оператор связи, который специализируется на предоставлении широкого ряда инфокоммуникационных услуг в сегменте крупных корпоративных клиентов на рынке Москвы и Санкт-Петербурга.</p>"
        )) ?>
    </div>
    <div class="page__section border-bottom">
        <? component("about-history") ?>
    </div>
    <div class="page__section">
        <? component("brands") ?>
    </div>
    <div class="page__section border-bottom">
        <? component("recs") ?>
    </div>
    <div class="page__section border-bottom">
        <? component("advantages") ?>
    </div>
    <div class="page__section">
        <? component("feed", array(
            "title" => "Бесплатный консалтинг <br> вашей действующей связи.",
            "text"=>"Повышаем эффективность, сокращаем расходы. <br> Проверьте актуальность ваших тарифов на услуги связи.",
            "fields" => array("name", "tel", "email"),
            "btnName"=>"Проверить"
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


<? require("../src/core/bottom.php"); ?>
