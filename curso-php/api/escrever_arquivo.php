<div class="titulo">Escrever Arquivo</div>

<?php
$arquivo = fopen('teste.txt', 'w'); // chamar o arquivo no modo write faz com que o arquivo esteja pronto para nova escrita e se já houver algum valor anterior ele vai sobreescrever
fwrite($arquivo, "Valor inicial\n");
$str = "Segunda linha\n";
fwrite($arquivo, $str);
fclose($arquivo);

$arquivo = fopen('teste.txt', 'w');
fwrite($arquivo, "Novo conteúdo");
fclose($arquivo);

$arquivo = fopen('teste.txt', 'a'); // o 'a' é o modo apende e vai adicionar novo conteudo
fwrite($arquivo, " com novos valores\n");
fwrite($arquivo, "Adicionados em um segundo momento\n");
fclose($arquivo);

ini_set('display_errors', 1);
$arquivo = fopen('teste.txt', 'x'); // só escreve se for um arquivo novo, evita perigo de sobreescrever arquivo