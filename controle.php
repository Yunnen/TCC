<?php
session_start();
// Encerre a sessão
session_destroy();
// Redirecione para a página inicial ou qualquer outra página após o logout
header('Location: index.php'); // Substitua 'index.php' pelo caminho correto da página inicial
exit;
?>