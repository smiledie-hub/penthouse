import SimpleBar from "simplebar";

export default function PromptComponent() {
    const prompts = document.querySelectorAll('.prompt')
    prompts.forEach(el => {
        const input = el.querySelector('.prompt__input')
        const prompt = el.dataset.prompt

        if (prompt && input) {
            const data = prompt.split(',')

            if (data)
                new DropDownList({input: input, container: el, data});
        }
    })
}

class DropDownList {
    constructor({input, container, data}) {
        this.input = input;
        this.container = container;
        this.data = data;
        this.simplebar = null

        this.listElement = null;

        this._onElementInput = this._onElementInput.bind(this);
        this._onItemListClick = this._onItemListClick.bind(this);

        this.bind();
    }

    _onElementInput() {
        this.removeList();
        this.createList(this.data.filter(it => it.toLowerCase().indexOf(this.input.value.toLowerCase()) !== -1));
        this.appendList();
    }

    _onItemListClick({target}) {
        this.input.value = target.textContent;
        this.removeList();
    }

    createList(data) {
        this.listElement = document.createElement(`ul`);
        this.listElement.className = `prompt__list`;
        this.listElement.innerHTML = data.map(it => `<li class="prompt__item">${it}</li>`).join(``);

        [...this.listElement.querySelectorAll(`.prompt__item`)].forEach(it => it.addEventListener(`click`, this._onItemListClick));
    }

    appendList() {
        this.container.appendChild(this.listElement);
        this.simplebar = new SimpleBar(this.listElement);
    }

    removeList() {
        if (this.listElement) {
            this.listElement.remove();
            this.listElement = null;
            this.simplebar = null;
        }
    }

    bind() {
        this.input.addEventListener('input', this._onElementInput);
        this.input.addEventListener('focusin', (e) => {
            this.container.classList.add('prompt--focus')
            this._onElementInput(e)
        });
        this.input.addEventListener('focusout', () => {
            this.container.classList.remove('prompt--focus')
        });

        document.addEventListener('click', (e) => {
            const withinBoundaries = e.composedPath().includes(this.container);

            if (!withinBoundaries) {
                this.removeList()
            }
        })
    }
}