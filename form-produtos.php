<?php

//include('header.php');
//include('footer.php');



?>
<h2>Cadastrar produtos</h2>
<form action="cadastrar.php" method="POST">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="nomeproduto">Nome</label>
            <input type="text" class="form-control" id="nomeproduto" placeholder="Nome" name="nome" required>
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
        <div class="form-group col-md-6">
            <label for="dataproduto">Quantidade</label>
            <input type="number" class="form-control" id="dataproduto" name="quantidade" placeholder="Digite a quantidade">
        </div>
        <div class="form-group col-md-6">
            <label for="dataproduto">Medida</label>
            <input type="number" class="form-control" id="dataproduto" name="medida" placeholder="Digite medida">
        </div>
        <div class="form-group col-md-6">
      <label for="inputMedida">Tipo de Medida</label>
      <select id="inputMedida" class="form-control" name="tipoMedida">
        <option  >L</option>
        <option >KG</option>
        <option >G</option>
        <option >Ml</option>
      </select>
    </div>
    </div>
    <div class="form-group col-md-6">
    <label for="dataproduto">Mercado ou Estabelecimento</label>
    <select name="mercado" id="" class="form-control" required>
        <option value="">Selectione o mercado/estabelecimento </option>
        <?php
            include "connection.php";
            $query = "select * from mercado";
            $consulta = mysqli_query($con, $query);
            while($m = mysqli_fetch_array($consulta)){
                $mercado = $m['nome'];
                echo "<option value='$mercado'>$mercado</option>";
            }
        ?>
</select>
    </div>
    <div class="col-md-12">
    <button type="submit" class="btn btn-primary" name="cadastrar">Cadastrar</button>
        </div>
</form>