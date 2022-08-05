/*RECS*/
window.addEventListener('load', function (){
   let recs = new Swiper('.recs__swiper', {
      slidesPerView: "auto",
      spaceBetween: 10,
      centeredSlides: false,
      loop: true,
      navigation: {
         nextEl: '.recs__next',
         prevEl: '.recs__prev',
      },
      breakpoints: {
         // when window width is >= 768px
         768: {
            centeredSlides: true,
            spaceBetween: 20,
         },
         // when window width is >= 1440px
         1440: {
            centeredSlides: true,
            spaceBetween: 35,
         }
      }
   });
});