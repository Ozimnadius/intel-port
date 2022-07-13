<? $default = array(
    "policy" => true
);
extract(array_merge($default, $vars));?>

<div class="feed <?=$class ?>">
    <div class="container">
        <div class="container-inner feed__container">
            <form action="/" method="post" class="feed__form">
                <div class="feed__top">
                    <? if(!isset($titleIcon)): ?>
                    <div class="feed__col">
                        <? if (isset($titleSmall)): ?>
                            <div class="feed__title-small"><?= $titleSmall ?></div>
                        <? endif; ?>
                        <? if (isset($title)): ?>
                            <div class="feed__title"><?= $title ?></div>
                        <? endif; ?>
                    </div>
                    <div class="feed__col">
                        <? if (isset($text)): ?>
                            <div class="feed__text"><?= $text ?></div>
                        <? endif; ?>
                    </div>
                    <? else: ?>
                    <div class="feed__title-icon">
                        <?=$titleIcon ?>
                    </div>
                    <? endif; ?>
                </div>
                <div class="feed__fields">
                    <? if (in_array("addr", $fields)): ?>
                        <div class="feed__field feed__field--addr">
                            <input type="text"
                                   name="addr"
                                   class="input"
                                   placeholder="Введите адрес">
                        </div>
                    <? endif; ?>
                    <? if (in_array("name", $fields)): ?>
                        <div class="feed__field">
                            <input type="text"
                                   name="name"
                                   class="input"
                                   placeholder="Имя">
                        </div>
                    <? endif; ?>
                    <? if (in_array("tel", $fields)): ?>
                        <div class="feed__field">
                            <input type="tel"
                                   name="tel"
                                   class="input"
                                   placeholder="Телефон*"
                                   required>
                        </div>
                    <? endif; ?>
                    <? if (in_array("email", $fields)): ?>
                        <div class="feed__field">
                            <input type="email"
                                   name="email"
                                   class="input"
                                   placeholder="Email">
                        </div>
                    <? endif; ?>
                    <? if (in_array("select", $fields)): ?>
                        <div class="feed__field feed__field--select">
                            <? component("select", array(
                                "name" => "services",
                                "class" => "feed__select",
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
                    <button type="submit" class="feed__submit btn btn-main">
                        <span><?= $btnName ?></span>
                    </button>
                </div>
                <? if ($policy): ?>
                    <div class="feed__policy">
                        <? component("accept", array(
                            "name" => "accept",
                            "content" => '<p>Согласен на обработку персональных данных в соответствии с <a href="/">Политикой конфиденциальности.</a></p>'
                        )) ?>
                    </div>
                <? endif; ?>
            </form>
        </div>
    </div>
</div>
