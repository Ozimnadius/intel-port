<div class="phones-list">
    <? if (isset($title)): ?>
        <div class="phones-list__title title">
            <?= $title ?>
        </div>
    <? endif; ?>
    <ul class="phones-list__ul">
        <? foreach ($list as $i): ?>
            <li class="phones-list__li">
                <?=$i ?>
            </li>
        <? endforeach; ?>
    </ul>
</div>