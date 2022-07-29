<div class="contacts-banner banner banner--main">
    <div class="container">
        <div class="container-inner contacts-banner__container banner__container">
            <div class="contacts-banner__img">
                <img src="/images/content/banner/contacts.svg" alt="lorem">
            </div>
            <div class="contacts-banner__wrap banner__wrap">
                <div class="banner__bread">
                    <? component("bread", array(
                        "list" => array(
                            array(
                                "name" => "Контакты",
                            ),
                        ),
                    )) ?>
                </div>
                <div class="banner__title contacts-banner__title">
                    Контакты
                </div>
                <div class="contacts-banner__contacts">
                    <div class="contacts-banner__item">
                        <h2>Офис</h2>
                    </div>
                    <div class="contacts-banner__item">
                        <div class="contacts-banner__email">
                            <p>По общим вопросам:</p>
                            <a href="mailto:<?= $GLOBALS["emails"]["info"] ?>">
                                <?= $GLOBALS["emails"]["info"] ?>
                            </a>
                        </div>
                    </div>
                    <div class="contacts-banner__item">
                        <div class="contacts-banner__email">
                            <p>Контроль качества:</p>
                            <a href="mailto:<?= $GLOBALS["emails"]["quality"] ?>">
                                <?= $GLOBALS["emails"]["quality"] ?>
                            </a>
                        </div>
                    </div>
                    <div class="contacts-banner__item">
                        <? component("btn", array(
                            "class" => "btn-main contacts-banner__btn",
                            "text" => "Обратная связь"
                        )) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>