<div class="titulo">Desafio Operadores Lógicos</div>

<!-- 
    Dois trabalhos:
    - Se os dois derem certo -> TV 50' e sorvete
    - Se apenas um der certo -> TV 32' e sorvete
    - Se nenhum der certo -> fica em casa mais saudável
 -->

 <form action="#" method="post">
    <div>
        <label for="t1">Trabalho 1:</label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho 2:</label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <button>Executar</button>
 </form>

 <style>
    button, select {
        font-size: 1.8rem;
    }
 </style>

 <?php
//  var_dump(!!$_POST['t1']);
//  var_dump(!!$_POST['t2']);
echo '<br>';
echo '<br>';
echo '<br>';
 if($_POST['t1'] == 1 && $_POST['t2'] == 1) {
    echo "Compram TV 50' e tomam sorvete";
} else if ($_POST['t1'] == 1 || $_POST['t2'] == 1) {    
    echo "Compram TV 32' e tomam sorvete";
 } else
    echo "Ficam em casa mais saudável";
?>