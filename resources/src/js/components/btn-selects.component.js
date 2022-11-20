export default function BtnSelectsComponent() {
    const items = document.querySelectorAll('.btn-selects')

    items.forEach(item => {
        const els = item.querySelectorAll('.btn-selects__item')

        item.addEventListener('mouseenter', (e) => {
            item.classList.add('btn-selects--hover')

            for(let i = 0; i < els.length; i++){
                setTimeout(function(){
                    els[i].classList.add('btn-selects__item--visible')
                },i * 100)
            }
        })
        item.addEventListener('mouseleave', (e) => {
            item.classList.remove('btn-selects--hover')

            let inx = 0
            for(let i = els.length; i > 0; i--){
                inx++;
                setTimeout(function(){
                    els[i-1].classList.remove('btn-selects__item--visible')
                },inx * 100)
            }
        })
    })
}