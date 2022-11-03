<?php
require_once("conexao.php");
$id = $_POST['id'];
$nomecliente =  $_POST['nome_cliente']; 
$email = $_POST['email_cliente'];
$telefone = $_POST['telefone_cliente'];
$reserva = $_POST['data_reserva'];
$quantidade = $_POST['quantidade_pessoas'];


$mesAno = new DateTime($reserva);
    
$mesAno = $mesAno->format('d/m/Y H:i');


$atualizar = "UPDATE tabela_cliente SET nome_cliente = '$nomecliente', email_cliente = '$email', telefone = '$telefone', data_reserva = '$mesAno', quantidade_pessoas = '$quantidade' WHERE id_cliente = $id";
$salvar = mysqli_query($con,$inserir);


if(mysqli_insert_id($con)){
    header("Location:dashboard_consulta_reservas.php");
}else{
    HEADER("Location:dashboard_pagina_erro.php");
}
mysqli_close($con);

