<?php 
include('header.php');

?>

<h2>Faça o seu login aqui!</h2>
<div class="row container">
<form method="post" action="session.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Login</label>
    <input name="login" type="text" class="form-control col-md-12" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input name="senha" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary" name="logar">Logar</button>
</form>
</div>


<?php

include('footer.php');

?>