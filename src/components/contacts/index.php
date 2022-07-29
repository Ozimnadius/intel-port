<div class="contacts">
    <div class="container">
        <div class="container-inner contacts__container">
            <div class="contacts__title">
                Техподдержка 24/7
            </div>
            <div class="contacts__list">
                <div class="contacts__item">
                    <div class="contacts__email">
                        <p>По техническим вопросам:</p>
                        <a href="mailto:<?= $GLOBALS["emails"]["support"] ?>">
                            <?= $GLOBALS["emails"]["support"] ?>
                        </a>
                    </div>
                </div>
                <div class="contacts__item">
                    <div class="contacts__tel">
                        <a href="<?= $GLOBALS["tel"]["href"] ?>">
                            <?= $GLOBALS["tel"]["value"] ?>
                        </a>
                        <p>Круглосуточно</p>
                    </div>
                </div>
            </div>
            <div class="contacts__addrs">
                <? component("contacts-addrs") ?>
            </div>
            <div class="contacts__feed">
                <? component("feed", array(
                    "class"=>"feed--inner-transparent",
                    "titleSmall" => "Заявка на подключение",
                    "fields" => array("name", "tel", "select"),
                    "btnName" => "Подключить"
                )); ?>
            </div>
            <div class="contacts__props">
                <? component("contacts-props") ?>
            </div>
        </div>
    </div>
</div>