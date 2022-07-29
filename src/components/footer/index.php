<footer class="footer">
    <div class="container">
        <div class="container-inner footer__container">
            <div class="footer__top">
                <div class="footer__left">
                    <? component("footer-nav") ?>
                </div>
                <div class="footer__right">
                    <div class="footer__city">
                        <? component("select-city") ?>
                    </div>
                    <a href="<?=$GLOBALS["tel"]["href"] ?>" class="footer__tel">
                        <?=$GLOBALS["tel"]["value"] ?>
                    </a>
                    <div class="footer__addr">
                        <?= $GLOBALS["addrs"]["moscow"] ?>
                    </div>
                    <div class="footer__emails">
                        <div class="footer__email">
                            <p>По общим вопросам:</p>
                            <a href="mailto:<?= $GLOBALS["emails"]["info"] ?>">
                                <?= $GLOBALS["emails"]["info"] ?>
                            </a>
                        </div>
                        <div class="footer__email">
                            <p>Контроль качества:</p>
                            <a href="mailto:<?= $GLOBALS["emails"]["quality"] ?>"><?= $GLOBALS["emails"]["quality"] ?></a>
                        </div>
                    </div>
                    <? component("btn", array(
                        "class" => "btn-border btn-border--orange footer__btn",
                        "text" => "Техподдержка 24/7",
                        "href"=>"/about/support/"
                    )) ?>
                </div>
            </div>
            <div class="footer__bottom">
                <div class="footer__copy">
                    ООО “ИНТЕЛПОРТ” 2013-2020
                </div>
                <a href="/policy/" class="footer__policy">
                    Политика конфинденциальности
                </a>
                <div class="footer__personal">
                    Обработка персональных данных
                </div>
            </div>
        </div>
    </div>
</footer>
