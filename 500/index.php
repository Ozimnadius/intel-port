<? require("../src/core/top.php"); ?>

<!-- main -->
<div class="page">
    <div class="page__section">
        <? component("error", array(
                "img"=>"/images/content/500.svg",
            "title"=>"Ошибка сервера",
            "txt"=>"Мы уже устраняем неисправность, попробуйте обновить страницу через <br> некоторое время. Приносим извинения за временные неудобства."
        )) ?>
    </div>
</div>
<!-- END main -->

<? require("../src/core/bottom.php"); ?>
