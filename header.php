<?php
  if(!isset($_SESSION)){
  session_start();
  }
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/layout.css">
    <title>Banco Home</title>
</head>

<body class="container-fluid">
    <div class="cover">
        <a href="index.php"><img class="rounded mx-auto d-block" src="img/logo2.png" alt="logo.jpg"
                title="Banco Home" />
        </a>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light menuradius " id="menu">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado"
            aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse " id="conteudoNavbarSuportado">
            <ul class="navbar-nav mx-auto font-weight-bold">
                <li class="nav-item"><a class="nav-link" href="index.php">Inicio <span class="sr-only">(página atual)</span></a>
                      </li>
                <li class="nav-item">
                    <a class="nav-link" href="form-usuario.php">Cadastre-se</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Sobre.php">Sobre</a>
                </li>
                <?php 
      include('connection.php');
      if(!isset($_SESSION['login'])){
        echo '<li class="nav-item">
        <a class="nav-link" href="acesso.php">Login</a>
      </li>';
      
      }else {
        $tipo = $_SESSION['tipoUsuario'];
      if($tipo == 1){
        echo '<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-uppercase active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          '.$_SESSION['login'].'
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="CadastroDeProdutos.php">Cadastro de Produtos</a>
          <a class="dropdown-item" href="ListagemDeProdutos.php">Meus Produtos</a>
          <a class="dropdown-item" href="CadastroDeEstabelecimento.php">Cadastro de Estabelecimentos</a>
          <a class="dropdown-item" href="ListagemDeEstabelecimento.php">Lista de Estabelecimentos</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="logout.php">Sair</a>
        </div>
      </li>';

      }else{ 
        echo '<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-uppercase active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          '.$_SESSION['login'].'
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="CadastroDeProdutos.php">Cadastro de Produtos</a>
          <a class="dropdown-item" href="ListagemDeProdutos.php">Meus Produtos</a>
          <a class="dropdown-item" href="Listausuario.php">Usuários</a>
          <a class="dropdown-item" href="CadastroDeEstabelecimento.php">Cadastro de Estabelecimentos</a>
          <a class="dropdown-item" href="ListagemDeEstabelecimento.php">Lista de Estabelecimentos</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="logout.php">Sair</a>
        </div>
      </li>';

      }
      }
?>
            </ul>
        </div>
    </nav>

    <!-- Modal Login -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Área de Acesso</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="session.php">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Login</label>
                            <input name="login" type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Senha</label>
                            <input name="senha" type="password" class="form-control" id="exampleInputPassword1"
                                placeholder="Password">
                        </div>
                        <div class="form-group form-check">
                        </div>
                        <button type="submit" class="btn btn-primary" name="logar">Logar</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <div class="container-fluid cover container2" id="corpo">