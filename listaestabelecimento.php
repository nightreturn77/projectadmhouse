<div class="container-fluid" id="backpage">
<table class="table">
<h1 class="mt-4">Lista de de Estabelecimentos</h1>
<tr>

<th>Nome</th>
<th>Logradouro</th>
<th>Nº</th>
<th>CEP</th>



</tr>


<?php

include("connection.php");

$query = "select * from mercado";
$consulta = mysqli_query($con, $query);
while($prod = mysqli_fetch_array($consulta)){

$nome = $prod['nome'];
$logradouro = $prod['logradouro'];
$numero = $prod['numero'];
$cep = $prod['cep'];


echo "<tr><td>$nome</td>
<td>$logradouro</td>
<td>$numero</td>
<td><a href='http://www.qualeocep.com.br/cep-$cep'>$cep</a></td>";

}

?>