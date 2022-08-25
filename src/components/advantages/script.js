/*ADVANTAGES*/
window.addEventListener('load', function (){
    if (window.matchMedia("(max-width: 1439.98px)").matches) {
        let flips = document.querySelectorAll('.advantage');
        flips.forEach(i => {
            i.addEventListener('click', function (e) {
                e.preventDefault();
                this.classList.toggle('flip');
            });
        });
    }
});