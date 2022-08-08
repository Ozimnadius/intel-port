<? $default = array(
    "policy" => true
);
extract(array_merge($default, $vars));
?>

<div class="feed <?= $class ?>">
    <div class="container">
        <div class="container-inner feed__container">
            <form action="/php/ajax.php"
                  method="post"
                  class="feed__form"
                  data-event="validate">
                <div class="feed__top">
                    <? if (!isset($titleIcon)): ?>
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
                            <?= $titleIcon ?>
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
                                   data-rule-required="true"
                                   data-msg-required="Заполните телефон"
                                   data-msg-tel="Заполните телефон">
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
                                "options" => $GLOBALS['nav'][0]["subnav"]
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
                            "content" => '<span>Согласен на обработку персональных данных в соответствии с <a href="/policy/">Политикой конфиденциальности.</a></span>'
                        )) ?>
                    </div>
                <? endif; ?>
                <button type="submit" class="feed__submit feed__submit--tablet btn btn-main">
                    <span><?= $btnName ?></span>
                </button>
            </form>
        </div>
    </div>
</div>
