let numero = 1
{
    let numero = 2 // let tem escopo apenas dentro do bloco
    console.log('dentro =', numero)
}
console.log('fora =', numero)