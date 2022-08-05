/*MISC*/
window.addEventListener('load', function (){

    if(window.matchMedia('(max-width: 1319.98px)').matches){
        return;
    }

    if(window.matchMedia('(max-width: 1919.98px)').matches){
        let wrap = document.querySelector('body'),
            offset = (window.innerWidth - 1280);

        wrap.style.setProperty('--negative-margin-right',`-${offset/2}px`);
        wrap.style.setProperty('--negative-margin-left',`-${offset/2}px`);
        wrap.style.setProperty('--margins',`${offset}px`);
    }
});