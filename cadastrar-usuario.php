<?php
include('header.php');
if(isset($_POST['cadastrar'])){ 
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $email = $_POST['email'];
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $god = "banco_home_adm21745010/*";
    $tipo = 1;
    $situacao = "ativo";

    include('connection.php');
    $queryrepeat = "select * from usuario where login = '$login'";
    $consult = mysqli_query($con, $queryrepeat);
    $repeat = mysqli_fetch_array($consult);
  


    if($login != $repeat['login']){
    $query = "insert into usuario(nome,idade,email,login,senha,godPassword,tipoUsuario,situacao) values('$nome','$idade',
    '$email','$login','$senha','$god',$tipo,'$situacao')"; 

    if(mysqli_query($con, $query)){ 
        echo '<script>window.location.href = "index.php";</script>';
    }else{ 
        echo "not ok";
    }
}else if($repeat['situacao'] == "excluido"){ 
    $query = "insert into usuario(nome,idade,email,login,senha,godPassword,tipoUsuario,situacao) values('$nome','$idade',
    '$email','$login','$senha','$god',$tipo,'$situacao')";

    if(mysqli_query($con, $query)){ 
        echo '<script>window.location.href = "index.php";</script>';
    }else{ 
        echo "not ok";
    }
    

} else{ 

    echo '<script>alert("Não foi possível Efetuar o cadastro"); alert("Usuário já existe!");</script>';
    echo '<script>window.location.href = "index.php";</script>';

}


}else{ 

echo '<script>alert("Não foi possível acessar está página"); alert("você está sendo redirecionado!");</script>';
//echo '<script>window.location.href = "form-usuario.php";</script>';


}


include('footer.php');
?>