 var numero = 1
{
    var numero = 2
    console.log('dentro =', numero) // como esse bloco não faz parte de uma função ele irá sobreescrever a variavel numero
}
console.log('fora =', numero)