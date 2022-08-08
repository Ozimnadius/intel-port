<? $default = array(
    "tabs" => $GLOBALS['nav'][0]["subnav"],
    "url" => "/services/"
);
extract(array_merge($default, $vars));
?>
<div class="index-servs">
    <div class="container index-servs__container">
        <div class="index-servs__left">
            <div class="index-servs__btns">
                <? foreach ($tabs as $key => $i): ?>
                    <button type="button" class="index-servs__btn <?= ($key == 0) ? "active" : ""; ?>"
                            data-tabs="btn"><?= $i["title"] ?></button>
                <? endforeach; ?>
            </div>
        </div>
        <div class="index-servs__right">
            <div class="index-servs__tabs">
                <? foreach ($tabs as $key => $i): ?>
                    <div class="index-servs__tab <?= ($key == 0) ? "active" : ""; ?>" data-tabs="tab">
                        <div class="index-servs__img">
                            <div class="index-servs__img-wrap">
                                <img src="<?=$i["img"] ?>" alt="<?= $i["title"] ?>">
                            </div>
                        </div>
                        <div class="index-servs__title">
                            <?= $i["title"] ?>
                        </div>
                        <? component("btn", array(
                            "class" => "btn-main index-servs__btn-1",
                            "attrs"=>'data-event="openForm" data-name="formCooperation"',
                        )) ?>
                        <? component("btn", array(
                            "href"=> $url.$i["url"]."/",
                            "class" => "btn-link index-servs__btn-2",
                            "text" => "Подробнее",
                            "icon-after" => ' <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7 17L17 7" stroke="#EF7C19" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M7 7H17V17" stroke="#EF7C19" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>'
                        )) ?>
                    </div>
                <? endforeach; ?>
            </div>
        </div>
    </div>
</div>