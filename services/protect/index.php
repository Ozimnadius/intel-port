<? require("../../src/core/top.php"); ?>

<!-- main -->
<div class="page">
    <div class="page__banner">
        <? component("banner", array(
            "picture" => array(
                "desctop" => "/images/content/banner/protect.png",
                "mobile" => "/images/content/banner/protect-mobile.png"
            ),
            "bread" => array(
                array(
                    "name" => "Услуги",
                    "url" => "/services/"
                ),
                array(
                    "name" => "Защита от DDoS-атак"
                )
            ),
            "title" => "Защита от DDoS-атак",
            "content" => "<p>Очистка трафика с помощью <br> оборудования <span style='color: var(--yellow)'>Arbor</span></p>"
        )) ?>
    </div>
    <div class="page__section services-content">
        <div class="container">
            <div class="container-inner services-content__container">
                <div class="services-content__about">
                    <div class="internet-about__grid">
                        <div class="internet-about__left">
                            <div class="internet-about__img">
                                <img src="/images/content/internet/about/protect.jpg">
                            </div>
                        </div>
                        <div class="internet-about__right">
                            <div class="internet-about__content">
                                <h3>Особенности оборудования Arbor</h3>
                                <ul>
                                    <li>В рамках комплексных проектов с предоставлением доступа к сети интернет
                                        представляем систему фильтрации трафика от DDoS-атак с помощью оборудования
                                        Arbor.
                                    </li>
                                    <li>Arbor Peakflow SP анализирует трафик клиента, который необходимо защищать, и при
                                        DDoS-атаках направляет обнаруженный вредоносный трафик на Arbor TMS, который
                                        производит очистку полезного трафика от вредоносного.
                                    </li>
                                    <li>Глубокая очистка Arbor позволяет проводить очистку трафика объемом до 40G.
                                        Детектирование производится до 4го уровня, очистка до 7го.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="services-content__txt">
                    <p>Arbor – гибкая, самообучающаяся система для анализа и фильтрации DDoS-атак, разработанная Arbor
                        Networks, которая позволяет предотвратить DDoS-атаки различного типа, вплоть до анализа и
                        отчистки трафика на уровне приложения (applications атак).</p>
                </div>
            </div>
        </div>
    </div>
    <div class="page__section">
        <? ob_start() ?>
        <?component("protect-grid")?>
        <? $content = ob_get_clean() ?>
        <? component("gradient", array(
            "title" => "Базовые возможности",
            "content" => $content
        )) ?>
    </div>
    <div class="page__section">
        <? component("feed", array(
            "class" => "feed--inner",
            "titleIcon" => '<svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M33.25 15.833C33.25 26.9163 19 36.4163 19 36.4163C19 36.4163 4.75 26.9163 4.75 15.833C4.75 12.0537 6.25133 8.42913 8.92373 5.75674C11.5961 3.08434 15.2207 1.58301 19 1.58301C22.7793 1.58301 26.4039 3.08434 29.0763 5.75674C31.7487 8.42913 33.25 12.0537 33.25 15.833Z" stroke="#EAA521" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/> <path d="M19 20.583C21.6234 20.583 23.75 18.4564 23.75 15.833C23.75 13.2097 21.6234 11.083 19 11.083C16.3766 11.083 14.25 13.2097 14.25 15.833C14.25 18.4564 16.3766 20.583 19 20.583Z" stroke="#EAA521" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/> </svg>Проверьте свой адрес подключения',
            "fields" => array("addr", "tel"),
            "btnName" => "Подключить",
            "policy" => false
        )); ?>
    </div>
    <div class="page__section border-bottom">
        <? component("internet-support") ?>
    </div>
    <div class="page__section">
        <? component("feed", array(
            "titleSmall" => "Заявка на подключение",
            "fields" => array("name", "tel", "select"),
            "btnName" => "Подключить"
        )); ?>
    </div>
    <div class="page__section border-bottom border-top">
        <? component("advantages") ?>
    </div>
    <div class="page__section">
        <? component("feed", array(
            "title" => "Бесплатный консалтинг <br> вашей действующей связи.",
            "text" => "Повышаем эффективность, сокращаем расходы. <br> Проверьте актуальность ваших тарифов на услуги связи.",
            "fields" => array("name", "tel", "email"),
            "btnName" => "Проверить"
        )); ?>
    </div>
    <div class="page__section border-bottom border-top">
        <? component("index-lics") ?>
    </div>
    <div class="page__section border-bottom">
        <? component("partners") ?>
    </div>
    <div class="page__section">
        <? component('index-contacts') ?>
    </div>
</div>
<!-- END main -->


<? require("../../src/core/bottom.php"); ?>
