<?php // nesse arquivo estará as lógicas para imprimir as mensagens

$errors = [];

if($exception) { // se chegar nesse arquivo uma exceção vamos querer gerar uma mensagem q será um array associativo
    $message = [
        'type' => 'error', // definindo o tipo da exceção
        'message' => $exception->getMessage() // e a mensagem passada pela exceção
    ];

    if(get_class($exception) === 'ValidationException') {
        $errors = $exception->getErrors();
    }
}

$alertType = '';

if($message['type'] === 'error') {//caso seja pego o typo igual a erro vai atribuir danger a alertType caso contrario vai ser o sucess
    $alertType = 'danger';
} else {
    $alertType = 'success';
}
?>

<?php if($message): //só vai criar se a mensagem tiver sido criada e a mensagem só será criada dentro do contexto de execução da variavel exception?> 
    <div role="alert"
        class="my-3 alert alert-<?= $alertType //forma de diminuir o php aqui?>"> <!-- div com class css do bootstrap -->

        <?= $message['message'] ?>
    </div>
<?php endif ?>