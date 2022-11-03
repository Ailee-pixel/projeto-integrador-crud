<?php
require_once("conexao.php");
$id = $_POST['id'];
$nome =  $_POST['nome_produto']; 
$ingredientes = $_POST['ingredientes'];
$tipo = $_POST['tipo_produto'];
$precaucoes = $_POST['precaucoes'];
$volume = $_POST['volume_produto'];
$valor = $_POST['valor_produto'];




$atualizar = "UPDATE tabela_produto SET nome_produto= '$nome', ingredientes = '$ingredientes' WHERE id_produto = $id";
$salvar = mysqli_query($con,$atualizar);


if(mysqli_affected_rows($con)){
    HEADER("Location:dashboard_consulta_produtos.php");
    }else{
        HEADER("Location:dashboard_pagina_erro.php");
    }
    mysqli_close($con);