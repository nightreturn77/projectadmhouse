<?php 
include("header.php");
if(isset($_POST['cadastrar'])){

$nome = $_POST['nome']; 
$tipo = $_POST['tipo'];
$preco = $_POST['preco'];

//tratando os campos dates vazios
$datapadrao = date('2018/12/31');
$today = date('d/m/y');
//$datamaxima = date('d/m/Y', strtotime('+1 year'));
if($_POST['dataCompra'] != null and $_POST['dataCompra'] > $datapadrao){ 
    if($_POST['validade'] != null and $_POST['validade'] > $datapadrao ){
       $validade = $_POST['validade'];
       $dataCompra = $_POST['dataCompra'];

    }else{
        $dataCompra =$_POST['dataCompra'];
        $validade = date('y/m/d');
        echo '<script>alert("CAMPO VALIDADE VAZIO");</script>';
        echo '<script>alert("A DATA FOI COLOCADA COMO '.$today.'");</script>';

    }

}else if($_POST['validade'] != null and $_POST['validade'] > $datapadrao ){
    $dataCompra = date('y/m/d');
    $validade = $_POST['validade'];
    echo '<script>alert("CAMPO DATA DE COMPRA VAZIO");</script>';
        echo '<script>alert("A DATA FOI COLOCADA COMO '.$today.'");</script>';

}else{ 
    $dataCompra = date('y/m/d'); 
    $validade = date('y/m/d');
    echo '<script>alert("CAMPO DATA DE COMPRA E VALIDADE VAZIOS");</script>';
        echo '<script>alert("AS DATAS FORAM COLOCADAS COMO '.$today.'");</script>';
}
//fim do tratamento das dates

//tratando os campos "quantidade, medida e tipo medida"

//quantidade
if($_POST['quantidade'] != null){
$quantidade = $_POST['quantidade'];
}else{
    $quantidade = "";
    echo '<script>alert("CAMPO QUANTIDADE VAZIO");</script>';
}
//medida e tipomedida
if($_POST['medida'] != null){
$medida = $_POST['medida'];
$tipoMedida = $_POST['tipoMedida'];
}else{ 
    $medida = "";
    $tipoMedida = "";
    echo '<script>alert("CAMPO MEDIDA E TIPO DE MEDIDA VAZIOS");</script>';

}
$situacao = "Ativo";
$mercado = $_POST['mercado'];
//Produto baseado na id do usuário
$produtoUsuario = $_SESSION['idUsuario'];

include('connection.php');

$sqlidmercado = "select * from mercado where nome = '$mercado'";
$consulta = mysqli_query($con, $sqlidmercado);
$mercadotest = mysqli_fetch_array($consulta);
$idmercado = $mercadotest['idMercado'];

$sqlproduto = "insert into produto(nome,tipo,preco,validade,dataCompra,quantidade,medida,tipoMedida,situacao,idMercado, idUsuario) 
values('$nome','$tipo','$preco','$validade','$dataCompra','$quantidade','$medida','$tipoMedida','$situacao','$idmercado','$produtoUsuario')"; 

if(mysqli_query($con, $sqlproduto)){ 
echo '<script>window.location.href = "CadastroDeProdutos.php";</script>';
//echo '<script>window.location.href = "https://bhome-residencial.000webhostapp.com/CadastroDeProdutos.php";</script>';


}else{ 

    echo "Erro ao enviar formulário";
    echo '<script>window.location.href = "index.php";</script>';
    //echo '<script>window.location.href = "https://bhome-residencial.000webhostapp.com/";</script>';

}










}




include("footer.php");


?>
