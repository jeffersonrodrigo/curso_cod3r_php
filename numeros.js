const peso1 = 1.0
const peso2 = Number('2.0') // apenas uma outra forma de inserir um numero na constante

console.log(peso1, peso2)
console.log(Number.isInteger(peso1)) // forma para saber se é um numero inteiro ou nao
console.log(Number.isInteger(peso2))

const avaliacao1 = 9.871
const avaliacao2 = 6.871

const total = avaliacao1 * peso1 + avaliacao2 * peso2
const media = total / (peso1 + peso2)

console.log(media.toFixed(2)) // definir numero de casas decimais
console.log(media.toString(2)) // em binário
console.log(typeof media)
console.log(typeof Number)