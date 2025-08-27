<?php
if(isset($_POST['Logar'])){
    $nome_login = $_POST['nome_login'];
    $email_login = $_POST['email_login'];

    // Conectar ao banco de dados
    $conexao = mysqli_connect("localhost", "root", "", "banco_hamburgueria");

    // Verificar se o login está correto
    $query = "SELECT * FROM cliente WHERE nome = '$nome_login' AND email = '$email_login'";
    $resultado = mysqli_query($conexao, $query);
    $row = mysqli_fetch_array($resultado);

    if($row){
        // Login correto - redirecionar para o site principal
        header('Location: index.html');
        exit();
    } else{
        // Login incorreto - exibir mensagem de erro
        echo 'Dados Invalidos';
    }
}
?>
