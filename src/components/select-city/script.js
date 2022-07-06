document.querySelectorAll('.select-city__item').forEach((i)=>{
    i.addEventListener('click', function (e){
        let $this = $(this);

        $this.addClass('selected');
        $(this).siblings().removeClass('selected');
    });
});