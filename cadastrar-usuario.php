<?php
include('header.php');
if(isset($_POST['cadastrar'])){ 
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $email = $_POST['email'];
    $login = $_POST['login'];
    $senha = md5($_POST['senha']);
    $god = md5("banco_home_adm21745010/*");
    $tipo = 1;
    $situacao = "ativo";

    include('connection.php');
    //verifica a existência do usuário
    $queryrepeat = "select * from usuario where login = '$login'";
    $consult = mysqli_query($con, $queryrepeat);
    $repeat = mysqli_fetch_array($consult);
    

    //estrutura condicional que fará a verificação de usuário.
    if($login != $repeat['login']){
    $query = "insert into usuario(nome,idade,email,login,senha,godPassword,tipoUsuario,situacao) values('$nome','$idade',
    '$email','$login','$senha','$god',$tipo,'$situacao')"; //caso a variavel LOGIN seja diferente da variavel de verificação o cadastro é efetuado

    if(mysqli_query($con, $query)){
        echo '<script>alert("Cadastrado com sucesso!")</script>' ;
        echo '<script>window.location.href = "index.php";</script>';
        //echo '<script>window.location.href = "https://bhome-residencial.000webhostapp.com/";</script>';

    }else{ 
        echo '<script>alert("Não foi possível efetuar o cadastro!")</script>' ;
        echo '<script>alert("Usuário existe!")</script>' ;
        echo '<script>window.location.href = "index.php";</script>';
        //echo '<script>window.location.href = "https://bhome-residencial.000webhostapp.com/";</script>';
    }
    // esta estrutura condicional fica responsavel pela verificação da situação, se o usuário existe porém foi desativado/excluido
}else if($repeat['situacao'] != $situacao){ 
    $query = "insert into usuario(nome,idade,email,login,senha,godPassword,tipoUsuario,situacao) values('$nome','$idade',
    '$email','$login','$senha','$god',$tipo,'$situacao')"; 

    if(mysqli_query($con, $query)){ 
        echo '<script>alert("Cadastrado com sucesso!")</script>' ;

        echo '<script>window.location.href = "index.php";</script>';
        //echo '<script>window.location.href = "https://bhome-residencial.000webhostapp.com/";</script>';
    }else{ 
        echo '<script>alert("Não foi possível efetuar o cadastro!")</script>' ;
        echo '<script>alert("Usuário existe!")</script>' ;
        echo '<script>window.location.href = "index.php";</script>';
        //echo '<script>window.location.href = "https://bhome-residencial.000webhostapp.com/";</script>';
        
    }
    

} else{ 

    echo '<script>alert("Não foi possível Efetuar o cadastro"); alert("Usuário já existe!");</script>';
    echo '<script>window.location.href = "index.php";</script>';

}


}else{ 

echo '<script>alert("Não foi possível acessar está página"); alert("você está sendo redirecionado!");</script>';
//echo '<script>window.location.href = "form-usuario.php";</script>';
echo '<script>window.location.href = "index.php";</script>';
//echo '<script>window.location.href = "https://bhome-residencial.000webhostapp.com/";</script>';

}


include('footer.php');
?>