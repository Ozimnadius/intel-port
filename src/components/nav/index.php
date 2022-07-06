<div class="nav">
    <? foreach ($GLOBALS["nav"] as $i): ?>
    <div class="nav__item">
        <a href="/<?=$i["url"]?>/" class="nav__link"><?=$i["title"]?></a>
        <? if ($i["subnav"]): ?>
            <div class="nav__drop">
                <div class="subnav">
                    <? foreach ($i["subnav"] as $j): ?>
                        <a href="/<?=$i["url"]?>/<?=$j["url"]?>/" class="subnav__item">
                            <?=$j["title"]?>
                        </a>
                    <? endforeach; ?>
                </div>
            </div>
        <? endif; ?>
    </div>
    <? endforeach; ?>
</div>
