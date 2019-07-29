<?php 
include('header.php');
include('connection.php');
$id= $_GET['id'];
$query = "select * FROM usuario where idUsuario= $id";
$sql = mysqli_query($con, $query);
//colocando os valores do banco dentro de variaveis separadas
$list = mysqli_fetch_array($sql);
$nome = $list['nome'];

echo '<form action="deletarUsuarioBanco.php" method="POST">
<div class="col-md-12">
<label>ID</label><input type="text" value="'.$id.'" name="idUsuario">
</div>
<div class="col-md-12">
<label>NOME</label><input type="text" value="'.$nome.'">

</div>
<div class="col-md-12">
<button type="submit" class="btn btn-primary" name="cadastrar">Deletar</button>
<div>';
include('footer.php');
?>