<div class="gradient">
    <div class="container">
        <div class="container-inner gradient__container">
            <div class="gradient__top">
                <div class="gradient__title">
                    <?= $title ?>
                </div>
                <? if (isset($txt)): ?>
                    <div class="gradient__txt">
                        <?= $txt ?>
                    </div>
                <? endif; ?>
            </div>
            <div class="gradient__bottom">
                <?= $content ?>
            </div>
            <? if (!empty($bottom)): ?>
                <div class="gradient__sub">
                    <?= $bottom ?>
                </div>
            <? endif; ?>
        </div>
    </div>
</div>
