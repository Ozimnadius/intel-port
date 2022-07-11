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