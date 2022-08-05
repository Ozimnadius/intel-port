/*BRANDS*/
window.addEventListener('load', function () {
    document.querySelectorAll('.brands__animate').forEach(function (i) {
        i.style.setProperty('--width', `${i.scrollWidth}px`);
    });
});