<?php 
include('header.php');
if(isset($_POST['cadastrar'])){
$id = $_POST['idUsuario'];
$situacao ="excluido";


include('connection.php');

$sqlproduto = "UPDATE usuario set situacao = '$situacao' 
where idUsuario = $id "; 

if(mysqli_query($con, $sqlproduto)){ 
include('footer.php');
echo "<script>alert('Usuario deletado com sucesso!</script>"; 
echo '<script>window.location.href = "index.php";</script>';


}else{ 
    echo "not ok";
}














}



?>