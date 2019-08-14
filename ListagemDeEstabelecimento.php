<?php

include('header.php');

if(isset($_SESSION['login'])){ 

include('listaestabelecimento.php');

}else{ 
    echo '<script>window.location.href = "acesso.php";</script>';
}

include('footer.php');

?>

<?php 



?>