<? $default = array(
    "list" => array(
        array(),
        array(
            "title" => "Эффективно борется с",
            "txt" => "<p>TCP SYN, <br> HTTP flood, <br> TLS flood (HTTPS)</p>"
        ),
        array(
            "title" => "Автоматизированный запуск",
            "txt" => "<p>flowspec для UDP flood <br> (больших атак)</p>"
        ),
        array(
            "title" => "Время реакции ",
            "txt" => "<p>flowspec для UDP flood <br> (больших атак)</p>"
        ),
        array(),
        array(),
        array(
            "title" => "Собственная панель управления фильтрацией ",
            "txt" => "<p>БЕСПЛАТНО</p>"
        ),
        array(
            "title" => "Для более тщательной настройки порогов фильтров ",
            "txt" => "<p>проводится обучение <br> системы</p>"
        ),
        array(
            "title" => "Не требуется  дополнительное оборудование и покупка лицензий",
            "txt" => "<p>БЕЗ доп затрат</p>"
        ),
        array(),
    )
);
extract(array_merge($default, $vars));
?>
<div class="protect-grid">
    <? foreach ($list as $i): ?>
        <div class="protect-grid__item">
            <div class="protect-grid__title">
                <?=$i["title"] ?>
            </div>
            <div class="protect-grid__txt">
                <?=$i["txt"] ?>
            </div>
        </div>
    <? endforeach; ?>
</div>