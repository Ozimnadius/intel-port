<? $default = array(
    "href" => "#",
    "class" => "btn-main",
    "text" => "Подключить"
);

$result = array_merge($default, $vars);
?>

<a href="<?= $result["href"]; ?>"
   class="btn <?= $result["class"]; ?>"
    <?=$attrs ?>>
    <? if ($result["icon-before"]): ?>
        <?= $result["icon-before"]; ?>
    <? endif; ?>
    <span><?= $result["text"]; ?></span>
    <? if ($result["icon-after"]): ?>
        <?= $result["icon-after"]; ?>
    <? endif; ?>
</a>
