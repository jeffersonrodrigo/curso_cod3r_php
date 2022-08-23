const a = 7 // o = não esta num contexto de comparação mas de atribuir o valor 7 a variável a
let b = 3

b += a // b = b + a // atribuição aditiva
console.log(b) 

b -= 4 // b = b - 4 // atribuição subtrativa
console.log(b)

b *= 2 // b = b * 2
console.log(b) // atribuição multiplicativa

b /= 2 // b = b / 2 // atribuição divisiva
console.log(b)

b %= 2 // b = b % 2 // atribuição modular
console.log(b)