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