<? $list = array(
    array(
        "title" => "Проектирование систем видеонаблюдения",
        "ul" => array(
            "анализ объекта и определение требований к системе.",
            "подготовка технического задания",
            "разработка технической и финансовой частей проектно-сметной документации",
            "согласование документации с заказчиком"
        )
    ),
    array(
        "title" => "Строительство систем видеонаблюдения",
        "ul" => array(
            "централизованный контроль",
            "масштабируемость",
            "отказоустойчивость",
            "гибкие настройки сценариев работы",
            "расширение систем",
            "тиражирование"
        )
    ),
    array(
        "title" => "Поставка и подключение оборудования",
        "ul" => array(
            "видеокамеры",
            "мониторы",
            "регистраторы",
            "серверы хранения данных"
        )
    ),
    array(
        "title" => "Обслуживание систем видеонаблюдения",
        "ul" => array(
            "централизованное администрирование",
            "активный мониторинг",
            "оперативная замена комплектующих"
        )
    ),

); ?>
<div class="cctv-content">
    <? foreach ($list as $i): ?>
        <div class="cctv-content__item">
            <h3><?=$i["title"] ?></h3>
            <ul>
                <? foreach ($i["ul"] as $li): ?>
                    <li><?= $li ?></li>
                <? endforeach; ?>
            </ul>
        </div>
    <? endforeach; ?>
</div>