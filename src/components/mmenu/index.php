<div class="mmenu">
    <div class="mmenu__inner">
        <div class="mmenu__top">
            <div class="mmenu__logo">
                <a href="/">
                    <img src="/images/content/logo.svg" alt="logo">
                </a>
            </div>
            <div class="mmenu__socials">
                <? component("socials") ?>
            </div>
            <a href="#" class="mmenu__close" data-mmenu="close">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M31.6663 10.6833L29.3163 8.33325L19.9997 17.6499L10.683 8.33325L8.33301 10.6833L17.6497 19.9999L8.33301 29.3166L10.683 31.6666L19.9997 22.3499L29.3163 31.6666L31.6663 29.3166L22.3497 19.9999L31.6663 10.6833Z"
                          fill="#8F99B5"/>
                </svg>
            </a>
        </div>
        <div class="mmenu__list">
            <? foreach ($GLOBALS["nav"] as $i): ?>
                <div class="mmenu__item" data-mmenu="item">
                    <a href="/<?= $i["url"] ?>/" class="mmenu__link mmenu__link--arr" data-mmenu="openSubmenu">
                        <?= $i["title"] ?>
                    </a>
                    <? if (isset($i["subnav"])): ?>
                        <div class="mmenu__subnav" data-mmenu="submenu">
                            <div class="mmenu__inner">
                                <div class="mmenu__top">
                                    <a href="#" class="mmenu__back" data-mmenu="closeSubmenu">
                                        <svg width="33" height="8" viewBox="0 0 33 8" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.646446 3.64645C0.451183 3.84171 0.451183 4.15829 0.646446 4.35355L3.82843 7.53553C4.02369 7.7308 4.34027 7.7308 4.53553 7.53553C4.7308 7.34027 4.7308 7.02369 4.53553 6.82843L1.70711 4L4.53553 1.17157C4.7308 0.976311 4.7308 0.659728 4.53553 0.464466C4.34027 0.269204 4.02369 0.269204 3.82843 0.464466L0.646446 3.64645ZM33 3.5L1 3.5V4.5L33 4.5V3.5Z"
                                                  fill="white"/>
                                        </svg>
                                        <span>Назад</span>
                                    </a>
                                    <a href="#" class="mmenu__close" data-mmenu="close">
                                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M31.6663 10.6833L29.3163 8.33325L19.9997 17.6499L10.683 8.33325L8.33301 10.6833L17.6497 19.9999L8.33301 29.3166L10.683 31.6666L19.9997 22.3499L29.3163 31.6666L31.6663 29.3166L22.3497 19.9999L31.6663 10.6833Z"
                                                  fill="#8F99B5"/>
                                        </svg>
                                    </a>
                                </div>
                                <div class="mmenu__list">
                                    <div class="mmenu__item">
                                        <a href="/<?= $i["url"] ?>/" class="mmenu__link">
                                            <?= $i["title"] ?>
                                        </a>
                                    </div>
                                </div>
                                <div class="mmenu__sublist">
                                    <? foreach ($i["subnav"] as $j): ?>
                                        <a href="/<?= $i["url"] ?>/<?= $j["url"] ?>/" class="mmenu__subitem">
                                            <?= $j["title"] ?>
                                        </a>
                                    <? endforeach; ?>
                                </div>
                            </div>
                        </div>
                    <? endif; ?>
                </div>
            <? endforeach; ?>
        </div>
        <div class="mmenu__bottom">
            <div class="footer__city mmenu__city">
                <? component("select-city") ?>
            </div>
            <a href="<?= $GLOBALS["tel"]["href"] ?>"
               class="footer__tel mmenu__tel">
                <?= $GLOBALS["tel"]["value"] ?>
            </a>
            <div class="footer__addr mmenu__addr">
                <?= $GLOBALS["addrs"]["moscow"] ?>
            </div>
            <div class="footer__emails mmenu__emails">
                <div class="footer__email mmenu__email">
                    <p>По общим вопросам:</p>
                    <a href="mailto:<?= $GLOBALS["emails"]["info"] ?>">
                        <?= $GLOBALS["emails"]["info"] ?>
                    </a>
                </div>
                <div class="footer__email mmenu__email">
                    <p>Контроль качества:</p>
                    <a href="mailto:<?= $GLOBALS["emails"]["quality"] ?>"><?= $GLOBALS["emails"]["quality"] ?></a>
                </div>
            </div>
            <? component("btn", array(
                "class" => "btn-border btn-border--orange footer__btn mmenu__email",
                "text" => "Техподдержка 24/7",
                "href" => "/about/support/"
            )) ?>
        </div>
    </div>
</div>