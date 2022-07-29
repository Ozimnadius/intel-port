

document.querySelectorAll('.select-city__item').forEach((i)=>{
    i.addEventListener('click', function (e){
        let $this = $(this);

        $this.addClass('selected');
        $(this).siblings().removeClass('selected');
    });
});
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

window.addEventListener('load', function (){
    $('.select').styler();
});
window.addEventListener('load', function (){
   let recs = new Swiper('.recs__swiper', {
      slidesPerView: "auto",
      spaceBetween: 35,
      centeredSlides: true,
      loop: true,
      navigation: {
         nextEl: '.recs__next',
         prevEl: '.recs__prev',
      },
   });
});
window.addEventListener('load', function (){
    new Swiper(".index-lics__swiper", {
        direction: "vertical",
        slidesPerView: "auto",
        centeredSlides: true,
        spaceBetween: -40,
        initialSlide: 1,
        navigation: {
            nextEl: '.index-lics__next',
            prevEl: '.index-lics__prev',
        },
    });
});
window.addEventListener('load', function () {
    new Swiper('.partners__swiper', {
        grabCursor: true,
        initialSlide: 1,
        centeredSlides: true,
        slidesPerView: 3,
        effect: 'coverflow',
        coverflowEffect: {
            rotate: 0,
            stretch: 100,
            // depth: 220,
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
        }
    });

    let $partners = $('.partners');


    if ($partners.length>0){
        let $contentBlock = $partners.find('.partners__desc'),
            contentHtml = $contentBlock.html(),
            $slides = $partners.find('.partner');

        $slides.hover(function (){
           $contentBlock.html($(this).find('template').html());
        }, function (){
            $contentBlock.html(contentHtml);
        });
    }
});
window.addEventListener('load', function () {
    let slider = document.querySelector('.slider'),
        imgMultiplier = 0.78,
        mapMultiplier = 0.28;

    if (slider) {
        let swiper = new Swiper('.slider__swiper', {
            slidesPerView: "auto",
            spaceBetween: 0,
            freeMode: true,
            grabCursor: true,
            slidesOffsetAfter: 200,
            on: {
                setTranslate: function (swiper, translate) {
                    slider.style.setProperty('--offset-img', `${translate * imgMultiplier}px`);
                    slider.style.setProperty('--offset-map', `${translate * mapMultiplier}px`);
                },
                setTransition: function (swiper, transition) {
                    slider.style.setProperty('--tr', `${transition}ms`);
                }
            },
        });
    }


});
window.addEventListener('load', function () {
    document.querySelectorAll('.brands__animate').forEach(function (i) {
        i.style.setProperty('--width', `${i.scrollWidth}px`);
    });
});
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
}