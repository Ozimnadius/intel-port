<? $default = array(
    "list" => array(
        "Правилами оказания услуг связи, утвержденными постановлением Правительства Российской Федерации от 23 января 2006 года № 32 и правилами оказания телематических услуг связи, утвержденными постановлением Правительства Российской Федерации от 10 сентября 2007 года № 575.",
        "Руководящим документом отрасли связи «Телематические службы» РД 45 129-2000, утвержденным Приказом Министерства РФ по связи и информатике от 23 июля 2001 года № 175.",
        "Руководящим документом отрасли связи «Сети и службы передачи данных» РД 45 128-2000, утвержденным Приказом Министерства РФ по связи и информатике от 12 ноября 2001 года № 225.",
        "«Правилами оказания услуг связи по передаче данных», утвержденными постановлением Правительства Российской Федерации от 23 января 2006 г. № 32.",
    )
);
extract(array_merge($default, $vars));
?>
<div class="internet-services">
    <div class="container">
        <div class="container-inner internet-services__container">
            <div class="internet-services__title">
                Оказываем услуги <br>
                связи в соответствии:
            </div>
            <div class="internet-services__wrap">
                <div class="internet-services__icon">
                    <img src="/images/content/internet/services/icon.png" alt="lorem">
                </div>
                <ul class="internet-services__list">
                    <? foreach ($list as $i): ?>
                        <li class="internet-services__item">
                            <div class="internet-services__content">
                                <?= $i ?>
                            </div>
                        </li>
                    <? endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</div>