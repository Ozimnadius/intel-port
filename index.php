<? require("src/core/top.php"); ?>

<!-- main -->
<div class="page">
    <div class="page__banner">
        <? component("banner", array(
            "picture" => array(
                "desctop" => "/images/content/banner/index.png",
                "mobile" => "/images/content/banner/index-mobile.png"
            ),
            "titleBig" => "Незримое звено <br> успешного бизнеса",
            "content" => "<p>Оператор связи для крупного и среднего <br> бизнеса Москвы и Санкт-Петербурга.</p><p>Мы делаем обмен информацией надежным <br> и удобным.</p>"
        )) ?>
    </div>
    <div class="page__section">
        <? component("index-desc") ?>
    </div>
    <div class="page__section border-bottom">
        <? component('index-servs') ?>
    </div>
    <div class="page__section">
        <? component("feed", array(
            "titleSmall" => "Заявка на подключение",
            "fields" => array("name", "tel", "select"),
            "btnName"=>"Подключить"
        )); ?>
    </div>
    <div class="page__section border-bottom">
        <? component("index-about") ?>
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


<? require("src/core/bottom.php"); ?>
