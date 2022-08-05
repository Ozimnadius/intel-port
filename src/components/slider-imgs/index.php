<div class="slider-imgs">
    <div class="slider-imgs__slide">
        <div class="slider-imgs__item">
            <div class="slider-imgs__img">
                <picture>
                    <source srcset="/images/content/slider/1-mobile.jpg" media="(max-width: 767.98px)"/>
                    <source srcset="/images/content/slider/1-tablet.jpg" media="(max-width: 1439.98px)"/>
                    <source srcset="/images/content/slider/1.jpg" media="(max-width: 1919.98px)"/>
                    <img src="/images/content/slider/1.jpg" alt="lorem">
                </picture>
            </div>
        </div>
        <div class="slider-imgs__item">
            <div class="slider-imgs__img">
                <picture>
                    <source srcset="/images/content/slider/2-mobile.jpg" media="(max-width: 767.98px)"/>
                    <source srcset="/images/content/slider/2-tablet.jpg" media="(max-width: 1439.98px)"/>
                    <source srcset="/images/content/slider/2.jpg" media="(max-width: 1919.98px)"/>
                    <img src="/images/content/slider/2.jpg" alt="lorem">
                </picture>
            </div>
        </div>
    </div>
    <? foreach ($arr as $slide): ?>
        <div class="slider-imgs__slide">
            <? foreach ($slide as $i): ?>
            <div class="slider-imgs__item">
                <div class="slider-imgs__img">
                    <picture>
                        <source srcset="<?=$i["imgMobile"] ?>" media="(max-width: 767.98px)"/>
                        <source srcset="<?=$i["imgTablet"] ?>" media="(max-width: 1439.98px)"/>
                        <source srcset="<?=$i["img"] ?>" media="(max-width: 1919.98px)"/>
                        <img src="<?=$i["img"] ?>" alt="src/components/slider-imgs/index.php">
                    </picture>
                </div>
            </div>
            <? endforeach; ?>
        </div>
    <? endforeach; ?>
</div>
