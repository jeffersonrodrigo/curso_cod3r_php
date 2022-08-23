for (var i = 0; i < 10; i++) {
    console.log(i)
}

console.log('i =', i)// var é de escopo global logo mesmo o console estando fora do bloco conseguira achar

for (let j = 0; j < 10; j++) {
    console.log(j)
}

console.log('j =', j) // let é de escopo de bloco, como o console esta fora do bloco nao consegue localizar ele