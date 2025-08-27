<?php
    include("conexao.php");
    
    $nome = mysqli_real_escape_string($conexao, $_POST['name']);
    $telefone = mysqli_real_escape_string($conexao, $_POST['phone']);
    $pessoas = mysqli_real_escape_string($conexao, $_POST['person']);
    $data = mysqli_real_escape_string($conexao, $_POST['reservation-date']);
    $horario = mysqli_real_escape_string($conexao, $_POST['horario']);
    $mensagem = mysqli_real_escape_string($conexao, $_POST['message']);

    $sql = "INSERT INTO reserva (nome, telefone, pessoas, data, horario, mensagem)
            VALUES ('$nome', '$telefone', '$pessoas', '$data', '$horario', '$mensagem')";

    if(mysqli_query($conexao, $sql)){
        echo "Reserva cadastrada com sucesso";
    } else{
        echo "Erro ao cadastrar reserva: " . mysqli_error($conexao);
    }

?>