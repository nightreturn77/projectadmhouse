<?php 
include('header.php');
session_destroy();
echo '<script>alert("Você foi desconectado");</script>';
echo '<script>window.location.href = "index.php";</script>';
include('footer.php');

?>