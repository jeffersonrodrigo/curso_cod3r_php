<?php
session_start();// mesmo q  seja só para limpar a sessão antes tem q entrar nela
session_destroy();// é o responsável por limpar sessão
header('Location: basico_sessao.php'); // Ao encontrar essa linha ele irá retornar para a página automáticamente