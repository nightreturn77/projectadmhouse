<?php

include('header.php');

if(isset($_SESSION['login'])){ 

    include('lista.php');
    include('footer.php');
}else{ 
    echo '<script>window.location.href = "acesso.php";</script>';
}





?>