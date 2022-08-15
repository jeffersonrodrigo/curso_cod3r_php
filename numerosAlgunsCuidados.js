console.log(7 / 0) // retorna um tipo chamado "Infinito" enquanto em outras linguagens esse tipo de calculo geraria um erro
console.log("10" / 2) // em outras linguagens isso não daria certo pois o 10 entre aspas é considerado uma string(palavra) mas o JS consegue interpretar isso
console.log('3' + 2) // string ganha!
console.log('3' - 2)
console.log("Show!" * 2) // em algumas linguagens pode resultar em repetir 2 vezes a string, mas no caso do JS resulta em NaN
console.log(0.1 + 0.7) // nao resulta em 0.8 por conta da especificação  do tipo de operação de ponto flutuante que o JS suporta
// console.log(10.toString())
console.log((10.345).toFixed(2))