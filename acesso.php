<?php 
include('header.php');

?>

<h2 class="text-center">Entrar</h2>
<div class="row container-fluid">
<form class="mx-auto needs-validation" novalidate method="post" action="session.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Login</label>
    <input name="login" maxlength="15" type="text"required class="form-control col-md-12" 
    id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Login">
    <div class="invalid-feedback">
        Digite o login
      </div>
  </div>
  <div class="form-group">
    <label for="">Senha</label>
    <input name="senha" maxlength="30" id="" type="password" required class="form-control"  placeholder="Senha">
    <div class="invalid-feedback">
        Digite a senha
      </div>
  </div>
  <button type="submit"  class="btn btn-primary" name="logar">Logar</button>
</form>
</div>
<?php

include('footer.php');

?>