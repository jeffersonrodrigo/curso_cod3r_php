
(function() {
    const menuToggle = document.querySelector('.menu-toggle') // seleciona a requisição no documento (No caso a classe .menu-toggle) e joga para a contante menuToggle
    menuToggle.onclick = function (e) { // ao clicar em cima dessa constante vai ativar a função
        const body = document.querySelector('body') // selecionar a requisição no documento (no caso a tag body)
        body.classList.toggle('hide-sidebar') // classList é um atributo DOM que pega a classe (no caso associada ao body) e toggle é uma função DOM que alterna entre adicionar e remover algo no elemento(no caso a classe que vai definir o abre e fecha)    
    }
})()

function activateClock() {
    const activeClock = document.querySelector('[active-clock]')
    if(!activeClock) return

function addOneSecond(hours, minutes, seconds) {
    const d = new Date()
    d.setHours(parseInt(hours))
    d.setMinutes(parseInt(minutes))
    d.setSeconds(parseInt(seconds) + 1)

        const h = `${d.getHours()}`.padStart(2, 0)
        const m = `${d.getMinutes()}`.padStart(2, 0)
        const s = `${d.getSeconds()}`.padStart(2, 0)

    return `${h}:${m}:${s}`
}

    setInterval(function() {
        // '07:27:19' => ['07', '27', '19']
        const parts = activeClock.innerHTML.split(':')
        //activeClock.innerHTML = addOneSecond(parts[0], parts[1], parts[2]) #as duas formas são válidas
        activeClock.innerHTML = addOneSecond(...parts)
    }, 1000)
}

activateClock()