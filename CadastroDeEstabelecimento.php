<?php 

include('header.php');
include('footer.php');
 
if(isset($_SESSION['login'])){ 
    include('form-estabelecimento.php');
}else{ 
    header('location: acesso.php');
}





?>