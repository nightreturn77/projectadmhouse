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

$sqllogin = "select * from login where login='$login' and senha='$senha'";
$consultausuario = mysqli_query($con, $sqllogin);
$sqlarray = mysqli_fetch_array($consultausuario);
    
 if($sqlarray['login'] == $login && $sqlarray['senha'] == $senha){ 
     $_SESSION['login'] =  $login;
     echo '<script>alert("Login efetuado com sucesso!");</script>';
    header('location: index.php');
     
     
 }else {
     
     header('location: index.php');
 }  
    
    
    

}    
    
    
    
    
}


?>




