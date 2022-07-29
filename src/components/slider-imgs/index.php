<div class="slider-imgs">
    <div class="slider-imgs__slide">
        <div class="slider-imgs__item">
            <div class="slider-imgs__img">
                <img src="/images/content/slider/1.jpg" alt="lorem">
            </div>
        </div>
        <div class="slider-imgs__item">
            <div class="slider-imgs__img">
                <img src="/images/content/slider/2.jpg" alt="lorem">
            </div>
        </div>
    </div>
    <? foreach ($arr as $slide): ?>
        <div class="slider-imgs__slide">
            <? foreach ($slide as $i): ?>
            <div class="slider-imgs__item">
                <div class="slider-imgs__img">
                    <img src="<?=$i["img"] ?>" alt="<?=$i["sub"] ?>">
                </div>
            </div>
            <? endforeach; ?>
        </div>
    <? endforeach; ?>
</div>
