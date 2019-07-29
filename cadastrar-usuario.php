<?php

if(isset($_POST['cadastrar'])){ 
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $email = $_POST['email'];
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $god = "banco_home_adm21745010/*";
    $tipo = 1;

    include('connection.php');

    $query = "insert into usuario(nome,idade,email,login,senha,godPassword,tipoUsuario) values('$nome','$idade',
    '$email','$login','$senha','$god',$tipo)"; 

    if(mysqli_query($con, $query)){ 
        echo "ok";
    }else{ 
        echo "not ok";
    }

}else{ 

echo '<script>alert("Não foi possível acessar está página"); alert("você está sendo redirecionado!");</script>';
echo '<script>window.location.href = "form-usuario.php";</script>';


}




?>