<?php

include('header.php');
include('footer.php');

if(isset($_SESSION['login'])){ 

include('listaestabelecimento.php');


}else{ 
    header('location: acesso.php');
}



?>