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