
<h2>Cadastrar  Estabelecimentos</h2>
<form action="cadastrar-estabelecimento.php" method="POST">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="nomeproduto">Nome</label>
            <input type="text" class="form-control" id="nomeproduto" placeholder="Nome" name="nome">
        </div>
        <div class="form-group col-md-6">
            <label for="tipoproduto">Logradouro</label>
            <input type="text" class="form-control" id="tipoproduto" placeholder="Tipo" name="logradouro">
        </div>
        <div class="form-group col-md-6">
            <label for="precoproduto">Número</label>
            <input type="number" class="form-control" id="precoproduto" placeholder="Preço" name="numero">
        </div>
        <div class="form-group col-md-6">
            <label for="validadeproduto">CEP</label>
            <input type="text" class="form-control" id="validadeproduto" name="cep">
        </div>

    </div>
    <div class="col-md-12">
    <button type="submit" class="btn btn-primary" name="cadastrar">Cadastrar</button>
</div>
</form>