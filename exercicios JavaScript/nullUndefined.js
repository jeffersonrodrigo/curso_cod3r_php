let valor // não inicializada
console.log(valor) // nao definimos a variavel entao undefined

valor = null // ausência de valor
console.log(valor) // valor aqui é nulo
// console.log(valor.toString()) // Erro!

const produto = {} // criando um objeto vazio (lembre-se que par de chaves cria objetos!!!)
console.log(produto.preco)
console.log(produto)

produto.preco = 3.50
console.log(produto)

produto.preco = undefined // evite atribuir undefined
console.log(!!produto.preco)
// delete produto.preco
console.log(produto)

produto.preco = null // sem preço
console.log(!!produto.preco)
console.log(produto)