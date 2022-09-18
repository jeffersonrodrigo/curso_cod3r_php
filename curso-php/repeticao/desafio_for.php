<div class="titulo">Desafio For</div>
<!-- 
    Usar o for...
    #
    ##
    ###
    ####
    #####
    1)Pode usar incremento $i++
    2)Não pode usar incremento $i++
 -->
<?php
$impressao = '';
for($cont = 1; $cont <= 5; $cont++) {
    $impressao .= '#'; // ao colocar espaço entre o ponto e igual dá erro nao sei porque
    echo "$impressao <br>";
};

echo '<hr>';

for(
    $impressao2 = '#';
    $impressao2 !== '######';
    $impressao2 .='#') {
        echo "$impressao2<br>";
    }