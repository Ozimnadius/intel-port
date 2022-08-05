<? $default = array(
    "title" => "Алгоритм прокладки нового ВОЛС в интересах <br> другого оператора:",
    "list" => array(
        "<p>Выявление потребностей</p>",
        "<p>Определение технической возможности и затратной части</p>",
        "<p>Согласование стоимости и подписание спецификаций</p>",
        "<p>Запрос ТУ на прокладку ВОЛС/строительство телефонной канализации</p>",
        "<p>Проектирование, закупка оборудования и материалов</p>",
        "<p>Запуск согласований и строительство ВОЛС/телефонной канализации</p>",
        "<p>Сдача объекта законченного строительства и исполнительной документации собственнику телефонной канализации</p>",
        "<p>Пусконаладочные работы (ПНР) и организация заказанных услуг</p>",
        "<p>Сдача проекта, подписание актов выполненных работ, поддержка дальнейшей эксплуатации</p>",
    ),
    "bottom" => true
);
extract(array_merge($default, $vars));
?>
<div class="oai-algos <?= $class ?>">
    <div class="container">
        <div class="container-inner oai-algos__container">
            <div class="oai-algos__top">
                <div class="oai-algos__title title title--big">
                    <?= $title ?>
                </div>
                <div class="oai-algos__grid">
                    <div class="oai-algos__list">
                        <? foreach ($list as $i): ?>
                            <div class="oai-algos__item">
                                <div class="oai-algo content">
                                    <?= $i ?>
                                </div>
                            </div>
                        <? endforeach; ?>
                    </div>
                    <div class="oai-algos__quote">
                        <p>Оставьте свои данные и наши специалисты свяжутся с Вами</p>
                        <? component("btn", array(
                            "class" => "btn-main oai-algos__btn",
                            "text" => "Сотрудничество"
                        )) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <? if ($bottom): ?>
        <div class="oai-algos__bottom">
            <div class="container">
                <div class="container-inner oai-algos__container">
                    <div class="oai-algos__cols">
                        <div class="oai-algos__col">
                            <p>
                                Несмотря на детальный подход к реализации каждого проекта, организуем всё быстро и в
                                срок.
                                Нередко нас просят организовать прокладку ВОЛС там, где другие не смогли или там, где
                                проложить очень сложно. Мы беремся и успешно реализуем любые проекты.
                            </p>
                        </div>
                        <div class="oai-algos__col">
                            <h5>Например:</h5>
                            <p>
                                В сентябре 2020 года всего за 5 дней нам удалось проложить новый ВОЛС в ледовый дворец
                                «Крылатское», где тогда экстренно открывали временный госпиталь для оказания помощи
                                пациентам с COVID-19.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <? endif; ?>

</div>

