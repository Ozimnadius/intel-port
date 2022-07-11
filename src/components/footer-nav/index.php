<div class="footer-nav">
    <? foreach ($GLOBALS["nav"] as $i): ?>
        <div class="footer-nav__col">
            <a href="<?= $i["url"] ?>" class="footer-nav__title"><?= $i["title"] ?></a>
            <? if (isset($i["subnav"])): ?>
                <div class="footer-nav__list">
                    <? foreach ($i["subnav"] as $j): ?>
                        <a href="<?= $j["url"] ?>" class="footer-nav__link">
                            <?= $j["title"] ?>
                        </a>
                    <? endforeach; ?>
                </div>
            <? endif; ?>
        </div>
    <? endforeach; ?>
</div>
