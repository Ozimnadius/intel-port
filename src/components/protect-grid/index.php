<? $list = array(
    array(),
    array(
        "title" => "Эффективно борется с",
        "txt" => "TCP SYN, <br> HTTP flood, <br> TLS flood (HTTPS)"
    ),
    array(
        "title" => "Автоматизированный запуск",
        "txt" => "flowspec для UDP flood <br> (больших атак)  "
    ),
    array(
        "title" => "Время реакции ",
        "txt" => "flowspec для UDP flood <br> (больших атак)  "
    ),
    array(),
    array(),
    array(
        "title" => "Собственная панель управления фильтрацией ",
        "txt" => "БЕСПЛАТНО"
    ),
    array(
        "title" => "Для более тщательной настройки порогов фильтров ",
        "txt" => "проводится обучение <br> системы"
    ),
    array(
        "title" => "Не требуется  дополнительное оборудование и покупка лицензий",
        "txt" => "БЕЗ доп затрат"
    ),
    array(),
) ?>
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