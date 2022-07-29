<div class="error">
    <div class="container">
        <div class="container-inner error__container">
            <div class="error__bread">
                <? component("bread", array(
                    "list" => array(
                        array(
                            "name" => $title,
                        ),
                    ),
                )) ?>
            </div>
            <div class="error__img">
                <img src="<?= $img ?>" alt="<?= $title ?>">
            </div>
            <div class="error__title">
                <?= $title ?>
            </div>
            <div class="error__txt">
                <?= $txt ?>
            </div>
            <? component("btn", array(
                "class" => "btn-main error__back",
                "text" => "Перейти на главную",
                "href" => "/"
            )) ?>
        </div>
    </div>
</div>