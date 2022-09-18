<div class="titulo">Desafio Sorteio</div>

<?php
$nomes = ["Elza", "Rapunzel", "Branca de Neve", "Cinderela"];
$sorteada = array_rand($nomes);
echo "<h1>A personagem da vez é: $nomes[$sorteada] </h1>";