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