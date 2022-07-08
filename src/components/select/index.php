<select name="<?=$name ?>" class="select <?= $class ?>" data-placeholder="<?=(isset($placeholder))?$placeholder:""?>">
    <option></option>
    <? foreach ($options as $i): ?>
        <option value="<?= $i ?>"><?= $i ?></option>
    <? endforeach; ?>
</select>

