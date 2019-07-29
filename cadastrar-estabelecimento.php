<?php 
include('header.php');
include('footer.php');
if(isset($_POST['cadastrar'])){

$nome = $_POST['nome']; 
$logradouro = $_POST['logradouro'];
$numero= $_POST['numero'];
$cep= $_POST['cep'];
$id = $_SESSION['idUsuario'];


include('connection.php');

$sqlproduto = "insert into mercado(nome,logradouro,numero,cep,idUsuario) 
values('$nome','$logradouro','$numero','$cep','$id')"; 

if(mysqli_query($con, $sqlproduto)){ 
echo "Cadastrado com sucesso!"; 
echo '<script>window.location.href = "index.php";</script>';


}else{ 
    echo "not ok";
}














}



?>