<?php  include('header.php'); ?>
<div class="container-fluid" id="backpage">
<table class="table">
<h1 class="mt-4">Lista de Produtos</h1>
<thead>
<tr>
<th scope="col">Id</th>
<th scope="col">Nome</th>
<th scope="col">Idade</th>
<th scope="col">Email</th>
<th scope="col">Login</th>
<th scope="col">Situacao</th>



</tr>
</thead>
<tbody>
<?php

include("connection.php");


$query ="select * from usuario where tipoUsuario = 1";
$queryconnect = mysqli_query($con, $query);
while($user = mysqli_fetch_array($queryconnect)){
$id = $user['idUsuario'];
$nome = $user['nome'];
$email = $user['email'];
$login = $user['login'];
$idade = $user['idade'];
$situacao = $user['situacao'];



echo "<tr><td>$id</td>
<td>$nome</td>
<td>$idade anos</td>
<td>$email</td>
<td>$login</td>
<td>$situacao</td>
<td><a href='deletarUsuario.php?id=".$id." '>Deletar</a></td>




";
}






?>

</tbody>
</table>
</div>
<?php

include('footer.php');

?>


