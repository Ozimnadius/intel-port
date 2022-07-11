<?php
$GLOBALS['path'] = $_SERVER["DOCUMENT_ROOT"];
$GLOBALS['emails'] = array(
    "info"=>"info@intel-port.ru",
    "quality"=>"quality@intel-port.ru",
    "support"=>"support@intel-port.ru"
);
$GLOBALS["addrs"]= array(
    "moscow"=>"125124, г. Москва, Вн. Тер. г. Муниципальный округ Беговой,  ул. 3-я Ямского поля, дом 28, помещ. XII/77",
    "petersburg"=>"125124, г. Москва, Вн. Тер. г. Муниципальный округ Беговой,  ул. 3-я Ямского поля, дом 28, помещ. XII/77",

);
$GLOBALS['nav'] = array(
    array(
        "title"=>"Услуги",
        "url"=>"services",
        "subnav"=> array(
            array(
                "title"=>"Интернет",
                "url"=>"internet"
            ),
            array(
                "title"=>"Организация каналов VPN",
                "url"=>"vpn"
            ),
            array(
                "title"=>"Телефония ",
                "url"=>"phones"
            ),
            array(
                "title"=>"Проектирование и строительство сетей",
                "url"=>"networks"
            ),
            array(
                "title"=>"Защита от DDoS-атак",
                "url"=>"protect"
            ),
            array(
                "title"=>"Платформа виртуализации VMware",
                "url"=>"vmware"
            ),
            array(
                "title"=>"Colocation -  размещение серверов",
                "url"=>"colocation"
            ),
            array(
                "title"=>"Видеонаблюдение",
                "url"=>"cctv"
            ),
            array(
                "title"=>"Сервисная поддержка",
                "url"=>"support"
            )
        )
    ),
    array(
        "title"=>"Решения",
        "url"=>"solutions",
        "subnav"=> array(
            array(
                "title"=>" Операторам и интеграторам",
                "url"=>"operators-and-integrators"
            ),
            array(
                "title"=>" Комплекс услуг для девелоперов",
                "url"=>"complex"
            ),
            array(
                "title"=>"  Разветвленная сеть офисов",
                "url"=>"offices"
            ),
            array(
                "title"=>"  Индивидуальные решения",
                "url"=>"individual"
            ),
            array(
                "title"=>"  Проекты под ключ",
                "url"=>"turnkey"
            )
        )
    ),
    array(
        "title"=>"О нас",
        "url"=>"about",
        "subnav"=> array(
            array(
                "title"=>"Контакты ",
                "url"=>"contacts"
            ),
            array(
                "title"=>"Техподдержка",
                "url"=>"support"
            ),
            array(
                "title"=>"Лицензии",
                "url"=>"licenses"
            )
        )
    ),
);