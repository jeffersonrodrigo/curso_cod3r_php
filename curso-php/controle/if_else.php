<div class="titulo">If Else</div>

<?php
if(true)//a expressão OBRIGATORIAMENTE precisa resolver para verdadeiro ou falso a PRÓXIMA COISA A APARECER
echo "serei impresso?<br>"; //nesse caso está imprimindo essa linha por ser apróxima após o if e ele ser verdadeiro
echo "serei impresso novamente?<br>"; // aqui está imprimindo apenas pq o php leu o echo normalmente

if(false)
echo "serei impresso?<br>";// nesse caso não será impresso por ser a próxima linha após o if e ele ser falso
echo "serei impresso novamente?<br>";// como ele não é a proxima linha após o if false ele irá executar normalmente

if(false) {
    echo "serei impresso?<br>";
    echo "serei impresso novamente?<br>";
} // nesse caso nao irá imprimir nenhum dos dois pois a próxima sentença após o if é o Bloco por inteiro

if(true) {
    echo "serei impresso?<br>";
    echo "serei impresso novamente?<br>";
}

if(false) {
    echo "Verdadeiro - Parte A<br>";
    echo "Verdadeiro - Parte B<br>";
} else {
    echo "Falso - Parte A<br>";
    echo "Falso - Parte B<br>";
}

if(false) {
    echo "Passo A<br>";
} else if(false) {
    echo "Passo B<br>";
} elseif(false) {
    echo "Passo C<br>";
} elseif(false) {
    echo "Passo D<br>";
} elseif(false) {
    echo "Passo E<br>";
} else {
    echo "Úlitmo Passo<br>";
}

echo "Fim<br>";