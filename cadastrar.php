<?php 

if(isset($_POST['cadastrar'])){

$nome = $_POST['nome']; 
$tipo = $_POST['tipo'];
$preco = $_POST['preco'];
$validade = $_POST['validade'];
$dataCompra = $_POST['dataCompra'];


include('connection.php');

$sqlproduto = "insert into produto(nome,tipo,preco,validade,dataCompra) 
values('$nome','$tipo','$preco','$validade','$dataCompra')"; 

if(mysqli_query($con, $sqlproduto)){ 
echo "ok";

}else{ 
    echo "not ok";
}














}



?>