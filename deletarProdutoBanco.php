<?php 

if(isset($_POST['cadastrar'])){
$id = $_POST['idproduto'];
$situacao ="inativo";


include('connection.php');

$sqlproduto = "UPDATE produto set situacao = '.$situacao.' 
where idproduto = $id "; 

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