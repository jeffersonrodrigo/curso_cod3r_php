// Funcao sem retorno
function imprimirSoma(a, b) { //como os parametros nao precisam ser definidos, porem ser numeros inteiros, floats, strings e ele vai fazer a operação de acordo com o caso
    console.log(a + b)
}

imprimirSoma(2, 3) //
imprimirSoma(2) // se nao defenir o segundo parametro ele vai tratar como Undefined e vai retornar um Not a Number
imprimirSoma(2, 10, 4, 5, 6, 7, 8) // No caso vai usar apenas os dois primeiros parametros e ignorar o resto
imprimirSoma() // nao vai reclamar porém vai retornar com NaN

// Funcao com retorno
function soma(a, b = 1) {
    return a + b // aqui está retornando o valor em resposta a chamada dessa função
}

console.log(soma(2, 3))// por isso para imprimir a resposta tem q chamar a função soma no console
console.log(soma(2))
console.log(soma())