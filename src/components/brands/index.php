<div class="brands">
    <div class="brands__list">
        <? foreach ($GLOBALS["brands"] as $row): ?>
            <div class="brands__animate">
                <div class="brands__track">
                    <? foreach ($row as $i): ?>
                        <div class="brands__item">
                            <img src="<?=$i ?>">
                        </div>
                    <? endforeach; ?>
                    <? foreach ($row as $i): ?>
                        <div class="brands__item">
                            <img src="<?=$i ?>">
                        </div>
                    <? endforeach; ?>
                </div>
            </div>
        <? endforeach; ?>
    </div>
    <div class="brands__bottom">
        <div class="container">
            <div class="container-inner brands__container">
                <div class="brands__txt">
                    Мы дорожим доверием крупного бизнеса, постоянно совершенствуем свой сервис и инвестируем в развитие технической базы.
                </div>
            </div>
        </div>
    </div>
</div>