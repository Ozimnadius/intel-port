<div class="banner" style="background-image:url(<?= $picture["desctop"] ?>)">
    <div class="container">
        <div class="banner__container">
            <div class="banner__wrap">
                <? if (isset($title)): ?>
                    <div class="banner__title">
                        <?= $title ?>
                    </div>
                <? endif; ?>
                <? if (isset($titleBig)): ?>
                    <div class="banner__title-big">
                        <?=$titleBig?>
                    </div>
                <? endif; ?>
                <div class="banner__img">
                    <img src="<?= $picture["mobile"] ?>">
                </div>
                <div class="banner__content">
                    <?= $content?>
                </div>
                <div class="banner__btns">
                    <? component("btn") ?>
                    <? component("btn", array(
                        "class" => "btn-border",
                        "text" => "Консультироваться"
                    )) ?>
                </div>
            </div>
        </div>
    </div>
</div>
