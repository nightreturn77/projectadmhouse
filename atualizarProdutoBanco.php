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
$mercado = $_POST['mercado'];
include('connection.php');

$searchid = "select * from mercado where nome = '$mercado'";
$consult = mysqli_query($con, $searchid);
$search = mysqli_fetch_array($consult);
$idmercado = $search['idMercado'];




$sqlproduto = "UPDATE produto set nome = '$nome', tipo='$tipo', preco='$preco', validade='$validade', 
dataCompra='$dataCompra',quantidade='$quantidade',medida='$medida',tipoMedida='$tipoMedida', idMercado = '$idmercado' where idproduto = $id "; 

if(mysqli_query($con, $sqlproduto)){ 
include('header.php');
include('footer.php'); 
echo '<script>window.location.href = "ListagemDeProdutos.php";</script>';



}else{ 
    echo "not ok";
}














}



?>