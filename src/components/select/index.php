<select name="<?=$name ?>" class="select <?= $class ?>" data-placeholder="<?=(isset($placeholder))?$placeholder:""?>">
    <option></option>
    <? foreach ($options as $i): ?>
        <option value="<?= $i["url"] ?>" <?=(in_array($i["url"],explode('/',$_SERVER["REQUEST_URI"])))?"selected":""; ?>><?= $i["title"] ?></option>
    <? endforeach; ?>
</select>

