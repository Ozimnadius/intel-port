<div class="recs">
    <div class="container recs__top">
        <div class="container-inner recs__container">
            <div class="recs__title title">Рекомендации</div>
            <div class="recs__nav">
                <a href="#" class="recs__arr recs__prev">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="20" cy="20" r="19.5" transform="rotate(-180 20 20)" stroke="#2A395B"/>
                        <path d="M10.1464 19.6464C9.95119 19.8417 9.95119 20.1583 10.1464 20.3536L13.3284 23.5355C13.5237 23.7308 13.8403 23.7308 14.0355 23.5355C14.2308 23.3403 14.2308 23.0237 14.0355 22.8284L11.2071 20L14.0355 17.1716C14.2308 16.9763 14.2308 16.6597 14.0355 16.4645C13.8403 16.2692 13.5237 16.2692 13.3284 16.4645L10.1464 19.6464ZM40 19.5L10.5 19.5L10.5 20.5L40 20.5L40 19.5Z"
                              fill="#2A395B"/>
                    </svg>
                </a>
                <a href="#" class="recs__arr recs__next">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="20" cy="20" r="19.5" stroke="#EAA521"/>
                        <path d="M29.8536 20.3536C30.0488 20.1583 30.0488 19.8417 29.8536 19.6464L26.6716 16.4645C26.4763 16.2692 26.1597 16.2692 25.9645 16.4645C25.7692 16.6597 25.7692 16.9763 25.9645 17.1716L28.7929 20L25.9645 22.8284C25.7692 23.0237 25.7692 23.3403 25.9645 23.5355C26.1597 23.7308 26.4763 23.7308 26.6716 23.5355L29.8536 20.3536ZM0 20.5H29.5V19.5H0V20.5Z"
                              fill="#EAA521"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <div class="recs__swiper swiper">
        <div class="swiper-wrapper">
            <? foreach (array(1, 2, 3, 4) as $i): ?>
                <div class="swiper-slide rec recs__slide">
                    <div class="rec__left">
                        <div class="rec__face">
                            <img src="/images/content/recs/img.jpg" alt="Ирина Алексеева">
                        </div>
                        <div class="rec__brand">
                            <img src="/images/content/recs/brand.png" alt="brand">
                        </div>
                    </div>
                    <div class="rec__right">
                        <div class="rec__name">Ирина Алексеева</div>
                        <div class="rec__prof">
                            Технический директор московского филиала компании «Престиж-Интернет»
                        </div>
                        <div class="rec__brand rec__brand--tablet">
                            <img src="/images/content/recs/brand.png" alt="brand">
                        </div>
                        <div class="rec__desc">
                            ООО «ПРЕСТИЖ-ИНТЕРНЕТ» благодарит компанию ООО «ИНТЕЛПОРТ» за качественное предоставление
                            услуг
                            связи! Ваша компания зарекомендовала себя как надежный поставщик телекоммуникационных услуг.
                        </div>
                        <a href="#"
                           class="rec__link link"
                           data-event="openAjaxForm"
                           data-url="/php/recommendation.php"
                           data-id="99">
                            Открыть письмо
                        </a>
                    </div>
                </div>
            <? endforeach; ?>
        </div>
    </div>
</div>