<? require("../src/core/top.php"); ?>

<!-- main -->
<div class="page">
    <div class="page__section">
        <? component("error", array(
                "img"=>"/images/content/404.svg",
            "title"=>"Страница не найдена",
            "txt"=>"Неправильно набран адрес или такой <br> страницы на сайте не существует."
        )) ?>
    </div>
</div>
<!-- END main -->

<? require("../src/core/bottom.php"); ?>
