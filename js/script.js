

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