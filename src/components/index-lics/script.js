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