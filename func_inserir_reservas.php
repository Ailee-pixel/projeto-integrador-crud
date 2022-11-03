<?php
require_once("conexao.php");

$nomecliente =  $_POST['nome_cliente']; 
$email = $_POST['email_cliente'];
$telefone = $_POST['telefone_cliente'];
$reserva = $_POST['data_reserva'];
$quantidade = $_POST['quantidade_pessoas'];


$mesAno = new DateTime($reserva);
    
$mesAno = $mesAno->format('d/m/Y H:i');



$inserir = "INSERT INTO tabela_cliente(nome_cliente, email_cliente, telefone_cliente, data_reserva, quantidade_pessoas) VALUES ('$nomecliente ', '$email', '$telefone', '$mesAno', '$quantidade')";
$salvar = mysqli_query($con,$inserir);


if(mysqli_insert_id($con)){
    header("Location:dashboard_consulta_reservas.php");
}else{
    HEADER("Location:dashboard_pagina_erro.php");
}
mysqli_close($con);



