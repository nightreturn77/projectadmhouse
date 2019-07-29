<?php

include('header.php');

if(isset($_SESSION['login'])){ 

include('listaestabelecimento.php');
include('footer.php');


}else{ 
    echo '<script>window.location.href = "acesso.php";</script>';
}


?>

<?php 



?>