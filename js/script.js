

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
window.addEventListener('load', function (){

});
window.addEventListener('load', function () {
    document.querySelectorAll('.brands__animate').forEach(function (i) {
        i.style.setProperty('--width', `${i.scrollWidth}px`);
    });
});