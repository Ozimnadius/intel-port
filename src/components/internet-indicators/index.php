<? ob_start() ?>
    <div class="internet-indicators">
        <? foreach ($list as $i): ?>
            <div class="internet-indicators__item internet-indicator">
                <? if (!empty($i)): ?>
                    <div class="internet-indicator__top">
                        <div class="internet-indicator__txt">
                            <?= $i["top"] ?>
                        </div>
                    </div>
                    <div class="internet-indicator__middle">
                        <div class="internet-indicator__nums">
                            <?= $i["numbers"] ?>
                        </div>
                    </div>
                    <div class="internet-indicator__bottom">
                        <div class="internet-indicator__txt">
                            <?= $i["bottom"] ?>
                        </div>
                    </div>
                <? endif; ?>
            </div>
        <? endforeach; ?>
    </div>
<? $content = ob_get_clean() ?>
<? component("gradient", array(
    "title" => "Качественные показатели сети",
    "content" => $content,
    "bottom" => $bottom
)) ?>