<? $default = array(
    "list" => array(
        array(
            "title" => "Надежность <h2>24/7</h2>",
            "content" => "<p>Наши системы мониторинга, зарезервированные сети и проактивные действия инженеров в режиме 24/7 предотвращают возможные перерывы связи.</p> <p>При возникновении чрезвычайных ситуаций мы гарантируем мгновенное реагирование и круглосуточную помощь.</p>"
        ),
        array(
            "sub" => "Наши услуги",
            "content" => "<p>Предоставляем весь спектр телекоммуникационных услуг и реализуем проекты любой сложности.</p>"
        )
    )
);
extract(array_merge($default, $vars));
?>
<div class="index-desc <?=$class ?>">
    <? foreach ($list as $i): ?>
        <div class="index-desc__row">
            <div class="container">
                <div class="container-inner index-desc__container">
                    <div class="index-desc__left">
                        <? if (isset($i["title"])): ?>
                            <div class="index-desc__title">
                                <?= $i["title"] ?>
                            </div>
                        <? endif; ?>
                        <? if (isset($i["sub"])): ?>
                            <div class="index-desc__sub">
                                <?= $i["sub"] ?>
                            </div>
                        <? endif; ?>
                    </div>
                    <div class="index-desc__right">
                        <div class="index-desc__content">
                            <?= $i["content"] ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <? endforeach; ?>
</div>
