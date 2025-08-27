<?php
    include("conexao.php");
    
    $nome=$_POST['nome_cad'];
    $email=$_POST['email_cad'];
    $cpf=$_POST['cpf_cad'];
    $senha=$_POST['senha_cad'];
    $numero=$_POST['fone_cad'];

    $sql="INSERT INTO cliente(nome, email, cpf, senha, numero)
            VALUES ('$nome', '$email', '$cpf', '$senha', '$numero')";
    if(mysqli_query($conexao, $sql)){
        echo "Usuario cadastrado com sucesso";
    }

    else{
        echo "Erro".mysqli_connect_error($conexao);
    }
    mysqli_close($conexao);
?>