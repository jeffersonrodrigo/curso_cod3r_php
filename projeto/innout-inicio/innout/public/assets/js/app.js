(function() {
    const menuToggle = document.querySelector('.menu-toggle') // seleciona a requisição no documento (No caso a classe .menu-toggle) e joga para a contante menuToggle
    menuToggle.onclick = function (e) { // ao clicar em cima dessa constante vai ativar a função
        const body = document.querySelector('body') // selecionar a requisição no documento (no caso a tag body)
        body.classList.toggle('hide-sidebar') // classList é um atributo DOM que pega a classe (no caso associada ao body) e toggle é uma função DOM que alterna entre adicionar e remover algo no elemento(no caso a classe que vai definir o abre e fecha)    
    }
}) ()