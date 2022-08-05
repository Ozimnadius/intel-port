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