<?php 

include('header.php');
 
if(isset($_SESSION['login'])){ 
    include('form-estabelecimento.php');
}else{ 
    echo '<script>window.location.href = "acesso.php";</script>';
    echo '<script>window.location.href = "https://bhome-residencial.000webhostapp.com/acesso.php";</script>';

}

include("footer.php");



?>