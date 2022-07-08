<?
$list = array(
    array(
        "title" => "Надежность",
        "img" => "images/content/advantages/1.png",
        "content" => "<p>Наши системы мониторинга, зарезервированные сети и проактивные действия инженеров в режиме 24/7 предотвращают возможные перерывы связи. При возникновении чрезвычайных ситуаций мы гарантируем мгновенное реагирование и круглосуточную помощь.</p>"
    ),
    array(
        "title" => "Стоимость",
        "img" => "images/content/advantages/2.png",
        "content" => "<p>Мы предоставляем услуги по оптимальной стоимости. Помогаем Вам оптимизировать затраты, при этом повышая ценность услуг.</p>"
    ),
    array(
        "title" => "Оперативность",
        "img" => "images/content/advantages/3.png",
        "content" => "<p>Мы выстроили бизнес-процессы, убрали «лишние звенья» в работе и добились максимально быстрой реакции на ваши запросы без потери качества исполнения.</p>"
    ),
    array(
        "title" => "Сервис",
        "img" => "images/content/advantages/4.png",
        "content" => "<p>На первой и единственной линии технической поддержки у нас работают высококвалифицированные инженеры, которые грамотно и оперативно помогают решать задачи. Реализация заявки в момент обращения, а также информирование заказчика о ходе работ.</p>"
    ),
    array(
        "title" => "География",
        "img" => "images/content/advantages/5.png",
        "content" => "<p>Мы предоставляем региональные и международные каналы связи более чем в 70-ти городах РФ и зарубежья.</p><p>Умеем подключить заказчика максимально быстро и в любой заданной Вами точке.</p>"
    ),
    array(
        "title" => "Гибкость",
        "img" => "images/content/advantages/6.png",
        "content" => "<p>Центр нашей корпоративной культуры – высокая клиентоориентированность. Обеспечиваем индивидуальный подход и возможность работать вне шаблонов для достижения наилучших результатов.</p>"
    ),

);
?>
<div class="advantages">
    <div class="container">
        <div class="container-inner advantages__container">
            <div class="advantages__title title">
                Преимущества
            </div>
        </div>
    </div>
    <div class="advantages__list">
        <? foreach ($list as $i): ?>
            <div class="advantages__item advantage">
                <div class="container">
                    <div class="container-inner advantage__container">
                        <div class="advantage__left">
                            <div class="advantage__title">
                                <?=$i["title"] ?>
                            </div>
                        </div>
                        <div class="advantage__center">
                            <div class="advantage__img">
                                <img src="<?=$i["img"] ?>" alt="<?=$i["title"] ?>">
                            </div>
                        </div>
                        <div class="advantage__right">
                            <div class="advantage__content">
                                <?=$i["content"] ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <? endforeach; ?>
    </div>
</div>
