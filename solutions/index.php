<? require("../src/core/top.php"); ?>

<!-- main -->
<div class="page">
    <div class="page__banner">
            <? component("banner", array(
                "picture" => "/images/content/banner/solutions/index.svg",
                "bread" => array(
                    array(
                        "name" => "Решения",
                    ),
                ),
                "title" => "Готовые решения для <br> наших клиентов",
                "content" => "<p>К каждому заказу мы подходим строго <br> индивидуально, исходя из пожеланий <br> покупателя.</p>"
            )) ?>
    </div>
    <div class="page__section">
        <? component("index-desc", array(
            "list" => array(
                array(
                    "sub" => "Решения",
                    "content" => "<p>Предоставляем весь спектр телекоммуникационных услуг и реализуем проекты любой сложности.</p>"
                )
            )
        )) ?>
    </div>
    <div class="page__section border-bottom">
        <? component('index-servs',array(
                "tabs"=>$GLOBALS['nav'][1]["subnav"],
                "url"=>"/solutions/"
        )) ?>
    </div>
    <div class="page__section">
        <? component("feed", array(
            "titleSmall" => "Заявка на подключение",
            "fields" => array("name", "tel", "select"),
            "btnName"=>"Подключить"
        )); ?>
    </div>
    <div class="page__section border-top border-bottom">
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
