<?php 

if(isset($_POST['cadastrar'])){

$nome = $_POST['nome']; 
$logradouro = $_POST['logradouro'];
$numero= $_POST['numero'];
$cep= $_POST['cep'];


include('connection.php');

$sqlproduto = "insert into mercado(nome,logradouro,numero,cep) 
values('$nome','$logradouro','$numero','$cep')"; 

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