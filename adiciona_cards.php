<?php
    require("adm/conexao.php");
    $id_objeto = strval($_POST['id']);
    
    $query = "SELECT nome_produto, imagem_produto, id_produto FROM tabela_produto WHERE tipo_produto LIKE '$id_objeto';";
    $resultado = mysqli_query($con,$query);

    $array_image = array();
    $array_nome_produto = array();
    $valor_array = 0;

while($busca = $resultado->fetch_assoc()){
    $array_image[$valor_array] = $busca["imagem_produto"];
    $array_nome_produto[$valor_array] = $busca["nome_produto"];
    $array_id_produto[$valor_array] = $busca["id_produto"];
    $valor_array = $valor_array + 1;
}


    $quantidade_resultados = $valor_array;
    $quantidade_cards = 0;
    $numero_espaco = 0;
    $valor_array = 0;
    $espacamento = "<div class='espacamento'></div>";
    
while($quantidade_cards < $quantidade_resultados){
    echo "<a href='javascript:void(0)'><div class='card' id='$array_id_produto[$valor_array]' title='$array_nome_produto[$valor_array]' onclick='add(this)'><img src='site/images/$array_image[$valor_array]' class='img'><p class='text_image'>$array_nome_produto[$valor_array]</p></div></a>";
    $quantidade_cards = $quantidade_cards + 1;
    $valor_array = $valor_array + 1;
                            
if($quantidade_resultados == 0){
    break;
}        
    
    $numero_espaco = $numero_espaco + 1;
}

?>
