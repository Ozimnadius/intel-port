<template id="templates">
    <div id="formRequest">
        <? component("form", array(
            "href" => "/php/request.php",
            "title" => "Заявка на подключение",
            "fields" => array("name", "tel", "select"),
            "btnName" => "Оставить заявку"
        )); ?>
    </div>
    <div id="formCall">
        <? component("form", array(
            "href" => "/php/call.php",
            "title" => "Получить консультацию",
            "fields" => array("name", "tel", "email"),
            "btnName" => "Оставить заявку"
        )); ?>
    </div>
    <div id="formOk">
        <div class="form">
            <div class="form__wrap">
                <div class="form__title">Спасибо</div>
                <div class="form__txt">Ваша заявка принята в обработку, <br> наши специалисты свяжутся с <br> Вами в
                    ближайшее время
                </div>
                <? component("btn", array(
                    "class" => "form__btn btn-main",
                    "text" => "Отлично",
                    "attrs" => 'data-event="closeForm"'
                )) ?>
            </div>
        </div>
    </div>
</template>