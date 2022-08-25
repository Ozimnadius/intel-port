

/*EVENTS*/
window.addEventListener('load', function () {

    new Events();
});

class Events {
    constructor() {
        this.templates = new Templates();

        this.copyElems = document.querySelectorAll('[data-event="copy"]');

        this.openFormElems = document.querySelectorAll('[data-event="openForm"]');

        this.openAjaxFormElems = document.querySelectorAll(`[data-event="openAjaxForm"]`);

        this.validateElems = document.querySelectorAll('[data-event="validate"]');

        this.init();
    }

    init() {
        this.copyElems.forEach((i) => {
            i.addEventListener('click', this.copy);
        });

        this.openFormElems.forEach((i) => {
            i.addEventListener('click', this.openForm.bind(this));
        });

        this.openAjaxFormElems.forEach((i) => {
            i.addEventListener('click', this.openAjaxForm.bind(this));
        });

        this.validateElems.forEach((i) => {
            i.addEventListener('submit', this.validate.bind(this));
        });

        window.addEventListener('click', (e) => {
            let target = e.target;

            if (target.closest('[data-event="closeForm"]')) {
                e.preventDefault();
                this.templates.close();
            }
        });

    }

    copy() {
        const str = document.querySelector(this.dataset.target).innerText;
        const el = document.createElement('textarea');
        el.value = str;
        el.setAttribute('readonly', '');
        el.style.position = 'absolute';
        el.style.left = '-9999px';
        document.body.appendChild(el);
        el.select();
        document.execCommand('copy');
        document.body.removeChild(el);
        alert('Скопировано');
    }

    openForm(e) {
        e.preventDefault();
        let dataset = e.currentTarget.dataset
        this.templates.open(dataset.name);

        $('.select').styler();
        $('.input[type="tel"]').inputmask("+7(999)999-99-99");

        this.templates.current.validate(
            {
                submitHandler: (form) => {
                    let data = $(form).serialize();

                    $.ajax({
                        dataType: "json",
                        type: "POST",
                        url: form.action,
                        data: data,
                        success: (result) => {
                            if (result.status) {
                                this.templates.close();
                                this.templates.open("formOk");
                            } else {
                                alert('Что-то пошло не так, попробуйте еще раз!!!');
                            }
                        },
                        error: function (result) {
                            alert('Что-то пошло не так, попробуйте еще раз!!!');
                        }
                    });
                },
                invalidHandler: function (event, validator) {
                    // debugger;
                },
                errorPlacement: function (error, element) {
                    element[0].placeholder = error[0].innerText;
                }
            }
        );
    }

    openAjaxForm(e) {
        e.preventDefault();

        let dataset = e.currentTarget.dataset;

        $.ajax({
            dataType: "json",
            type: "POST",
            url: dataset.url,
            data: {
                id: dataset.id
            },
            success: (result) => {
                if (result.status) {
                    this.templates.close();
                    $.fancybox.open(result.html);
                } else {
                    alert('Что-то пошло не так, попробуйте еще раз!!!');
                }
            },
            error: function (result) {
                alert('Что-то пошло не так, попробуйте еще раз!!!');
            }
        });
    }

    validate(e) {
        e.preventDefault();
        let form = e.target;

        $(form).validate(
            {
                submitHandler: (form) => {
                    let data = $(form).serialize();

                    $.ajax({
                        dataType: "json",
                        type: "POST",
                        url: form.action,
                        data: data,
                        success: (result) => {
                            if (result.status) {
                                this.templates.open("formOk");
                            } else {
                                alert('Что-то пошло не так, попробуйте еще раз!!!');
                            }
                        },
                        error: function (result) {
                            alert('Что-то пошло не так, попробуйте еще раз!!!');
                        }
                    });
                },
                invalidHandler: function (event, validator) {
                    // debugger;
                },
                errorPlacement: function (error, element) {
                    element[0].placeholder = error[0].innerText;
                }
            }
        );
    }
}
class Templates {
    constructor() {
        this.content = document.querySelector('#templates').content;
    }

    html(name) {
        return this.content.querySelector(`#${name}`).innerHTML;
    }

    close() {
        $.fancybox.close();
    }

    open(name, opt = {}) {
        $.fancybox.open(this.html(name), opt);
    }

    get current() {
        return $.fancybox.getInstance().current.$content;
    }
}

const templates = new Templates();
/*SELECT-CITY*/
window.addEventListener("load", function (){
   $('.select-city').on('click', function (e){
       $(this).toggleClass('active');
   });

   window.addEventListener('click', function (e){
       let target = e.target;

       if (!target.closest('.select-city')){
           document.querySelector('.select-city').classList.remove('active');
       }
   });
});
/*INDEX-SERVS*/
window.addEventListener('load', function () {

    let $main = $('.index-servs'),
        $btns = $main.find('[data-tabs="btn"]'),
        $tabs = $main.find('[data-tabs="tab"]');

    $btns.on('click', function () {
        let $this = $(this),
            index = $btns.index(this);
        $btns.removeClass('active');
        $this.addClass('active');
        $tabs.removeClass('active');
        $tabs.eq(index).addClass('active');
    });
});

/*SELECT*/
window.addEventListener('load', function (){
    $('.select').styler();
});
/*RECS*/
window.addEventListener('load', function (){
   let recs = new Swiper('.recs__swiper', {
      slidesPerView: "auto",
      spaceBetween: 10,
      centeredSlides: false,
      loop: true,
      navigation: {
         nextEl: '.recs__next',
         prevEl: '.recs__prev',
      },
      breakpoints: {
         // when window width is >= 768px
         768: {
            centeredSlides: true,
            spaceBetween: 20,
         },
         // when window width is >= 1440px
         1440: {
            centeredSlides: true,
            spaceBetween: 35,
         }
      }
   });
});
/*INDEX-LICS*/
window.addEventListener('load', function (){
    new Swiper(".index-lics__swiper", {
        direction: "horizontal",
        slidesPerView: "auto",
        centeredSlides: false,
        spaceBetween: 10,
        initialSlide: 0,
        navigation: {
            nextEl: '.index-lics__next',
            prevEl: '.index-lics__prev',
        },
        breakpoints: {
            768: {
                direction: "vertical",
                slidesPerView: "auto",
                centeredSlides: true,
                initialSlide: 1,
                spaceBetween: -20
            },
            1440: {
                direction: "vertical",
                slidesPerView: "auto",
                centeredSlides: true,
                initialSlide: 1,
                spaceBetween: -40
            }
        }
    });
});
/*PARTNERS*/
window.addEventListener('load', function () {


    let $partners = $('.partners');

    if ($partners.length > 0) {

        let $contentBlock = $partners.find('.partners__desc'),
            contentHtml = $contentBlock.html(),
            $slides = $partners.find('.partner');

        if (window.matchMedia('(max-width: 767.98px)').matches) {
            new Swiper('.partners__swiper-mobile', {
                grabCursor: true,
                initialSlide: 1,
                centeredSlides: true,
                slidesPerView: "auto",
                spaceBetween: 15,
                navigation: {
                    nextEl: '.partners__next',
                    prevEl: '.partners__prev',
                },
                on: {
                    slideChange: function () {
                        let slide = this.slides[this.activeIndex];
                        $contentBlock.html($(slide).find('template').html());
                    }
                }
            });


        } else {
            new Swiper('.partners__swiper', {
                grabCursor: true,
                initialSlide: 1,
                centeredSlides: true,
                slidesPerView: "auto",
                effect: 'coverflow',
                coverflowEffect: {
                    rotate: 0,
                    stretch: 100,
                    depth: 100,
                    scale: 0.85,
                    modifier: 1,
                    slideShadows: false
                },
                navigation: {
                    nextEl: '.partners__next',
                    prevEl: '.partners__prev',
                },
                pagination: {
                    el: '.partners__pag',
                },
                breakpoints: {
                    1440: {
                        coverflowEffect: {
                            depth: 100,
                        },
                    },
                    1920: {
                        coverflowEffect: {
                            depth: 100,
                        }
                    }
                }
            });

            $slides.hover(function () {
                $contentBlock.html($(this).find('template').html());
            }, function () {
                $contentBlock.html(contentHtml);
            });
        }


    }
});
/*SLIDER*/
window.addEventListener('load', function () {
    let slider = document.querySelector('.slider__wrap');



    if (slider) {
        gsap.to('.slide__img', {
            y: 200,
            ease: "none",
            scrollTrigger: {
                trigger: ".slider__wrap",
                scrub: true,
                start: "top 20%",
                end: "bottom center",
                // markers: true,
            }
        });

        gsap.to('.slider__map', {
            y: slider.offsetHeight/2,
            ease: "none",
            scrollTrigger: {
                trigger: ".slider__wrap",
                scrub: true,
                start: "top 20%",
                end: "bottom center",
                // markers: true,
            }
        });
    }

});
/*BRANDS*/
window.addEventListener('load', function () {
    document.querySelectorAll('.brands__animate').forEach(function (i) {
        i.style.setProperty('--width', `${i.scrollWidth}px`);
    });
});
/*OAI-ALGOS*/
window.addEventListener('load', function () {
    new Lines('.oai-algos__grid');
});

class Lines {
    constructor(selector) {
        this.lines = document.querySelector(selector);

        if (!this.lines) {
            return;
        }

        this.list = this.lines.querySelector('.oai-algos__list');
        this.quote = this.lines.querySelector('.oai-algos__quote');
        this.items = this.lines.querySelectorAll('.oai-algos__item');
        this.x = 0;
        this.y = 0;

        this.init();
        // console.log(this);
    }

    init() {

        if (window.matchMedia('(max-width: 767.98px)').matches) {
            this.setLineHeight();
            return;
        }

        this.addLines();
        this.setQuotePosition();
    }

    get coordinates() {
        let map = new Map(),
            x = 0,
            y = 0;

        this.items.forEach((i) => {
            let width = i.offsetWidth,
                height = i.offsetHeight;


            if (i.offsetLeft == 0) {
                y = i.offsetTop + height;
            }
            x = i.offsetLeft + width;

            this.x = x;
            this.y = y;

            // console.log(`x: ${this.x}; y: ${this.y}`);
            map.set(y, x);


        });

        return map;
    }

    setQuotePosition() {
        if (this.x < this.list.offsetWidth) {
            this.quote.style.left = `${this.x + 30}px`;
        } else {
            this.quote.style.left = `${(this.list.offsetWidth / 2) - (this.quote.offsetWidth / 2)}px`;
            this.list.style.paddingBottom = `${this.quote.offsetHeight + 45}px`;
        }
    }

    addLines() {
        this.coordinates.forEach((x, y) => {
            // console.log(`x: ${x}; y: ${y}`);
            this.addLine(x, y);
        });
    }

    addLine(x, y) {
        let line = `<div class="oai-algos__line" style="top: ${y}px;width: ${x}px;"></div>`;
        this.list.insertAdjacentHTML('beforeend', line);
    }

    setLineHeight() {
        let firstItem = this.items[0],
            lastItem = this.items[this.items.length - 1];

        this.list.style.setProperty('--line-position-top', `${firstItem.offsetHeight / 2}px`);
        this.list.style.setProperty('--line-position-bottom', `${lastItem.offsetHeight / 2}px`);
    }


}
/*MMENU*/
window.addEventListener('load', function (){
    new Mmenu();
});

class Mmenu {

    constructor(obj) {
        let def = {
            menu: '.mmenu',
            menuItem: '[data-mmenu="item"]',
            menuOpen: '[data-mmenu="open"]',
            menuClose: '[data-mmenu="close"]',
            submenu: '[data-mmenu="submenu"]',
            submenuOpen: '[data-mmenu="openSubmenu"]',
            submenuClose: '[data-mmenu="closeSubmenu"]'
        };

        let settings = Object.assign(def, obj);

        this.menu = document.querySelector(settings.menu);
        this.menuOpen = document.querySelectorAll(settings.menuOpen);
        this.menuClose = document.querySelectorAll(settings.menuClose);
        this.submenus = this.menu.querySelectorAll(settings.submenu);
        this.submenuOpen = this.menu.querySelectorAll(settings.submenuOpen);
        this.submenuClose = this.menu.querySelectorAll(settings.submenuClose);

        for (let i = 0; i < this.menuOpen.length; i++) {
            this.menuOpen[i].addEventListener('click', () => {
                this.open()
            });
        }
        for (let i = 0; i < this.menuClose.length; i++) {
            this.menuClose[i].addEventListener('click', () => {
                this.close()
            });
        }

        for (let i = 0; i < this.submenuOpen.length; i++) {
            let btn = this.submenuOpen[i];
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                e.stopPropagation();
                let item = e.currentTarget.closest(settings.menuItem),
                    submenu = item.querySelector(settings.submenu);
                this.openSubmenu(submenu)
            });
        }
        for (let i = 0; i < this.submenuClose.length; i++) {
            let btn = this.submenuClose[i];
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                e.stopPropagation();
                let submenu = e.currentTarget.closest(settings.submenu);
                this.closeSubmenu(submenu)
            });
        }

        document.addEventListener('click', (e) => {
            let target = e.target;

            if (!target.closest(settings.menu) && !target.closest(settings.menuOpen)) {
                this.close();
            }

        });
    }

    open() {
        this.menu.classList.add('active');
        document.querySelector('body').classList.add('ovh');
    }

    close() {
        this.menu.classList.remove('active');
        document.querySelector('body').classList.remove('ovh');

        for (let i = 0; i < this.submenus.length; i++) {
            this.closeSubmenu(this.submenus[i]);
        }
    }

    openSubmenu(submenu) {
        submenu.classList.add('active');
    }

    closeSubmenu(submenu) {
        submenu.classList.remove('active');
    }

}
/*FOOTER-NAV*/
window.addEventListener('load', function () {
    if (window.matchMedia('(max-width: 767.98px)').matches) {
        $('.footer-nav__title').on('click', function (e) {
            e.preventDefault();
            let $this = $(this);

            $this.toggleClass('active');
            $this.next().slideToggle();
        });
    }
});
/*MISC*/
window.addEventListener('load', function (){

    if(window.matchMedia('(max-width: 1319.98px)').matches){
        return;
    }

    if(window.matchMedia('(max-width: 1919.98px)').matches){
        let wrap = document.querySelector('body'),
            offset = (window.innerWidth - 1280);

        wrap.style.setProperty('--negative-margin-right',`-${offset/2}px`);
        wrap.style.setProperty('--negative-margin-left',`-${offset/2}px`);
        wrap.style.setProperty('--margins',`${offset}px`);
    }
});
/*FEED*/
window.addEventListener('load', function () {
    $('.input[type="tel"]').inputmask("+7(999)999-99-99");
});
/*ADVANTAGES*/
window.addEventListener('load', function (){
    if (window.matchMedia("(max-width: 1439.98px)").matches) {
        let flips = document.querySelectorAll('.advantage');
        flips.forEach(i => {
            i.addEventListener('click', function (e) {
                e.preventDefault();
                this.classList.toggle('flip');
            });
        });
    }
});