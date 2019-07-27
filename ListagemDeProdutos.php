<?php

include('header.php');
include('footer.php');

if(isset($_SESSION['login'])){ 

    include('lista.php');
}else{ 
    header('location: acesso.php');
}





?>