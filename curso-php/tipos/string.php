<div class="titulo">Tipo String</div>

<?php
echo 'Eu sou uma string';
echo '<br>';
var_dump("Eu também");
echo '<br>';

// Concatenação
echo "Nós também" . ' somos';
echo '<br>', "Também aceito", " vírgulas";

echo '<br>';
print "<br>Também eciste a função Print.";
print ("<br>Também eciste a função Print.");

// Algumas funções
echo '<br>' . strtoupper('maximizado');
echo '<br>' . strtolower('MINIMIZADO');
echo '<br>' . ucfirst('só a primeira letra.');
echo '<br>' . ucwords('todas as palavras'); // A primeira letra de cada palavra
echo '<br>' . strlen('Quantas letras?');
echo '<br>' . strlen('Eu também'); // Nesse caso irá contar 1 a mais pois o php nao se dá muito bem com acentos
echo '<br>' . mb_strlen('Eu também'); // Assim ele irá entender o acento e irá contar corretamente
echo '<br>' . substr('Só uma parte mesmo', 7, 6); // Irá contar a partir do indice 7 seis caracteres sem contar o sexto (no exemplo)
echo '<br>' . str_replace('isso', 'aquilo', 'Trocar isso'); // 1° parametro é a palavra a se procurar 2° parametro pelo qual irá trocar 3° a sentença onde vai procurar // vai trocar mesmo q seja parte de outra palavra
