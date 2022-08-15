const valores = [7.7, 8.9, 6.3, 9.2] //Para criar o array é só usar colchetes e separar os elementos através de vírgula
console.log(valores[0], valores[3])
console.log(valores[4])

valores[4] = 10 //adicionando elementos no array
console.log(valores)
console.log(valores.length) // variavel length vai dizer quantos elementos tem no array

valores.push({id: 3}, false, null, 'teste') //push também adiciona elementos ao array
console.log(valores)

console.log(valores.pop())//vai retirar/deletar o último valor do array
delete valores[0]//vai deletar o indice zero
console.log(valores)

console.log(typeof valores)//em JavaScript o array é do tipo Object