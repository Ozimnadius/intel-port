/*SLIDER*/
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

        if(window.matchMedia('(max-width: 1919.98px)').matches){
            let wrap = document.querySelector('.slider__wrap'),
                marginRight = (window.innerWidth - wrap.offsetWidth)/2;

            wrap.style.setProperty('--margin-right',`-${marginRight}px`);
        }
    }


});