import {ScrollbarPlugin} from 'smooth-scrollbar';

export default class AppScroll extends ScrollbarPlugin {
    static pluginName = 'appScroll';

    elBlock = document.querySelector('.front-residence')
    itemsEl = this.elBlock.querySelectorAll('[data-index]')
    itemsCounter = this.elBlock.dataset.indexes || 0
    currentIndex = 0
    isBlock = false
    isChange = false

    transformDelta(delta, fromEvent) {
        if (delta.y >= 0) {
            this.down(delta, fromEvent)
        } else {
            this.up(delta, fromEvent)
        }

        if (this.isBlock) {
            this.scrollbar.scrollIntoView(this.elBlock);
        }

        return this.isBlock ? {x: 0, y: 0} : delta;
    }

    onInit() {
        this.setItems()
    }

    up(delta, fromEvent) {
        if (!this.isBlock) {
            let containderRectTop = this.elBlock.getBoundingClientRect().top
            if (Math.round(containderRectTop) < 101 && Math.round(containderRectTop) > -101) {
                this.isBlock = true
            }
        }

        if (this.isBlock  && !this.isChange) {
            if(this.currentIndex > 0) {
                this.isChange = true

                setTimeout(() => {
                    this.currentIndex--;
                    this.setItems()
                    this.isChange = false
                }, 1000)
            } else {
                this.isBlock = false
                this.isFirst = true
                this.isLast = false
            }
        }
    }

    down(delta, fromEvent) {
        if (!this.isBlock) {
            let containderRectTop = this.elBlock.getBoundingClientRect().top
            if (Math.round(containderRectTop) < 101 && Math.round(containderRectTop) > -101) {
                this.isBlock = true
            }
        }

        if (this.isBlock  && !this.isChange) {
            if (this.currentIndex < this.itemsCounter) {
                this.isChange = true

                setTimeout(() => {
                    this.currentIndex++;
                    this.setItems()
                    this.isChange = false
                }, 1000)
            } else {
                this.isBlock = false
                this.isFirst = false
                this.isLast = true
            }
        }
    }

    setItems() {
        this.itemsEl.forEach(item => {
            item.classList.remove('prev')
            item.classList.remove('active')
        })

        this.itemsEl.forEach(item => {
            if ((item.dataset.index && parseInt(item.dataset.index) === this.currentIndex)) {
                item.classList.add('active')
                item.previousElementSibling && item.previousElementSibling.classList.add('prev')
            }
        })
    }
}