<div class="index-contacts">
    <div class="container">
        <div class="container-inner index-contacts__container">
            <div class="index-contacts__top">
                <div class="index-contacts__col">
                    <div class="index-contact">
                        <div class="index-contact__city">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M21 10C21 17 12 23 12 23C12 23 3 17 3 10C3 7.61305 3.94821 5.32387 5.63604 3.63604C7.32387 1.94821 9.61305 1 12 1C14.3869 1 16.6761 1.94821 18.364 3.63604C20.0518 5.32387 21 7.61305 21 10Z"
                                      stroke="#DBDBDB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12 13C13.6569 13 15 11.6569 15 10C15 8.34315 13.6569 7 12 7C10.3431 7 9 8.34315 9 10C9 11.6569 10.3431 13 12 13Z"
                                      stroke="#DBDBDB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span>Москва</span>
                        </div>
                        <a href="tel:+7(499)303-33-33" class="index-contact__tel">
                            +7 (499) 303-33-33
                        </a>
                        <div class="index-contact__addr">
                            <?= $GLOBALS["addrs"]["moscow"] ?>
                        </div>
                        <a href="#" class="index-contact__link link">
                            Показать на карте
                        </a>
                    </div>
                </div>
                <div class="index-contacts__col">
                    <div class="index-contact">
                        <div class="index-contact__city">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M21 10C21 17 12 23 12 23C12 23 3 17 3 10C3 7.61305 3.94821 5.32387 5.63604 3.63604C7.32387 1.94821 9.61305 1 12 1C14.3869 1 16.6761 1.94821 18.364 3.63604C20.0518 5.32387 21 7.61305 21 10Z"
                                      stroke="#DBDBDB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12 13C13.6569 13 15 11.6569 15 10C15 8.34315 13.6569 7 12 7C10.3431 7 9 8.34315 9 10C9 11.6569 10.3431 13 12 13Z"
                                      stroke="#DBDBDB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span>Санкт - Петербург</span>
                        </div>
                        <a href="<?=$GLOBALS["tel"]["href"] ?>" class="index-contact__tel">
                            <?=$GLOBALS["tel"]["value"] ?>
                        </a>
                        <div class="index-contact__addr">
                            <?= $GLOBALS["addrs"]["petersburg"] ?>
                        </div>
                        <a href="#" class="index-contact__link link">
                            Показать на карте
                        </a>
                    </div>
                </div>
            </div>
            <div class="index-contacts__bottom">
                <div class="index-contacts__email">
                    <p>По общим вопросам:</p>
                    <a href="mailto:<?= $GLOBALS["emails"]["info"] ?>"><?= $GLOBALS["emails"]["info"] ?></a>
                </div>
                <div class="index-contacts__email">
                    <p>Контроль качества:</p>
                    <a href="mailto:<?= $GLOBALS["emails"]["quality"] ?>"><?= $GLOBALS["emails"]["quality"] ?></a>
                </div>
                <div class="index-contacts__email">
                    <p>Техподдержка:</p>
                    <a href="mailto:<?= $GLOBALS["emails"]["support"] ?>"><?= $GLOBALS["emails"]["support"] ?></a>
                </div>
                <? component("btn", array(
                    "class" => "btn-main index-contacts__btn",
                    "text" => "Обратная связь",
                    "attrs"=>'data-event="openForm" data-name="formFeed"'
                )) ?>
            </div>
        </div>
    </div>
</div>

