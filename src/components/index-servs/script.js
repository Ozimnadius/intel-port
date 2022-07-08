window.addEventListener('load', function () {

    let $main = $('.index-servs'),
        $btns = $main.find('[data-tabs="btn"]'),
        $tabs = $main.find('[data-tabs="tab"]');

    $btns.on('click', function () {
        let $this = $(this),
            index = $btns.index(this);
        $btns.removeClass('active');
        $this.addClass('active');
        $tabs.removeClass('active');
        $tabs.eq(index).addClass('active');
    });
});
