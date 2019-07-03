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



</tr>


<?php

include("connection.php");

$query = "select * from produto";
$consulta = mysqli_query($con, $query);
while($prod = mysqli_fetch_array($consulta)){

$nome = $prod['nome'];
$preco = $prod['preco'];
$validade = $prod['validade'];
$data = $prod['dataCompra'];
$tipo = $prod['tipo'];




echo "<tr><td>$nome</td>
<td>$preco</td>
<td>$validade</td>
<td>$data</td>
<td>$tipo</td>




";

}

?>


</table>
<?php

include("footer.php");
?>