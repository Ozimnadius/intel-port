<header class="header border-bottom">
    <div class="container">
        <div class="container-inner header__container">

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
                <a href="<?=$GLOBALS["tel"]["href"] ?>">
                    <?=$GLOBALS["tel"]["value"] ?>
                </a>
            </div>

            <div class="header__support">
                <? component("btn", [
                    "class" => "btn-stroke",
                    "text" => "Техподдержка 24/7",
                    "href"=>"/about/support/"
                ]) ?>
            </div>

        </div>
    </div>
</header>
