<?php 
include('header.php');
include('connection.php');
$id= $_GET['id'];
$query = "select * FROM produto where idproduto = $id";
$sql = mysqli_query($con, $query);
//colocando os valores do banco dentro de variaveis separadas
$list = mysqli_fetch_array($sql);
$nome = $list['nome'];
$tipo = $list['tipo'];
$validade = $list['validade'];
$dataCompra = $list['dataCompra'];
$preco = $list['preco'];
$quantidade = $list['quantidade'];
$medida = $list['medida'];
$tipoMedida = $list['tipoMedida'];

echo '

<form action="atualizarProdutoBanco.php" method="POST">
    <div class="form-row">
    <div class="form-group col-md-12">
    <label for="nomeproduto">ID</label>
    <input name="idproduto" value="'.$id.'">
    </div>
        <div class="form-group col-md-6">
            <label for="nomeproduto">Nome</label>
            <input type="text" class="form-control" id="nomeproduto" placeholder="Nome" name="nome" value="'.$nome.'">
        </div>
        <div class="form-group col-md-6">
            <label for="tipoproduto">Tipo</label>
            <input type="text" class="form-control" id="tipoproduto" placeholder="Tipo" name="tipo" value="'.$tipo.'">
        </div>
        <div class="form-group col-md-6">
            <label for="precoproduto">Preço</label>
            <input type="text" class="form-control" id="precoproduto" placeholder="Preço" name="preco" value="'.$preco.'">
        </div>
        <div class="form-group col-md-6">
            <label for="validadeproduto">Validade</label>
            <input type="date" class="form-control" id="validadeproduto" name="validade" value="'.$validade.'">
        </div>
        <div class="form-group col-md-6">
            <label for="dataproduto">Data da Compra</label>
            <input type="date" class="form-control" id="dataproduto" name="dataCompra" value="'.$dataCompra.'">
        </div>
        <div class="form-group col-md-6">
            <label for="dataproduto">Quantidade</label>
            <input type="number" class="form-control" id="dataproduto" name="quantidade" value="'.$quantidade.'">
        </div>
        <div class="form-group col-md-6">
            <label for="dataproduto">Medida</label>
            <input type="number" class="form-control" id="dataproduto" name="medida" value="'.$medida.'">
        </div>
        <div class="form-group col-md-6">
      <label for="inputMedida">Tipo de Medida</label>
      <select id="inputMedida" class="form-control" name="tipoMedida">
        <option  >L</option>
        <option >KG</option>
        <option >G</option>
        <option >Ml</option>
      </select>
      <div class="form-group col-md-6">
    <label for="dataproduto">Mercado ou Estabelecimento</label>
    <select name="mercado" id="" class="form-control" required>
        <option value="">Selectione o mercado/estabelecimento </option>
            ';
            $query = "select * from mercado";
            $consulta = mysqli_query($con, $query);
            while($m = mysqli_fetch_array($consulta)){
                $mercado = $m['nome'];
                echo "<option value='$mercado'>$mercado</option>";
            }
        echo '
</select>
    </div>

    </div>
    <div class="col-md-12">
    <button type="submit" class="btn btn-primary" name="cadastrar">Cadastrar</button>
    <div>
</form>




';
include('footer.php');
?>