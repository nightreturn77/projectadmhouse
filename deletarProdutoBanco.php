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
//echo "<script>alert('Produto deletado com sucesso!</script>"; 
header("location: ListagemDeProdutos.php");


}else{ 
    echo "not ok";
}














}



?>