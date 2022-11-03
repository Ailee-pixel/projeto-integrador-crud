<?php
require("adm/conexao.php");
$nome_objeto = strval($_POST['nome']);
if($nome_objeto == null){
    $nome_objeto = "Pizza de Mussarela";
}
$query = "SELECT imagem_produto, nome_produto, valor_produto, ingredientes, precaucoes FROM tabela_produto WHERE nome_produto LIKE '$nome_objeto';";
$resultado = mysqli_query($con,$query);
$select_produto = mysqli_fetch_assoc($resultado);
?>

<div class="divisao">
    <img src="site/images/<?php echo $select_produto['imagem_produto'];?>"></src>
</div>
<div class="divisao_2">
    <h2 class="subtitle_product"><?php echo $select_produto['nome_produto'];?></h2>
    <p class="preco"><b>R$</b><?php echo number_format($select_produto['valor_produto'], 2);?></p>
</div>
<hr>
<div class="divisao_3">
    <p><b>Ingredientes:</b></br><?php echo $select_produto['ingredientes'];?></p>
    <p><b>Precauções:</b></br><?php echo $select_produto['precaucoes'];?></p>
</div>
