/*OAI-ALGOS*/
window.addEventListener('load', function () {
    new Lines('.oai-algos__grid');
});

class Lines {
    constructor(selector) {
        this.lines = document.querySelector(selector);

        if (!this.lines) {
            return;
        }

        this.list = this.lines.querySelector('.oai-algos__list');
        this.quote = this.lines.querySelector('.oai-algos__quote');
        this.items = this.lines.querySelectorAll('.oai-algos__item');
        this.x = 0;
        this.y = 0;

        this.init();
        // console.log(this);
    }

    init() {

        if (window.matchMedia('(max-width: 767.98px)').matches) {
            this.setLineHeight();
            return;
        }

        this.addLines();
        this.setQuotePosition();
    }

    get coordinates() {
        let map = new Map(),
            x = 0,
            y = 0;

        this.items.forEach((i) => {
            let width = i.offsetWidth,
                height = i.offsetHeight;


            if (i.offsetLeft == 0) {
                y = i.offsetTop + height;
            }
            x = i.offsetLeft + width;

            this.x = x;
            this.y = y;

            // console.log(`x: ${this.x}; y: ${this.y}`);
            map.set(y, x);


        });

        return map;
    }

    setQuotePosition() {
        if (this.x < this.list.offsetWidth) {
            this.quote.style.left = `${this.x + 30}px`;
        } else {
            this.quote.style.left = `${(this.list.offsetWidth / 2) - (this.quote.offsetWidth / 2)}px`;
            this.list.style.paddingBottom = `${this.quote.offsetHeight + 45}px`;
        }
    }

    addLines() {
        this.coordinates.forEach((x, y) => {
            // console.log(`x: ${x}; y: ${y}`);
            this.addLine(x, y);
        });
    }

    addLine(x, y) {
        let line = `<div class="oai-algos__line" style="top: ${y}px;width: ${x}px;"></div>`;
        this.list.insertAdjacentHTML('beforeend', line);
    }

    setLineHeight() {
        let firstItem = this.items[0],
            lastItem = this.items[this.items.length - 1];

        this.list.style.setProperty('--line-position-top', `${firstItem.offsetHeight / 2}px`);
        this.list.style.setProperty('--line-position-bottom', `${lastItem.offsetHeight / 2}px`);
    }


}