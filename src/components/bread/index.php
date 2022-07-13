<div class="bread">
    <a href="/" class="bread__item">
        Главная
    </a>
    <? foreach ($list as $i): ?>
        <span class="bread__sep"><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.08398 11.7442L9.32815 8.5L6.08398 5.24875L7.08273 4.25L11.3327 8.5L7.08273 12.75L6.08398 11.7442Z" fill="white" fill-opacity="0.4"/></svg></span>
        <? if (isset($i["url"])): ?>
            <a href="<?=$i["url"] ?>" class="bread__item">
                <?=$i["name"] ?>
            </a>
        <? else: ?>
            <span class="bread__item"><?=$i["name"] ?></span>
        <? endif; ?>
    <? endforeach; ?>
</div>