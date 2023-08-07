<?php 

$bco = 'usuarios';
$usuario = 'root';
$senha = '';

try
{
    $conexão = new PDO("mysql:host=localhost; dbname=$bco","$usuario",$senha);
    $conexão->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexão->exec("set names utf8");
}
catch (PDOException $erro){
    echo "Erro de conexão:" . $erro->getMessage();
}

?>