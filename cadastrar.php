<?php 

if(isset($_POST['cadastrar'])){

$nome = $_POST['nome']; 
$tipo = $_POST['tipo'];
$preco = $_POST['preco'];
$validade = $_POST['validade'];
$dataCompra = $_POST['dataCompra'];
$quantidade = $_POST['quantidade'];
$medida = $_POST['medida'];
$tipoMedida = $_POST['tipoMedida'];


include('connection.php');

$sqlproduto = "insert into produto(nome,tipo,preco,validade,dataCompra,quantidade,medida,tipoMedida) 
values('$nome','$tipo','$preco','$validade','$dataCompra','$quantidade','$medida','$tipoMedida')"; 

if(mysqli_query($con, $sqlproduto)){ 
include('header.php');
include('footer.php');
echo "Cadastrado com sucesso!"; 
header("Refresh:3,index.php");
echo "Você está sendo redirecionado";


}else{ 
    echo "not ok";
}














}



?>