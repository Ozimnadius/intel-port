/*SELECT-CITY*/
window.addEventListener("load", function (){
   $('.select-city').on('click', function (e){
       $(this).toggleClass('active');
   });

   window.addEventListener('click', function (e){
       let target = e.target;

       if (!target.closest('.select-city')){
           document.querySelector('.select-city').classList.remove('active');
       }
   });
});