<div class="contacts-addrs">
    <div class="contacts-addrs__item contacts-addr">
        <div class="contacts-addr__left">
            <div class="contacts-addr__city">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <path d="M21 10C21 17 12 23 12 23C12 23 3 17 3 10C3 7.61305 3.94821 5.32387 5.63604 3.63604C7.32387 1.94821 9.61305 1 12 1C14.3869 1 16.6761 1.94821 18.364 3.63604C20.0518 5.32387 21 7.61305 21 10Z"
                          stroke="#DBDBDB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12 13C13.6569 13 15 11.6569 15 10C15 8.34315 13.6569 7 12 7C10.3431 7 9 8.34315 9 10C9 11.6569 10.3431 13 12 13Z"
                          stroke="#DBDBDB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <span>Москва</span>
            </div>
            <div class="contacts-addr__tel">
                <a href="tel:+7(499)303-33-33">+7 (499) 303-33-33</a>
                <p>Круглосуточно</p>
            </div>
        </div>
        <div class="contacts-addr__right">
            <div class="contacts-addr__content">
                <?= $GLOBALS["addrs"]["moscow"] ?>
            </div>
            <a href="#" class="contacts-addr__link link">Показать на карте</a>
        </div>
    </div>
    <div class="contacts-addrs__item contacts-addr">
        <div class="contacts-addr__left">
            <div class="contacts-addr__city">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <path d="M21 10C21 17 12 23 12 23C12 23 3 17 3 10C3 7.61305 3.94821 5.32387 5.63604 3.63604C7.32387 1.94821 9.61305 1 12 1C14.3869 1 16.6761 1.94821 18.364 3.63604C20.0518 5.32387 21 7.61305 21 10Z"
                          stroke="#DBDBDB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12 13C13.6569 13 15 11.6569 15 10C15 8.34315 13.6569 7 12 7C10.3431 7 9 8.34315 9 10C9 11.6569 10.3431 13 12 13Z"
                          stroke="#DBDBDB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <span>Санкт - Петербург</span>
            </div>
            <div class="contacts-addr__tel">
                <a href="<?= $GLOBALS["tel"]["href"] ?>"><?= $GLOBALS["tel"]["value"] ?></a>
                <p>Круглосуточно</p>
            </div>
        </div>
        <div class="contacts-addr__right">
            <div class="contacts-addr__content">
                <?= $GLOBALS["addrs"]["petersburg"] ?>
            </div>
            <a href="#" class="contacts-addr__link link">Показать на карте</a>
        </div>
    </div>

</div>
