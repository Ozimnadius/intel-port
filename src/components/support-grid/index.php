<? $default = array(
    "list" => array(
        array(
            "title" => "Авария",
            "items" => array(
                "<p>Продолжительность <br>устранения</p><p><b><i>Не более 8 часов</i></b></p>",
                "<p>Периодичность <br>информирования</p><p><b><i>1 раз в час </i></b><br>(круглосуточно)</p>",
                "<p>Время проведения работ <br>(время Московское)</p><p><b><i>Круглосуточно</i></b></p>",
            )
        ),
        array(
            "title" => "Предаварийное состояние",
            "items" => array(
                "<p>Продолжительность <br>устранения</p><p><b><i>Не более 12 часов</i></b></p>",
                "<p>Периодичность <br>информирования</p><p><b><i>1 раз в 8 часов</i></b> <br>(ежедневно с 8:00 до 20:00)</p>",
                "<p>Время проведения работ <br>(время Московское)</p><p><b><i>Круглосуточно</i></b></p>",
            )
        ),
        array(
            "title" => "Любые возникающие неисправности",
            "items" => array(
                "<p>Продолжительность <br>устранения</p><p><b><i>Не более 72 часов</i></b></p>",
                "<p>Периодичность <br>информирования</p><p><b><i>1 раз в час </i></b><br>(в рабочее время, пн-пт, с 9:00 до 20:00)</p>",
                "<p>Время проведения работ <br>(время Московское)</p><p><b><i>В рабочее время</i></b></p><p>(пн-пт, с 9:00 до 18:00)</p>",
            )
        ),
        array(
            "title" => "Любые обращения Заказчика",
            "items" => array(
                "<p>Продолжительность <br>устранения</p><p><b><i>Не более 10 рабочих дней</i></b></p>",
                "<p>Периодичность <br>информирования</p><p><b><i>1 раз в 2 дня</i></b><br>(в рабочее время, пн-пт, с 9:00 до 20:00)</p>",
                "<p>Время проведения работ <br>(время Московское)</p><p><b><i>В рабочее время</i></b><br></p><p>(пн-пт, с 9:00 до 18:00)</p>",
            )
        ),

    )
);
extract(array_merge($default, $vars));
?>

<div class="support-grid">
    <? foreach ($list as $i): ?>
        <div class="support-grid__col">
            <div class="support-grid__title">
                <?= $i["title"] ?>
            </div>
            <div class="support-grid__list">
                <? foreach ($i["items"] as $content): ?>
                    <div class="support-grid__item content">
                        <?= $content ?>
                    </div>
                <? endforeach; ?>
            </div>
        </div>
    <? endforeach; ?>
</div>