/*FOOTER-NAV*/
window.addEventListener('load', function () {
    if (window.matchMedia('(max-width: 767.98px)').matches) {
        $('.footer-nav__title').on('click', function (e) {
            e.preventDefault();
            let $this = $(this);

            $this.toggleClass('active');
            $this.next().slideToggle();
        });
    }
});