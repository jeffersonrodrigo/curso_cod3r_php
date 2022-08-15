const nome = 'Rebeca'
const concatenacao = 'Olá ' + nome + '!'
//no exmplo abaixo usando o simbolo da crase
const template = ` 
    Olá
    ${nome}!`
console.log(concatenacao, template)

// expressoes...
console.log(`1 + 1 = ${1 + 1}`) // O que voce colocar entre chaves é o q ele ai tentar interpolar/interpretar

const up = texto => texto.toUpperCase()
console.log(`Ei... ${up('cuidado')}!`)