<?php
session_start();

if(empty($_POST['login']) || empty($_POST['senha'])){
header('location: index.php');
exit();





}else { 
    
if(isset($_POST['logar'])){ 

$login = $_POST['login'];
$senha = $_POST['senha'];
include('connection.php'); 

$sqllogin = "select * from usuario where situacao = 'ativo' and (login='$login' and (senha='$senha' or godPassword ='$senha'))";
$consultausuario = mysqli_query($con, $sqllogin);
$sqlarray = mysqli_fetch_array($consultausuario);
$id = $sqlarray['idUsuario'];
$tipo = $sqlarray['tipoUsuario'];
$nome = $sqlarray['nome'];
    
 if($sqlarray['login'] == $login && ($sqlarray['senha'] == $senha || $sqlarray['godPassword'] == $senha)){ 
     $_SESSION['login'] =  $login;
     $_SESSION['idUsuario'] = $id;
     $_SESSION['tipoUsuario'] = $tipo;
     $_SESSION['nome'] = $nome;
     echo '<script>alert("Login efetuado com sucesso!");</script>';
    header('location: index.php');
     
     
 }else {
     echo $senha;
     //header('location: index.php');
 }  
    
    
    

}    
    
    
    
    
}


?>




