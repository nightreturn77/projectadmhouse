<?php 
session_start();
session_destroy();
header('refresh:3, index.php');
echo "Você está sendo redirecionado";


?>