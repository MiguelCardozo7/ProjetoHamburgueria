<?php 
   $hostname = "localhost";
   $bancodedados = "banco_hamburgueria";
   $usuario = "root";
   $senha = "";
   
    $conexao = new mysqli($hostname, $usuario, $senha, $bancodedados);
    if ($conexao->connect_errno) {
        echo "falha ao conectar:(" . $conexao->connect_errno . ")" . $conexao->connect_errno;
    }
    else
        echo "Conectado ao Banco de Dados";
    
?>