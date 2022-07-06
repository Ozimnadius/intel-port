<header class="header">
    <div class="container">
        <div class="header__container">

            <div class="header__logo">
                <a href="/">
                    <img src="/images/content/logo.svg" alt="Logo">
                </a>
            </div>

            <div class="header__nav">
                <? component("nav") ?>
            </div>

            <div class="header__city">
                <? component("select-city") ?>
            </div>

            <div class="header__socials">
                <? component("socials") ?>
            </div>

            <div class="header__tel">
                <a href="tel:+7(812)383-33-33">
                    +7 (812) 383-33-33
                </a>
            </div>

            <div class="header__support">
                <? component("btn", [
                    "class" => "btn-stroke",
                    "text" => "Техподдержка 24/7"
                ]) ?>
            </div>

        </div>
    </div>
</header>
