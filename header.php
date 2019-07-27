<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/layout.css">
    <title>Banco Home</title>
  </head>
  <body class="container-fluid">

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Banco Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="CadastroDeProdutos.php">Cadastro de Produtos <span class="sr-only">(página atual)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ListagemDeProdutos.php">Lista de Produtos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="CadastroDeEstabelecimento.php">Cadastro de Estabelecimentos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ListagemDeEstabelecimento.php">Lista de Estabelecimentos</a>
      </li>
      <?php 
      include('connection.php');
      session_start();
      if(!isset($_SESSION['login'])){
        echo '<li class="nav-item"><button  type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Login
      </button></li>';
      
      }else{
        echo '<li class="nav-item" ><button type="button" class="btn btn-primary">
      '.$_SESSION['login'].'
    </button></li>';

      }
?>
<?php 
if(isset($_SESSION['login'])){
echo '<li class="nav-item">';
echo '<a href="logout.php" ><button type="button" class="btn btn-primary">
      Logout
    </button></a>';
  echo "</li>";

}
?>
    </ul>
  </div>
</nav>

<!-- Modal Login -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
    <input name="login" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input name="senha" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group form-check">
  </div>
  <button type="submit" class="btn btn-primary" name="logar">Logar</button>
</form>
      </div>

    </div>
  </div>
</div>