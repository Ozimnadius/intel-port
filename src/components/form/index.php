<form action="<?= $href ?>" method="post" class="form">
    <div class="form__wrap">
        <? if (isset($title)): ?>
            <div class="form__title"><?= $title ?></div>
        <? endif; ?>

        <div class="form__fields">
            <? if (in_array("addr", $fields)): ?>
                <div class="form__field">
                    <input type="text"
                           name="addr"
                           class="input"
                           placeholder="Введите адрес">
                </div>
            <? endif; ?>
            <? if (in_array("name", $fields)): ?>
                <div class="form__field">
                    <input type="text"
                           name="name"
                           class="input"
                           placeholder="Имя">
                </div>
            <? endif; ?>
            <? if (in_array("tel", $fields)): ?>
                <div class="form__field">
                    <input type="tel"
                           name="tel"
                           class="input"
                           placeholder="Телефон*"
                           data-rule-required="true"
                           data-msg-required="Заполните телефон"
                           data-msg-tel="Заполните телефон">
                </div>
            <? endif; ?>
            <? if (in_array("email", $fields)): ?>
                <div class="form__field">
                    <input type="email"
                           name="email"
                           class="input"
                           placeholder="Email">
                </div>
            <? endif; ?>
            <? if (in_array("select", $fields)): ?>
                <div class="form__field">
                    <? component("select", array(
                        "name" => "services",
                        "class" => "form__select",
                        "placeholder" => "Выбрать услугу",
                        "options" => array(
                            "Интернет",
                            "Организация каналов VPN",
                            "Телефония",
                            "Проектирование и строительство сетей",
                            "Защита от DDoS-атак",
                            "Виртуальные серверы",
                            "Colocation",
                            "Видеонаблюдение",
                            "Сервисная поддержка"
                        )
                    )) ?>
                </div>
            <? endif; ?>
        </div>

        <div class="form__policy">
            <? component("accept", array(
                "name" => "accept",
                "content" => '<p>Согласен на обработку персональных данных в соответствии с <a href="/policy/">Политикой конфиденциальности.</a></p>'
            )) ?>
        </div>

        <button type="submit" class="form__submit btn btn-main">
            <span><?= $btnName ?></span>
        </button>
    </div>
</form>
