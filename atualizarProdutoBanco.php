<?php 

if(isset($_POST['cadastrar'])){

$id = $_POST['idproduto'];
$nome = $_POST['nome']; 
$tipo = $_POST['tipo'];
$preco = $_POST['preco'];
$validade = $_POST['validade'];
$dataCompra = $_POST['dataCompra'];
$quantidade = $_POST['quantidade'];
$medida = $_POST['medida'];
$tipoMedida = $_POST['tipoMedida'];


include('connection.php');

$sqlproduto = "UPDATE produto set nome = '$nome', tipo='$tipo', preco='$preco', validade='$validade', 
dataCompra='$dataCompra',quantidade='$quantidade',medida='$medida',tipoMedida='$tipoMedida' where idproduto = $id "; 

if(mysqli_query($con, $sqlproduto)){ 
include('header.php');
include('footer.php');
echo "Alterado com sucesso!"; 
header("Refresh:3,index.php");
echo "Você está sendo redirecionado";


}else{ 
    echo "not ok";
}














}



?>