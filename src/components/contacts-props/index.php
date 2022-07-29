<? $default = array(
    "list" => array(
        array(
            "name" => "Наименование полное",
            "val" => "Общество с ограниченной ответственностью «ИНТЕЛПОРТ» "
        ),
        array(
            "name" => "Наименование краткое",
            "val" => "ООО «ИНТЕЛПОРТ»"
        ),
        array(
            "name" => "ОГРН",
            "val" => "1137746797462"
        ),
        array(
            "name" => "ИНН",
            "val" => "7718945876"
        ),
        array(
            "name" => "КПП",
            "val" => "771401001"
        ),
        array(
            "name" => "Юридический адрес",
            "val" => "125124, г. Москва, Вн. Тер. г. Муниципальный округ Беговой,  ул. 3-я Ямского поля, дом 28, этаж 3, помещ./ком./XII/77"
        ),
        array(
            "name" => "Фактический адрес",
            "val" => "125124, г. Москва, Вн. Тер. г. Муниципальный округ Беговой,  ул. 3-я Ямского поля, дом 28, этаж 3, помещ./ком./XII/77"
        ),
        array(
            "name" => "Почтовый адрес",
            "val" => "127137, г. Москва, а/я 49"
        ),
        array(
            "name" => "ОКПО",
            "val" => "18243275"
        ),
        array(
            "name" => "ОКВЭД",
            "val" => "61.10.4"
        ),
        array(
            "name" => "Наименование банка",
            "val" => "Филиал ПАО «БАНК УРАЛСИБ» г. Санкт-Петербург"
        ),
        array(
            "name" => "Расчетный счет",
            "val" => "40702810222070001009"
        ),
        array(
            "name" => "Корреспондентский счет",
            "val" => "30101810800000000706"
        ),
        array(
            "name" => "БИК",
            "val" => "044030706"
        ),
        array(
            "name" => "Контакты",
            "val" => "е-mail: buh@intel-port.ru, тел. +7 (499) 303-33-33"
        ),
        array(
            "name" => "Генеральный директор",
            "val" => "Новиков Дмитрий Юрьевич"
        ),
        array(
            "name" => "Главный бухгалтер",
            "val" => "Новиков Дмитрий Юрьевич"
        )
    )
);
extract(array_merge($default, $vars));
?>
<div class="contacts-props">
    <div class="contacts-props__top">
        <div class="contacts-props__left">
            <div class="contacts-props__title title">РЕКВИЗИТЫ</div>
        </div>
        <div class="contacts-props__right">
            <button type="button" class="contacts-props__btn">
                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 9.35938H11C9.89543 9.35938 9 10.2548 9 11.3594V20.3594C9 21.4639 9.89543 22.3594 11 22.3594H20C21.1046 22.3594 22 21.4639 22 20.3594V11.3594C22 10.2548 21.1046 9.35938 20 9.35938Z"
                          stroke="#EA4C1D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M5 15.3594H4C3.46957 15.3594 2.96086 15.1487 2.58579 14.7736C2.21071 14.3985 2 13.8898 2 13.3594V4.35938C2 3.82894 2.21071 3.32023 2.58579 2.94516C2.96086 2.57009 3.46957 2.35938 4 2.35938H13C13.5304 2.35938 14.0391 2.57009 14.4142 2.94516C14.7893 3.32023 15 3.82894 15 4.35938V5.35938"
                          stroke="#EA4C1D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <span>Скопировать всë</span>
            </button>
        </div>
    </div>
    <div class="contacts-props__list">
        <? foreach ($list as $i): ?>
            <div class="contacts-props__item contacts-prop">
                <div class="contacts-prop__left"><?=$i["name"] ?></div>
                <div class="contacts-prop__right"><?=$i["val"] ?></div>
            </div>
        <? endforeach; ?>
    </div>
</div>