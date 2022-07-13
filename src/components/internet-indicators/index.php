<? $list = array(
    array(),
    array(
        "top" => "Пропускная <br> способность до",
        "numbers" => "40",
        "bottom" => "Гбит/с"
    ),
    array(
        "top" => "Доступность <br> магистральной сети",
        "numbers" => "99,97",
        "bottom" => "Гбит/с"
    ),
    array(
        "top" => "Задержка не более",
        "numbers" => "4",
        "bottom" => "мс"
    ),
    array(),
    array(),
    array(
        "top" => "Резервирование <br> магистрального доступа",
        "numbers" => "100<sup>%</sup>",
        "bottom" => "Благодаря кольцевой <br> структуры сети"
    ),
    array(
        "top" => "Процент потерь пакетов <br> не более",
        "numbers" => "0,01<sup>%</sup>",
        "bottom" => ""
    ),
    array(
        "top" => "Вариация задержки <br> не более",
        "numbers" => "10",
        "bottom" => "мс"
    ),
    array()

); ?>
<div class="internet-indicators">
    <div class="container">
        <div class="internet-indicators__gradient-horizontal">
            <div class="internet-indicators__top">
                <div class="internet-indicators__title">
                    Качественные показатели сети
                </div>
            </div>
            <div class="internet-indicators__bottom">
                <div class="internet-indicators__grid">
                    <? foreach ($list as $i): ?>
                        <div class="internet-indicators__item internet-indicator">
                            <? if (!empty($i)): ?>
                                <div class="internet-indicator__content">
                                    <div class="internet-indicator__top">
                                        <div class="internet-indicator__txt">
                                            <?= $i["top"] ?>
                                        </div>
                                    </div>
                                    <div class="internet-indicator__middle">
                                        <div class="internet-indicator__nums">
                                            <?= $i["numbers"] ?>
                                        </div>
                                    </div>
                                    <div class="internet-indicator__bottom">
                                        <div class="internet-indicator__txt">
                                            <?= $i["bottom"] ?>
                                        </div>
                                    </div>
                                </div>
                            <? endif; ?>
                        </div>
                    <? endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>