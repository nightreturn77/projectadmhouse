<?php

include('header.php');
include('footer.php');

if(isset($_SESSION['login'])){ 

    include('lista.php');
}else{ 
    echo '<script>window.location.href = "acesso.php";</script>';
}





?>