<? require("../../src/core/top.php"); ?>

<!-- main -->
<div class="page">
    <div class="page__banner">
        <? component("banner", array(
            "picture" => array(
                "desctop" => "/images/content/banner/internet.png",
                "mobile" => "/images/content/banner/internet-mobile.png"
            ),
            "bread" => array(
                array(
                    "name" => "Услуги",
                    "url" => "/services/"
                ),
                array(
                    "name" => "Интернет"
                )
            ),
            "title" => "Интернет",
            "content" => "<p>Предоставление высокоскоростных <br> каналов доступа к сети Интернет</p>"
        )) ?>
    </div>
    <div class="page__section">
        <? component("internet-about") ?>
    </div>
    <div class="page__section">
        <? component("internet-indicators") ?>
    </div>
    <div class="page__section">
        <? component("feed", array(
            "class"=>"feed--inner",
            "titleIcon"=>'<svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M33.25 15.833C33.25 26.9163 19 36.4163 19 36.4163C19 36.4163 4.75 26.9163 4.75 15.833C4.75 12.0537 6.25133 8.42913 8.92373 5.75674C11.5961 3.08434 15.2207 1.58301 19 1.58301C22.7793 1.58301 26.4039 3.08434 29.0763 5.75674C31.7487 8.42913 33.25 12.0537 33.25 15.833Z" stroke="#EAA521" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/> <path d="M19 20.583C21.6234 20.583 23.75 18.4564 23.75 15.833C23.75 13.2097 21.6234 11.083 19 11.083C16.3766 11.083 14.25 13.2097 14.25 15.833C14.25 18.4564 16.3766 20.583 19 20.583Z" stroke="#EAA521" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/> </svg>Проверьте свой адрес подключения',
            "fields" => array("addr", "tel"),
            "btnName"=> "Подключить",
            "policy"=> false
        )); ?>
    </div>
    <div class="page__section border-bottom">
        <? component("internet-support") ?>
    </div>
    <div class="page__section border-bottom">
        <? component("internet-services") ?>
    </div>
    <div class="page__section">
        <? component("feed", array(
            "titleSmall" => "Заявка на подключение",
            "fields" => array("name", "tel", "select"),
            "btnName"=>"Подключить"
        )); ?>
    </div>
    <div class="page__section border-bottom border-top">
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


<? require("../../src/core/bottom.php"); ?>
