let isAtivo = false
console.log(isAtivo)

isAtivo = true
console.log(isAtivo)

isAtivo = 1
console.log(!!isAtivo) /*para transformar um valor em um valor de verdadeiro ou falso voce pode usar a negação que é a exclamação, ela significa "not" é uma negação lógica, 
se voce tem um valor verdadeiro e voce coloca uma nagação na frente aquele valor vira um valor não verdadeiro ou seja, vira um valor falso. 
Se você coloca duas negações significa que voce volta ao valor original*/

console.log('os verdadeiros...') /**Situações em que não estou trabalhando com tipode de verdadeiro ou falo mas que se comportarão como verdadeiros */
console.log(!!3)
console.log(!!-1)
console.log(!!' ') // espaço vazio
console.log(!!'texto')
console.log(!![])
console.log(!!{})
console.log(!!Infinity)
console.log(!!(isAtivo = true))

console.log('os falsos...')
console.log(!!0)
console.log(!!'') //sem espaço
console.log(!!null)
console.log(!!NaN)
console.log(!!undefined)
console.log(!!(isAtivo = false))

console.log('pra finalizar...')
console.log(!!('' || null || 0 || ' '))//aqui apenas 1 dos valores tem q ser verdadeiro

let nome = 'Lucas'
console.log(nome || 'Desconhecido')