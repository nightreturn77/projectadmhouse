<?php
include('header.php');
include('footer.php');




?>

<h2>Cadastrar de usuário</h2>
<form action="cadastrar-usuario.php" method="POST">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="nomeproduto">Nome</label>
            <input type="text" class="form-control" id="nomeproduto" placeholder="Nome" name="nome" required>
        </div>
        <div class="form-group col-md-6">
            <label for="idade">Idade</label>
            <input type="number" class="form-control" id="idade" placeholder="Digite sua idade" name="idade">
        </div>
        <div class="form-group col-md-6">
            <label for="precoproduto">Email</label>
            <input type="text" class="form-control" id="email" placeholder="Digite seu email" name="email">
        </div>
        <div class="form-group col-md-6">
            <label for="validadeproduto">login</label>
            <input type="text" class="form-control" id="login" name="login">
        </div>
        <div class="form-group col-md-6">
            <label for="dataproduto">Senha</label>
            <input type="text" class="form-control" id="senha" name="senha">
        </div>
        
    </div>
    <div class="col-md-12">
    <button type="submit" class="btn btn-primary" name="cadastrar">Cadastrar</button>
    <div>
</form>