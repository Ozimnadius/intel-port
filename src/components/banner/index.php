<div class="banner <?= $class ?>">
    <div class="container">
        <div class="container-inner banner__container">
            <div class="banner__left">
                <div class="banner__wrap">
                    <? if (isset($bread)): ?>
                        <div class="banner__bread">
                            <? component("bread", array(
                                "list" => $bread
                            )) ?>
                        </div>
                    <? endif; ?>
                    <? if (isset($title)): ?>
                        <div class="banner__title">
                            <?= $title ?>
                        </div>
                    <? endif; ?>
                    <? if (isset($titleBig)): ?>
                        <div class="banner__title-big">
                            <?= $titleBig ?>
                        </div>
                    <? endif; ?>
                    <div class="banner__img banner__img--mobile">
                        <img src="<?= $picture ?>" alt="img">
                    </div>
                    <div class="banner__content">
                        <?= $content ?>
                    </div>
                    <div class="banner__btns">
                        <? component("btn", array(
                            "class" => "btn-main",
                            "attrs"=>'data-event="openForm" data-name="formRequest" data-ok="formOk"'
                        )) ?>
                        <? component("btn", array(
                            "class" => "btn-border",
                            "text" => "Консультироваться",
                            "attrs"=>'data-event="openForm" data-name="formCall" data-ok="formOk"'
                        )) ?>
                    </div>
                </div>
            </div>
            <div class="banner__right">
                <div class="banner__img">
                    <div class="banner__img-wrap">
                        <img src="<?= $picture ?>" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
