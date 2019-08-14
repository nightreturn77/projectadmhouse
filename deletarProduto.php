


<?php 

include('header.php');
if(!isset($_SESSION['login'])){ 
   echo '<script>location.href="acesso.php";</script>';
}else {
   



include('connection.php');
$id= $_GET['id'];
$query = "select * FROM produto where idproduto = $id";
$sql = mysqli_query($con, $query);
//colocando os valores do banco dentro de variaveis separadas
$list = mysqli_fetch_array($sql);
$nome = $list['nome'];

//buscando no banco de dados o produto relacionado com aquele usuário
$queryprod = "select idUsuario from produto where idProduto = $id";
$queryprodb = mysqli_query($con, $queryprod);
$idUsuario = mysqli_fetch_array($queryprodb);


if($_SESSION['idUsuario'] == $idUsuario['idUsuario'] or $_SESSION['tipoUsuario']  == 2){
echo '<form action="deletarProdutoBanco.php" method="POST">
<div class="col-md-12">
<label>ID</label><input type="text" value="'.$id.'" name="idproduto">
</div>
<div class="col-md-12">
<label>NOME</label><input type="text" value="'.$nome.'">

</div>
<div class="col-md-12">
<button type="submit" class="btn btn-primary" name="cadastrar">Deletar</button>
</div></form>';
}else{ 

echo '<script>alert("Não é possível acessar está página");</script>';
echo '<script>location.href="index.php";</script>';

}
include('footer.php');
}
?>