const escola = "Cod3r"
//o indice sempre começa pelo 0 no caso de Cod3r vai do indice zero ao quadro
console.log(escola.charAt(4)) // vai retornar a letra q esta no indice 4 dentro da string
console.log(escola.charAt(5)) //o indice 5 não existe em Cod3r então retorna vazio
console.log(escola.charCodeAt(3))// encontrar o valor dentro da tabela UniCode/ASC
console.log(escola.indexOf('3'))//buscar o valor do indice que está associado ao valor que voce estabeleceu

console.log(escola.substring(1)) //significa q ele vai a partir do indice 1 até o final
console.log(escola.substring(0, 3)) // aqui ele diz q vai do indice 0 até o indice 3, sem incluir o indice 3

console.log('Escola '.concat(escola).concat("!"))
console.log('Escola ' + escola + "!")
console.log(escola.replace(3, 'e')) // trocou o caracter 3 pelo E

console.log('Ana,Maria,Pedro'.split(',')) // converter essa String para um array dizendo que o separador é a vírgula