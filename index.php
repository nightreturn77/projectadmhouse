<?php

include('header.php');
include('footer.php');



?>

<h2>Cadastrar produtos</h2>
<form action="cadastrar.php" method="POST">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="nomeproduto">Nome</label>
            <input type="text" class="form-control" id="nomeproduto" placeholder="Nome" name="nome">
        </div>
        <div class="form-group col-md-6">
            <label for="tipoproduto">Tipo</label>
            <input type="text" class="form-control" id="tipoproduto" placeholder="Tipo" name="tipo">
        </div>
        <div class="form-group col-md-6">
            <label for="precoproduto">Preço</label>
            <input type="text" class="form-control" id="precoproduto" placeholder="Preço" name="preco">
        </div>
        <div class="form-group col-md-6">
            <label for="validadeproduto">Validade</label>
            <input type="date" class="form-control" id="validadeproduto" name="validade">
        </div>
        <div class="form-group col-md-6">
            <label for="dataproduto">Data da Compra</label>
            <input type="date" class="form-control" id="dataproduto" name="dataCompra">
        </div>

    </div>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>