<?php
include("header.php");

?>
<table class="table">
<h1 class="mt-4">Lista de Produtos</h1>
<tr>

<th>Nome</th>
<th>Preço</th>
<th>Validade</th>
<th>Data da Compra</th>
<th>Tipo do Produto</th>
<th>Quantidade</th>
<th>Medida</th>



</tr>


<?php

include("connection.php");

$query = "select * from produto where situacao = 'ativo'";
$consulta = mysqli_query($con, $query);
while($prod = mysqli_fetch_array($consulta)){

$nome = $prod['nome'];
$preco = $prod['preco'];
$validade = $prod['validade'];
$data = $prod['dataCompra'];
$tipo = $prod['tipo'];
$quantidade = $prod['quantidade'];
$medida = $prod['medida'];
$tipoMedida = $prod['tipoMedida'];




echo "<tr><td>$nome</td>
<td>R$ $preco</td>
<td>", date('d/m/y',strtotime($validade)), "</td>
<td>"; echo date('d/m/y',strtotime($data)); echo "</td>
<td>$tipo</td>
<td>$quantidade</td>
<td>$medida $tipoMedida</td>
<td><a href='atualizarProduto.php?id=".$prod['idproduto']." '>Atualizar</a></td>
<td><a href='deletarProduto.php?id=".$prod['idproduto']." '>Deletar</a></td>




";

}

?>


</table>
<?php

include("footer.php");
?>