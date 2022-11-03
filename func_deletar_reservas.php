<?php
require_once("conexao.php");

$id = $_POST['id'];
$deletar = "DELETE FROM tabela_cliente WHERE id_cliente = $id";
$excluir = mysqli_query($con, $deletar);

if(mysqli_affected_rows($con)){
    HEADER("Location:dashboard_consulta_reservas.php");
    }else{
        HEADER("Location:dashboard_pagina_erro.php");
    }
    mysqli_close($con);
     







?>